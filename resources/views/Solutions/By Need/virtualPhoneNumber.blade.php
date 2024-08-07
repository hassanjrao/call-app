@extends('layouts')
@section('content')
    <div class="container office">
        <div class="hero-container">
            <div class="hero__title">
                <img loading="lazy" src="img/icons/3points.svg"
                    alt="">
                <h2>
                    Virtual Phone Number

                </h2>
            </div>
            <div class="hero__desc">
                <p>
                    Buy Virtual Telephone Numbers For More Than 50+ Countries

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
            <h4>                    
                What Is A Virtual Phone Number?

            </h4>
            <p>
                A virtual phone number keeps you connected and reachable irrespective of whether you’re in the office, working from home, or traveling across the globe.
            </p>
            <p>
                Here are some more reasons to switch to a virtual number.
            </p>
           
            
        </div>
        <div class="benefitsGrid">
            <div class="left">
                <h4>
                    Benefits of Using Predictive Dialer
                     
                </h4>
                <p>
                    Increase agent productivity and connect rates while minimizing idle time with HivoCall’s Predictive Dialer.

                </p>
                
            </div>
            <div class="right">

                <div class="card">
                    <div class="icon"> <img loading="lazy" src='{{ asset( "img/icons/cost_efficience_bphone_nb.svg") }}' alt=""></div>

                    <h4>
                        Cost-Effective

                    </h4>
                    <p>
                        Virtual phone numbers don’t require installing telephone lines throughout your office or investing in special hardware. Instead, you can use your existing phone or desktop systems to manage your business phone system.

                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img loading="lazy" src='{{ asset( "img/icons/Global-Accessibility-with-callhippo.svg") }}' alt=""></i></div>

                    <h4>
                        Enhance Local Presence
                    </h4>
                    <p>
                        Virtual number allows you to establish a robust local presence in new markets and increases the chances of conversions. Furthermore, local virtual numbers enable you to call your customers per local rate, reducing phone bills.
                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img loading="lazy" src='{{ asset( "img/icons/Integration-with-callhippo.svg") }}' alt=""></div>

                    <h4>
                        IVR Integration
                    </h4>
                    <p>
                        Virtual numbers are integrated with IVR technology, allowing you to share a pre-recorded message to give callers a faster and more personalized experience.


                    </p>
                </div>
                <div class="card">
                    <div class="icon"> <img loading="lazy" src='{{ asset( "img/icons/Scalability-with-callhippo.svg") }}' alt=""></div>

                    <h4>
                        Higher Scalability
                    </h4>
                    <p>
                        You’d probably hire more employees as your business grows for your sales and support teams. And when you do, you can add them to your existing virtual phone number.

                    </p>
                </div>
                
                
            </div>
        </div>

        <div class="freeTrial">
            <div class="left">
                <h3>Get Your  <span>Plan</span>  Today!</h3>
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
                <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button>
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
                        Are virtual phone numbers “real” telephone numbers?
                    </h4>
                    <p class="answer">
                        Yes, virtual numbers are real telephone numbers that can be used to make and receive phone calls. However, the major difference between a virtual number and regular numbers is that the former is not linked to any specific device or location.
                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        Can I have multiple virtual phone numbers?
                    </h4>
                    <p class="answer">
                        Yes, you can have as many virtual phone numbers as you want. However, you should choose a reliable VoIP provider to purchase multiple phone numbers to ensure privacy and security.

                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        How can I get a virtual number in a different country?
                    </h4>
                    <p class="answer">
                        Follow these steps to get a virtual number in a different country: <br>

                        Sign up with HivoCall <br>
                        Choose the country you want to get a virtual number of <br>
                        Pick a number from the large pool of numbers <br>
                        Select a plan as per your requirements  <br>
                        You’re ready to make and receive calls                    
                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        Do I need any hardware to use a virtual phone number?
                    </h4>
                    <p class="answer">
                        Just like in regular numbers, you become the official owner of the virtual phone number you purchase from HivoCall.


                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        How do I use a virtual phone number?
                    </h4>
                    <p class="answer">
                        You can use your virtual number via the app provided by your vendor. Most virtual phone number providers offer a web, desktop, and mobile app for ease of access on multiple devices.


                    </p>
                </div><div class="tape">
                    <h4 class="question">
                        What is Virtual phone call?
                    </h4>
                    <p class="answer">
                        A virtual phone call makes it possible for someone to make calls using an internet connection. These virtual calls are powered by VoIP technology which enables a multimedia communication system over the internet.

                    </p>
                </div>
            </div>
        </div>
        
    </div>
@endsection
