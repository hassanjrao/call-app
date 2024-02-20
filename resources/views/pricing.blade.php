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

                    <div class="control-grp">
                        <div class="currency">
                            <label for="currency">Pay In Currency : </label>
                            <select name="currency" id="currency">
                                <option value="USD">USD</option>
                                <option value="EUR">EUR</option>
                                <option value="MAD">MAD</option>
                                <option value="GBP">GBP</option>
                                <option value="AUD">AUD</option>
                            </select>
                        </div>

                        <div class="duration">
                            <label for="duration">Monthly</label>
                            <label class="switch">
                                <input type="checkbox" name="duration" id="duration">
                                <span class="slider"></span>
                            </label>
                            <label for="duration">Yearly</label>
                        </div>

                        <div class="unlimited">
                            <label for="unlimited">Unlimited Calling </label>
                            <select name="currency" id="currency">
                                <option value="USD">USD</option>
                                <option value="EUR">EUR</option>
                                <option value="MAD">MAD</option>
                                <option value="GBP">GBP</option>
                                <option value="AUD">AUD</option>
                            </select>
                        </div>
                    </div>
                    <div class="plan--wrapper">
                        <div class="card" data-base-price="0">
                            <a href="/pay">
                                <div class="card-top">
                                    <h4>Basic</h4>
                                    <h4 id="basic-price-1"><span>$</span>0</h4>
                                    <p>Per user/Month</p>
                                    <button>Sign Up Now</button>
                                </div>

                                <div class="card-bottom">
                                    <p class="last">Unlimited Users (Pay only for numbers)</p>
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
                        </div></a>

                        <div class="card" data-base-price="24">
                            <a href="/pay">
                                <div class="card-top">
                                    <h4>Starter</h4>
                                    <h4 id="basic-price-2"><span>$</span>24</h4>
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
                            </a>
                        </div>
                        <div class="card" data-base-price="38">
                            <a href="/pay">
                                <div class="card-top">
                                    <h4>Professional</h4>
                                    <h4 id="basic-price-3"><span>$</span>38</h4>
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
                            </a>
                        </div>
                        <div class="card" data-base-price="56">
                            <a href="/pay">
                                <div class="card-top">
                                    <h4>Ultimate</h4>
                                    <h4 id="basic-price-4"><span>$</span>56</h4>
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
                    </div></a>
                </div>


                <div class="option">
                    <div class="slogan">
                        <h3>
                            Ideal for Bulk Calling for Sales, Support and Call Center Teams

                        </h3>
                    </div>

                    <div class="control-grp">
                        <div class="currency">
                            <label for="currency">Pay In Currency : </label>
                            <select name="currency" id="currency">
                                <option value="USD">USD</option>
                                <option value="EUR">EUR</option>
                                <option value="MAD">MAD</option>
                                <option value="GBP">GBP</option>
                                <option value="AUD">AUD</option>
                            </select>
                        </div>

                        <div class="duration">
                            <label for="duration">Monthly</label>
                            <label class="switch">
                                <input type="checkbox" name="duration" id="duration">
                                <span class="slider"></span>
                            </label>
                            <label for="duration">Yearly</label>
                        </div>

                        <div class="unlimited">
                            <label for="unlimited">Unlimited Calling </label>
                            <select name="currency" id="currency">
                                <option value="USD">USD</option>
                                <option value="EUR">EUR</option>
                                <option value="MAD">MAD</option>
                                <option value="GBP">GBP</option>
                                <option value="AUD">AUD</option>
                            </select>
                        </div>
                    </div>
                    <div class="plan--wrapper">
                        <div class="card" data-base-price="0">
                            <a href="/pay">
                                <div class="card-top">
                                    <h4>Basic</h4>
                                    <h4 id="basic-price-5"><span>$</span>0</h4>
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
                            </a>
                        </div>
                        <div class="card" data-base-price="20">
                            <a href="/pay">
                                <div class="card-top">
                                    <h4>Starter</h4>
                                    <h4 id="basic-price-6"><span>$</span>20</h4>
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
                            </a>
                        </div>
                        <div class="card" data-base-price="30">
                            <a href="/pay">
                                <div class="card-top">
                                    <h4>Professional</h4>
                                    <h4 id="basic-price-7"><span>$</span>30</h4>
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
                        <div class="card" data-base-price="50">
                            <div class="card-top">
                                <h4>Ultimate</h4>
                                <h4 id="basic-price-8"><span>$</span>50</h4>
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
                    </div></a>
                </div>





            </div>


            <div class="trial">
                <h3>A Flexible Phone System With Robust Features To Streamline Your Calling Process
                </h3>

                <button>10 Days Free trial</button>
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
                        <button>Contact Us</button>
                        <p>
                            A predictive dialer is an automated system that efficiently places outbound calls from a list of
                            phone numbers.
                        </p>
                    </div>
                    <div class="right">
                        <h3 class="price">
                            <span>$</span>125
                        </h3>
                        <p>Per user/Month</p>
                        <ul class="ben">
                            <li>Unlimited Calling within US/CAD</li>
                            <li>99.99% Automatic Machine Detection Accuracy</li>
                            <li>Smart DID Routing</li>
                            <li>Queue Calls</li>
                            <li>Auto Pacing Dial Ratio</li>
                            <li>Controlled Multiple Call Attempts</li>
                            <li>Time zone Dialing</li>
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
                    <button>Request A Demo</button>
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
                            <div class="top">
                                <p class="first-p">Bronze</p>
                                <h3><span>$</span>20</h3>
                                <p>Per user/Month</p>
                                <button>Start Free Trial</button>
                                <p class="last">Unlock Conversation Instantly: Just Scan, Connect & Chat
                                </p>
                            </div>
                            <ul class="bottom">
                                <li>Multi-number Shared Inbox</li>
                                <li>WhatsApp QR Scan</li>
                                <li>Unlimited contact sync</li>
                                <li>One-click WhatsApp CRM Integrations</li>
                                <li>24*7 Support</li>
                                <li>Chrome Extension</li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="top">
                                <p class="first-p">Silver</p>
                                <h3><span>$</span>35</h3>
                                <p>Per user/Month</p>
                                <button>Start Free Trial</button>
                                <p class="last">"Seal the Deal!!" Build your business with Trust & Authentication”
                                </p>
                            </div>
                            <ul class="bottom">
                                <span>Everything in Bronze +
                                </span>
                                <li>Additional Privacy</li>
                                <li>Verified Green tick Number</li>
                                <li>Advanced CRM integration</li>
                                <li>Automatic lead creation in CRM</li>
                                <li>Quick Replies</li>
                                <li>Assign Chat</li>
                                <li>Analytics Report</li>
                                <li>Canned Message</li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="top">
                                <p class="first-p">Gold</p>
                                <h3><span>$</span>50</h3>
                                <p>Per user/Month</p>
                                <button>Start Free Trial</button>
                                <p class="last">Customized Solution Design and Implementation Support
                                </p>
                            </div>
                            <ul class="bottom">
                                <span>Everything in Silver +</span>
                                <li>Complimentary Price Adjustment</li>
                                <li>Broadcast Messages</li>
                                <li>Auto Reply</li>
                                <li>Chat Support</li>
                                <li>Drip</li>
                                <li>ChatGPT Integration</li>
                                <li>On-demand Features</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="trial">
                    <h3>Features
                    </h3>
                    <p>CallHippo empowers teams to engage in personalized, scalable customer conversations via WhatsApp.
                    </p>
                    <button>Start Free Trial</button>
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
                    <button>Request A Demo</button>
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
                        <button>Contact Us</button>
                        <p>
                            This specialized app offers features for enhanced customer engagement, streamlined messaging,
                            and effective management of business communications.
                        </p>
                    </div>
                    <div class="right">
                        <h3 class="price">
                            <span>$</span>15
                        </h3>
                        <p>Per user/Month</p>
                        <ul class="ben">
                            <i>Expansive Customer Reach</i>
                            <i>Enhanced Communication</i>
                            <i>Deeper Customer Insights</i>
                            <i>Round-the-Clock Availability</i>
                            <i>Heightened Success Rates</i>
                            <i>Refined Communication Channel</i>
                        </ul>
                    </div>
                </div>

                <div class="trial">
                    <h3>Whatsapp Business Number Charges
                    </h3>
                    <p>WhatsApp Business introduces a powerful communication platform designed for businesses,
                        enabling direct and efficient interaction with customers
                    </p>
                    <button>View Pricing</button>
                </div>
                <div class="trial">
                    <h3>Features
                    </h3>
                    <p>Engage with customers directly, providing quick support and responses Create a professional profile
                        to showcase your business information.
                    </p>
                    <button>Contact us</button>
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
                    <button>Contact us</button>
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
