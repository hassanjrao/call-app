@extends('welcome')
@section('content')
    <div class="signin-container">
        <div class="right-section">
            <div class="hero__image">
                <img src="	https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/ch-home-user-image-new.png"
                    alt="hero" />
            </div>
            <div class="hero__desc">
                <p>
                    CallHippo went an extra mile and suggested a perfect solution. As of now, all of our numbers are clean
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
                    <img src="https://callhippo.com/wp-content/uploads/customupload/logo_trustedby/Amazon.svg"
                        alt="trusted" /><img
                        src="https://callhippo.com/wp-content/uploads/customupload/logo_trustedby/oracle.svg"
                        alt="trusted" /><img
                        src="https://callhippo.com/wp-content/uploads/customupload/logo_trustedby/turing.svg"
                        alt="trusted" />
                    <img src="https://callhippo.com/wp-content/uploads/customupload/logo_trustedby/iresearch.svg"
                        alt="trusted" />

                </div>
            </div>
        </div>
        <div class="left-section">
            <div class="head">
                <div class="logo">
                    <a href="/"><img src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/logo-2.svg"
                            alt="logo" /></a>
                </div>
                <p>Already have an account ? <a href="/">Sign in</a></p>
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
