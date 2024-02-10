@extends('layouts')
@section('content')
    <div class="machine__container">
        <section class="hero__items">
            <div class="hero__content">

                <p class="title">Answering Machine Detection</p>
                <p class="content">Effortlessly distinguish between live answers and answering machines. Optimize your
                    calling strategy and ensure your agents spend more time engaging with customers and less time leaving
                    voicemails.</p>
                <div class="hero__btn"> <button>Try ConnectVista For Free</button></div>
            </div>



            <div class="hero__image">
                <img loading="lazy" src="{{ asset('img/heros/Answering-Machine-Detection.png') }}"
                    alt="machine">
            </div>
        </section>
        <section class="trusted-container">
            <div class="trusted-heading">
                <p>Trusted by 4000+ companies</p>
            </div>
            <div class="trusted-content">
                <img loading="lazy" src="{{ asset('img/companies/Amazon.svg') }}"
                    alt="trusted" /><img loading="lazy"
                    src="{{ asset('img/companies/brighchamps.svg') }}"
                    alt="trusted" /><img loading="lazy"
                    src="{{ asset('img/companies/oracle.svg') }}"
                    alt="trusted" /><img loading="lazy"
                    src="{{ asset('img/companies/turing.svg') }}" alt="trusted" />
                <img loading="lazy" src="{{ asset('img/companies/valuelabs.svg') }}"
                    alt="trusted" /><img loading="lazy"
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

                    For years, HivoCall has been redefining customer experiences. As a leading cloud contact center
                    software provider, we empower enterprises globally. Discover why HivoCallHivoCall is the ultimate choice for
                    your business.</p>
            </div>
            <div class="why__cards">
                <div class="card">
                    <span class="span1"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/Seamless-Communication-with-amd.svg") }} "
                            alt="icon" /></span>
                    <h5>Seamless Communication</h5>
                    <p class="card__text">With our constant feature updates and enhancements, you can stay ahead of the
                        curve in your sector and ensure that your company always has access to the newest resources for
                        first-rate client interactions.</p>
                </div>
                <div class="card">
                    <span class="span2"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/Industry-Leading-Reliability-with-amd.svg") }} "
                            alt="icon" /></span>
                    <h5>Industry-Leading Reliability</h5>
                    <p class="card__text">Nothing less than the highest level of security and dependability should be
                        provided to your company. You can rely on our stringent security measures to protect your data,
                        along with our unparalleled stability, which boasts an astounding 99.99% uptime.</p>
                </div>
                <div class="card">
                    <span class="span3"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/24-7-Support-with-amd.svg") }} "
                            alt="icon" /></span>
                    <h5>24/7 Support</h5>
                    <p class="card__text">To help your staff fully utilize our cutting-edge features, we provide thorough
                        training. Furthermore, our customer service representatives are available around the clock by phone
                        or SMS if you need help.</p>
                </div>
        </section>
        <section class="experience">
            <div class="exp__container">
                <div class="exp__header">
                    <h2 class="exp__title">Streamline Call Campaigns</h2>
                    <p class="exp__text">Maximize your calling efforts by eliminating wasted time on voicemails. CallHippo’s
                        Answering Machine Detection ensures your agents connect with live leads, enhancing productivity and
                        increasing the likelihood of successful conversations.</p>
                    <div class="hero__btn"> <button>Start Free Trial</button></div>
                </div>
                <div class="exp__cards">
                    <div class="exp__card">
                        <span class="span1"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/Efficient-Lead-Management-with-amd.svg") }} "
                                alt="icon" /></span>
                        <h5>Efficient Lead Management</h5>
                        <p class="card__text">Spend less time leaving voicemails and more time connecting with potential
                            customers who are ready to engage.</p>
                    </div>
                    <div class="exp__card">
                        <span class="span2"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/Data-Driven-Insights-with-amd.svg") }} "
                                alt="icon" /></span>
                        <h5>Data-Driven Insights</h5>
                        <p class="card__text">Get insightful data on the effectiveness of your call campaigns to adjust your
                            tactics for the best outcomes.</p>
                    </div>
                    <div class="exp__card">
                        <span class="span3"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/Improved-Conversion-Rates-with-amd.svg") }} "
                                alt="icon" /></span>
                        <h5>Improved Conversion Rates</h5>
                        <p class="card__text">Increase the chances of converting leads into customers by ensuring your
                            agents engage with live contacts.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="setup-container">
            <div class="setup-wrapper">
                <div class="setup-content">
                    <h5>
                        Elevate customer interactions with
                        <span>Answering Machine Detection</span>
                    </h5>
                    <p class="desc">
                        Empower your team with insights for efficient calling campaigns & lead management.
                    </p>
                    <button>Start Free Trial</button>
                </div>
                <img loading="lazy" src="{{ asset('img/SVG/business-phone-number.png') }}"
                    alt="Mobile" />
            </div>
        </section>
        <section class="benefits">
            <div class="benefits__container">
                <div class="benefits__header">
                    <h2 class="benefits__title">Benefits of Answering Machine Detection</h2>
                    <p class="benefits__text">Unleash the power of precise call handling with Answering Machine Detection.
                        Here’s how you can leverage the power of Answering Machine Detection.</p>
                    <div class="hero__btn"> <button>Start Free Trial</button></div>
                </div>
                <div class="benefits__cards">
                    <div class="benefits__card">
                        <span class="span1"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/Saves-Time-with-amd.svg") }} "
                            alt="icon" /></span>
                        <h5>Saves Time</h5>
                        <p class="card__text">Reduce wasted minutes leaving voicemails and focus on connecting with live
                            leads. Experience up to 30% more conversations with potential customers.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span2"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/Boosts-Productivity-with-amd.svg") }} "
                                alt="icon" /></span>
                        <h5>Boosts Productivity</h5>
                        <p class="card__text">Empower your agents to be more productive by ensuring they spend their time
                            engaging with leads that are ready to convert.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span3"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/Boosts-Productivity-with-amd.svg") }} "
                                alt="icon" /></span>
                        <h5>Enhanced Campaign ROI</h5>
                        <p class="card__text">Get more value from your call campaigns by targeting live leads, ultimately
                            driving higher conversion rates and revenue.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="avantages__container">
            <div class="avantages__header">
                <h2 class="avantages__title">Harness The Power Of Answering Machine Detection</h2>
                <p class="avantages__text">Streamline call campaigns through answering machine detection. Drive efficiency,
                    save time, and increase conversions.</p>
            </div>
            <div class="avantages__cards">
                <div class="avantages__card">
                    <div class="card__image"><span class="span1"><img loading="lazy" class="icon" src="img/avantages-icons/1.svg"
                                alt="icon" /></span></div>
                    <div class="card__text">
                        <h2>International Phone numbers</h2>
                    </div>


                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span2"><img loading="lazy" class="icon" src="img/avantages-icons/2.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Bulk SMS/MMS</h2>
                    </div>

                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span3"><img loading="lazy" class="icon" src="img/avantages-icons/3.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Call Center Analytics</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span4"><img loading="lazy" class="icon" src="img/avantages-icons/4.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Forward to Voicemail</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span5"><img loading="lazy" class="icon" src="img/avantages-icons/5.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Toll-free numbers</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span6"><img loading="lazy" class="icon" src="img/avantages-icons/6.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Appointment Scheduler</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span7"><img loading="lazy" class="icon" src="img/avantages-icons/7.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Call Monitoring</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span8"><img loading="lazy" class="icon" src="img/avantages-icons/8.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Office Hours</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span9"><img loading="lazy" class="icon" src="img/avantages-icons/9.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Record Calls</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span10"><img loading="lazy" class="icon" src="img/avantages-icons/10.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Auto Dialer</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span11"><img loading="lazy" class="icon" src="img/avantages-icons/11.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Call Whispering</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span12"><img loading="lazy" class="icon" src="img/avantages-icons/12.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Caller Id</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span13"><img loading="lazy" class="icon" src="img/avantages-icons/13.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Virtual Call Center</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span14"><img loading="lazy" class="icon" src="img/avantages-icons/14.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Predictive Dialer</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span15"><img loading="lazy" class="icon" src="img/avantages-icons/15.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Share Phone Number</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span16"><img loading="lazy" class="icon" src="img/avantages-icons/16.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Call Queues</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span17"><img loading="lazy" class="icon" src="img/avantages-icons/17.svg"
                                alt="icon" /></span>
                    </div>
                    <div class="card__text">
                        <h2>Forward to your phone</h2>
                    </div>
                </div>
                <div class="avantages__card">
                    <div class="card__image">
                        <span class="span18"><img loading="lazy" class="icon" src="img/avantages-icons/18.svg"
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
