<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_LIVE_API_USERNAME') }}&currency=EUR&vault=true">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    @vite('resources/js/app.js')
    <title>Checkout</title>
    @include('sweetalert::alert')

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

            <div class="overview active">
                <p class="pack">{{ $plan->name }} x 1 <span>€{{ $plan->price }}</span></p>
                <p class="total">Total <span>€{{ $plan->price }}</span></p>
            </div>
        </div>
        <div class="billing-info">
            @csrf
            <input type="hidden" name="plan_id" id="plan_id" value="{{ $plan->id }}">
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
                <input name="name" type="text" id="name" placeholder="Your Full Name">
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
                <input name="phone" type="tel" id="phone" placeholder="Your Phone Number">
                <span id="phone-error" style="color: red; display: none;">Please enter both your first and last
                    names.</span>
            </div>


            <!-- Stripe Payment Form -->

            <div class="row">

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3>Pay with Stripe</h3>
                        </div>
                        <div class="card-body">
                            <div id="stripe-payment-form" style=" width: 75%">
                                <div id="payment-message" class="alert alert-info" style="display: none;"></div>
                                <form action="{{ route('stripe.subscription') }}" method="post" id="payment-form">
                                    @csrf
                                    <input type="hidden" name="plan_id" id="plan_id" value="{{ $plan->id }}">
                                    <div id="payment-element"></div>
                                    <button type="submit" id="submitBtn" class="btn">
                                        <button class="stripe-btn" id="stripe-btn" style="background: black">Pay now</button>
                                        {{-- <span id="spinner" style="display: none;">Processing...</span> --}}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>Pay with Paypal</h3>
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <!-- PayPal Button Container -->
                            <div id="paypal-button-container" style=" width: 75%;"></div>

                            <p class="secure">
                                <ion-icon name="lock-closed-outline"></ion-icon></i> this is a secure encrypted payment
                            </p>
                        </div>
                    </div>
                </div> --}}

            </div>



        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                // document.querySelector("#submitBtn").disabled = true;
                // document.querySelector("#spinner").style.display = "inline";
                // document.querySelector("#stripe-btn").style.display = "none";
                
                document.querySelector("#stripe-btn").innerHTML = "Processing...";
                document.querySelector("#stripe-btn").style.backgroundColor = "gray";
                
                // disable button
                document.querySelector("#stripe-btn").disabled = true;
                
            } else {
                // document.querySelector("#submitBtn").disabled = false;
                // document.querySelector("#spinner").style.display = "none";
                // document.querySelector("#stripe-btn").style.display = "inline";
                document.querySelector("#stripe-btn").innerHTML = "Pay now";
                document.querySelector("#stripe-btn").style.backgroundColor = "black";
                document.querySelector("#stripe-btn").disabled = false;

            }
        }
    </script>



    <script>
        const stripe = Stripe("{{ env('STRIPE_KEY') }}")

        const elements = stripe.elements()

        const cardElement = elements.create('card', {
            style: {
                base: {
                    // iconColor: '#c4f0ff',
                    fontWeight: '500',
                    fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
                    fontSize: '18px',
                    padding: '20px 22px',
                    fontSmoothing: 'antialiased',
                    border: '1px solid #e0e0e0',
                    width: '100%',

                },
                // invalid: {
                // iconColor: '#FFC7EE',
                // color: '#FFC7EE',
                // },
            }
        })

        cardElement.mount('#payment-element')
        var form = document.getElementById('payment-form')
        const cardBtn = document.getElementById('stripe-btn')
        const cardHolderName = document.getElementById('card-holder-name')
        const intent = null;

        $('#stripe-btn').on('click', function(e) {
            e.preventDefault()
            console.log('Hello')

            // Validate the form
            if (!validateForm()) {
                alert('Please fill in all required fields before proceeding.');
                return;
            }

            // validate the card element
            if (!cardElement._complete) {
                alert('Please fill in all required fields before proceeding.');
                return;
            }

            setLoading(true)


            createUser().then((response) => {

                let intent = response.data.intent;

                let user = response.data.user;


                let userIn = document.createElement('input')

                userIn.setAttribute('type', 'hidden')
                userIn.setAttribute('name', 'user_id')
                userIn.setAttribute('value', user.id)

                form.appendChild(userIn)

                submitForm(intent);

            }).catch((error) => {

                console.log(error);
                setLoading(false)
                return error;
            })


        })


        async function submitForm(intent) {

            console.log("submitForm", intent);

            const {
                setupIntent,
                error
            } = await stripe.confirmCardSetup(

                intent.client_secret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            // name: cardHolderName.value
                        }
                    }
                })

            console.log('errrorrr', error);
            if (error) {

                console.log(error);
                let msg = error ? error.message : "Something went wrong, please try again later."
                alert(msg)
                setLoading(false)
                return error;

            } else {

                let token = document.createElement('input')

                token.setAttribute('type', 'hidden')

                token.setAttribute('name', 'token')

                token.setAttribute('value', setupIntent.payment_method)
                form.appendChild(token)

                console.log('form', form);

                // Submit the form
                form.submit()

            }
        }



        async function createUser(paymentMethod = 'stripe') {

            console.log('create user');

            let formData = new FormData();

            console.log('planddddddddddd', formData);



            formData.append('name', document.getElementById('name').value);
            formData.append('email', document.getElementById('email').value);
            formData.append('plan_id', document.getElementById('plan_id').value);
            formData.append('payment_method', paymentMethod);
            formData.append('phone', document.getElementById('phone').value);
            console.log('formData', formData);



            console.log(axios);


            return await axios.post('/stripe/create-user', formData)
                .then(function(response) {
                    console.log(response);
                    return response;
                })
                .catch(function(error) {
                    console.log(error);
                    return error;
                });
        }
    </script>


</body>

</html>
