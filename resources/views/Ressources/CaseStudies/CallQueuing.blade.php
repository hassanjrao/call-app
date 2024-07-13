@extends('layouts')
@section('content')
    <div class="container office">
        <div class="hero-container">
            <div class="hero__title">
                <img loading="lazy" src="img/SVG/round_circles.svg"
                    alt="">
                <h2>
                    Call Queuing Management System

                </h2>
            </div>
            <div class="hero__desc">
                <p>
                    Minimize call waiting times by sorting callers into virtual queues
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
                What is a Call Queuing System?

            </h4>
            <p>
                Call queue system is a defining feature of cloud-based phone systems that places incoming callers into virtual queues and informs them of the expected call waiting times. It helps optimize call wait times and minimize abandonment rates. Acknowledging the calls and letting customers know their call is important to help increase customer satisfaction levels.

 </p>
            
        </div>
        <div class="benefitsGrid">
            <div class="left">
                <h4>
                    Benefits Of Call <span>Queuing</span> 
                </h4>
                <p>
                    From minimizing call hold times to maximizing agent productivity, call queue software helps streamline the high volume of incoming calls and offers a wide gamut of benefits to businesses.



                </p>
                <p>
                    Here are some of the key benefits of call Queuing


                </p>
                
            </div>
            <div class="right">

                <div class="card">
                    <div class="icon"> <img loading="lazy" src="{{ asset("img/icons/Increased-agent-morale-with-call-monitoring.svg") }} " alt=""></div>

                    <h4>
                        Enhances Customer Satisfaction

                    </h4>
                    <p>
                        Longer waiting times are a frustrating experience for callers. As a call queuing system allows callers to get in touch with agents in the minimum time possible, it enhances customer satisfaction.

                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img loading="lazy" src="{{ asset("img/icons/Boost-sales-with-call-monitoring.svg") }} " alt=""></i></div>

                    <h4>
                        Call Prioritization
                    </h4>
                    <p>
                        Call queuing software helps businesses prioritize calls from loyal customers based on conversation history. Deliver prompt responses to high-value customers and retain them.

                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img loading="lazy" src="{{ asset("img/icons/Enhanced-customer-satisfaction-with-call-monitoring.svg") }} " alt=""></div>

                    <h4>
                        Minimize Call Abandonment

                    </h4>
                    <p>
                        When callers are placed in queues and informed of the expected wait time, they are more likely to hang on. Customers can also send a voicemail or seek a callback, which in turn reduces abandonment rates.


                    </p>
                </div>
                <div class="card">
                    <div class="icon"> <img loading="lazy" src="{{ asset("img/icons/Improve-agent-performance-with-call-monitoring.svg") }} " alt=""></div>

                    <h4>
                        Cost Savings

                    </h4>
                    <p>
                        Call queuing systems help organize high-volume calls into queues and handle them efficiently while reducing the requirement for additional agents and resources.
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
                        Can callers request a call back in call queues?
                    </h4>
                    <p class="answer">
                        Yes, HivoCall allows customers to request a call back when the queue is long and involves considerable waiting time. This helps enhance customer satisfaction and deliver a positive experience.
                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        How does call queue software work?

                    </h4>
                    <p class="answer">
                        When customers place their calls to the customer support team of a business, the IVR system greets the callers with a welcome message and offers different choices. Based on their response, they are navigated to appropriate queues and put on hold music until an agent becomes available.
                    </p>
                </div>

                <div class="tape">
                    <h4 class="question">
                        Is it possible to monitor the effectiveness of call queues in real-time?

                    </h4>
                    <p class="answer">
                        Yes, supervisors can monitor the efficiency of call queues using metrics such as the number of calls in queue and progress, total hold time, abandonment rates, longest wait time, average answer time, total agents available, etc.
                    </p>
                </div>

                <div class="tape">
                    <h4 class="question">
                        Should I pay extra to access call queuing software on HivoCall?

                    </h4>
                    <p class="answer">
                        No, call queuing is included as a part of HivoCall’s subscription plans. Once you subscribe to its Silver or Platinum plan, you can access the feature without paying extra.


                    </p>
                </div>
                
            </div>
        </div>
        
    </div>
@endsection
