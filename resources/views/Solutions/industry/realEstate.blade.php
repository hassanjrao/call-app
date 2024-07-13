@extends('layouts')
@section('content')
    <div class="realEstate__container">
        <section class="hero__items">
            <div class="hero__content">

                <p class="title">VoIP for Real Estate</p>
                <p class="content">With CallHippo’s advanced features, get access to the industry’s best phone system.
                    Elevate your customer service and attract more prospects with 99.5% uptime.</p>
                <div class="hero__btn"> <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button></div>
            </div>



            <div class="hero__image">
                <img loading="lazy" src="{{ asset('img/heros/Real-estate-phone-system.png') }}"
                    alt="estate">
            </div>
        </section>
        <section class="whyCall__container">
            <div class="why__header">
                <h2 class="why__title">Why CallHippo?</h2>
                <p class="why__text">

                    Real estate businesses often use call center systems to reach more people and seal more deals. Here are
                    a few reasons why a call center for real estate investors is a must-have.</p>
            </div>
            <div class="why__cards">
                <div class="card">
                    <span class="span1"><img loading="lazy" class="icon"
                        src='{{ asset( "img/icons/rm-package_powerful_feature.svg") }}'
                        alt="icon" /></span>
                    <h5>Cutting-edge Features</h5>
                    <p class="card__text">Streamline your real estate system with CallHippo’s sophisticated features
                        including virtual phone numbers, IVR systems, call recording, power dialer, call conferencing, etc.
                    </p>
                </div>
                <div class="card">
                    <span class="span2"><img loading="lazy" class="icon"
                        src='{{ asset( "img/icons/rm-Transparent-Pricing.svg") }}'
                        alt="icon" /></span>
                    <h5>Affordable Plans</h5>
                    <p class="card__text">Save communication costs with transparent, affordable pricing plans. Reach more
                        prospects at lower costs with CallHippo's real estate phone system.</p>
                </div>
                <div class="card">
                    <span class="span3"><img loading="lazy" class="icon"
                        src='{{ asset( "img/icons/User-Friendly-Interface-with-SMS.svg") }}'  
                        alt="icon" /></span>
                    <h5>Quick Setup</h5>
                    <p class="card__text">CallHippo real estate phone system can be set up in less than 3 minutes of your
                        time. We offer 24/7 onboarding support to get the system up and running in the blink of an eye.</p>
                </div>
        </section>
        <section class="experience">
            <div class="exp__container">
                <div class="exp__header">
                    <h2 class="exp__title">Power up your reach</h2>
                    <p class="exp__text">With innovative features, the CallHippo real estate phone system helps venture
                        beyond geographical boundaries and close more deals in a short time.</p>
                    <div class="hero__btn"> <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button></div>
                </div>
                <div class="exp__cards">
                    <div class="exp__card">
                        <span class="span1"><img loading="lazy" class="icon"
                            src='{{ asset( "img/icons/Efficient-Lead-Management-with-amd.svg") }}'       
                                                     alt="icon" /></span>
                        <h5>Virtual Receptionist</h5>
                        <p class="card__text">Greet your caller with a professional message and navigate them to the right
                            agent based on their inputs. This helps enhance customer experience by delivering the
                            information the caller is looking for in a short time.</p>
                    </div>
                    <div class="exp__card">
                        <span class="span2"><img loading="lazy" class="icon"
                            src='{{ asset( "img/icons/rm-auto_answer_call.svg") }}'                                alt="icon" /></span>
                        <h5>Power Dialer</h5>
                        <p class="card__text">With an automated dialing feature, reach out to more customers, pitch your
                            properties, and win more deals. Reduce the time involved in dialing and Improve the efficiency
                            of your outbound calls.
                        </p>
                    </div>
                    <div class="exp__card">
                        <span class="span3"><img loading="lazy" class="icon"
                            src='{{ asset( "img/icons/Dashboards_and Analytics_feature_for_call_center.svg") }}' 
                                                           alt="icon" /></span>
                        <h5>Call Analytics</h5>
                        <p class="card__text">CallHippo phone system has advanced analytics that helps monitor the
                            effectiveness of your phone system and call flow. The information helps make changes to the
                            system so you don’t lose out on opportunities.
                        </p>
                    </div>
                </div>
            </div>

        </section>
        <section class="setup-container">
            <div class="setup-wrapper">
                <div class="setup-content">
                    <h5>
                        Set Up Your Real Estate Phone System
                        <span>In Less Than 3 Minutes</span>
                    </h5>
                    <p class="desc">
                        Configure the CallHippo phone system within 3 minutes and connect with your prospects quickly. Go
                        live in minutes.
                    </p>
                    <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button>
                </div>
                <img loading="lazy" src="{{ asset('img/SVG/business-phone-number.png') }}"
                    alt="Mobile" />
            </div>
        </section>
        <section class="benefits">
            <div class="benefits__container">
                <div class="benefits__header">
                    <h2 class="benefits__title">Benefits Of Real Estate Call Center Software</h2>
                    <div class="hero__btn"> <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button></div>
                </div>
                <div class="benefits__cards">
                    <div class="benefits__card">
                        <span class="span1"><img loading="lazy" class="icon"
                            src='{{ asset( "img/icons/Enhanced-Campaign-ROI-with-amd.svg") }}'
                                                            alt="icon" /></span>
                        <h5>Call Recording</h5>
                        <p class="card__text">Document customer conversations and use them for training and quality
                            monitoring purposes. Call recordings can also serve as a reference for dispute resolution and
                            compliance purposes in the future.
                        </p>
                    </div>
                    <div class="benefits__card">
                        <span class="span2"><img loading="lazy" class="icon"
                            src='{{ asset( "img/icons/Call-Routing_ic.svg") }}'
                                                            alt="icon" /></span>
                        <h5>Smart Call Forwarding</h5>
                        <p class="card__text">Engage with customers even when you are away or busy by directing incoming
                            calls to another number. Stay connected to your prospects and customers even when you are not at
                            the desk.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span3"><img loading="lazy" class="icon"
                            src='{{ asset( "img/icons/Automatic_Call_Distribution_feature_for_call_center.svg") }}'
                                                            alt="icon" /></span>
                        <h5>Automatic Call Distribution</h5>
                        <p class="card__text">CallHippo real estate phone system follows automatic call distribution to
                            route incoming calls to the most qualified agent. Improve your call resolution rates and enhance
                            the efficiency of your business functioning.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="avantages__container">
            <div class="avantages__header">
                <h2 class="avantages__title">The Ultimate Call Center Software Solution</h2>
                <p class="avantages__text">Empower your team with the necessary tools and enhance communication and
                    productivity with a unified
                    Call Center Software dashboard.</p>
            </div>
            <div class="avantages__cards">
                <div class="avantages__card">
                    <div class="card__image"><span class="span1"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/1.svg") }}'
                                alt="icon" /></span></div>
                    <div class="card__text">
                        <h2>International Phone numbers</h2>
                    </div>


                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span2"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/2.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Bulk SMS/MMS</h2>
                    </div>

                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span3"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/3.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Call Center Analytics</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span4"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/4.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Forward to Voicemail</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span5"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/5.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Toll-free numbers</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span6"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/6.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Appointment Scheduler</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span7"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/7.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Call Monitoring</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span8"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/8.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Office Hours</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span9"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/9.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Record Calls</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span10"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/10.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Auto Dialer</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span11"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/11.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Call Whispering</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span12"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/12.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Caller Id</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span13"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/13.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Virtual Call Center</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span14"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/14.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Predictive Dialer</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span15"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/15.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Share Phone Number</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span16"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/16.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Call Queues</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span17"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/17.svg") }}'
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Forward to your phone</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span18"><img loading="lazy" class="icon" src='{{ asset( "img/avantages-icons/18.svg") }}'
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
                        <img loading="lazy" src="{{ asset('img/icons/quot.svg') }}"
                            alt="quote">
                        <p class="hearFromU__text">
                            HivoCall went an extra mile and suggested a perfect solution. As of now, all of our numbers are
                            clean and have the highest attestation score.</p>
                        <div class="hearFromU__footer">
                            <img loading="lazy" src="{{ asset('img/brands/brighterly-new.png') }}"
                                alt="brand" class="footer__img">
                            <div class="footer__name">
                                <p>Rostyslav Khanyk
                                    <span>Head Of Sales, Brighterly</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="hearFromU__image">
                        <img loading="lazy" src="{{asset('img/SVG/portrait.png')}}"
                            alt="person">
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
