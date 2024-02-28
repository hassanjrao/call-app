@extends('layouts')

@section('content')
    <div class="loginContainer">
        <form action="{{ route('login') }}" method="post" class="form">
            @csrf
            <div class="formWrapper">
                <div class="logo">
                    <img loading="lazy" src='{{ asset('img/SVG/logoDark.svg') }}' alt="logo">
                    <h3 class="HivoCall">Hivocall</h3>
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="control-grp">
                    <div class="input-grp">
                        <span>Sign in to HivoCall </span>
                        <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">

                        <input type="password" name="password" id="password" placeholder="Password">


                        <button>Login</button>
                    </div>
                    <span class="or">OR</span>

                    <span class="signUp">
                        Don't have an account?<a href="signup">Sign Up</a>
                    </span>
                </div>
            </div>
        </form>
    </div>

    <style>
        .alert {
            color: rgb(255, 105, 105);
            text-align: start;
            padding-block: 10px
        }
    </style>
@endsection
