@extends('layouts')
@section('content')
    <div class="smartDid__container">
        <section class="hero__items">
            <div class="hero__content">

                <p class="title">Smart DID Routing™</p>
                <p class="content">Boost call response rates on international calls with Smart DID Routing™. Leverage our
                    intelligent algorithm to automatically direct calls through local numbers.</p>
                <div class="hero__btn"> <button>Try HivoCall For Free</button></div>
            </div>



            <div class="hero__image">
                <img loading="lazy" src="{{ asset('img/heros/Smart-DID-Routing.png') }}"
                    alt="smart">
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

                    With innovation and customer service at its core, HivoCall is the premier cloud contact center service
                    provider, empowering businesses to deliver exceptional service. Discover why HivoCall is the top choice
                    for your business.</p>
            </div>
            <div class="why__cards">
                <div class="card">
                    <span class="span1"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/Seamless-Scalability.svg") }} "
                            alt="icon" /></span>
                    <h5>Seamless Scalability</h5>
                    <p class="card__text">Effortlessly scale your contact center operations to handle growing call volumes.
                        Our flexible cloud platform allows you to instantly expand as your business needs change.</p>
                </div>
                <div class="card">
                    <span class="span2"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/Actionable-Insights.svg") }} "
                            alt="icon" /></span>
                    <h5>Actionable Insights</h5>
                    <p class="card__text">Make data-driven decisions to improve operations with 360-degree visibility into
                        performance through customizable reports and dashboards. Measure agent performance and leverage
                        gamification to boost productivity.</p>
                </div>
                <div class="card">
                    <span class="span3"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/Cutting-Edge-Innovation (1).svg") }} "
                            alt="icon" /></span>
                    <h5>Cutting-Edge Innovation</h5>
                    <p class="card__text">Stay ahead of the curve with a business phone solution continuously enhanced with
                        the latest AI capabilities, intelligent automation, and more to create frictionless, exceptional
                        customer experiences.</p>
                </div>
        </section>
        <section class="experience">
            <div class="exp__container">
                <div class="exp__header">
                    <h2 class="exp__title">Boost First Contact Resolution</h2>
                    <p class="exp__text">Say goodbye to ignored calls and unanswered phones. Smart DID routing™ optimizes
                        your caller ID so users see a local number. Engage more prospects by making your business more
                        accessible. Here’s why to use our Smart DID Routing™</p>
                    <div class="hero__btn"> <button>Start Free Trial</button></div>
                </div>
                <div class="exp__cards">
                    <div class="exp__card">
                        <span class="span1"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/call_center_analytics.svg") }} "/></span>
                        <h5>Expanded Global Access</h5>
                        <p class="card__text">Dynamically route international calls without needing to add new local numbers
                            in every country. Local presence dialer allows you to connect with prospects globally while only
                            using the numbers in your account.</p>
                    </div>
                    <div class="exp__card">
                        <span class="span2"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/icon-Drives-Revenue.svg") }} "
                                alt="icon" /></span>
                        <h5>Improved Conversions</h5>
                        <p class="card__text">Higher answer rates mean more conversations and opportunities to convert
                            prospects into customers. Customers who actually answer calls are much more likely to engage.
                        </p>
                    </div>
                    <div class="exp__card">
                        <span class="span3"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/Improve-CSAT.svg") }} "/></span>
                        <h5>Higher Answer Rates</h5>
                        <p class="card__text">By displaying a local number for the recipient's location, you can increase
                            answer rates by up to 23%. Customers are more likely to answer calls from familiar local
                            numbers.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="setup-container">
            <div class="setup-wrapper">
                <div class="setup-content">
                    <h5>
                        Match Customers With The Right
                        <span>Skills</span>
                    </h5>
                    <p class="desc">
                        Ensure issue resolution on the first call by instantly routing customers to agents with the ideal
                        expertise.
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
                    <h2 class="benefits__title">Benefits of Smart DID Routing™</h2>
                    <p class="benefits__text">Displaying local numbers builds trust and demonstrates you understand each
                        market. Local presence dialer makes your business seem more legitimate everywhere.</p>
                    <div class="hero__btn"> <button>Start Free Trial</button></div>
                </div>
                <div class="benefits__cards">
                    <div class="benefits__card">
                        <span class="span1"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/analytics.svg") }} "/></span>
                        <h5>Enhanced credibility</h5>
                        <p class="card__text">Build strong customer relationships with local numbers that resonate with your
                            target market. Leverage the power of familiarity to establish trust, driving higher engagement
                            and boosting conversion rates.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span2"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/Streamlined-Communication.svg") }} "
                                alt="icon" /></span>
                        <h5>International reach</h5>
                        <p class="card__text">No need for physical presence everywhere. With our local presence feature,
                            connect effortlessly with customers worldwide. Ensuring your business can effortlessly expand
                            internationally while appearing local.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span3"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/Improved-Continuity.svg") }} "
                                alt="icon" /></span>
                        <h5>Better personalization</h5>
                        <p class="card__text">Tailor your communication approach to each market's unique preferences and
                            cultural nuances. Use localized numbers to customize your interactions, showing your customers
                            that you understand and cater to their specific needs.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="avantages__container">
            <div class="avantages__header">
                <h2 class="avantages__title">The Only Business Phone System You Need</h2>
                <p class="avantages__text">Give your team all the essential tools and features they need to make an impact
                    on customers’ lives. Boost customer satisfaction and
                    reduce agent burnout with HivoCall!</p>
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
