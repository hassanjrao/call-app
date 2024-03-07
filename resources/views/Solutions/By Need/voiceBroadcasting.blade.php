@extends('layouts')
@section('content')
    <div class="container office">
        <div class="hero-container">
            <div class="hero__title">
                <img loading="lazy" src="img/SVG/round_circles.svg"
                    alt="">
                <h2>Voice Broadcasting System
                </h2>
            </div>
            <div class="hero__desc">
                <p>
                    Reach maximum prospects at the click of a button – For optimized sales, Support or Quality assurance.


                </p>
            </div>
            <div class="hero__btn">
                <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button>
            </div>
            <div class="hero__image">
                <img loading="lazy" src="{{ asset('img/SVG/BgHero1.png') }}"
                    alt="hero" />
            </div>
        </div>
        <div class="whatsIs">
            <h4> What Is Voice Broadcasting?

            </h4>
            <p>
                Voice broadcasting is a mass communication / broadcasting technique which enables you to send automated
                voice messages via call to a large number of people at once. Voice broadcast service can be used to receive
                instant notifications and alerts. Users can easily record the customer responses by installing IVR in the
                call blast.



            </p>

        </div>
        <div class="benefitsGrid">
            <div class="left">
                <h4>Benefits Of A Voice <span>Broadcasting</span>
                    Software </h4>
                <p>
                    Besides the apparent benefits of voice broadcasting, it also has other services associated with it. Some
                    of the biggest reasons why customer-facing companies should adopt it are:

                </p>
            </div>
            <div class="right">

                <div class="card">
                    <div class="icon"> <i class="fa-solid fa-user"></i></div>

                    <h4>
                        Schedule control

                    </h4>
                    <p>
                        Voice broadcasting software lets you decide when the calls should be made, the duration of the
                        effort, or even schedule multiple calls to the same person (in an interval of a few days or so).



                    </p>
                </div>
                <div class="card">
                    <div class="icon"><i class="fa-solid fa-hand-holding-heart"></i></div>

                    <h4>
                        Text-to-speech
                    </h4>
                    <p>
                        It reads out the text you write over a call just like a human would do. You can even insert names
                        and other relevant details of the prospect to personalize the call.



                    </p>
                </div>
                <div class="card">
                    <div class="icon"><i class="fa-solid fa-universal-access"></i></div>

                    <h4>
                        Automation </h4>
                    <p>
                        Automated voice broadcasting is a computerized process of cold calling. Hence, the margin of human
                        error is eliminated seamlessly



                    </p>
                </div>
                <div class="card">
                    <div class="icon"> <i class="fa-solid fa-filter-circle-dollar"></i></div>

                    <h4>
                        Improves Communication
                    </h4>
                    <p>
                        Voice broadcast Software can transfer that emotion into the message that you want your customer to
                        understand.
                    </p>
                </div>
                <div class="card">
                    <div class="icon"> <i class="fa-solid fa-filter-circle-dollar"></i></div>

                    <h4>
                        Increased Employee Performance
                    </h4>
                    <p>
                        When you remove the mundane tasks from the hands of your employees, like making thousands of calls
                        and chasing down every lead, the morale will boost.

                    </p>
                </div>
                <div class="card">
                    <div class="icon"> <i class="fa-solid fa-filter-circle-dollar"></i></div>

                    <h4>
                        Opt-out messages
                    </h4>
                    <p>
                        Just like the unsubscribe option in emails, opt-out messages allow customers to choose whether they
                        want to receive calls from your business.

                    </p>
                </div>

            </div>
        </div>

        <div class="freeTrial">
            <div class="left">
                <h3>Start your <span>Free Trial</span> today</h3>
                <p>
                    From number buying to inviting your users to making your first call,
                    all it takes to set up your virtual phone system is 3 minutes.
                </p>
                <ul>
                    <li><i class="fa-solid fa-circle-check" style="color: #63E6BE;"></i>Buy Numbers</li>
                    <li><i class="fa-solid fa-circle-check" style="color: #63E6BE;"></i>Add Users</li>
                    <li><i class="fa-solid fa-circle-check" style="color: #63E6BE;"></i>Start Calling</li>
                    <li><i class="fa-solid fa-circle-check" style="color: #63E6BE;"></i>Track Calls</li>
                </ul>
                <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a>Start Free Trial</button>
            </div>

            <div class="right">
                <img loading="lazy" src="{{ asset('img/SVG/business-phone-number.png') }}"
                    alt="freeTrial" />
            </div>
        </div>



        <div class="pricing__bottom--wrapper">

            <h3>Pricing</h3>
            <div class="option active">
                <div class="slogan">
                    <h3>
                        Ideal for Businesses to support their Customers and not for Bulk
                        Calling
                    </h3>
                </div>

                
                <div class="plan--wrapper">
                    @foreach ($plans as $plan)
                        <div class="card">
                            <a href="{{ route('checkout', $plan->id) }}">
                                <div class="card-top">
                                    <h4>{{ $plan->name }}</h4>
                                    <h4><span>Є</span>{{ $plan->price }}</h4>
                                    <p>Per user/Month</p>
                                    <button>Get Plan</button>
                                </div>
                                <div class="card-bottom">

                                    @if ($plan->name == 'Standard')
                                        <p class="last">Unlimited Users (Pay only for numbers)</p>
                                    @elseif ($plan->name == 'Premium')
                                        <p>Everything in Standard +</p>
                                    @elseif ($plan->name == 'Legend')
                                        <p>Everything in Premium +</p>
                                    @endif

                                    <ul class="benefits">

                                        @if ($plan->name == 'Standard')
                                            <li><i class="fa-solid fa-check"></i>Click To Dial</li>
                                            <li><i class="fa-solid fa-check"></i>Global Connect</li>
                                            <li><i class="fa-solid fa-check"></i>Teams</li>
                                            <li><i class="fa-solid fa-check"></i>Voicemail</li>
                                            <li><i class="fa-solid fa-check"></i>SMS/Text messages</li>
                                            <li><i class="fa-solid fa-check"></i>Smart Switch</li>
                                            <li><i class="fa-solid fa-check"></i>Last Called By</li>
                                        @elseif ($plan->name == 'Premium')
                                            <li><i class="fa-solid fa-check"></i>1000 calling minutes within US/CAD</li>
                                            <li><i class="fa-solid fa-check"></i>1 Standard Number Free</li>
                                            <li><i class="fa-solid fa-check"></i>Multi Lingual IVR</li>
                                            <li><i class="fa-solid fa-check"></i>2FA</li>
                                            <li><i class="fa-solid fa-check"></i>User Working Hours</li>
                                            <li><i class="fa-solid fa-check"></i>Business Hours</li>
                                            <li><i class="fa-solid fa-check"></i>Ring All Devices</li>
                                            <li><i class="fa-solid fa-check"></i>1-year Call Records</li>
                                            <li><i class="fa-solid fa-check"></i>Basic Report Analytics</li>
                                            <li><i class="fa-solid fa-check"></i>Forward-to-device</li>
                                            <li><i class="fa-solid fa-check"></i>Shared Inbox</li>
                                            <li><i class="fa-solid fa-check"></i>Feedback for Calls</li>
                                        @elseif ($plan->name == 'Legend')
                                            <li><i class="fa-solid fa-check"></i>Unlimited calling minutes within US/CAD
                                            </li>
                                            <li><i class="fa-solid fa-check"></i>Call Recordings</li>
                                            <li><i class="fa-solid fa-check"></i>Intelligent Reports/Analytics</li>
                                            <li><i class="fa-solid fa-check"></i>Country Blocking</li>
                                            <li><i class="fa-solid fa-check"></i>Call Tagging</li>
                                            <li><i class="fa-solid fa-check"></i>Email notification for Voicemail</li>
                                            <li><i class="fa-solid fa-check"></i>Reports Via Email</li>
                                            <li><i class="fa-solid fa-check"></i>Call Notes & Ratings</li>
                                            <li><i class="fa-solid fa-check"></i>Lifetime Call Records</li>
                                            <li><i class="fa-solid fa-check"></i>Advance Report Analytics</li>
                                            <li><i class="fa-solid fa-check"></i>Role based access control</li>
                                            <li><i class="fa-solid fa-check"></i>IVR</li>
                                            <li><i class="fa-solid fa-check"></i>Live Call</li>
                                            <li><i class="fa-solid fa-check"></i>Call Reminder</li>
                                            <li><i class="fa-solid fa-check"></i>After Call Work</li>
                                            <li><i class="fa-solid fa-check"></i>Holiday Routing</li>
                                            <li><i class="fa-solid fa-check"></i>Gamification</li>
                                            <li><i class="fa-solid fa-check"></i>Pause-Resume Recording</li>
                                        @endif
                                    </ul>
                                </div>
                            </a>
                        </div>
                    @endforeach


                </div></a>
            </div>
        </div>

        <div class="faq">
            <h3>Frequently Asked Question
            </h3>
            <div class="accordion">
                <div class="tape">
                    <h4 class="question">
                        What Is The Use Of A Voice Broadcasting System? </h4>
                    <p class="answer">
                        Voice broadcasting is a mass communication technique that enables users to send automated voice
                        message broadcasting via a call to many people at once. It can be used for various purposes such as
                        conducting surveys, sending event invitations, providing reminders or notifications, and important
                        corporate announcements.



                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        How much does voice broadcasting cost? </h4>
                    <p class="answer">
                        HivoCall provides affordable voice broadcasting services by charging only $0.04 per call.


                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">

                        Is Voice Broadcasting Legal? </h4>
                    <p class="answer">
                        Yes, voice broadcasting is legal in most countries if the recipient has explicitly agreed to receive
                        such messages. However, you cannot send broadcast messages to recipients who have denied permission.
                        Also, make sure your calls are scheduled between 9 AM and 9 PM.

                    </p>
                </div>
            </div>
        </div>
        <div class="related__posts">
            <div class="related__head">
                <h2>Related Post
                </h2>
            </div>
            <div class="related__body">
                <div class="post">
                    <img loading="lazy" decoding="async"
                        src="src='{{ asset( "img/webp/9-Reasons-Why-Voice-Broadcasting-Solution-For-Customer-Surveys-Is-Essential-FB.webp") }}'
                        alt="Reasons Why Voice Broadcasting Solution For Customer Surveys Is Essential" height="180"
                        width="343">
                    <a href="#" target="_blank"
                        rel="noopener" data-wpel-link="internal">
                        <h3>Reasons Why Voice Broadcasting Solution For Customer Surveys Is Essential</h3>
                    </a>
                </div>
                <div class="post">
                    <img loading="lazy" decoding="async"
                    src='{{ asset( "img/webp/9-Reasons-Why-Voice-Broadcasting-Solution-For-Customer-Surveys-Is-Essential-FB.webp") }}'
                        alt="How Your Business Can Benefit From Voice Broadcasting?" height="180" width="343">
                    <a href="#"
                        target="_blank" rel="noopener" data-wpel-link="internal">
                        <h3>How Your Business Can Benefit From Voice Broadcasting?</h3>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
