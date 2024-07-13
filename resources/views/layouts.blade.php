<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="img/SVG/logoDark.svg">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />
    <script src="{{ asset('js/script.js') }}" defer></script>
    <title>HivoCall</title>
</head>

<body>
    <header class="header">
        <nav class="nav-bar">
            <div class="logo">

                <a href="/"> <img loading="lazy" src='{{ asset('img/SVG/logoDark.svg') }}' alt="logo">
                    <h1>
                        HivoCall
                    </h1>
                </a>
            </div>

            <div class="nav-items">
                <ul class="nav-item">
                    <li class="expand">
                        <a id="mobileExpand">Products <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="mobile">
                            <div class="top">
                                <h3>Products</h3>
                                <ul class="content">
                                    <li><a href="/business-phone-system"> business Phone System</a></li>
                                    {{-- <li><a href="#"> WhatsApp business</a></li>
                                    <li><a href="#"> shared inbox</a></li> --}}
                                </ul>
                            </div>
                            <div class="bottom">
                                <h3>Features</h3>
                                <ul class="content">
                                    <li><a href="/power-dialer">Power dialer</a></li>
                                    <li><a href="/auto-rotate">Auto rotate</a></li>
                                    <li><a href="/smart-did-routing">Smart DID Routing</a></li>
                                    <li><a href="/call-monitoring">Live Call Monitoring</a></li>
                                    <li><a href="/sms"> SMS</a></li>
                                    <li><a href="/call-analytics">Powerful Reporting</a></li>
                                    <li><a href="/machine-detection">Automatic Machine Detection</a></li>
                                    <li><a href="/sticky-agent">Sticky Agent </a></li>
                                    <li><a href="/speed-to-dial">Speed To Dial</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div class="dropdown__products">
                                <h3>Products</h3>
                                <ul>
                                    <li><a href="/business-phone-system"><img
                                                src='{{ asset('img/nav-icons/products/BusinessPhoneSystem_icon.svg') }}'
                                                alt="icon">business Phone System</a></li>
                                </ul>
                            </div>
                            <div class="dropdown__features">
                                <h3>Features</h3>
                                <ul class="features__grid">
                                    <li><a href="/power-dialer"><img
                                                src='{{ asset('img/nav-icons/products/power_dialer.svg') }}'
                                                alt="icon">Power dialer</a></li>
                                    <li><a href="/auto-rotate"><img
                                                src='{{ asset('img/nav-icons/products/auto_mchn_detect.svg') }}'
                                                alt="icon">Auto rotate</a></li>
                                    <li><a href="/smart-did-routing"><img
                                                src='{{ asset('img/nav-icons/products/smart_did.svg') }}'
                                                alt="icon">Smart DID Routing</a></li>
                                    <li><a href="/call-monitoring"><img
                                                src='{{ asset('img/nav-icons/products/analytics.svg') }}'
                                                alt="icon">Live Call Monitoring</a></li>
                                    <li><a href="/sms"><img src='{{ asset('img/nav-icons/products/sms.svg') }}'
                                                alt="icon"> SMS</a></li>
                                    <li><a href="/call-analytics"><img
                                                src='{{ asset('img/nav-icons/products/advance_analytics.svg') }}'
                                                alt="icon">Powerful Reporting</a></li>
                                    <li><a href="/machine-detection"><img
                                                src='{{ asset('img/nav-icons/products/auto_mchn_detect.svg') }}'
                                                alt="icon">Automatic Machine Detection</a></li>
                                    <li><a href="/sticky-agent"><img
                                                src='{{ asset('img/nav-icons/products/sticky_agent.svg') }}'
                                                alt="icon">Sticky Agent </a></li>
                                    <li><a href="/speed-to-dial"><img
                                                src='{{ asset('img/nav-icons/products/dialpad.svg') }}'
                                                alt="icon">Speed To Dial</a></li>
                                </ul>
                            </div>
                            <div class="span2">
                                <p>
                                    <span>Let’s talk!</span> Explore our business calling
                                    software
                                </p>
                                <a href="/checkout/{{ $firstPlanId }}">Get A Plan</a>
                            </div>
                        </div>

                    </li>
                    <li class="expand">
                        <a id="mobileExpand">Solution <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="mobile">
                            <div class="top">
                                <h3>By Need</h3>
                                <ul class="content">
                                    <li><a href="/office-phone-system">Office Phone System</a></li>
                                    <li><a href="/call-center-software-solution/">Call center software</a></li>
                                    <li><a href="/voice-broadcasting">Voice Broadcasting</a></li>
                                    <li><a href="/predictive-dialer">Predictive Dialer</a></li>
                                    <li><a href="/virtual-phone-number">Virtual Phone Number</a></li>
                                </ul>
                            </div>
                            <div class="bottom">
                                <h3>By use Case</h3>
                                <ul class="content">
                                    <li><a href="/support-contact-center">Sales & Support</a></li>
                                    <li><a href="/call-barging-feature">Dialer</a></li>
                                    <li><a href="/interactive-voice-response-ivr-system">Interactive Voice</a></li>
                                    <li><a href="/call-barging-feature"></a>Call Barging</li>




                                </ul>
                            </div>
                            <div class="bottom">
                                <h3>Industry</h3>
                                <ul class="content">
                                    <li><a href="/voip-system-for-real-estate/">Real Estate</a></li>

                                    <li><a href="/call-centre-solution-for-software-and-technology/"> Software &
                                            Technology</a></li>
                                    <li><a href="/voip-for-market-research/">Market Research</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown dropdown__2">
                            <div>
                                <h3>By Need</h3>
                                <ul>
                                    <li><a href="/office-phone-system"><img
                                                src="
                                        {{ asset('img/nav-icons/solutions/office_phone.svg') }}"
                                                alt="icon">Office Phone System</a></li>
                                    <li><a href="/call-center-software-solution/"><img
                                                src="
                                        {{ asset('img/nav-icons/solutions/call_center.svg') }}"
                                                alt="icon">Call center software</a></li>
                                    <li><a href="/voice-broadcasting"><img
                                                src="
                                        {{ asset('img/nav-icons/solutions/voice_broadcasting.svg') }}"
                                                alt="icon">Voice Broadcasting</a></li>
                                    <li><a href="/predictive-dialer"><img
                                                src="
                                        {{ asset('img/nav-icons/solutions/predictive-dialer-icon.svg') }}"
                                                alt="icon">Predictive Dialer</a></li>
                                    <li><a href="/virtual-phone-number"><img
                                                src="
                                        {{ asset('img/nav-icons/solutions/virtual_phone_system.svg') }}"
                                                alt="icon">Virtual Phone Number</a></li>


                                </ul>
                            </div>
                            <div>
                                <h3>By use Case</h3>
                                <ul>
                                    <li><a href="/support-contact-center"><img
                                                src="
                                {{ asset('img/nav-icons/solutions/sales_support.svg') }}"
                                                alt="icon">Sales & Support</a></li>
                                    <li><a href="/call-barging-feature"><img
                                                src="
                                {{ asset('img/nav-icons/solutions/dialer.svg') }}"
                                                alt="icon">Dialer</a></li>
                                    <li><a href="/interactive-voice-response-ivr-system"><img
                                                src="
                                {{ asset('img/nav-icons/solutions/office_phone.svg') }}"
                                                alt="icon">Interactive Voice</a></li>
                                    <li><a href="/call-barging-feature"><img
                                                src="
                                {{ asset('img/nav-icons/solutions/lead_geanrate.svg') }}"
                                                alt="icon">Call Barging</a></li>


                                </ul>
                            </div>
                            <div>
                                <h3>Industry</h3>
                                <ul>
                                    <li><a href="/voip-system-for-real-estate/"><img
                                                src="
                                        {{ asset('img/nav-icons/solutions/real_estate.svg') }}"
                                                alt="icon">Real Estate</a></li>

                                    <li><a href="/call-centre-solution-for-software-and-technology/"><img
                                                src="
                                        {{ asset('img/nav-icons/solutions/software_technology.svg') }}"
                                                alt="icon"> Software &
                                            Technology</a></li>
                                    <li><a href="/voip-for-market-research/"><img
                                                src="
                                        {{ asset('img/nav-icons/solutions/market_reserch_.svg') }}"
                                                alt="icon">Market Research</a></li>
                                </ul>
                            </div>
                            <div class="span2">
                                <p>
                                    <span>Let’s talk!</span> Explore our business calling
                                    software
                                </p>
                                <a href="/checkout/{{ $firstPlanId }}">Get A Plan</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="/pricing">Pricing</a></li>
                    
                    <li class="expand">
                        <a id="mobileExpand">Ressources <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="mobile">
                            <div class="top">
                                <h3>CASE STUDIES</h3>
                                <ul class="content">
                                    <li><a href="/ebook">E-Books & Guides</a></li>
                                    {{-- <li><a href="#">Knowledge Base</a></li> --}}
                                    <li><a href="/call-queuing-system/">Call Queuing</a></li>
                                    <li><a href="/virtual-phone-number">Virtual Phone Number</a></li>
                                    {{-- <li><a href="#">Call Center Guide</a></li>
                                    <li><a href="#">Customer Reviews</a></li> --}}
                                </ul>
                            </div>
                            <div class="bottom">
                                <h3>BLOGS</h3>
                                <ul class="content">
                                    <li><a href="/blog/category/business">Business</a></li>
                                    <li><a href="/blog/category/call-center">Call Center</a></li>
                                    {{-- <li><a href="#">Virtual Numbers</a></li> --}}
                                    <li><a href="/blog/category/telephony">Telephony</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown dropdown__4">
                            <div>
                                <h3>CASE STUDIES</h3>
                                <ul>
                                    <li><a href="/ebook">E-Books & Guides</a></li>
                                    {{-- <li><a href="#">Knowledge Base</a></li> --}}
                                    <li><a href="/call-queuing-system/">Call Queuing</a></li>
                                    <li><a href="/virtual-phone-number">Virtual Phone Number</a></li>
                                    {{-- <li><a href="#">Call Center Guide</a></li>
                                    <li><a href="#">Customer Reviews</a></li> --}}
                                </ul>
                            </div>
                            <div>
                                <h3>BLOGS</h3>
                                <ul>
                                    <li><a href="/blog/category/business">Business</a></li>
                                    <li><a href="/blog/category/call-center">Call Center</a></li>
                                    {{-- <li><a href="#">Virtual Numbers</a></li> --}}
                                    <li><a href="/blog/category/telephony">Telephony</a></li>
                                    
                                </ul>
                            </div>

                            <footer class="span2">
                                <p>
                                    <span>Let’s talk!</span> Explore our business calling
                                    software
                                </p>
                                <a href="/checkout/{{ $firstPlanId }}">Get A Plan</a>
                            </footer>
                        </div>
                    </li>
                </ul>
                <div class="nav-btn">
                    <a class="btn-demo" href="/login">Sign In</a>
                    <a href="/checkout/{{ $firstPlanId }}" class="btn-trial">Get A Plan</a>
                </div>
            </div>

            <div class="nav-mobile" id="menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>

    <footer class="footer-container">
        <div class="footer-main">
            <ul>
                <li class="footer-heading">
                    <a href="/">
                        <h3>By Need</h3>
                    </a>
                    <i class="fa- fasolid-caret-down"></i>
                </li>
                <li><a href="/office-phone-system">Office Phone System</a></li>
                <li><a href="/call-center-software-solution">Call Center Software</a></li>
                <li><a href="/voice-broadcasting">Voice Broadcasting</a></li>
                <li><a href="/predictive-dialer">Predictive Dialer</a></li>
                <li><a href="/speed-to-dial">Speed To Dial</a></li>
                <li><a href="/voip-system-for-real-estate">Real Estate</a></li>
                <li><a href="/call-analytics">Call Analytics</a></li>
            </ul>
            <ul>
                <li class="footer-heading">
                    <a href="/">
                        <h3>Features</h3>
                    </a><i class="fa-solid fa-caret-down"></i>
                </li>
                <li><a href="/call-monitoring">Call Monitoring</a></li>
                <li><a href="/voip-for-market-research">Market Research</a></li>
                <li><a href="/virtual-phone-number">Virtual Phone Number</a></li>
                <li><a href="/power-dialer">Power Dialer</a></li>
                <li><a href="/support-contact-center">Sales & Support</a></li>
                <li><a href="/call-centre-solution-for-software-and-technology">Software & Technology</a></li>

            </ul>
            <ul>
                <li class="footer-heading">
                    <a href="/">
                        <h3>Resources</h3>
                    </a><i class="fa-solid fa-caret-down"></i>
                </li>
                <li><a href="/ebook">E-book </a></li>
                <li><a href="/blog/category/call-center">Call Center</a></li>
                <li><a href="/blog/category/business">Business</a></li>
                <li><a href="/blog">Our Blog</a></li>
                <li><a href="/virtual-phone-number">Virtual Phone Number</a></li>
            </ul>
            <ul>
                <li class="footer-heading">
                    <a href="/">
                        <h3>Legal</h3>
                    </a><i class="fa-solid fa-caret-down"></i>
                </li>
                <li style="color: #FFF1EA" ><a href="/refund-policy">Refund Policy</a></li>
                <li><a href="/terms">Terms Of Use</a></li>
                <li><a href="/acceptable-use">Acceptable Use</a></li>
                <li><a href="/privacy-policy">Privacy Policy</a></li>
            </ul>
            <ul>
                <li class="footer-heading">
                    <a href="/">
                        <h3>Get In Touch</h3>
                    </a><i class="fa-solid fa-caret-down"></i>
                </li>
                <li style="color: #FFF1EA">Learn to Make More Calls:</li>
                <li><a href="tel:+1 (406) 220-5458">+1 (406) 220-5458</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/why-choose-us">Why Choose Us</a></li>


            </ul>
            
        </div>
        <div class="copyright">
            <p>
                COPYRIGHT © 2024 - HIVOCALL 
            </p>
            <div class="socials">
                <a href="https://www.facebook.com/people/Hivocall-LLC/61556888513691/" target="_black"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/hivocall/" target="_black"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </footer>
    <div id="cookieConsentContainer" class="cookie-consent-container"  style="display: none;">
        <p>This website uses cookies to ensure you get the best experience on our website.</p>
        <button id="acceptCookies">Accept</button>
        <button id="refuseCookies">Refuse</button>
    </div>

    <style>
        .cookie-consent-container {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: #f4f4f4;
    padding: 10px;
    text-align: center;
    z-index: 1000;
}

.cookie-consent-container p {
    margin: 10px 0;
}

.cookie-consent-container button {
    padding: 5px 10px;
    margin: 0 5px;
}
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var consentContainer = document.getElementById('cookieConsentContainer');
            var acceptButton = document.getElementById('acceptCookies');
            var refuseButton = document.getElementById('refuseCookies');
    
            // Check if the user has already seen the cookie consent section
            var hasSeenCookieConsent = localStorage.getItem('hasSeenCookieConsent');
            if (!hasSeenCookieConsent) {
                consentContainer.style.display = 'block';
            }
    
            acceptButton.addEventListener('click', function() {
                consentContainer.style.display = 'none';
                localStorage.setItem('hasSeenCookieConsent', 'true');
                // Here, you would also set cookies as the user has accepted.
            });
    
            refuseButton.addEventListener('click', function() {
                consentContainer.style.display = 'none';
                localStorage.setItem('hasSeenCookieConsent', 'true');
                // Optionally, handle the refusal of cookies, such as disabling non-essential cookies.
            });
        });
    </script>
    
</body>

</html>
