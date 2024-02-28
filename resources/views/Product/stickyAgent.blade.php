@extends('layouts')
@section('content')
    <div class="stickyAgent__container">
        <section class="hero__items">
            <div class="hero__content">

                <p class="title">Sticky Agent</p>
                <p class="content">Connect customers to the same agent automatically. Eliminate wasted time re-explaining
                    issues and increase loyalty while reducing lead mismanagement.</p>
                <div class="hero__btn"> <button><a href="pay">Buy It Now</a></button></div>
            </div>



            <div class="hero__image">
                <img loading="lazy" src="{{ asset('img/heros/Sticky-Agent.png') }}"
                    alt="agent">
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

                    Transforming customer experiences for years. HivoCall is the leading cloud contact center software
                    provider empowering enterprises worldwide. Discover why HivoCall is the ultimate choice for your
                    business.</p>
            </div>
            <div class="why__cards">
                <div class="card">
                    <span class="span1"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/Pushing the Boundaries_Pushing the Boundaries.svg") }} "
                            alt="icon" /></span>
                    <h5>Pushing the Boundaries</h5>
                    <p class="card__text">Stay ahead of the competition with our continuous feature updates and
                        improvements, ensuring your business always has access to the latest tools for exceptional customer
                        interactions.</p>
                </div>
                <div class="card">
                    <span class="span2"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/Industry-Leading Reliability_ Industry-Leading Reliability.svg") }} "
                            alt="icon" /></span>
                    <h5>Industry-Leading Reliability</h5>
                    <p class="card__text">Your business deserves nothing less than the gold standard of reliability and
                        security. Rely on unmatched stability, boasting an impressive 99.99% uptime and our rigorous
                        security measures designed to safeguard your data.</p>
                </div>
                <div class="card">
                    <span class="span3"><img loading="lazy" class="icon"
                            src="{{ asset("img/icons/icon-Premium-Support.svg") }} "
                            alt="icon" /></span>
                    <h5>Premium Support</h5>
                    <p class="card__text">We offer comprehensive training, empowering your team to make the most of our
                        advanced features. And when you need assistance, our 24/7 customer support team is always just a
                        call or message away.</p>
                </div>
        </section>
        <section class="experience">
            <div class="exp__container">
                <div class="exp__header">
                    <h2 class="exp__title">Improve First Call Resolution Rate</h2>
                    <p class="exp__text">HivoCall’s sticky agent feature allows you to connect callers with agents who know
                        their past interactions, enabling them to personalize their service and solve issues quickly. Here’s
                        why you should invest in the sticky agent feature.</p>
                    <div class="hero__btn"> <button><a href="pay">Buy It Now</a></button></div>
                </div>
                <div class="exp__cards">
                    <div class="exp__card">
                        <span class="span1"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/icon-Improved-Agent-Utilization.svg") }} "
                                alt="icon" /></span>
                        <h5>Improved Agent Utilization</h5>
                        <p class="card__text">Streamline your workforce resources by reducing the time spent on verifying
                            details. Enable agents to focus on efficiently resolving customer needs, providing
                            recommendations, and cultivating strong customer relationships.</p>
                    </div>
                    <div class="exp__card">
                        <span class="span2"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/icon-Valuable-Insights.svg") }} "
                                alt="icon" /></span>
                        <h5>Valuable Insights</h5>
                        <p class="card__text">Gain useful analytics into agent performance, conversation trends, and
                            opportunities to further boost customer satisfaction. Maintain regulatory compliance by easily
                            accessing full customer conversation histories.</p>
                    </div>
                    <div class="exp__card">
                        <span class="span3"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/icon-Enhanced-Personalization.svg") }} "
                                alt="icon" /></span>
                        <h5>Enhanced Personalization</h5>
                        <p class="card__text">Make every interaction feel tailored and relevant through continuous
                            conversations over time. Foster brand affinity and emotional connections between customers and
                            agents who know them.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="setup-container">
            <div class="setup-wrapper">
                <div class="setup-content">
                    <h5>
                        Create Customer Familiarity with Familiar
                        <span>Agents</span>
                    </h5>
                    <p class="desc">
                        Personalize every interaction by automatically routing customers to agents who have helped them
                        before.
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
                    <h2 class="benefits__title">Benefits of Sticky Agent</h2>
                    <p class="benefits__text">When it comes to transforming customer experience, the sticky agent is your
                        secret weapon for unparalleled success. Here’s how you can benefit from it.</p>
                    <div class="hero__btn"> <button><a href="pay">Buy It Now</a></button></div>
                </div>
                <div class="benefits__cards">
                    <div class="benefits__card">
                        <span class="span1"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/Saves-Time-with-amd.svg") }} "
                                alt="icon" /></span>
                        <h5>Saves Time</h5>
                        <p class="card__text">Cut the average handling time by as much as 20%. Faster resolutions mean
                            happier customers and more time for your agents to focus on what truly matters – building
                            lasting connections.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span2"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/icon-Drives-Revenue.svg") }} "
                                alt="icon" /></span>
                        <h5>Drives Revenue</h5>
                        <p class="card__text">Agents can recommend appropriate products or services by understanding
                            customer needs over time, driving greater cross-sell and up-sell revenue while also driving
                            valuable referrals for business success.</p>
                    </div>
                    <div class="benefits__card">
                        <span class="span3"><img loading="lazy" class="icon"
                                src="{{ asset("img/icons/icon-Increases-Retention.svg") }} "
                                alt="icon" /></span>
                        <h5>Increases Retention</h5>
                        <p class="card__text">Agents who possess a deep understanding of customer history make customers
                            feel valued and appreciated. This fosters enhanced loyalty, boosts customer lifetime value, and
                            significantly improves long-term retention rates.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="avantages__container">
            <div class="avantages__header">
                <h2 class="avantages__title">The Ultimate Call Center Software Solution</h2>
                <p class="avantages__text">Equip your team with the essential tools and amplify communication and
                    productivity through a unified
                    Call Center Software dashboard.</p>
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
