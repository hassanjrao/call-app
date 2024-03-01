<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700;800;900&family=Outfit:wght@300;400;500;600;700;800;900&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Outfit", sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #F3F4F6;
        width: 100vw;
        overflow: auto;
    }

    .checkout-container {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        height: 100%;
    }

    .checkout-container>.billing-info {
        display: flex;
        flex-direction: column;

        gap: 1rem;

        background: #fff;
        padding-block: 35px;
        padding-left: 25px;
        padding-right: 25%
    }

    .logo {
        display: flex;
        gap: 5px;
        align-items: center
    }

    .checkout-container>.billing-info .logo img {
        height: 35px;
        width: 35px;
    }

    .input-fields {
        width: 80%;
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .input-fields span {
        color: #fd8383
    }

    .input-fields input {
        border: 1px solid #ccc;
        padding: 15px;
    }

    .input-fields input:focus {
        outline: none;
        border: #000 solid 1px
    }

    .payment-methods {
        display: flex;
        flex-direction: column;
        gap: 10px;
        border: 1px solid #ccc;
        width: 80%;
    }

    .payment-methods img {
        height: 25px;
        margin-left: 15px
    }

    .credit-card {
        margin-left: 15px;
        margin-right: 5px
    }

    .payment-methods label {
        display: flex;
        padding: 15px;
        align-items: center;
        border-bottom: 1px solid #ccc;
        cursor: pointer;
    }

    button {
        padding-block: 10px;
        background-color: #000;
        color: #fff;
        width: 80%;
        cursor: pointer;
    }

    .secure {
        text-align: center;
        color: #ccc;
        width: 80%;
    }

    ion-icon {
        margin-left: auto
    }

    .order-summary {
        display: flex;
        flex-direction: column;
        gap: 15px;
        padding-block: 35px;
        padding-left: 25%;
        padding-right: 25px
    }

    .order-summary p {
        display: flex;
        justify-content: space-between;
        padding-block: 15px
    }

    .order-summary .pack {
        border-top: 1px solid #e9e9e9;
        border-bottom: 1px solid #e9e9e9;
        padding-block: 25px
    }
</style>

<body>
    <div class="checkout-container" action="">
        <div class="order-summary">
            <h3>Order Summary</h3>
            <p class="pack">{{ $plan->name }} x 1 <span>€{{ $plan->price }}</span></p>
            <p class="total">Total <span>€{{ $plan->price }}</span></p>
        </div>
        <form class="billing-info" action="{{ route('payment') }}" method="POST">
            @csrf
            <div class="logo">
                <img src="{{ asset('img/SVG/logoDark.svg') }}" alt="logo">
                <h3>HivoCall</h3>
            </div>
            <div class="input-fields">
                <label for="name">Name <span>*</span></label>
                <input type="text" id="name" placeholder="Your Full Name">
            </div>
            <div class="input-fields">
                <label for="email">Email <span>*</span></label>
                <input type="email" id="email" placeholder="your@email.com" required>
            </div>
            <div class="input-fields">
                <label for="phone">Phone <span>*</span></label>
                <input type="tel" id="phone" placeholder="Your Phone Number" required>
            </div>
            <div class="payment-methods">
                <label><input type="radio" name="payment" value="paypal"><img src="{{ asset('img/SVG/paypal.png') }}"
                        alt="" srcset=""> <ion-icon name="chevron-forward-outline"></ion-icon></label>
                <label><input type="radio" name="payment" value="creditcard" checked> <ion-icon name="card-outline"
                        class="credit-card "></ion-icon> Credit Card
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </label>
            </div>

            <button>
                Procced to Checkout
            </button>

            <p class="secure">
                <ion-icon name="lock-closed-outline"></ion-icon></i> this is a secure encrypted payment
            </p>
        </form>
    </div>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
</body>

</html>
