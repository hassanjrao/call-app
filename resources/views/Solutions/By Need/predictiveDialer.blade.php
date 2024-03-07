@extends('layouts')
@section('content')
    <div class="container office">
        <div class="hero-container">
            <div class="hero__title">
                <img loading="lazy" src="img/icons/3points.svg"
                    alt="">
                <h2>
                    Predictive Dialer

                </h2>
            </div>
            <div class="hero__desc">
                <p>
                    Unleash the power of automation and precision with HivoCall’s Predictive Dialer. Say goodbye to manual dialing and hello to a seamless, data-driven calling experience that maximizes agent productivity and ensures every connection counts.

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
                What Is A Predictive Dialer?

            </h4>
            <p>
                A cloud predictive dialer is an automated dialer that uses several parameters to place an automated outbound calls. It calls different numbers (as provided by you) until it detects a connection and then passes it to a live agent.

            </p>
            <p>
                Predictive dialer software automatically screen out numbers that go straight to the voicemail, are busy, don’t answer, and so on, thereby saving hours of your agents’ time each month.
            </p>
            <p>
                The primary difference between a power dialer and a predictive dialer is that a power dialer calls a list of numbers sequentially. In contrast, a predictive dialer uses a set of parameters to determine when an agent will be available to take the call and dials the number accordingly.

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
                    <div class="icon"> <img loading="lazy" src='{{ asset( "img/icons/Schedule-control-with-voice-broadcasting.svg") }}' alt=""></div>

                    <h4>
                        Maximized Agent Productivity

                    </h4>
                    <p>
                        The Predictive Dialer eliminates downtime between calls, ensuring your agents are engaged with leads and customers consistently, resulting in a substantial boost in productivity.
                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img loading="lazy" src='{{ asset( "img/icons/Text-to-speech-with-voice-broadcasting.svg") }}' alt=""></i></div>

                    <h4>
                        Optimized Call Connect Rate
                    </h4>
                    <p>
                        With intelligent call pacing, the Predictive Dialer ensures that agents are connected with live calls, minimizing the instances of voicemails or missed opportunities.
                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img loading="lazy" src='{{ asset( "img/icons/Saves-Time-with-amd.svg") }}' alt=""></div>

                    <h4>
                        Reduced Idle Time
                    </h4>
                    <p>
                        By virtually eliminating manual tasks like dialing and waiting for calls to connect, agents can focus solely on effective communication, drastically reducing idle time.

                    </p>
                </div>
                <div class="card">
                    <div class="icon"> <img loading="lazy" src='{{ asset( "img/icons/Improves-Communication-with-voice-broadcasting.svg") }}' alt=""></div>

                    <h4>
                        Enhanced Lead Management
                    </h4>
                    <p>
                        The Predictive Dialer intelligently organizes and prioritizes leads, ensuring your team is always contacting the most promising prospects, thus increasing conversion rates.
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
                        What is the function of a predictive dialer?                    </h4>
                    <p class="answer">
                        A predictive dialer is an automated phone dialer system that makes calls even before agents conclude the current call or become available for the next. The predictive dialer’s purpose is to reduce agent idle time while enhancing productivity by eliminating the need for agents to spend time dialing numbers.
                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        What is the difference between a predictive dialer and an auto dialer?
                    </h4>
                    <p class="answer">
                        The key distinction between a predictive dialer and an auto dialer is that, where auto dialer software use simple algorithms to place calls only after the current call has been completed, predictive dialers use machine learning and place calls even while the current call is still active.
                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        When should you use the predictive dialers?
                    </h4>
                    <p class="answer">
                        Predictive dialer is an ideal automated phone dialer system for businesses with high call volumes. Using a predictive dialer, these organizations can greatly increase productivity by minimizing idle time and increasing agents efficiency.
                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        How does a predictive dialer work?                    </h4>
                    <p class="answer">
                        A predictive dialer is a type of automated dialer that places phone calls even before the agents become available. It's designed to increase agents' efficiency by calling as many leads as possible. The system quickly moves on to the next lead after an unanswered call.                    </p>
                </div>
            </div>
        </div>
        
    </div>
@endsection
