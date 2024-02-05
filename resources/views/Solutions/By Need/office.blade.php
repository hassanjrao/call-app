@extends('layouts')
@section('content')
    <div class="container office">
        <div class="hero-container">
            <div class="hero__title">
                <img src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/round_circles_business_phone_sys_top.svg"
                    alt="">
                <h2>Office Phone System</h2>
            </div>
            <div class="hero__desc">
                <p>
                    With HivoCall, you can get a power dialer and have it up and running in less than 3 minutes from anywhere in the world. Powered by robust features, HivoCall’s powerful commercial phone system is one of the most comprehensive solutions for all your business communication needs.

                </p>
            </div>
            <div class="hero__btn">
                <button>Try ConnectVista For Free</button>
            </div>
            <div class="hero__image">
                <img src="https://callhippo.com/wp-content/uploads/customupload/img/homepage/ch_dashboard_v2.1.svg"
                    alt="hero" />
            </div>
        </div>
        <div class="whatsIs">
            <h4>                    What Is Office Phone System?
            </h4>
            <p>
                Regardless of the size of your business, you need to own an office phone system to mark your presence in a new market. Whether it is handling customer service calls or making promotional calls to clients, a cost-effective yet productive office phone is extremely important.

            </p>
            <p>
                Small to medium scale businesses can benefit from the office phone system in ways that are beyond elucidation. Unlike the traditional telephony system, a virtual phone system for office allows you to set working hours, convert emails into voicemails, and more.
            </p> 
        </div>
        <div class="benefitsGrid">
            <div class="left">
                <h4>Benefits Of The Office <span>Telephone</span> System </h4>
                <p>
                    HivoCall offers virtual international phone numbers for over 50 countries across the world.
                    Let’s take a look at how an office phone system from HivoCall can be beneficial for your business:
                </p>
            </div>
            <div class="right">

                <div class="card">
                    <div class="icon"> <i class="fa-solid fa-user"></i></div>

                    <h4>Cost-Efficiency
                    </h4>
                    <p>
                        With VoIP office phone system of HivoCall, you can make international calls as low as $0.002 over a single click. It saves time and cost simultaneously.


                    </p>
                </div>
                <div class="card">
                    <div class="icon"><i class="fa-solid fa-hand-holding-heart"></i></div>

                    <h4>
                        Secure Your Information
                    </h4>
                    <p>
                        The cloud-integration is of great use when it comes to secure the business information. The cloud space keeps your information secure and at the same time readily available to use at any time.


                    </p>
                </div>
                <div class="card">
                    <div class="icon"><i class="fa-solid fa-universal-access"></i></div>

                    <h4>
                        Build a Brand Image
                    </h4>
                    <p>
                        Using an office support phone number for professional use not only saves a lot of money on your operational cost but also put up a professional brand image amongst the crowd.


                    </p>
                </div>
                <div class="card">
                    <div class="icon"> <i class="fa-solid fa-filter-circle-dollar"></i></div>

                    <h4>
                        Better Customer Response
                    </h4>
                    <p>
                        Office support phone number comes with various features such as call conferencing; on-hold and IVR. All these features assist a business to render quick and professional customer services.


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
                <img src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/business-phone-number-cta-min.png"
                    alt="freeTrial" />
            </div>
        </div>

        <div class="featuresContainer">
            <h3>
                Modern Office Phone System Features
            </h3>
            <div class="featuresGrid">
                <div class="card">
                    <img src="{{ asset('img\PowerDialer\1.jpg') }}" alt="cardTop" />
                    <h5>Call Monitoring</h5>
                    <p>
                        Call monitoring refers to the process of listening to a
                        representative’s calls with the objective of improving the quality
                        of communication and customer service.
                    </p>
                </div>
                <div class="card">
                    <img src="{{ asset('img\PowerDialer\2.jpg') }}" alt="cardTop" />
                    <h5>Smart Switch</h5>
                    <p>
                        Multiple telephony providers before placing a call. You can now safely bid adieu to all your
                        call connectivity issues.
                    </p>
                </div>

                <div class="card">
                    <img src="{{ asset('img\PowerDialer\3.jpg') }}" alt="cardTop" />
                    <h5>Call Transfer</h5>
                    <p>
                        The Call Transfer feature allows you to redirect a connected call from your phone number to a
                        team member.
                    </p>
                </div>
                <div class="card">
                    <img src="{{ asset('img\PowerDialer\4.jpg') }}" alt="cardTop" />
                    <h5>Call Conference</h5>
                    <p>
                        It’s a feature that will enable you to add a third person to your two-way call and turn it into
                        a 3-way conference.
                    </p>
                </div>
                <div class="card">
                    <img src="{{ asset('img\PowerDialer\5.jpg') }}" alt="cardTop" />
                    <h5>Call Queuing Software</h5>
                    <p>
                        A Call Queue places incoming call in a line when the agent is busy attending other customers.
                    </p>
                </div>
                <div class="card">
                    <img src="{{ asset('img\PowerDialer\6.jpg') }}" alt="cardTop" />
                    <h5>Call Barging</h5>
                    <p>

                        Call Barging is when a supervisor who is silently monitoring the call decides to enter the
                        conference bridge.
                    </p>
                </div>
                <div class="card">
                    <img src="{{ asset('img\PowerDialer\7.jpg') }}" alt="cardTop" />
                    <h5>Call Recording</h5>
                    <p>
                        Record call on each of your numbers to better monitor your performance as a team.
                    </p>
                </div>
                <div class="card">
                    <img src="{{ asset('img\PowerDialer\8.jpg') }}" alt="cardTop" />
                    <h5>Voice Mail</h5>
                    <p>
                        Receive voicemails by email in your inbox. Play them directly from your email.


                    </p>
                </div>
                <div class="card">
                    <img src="{{ asset('img\PowerDialer\9.jpg') }}" alt="cardTop" />
                    <h5>Call Monitoring</h5>
                    <p>
                        Track agents performance. Measure the % of missed calls, call load of each teammate, etc.
                    </p>
                </div>
                <div class="card">
                    <img src="{{ asset('img\PowerDialer\10.jpg') }}" alt="cardTop" />
                    <h5>Call Monitoring</h5>
                    <p>
                        On Hold Music from HivoCall is a great way to keep your callers happy and engaged while on hold
                        or upload your own custom music.
                    </p>
                </div>
                <div class="card">
                    <img src="{{ asset('img\PowerDialer\11.jpg') }}" alt="cardTop" />
                    <h5>Call Analytics</h5>
                    <p>
                        Track agents performance. Measure the % of missed calls, call load of each teammate, etc.
                    </p>
                </div>
                <div class="card">
                    <img src="{{ asset('img\PowerDialer\12.jpg') }}" alt="cardTop" />
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
                        
                        What features are included in HivoCall office phone system?                    
                    </h4>
                    <p class="answer">
                        HivoCall provides innovative and advanced functionality through its office phone systems. Some of the best features include PowerDialer, automatic call distribution, IVR, call monitoring, call conference, call routing, call recording, and call analytics.


                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        How long does it take to activate HivoCall office phone system?                    </h4>
                    <p class="answer">
                        As HivoCall is a cloud-based solution it ensures simple and hassle-free implementation. You can set up your office phone system in less than three minutes and start making or receiving calls.

                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        How can we forward a call through HivoCall office phone system?
                    </h4>
                    <p class="answer">
                        HivoCall’s smart call forwarding feature enables you to forward calls to any landline, mobile phone number, or satellite phone. You need to enable call forwarding services and add the number where your calls should be routed. It is a great feature that ensures you do not miss even a single business call!


                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        How to use an office phone?                    </h4>
                    <p class="answer">
                        It would be best if you have a few things to install a business phone system, such as a strong Internet connection, router, modem, and other vital VoIP equipment. In addition, you’ll create call flow paths, record IVR systems, and assign agents to extensions and call groups during the setup process.
                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        Can I make global phone calls with an office phone system?
                    </h4>
                    <p class="answer">
                        Yes, office phone systems can help businesses connect easily with global clients, partners, and vendors. They can help you plan business engagements better with features such as call planner and build a global presence.                    </p>
                </div>
                

            </div>
        </div>
    </div>
@endsection
