@extends('layouts')
@section('content')
    <div class="container office">
        <div class="hero-container">
            <div class="hero__title">
                <img src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/round_circles_business_phone_sys_top.svg"
                    alt="">
                <h2>
                    Call Monitoring

                </h2>
            </div>
            <div class="hero__desc">
                <p>
                    All of us have heard the automated message when we call up customer service for complaint resolution: “This call may be monitored or recorded for quality assurance purposes.” We believe that call monitoring is all about control and training. However, this feature can be used for various businesses and departments.

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
            <h4>                    
                What Is Call Monitoring?

            </h4>
            <p>
                Call monitoring refers to the process of listening to a representative’s calls with the objective of improving the quality of communication and customer service. It is widely used in customer support and telemarketing settings to increase call center agent efficiency and deliver a high-quality customer experience.

            </p>
            
        </div>
        <div class="benefitsGrid">
            <div class="left">
                <h4>
                    Benefits Of Call <span>Monitoring</span> Software
                </h4>
                <p>
                    In a nutshell, right call monitoring software helps you ensure that your call center workforce is effective, compliant, and productive in providing excellent customer service.

                </p>
                <p>
                    Here are some of the key benefits of call monitoring


                </p>
                
            </div>
            <div class="right">

                <div class="card">
                    <div class="icon"> <img src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/Increased-agent-morale-with-call-monitoring.svg" alt=""></div>

                    <h4>
                        Increased agent morale

                    </h4>
                    <p>
                        Working in a call center, especially outbound where agents need to make sales, can be difficult. The agents need to know what they’re doing wrong and how they can improve.

                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/Boost-sales-with-call-monitoring.svg" alt=""></i></div>

                    <h4>
                        Boost sales
                    </h4>
                    <p>
                        Call monitoring helps you run your outbound call center like a well-oiled machine. By tracking your agents’ calls, you can determine what exactly they’re doing wrong and how to maximize their potential to increase sales.

                    </p>
                </div>
                <div class="card">
                    <div class="icon"><img src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/Enhanced-customer-satisfaction-with-call-monitoring.svg" alt=""></div>

                    <h4>
                        Enhanced customer satisfaction
                    </h4>
                    <p>
                        Call monitoring lets you train your agents to be customer-centric and focus on the customers’ satisfaction. Satisfied customers turn into recurring customers, which adds revenue to your business.

                    </p>
                </div>
                <div class="card">
                    <div class="icon"> <img src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/Improve-agent-performance-with-call-monitoring.svg" alt=""></div>

                    <h4>
                        Improve agent performance
                    </h4>
                    <p>
                        Once by using call monitoring, you’ve identified the deficits in an agent’s performance, you can organize curated training sessions to address them
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
                Call Center Call Monitoring Features
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
                        What are the capabilities of call monitoring software?
                    </h4>
                    <p class="answer">
                        There are various capabilities available in call center monitoring software. Call center monitoring software tracks your calls and delivers caller information in real-time to your manager, service provider, or supervisors. Some allow you to monitor particular calls, such as those for customer service or threats in the workplace. Others are more general-purpose and can be used to monitor your calls with other companies or individuals.
                    </p>
                </div>
                <div class="tape">
                    <h4 class="question">
                        Who uses call monitoring system?

                    </h4>
                    <p class="answer">
                        Businesses with a focus on sales and customer service implement call center monitoring software. It helps them constantly evaluate and optimize their practices.
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
                <img decoding="async" loading="lazy" src="https://webcdn.callhippo.com/blog/wp-content/uploads/2023/04/10-Best-Call-Monitoring-Software-For-2023_fb-1024x538.jpg" alt="Best Call Monitoring Software For 2023" height="180" width="343">                
                <a href="#" rel="noopener" data-wpel-link="internal"><h3>Call Center Monitoring: Best Practices &amp; 5 Providers</h3></a>
              </div>
              <div class="post">
                <img decoding="async" loading="lazy" src="https://webcdn.callhippo.com/blog/wp-content/uploads/2023/05/call-center-quality-monitoring-1024x538.png" alt="Call Center Monitoring" height="180" width="343">
                <a href="#"><h3>Call Center Monitoring: Best Practices &amp; 5 Providers</h3> </a>
              </div>
              <div class="post">
                <img decoding="async" loading="lazy" src="https://webcdn.callhippo.com/blog/wp-content/uploads/2020/11/Tips-to-Improve-Your-Call-Quality-Monitoring_FB.jpg" alt="Ways to Improve Your Call Quality Monitoring Process
                " height="180" width="343">
                <a href="#"><h3>Ways to Improve Your Call Quality Monitoring Process</h3></a>
              </div>
            </div>
            
          </div>
    </div>
@endsection
