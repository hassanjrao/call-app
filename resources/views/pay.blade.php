<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_LIVE_API_USERNAME') }}&currency=EUR&vault=true">
    </script>
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">

    <title>Checkout</title>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader"
        style="display: none; position: fixed; width: 100%; height: 100%; top: 0; left: 0; background: rgba(255, 255, 255, 0.7); z-index: 1050; align-items: center; justify-content: center;">
        <div class="spinner"
            style="border: 5px solid rgba(0, 0, 0, .1); width: 36px; height: 36px; border-radius: 50%; border-left-color: #FF1849; animation: spin 1s linear infinite;">
        </div>
    </div>

    <style>
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    <div class="checkout-container">
        <div class="order-summary">
            <div class="head">
                <h3>Order Summary</h3>
                <ion-icon id="toggleSummary" name="chevron-down-outline"></ion-icon>
            </div>

            <div class="overview">
                <p class="pack">{{ $plan->name }} x 1 <span>€{{ $plan->price }}</span></p>
                <p class="total">Total <span>€{{ $plan->price }}</span></p>
            </div>
        </div>
        <div class="billing-info">
            @csrf
            <input type="hidden" name="plan_id" value="{{ $plan->id }}">
            @if ($errors->any())
                <div style="color: red; padding: 10px; margin-bottom: 20px; border: 1px solid red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="input-fields">
                <label for="name">Name </label>
                <input name="name" type="text" id="name" placeholder="Your Full Name" >
                <span id="name-error" style="color: red; display: none;">Please enter both your first and last
                    names.</span>
            </div>
            <div class="input-fields">
                <label for="email">Email <span>*</span></label>
                <input name="email" type="email" id="email" placeholder="your@email.com" required>
                <span id="email-error" style="color: red; display: none;">Please enter both your first and last
                    names.</span>
            </div>
            <div class="input-fields">
                <label for="phone">Phone </label>
                <input name="phone" type="tel" id="phone" placeholder="Your Phone Number" >
                <span id="phone-error" style="color: red; display: none;">Please enter both your first and last
                    names.</span>
            </div>


            <!-- Stripe Payment Form -->
            <div id="stripe-payment-form" style="display:none; width: 75%">
                <div id="payment-message" class="alert alert-info" style="display: none;"></div>
                <form action="" method="post" id="payment-form">
                    <div id="payment-element"></div>
                    <button type="submit" id="submit" class="btn">
                        <button class="stripe-btn" id="button-text">Pay now</button>
                        <span id="spinner" style="display: none;">Processing...</span>
                    </button>
                </form>
            </div>

            <!-- PayPal Button Container -->
            <div id="paypal-button-container" style=" width: 75%;"></div>

            <p class="secure">
                <ion-icon name="lock-closed-outline"></ion-icon></i> this is a secure encrypted payment
            </p>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const orderSummary = document.querySelector('.overview');
        const toggleSummary = document.getElementById('toggleSummary');

        toggleSummary.addEventListener('click', function() {
            console.log("Hello")
            orderSummary.classList.toggle('active')
        });
    </script>
    <script>
      function validateForm() {
            var isValid = true; // Initialize validation flag

            // Add regex check for email
            var emailInput = document.getElementById('email').value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Simple regex for email validation

            if (!emailInput || !emailRegex.test(emailInput)) {
                document.getElementById('email-error').style.display = 'block'; // Show error message
                document.getElementById('email-error').innerText = 'Please enter a valid email address.';
                isValid = false;
            } else {
                document.getElementById('email-error').style.display = 'none';
            }

            return isValid; // Return the overall form validity
        }
        paypal.Buttons({
            createSubscription: function(data, actions) {
                if (!validateForm()) {
                    alert('Please fill in all required fields before proceeding.');
                    return Promise.reject(); // Reject the promise to stop the subscription creation
                }

                return actions.subscription.create({
                    plan_id: "{{ $plan->paypal_id }}"

                });
            },
            onApprove: function(data, actions) {
                document.getElementById('preloader').style.display = 'flex';


                var name = document.getElementById('name').value;
                var email = document.getElementById('email').value;
                var phone = document.getElementById('phone').value;

                fetch('/payment', {
                    method: 'post',
                    headers: {
                        'content-type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        subscriptionID: data
                            .subscriptionID, // Use the subscription ID provided by PayPal
                        name: name,
                        email: email,
                        phone: phone,
                        plan_id: '{{ $plan->id }}', // Make sure this is the correct plan ID,
                        price: '{{ $plan->price }}',
                        planName: '{{ $plan->name }}',
                        _token: '{{ csrf_token() }}' // Laravel CSRF token
                    })
                }).then(response => {
                    if (response.ok) {
                        window.location.href = '{{ route('thankYou') }}'; // Redirect user
                    } else {
                        // Handle errors, show message to the user
                        document.getElementById('preloader').style.display = 'none';
                        alert('There was an issue with the subscription process. Please try again.');
                    }
                });
            }
        }).render('#paypal-button-container');



        // Show a spinner on payment submission
        function setLoading(isLoading) {
            if (isLoading) {
                // Disable the button and show a spinner
                document.querySelector("#submit").disabled = true;
                document.querySelector("#spinner").style.display = "inline";
                document.querySelector("#button-text").style.display = "none";
            } else {
                document.querySelector("#submit").disabled = false;
                document.querySelector("#spinner").style.display = "none";
                document.querySelector("#button-text").style.display = "inline";
            }
        }
    </script>


</body>

</html>
