<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.paypal.com/sdk/js?client-id=AVO2WBr7yhP5EhNflhK0FqIdURzbczLcTUpP0oF4SqNL--sQdghlh-dG73XP0PkazclBGuy6TNiqArpT&currency=EUR"></script>
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <script src="https://js.stripe.com/v3/"></script>
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
        <div class="payment-methods">
            <label>
                <div class="logo-paypal" >
                    <input type="radio" name="payment_method" value="paypal">
                    <img src="{{ asset('img/SVG/paypal.png') }}" alt="" srcset="">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>

                <div id="paypal-button-container" style="display:none;"></div>
            </label>
            <label class="stripe">
                <input type="radio" name="payment_method" value="stripe" checked> <ion-icon name="card-outline" class="credit-card "></ion-icon> Credit Card
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <div id="card-element" style="display:none;">
                    <!-- Elements will create input elements here -->
                </div>

                <div id="card-errors" role="alert" style="display:none;"></div>

            </label>
        </div>

        <button>
            Proceed to Checkout
        </button>

        <p class="secure">
            <ion-icon name="lock-closed-outline"></ion-icon></i> this is a secure encrypted payment
        </p>
    </div>
</div>
<script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
<script>
        paypal.Buttons({
        createOrder: function(data, actions) {
        return actions.order.create({
        purchase_units: [{
        amount: {
        value: '{{ $plan->price }}'
    }
    }]
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


        var stripe = Stripe('pk_test_51OpufdK9ho3ypxMdatMVFkePyvBKkCDV2cMSyBzL6gnXw6kNthPNK4BqbndKlA9gKMaXfR0yCJXdTVijgmXS1V1f00I103zZPz');
        var elements = stripe.elements();
        var style = {
            base: {
                // Add your base input styles here. For example:
                fontSize: '16px',
                color: "#32325d",
            },
        };

        // Create an instance of the card Element and mount it to the "card-element" div
        var card = elements.create('card', {style: style});
        card.mount('#card-element');

        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
                displayError.style.display = 'block';
            } else {
                displayError.textContent = '';
                displayError.style.display = 'none';
            }
        });

        // Handle form submission
        var form = document.querySelector('.billing-info');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                    errorElement.style.display = 'block';
                } else {
                    // Send the token to your server
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.querySelector('.billing-info');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }

        // Toggle Stripe payment form visibility based on selected payment method
        document.querySelectorAll('input[name="payment_method"]').forEach(input => {
            input.addEventListener('change', function() {
                var cardElement = document.getElementById('card-element');
                var cardErrors = document.getElementById('card-errors');
                if (this.value === 'stripe') {
                    cardElement.style.display = 'block';
                    cardErrors.style.display = 'none';
                } else {
                    cardElement.style.display = 'none';
                    cardErrors.style.display = 'none';
                }
            });
        });

        // Toggle payment method visibility
        document.querySelectorAll('input[name="payment_method"]').forEach(input => {
        input.addEventListener('change', function() {
            var paypalContainer = document.getElementById('paypal-button-container');
            if (this.value === 'paypal') {
                paypalContainer.style.display = 'block';
            } else {
                paypalContainer.style.display = 'none';
            }
        });
    });

</script>
</body>

</html>
