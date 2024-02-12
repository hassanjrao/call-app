@extends('layouts')
@section('content')
    <div class="signin-container">
        <div class="right-section">
            <div class="hero__image">
                <img loading="lazy" src="	{{ asset('img/SVG/portrait.png') }}" alt="hero" />
            </div>
            <div class="hero__desc">
                <p>
                    HivoCall went an extra mile and suggested a perfect solution. As of now, all of our numbers are clean
                    and have the highest attestation score.

                </p>
                <p>Rostyslav Khanyk


                    <span>Head Of Sales, Brighterly</span>
                </p>
            </div>

            <div class="trusted-container">
                <div class="trusted-heading">
                    <p>Trusted by 4000+ companies</p>
                </div>
                <div class="trusted-content">
                    <img loading="lazy" src="{{ asset('img/companies/Amazon.svg') }}" alt="trusted" /><img loading="lazy"
                        src="{{ asset('img/companies/oracle.svg') }}" alt="trusted" /><img loading="lazy"
                        src="{{ asset('img/companies/turing.svg') }}" alt="trusted" />
                    <img loading="lazy" src="{{ asset('img/companies/iresearch.svg') }}" alt="trusted" />

                </div>
            </div>
        </div>
        <div class="left-section">
            <div class="head">
                <div class="logo">

                    <a href="/" class="a1"> <img loading="lazy" src='{{ asset('img/SVG/logoDark.svg') }}'
                            alt="logo">
                        <h1>
                            HivoCall
                        </h1>
                    </a>
                </div>
                <p>Already have an account ? <a href="/signup">Sign in</a></p>
            </div>

            <div class="content">
                <p>Start Your <span>Free Trial!</span></p>
                <input placeholder="Enter Business Email" />
                <button>START FREE TRIAL</button>
            </div>
        </div>
    </div>
    </div>
@endsection
