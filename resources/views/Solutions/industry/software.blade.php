@extends('layouts')
@section('content')
    <div class="software__container">
        <section class="hero__items">
            <div class="hero__content">

                <p class="title">Call Centre Solution for Software & Technology</p>
                <p class="content">Streamline your operations, delight customers, and boost sales with HivoCall’s advanced
                    call center software. Enjoy unparalleled efficiency with 99.5% uptime.</p>
                <div class="hero__btn"> <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button></div>
            </div>



            <div class="hero__image">
                <img loading="lazy" src="{{ asset('img/heros/Call-Centre-Solution-for-Software-and-Technology.png') }}"
                    alt="smart">
            </div>
        </section>
        <section class="whyCall__container">
            <div class="why__header">
                <h2 class="why__title">Why HivoCall?</h2>
                <p class="why__text">

                    Elevate your operations, enhance customer interactions, and drive unparalleled business growth with our
                    tailored, innovative services. Discover what makes HivoCall the perfect call center solution for IT
                    companies.</p>
            </div>
            <div class="why__cards">
                <div class="card">
                    <span class="span1"><img loading="lazy" class="icon"
                        src='{{ asset( "img/icons/Seamless-Scalability.svg") }}' 
                                                   alt="icon" /></span>
                    <h5>Global Reach</h5>
                    <p class="card__text">Scale your business across borders by purchasing local and toll-free numbers from
                        90+ countries with HivoCall. Build a truly global presence for your brand without burning a hole in
                        your pocket.</p>
                </div>
                <div class="card">
                    <span class="span2"><img loading="lazy" class="icon"
                        src='{{ asset( "img/icons/rm-package_powerful_feature.svg") }}'
                                                    alt="icon" /></span>
                    <h5>Robust Features</h5>
                    <p class="card__text">Leverage HivoCall's advanced feature suite, encompassing cutting-edge
                        capabilities such as call recording, IVR, real-time analytics, and more. Upgrade your plan for more
                        advanced features or buy add-ons as your business grows.</p>
                </div>
                <div class="card">
                    <span class="span3"><img loading="lazy" class="icon"
                        src='{{ asset( "img/icons/rm-Dependable-support.svg") }}'     
                                               alt="icon" /></span>
                    <h5>Exceptional Support</h5>
                    <p class="card__text">Benefit from our dedicated customer support team, available round-the-clock to
                        provide guidance, troubleshoot issues, and ensure a smooth experience. Get the most out of your
                        investment with us!</p>
                </div>
        </section>
        <section class="experience">
            <div class="exp__container">
                <div class="exp__header">
                    <h2 class="exp__title">Foster Lasting Customer Relationships</h2>
                    <p class="exp__text">Stay ahead of the competition with HivoCall’s innovative call center solution for
                        software and technology designed to deliver unparalleled customer experiences.</p>
                    <div class="hero__btn"> <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button></div>
                </div>
                <div class="exp__cards">
                    <div class="exp__card">
                        <span class="span1"><img loading="lazy" class="icon"
                            src='{{ asset( "img/icons/call_center_analytics.svg") }}'   
                                                         alt="icon" /></span>
                        <h5>Skill-Based Call Routing</h5>
                        <p class="card__text">Connect customers to the most suitable agents, ensuring efficient query
                            resolution and enhancing overall customer satisfaction. Increase service efficiency and leave
                            customers satisfied.</p>
                    </div>
                    <div class="exp__card">
                        <span class="span2"><img loading="lazy" class="icon"
                            src='{{ asset( "img/icons/icon-Valuable-Insights.svg") }}'                                alt="icon" /></span>
                        <h5>Call Monitoring</h5>
                        <p class="card__text">Gain valuable insights into agent performance and customer interactions and
                            identify areas for improvement to deliver exceptional service consistently. Comply with privacy
                            and security regulations with ease.
                        </p>
                    </div>
                    <div class="exp__card">
                        <span class="span3"><img loading="lazy" class="icon"
                            src='{{ asset( "img/icons/Real-time-Insights-with-SMS.svg") }}'                                alt="icon" /></span>
                        <h5>Advanced Integration</h5>
                        <p class="card__text">Seamlessly integrate HivoCall into your existing technology infrastructure
                            for a streamlined and cohesive customer service and sales experience. Boost agent productivity
                            and enhance operational efficiency.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="setup-container">
            <div class="setup-wrapper">
                <div class="setup-content">
                    <h5>
                        Elevate and Enhance Customer Experiences
                        <span>Today</span>
                    </h5>
                    <p class="desc">
                        Experience the power of HivoCall's innovative Call Centre Solution designed to revolutionize how
                        you connect with your customers.
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
                    <h2 class="benefits__title">Benefits of Call Center Solution for IT Companies</h2>
                    <p class="benefits__text">Streamline your sales and customer support initiatives with the most advanced
                        call center solution for software and technology companies.</p>
                    <div class="hero__btn"> <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button></div>
                </div>
                <div class="benefits__cards">
                    <div class="benefits__card">
                        <span class="span1"><img loading="lazy" class="icon"
                            src='{{ asset( "img/icons/analytics.svg") }}'     
                                                       alt="icon" /></span>
                        <h5>Data-Driven Insights</h5>
                        <p class="card__text">Gain real-time insights into customer behavior and call trends through our
                            advanced analytics and reporting tools. Make informed decisions and optimize your business
                            strategies for maximum efficiency and success.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span2"><img loading="lazy" class="icon"
                            src='{{ asset( "img/icons/icon-Drives-Revenue.svg") }}'
                                                            alt="icon" /></span>
                        <h5>Increased Sales</h5>
                        <p class="card__text">HivoCall’s call center solution for IT companies allows you to automatically
                            dial numbers from a list for your outbound campaigns. Save agents’ time and boost productivity
                            by connecting them with customers who pick up the call.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span3"><img loading="lazy" class="icon"
                            src='{{ asset( "img/icons/Enhance-Loyalty-with-SMS.svg") }}'                                alt="icon" /></span>
                        <h5>Enhanced Remote Support</h5>
                        <p class="card__text">Enable efficient remote IT support for clients through HivoCall’s advanced
                            features. Ensure timely and effective resolution of technical issues, regardless of location,
                            and provide a seamless customer experience.</p>
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
