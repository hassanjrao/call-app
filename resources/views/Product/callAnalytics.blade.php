@extends('layouts')
@section('content')
    <div class="container office">
        <div class="hero-container">
            <div class="hero__title">
                <img loading="lazy" src="img/SVG/round_circles.svg"
                    alt="">
                <h2>
                    Call Analytics

                </h2>
            </div>
            <div class="hero__desc">
                <p>
                    Renovate and assess the efficiency of your existing marketing policy with HivoCall bespoke Call Analytics feature. Track records on call volume, call duration, routing of incoming and outbound calls all with the click of a button! <a href="pay">Buy It Now</a>.



                </p>
            </div>
            <div class="hero__btn">
                <button><a href="pay">Buy It Now</a></button>
            </div>
            <div class="hero__image">
                <img loading="lazy" src="{{ asset('img/SVG/BgHero1.png') }}"
                    alt="hero" />
            </div>
        </div>
        <div class="whatsIs">
            <h4>                    
                What Is Call Analytics software?

            </h4>
            <p>
                Call analytics uses the power of artificial intelligence to capture data from phone calls in contact centers. Apart from being able to find out callers’ details like phone number, name, and the advertising source that drove the call to the contact center, call analytics also helps identify if the caller was a genuine lead. It also helps advertisers understand the product or service their prospects need and if they were converted to customers by the end of the call.
            </p>
            
        </div>
        <div class="benefitsGrid">
            <div class="left">
                <h4>
                    Benefits Of A Call <span>Analytics</span>
                     
                </h4>
                
            </div>
            <div class="right">

                <div class="card">
                    <div class="icon"> <img loading="lazy" src="{{ asset("img/icons/recognize-sources-of-calls-with-callhippo-call-analytics.svg") }} " alt=""></div>

                    <h4>
                        Recognize Sources of calls

                    </h4>
                    <p>
                        Call analytics technology lets you recognize sources of incoming calls that your company acquires.




                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img loading="lazy" src="{{ asset("img/icons/real-time-tracking-with-callhippo-call-analytics.svg") }} " alt=""></i></div>

                    <h4>
                        Real-Time tracking
                    </h4>
                    <p>
                        Phone call tracking enables making more ingenious assessments for real-time phone tracking dashboards.




                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img loading="lazy" src="{{ asset("img/icons/Caller-insights-with-callhippo-call-analytics.svg") }} " alt=""></div>

                    <h4>
                        Caller Insights
                    </h4>
                    <p>
                        The broader view offered by a cloud-based speech analytics package sanctions for better-quality and precise insights into client behaviors.
                    </p>
                </div>
                <div class="card">
                    <div class="icon"> <img loading="lazy" src="{{ asset("img/icons/improve-sales-with-callhippo-call-analytics.svg") }} " alt=""></div>

                    <h4>
                        Improve Sales
                    </h4>
                    <p>
                        Prospective customers who call in response to your marketing and sales determinations must be in emphasis to conduct greater sales.

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
                <button><a href="pay">Buy It Now</a></button>
            </div>

            <div class="right">
                <img loading="lazy" src="{{ asset('img/SVG/business-phone-number.png') }}"
                    alt="freeTrial" />
            </div>
        </div>
        <div class="featuresContainer">
            <h3>
                More Call Analytics Features
            </h3>
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
                    <div class="card">
                        <div class="card-top">
                            <h4>Basic</h4>
                            <h4><span>$</span>0</h4>
                            <p>Per user/Month</p>
                            <button><a href="pay">Buy It Now</a></button>
                        </div>

                        <div class="card-bottom">
                            <p>Unlimited Users (Pay only for numbers)</p>
                            <ul class="benefits">
                                <li><i class="fa-solid fa-check"></i>Click To Dial</li>
                                <li><i class="fa-solid fa-check"></i>Global Connect</li>
                                <li><i class="fa-solid fa-check"></i>Teams</li>
                                <li><i class="fa-solid fa-check"></i>Voicemail</li>
                                <li><i class="fa-solid fa-check"></i>SMS/Text messages</li>
                                <li><i class="fa-solid fa-check"></i>Smart Switch</li>
                                <li><i class="fa-solid fa-check"></i>Last Called By</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-top">
                            <h4>Starter</h4>
                            <h4><span>$</span>18</h4>
                            <p>Per user/Month</p>
                            <button><a href="pay">Buy It Now</a></button>
                        </div>

                        <div class="card-bottom">
                            <p>Everything in Basic +
                            </p>
                            <ul class="benefits">
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
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-top">
                            <h4>Professional</h4>
                            <h4><span>$</span>30</h4>
                            <p>Per user/Month</p>
                            <button><a href="pay">Buy It Now</a></button>
                        </div>

                        <div class="card-bottom">
                            <p>Everything in Starter +
                            </p>
                            <ul class="benefits">
                                <li><i class="fa-solid fa-check"></i>Unlimited calling minutes within US/CAD</li>
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
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>


            <div class="option">
                <div class="slogan">
                    <h3>
                        Ideal for Bulk Calling for Sales, Support and Call Center Teams

                    </h3>
                </div>
                <div class="plan--wrapper">
                    <div class="card">
                        <div class="card-top">
                            <h4>Basic</h4>
                            <h4><span>$</span>0</h4>
                            <p>Per user/Month</p>
                            <button><a href="pay">Buy It Now</a></button>
                        </div>

                        <div class="card-bottom">
                            <p>Unlimited Users (Pay only for numbers)</p>
                            <ul class="benefits">
                                <li><i class="fa-solid fa-check"></i>Click To Dial</li>
                                <li><i class="fa-solid fa-check"></i>Global Connect</li>
                                <li><i class="fa-solid fa-check"></i>Teams</li>
                                <li><i class="fa-solid fa-check"></i>Voicemail</li>
                                <li><i class="fa-solid fa-check"></i>SMS</li>
                                <li><i class="fa-solid fa-check"></i>MMS</li>
                                <li><i class="fa-solid fa-check"></i>Smart Switch</li>
                                <li><i class="fa-solid fa-check"></i>Last Called By</li>
                                <li><i class="fa-solid fa-check"></i>Forward-to-device </li>
                            </ul>




                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-top">
                            <h4>Starter</h4>
                            <h4><span>$</span>16</h4>
                            <p>Per user/Month</p>
                            <button><a href="pay">Buy It Now</a></button>
                        </div>

                        <div class="card-bottom">
                            <p>Everything in Basic +
                            </p>
                            <ul class="benefits">
                                <li><i class="fa-solid fa-check"></i>Free Number</li>
                                <li><i class="fa-solid fa-check"></i>Voicemail</li>
                                <li><i class="fa-solid fa-check"></i>Shared Inbox
                                </li>
                                <li><i class="fa-solid fa-check"></i>Skill Based Call Routing
                                </li>
                                <li><i class="fa-solid fa-check"></i>Webhook</li>
                                <li><i class="fa-solid fa-check"></i>Paid Call Recording </li>
                                <li><i class="fa-solid fa-check"></i>Target Vs Achievement
                                </li>
                                <li><i class="fa-solid fa-check"></i>Campaign Management</li>





                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-top">
                            <h4>Professional</h4>
                            <h4><span>$</span>24</h4>
                            <p>Per user/Month</p>
                            <button><a href="pay">Buy It Now</a></button>
                        </div>

                        <div class="card-bottom">
                            <p>Everything in Starter +
                            </p>
                            <ul class="benefits">
                                <li><i class="fa-solid fa-check"></i>Role based access control</li>
                                <li><i class="fa-solid fa-check"></i>Free Call Recording
                                </li>
                                <li><i class="fa-solid fa-check"></i>IVR</li>
                                <li><i class="fa-solid fa-check"></i>Live Call</li>
                                <li><i class="fa-solid fa-check"></i>Call Queuing</li>
                                <li><i class="fa-solid fa-check"></i>User Working Hours</li>
                                <li><i class="fa-solid fa-check"></i>Call Reminder</li>
                                <li><i class="fa-solid fa-check"></i>After Call Work</li>
                                <li><i class="fa-solid fa-check"></i>Call Cascading</li>
                                <li><i class="fa-solid fa-check"></i>Holiday Routing
                                </li>
                                <li><i class="fa-solid fa-check"></i>Feedback for Calls
                                </li>
                                <li><i class="fa-solid fa-check"></i>IVR</li>
                                <li><i class="fa-solid fa-check"></i>Call Reminder</li>
                                <li><i class="fa-solid fa-check"></i>Holiday Routing</li>
                                <li><i class="fa-solid fa-check"></i>Gamification</li>
                                <li><i class="fa-solid fa-check"></i>Pause-Resume Recording</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>





        </div>

        <div class="faq">
            <h3>Frequently Asked Question
            </h3>
            <div class="accordion">
                <div class="tape">
                    <h4 class="question">
                        How can call analytics help your business?
                    </h4>
                    <p class="answer">
                        Call analytics is a must-have business tool that can improve bottom-line results by measuring important call metrics and identifying trends. It helps marketers understand customer requirements better to improve their product and service offerings and improve service quality.




                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        What industries should use call analytics solutions?
                    </h4>
                    <p class="answer">
                        Call analytics solutions are helpful for any industry that relies on inbound calls for operations. Some industries that frequently use call analytics include B2B marketing, e-commerce, financial services, healthcare, automotive, and tourism.
                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        What data can call analytics capture?
                    </h4>
                    <p class="answer">
                        Call analytics can provide real-time business insights and track metrics such as: <br>

                        Campaign, keyword, advert, or webpage that led to a call <br>
                        Day and time of the call <br>
                        Call duration <br>
                        Caller’s name and phone number <br>
                        Monitor if the call was answered or went to voicemail <br>
                        Call abandonment rate <br>
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
                <img loading="lazy" decoding="async" loading="lazy" src="{{ asset("img/webp/What-Is-Call-Analytics-and-Why-Should-Marketers-Use-It-Fb.webp") }} " alt="What Is Call Analytics and Why Should Marketers Use It?" height="180" width="343">                
                <a href="#" rel="noopener" data-wpel-link="internal"><h3>What Is Call Analytics and Why Should Marketers Use It?</h3> </a>
              </div>
              <div class="post">
                <img loading="lazy" decoding="async" src="{{ asset("img/webp/How-Your-Business-Can-Benefit-From-Voice-Broadcasting-FB.webp") }} " alt="How Your Business Can Benefit From Voice Broadcasting?" height="180" width="343">
                <a href="#"><h3>How Your Business Can Benefit From Voice Broadcasting?</h3> </a>
              </div>
            </div>
            
          </div>
    </div>
@endsection
