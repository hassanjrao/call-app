<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank You</title>
</head><style>
    @import url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700;800;900&family=Outfit:wght@300;400;500;600;700;800;900&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Outfit", sans-serif;
    }

    body{
        display: flex;
        height: 100vh;
        width: 100vw;
        justify-content: center;
        align-items: center;
    }


    .container{
        display: flex;
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }

    .container h3{
        font-size: 4rem;
    }

    .container h3 >span{
        color: #FF1849;
    }

    .container ul{
        list-style: none;
    }

    .container a{
        text-decoration: none;
        padding: 15px 25px;
        color: #fff;
        background-color: #FF1849;
        border: none;
    }

    li{
        display: flex;
        flex-direction: column;
        gap: 5px;
    }
    li span{
        color: #FF1849;
    }


</style>
<body>
<div class="container">
    <h3><span>Thank</span> You!</h3>
    <p>Your payment was successful:</p>

    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
</div>
</body>


</html>