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
                <div onClick="topSlide(0)" class="prc__opt active">Business Phone System</div>
                <div onClick="topSlide(1)" class="prc__opt">Speech Analytics</div>
                <div onClick="topSlide(2)"class="prc__opt">Call Tracking</div>
                <div onClick="topSlide(3)" class="prc__opt">Voice Broadcasting</div>
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
        {{-- <div class="pricing__bottom">
            <div class="pricing__bottom--wrapper">


                <div class="plan">
                    <label for="opt1" onClick="slideBg(0)" class="active">Office Phone System</label>
                    <label for="opt2" onClick="slideBg(1)">Call Center Solution</label>
                </div>

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
                        <div class="card-top">
                            <h4>Basic</h4>
                            <h4><span>$</span>0</h4>
                            <p>Per user/Month</p>
                            <a href="/pay">Sign Up Now</a>                        
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
                    <div class="card" data-base-price="0">
                        <div class="card-top">
                            <h4>Starter</h4>
                            <h4><span>$</span>18</h4>
                            <p>Per user/Month</p>
<a href="/pay">Sign Up Now</a>                        </div>

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
                    <div class="card" data-base-price="0">
                        <div class="card-top">
                            <h4>Professional</h4>
                            <h4><span>$</span>30</h4>
                            <p>Per user/Month</p>
<a href="/pay">Sign Up Now</a>                        </div>

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
                    <div class="card" data-base-price="0">
                        <div class="card-top">
                            <h4>Ultimate</h4>
                            <h4><span>$</span>42</h4>
                            <p>Per user/Month</p>
<a href="/pay">Sign Up Now</a>                        </div>

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

                <div class="comparison">
                    <div class="active">
                        <h3>
                            Compare Plans & Features
                        </h3>
                    </div>

                    <div class="comparison--grid"></div>
                </div>
            </div>
        </div> --}}

        <div class="trial">
            <h3>A Flexible Phone System With Robust Features To Streamline Your Calling Process
            </h3>

            <button>10 Days Free trial</button>
        </div>

        {{-- <div class="charges">
            <h3>Call & SMS Charges</h3>
            <div class="card--wrapper">
                <div class="card" data-base-price="0">
                    <img loading="lazy" class="" src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/Incoming_call.svg" alt="Call Charges" width="25" height="25" loading="lazy">
                    <h5>Incoming call charge</h5>
                    <p>Click here to know number charges and incoming call charges</p>
                </div>
                <div class="card" data-base-price="0">
                </div>
                <div class="card" data-base-price="0">
                </div>
                <div class="card" data-base-price="0">
                </div>

            </div>

        </div> --}}

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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const currencySelects = document.querySelectorAll('select[name="currency"]');
            const durationCheckbox = document.getElementById('duration');
            const cards = document.querySelectorAll('.card');
            const monthlyPrices = [0, 24, 38, 56, 0, 20, 30, 50]; // Monthly prices corresponding to each card
            const yearlyPrices = [0, 19, 30, 45, 0, 16, 24, 40]; // Yearly prices corresponding to each card
            
            currencySelects.forEach(function(select) {
                select.addEventListener("change", function() {
                    const currency = this.value;
                    updatePrices(currency);
                });
            });
            
            // Event listener for checkbox change
            durationCheckbox.addEventListener('change', function() {
                updatePrices();
            });
            
            // Function to update prices based on the selected currency and duration
            function updatePrices(currency = 'USD') {
                cards.forEach(function(card, index) {
                    const priceElement = card.querySelector('.card-top #basic-price-' + (index + 1));
                    const basePrice = durationCheckbox.checked ? yearlyPrices[index] : monthlyPrices[index];
                    let newPrice;
    
                    // Perform currency conversion here
                    switch(currency) {
                        case 'USD':
                            newPrice = basePrice;
                            break;
                        case 'EUR':
                            newPrice = basePrice * 0.85;
                            break;
                        case 'MAD':
                            newPrice = basePrice * 8.93;
                            break;
                        case 'GBP':
                            newPrice = basePrice * 0.73; // Conversion rate as of writing
                            break;
                        case 'AUD':
                            newPrice = basePrice * 1.34; // Conversion rate as of writing
                            break;
                        // Add more cases for other currencies as needed
                        default:
                            newPrice = basePrice;
                    }
    
                    // Round to the nearest integer
                    newPrice = Math.round(newPrice);
    
                    // Update the currency symbol and price content
                    priceElement.innerHTML = '<span>' + currency + '</span>' + newPrice;
                });
            }
            
            // Initial update of prices based on the initial currency selection and checkbox state
            updatePrices();
        });
    </script>
    
    




    </div>
@endsection
