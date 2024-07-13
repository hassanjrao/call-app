@extends('layouts')
@section('content')
    <div class="autoRotate__container">
        <section class="hero__items">
            <div class="hero__content">

                <p class="title">Auto Rotate</p>
                <p class="content">Enhance your calling strategy with auto rotate for each call. Display customers a
                    different
                    number each time and avoid spam markings. Boost connection rates by customizing the total call limit per
                    day!</p>
                <div class="hero__btn"> <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button>
</div>
            </div>



            <div class="hero__image">
                <img loading="lazy" src="{{ asset('img/heros/Auto-rotate.png') }}" alt="auto-rotate">
            </div>
        </section>
        
        <section class="whyCall__container">
            <div class="why__header">
                <h2 class="why__title">Why HivoCall?</h2>
                <p class="why__text">Avoid getting your numbers marked spam with us! Enhance global reach with local numbers
                    and cost-effective
                    solutions. Elevate your communication game, boost productivity, and connect effortlessly worldwide.</p>
            </div>
            <div class="why__cards">
                <div class="card">
                    <span class="span1"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/Pushing the Boundaries_Pushing the Boundaries.svg") }}"
                            alt="icon" /></span>
                    <h5>Spam Prevention</h5>
                    <p class="card__text">Change numbers with each call automatically! Prevent spam markings and enhance
                        productivity by maintaining a fresh and legitimate appearance to customers.</p>
                </div>
                <div class="card">
                    <span class="span2"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/Cutting-Edge-Innovation.svg") }}"
                            alt="icon" /></span>
                    <h5>Global Reach</h5>
                    <p class="card__text">Establish a local presence worldwide with HivoCall's virtual phone numbers
                        featuring local area codes. Connect with diverse audiences, expanding your reach seamlessly.</p>
                </div>
                <div class="card">
                    <span class="span3"><img loading="lazy" class="icon"
                        src="{{ asset("img/icons/rm-Transparent-Pricing.svg") }}"
                        alt="icon" /></span>
                    <h5>Cost Effective</h5>
                    <p class="card__text">Optimize communication expenses with cost-effective VoIP features! Allocate
                        resources efficiently, directing savings towards core business growth and development.</p>
                </div>
        </section>
        <section class="experience">
            <div class="exp__container">
                <div class="exp__header">
                    <h2 class="exp__title">Deliver Top-Notch Experience</h2>
                    <p class="exp__text">Change numbers automatically from the HivoCall dialer to avoid being marked in the
                        list of spammers. Boost credibility and improve business ROI instantly!</p>
                    <div class="hero__btn"> <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button>
</div>
                </div>
                <div class="exp__cards">
                    <div class="exp__card">
                        <span class="span1"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/rm-auto_answer_call.svg") }}"
                                alt="icon" /></span>
                        <h5>No More Spam Numbers</h5>
                        <p class="card__text">Say goodbye to spam numbers with our auto rotate feature. Protect your
                            communication integrity as our advanced feature ensures each call displays a unique number,
                            preventing spam markings.</p>
                    </div>
                    <div class="exp__card">
                        <span class="span2"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/icon-Increases-Retention.svg") }}"
                                alt="icon" /></span>
                        <h5>Automatic Number Management</h5>
                        <p class="card__text">Automatic number management streamlines communication by dynamically assigning
                            and
                            rotating phone numbers. Enhance security, reduce spam risks, and optimize engagement to ensure a
                            seamless and efficient connection experience for users.</p>
                    </div>
                    <div class="exp__card">
                        <span class="span3"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/Flexibility-and-Mobility.svg") }}"
                                alt="icon" /></span>
                        <h5>Low Call Abandonment Rates</h5>
                        <p class="card__text">Ensure a streamlined and efficient communication process. Auto rotate provides
                            unique numbers, helping in promptly answering calls. Enhance customer satisfaction, and reflect
                            positively on the reliability and responsiveness of your business.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="setup-container">
            <div class="setup-wrapper">
                <div class="setup-content">
                    <h5>
                        Set Up Your Phone System In Less Than <span>3 Minutes</span>
                    </h5>
                    <p class="desc">
                        From buying a number to setting up the auto-rotate feature, all it takes is 3 minutes!
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
                    <h2 class="benefits__title">Benefits of Auto Rotate</h2>
                    <p class="benefits__text">HivoCall’s auto rotate, a dynamic feature, changes identifiers with each
                        call.
                        Enhances privacy, prevents spam markings, and present a fresh and legitimate appearance to
                        recipients.
                        Optimize your communication efficiency today.</p>
                    <div class="hero__btn"> <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button>
</div>
                </div>
                <div class="benefits__cards">
                    <div class="benefits__card">
                        <span class="span1"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/Improve-CSAT.svg") }}"
                                alt="icon" /></span>
                        <h5>Boost Call Connect Rates</h5>
                        <p class="card__text">Auto rotate in calls boosts connection rates. Increase call connect rates with
                            efficient strategies and personalized communication for a seamless connection experience.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span2"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/call_center_analytics.svg") }}"
                                alt="icon" /></span>
                        <h5>Enhanced Credibility</h5>
                        <p class="card__text">Present a varied and legitimate appearance to customers and clients! With each
                            call displaying a different number, avoid patterns associated with spam, fostering trust and
                            professionalism.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span3"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/Boost-Efficiency-with-SMS.svg") }}"
                                alt="icon" /></span>
                        <h5>Maximized Agent Productivity</h5>
                        <p class="card__text">Maximize agent productivity by presenting a different number with each call,
                            preventing spam markings. Enhance efficiency by connecting with more calls, ensuring optimal
                            engagement and results.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="avantages__container">
            <div class="avantages__header">
                <h2 class="avantages__title">Dodge Spam, Boost Connection, Enhance Productivity</h2>
                <p class="avantages__text">Auto rotate optimizes connections, prevents spam, and boosts productivity,
                    ensuring a seamless and efficient calling experience for enhanced engagement and results.</p>
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
                        <img loading="lazy" src="{{ asset('img/icons/quot.svg') }}" alt="quote">
                        <p class="hearFromU__text">
                            HivoCall went an extra mile and suggested a perfect solution. As of now, all of our numbers are
                            clean and have the highest attestation score.</p>
                        <div class="hearFromU__footer">
                            <img loading="lazy" src="{{ asset('img/brands/brighterly-new.png') }}" alt="brand" class="footer__img">
                            <div class="footer__name">
                                <p>Rostyslav Khanyk
                                    <span>Head Of Sales, Brighterly</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="hearFromU__image">
                        <img loading="lazy" src="{{ asset('img/SVG/portrait.png') }}" alt="person">
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
