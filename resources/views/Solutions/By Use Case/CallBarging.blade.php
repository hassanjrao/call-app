@extends('layouts')
@section('content')
    <div class="container office">
        <div class="hero-container">
            <div class="hero__title">
                <img loading="lazy" src="img/icons/3points.svg"
                    alt="">
                <h2>
                    Call Barging
                </h2>
            </div>
            <div class="hero__desc">
                <p>
                    Offer timely resolution to customer queries- Reduce escalations and improve customer service quality.
                </p>
            </div>
            <div class="hero__btn">
                <button>Try ConnectVista For Free</button>
            </div>
            <div class="hero__image">
                <img loading="lazy" src="{{ asset('img/SVG/BgHero1.png') }}"
                    alt="hero" />
            </div>
        </div>
        <div class="whatsIs">
            <h4>                    
                What is Call Barging?

            </h4>
            <p>
                The call barging feature allows supervisors to join a live customer call and monitor the call-handling abilities of the agents. The supervisor can choose to observe the call silently, participate actively, offer real-time guidance through whispering, or take over the call in its entirety. This feature helps agents handle complex customer queries more efficiently and prevent escalations.
            </p>
        </div>
        <div class="benefitsGrid">
            <div class="left">
                <h4><span>Benefits </span> Of Call Barging
                 </h4>
                <p>
                    Enhance customer support quality and reduce escalations with timely aid and guidance from supervisors. Here are other important benefits of the call barging feature.

                </p>
            </div>
            <div class="right">

                <div class="card">
                    <div class="icon"> <i class="fa-solid fa-user"></i></div>

                    <h4>
                        Minimize escalations

                    </h4>
                    <p>
                        Call barging software enables supervisors to offer real-time assistance and support to agents in handling complex queries, which helps minimize the number of escalations from customers.



                    </p>
                </div>
                <div class="card">
                    <div class="icon"><i class="fa-solid fa-hand-holding-heart"></i></div>

                    <h4>
                        Customer satisfaction

                    </h4>
                    <p>
                        As call barging allows supervisors to track customer preferences and behavior, they can put forth corrective actions, effect script changes, and promote personalized customer conversations.



                    </p>
                </div>
                <div class="card">
                    <div class="icon"><i class="fa-solid fa-universal-access"></i></div>

                    <h4>
                        Train new agents
                    </h4>
                    <p>
                        Call barging helps agents acquire on-the-job training as managers can barge into ongoing calls, monitor performance, and offer assistance. This helps new agents understand what to expect in a customer call.



                    </p>
                </div>
                <div class="card">
                    <div class="icon"> <i class="fa-solid fa-filter-circle-dollar"></i></div>

                    <h4>
                        Gain customer trust
                    </h4>
                    <p>
                        With call barging, supervisors can provide silent guidance by whispering to the agents while they deal with challenging questions. The ability to offer timely resolution improves customer trust in the brand.

                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img loading="lazy" src="{{ asset("img/icons/Security.svg") }} " alt=""></div>

                    <h4>
                        Quality assurance
                    </h4>
                    <p>
                        One of the challenging attributes for call center agents is handling unpredictability in customer expectations. With call barging, supervisors can help agents in promoting quality assurance.

                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img loading="lazy" src="{{ asset("img/icons/client_interaction_bphone_nb.svg") }} " alt=""></div>

                    <h4>
                        Professional image
                    </h4>
                    <p>
                        As call barging allows supervisors to assist agents in solving complex queries, it improves first-contact resolution rates, adds a professional image, and boosts customer’s confidence in your offerings.
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
                <button>Start Free Trial</button>
            </div>

            <div class="right">
                <img loading="lazy" src="{{ asset('img/SVG/business-phone-number.png') }}"
                    alt="freeTrial" />
            </div>
        </div>

        <div class="featuresContainer">
            <h3>
                Modern Office Phone System Features
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
            <div class="plan">
                <label id="opt1" onClick="slideBg(0)" class="active">Office Phone System</label>
                <label id="opt2" onClick="slideBg(1)">Call Center Solution</label>
            </div>

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
                            <button>Sign Up Now</button>
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
                            <button>Sign Up Now</button>
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
                            <button>Sign Up Now</button>
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
                    <div class="card">
                        <div class="card-top">
                            <h4>Ultimate</h4>
                            <h4><span>$</span>42</h4>
                            <p>Per user/Month</p>
                            <button>Sign Up Now</button>
                        </div>

                        <div class="card-bottom">
                            <p>Everything in Professional +</p>
                            <ul class="benefits">
                                <li><i class="fa-solid fa-check"></i>Unlimited calling minutes within US/CAD</li>
                                <li><i class="fa-solid fa-check"></i>Call Blocking</li>
                                <li><i class="fa-solid fa-check"></i>Call Cascading</li>
                                <li><i class="fa-solid fa-check"></i>Custom Greetings</li>
                                <li><i class="fa-solid fa-check"></i>Audit Logs</li>
                                <li><i class="fa-solid fa-check"></i>Webhook</li>
                                <li><i class="fa-solid fa-check"></i>Dedicated Account Manager</li>
                                <li><i class="fa-solid fa-check"></i>Personalized Onboarding</li>
                                <li><i class="fa-solid fa-check"></i>Phone Support</li>
                                <li><i class="fa-solid fa-check"></i>24*7 Support</li>
                                <li><i class="fa-solid fa-check"></i>Advanced Integrations</li>
                                <li><i class="fa-solid fa-check"></i>Custom Integrations</li>
                                <li><i class="fa-solid fa-check"></i>Annual Business Review</li>
                                <li><i class="fa-solid fa-check"></i>Auto Rotate</li>
                                <li><i class="fa-solid fa-check"></i>Multi-level IVR</li>
                                <li><i class="fa-solid fa-check"></i>Multiple Level Call Transfer</li>
                                <li><i class="fa-solid fa-check"></i>Conference Calling</li>
                                <li><i class="fa-solid fa-check"></i>Call Barging</li>
                                <li><i class="fa-solid fa-check"></i>Single Sign On</li>
                                <li><i class="fa-solid fa-check"></i>DID Group</li>
                                <li><i class="fa-solid fa-check"></i>Call Whisper</li>
                                <li><i class="fa-solid fa-check"></i>Compliance Call Recording</li>
                                <li><i class="fa-solid fa-check"></i>Embedded Dialer Integration</li>
                                <li><i class="fa-solid fa-check"></i>Smart DID Routing</li>
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
                            <button>Sign Up Now</button>
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
                            <button>Sign Up Now</button>
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
                            <button>Sign Up Now</button>
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
                    <div class="card">
                        <div class="card-top">
                            <h4>Ultimate</h4>
                            <h4><span>$</span>40</h4>
                            <p>Per user/Month</p>
                            <button>Sign Up Now</button>
                        </div>

                        <div class="card-bottom">
                            <p>Everything in Professional +</p>
                            <ul class="benefits">
                                <li><i class="fa-solid fa-check"></i>Power Dialer</li>
                                <li><i class="fa-solid fa-check"></i>Predictive Dialer
                                </li>
                                <li><i class="fa-solid fa-check"></i>Speed to Dial
                                </li>
                                <li><i class="fa-solid fa-check"></i>Voice Broadcasting
                                </li>
                                <li><i class="fa-solid fa-check"></i>Multi-level IVR
                                </li>
                                <li><i class="fa-solid fa-check"></i>Multiple Level Call Transfer
                                </li>
                                <li><i class="fa-solid fa-check"></i>Conference Calling
                                </li>
                                <li><i class="fa-solid fa-check"></i>Call Barging
                                </li>
                                <li><i class="fa-solid fa-check"></i>Route to External Number
                                </li>
                                <li><i class="fa-solid fa-check"></i>Forward to Multiple Device </li>
                                <li><i class="fa-solid fa-check"></i>Single Sign On </li>
                                <li><i class="fa-solid fa-check"></i>DID Group
                                </li>
                                <li><i class="fa-solid fa-check"></i>Call Whisper
                                </li>
                                <li><i class="fa-solid fa-check"></i>Intelligent Reports/Analytics
                                </li>
                                <li><i class="fa-solid fa-check"></i>Reports via Email
                                </li>
                                <li><i class="fa-solid fa-check"></i>Automatic Machine Detection
                                </li>
                                <li><i class="fa-solid fa-check"></i>Compliance Call Recording
                                </li>
                                <li><i class="fa-solid fa-check"></i>Google Drive, AWS S3 Integration
                                </li>
                                <li><i class="fa-solid fa-check"></i>Embedded Dialer Integration
                                </li>
                                <li><i class="fa-solid fa-check"></i>Smart DID Routing
                                </li>
                                <li><i class="fa-solid fa-check"></i>Auto Rotate
                                </li>

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
                        
                        Should I pay an extra amount to avail of the call barging service?                    </h4>
                    <p class="answer">
                        No, call barging comes with Hivoall’s cloud-based phone system. It is a part of the Enterprise pricing plan. Hivoall offers a 10-day free trial, so you can try the features before subscribing.
                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        Why should I use the call barging feature?
                    </h4>
                    <p class="answer">
                        Call barging software offers a multitude of benefits to businesses, including, Minimizes escalation rates, Improves customer confidence, Supports training of new agents, Promotes quality assurance.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection