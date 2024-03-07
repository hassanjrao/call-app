@extends('layouts')
@section('content')
    <div class="container powerDialer">
        <div class="hero-container">
            <div class="hero__title">
                <img loading="lazy" src="img/icons/3points.svg" alt="">
                <h2>Power Dialer</h2>
            </div>
            <div class="hero__desc">
                <p>
                    With HivoCall, you can get a power dialer and have it up and running in less than 3 minutes from
                    anywhere in the world. Powered by robust features, HivoCall’s powerful commercial phone system is
                    one of the most comprehensive solutions for all your business communication needs.

                </p>
            </div>
            <div class="hero__btn">
                <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button>
            </div>
            <div class="hero__image">
                <img loading="lazy" src="{{ asset('img/SVG/BgHero1.png') }}" alt="hero" />
            </div>
        </div>
        <div class="whatsIs">
            <h4>What Is Power Dialer?</h4>
            <p>
                A power dialer (also known as an auto dialer) is a piece of automated
                telephone technology used to automatically dial a phone number after a
                call has been completed. Once an operator finishes a call, the power
                dialer software will call the next contact in the list. Power dialing
                software comes in really handy when you are cold calling or running a
                telemarketing process.
            </p>
        </div>
        <div class="benefitsGrid">
            <div class="left">
                <h4>Benefits Of A Power Dialer <span>Software</span> </h4>
                <p>
                    Power dialers are powerful tools that will boost and motivate your
                    team as well as make your life easier at work skipping the inactive
                    and unproductive leads.
                </p>
            </div>
            <div class="right">

                <div class="card">
                    <div class="icon"> <i class="fa-solid fa-user"></i></div>

                    <h4>Increased Agents’ Productivity</h4>
                    <p>
                        Power dialer will call by itself and your agents won’t need to
                        manually dial their next lead’s number
                    </p>
                </div>
                <div class="card">
                    <div class="icon"><i class="fa-solid fa-hand-holding-heart"></i></div>

                    <h4>
                        Save Time
                    </h4>
                    <p>
                        When the dialing process is taken care of, you can clearly save time.


                    </p>
                </div>
                <div class="card">
                    <div class="icon"><i class="fa-solid fa-universal-access"></i></div>

                    <h4>
                        Increase Your Sales
                    </h4>
                    <p>
                        Using a power dialer, your sales representatives will be able to drive more pipeline and drastically increase sales conversions.


                    </p>
                </div>
                <div class="card">
                    <div class="icon"> <i class="fa-solid fa-filter-circle-dollar"></i></div>

                    <h4>
                        Manage Leads
                    </h4>
                    <p>
                        Power dialer software for lead management can organize lead and sales information, customer history, and contact data.


                    </p>
                </div>
                <div class="card">
                    <div class="icon"><i class="fa-solid fa-thumbs-up"></i></div>

                    <h4>
                        Improves Customer Satisfaction
                    </h4>
                    <p>
                        Since agents have access to detailed customer data and use the best-predetermined call strategy for each customer, all customers benefit from personalized experiences that lead to greater long-term loyalty.


                    </p>
                </div>
                <div class="card">
                    <div class="icon"> <i class="fa-solid fa-chart-simple"></i></div>

                    <h4>
                        Analytics
                    </h4>
                    <p>
                        You can work to improve the overall efficiency of your sales team or provide extra training to salespeople who need some extra guidance when you can view a detailed history of how your team performs.


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
                <img loading="lazy" src="{{ asset('img/SVG/business-phone-number.png') }}" alt="freeTrial" />
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
                        Can I try HivoCall Speech Analytics before subscribing to a plan? <i class="fa-solid fa-plus"></i>
                    </h4>
                    <p class="answer">
                        Of course yes. We will put you on a pilot before you are ready to make a commitment. The purpose
                        of the pilot is to help you try out the your hands on the system and understand the impact that
                        HivoCall Speech Analytics can make on your business.
                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        Do you offer volume discount? <i class="fa-solid fa-plus"></i>
                    </h4>
                    <p class="answer">
                        If you are a large contact centers, we will be glad to offer you volume discounts based on your
                        transcribing hours required. Get in touch with us to know more about our bulk volume pricing.


                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        What’s the minimum contract that I need to commit to? <i class="fa-solid fa-plus"></i>
                    </h4>
                    <p class="answer">
                        HivoCall doesn’t ask you for annual commitments or minimum agent guarantees, though the RoI of
                        the tool comes when you have more than 3 calling agents. You can stop your subscription any time
                        you wish. In short, there’s no contract that we bind you to.
                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        Which VoIP integrations do you support? <i class="fa-solid fa-plus"></i>
                    </h4>
                    <p class="answer">
                        At the moment, HivoCall Speech Analytics works seamlessly with HivoCall’s VoIP telephony. Let
                        us know the VoIP provider are you currently using, and we will build the integration for you
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
