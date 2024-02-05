@extends('layouts')
@section('content')
    <div class="speed__container">
        <section class="hero__items">
            <div class="hero__content">

                <p class="title">Speed To Dial</p>
                <p class="content">Measure how quickly a call connects, ensuring fast communication. Reach time-critical
                    leads at lightning-fast speed with HivoCall! Empower teams to reach prospects efficiently.</p>
                <div class="hero__btn"> <button>Try ConnectVista For Free</button></div>
            </div>



            <div class="hero__image">
                <img src="{{ asset('img/heros/Speed-To-Dial.png') }}"
                    alt="speed">
            </div>
        </section>
        <section class="trusted-container">
            <div class="trusted-heading">
                <p>Trusted by 4000+ companies</p>
            </div>
            <div class="trusted-content">
                <img src="{{ asset('img/companies/Amazon.svg') }}"
                    alt="trusted" /><img
                    src="{{ asset('img/companies/brighchamps.svg') }}"
                    alt="trusted" /><img
                    src="{{ asset('img/companies/oracle.svg') }}"
                    alt="trusted" /><img
                    src="{{ asset('img/companies/turing.svg') }}" alt="trusted" />
                <img src="{{ asset('img/companies/valuelabs.svg') }}"
                    alt="trusted" /><img
                    src="{{ asset('img/companies/iresearch.svg') }}"
                    alt="trusted" />
                <img src="{{ asset('img/companies/intellipaat_logo.svg') }}"
                    alt="trusted" />
            </div>
        </section>
        <section class="whyCall__container">
            <div class="why__header">
                <h2 class="why__title">Why HivoCall?</h2>
                <p class="why__text">

                    Elevate call efficiency using HivoCall’s Speed to Dial feature. Save time, enhance productivity, and
                    swiftly connect with potential clients. Simplify processes for seamless communication and streamlined
                    business expansion.</p>
            </div>
            <div class="why__cards">
                <div class="card">
                    <span class="span1"><img class="icon"
                            src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/rdial.svg" alt="icon" /></span>
                    <h5>Sequential Dialling</h5>
                    <p class="card__text">You can dial contacts one at a time, ensuring targeted agent-customer interactions
                        and eliminating all the redundant guesswork.</p>
                </div>
                <div class="card">
                    <span class="span2"><img class="icon"
                            src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/Build-Customer-Relationships.svg"
                            alt="icon" /></span>
                    <h5>Team Collaboration</h5>
                    <p class="card__text">Speed to dial feature is ideal for teams! It allows multiple agents to utilize the
                        same dialer, streamlining calling operations and improving teamwork.</p>
                </div>
                <div class="card">
                    <span class="span3"><img class="icon"
                            src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/ch-new-homepage-section-bg.png"
                            alt="icon" /></span>
                    <h5>CRM Integration</h5>
                    <p class="card__text">It seamlessly integrates with CRM systems, automatically pulling new leads, saving
                        time and reducing manual data entry.</p>
                </div>
        </section>
        <section class="experience">
            <div class="exp__container">
                <div class="exp__header">
                    <h2 class="exp__title">Deliver Top-Notch Experience</h2>
                    <p class="exp__text">Make automated outgoing calls from the HivoCall dialer to a list of numbers
                        uploaded under a specific campaign from any CRM.</p>
                    <div class="hero__btn"> <button>Start Free Trial</button></div>
                </div>
                <div class="exp__cards">
                    <div class="exp__card">
                        <span class="span1"><img class="icon"
                                src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/Dashboards_and%20Analytics_feature_for_call_center.svg"
                                alt="icon" /></span>
                        <h5>Call Scheduling</h5>
                        <p class="card__text">Call scheduling streamlines efficient time management by allowing users to
                            plan and organize their call activities. Ensure timely communication, prevent missed
                            opportunities, and streamline workflow to enable better coordination and productivity for
                            businesses.</p>
                    </div>
                    <div class="exp__card">
                        <span class="span2"><img class="icon"
                                src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/Enhanced-Campaign-ROI-with-amd.svg"
                                alt="icon" /></span>
                        <h5>Call Recording</h5>
                        <p class="card__text">With call recording, get secure and easily accessible recording of phone
                            conversations. Ensure compliance, quality control, and valuable insights for enhancing customer
                            service, training, and decision-making, all within one user-friendly platform.</p>
                    </div>
                    <div class="exp__card">
                        <span class="span3"><img class="icon"
                                src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/analytics.svg"
                                alt="icon" /></span>
                        <h5>Call Monitoring</h5>
                        <p class="card__text">Call monitoring enables call center supervisors to monitor live calls and
                            offer immediate feedback. They can also monitor, join, or record calls to enhance agent
                            coaching.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="setup-container">
            <div class="setup-wrapper">
                <div class="setup-content">
                    <h5>
                        Set Up VoIP Phone System In Just
                        <span>3 Minutes!</span>
                    </h5>
                    <p class="desc">
                        From buying a number to setting up the speed to dial feature, all it takes is 3 minutes!
                    </p>
                    <button>Start Free Trial</button>
                </div>
                <img src="{{ asset('img/SVG/business-phone-number.png') }}"
                    alt="Mobile" />
            </div>
        </section>
        <section class="benefits">
            <div class="benefits__container">
                <div class="benefits__header">
                    <h2 class="benefits__title">Benefits of Speed To Dial</h2>
                    <p class="benefits__text">HivoCall’s speed to dial feature enhances communication efficiency, making it
                        an ideal solution for diverse business requirements. With speed to dial, you can streamline call
                        processes, saving time and improving productivity.</p>
                    <div class="hero__btn"> <button>Start Free Trial</button></div>
                </div>
                <div class="benefits__cards">
                    <div class="benefits__card">
                        <span class="span1"><img class="icon"
                                src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/Time-Efficiency.svg"
                                alt="icon" /></span>
                        <h5>Real-Time Connection</h5>
                        <p class="card__text">Establish real-time connections with clients and prospects. With minimal
                            delays, ensure prompt call initiations. Enhance the overall communication experience.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span2"><img class="icon"
                                src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/Streamlined-Communication.svg"
                                alt="icon" /></span>
                        <h5>Streamlined Communication</h5>
                        <p class="card__text">By streamlining the calling process, speed to dial improves internal
                            communication and makes it simpler to connect with the right person at the right time.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span3"><img class="icon"
                                src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/Flexibility-and-Mobility.svg"
                                alt="icon" /></span>
                        <h5>Low Call Abandonment Rates</h5>
                        <p class="card__text">Minimize wait times and ensure that calls are connected promptly. Maximize
                            the chances of completing successful interactions and achieving desired objectives, ensuring
                            customer satisfaction.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="avantages__container">
            <div class="avantages__header">
                <h2 class="avantages__title">Boost Efficiency, One Click At A Time</h2>
                <p class="avantages__text">Enhance team communication with the lightning-fast speed to dial feature.
                    Collaborate with teams, communicate with clients, and
                    boost productivity at your fingertips.</p>
            </div>
            <div class="avantages__cards">
                <div class="avantages__card">
                    <div class="card__image"><span class="span1"><img class="icon" src="img/avantages-icons/1.svg"
                                alt="icon" /></span></div>
                    <div class="card__text">
                        <h2>International Phone numbers</h2>
                    </div>


                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span2"><img class="icon" src="img/avantages-icons/2.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Bulk SMS/MMS</h2>
                    </div>

                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span3"><img class="icon" src="img/avantages-icons/3.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Call Center Analytics</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span4"><img class="icon" src="img/avantages-icons/4.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Forward to Voicemail</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span5"><img class="icon" src="img/avantages-icons/5.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Toll-free numbers</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span6"><img class="icon" src="img/avantages-icons/6.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Appointment Scheduler</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span7"><img class="icon" src="img/avantages-icons/7.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Call Monitoring</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span8"><img class="icon" src="img/avantages-icons/8.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Office Hours</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span9"><img class="icon" src="img/avantages-icons/9.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Record Calls</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span10"><img class="icon" src="img/avantages-icons/10.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Auto Dialer</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span11"><img class="icon" src="img/avantages-icons/11.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Call Whispering</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span12"><img class="icon" src="img/avantages-icons/12.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Caller Id</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span13"><img class="icon" src="img/avantages-icons/13.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Virtual Call Center</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span14"><img class="icon" src="img/avantages-icons/14.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Predictive Dialer</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span15"><img class="icon" src="img/avantages-icons/15.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Share Phone Number</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span16"><img class="icon" src="img/avantages-icons/16.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Call Queues</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span17"><img class="icon" src="img/avantages-icons/17.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Forward to your phone</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span18"><img class="icon" src="img/avantages-icons/18.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>SMS Bot</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="hearFromU">
            <div class="hearFromU__container">
                <h2>Hear From Our Customers</h2>
                <div class="hearFromU__mainview">
                    <div class="hearFromU__content">
                        <img src="{{ asset('img/icons/quot.svg') }}"
                            alt="quote">
                        <p class="hearFromU__text">
                            HivoCall went an extra mile and suggested a perfect solution. As of now, all of our numbers are
                            clean and have the highest attestation score.</p>
                        <div class="hearFromU__footer">
                            <img src="{{ asset('img/brands/brighterly-new.png') }}"
                                alt="brand" class="footer__img">
                            <div class="footer__name">
                                <p>Rostyslav Khanyk
                                    <span>Head Of Sales, Brighterly</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="hearFromU__image">
                        <img src="{{asset('img/SVG/portrait.png')}}"
                            alt="person">
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
