@extends('layouts')
@section('content')
    <div class="hero-container">
        <div class="hero__title">
            <h2>Make More Calls</h2>
        </div>
        <div class="hero__desc">
            <p>
                HivoCall is the leading virtual phone system that assists in
                increasing agent productivity, automating workflows, tracking team
                performance, and reducing
                <span>communication costs<svg xmlns="http://www.w3.org/2000/svg" width="205" height="10"
                        viewBox="0 0 205 10" fill="none">
                        <path d="M2 7.99998C34.8254 4.80714 182.526 -2.51409 203 6.00014" stroke="#ff1849" stroke-width="3"
                            stroke-linecap="round" />
                    </svg>
                </span>
            </p>
        </div>
        <div class="hero__btn">
            <button>Try HivoCall For Free</button>
        </div>
        <div class="hero__image">
            <img src="{{ asset('img/SVG/BgHero1.png') }}" alt="hero" />
        </div>
    </div>

    <div class="trusted-container">
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
    </div>

    <div class="technologies-container">
        <div class="technologies-heading">
            <h3>Hop On to the Future of Virtual Telephony</h3>
            <p>Technology that can exponentially increase your completed calls</p>
        </div>
        <div class="technologies-card__container">
            <div class="technologies-card">
                <div class="technologies-card__image">
                    <img src="./img/icons/speed.svg" alt="cardImage" />
                </div>

                <div class="technologies-card__content">
                    <p>Industries Leading</p>
                    <h4>Call Connect Rates</h4>
                </div>
            </div>
            <div class="technologies-card">
                <div class="technologies-card__image">
                    <img src="./img/icons/rates.svg" alt="cardImage" />
                </div>

                <div class="technologies-card__content">
                    <p>Industries Leading</p>
                    <h4>Call Connect Rates</h4>
                </div>
            </div>
            <div class="technologies-card">
                <div class="technologies-card__image">
                    <img src="./img/icons/connect.svg" alt="cardImage" />
                </div>

                <div class="technologies-card__content">
                    <p>Industries Leading</p>
                    <h4>Call Connect Rates</h4>
                </div>
            </div>
            <div class="technologies-card">
                <div class="technologies-card__image">
                    <img src="./img/icons/puzzle.svg" alt="cardImage" />
                </div>

                <div class="technologies-card__content">
                    <p>Industries Leading</p>
                    <h4>Call Connect Rates</h4>
                </div>
            </div>
            <div class="technologies-card">
                <div class="technologies-card__image">
                    <img src="./img/icons/ai.svg" alt="cardImage" />
                </div>

                <div class="technologies-card__content">
                    <p>Industries Leading</p>
                    <h4>Call Connect Rates</h4>
                </div>
            </div>
            <div class="technologies-card">
                <div class="technologies-card__image">
                    <img src="./img/icons/wifi.svg" alt="cardImage" />
                </div>

                <div class="technologies-card__content">
                    <p>Industries Leading</p>
                    <h4>Call Connect Rates</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="benefits-container">
        <div class="benefits__heading">
            <h3>CC2 Is the Technology That Powers HivoCall</h3>
        </div>
        <div class="benefits-card__container">
            <img class="vs" src="./img/SVG/Vs.png" alt="Vs" />
            <div class="benefits-card">
                <h3>Regular Phone System</h3>
                <ul>
                    <li>
                        <img src="./img/icons/warning.svg" alt="warning" />
                        PBX Technology
                    </li>
                    <li>
                        <img src="./img/icons/warning.svg" alt="warning" />
                        No Uptime Guarantee
                    </li>
                    <li>
                        <img src="./img/icons/warning.svg" alt="warning" />
                        Single Global Server
                    </li>
                    <li>
                        <img src="./img/icons/warning.svg" alt="warning" />
                        Single Telephony Network
                    </li>
                    <li>
                        <img src="./img/icons/warning.svg" alt="warning" />
                        Improper Outbound CLI
                    </li>
                </ul>
            </div>
            <div class="divider"></div>
            <div class="benefits-card">
                <h3>Regular Phone System</h3>
                <ul>
                    <li>
                        <img src="./img/icons/check.svg" alt="check" />
                        PBX Technology
                    </li>
                    <li>
                        <img src="./img/icons/check.svg" alt="check" />
                        No Uptime Guarantee
                    </li>
                    <li>
                        <img src="./img/icons/check.svg" alt="check" />
                        Single Global Server
                    </li>
                    <li>
                        <img src="./img/icons/check.svg" alt="check" />
                        Single Telephony Network
                    </li>
                    <li>
                        <img src="./img/icons/check.svg" alt="check" />
                        Improper Outbound CLI
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="packs-container">
        <div class="packs__heading">
            <h2>Transform Your Sales Process & Customer Experiences</h2>
            <p>
                Use HivoCall To Monitor & Manage Your Business Operations From One
                Place.
            </p>
        </div>

        <div class="packs__cards">
            <div class="pack">
                <h4>For Sales Teams</h4>
                <p>
                    Improve sales agents’ productivity and increase conversions.
                    Leverage advanced features to build a strong brand presence and
                    boost revenue.
                </p>
                <button>Schedule a Demo</button>
            </div>
            <div class="pack">
                <h4>For Support Teams</h4>
                <p>
                    Create enhanced customer experiences by solving queries in a
                    flash. Utilize Smart Call Forwarding to stay connected at any
                    time.
                </p>
                <button>Talk to Our Team</button>
            </div>
            <div class="pack">
                <h4>For Call Centers/BPO</h4>
                <p>
                    Level up your processes and connect with more prospects using IVR.
                    Be available round-the-clock with our robust features.
                </p>
                <button>Schedule a Demo</button>
            </div>
        </div>
    </div>

    <div class="setup-container">
        <div class="setup-wrapper">
            <div class="setup-content">
                <h5>
                    Set Up Your Phone System In Less Than <span>3 Minutes</span>
                </h5>
                <p class="desc">
                    From buying a number to making the first call, all it takes is 3
                    minutes to set up your virtual phone system.
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
    </div>

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
@endsection
