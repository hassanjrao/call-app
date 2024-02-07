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
    <script src="{{ asset('js/script.js') }}" defer></script>
    <title>HivoCall</title>
</head>

<body>
    <header class="header">
        <nav class="nav-bar">
            <div class="logo">

                <a href="/"> <img src='{{ asset('img/SVG/logoDark.svg') }}' alt="logo">
                    <h1>
                        HivoCall
                    </h1>
                </a>
            </div>

            <div class="nav-items">
                <ul class="nav-item">
                    <li class="expand">
                        Products
                        <i class="fa-solid fa-chevron-down"></i>
                        <div class="dropdown">
                            <div class="dropdown__products">
                                <h3>Products</h3>
                                <ul>
                                    <li><a href="/business-phone-system">business Phone System</a></li>
                                    {{-- <li><a href="#">WhatsApp business</a></li>
                                    <li><a href="#">shared inbox</a></li> --}}
                                </ul>
                            </div>
                            <div class="dropdown__features">
                                <h3>Features</h3>
                                <ul class="features__grid">
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
                            <div class="span2">
                                <p>
                                    <span>Let’s talk!</span> Explore our business calling
                                    software
                                </p>
                                <a href="/schedule-a-demo">book a demo today</a>
                            </div>
                        </div>
                    </li>
                    <li class="expand">
                        Solution <i class="fa-solid fa-chevron-down"></i>

                        <div class="dropdown dropdown__2">
                            <div>
                                <h3>By Need</h3>
                                <ul>
                                    <li><a href="/office-phone-system">Office Phone System</a></li>
                                    <li><a href="/call-center-software-solution/">Call center software</a></li>
                                    <li><a href="/voice-broadcasting">Voice Broadcasting</a></li>
                                    <li><a href="/predictive-dialer">Predictive Dialer</a></li>
                                    <li><a href="/virtual-phone-number">Virtual Phone Number</a></li>
                                    <li><a href="/support-contact-center/">Sales & Support</a></li>


                                </ul>
                            </div>
                            <div>
                                <h3>By use Case</h3>
                                <ul>
                                    <li><a href="/predictive-dialer">Predictive Dialer</a></li>
                                    <li><a href="/virtual-phone-number">Virtual Phone Number</a></li>
                                    <li><a href="/support-contact-center">Sales & Support</a></li>
                                    <li><a href="/office-phone-system">Office Phone System</a></li>
                                    <li><a href="/call-center-software-solution/">Call center software</a></li>
                                    <li><a href="/voice-broadcasting">Voice Broadcasting</a></li>


                                </ul>
                            </div>
                            <div>
                                <h3>Industry</h3>
                                <ul>
                                    <li><a href="#">Edtech</a></li>
                                    <li><a href="/voip-system-for-real-estate/">Real Estate</a></li>
                                    {{-- <li><a href="#">Financial Services</a></li>
                                    <li><a href="#">Recruitment</a></li> --}}
                                    <li><a href="/call-centre-solution-for-software-and-technology/"> Software &
                                            Technology</a></li>
                                    <li><a href="/voip-for-market-research/">Market Research</a></li>
                                </ul>
                            </div>
                            <div class="span2">
                                <p>
                                    <span>Let’s talk!</span> Explore our business calling
                                    software
                                </p>
                                <a href="/schedule-a-demo">book a demo today</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="/pricing">Pricing</a></li>
                    <li class="expand">
                        integrations <i class="fa-solid fa-chevron-down"></i>

                        <div class="dropdown dropdown__3">
                            <div>
                                <h3>INTEGRATIONS</h3>
                                <ul>
                                    <li><a href="/custom-crm-integration">Custom CRM</a></li>
                                    <li><a href="/shopify-integration">Shopify</a></li>
                                    <li><a href="/salesforce-integration">Salesforce</a></li>
                                    <li><a href="/slack-integration">Slack</a></li>


                                    <li><a href="/custom-crm-integration">Pipedrive</a></li>
                                    <li><a href="/shopify-integration">Zoho CRM</a></li>
                                    <li><a href="/slack-integration">Zapier</a></li>
                                    <li><a href="/custom-crm-integration">HubSpot</a></li>
                                    <li><a href="/slack-integration">Zendesk</a></li>
                                    <li><a href="/salesforce-integration">Nocrm</a></li>
                                    <li><a href="/custom-crm-integration">Re:amaze</a></li>
                                    <li><a href="/slack-integration">ActiveCampaign</a></li>
                                    <li><a href="/salesforce-integration">Intercom</a></li>
                                    <li><a href="/custom-crm-integration">Outreach</a></li>
                                    <li><a href="/slack-integration">Microsoft Teams</a></li>
                                    <li><a href="/shopify-integration">Freshdesk</a></li>
                                    <li><a href="/custom-crm-integration">Leadsquared</a></li>
                                </ul>
                            </div>

                            <footer class="span2">
                                <p>
                                    <span>Let’s talk!</span> Explore our business calling
                                    software
                                </p>
                                <a href="/schedule-a-demo">book a demo today</a>
                            </footer>
                        </div>
                    </li>
                    <li class="expand">
                        Resources <i class="fa-solid fa-chevron-down"></i>
                        <div class="dropdown dropdown__4">
                            <div>
                                <h3>CASE STUDIES</h3>
                                <ul>
                                    <li><a href="/ebook">E-Books & Guides</a></li>
                                    {{-- <li><a href="#">Knowledge Base</a></li> --}}
                                    <li><a href="/blog/business-guide">Business Guide</a></li>
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
                                    <li><a href="/blog">Discover Our Blog</a></li>
                                </ul>
                            </div>

                            <footer class="span2">
                                <p>
                                    <span>Let’s talk!</span> Explore our business calling
                                    software
                                </p>
                                <a href="/schedule-a-demo">book a demo today</a>
                            </footer>
                        </div>
                    </li>
                </ul>
                <div class="nav-btn">
                    <a class="btn-demo" href="/schedule-a-demo">book a demo</a>
                    <a href="/signup" class="btn-trial">start free trial</a>
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
                    <i class="fa-solid fa-caret-down"></i>
                </li>
                <li><a href="/">Cloud PBX</a></li>
                <li><a href="/">Virtual PBX</a></li>
                <li><a href="/">Voip Phone System</a></li>
                <li><a href="/">Business Phone Number</a></li>
                <li><a href="/">Local Phone Number</a></li>
                <li><a href="/">Online Phone Number</a></li>
                <li><a href="/">International Phone Number</a></li>
            </ul>
            <ul>
                <li class="footer-heading">
                    <a href="/">
                        <h3>Features</h3>
                    </a><i class="fa-solid fa-caret-down"></i>
                </li>
                <li><a href="/">Call Queuing</a></li>
                <li><a href="/">Call Tracking</a></li>
                <li><a href="/">Auto Call Distribution</a></li>
                <li><a href="/">Intract Voice Response</a></li>
                <li><a href="/">Power Dialer</a></li>
                <li><a href="/">Warm Transfer</a></li>
                <li><a href="/">Call Barging</a></li>
                <li><a href="/">Speech Analytics</a></li>

            </ul>
            <ul>
                <li class="footer-heading">
                    <a href="/">
                        <h3>Resources</h3>
                    </a><i class="fa-solid fa-caret-down"></i>
                </li>
                <li><a href="/">E-book </a></li>
                <li><a href="/">Customer Stories</a></li>
                <li><a href="/">Comparisons</a></li>
                <li><a href="/">Find Call Centers</a></li>
                <li><a href="/">Glossary</a></li>
            </ul>
            <ul>
                <li class="footer-heading">
                    <a href="/">
                        <h3>Company</h3>
                    </a><i class="fa-solid fa-caret-down"></i>
                </li>
                <li><a href="/"> Knowledge Base</a></li>
                <li><a href="/">About Us</a></li>
                <li><a href="/">Contact Us</a></li>
                <li><a href="/">API Documentation</a></li>
                <li><a href="/">Company Address:</a></li>
                <li><a href="">127 N HIGGINS AVE STE 307D <br>
                    MISSOULA, MT 59802</a></li>
            </ul>
            <ul>
                <li class="footer-heading">
                    <a href="/">
                        <h3>Get In Touch</h3>
                    </a><i class="fa-solid fa-caret-down"></i>
                </li>
                <li style="color: #FFF1EA">Learn to Make More Calls:</li>
                <li><a href="/">+1 254 455 5666</a></li>
                <li><a href="/">Support@hivocall.com</a></li>
                <li><a href="/">Join Our Affiliate Program</a></li>
                <li><a href="/">Become a Partner</a></li>
                <li><a href="/">Refer a Friend</a></li>

            </ul>
        </div>
        <div class="copyright">
            <p>
                COPYRIGHT © 2023 - HIVOCALL STATUS DPA AUP SMS POLICY PRIVACY POLICY
                TERMS & CONDITIONS SITEMAP
            </p>
            <div class="socials">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-x-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
        </div>
    </footer>
</body>

</html>
