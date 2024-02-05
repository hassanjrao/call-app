@extends('layout')
@section('content')
    <div class="support__container">
        <section class="hero__items">
            <div class="hero__content">

                <p class="title">Quick support center</p>
                <p class="content">With HivoCall’s inbound contact center, your support team can provide exceptional
                    customer experiences. Our cloud-based solution seamlessly integrates with your preferred CRM and
                    Helpdesk, enabling 24/7 support from any location and device.</p>
                <div class="hero__btn"> <button>Try ConnectVista For Free</button></div>
            </div>



            <div class="hero__image">
                <img src="{{ asset('img/heros/support_contact_center_first_fold.png') }}"
                    alt="support">
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
                    Effortlessly manage high volumes of incoming calls with intelligent call routing and IVR using
                    HivoCall. Our solution
                    automatically saves call details in your CRM, saving hundreds of hours for your support team.</p>
            </div>
            <div class="why__cards">
                <div class="card">
                    <span class="span1"><img class="icon"
                            src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/scc_avanced_features.svg"
                            alt="icon" /></span>
                    <h5>Advanced Features</h5>
                    <p class="card__text">Empower your customers with an easy-to-use, agent-free navigation system by
                        leveraging HivoCall's multi-level IVR feature.
                    </p>
                </div>
                <div class="card">
                    <span class="span2"><img class="icon"
                            src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/scc_optimized_cost.svg"
                            alt="icon" /></span>
                    <h5>Optimized Cost</h5>
                    <p class="card__text">Experience significant savings automation by syncing your CRM and helpdesk with
                        HivoCall’s platform. Easily automate call logging and information tracking.</p>
                </div>
                <div class="card">
                    <span class="span3"><img class="icon"
                            src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/chsiteimages/ssc_assured_quality.svg"
                            alt="icon" /></span>
                    <h5>Assured Quality</h5>
                    <p class="card__text">HivoCall enables call monitoring, allowing you to listen in, whisper, or barge in
                        as needed, to mitigate escalations and improve the quality of your customer service.</p>
                </div>
        </section>
        <section class="experience">
            <div class="exp__container">
                <div class="exp__header">
                    <h2 class="exp__title">Minimize customer response time</h2>
                    <p class="exp__text">Reduce customer wait times and enhance customer satisfaction, transform first-call
                        resolution from a goal
                        to a reality with HivoCall’s smart call routing feature</p>
                    <div class="hero__btn"> <button>Start Free Trial</button></div>
                </div>
                <div class="exp__cards">
                    <div class="exp__card">
                        <span class="span1"><img class="icon"
                                src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/rdial.svg"
                                alt="icon" /></span>
                        <h5>Quick self-service</h5>
                        <p class="card__text">Empower your customers with an easy-to-use, agent-free navigation system by
                            leveraging HivoCall's multi-level IVR feature.</p>
                    </div>
                    <div class="exp__card">
                        <span class="span2"><img class="icon"
                                src="https://callhippo.com/wp-content/uploads/customupload/img/Call-Routing_ic.svg"
                                alt="icon" /></span>
                        <h5>Deep Integrations</h5>
                        <p class="card__text">Eliminate manual tasks by automating workflows with HivoCall. Our platform
                            seamlessly integrates with over 100 CRM and business tools.
                        </p>
                    </div>
                    <div class="exp__card">
                        <span class="span3"><img class="icon"
                                src="https://d1x9dsge91xf6g.cloudfront.net/callhippo/images/analytics.svg"
                                alt="icon" /></span>
                        <h5>Track service quality</h5>
                        <p class="card__text">Improve support quality by monitoring contact center operations and gaining an
                            eagle-eye view of performance.
                        </p>
                    </div>
                </div>
            </div>

        </section>
        <section class="setup-container">
            <div class="setup-wrapper">
                <div class="setup-content">
                    <h5>
                        Set Up Your Phone System In Less Than
                        <span>3 Minutes</span>
                    </h5>
                    <p class="desc">
                        From buying a number to making the first call, all it takes is 3 minutes to set up your virtual
                        phone system.
                    </p>
                    <div class="numbers">
                        <p><span class="number">1</span> Buy Numbers</p>
                        <span>→</span>
                        <p><span class="number">2</span> Add Users</p>
                        <span>→</span>
                        <p><span class="number">3</span> Start Calling</p>
                        <span>→</span>
                        <p><span class="number">4</span>Track Calls</p>
                    </div>
                    <button>Start Free Trial</button>
                </div>
                <img src="{{ asset('img/SVG/business-phone-number.png') }}"
                    alt="Mobile" />
            </div>
        </section>
        <section class="benefits">
            <div class="benefits__container">
                <div class="benefits__header">
                    <h2 class="benefits__title"> Achieve omnichannel support</h2>
                    <p class="benefits__text">Our platform enables you to easily send bulk SMS and Whatsapp messages,
                        allowing you to roll out
                        discounts to thousands of customers in seconds.</p>
                    <div class="hero__btn"> <button>Start Free Trial</button></div>
                </div>

            </div>

        </section>
        <section class="avantages__container">
            <div class="avantages__header">
                <h2 class="avantages__title">Your all-in-one inbound call center software solution</h2>
                <p class="avantages__text">Empower your sales and support teams with a comprehensive set of call and SMS features</p>
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
