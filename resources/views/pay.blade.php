<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.paypal.com/sdk/js?client-id=ARb7eoOI7qwwmkyiQnEYjnyvRObHQTleRUMZffU_SCtNwtB47LW3C0zLRKt7eQIDZF5fK9JnXBi442HI&currency=EUR&vault=true" ></script>
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">

    <title>Checkout</title>
</head>

<body>
<!-- Preloader -->
<div id="preloader" style="display: none; position: fixed; width: 100%; height: 100%; top: 0; left: 0; background: rgba(255, 255, 255, 0.7); z-index: 1050; align-items: center; justify-content: center;">
    <div class="spinner" style="border: 5px solid rgba(0, 0, 0, .1); width: 36px; height: 36px; border-radius: 50%; border-left-color: #FF1849; animation: spin 1s linear infinite;"></div>
</div>

<style>
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<div class="checkout-container" >
    <div class="order-summary">
        <h3>Order Summary</h3>
        <p class="pack">{{ $plan->name }} x 1 <span>€{{ $plan->price }}</span></p>
        <p class="total">Total <span>€{{ $plan->price }}</span></p>
    </div>
    <div class="billing-info" >
        @csrf
        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
        @if($errors->any())
            <div style="color: red; padding: 10px; margin-bottom: 20px; border: 1px solid red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="input-fields">
            <label for="first_name">First Name<span>*</span></label>
            <input name="first_name" type="text" id="first_name" placeholder="Your First Name">
        </div>
        <div class="input-fields">
            <label for="last_name">Last Name <span>*</span></label>
            <input name="last_name" type="text" id="last_name" placeholder="Your Last Name">
        </div>
        <div class="input-fields">
            <label for="email">Email <span>*</span></label>
            <input name="email" type="email" id="email" placeholder="your@email.com" required>
        </div>
        <div class="input-fields">
            <label for="phone">Phone <span>*</span></label>
            <input name="phone" type="tel" id="phone" placeholder="Your Phone Number" required>
        </div>
{{--        <div class="payment-methods">--}}
{{--            <!-- PayPal Payment -->--}}
{{--            <label>--}}
{{--                <div class="logo-paypal">--}}
{{--                    <input type="radio" name="payment_method" value="paypal">--}}
{{--                    <img src="{{ asset('img/SVG/paypal.png') }}" alt="">--}}
{{--                </div>--}}
{{--            </label>--}}


{{--            <!-- Stripe Payment -->--}}
{{--            <label class="stripe">--}}
{{--                <div>--}}

{{--                    <input type="radio" name="payment_method" value="stripe" checked>--}}
{{--                    <span  >Credit Card</span>--}}
{{--                </div>--}}

{{--                <div id="payment-message" style="display: none;" class="alert alert-info"></div>--}}

{{--                <form action="" method="post" id="payment-form">--}}
{{--                    <div id="payment-element"></div>--}}
{{--                    <button type="submit" id="submit" class="btn">--}}
{{--                        <span id="button-text">Pay now</span>--}}
{{--                        <span id="spinner" style="display: none;">Processing...</span>--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </label>--}}



{{--        </div>--}}

{{--        <div class="pay" >--}}
{{--            <div id="paypal-button-container" style="display:none;"></div>--}}
{{--            <button type="submit">Pay</button>--}}
{{--        </div>--}}

        <div class="payment-methods">
            <!-- PayPal Payment -->
            <label>
                <div class="logo-paypal">
                    <input type="radio" name="payment_method" value="paypal">
                    <img src="{{ asset('img/SVG/paypal.png') }}" alt="">
                </div>
            </label>

            <!-- Stripe Payment -->
            <label class="stripe">
                <div>
                    <input type="radio" name="payment_method" value="stripe" checked>
                    <span>Credit Card</span>
                </div>
            </label>
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
        <div id="paypal-button-container" style="display:none; width: 75%;"></div>

        <p class="secure">
            <ion-icon name="lock-closed-outline"></ion-icon></i> this is a secure encrypted payment
        </p>
    </div>
</div>
<script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>





        paypal.Buttons({
            createSubscription: function(data, actions) {

                return actions.subscription.create({
                    /* Creates the subscription */
                    plan_id: 'P-4TN19996FG6989713MXZEO5Q'
                });

    },
        onApprove: function(data, actions) {
            document.getElementById('preloader').style.display = 'flex';
        return actions.order.capture().then(function(details) {
        // Retrieve user input from the form
        var firstName = document.getElementById('first_name').value;
        var lastName = document.getElementById('last_name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value; // Assuming you want to send this as well

        // Call your server to save the transaction
        fetch('/payment', {
        method: 'post',
        headers: {
        'content-type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
        body: JSON.stringify({
        orderID: data.orderID,
        first_name: firstName,
        last_name: lastName,
        email: email,
        phone: phone,
        plan_id: '{{ $plan->id }}', // Send the plan ID
        _token: '{{ csrf_token() }}' // Laravel CSRF token
    })
    }).then(response => {
        if (response.ok) {
        console.log("OK")
        window.location.href = '{{ route("thankYou") }}'; // Redirect user
    }
    });
    });
    }
    }).render('#paypal-button-container');



        // Toggle payment method visibility
        document.querySelectorAll('input[name="payment_method"]').forEach(input => {
            input.addEventListener('change', function() {
                togglePaymentMethod(this.value);
            });
        });

        function togglePaymentMethod(method) {
            const paypalContainer = document.getElementById('paypal-button-container');
            const stripeForm = document.getElementById('stripe-payment-form');
            if (method === 'paypal') {
                paypalContainer.style.display = 'block';
                stripeForm.style.display = 'none';
            } else if (method === 'stripe') {
                paypalContainer.style.display = 'none';
                stripeForm.style.display = 'block';
                initializeStripe(); // Initialize Stripe when Stripe is selected
            }
        }


        const stripe = Stripe("{{ env('STRIPE_KEY') }}");

        let elements;

        initialize();

        document
            .querySelector("#payment-form")
            .addEventListener("submit", handleSubmit);



        let clientSecret = null; // Define clientSecret at a higher scope

        // Modify the initialize function to update the clientSecret variable
        async function initialize() {
            const response = await fetch("{{ route('payment.stripe', $plan->id) }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ "_token": "{{ csrf_token() }}" }),
            });
            const data = await response.json();
            clientSecret = data.clientSecret; // Update the clientSecret with the response
            console.log(clientSecret)
            elements = stripe.elements({ clientSecret });

            const paymentElement = elements.create("payment");
            paymentElement.mount("#payment-element");
        }



        async function handleSubmit(e) {
            e.preventDefault();
            setLoading(true);
            const { error } = await stripe.confirmPayment({
                elements,
                confirmParams: {
                    // Make sure to change this to your payment completion page
                    return_url: "{{route('thankYou')}}",
                },
            });

            if (error.type === "card_error" || error.type === "validation_error") {
                showMessage(error.message);
            } else {
                showMessage("An unexpected error occurred.");
            }

            setLoading(false);
        }

        async function checkStatus() {
            const clientSecret = new URLSearchParams(window.location.search).get(
                "payment_intent_client_secret"
            );

            if (!clientSecret) {
                return;
            }

            const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);

            switch (paymentIntent.status) {
                case "succeeded":
                    showMessage("Payment succeeded!");
                    break;
                case "processing":
                    showMessage("Your payment is processing.");
                    break;
                case "requires_payment_method":
                    showMessage("Your payment was not successful, please try again.");
                    break;
                default:
                    showMessage("Something went wrong.");
                    break;
            }
        }

        // ------- UI helpers -------

        function showMessage(messageText) {
            const messageContainer = document.querySelector("#payment-message");

            messageContainer.style.display = "block";
            messageContainer.textContent = messageText;

            setTimeout(function() {
                messageContainer.style.display = "none";
                messageText.textContent = "";
            }, 4000);
        }

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



        togglePaymentMethod(document.querySelector('input[name="payment_method"]:checked').value);
</script>


</body>

</html>
