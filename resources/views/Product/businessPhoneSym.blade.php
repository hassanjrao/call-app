@extends('layouts')
@section('content')
    <div class="container powerDialer">
        <div class="hero-container">
            <div class="hero__title">
                <img loading="lazy" src="img/SVG/round_circles.svg"
                    alt="">
                <h2>Business Phone System
                </h2>
            </div>
            <div class="hero__desc">
                <p>
                    With HivoCall, you can buy a business phone system and have it up and running in less than 3 minutes from anywhere in the world. Powered by robust features, HivoCall’s powerful commercial phone system is one of the most comprehensive solutions for all your business communication needs.


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
                What Is A Business Phone System?
            </h4>
            <p>
                A business phone system refers to a multiline telephone system, typically used in business environments for better call management. It comes with a host of handy features including, but not limited to, call transferring, conference calling, call metering and accounting,

            </p>
        </div>
        <div class="benefitsGrid">
            <div class="left">
                <h4>Benefits Of A Business <span>Telephone </span> 
                    System
                </h4>
                <p>
                    A good business phone system would radically change how you connect with customers and keep you ahead of the competition. Also, you can save money through business phone systems.

                </p>
                <p>
                    Here are some more benefits of investing in a business phone system.

                </p>
            </div>
            <div class="right">

                <div class="card">
                    <div class="icon"> <i class="fa-solid fa-user"></i></div>

                    <h4>
                        Cost-Efficiency
                    </h4>
                    <p>
                        As a result, you can say goodbye to messy wires, complex instruments, long-distance carrier charges, and expensive hardware.
                    </p>
                </div>
                <div class="card">
                    <div class="icon"> <img loading="lazy" src="{{ asset("img/icons/phone-battery.svg") }}" alt=""></div>

                    <h4>Service Mobility</h4>
                    <p>
                        You can forward calls to your phone or use an app to make and receive calls on the go.
                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img loading="lazy" src="{{ asset("img/icons/versality_feature.svg") }} " alt=""></div>

                    <h4>
                        The Versatility of Features
                    </h4>
                    <p>
                        By using a business telephone system, you can multi-task and be more productive.


                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img loading="lazy" src="{{ asset("img/icons/Security.svg") }} " alt=""></div>

                    <h4>
                        Simple Conference Calls
                    </h4>
                    <p>
                        Get call conferencing as an added benefit to the services that you’ve already paid for.
                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img loading="lazy" src="{{ asset("img/icons/client_interaction_bphone_nb.svg") }} " alt=""></div>

                    <h4>
                        Efficient Client Interaction
                    </h4>
                    <p>
                        Interact flexibly via multiple channels and networks, and share important documents instantly with e-fax.


                    </p>
                </div>
                <div class="card">
                    <div class="icon"> <img loading="lazy" src="{{ asset("img/icons/reliable_bphone_nb.svg") }} " alt=""></div>

                    <h4>Reliable</h4>
                    <p>
                        Improve customer reach with advanced call-forwarding and connect via desk phone, cell phone, laptop or any other mobile device.


                    </p>
                </div>
            </div>
        </div>

        <div class="freeTrial">
            <div class="left">
                <h3>
Get Your  <span>Plan</span>  Today!</h3>
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

        <div class="featuresContainer">
            <h3>Modern Power Dialer Software Features</h3>
            <div class="featuresGrid">
                <div class="card">
                    <img loading="lazy" src="{{ asset('img\PowerDialer\1.jpg') }}" alt="cardTop" />
                    <h5>Call Monitoring</h5>
                    <p>
                        Call monitoring refers to the process of listening to a
                        representative’s calls with the objective of improving the quality
                        of communication and customer service.
                    </p>
                </div>
                <div class="card">
                    <img loading="lazy" src="{{ asset('img\PowerDialer\2.jpg') }}" alt="cardTop" />
                    <h5>Smart Switch</h5>
                    <p>
                        Multiple telephony providers before placing a call. You can now safely bid adieu to all your
                        call connectivity issues.
                    </p>
                </div>

                <div class="card">
                    <img loading="lazy" src="{{ asset('img\PowerDialer\3.jpg') }}" alt="cardTop" />
                    <h5>Call Transfer</h5>
                    <p>
                        The Call Transfer feature allows you to redirect a connected call from your phone number to a
                        team member.
                    </p>
                </div>
                <div class="card">
                    <img loading="lazy" src="{{ asset('img\PowerDialer\4.jpg') }}" alt="cardTop" />
                    <h5>Call Conference</h5>
                    <p>
                        It’s a feature that will enable you to add a third person to your two-way call and turn it into
                        a 3-way conference.
                    </p>
                </div>
                <div class="card">
                    <img loading="lazy" src="{{ asset('img\PowerDialer\5.jpg') }}" alt="cardTop" />
                    <h5>Call Queuing Software</h5>
                    <p>
                        A Call Queue places incoming call in a line when the agent is busy attending other customers.
                    </p>
                </div>
                <div class="card">
                    <img loading="lazy" src="{{ asset('img\PowerDialer\6.jpg') }}" alt="cardTop" />
                    <h5>Call Barging</h5>
                    <p>

                        Call Barging is when a supervisor who is silently monitoring the call decides to enter the
                        conference bridge.
                    </p>
                </div>
                <div class="card">
                    <img loading="lazy" src="{{ asset('img\PowerDialer\7.jpg') }}" alt="cardTop" />
                    <h5>Call Recording</h5>
                    <p>
                        Record call on each of your numbers to better monitor your performance as a team.
                    </p>
                </div>
                <div class="card">
                    <img loading="lazy" src="{{ asset('img\PowerDialer\8.jpg') }}" alt="cardTop" />
                    <h5>Voice Mail</h5>
                    <p>
                        Receive voicemails by email in your inbox. Play them directly from your email.


                    </p>
                </div>
                <div class="card">
                    <img loading="lazy" src="{{ asset('img\PowerDialer\9.jpg') }}" alt="cardTop" />
                    <h5>Call Monitoring</h5>
                    <p>
                        Track agents performance. Measure the % of missed calls, call load of each teammate, etc.
                    </p>
                </div>
                <div class="card">
                    <img loading="lazy" src="{{ asset('img\PowerDialer\10.jpg') }}" alt="cardTop" />
                    <h5>Call Monitoring</h5>
                    <p>
                        On Hold Music from HivoCall is a great way to keep your callers happy and engaged while on hold
                        or upload your own custom music.
                    </p>
                </div>
                <div class="card">
                    <img loading="lazy" src="{{ asset('img\PowerDialer\11.jpg') }}" alt="cardTop" />
                    <h5>Call Analytics</h5>
                    <p>
                        Track agents performance. Measure the % of missed calls, call load of each teammate, etc.
                    </p>
                </div>
                <div class="card">
                    <img loading="lazy" src="{{ asset('img\PowerDialer\12.jpg') }}" alt="cardTop" />
                    <h5>Call Hold Audio</h5>
                    <p>
                        On Hold Music from HivoCall is a great way to keep your callers happy and engaged while on hold
                        or upload your own custom music.
                    </p>
                </div>
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
                        What is a business phone system?            
                    </h4>
                    <p class="answer">
                        A business phone system is a multi-line telephone network that facilitates the handling of large call volumes and offers advanced features for inbound or outbound call management. Such systems can range from a few telephones to a large and complex private branch exchange, depending on the type of organization and its unique needs.
                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        What is the best business phone systems for small business?
                    </h4>
                    <p class="answer">
                        The definition of the best business phone system varies depending on the type of business you have and its unique requirements. However, factors such as the type of clients you cater to, your business objectives, revenue streams, integration, and the features needed can help you decide on the best small business phone system for your needs.


                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        What are the types of business phone systems?
                    </h4>
                    <p class="answer">
                        Business phone systems can be broadly classified into three categories namely, KSU (the basic phone systems), PBX (private branch exchange) systems, and VoIP (Voice Over Internet Protocol) business phone systems. Out of the three, VoIPs are the most advanced systems that help users connect from anywhere and by using any device with the internet.


                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        How do I set up a business phone system?
                    </h4>
                    <p class="answer">
                        Setting up a virtual phone system for small business is easy if you have the necessary BPS software installed. Once you log in to the admin dashboard and set up your business hours and days, you are ready to configure team extensions and voice mail. Align your team members, design your call flows, and you are all set.

                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
