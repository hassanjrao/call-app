<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/pay.css') }}">
    <title>Complete your purchase</title>
</head>
<body>

    
    
    <div class="form-container">
        <h2 class="form-title">Payment Details</h2>
        <form action="" class="checkout-form">
            <div class="input-line">
                <label for="name">Name on card</label>
                <input type="text" name="name" id="name" placeholder="Your name and surname">
            </div>
            <div class="input-line">
                <label for="name">Card number</label>
                <input type="text" name="name" id="name" placeholder="1111-2222-3333-4444">
            </div>
            <div class="input-container">
                <div class="input-line">
                    <label for="name">Expiring Date</label>
                    <input type="text" name="name" id="name" placeholder="09-21">
                </div>
                <div class="input-line">
                    <label for="name">CVC</label>
                    <input type="text" name="name" id="name" placeholder="*">
                </div>
            </div>
            <input type="button" value="Complete purchase">
        </form>
    </div>

</body>
</html>