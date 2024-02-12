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
            <button> <a href="signup">Try HivoCall For Free</a> </button>
        </div>
        <div class="hero__image">
            <img loading="lazy" src="{{ asset('img/SVG/BgHero1.png') }}" alt="hero" />
        </div>
    </div>

    <div class="trusted-container">
        <div class="trusted-heading">
            <p>Trusted by 4000+ companies</p>
        </div>
        <div class="trusted-content">
            <img loading="lazy" src="{{ asset('img/companies/Amazon.svg') }}" alt="trusted" /><img loading="lazy"
                src="{{ asset('img/companies/brighchamps.svg') }}" alt="trusted" /><img loading="lazy"
                src="{{ asset('img/companies/oracle.svg') }}" alt="trusted" /><img loading="lazy"
                src="{{ asset('img/companies/turing.svg') }}" alt="trusted" />
            <img loading="lazy" src="{{ asset('img/companies/valuelabs.svg') }}" alt="trusted" /><img loading="lazy"
                src="{{ asset('img/companies/iresearch.svg') }}" alt="trusted" />
            <img loading="lazy" src="{{ asset('img/companies/intellipaat_logo.svg') }}" alt="trusted" />
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
                    <img loading="lazy" src="./img/icons/speed.svg" alt="cardImage" />
                </div>

                <div class="technologies-card__content">
                    <p>Industries Leading</p>
                    <h4>Call Connect Rates</h4>
                </div>
            </div>
            <div class="technologies-card">
                <div class="technologies-card__image">
                    <img loading="lazy" src="./img/icons/rates.svg" alt="cardImage" />
                </div>

                <div class="technologies-card__content">
                    <p>Industries Leading</p>
                    <h4>Call Connect Rates</h4>
                </div>
            </div>
            <div class="technologies-card">
                <div class="technologies-card__image">
                    <img loading="lazy" src="./img/icons/connect.svg" alt="cardImage" />
                </div>

                <div class="technologies-card__content">
                    <p>Industries Leading</p>
                    <h4>Call Connect Rates</h4>
                </div>
            </div>
            <div class="technologies-card">
                <div class="technologies-card__image">
                    <img loading="lazy" src="./img/icons/puzzle.svg" alt="cardImage" />
                </div>

                <div class="technologies-card__content">
                    <p>Industries Leading</p>
                    <h4>Call Connect Rates</h4>
                </div>
            </div>
            <div class="technologies-card">
                <div class="technologies-card__image">
                    <img loading="lazy" src="./img/icons/ai.svg" alt="cardImage" />
                </div>

                <div class="technologies-card__content">
                    <p>Industries Leading</p>
                    <h4>Call Connect Rates</h4>
                </div>
            </div>
            <div class="technologies-card">
                <div class="technologies-card__image">
                    <img loading="lazy" src="./img/icons/wifi.svg" alt="cardImage" />
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
            <img loading="lazy" class="vs" src="./img/SVG/Vs.png" alt="Vs" />
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
                <button><a href="/schedule-a-demo">Schedule a Demo</a></button>
            </div>
            <div class="pack">
                <h4>For Support Teams</h4>
                <p>
                    Create enhanced customer experiences by solving queries in a
                    flash. Utilize Smart Call Forwarding to stay connected at any
                    time.
                </p>
                <button> <a href="/schedule-a-demo">Talk to Our Team</a> </button>
            </div>
            <div class="pack">
                <h4>For Call Centers/BPO</h4>
                <p>
                    Level up your processes and connect with more prospects using IVR.
                    Be available round-the-clock with our robust features.
                </p>
                <button> <a href="/schedule-a-demo"> Schedule a Demo</a></button>
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
                <button><a href="/signup">Start Free Trial</a></button>
            </div>
            <img src="{{ asset('img/SVG/business-phone-number.png') }}" alt="Mobile" />
        </div>
    </div>

    <section class="platform">
        <div class="heading">
            <h3>Hivocall for Multiple Platforms
            </h3>
            <p>Stay connected no matter where you are. Hivocall is your constant companion, available on iOS, Android, as a
                WebApp, and Google Chrome Extension.

            </p>
        </div>
        <div class="platformGrid">
            <a href="/signup" class="box">
                <img src="{{ asset('img/platform/platform_web.png') }}" alt="web">
                <p>Available on</p>
                <span>Web</span>
            </a>
            <a href="https://www.apple.com/app-store/hivocall" class="box">
                <img src="{{ asset('img/platform/MacOS_logo.svg') }}" alt="Mac">
                <p>Mac</p>
                <span>Desktop</span>
            </a>
            <a href="https://apps.microsoft.com/search?query=hivocall&hl=en-us&gl=US" class="box">
                <img src="{{ asset('img/platform/windows.svg') }}" alt="windows">
                <p>Windows</p>
                <span>Desktop</span>
            </a>
            <a href="https://play.google.com/store/" class="box">
                <img src="{{ asset('img/platform/android.png') }}" alt="android">
                <p>Download on</p>
                <span>Android</span>
            </a>
            <a href="https://www.apple.com/app-store/" class="box">
                <img src="{{ asset('img/platform/ios.png') }}" alt="Ios">
                <p>Download</p>
                <span>IOS</span>
            </a>
            <a href="https://chromewebstore.google.com/search/hivocall" class="box">
                <img src="{{ asset('img/platform/chrome.svg') }}" alt="web">
                <p>Get extension on</p>
                <span>chrome Store</span>
            </a>
        </div>
    </section>

    <section class="hearFromU">
        <div class="hearFromU__container">
            <h2>Hear From Our Customers</h2>
            <div class="hearFromU__mainview">
                <div class="hearFromU__content">
                    <img src="{{ asset('img/icons/quot.svg') }}" alt="quote">
                    <p class="hearFromU__text">
                        HivoCall exceeded expectations by proposing an ideal solution. Presently, all our figures boast
                        pristine clarity and achieve the pinnacle of attestation scores.



                    </p>
                    <div class="hearFromU__footer">

                        <div class="footer__name">
                            <p>Emily Smith
                                <span>Marketing Manager, Evergreen Technologies</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="hearFromU__image">
                    <img src="{{ asset('img/SVG/portrait.png') }}" alt="person">
                </div>
            </div>
        </div>



    </section>


    <section class="countries">
        <div class="heading">
            <h3>Get International Phone Numbers</h3>
        </div>

        <div class="content">
            <ul class="phone-numbers-list">
                <li>
                    <strong>Asia</strong>
                    <ul>
                        <li><img src="{{ asset('img/countries/Bahrain.svg') }}"> Bahrain Phone Number</li>
                        <li><img src="{{ asset('img/countries/Bangladesh.svg') }}"> Bangladesh Phone Number</li>
                        <li><img src="{{ asset('img/countries/iran.svg') }}"> Iran Phone Number</li>
                        <li><img src="{{ asset('img/countries/vietnam.svg') }}"> Vietnam Phone Number</li>
                        <li><img src="{{ asset('img/countries/tanzania.svg') }}"> Tanzania Phone Number</li>
                        <li><img src="{{ asset('img/countries/Indonesia.svg') }}"> Indonesia Phone Number</li>
                        <li><img src="{{ asset('img/countries/ae.svg') }}"> Emarat Phone Number</li>
                        <li><img src="{{ asset('img/countries/Japan.svg') }}"> Japan Phone Number</li>
                        <li><img src="{{ asset('img/countries/kazakhistan.svg') }}"> Kazakhistan Phone Number</li>
                        <li><img src="{{ asset('img/countries/Malaysia.svg') }}"> Malaysia Phone Number</li>
                        <li><img src="{{ asset('img/countries/Pakistan.svg') }}"> Pakistan Phone Number</li>
                        <li><img src="{{ asset('img/countries/Philippines.svg') }}"> Philippines Phone Number</li>
                        <li><img src="{{ asset('img/countries/Singapore.svg') }}"> Singapore Phone Number
                        </li>
                        <li><img src="{{ asset('img/countries/Singapore.svg') }}"> Singapore Toll Free Number</li>
                        <li><img src="{{ asset('img/countries/korea.svg') }}"> South Korea Phone Number</li>
                        <li><img src="{{ asset('img/countries/sirilanka.svg') }}"> Sri Lanka Phone Number</li>
                        <li><img src="{{ asset('img/countries/Taiwan.svg') }}"> Taiwan Phone Number</li>
                        <li><img src="{{ asset('img/countries/Thailand.svg') }}"> Thailand Phone Number</li>
                        <li><img src="{{ asset('img/countries/Turkey.svg') }}"> Turkey Phone Number</li>
                    </ul>
                </li>
                <li>
                    <strong>Africa</strong>
                    <ul>
                        <li><img src="{{ asset('img/countries/Ghana.svg') }}"> Ghana Phone Number</li>
                        <li><img src="{{ asset('img/countries/Uganda.svg') }}"> Uganda Phone Number</li>
                        <li><img src="{{ asset('img/countries/southAfrica.svg') }}"> South Africa Phone Number</li>
                    </ul>
                    <strong>Europe</strong>
                    <ul>
                        <li><img src="{{ asset('img/countries/Austria.svg') }}"> Austria Phone Number</li>
                        <li><img src="{{ asset('img/countries/Belgium.svg') }}"> Belgium Phone Number</li>
                        <li><img src="{{ asset('img/countries/Bulgaria.svg') }}"> Bulgaria Phone Number</li>
                        <li><img src="{{ asset('img/countries/Cyprus.svg') }}"> Cyprus Phone Number</li>
                        <li><img src="{{ asset('img/countries/czech.svg') }}"> Czech Republic Phone Number</li>
                        <li><img src="{{ asset('img/countries/Denmark.svg') }}"> Denmark Phone Number</li>
                        <li><img src="{{ asset('img/countries/Estonia.svg') }}"> Estonia Phone Number</li>
                        <li><img src="{{ asset('img/countries/albania.svg') }}"> Albania Phone Number</li>
                        <li><img src="{{ asset('img/countries/France.svg') }}"> France Phone Number</li>
                        <li><img src="{{ asset('img/countries/Germany.svg') }}"> Germany Phone Number</li>
                        <li><img src="{{ asset('img/countries/Greece.svg') }}"> Greece Phone Number</li>
                        <li><img src="{{ asset('img/countries/Hungary.svg') }}"> Hungary Phone Number</li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li><img src="{{ asset('img/countries/Ireland.svg') }}"> Ireland Phone Number</li>
                        <li><img src="{{ asset('img/countries/italie.svg') }}"> Italy Phone Number</li>
                        <li><img src="{{ asset('img/countries/Latvia.svg') }}"> Latvia Phone Number</li>
                        <li><img src="{{ asset('img/countries/Luxembourg.svg') }}"> Luxembourg Phone Number</li>
                        <li><img src="{{ asset('img/countries/Malta.svg') }}"> Malta Phone Number</li>
                        <li><img src="{{ asset('img/countries/wilz.svg') }}"> Wales Phone Number</li>
                        <li><img src="{{ asset('img/countries/Netherlands.svg') }}"> Netherlands Phone Number</li>
                        <li><img src="{{ asset('img/countries/Norway.svg') }}"> Norway Phone Number</li>
                        <li><img src="{{ asset('img/countries/Poland.svg') }}"> Poland Phone Number</li>
                        <li><img src="{{ asset('img/countries/Portugal.svg') }}"> Portugal Phone Number</li>
                        <li><img src="{{ asset('img/countries/Romania.svg') }}"> Romania Phone Number</li>
                        <li><img src="{{ asset('img/countries/Russia.svg') }}"> Russia Phone Number</li>
                        <li><img src="{{ asset('img/countries/croitia.svg') }}"> Croitia Phone Number</li>
                        <li><img src="{{ asset('img/countries/Slovakia.svg') }}"> Slovakia Phone Number</li>
                        <li><img src="{{ asset('img/countries/Spain.svg') }}"> Spain Phone Number</li>
                        <li><img src="{{ asset('img/countries/Sweden.svg') }}"> Sweden Phone Number</li>
                        <li><img src="{{ asset('img/countries/finland.svg') }}"> Finland Phone Number</li>
                        <li><img src="{{ asset('img/countries/UK.svg') }}"> UK Phone Number</li>
                        <li><img src="{{ asset('img/countries/UK.svg') }}"> UK Toll Free Number</li>
                    </ul>

                </li>
                <li>
                    <ul>
                        <li><strong>North America</strong></li>
                        <ul>
                            <li><img src="{{ asset('img/countries/cc.svg') }}"> Belize Flag Belize Phone Number</li>
                            <li><img src="{{ asset('img/countries/Canada.svg') }}"> Canada Flag Canada Phone Number</li>
                            <li><img src="{{ asset('img/countries/Canada.svg') }}">Canada Toll Free Number</li>
                            <li><img src="{{ asset('img/countries/usa.svg') }}"> United State Of America Phone Number</li>
                            <li><img src="{{ asset('img/countries/colombia.svg') }}"> Colombia Phone Number</li>
                        </ul>
                        <ul>
                            <strong>Oceania</strong>
                            <li><img src="{{ asset('img/countries/netherlands.svg') }}"> NetherLands Phone Number</li>
                            <li><img src="{{ asset('img/countries/australia.svg') }}"> Australia Phone Number</li>
                            <li><img src="{{ asset('img/countries/australia.svg') }}">Australia Toll Free Number</li>
                        </ul>
                        <strong>South America</strong>
                        <ul>
                            <li><img src="{{ asset('img/countries/argentina.svg') }}"> Argentina Phone Number</li>
                            <li><img src="{{ asset('img/countries/brasil.svg') }}"> Brazil Phone Number</li>
                            <li><img src="{{ asset('img/countries/chile.svg') }}"> Chile Phone Number</li>
                            <li><img src="{{ asset('img/countries/colombia.svg') }}"> Colombia Phone Number</li>
                            <li><img src="{{ asset('img/countries/urugwayy.svg') }}"> Uruguay Phone Number</li>
                        </ul>
                    </ul>
                </li>
                <li>
                </li>
            </ul>

        </div>
    </section>
@endsection
