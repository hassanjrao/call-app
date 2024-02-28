@extends('layouts')
@section('content')
    <div class="sms__container">
        <section class="hero__items">
            <div class="hero__content">

                <p class="title">Boost Engagement with Business SMS</p>
                <p class="content">Connect with customers through SMS effortlessly. Streamline communication, increase
                    response rates, and build stronger customer relationships.</p>
                <div class="hero__btn"> <button><a href="pay">Buy It Now</a></button></div>
            </div>



            <div class="hero__image">
                <img loading="lazy" src="{{ asset('img/heros/Business-SMS.png') }}"
                    alt="sms">
            </div>
        </section>
        <section class="trusted-container">
            <div class="trusted-heading">
                <p>Trusted by 4000+ companies</p>
            </div>
            <div class="trusted-content">
                <img loading="lazy" src="{{ asset('img/companies/Amazon.svg') }}"
                    alt="trusted" /><img
                    src="{{ asset('img/companies/brighchamps.svg') }}"
                    alt="trusted" /><img
                    src="{{ asset('img/companies/oracle.svg') }}"
                    alt="trusted" /><img
                    src="{{ asset('img/companies/turing.svg') }}" alt="trusted" />
                <img loading="lazy" src="{{ asset('img/companies/valuelabs.svg') }}"
                    alt="trusted" /><img
                    src="{{ asset('img/companies/iresearch.svg') }}"
                    alt="trusted" />
                <img loading="lazy" src="{{ asset('img/companies/intellipaat_logo.svg') }}"
                    alt="trusted" />
            </div>
        </section>
        <section class="whyCall__container">
            <div class="why__header">
                <h2 class="why__title">Why HivoCall?</h2>
                <p class="why__text">

                    As the leading cloud contact center software provider, we empower businesses worldwide. Discover why
                    HivoCall is the ultimate choice for your SMS communication needs. Discover why HivoCall SMS service is
                    your go-to solution for comprehensive customer communication.</p>
            </div>
            <div class="why__cards">
                <div class="card">
                    <span class="span1"><img class="icon"
                            src="{{ asset("img/icons/User-Friendly-Interface-with-SMS.svg") }} "
                            alt="icon" /></span>
                    <h5>User-Friendly Interface</h5>
                    <p class="card__text">Our intuitive platform ensures that your team can start sending SMS messages
                        without any steep learning curves.</p>
                </div>
                <div class="card">
                    <span class="span2"><img class="icon"
                            src="{{ asset("img/icons/Built-in-SMS-Capability-with-SMS.svg") }} "
                            alt="icon" /></span>
                    <h5>Built-in SMS Capability</h5>
                    <p class="card__text">With HivoCall, you get a powerful SMS feature right out of the box. So, no
                        requirement for integrating with third-party tools.</p>
                </div>
                <div class="card">
                    <span class="span3"><img class="icon"
                            src="{{ asset("img/icons/Personalized-Support-with-SMS.svg") }} "
                            alt="icon" /></span>
                    <h5>Personalized Support</h5>
                    <p class="card__text">Our dedicated support team is available around the clock to assist you in making
                        the most out of HivoCall's SMS capabilities.</p>
                </div>
        </section>
        <section class="experience">
            <div class="exp__container">
                <div class="exp__header">
                    <h2 class="exp__title">Experience Effortless Communication with SMS</h2>
                    <p class="exp__text">HivoCall’s built-in SMS capability allows you to connect with customers
                        seamlessly, utilizing their preferred communication channel. Here’s why you should utilize this
                        feature.</p>
                    <div class="hero__btn"> <button><a href="pay">Buy It Now</a></button></div>
                </div>
                <div class="exp__cards">
                    <div class="exp__card">
                        <span class="span1"><img class="icon"
                                src="{{ asset("img/icons/Effortless-Communication-with-SMS.svg") }} "
                                alt="icon" /></span>
                        <h5>Effortless Communication</h5>
                        <p class="card__text">Enable your agents to reach out to customers effortlessly through their
                            preferred channel. Provide instant updates, information, and support, enhancing customer
                            satisfaction.</p>
                    </div>
                    <div class="exp__card">
                        <span class="span2"><img class="icon"
                                src="{{ asset("img/icons/Real-time-Insights-with-SMS.svg") }} "
                                alt="icon" /></span>
                        <h5>Real-time Insights</h5>
                        <p class="card__text">Gain valuable analytics into message response rates, customer preferences, and
                            opportunities to further enhance customer satisfaction.
                        </p>
                    </div>
                    <div class="exp__card">
                        <span class="span3"><img class="icon"
                                src="{{ asset("img/icons/Personalized-Interactions-with-SMS.svg") }} "
                                alt="icon" /></span>
                        <h5>Personalized Interactions</h5>
                        <p class="card__text">Tailor every message to suit individual customer needs. Foster brand affinity
                            and strengthen connections between customers and agents.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="setup-container">
            <div class="setup-wrapper">
                <div class="setup-content">
                    <h5>
                        Connect Seamlessly with
                        <span>SMS</span>
                    </h5>
                    <p class="desc">
                        Personalize every interaction by reaching out to customers through their preferred channel - SMS.
                    </p>
                    <button><a href="pay">Buy It Now</a></button>
                </div>
                <img loading="lazy" src="{{ asset('img/SVG/business-phone-number.png') }}"
                    alt="Mobile" />
            </div>
        </section>
        <section class="benefits">
            <div class="benefits__container">
                <div class="benefits__header">
                    <h2 class="benefits__title">Benefits of Business SMS</h2>
                    <p class="benefits__text">HivoCall’s SMS feature is a reliable and powerful method for unmatched
                        success when it comes to revolutionizing the customer experience. This is how it will help you.</p>
                    <div class="hero__btn"> <button><a href="pay">Buy It Now</a></button></div>
                </div>
                <div class="benefits__cards">
                    <div class="benefits__card">
                        <span class="span1"><img class="icon"
                                src="{{ asset("img/icons/Boost-Efficiency-with-SMS.svg") }} "
                                alt="icon" /></span>
                        <h5>Boost Efficiency</h5>
                        <p class="card__text">Cut response times by up to 30%. Swift resolutions mean happier customers and
                            more time for your agents to focus on building lasting connections.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span2"><img class="icon"
                                src="{{ asset("img/icons/Drive-Revenue-with-SMS.svg") }} "
                                alt="icon" /></span>
                        <h5>Drive Revenue</h5>
                        <p class="card__text">Leverage targeted messaging for promotions, updates, and offers. Increase
                            cross-sell and up-sell opportunities, driving revenue growth.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span3"><img class="icon"
                                src="{{ asset("img/icons/Enhance-Loyalty-with-SMS.svg") }} "
                                alt="icon" /></span>
                        <h5>Enhance Loyalty</h5>
                        <p class="card__text">Consumers feel valued and appreciated when they receive timely, tailored
                            messages. This increases customer lifetime value, strengthens loyalty, and dramatically raises
                            long-term retention rates.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="avantages__container">
            <div class="avantages__header">
                <h2 class="avantages__title">The Comprehensive Communication Solution</h2>
                <p class="avantages__text">With the help of CallHippo’s unified call center software dashboard, arm your
                    staff with the tools they need to increase productivity and collaboration with the right business sms
                    service.</p>
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
