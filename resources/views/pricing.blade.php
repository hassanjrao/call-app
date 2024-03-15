@extends('layouts')
@section('content')
    <div class="pricing">
        <div class="pricing__top">
            <div class="path">
                <p>
                    <a href="#">Home</a> >
                    <a href="#">Pricing</a>
                </p>
            </div>
            <div class="pricing__options">
                <div onClick="topSlide(0); activateOption(0)" class="prc__opt active" data-target="businessPhoneSystem">
                    Business Phone System
                </div>
                <div onClick="topSlide(1); activateOption(1)" class="prc__opt" data-target="speechAnalytics">Speech Analytics
                </div>
                <div onClick="topSlide(2); activateOption(2)" class="prc__opt" data-target="callTracking">Call Tracking
                </div>
                <div onClick="topSlide(3); activateOption(3)" class="prc__opt" data-target="voiceBroadcasting">Voice
                    Broadcasting</div>
            </div>

        </div>


        <div id="businessPhoneSystem" class="active">
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
                                        <h4><span>$</span>{{ $plan->price }}</h4>
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


            <div class="trial">
                <h3>A Flexible Phone System With Robust Features To Streamline Your Calling Process
                </h3>

            </div>



            <div class="ourApp">
                <div class="ourApp-wrapper">
                    <div class="left">
                        <h3>Run Your Business From
                            Anywhere With Our Web & Mobile Apps</h3>
                        <div class="findUs">
                            <img loading="lazy" src="{{ asset('img/IOS.png') }}" alt="">
                            <img loading="lazy" src="{{ asset('img/Google_Play.png') }}" alt="">
                            <img loading="lazy" src="{{ asset('img/chore_web_store.png') }}" alt="">
                            <img loading="lazy" src="{{ asset('img/windows-beta-badge.png') }}" alt="">
                            <img loading="lazy" src="{{ asset('img/macos.png') }}" alt="">
                        </div>
                    </div>
                    <div class="right">
                        <img loading="lazy" src="{{ asset('img/SVG/mobile_app_design.png') }}" alt="phone">
                    </div>
                </div>


            </div>
        </div>


        <div id="speechAnalytics">
            <div class="speechWrapper">
                <div class="top">
                    <div class="left">
                        <h3 class="title">Empower Your Calls: Unleash the Power of Predictive Dialer</h3>
                        <p>
                            A predictive dialer is an automated system that efficiently places outbound calls from a list of
                            phone numbers.
                        </p>
                    </div>
                    <div class="right">
                        <h3 class="price">
                            <span>$</span>{{ $lastPlan->price }}
                        </h3>
                        <p>Per user/Month</p>
                        <ul class="ben">
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
                        </ul>
                    </div>
                </div>
                <div class="middle">
                    <div class="card">
                        <i class="fa-solid fa-chart-simple"></i>
                        <h4>Productivity Boost
                        </h4>
                        <p>
                            Boost agent productivity significantly with the implementation of a predictive dialer. By
                            automating call initiation and filtering out unproductive calls
                        </p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-network-wired"></i>
                        <h4>Productivity Boost
                        </h4>
                        <p>
                            Boost agent productivity significantly with the implementation of a predictive dialer. By
                            automating call initiation and filtering out unproductive calls
                        </p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-globe"></i>
                        <h4>Productivity Boost
                        </h4>
                        <p>
                            Boost agent productivity significantly with the implementation of a predictive dialer. By
                            automating call initiation and filtering out unproductive calls
                        </p>
                    </div>
                </div>
                <div class="trial">
                    <h3>A Flexible Phone System With Robust Features To Streamline Your Calling Process
                    </h3>
                    <p>Efficiently engage a sizable audience simultaneously through the predictive dialer's capabilities.
                    </p>
                </div>
            </div>
        </div>

        <div id="callTracking">
            <div class="callTrackingWrapper">
                <div class="top">
                    <h3 class="title">Multi-Channel Shared Inbox with CRM Integration
                    </h3>
                    <div class="plans">
                        <div class="card">
                            <a href="{{ route('checkout', $plan->id) }}">
                            <div class="top">
                                <p class="first-p">{{ $lastPlan->name }}</p>
                                <h3><span>$</span>{{ $lastPlan->price }}</h3>
                                <p>Per user/Month</p>
                                <button>Get Plan</button>
                                </div></a>
                            <div class="bottom">
                                <ul>
                                    <li><i class="fa-solid fa-check"></i>Unlimited calling minutes within US/CAD</li>
                                    <li><i class="fa-solid fa-check"></i>Call Blocking</li>
                                    <li><i class="fa-solid fa-check"></i>Call Cascading</li>
                                    <li><i class="fa-solid fa-check"></i>Custom Greetings</li>
                                    <li><i class="fa-solid fa-check"></i>Audit Logs</li>
                                    <li><i class="fa-solid fa-check"></i>Webhook</li>
                                    <li><i class="fa-solid fa-check"></i>24*7 Support</li>
                                    <li><i class="fa-solid fa-check"></i>Dedicated Account Manager</li>
                                    <li><i class="fa-solid fa-check"></i>Personalized Onboarding</li>
                                </ul>
                                <ul>
                                    <li><i class="fa-solid fa-check"></i>Multiple Level Call Transfer</li>
                                    <li><i class="fa-solid fa-check"></i>Conference Calling</li>
                                    <li><i class="fa-solid fa-check"></i>Call Barging</li>
                                    <li><i class="fa-solid fa-check"></i>Single Sign On</li>
                                    <li><i class="fa-solid fa-check"></i>Auto Rotate</li>
                                    <li><i class="fa-solid fa-check"></i>DID Group</li>
                                    <li><i class="fa-solid fa-check"></i>Call Whisper</li>
                                    <li><i class="fa-solid fa-check"></i>Compliance Call Recording</li>
                                    <li><i class="fa-solid fa-check"></i>Embedded Dialer Integration</li>
                                </ul>

                            </div>
                            
                        </div>

                    </div>
                </div>
                <div class="trial">
                    <h3>Features
                    </h3>
                    <p>CallHippo empowers teams to engage in personalized, scalable customer conversations via WhatsApp.
                    </p>
                </div>
                <div class="features">
                    <div class="card">
                        <i class="fa-solid fa-globe"></i>
                        <h4>WhatsApp Business Web



                        </h4>
                        <p>
                            Ensure conversations are always within reach without device limitations. Empower teams to
                            efficiently manage high WhatsApp volumes on desktops.



                        </p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-envelope"></i>
                        <h4>WhatsApp Bulk Messages


                        </h4>
                        <p>
                            Send timely announcements, event invites, special offers, and more at scale to inspire action
                            and nurture meaningful customer relationships.




                        </p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-gear"></i>
                        <h4>WhatsApp Automation


                        </h4>
                        <p>
                            Increase sales by integrating third-party tools to automatically send WhatsApp messages based on
                            customer behavior.




                        </p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-person"></i>
                        <h4>Multiple Users Access


                        </h4>
                        <p>
                            Ensure conversations are always within reach without device limitations. Empower teams to
                            efficiently manage high WhatsApp volumes on desktops.






                        </p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-rotate"></i>
                        <h4>WhatsApp Auto Reply


                        </h4>
                        <p>
                            Streamline customer interactions with automated messaging workflows. Instantly respond to common
                            inquiries, send follow-ups, or route to agents.



                        </p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-chart-line"></i>
                        <h4>Chat Labels

                        </h4>
                        <p>
                            Organize conversations efficiently for streamlined customer management, ensuring no query goes
                            unnoticed or unresolved.


                        </p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-tag"></i>
                        <h4>Analytics


                        </h4>
                        <p>
                            Gain data-driven insights into the business impact of your WhatsApp communication through
                            detailed analytics and quantify your ROI.




                        </p>
                    </div>

                    <div class="card">
                        <i class="fa-solid fa-tag"></i>
                        <h4>Resolve/Unresolved Chat

                        </h4>
                        <p>
                            Easily track and manage chat statuses for swift issue resolution and maintain a clear overview
                            of resolved and pending customer concerns.


                        </p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-headset"></i>
                        <h4>Broadcast Campaign
                        </h4>
                        <p>
                            Conduct targeted outreach to a mass audience through pre-scheduled messages, promoting your
                            products, services, or updates at scale.


                        </p>
                    </div>
                </div>

                <div class="trial">
                    <h3>Benefits
                    </h3>
                    <p>Transforming Customer Conversations with Personalized, Scalable Interactions.


                    </p>
                </div>


            </div>
        </div>

        <div id="voiceBroadcasting">
            <div class="voiceBroadcastingWrapper">
                <div class="top">
                    <div class="left">
                        <h3 class="title">Enhancing Customer Relationships through Seamless Interaction</h3>
                        <h4>
                            WhatsApp Business presents a suite of benefits for businesses
                        </h4>
                        <p>
                            This specialized app offers features for enhanced customer engagement, streamlined messaging,
                            and effective management of business communications.
                        </p>
                    </div>
                    <div class="right">
                        <h3 class="price">
                            <span>$</span>{{ $plans->first()->price }}
                        </h3>
                        <p>Per user/Month</p>
                        <ul class="ben">
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

                <div class="trial">
                    <h3>Whatsapp Business Number Charges
                    </h3>
                    <p>WhatsApp Business introduces a powerful communication platform designed for businesses,
                        enabling direct and efficient interaction with customers
                    </p>
                </div>
                <div class="trial">
                    <h3>Features
                    </h3>
                    <p>Engage with customers directly, providing quick support and responses Create a professional profile
                        to showcase your business information.
                    </p>
                </div>
                <div class="middle">
                    <div class="card">
                        <i class="fa-solid fa-universal-access"></i>
                        <h4>Unrivaled Reach
                        </h4>
                        <p>
                            Engage your audience on the platform with the largest active user base worldwide - over 2
                            billion people across key demographics. Open the door to massive growth by going where your
                            customers already are.
                        </p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-message"></i>
                        <h4>Impactful Messaging

                        </h4>
                        <p>
                            Make every message count by utilizing rich media like images, videos, and documents to craft
                            visually appealing and informative content. Drive higher response rates with multimedia content
                            via WhatsApp API integration.
                        </p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-group-arrows-rotate"></i>
                        <h4>Optimize Engagement
                        </h4>
                        <p>
                            Harness detailed analytics on message effectiveness, user behaviors, and full marketing campaign
                            ROI to continually refine your messaging approach. Get the direct feedback you need to convert
                            contacts into loyal customers.
                        </p>
                    </div>
                </div>
                <div class="trial">
                    <h3>Benefits
                    </h3>
                    <p>Engage with customers directly, providing quick support and responses. Create a professional profile
                        to showcase your business information


                    </p>
                </div>
                <div class="middle">
                    <div class="card">
                        <i class="fa-solid fa-people-arrows"></i>
                        <h4>Leverage Natural Conversations

                        </h4>
                        <p>
                            Engage your audience on the platform with the largest active user base worldwide - over 2
                            billion people across key demographics. Open the door to massive growth by going where your
                            customers already are.
                        </p>
                    </div>
                    <div class="card">
                        <i class="fa-regular fa-clock"></i>
                        <h4>24/7 Omnichannel Availability

                        </h4>
                        <p>
                            Seamlessly integrate messaging with voice, email, and other channels to empower consumers to
                            effortlessly connect with your brand at their convenience. Enhance retargeting and drive more
                            conversions.
                        </p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                        <h4>Gain Rich Customer Insights
                        </h4>
                        <p>
                            Analyze crucial conversational data within the CallHippo interface, yielding actionable insights
                            to enhance customer experience (CX) and drive overall business efficacy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <script>
        var options = document.querySelectorAll('.pricing__options .prc__opt');

        function activateOption() {
            document.querySelectorAll('.pricing > div[id]').forEach(function(div) {
                div.classList.remove('active');
            });
            var targetId = this.getAttribute('data-target');
            var targetDiv = document.getElementById(targetId);
            if (targetDiv) {
                targetDiv.classList.add('active');
            }
        }
        options.forEach(function(option) {
            option.addEventListener('click', activateOption);
        });



        document.addEventListener('DOMContentLoaded', function() {

        });
    </script>
    </div>
@endsection
