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
                                    <li><a href="#">business Phone System</a></li>
                                    <li><a href="#">WhatsApp business</a></li>
                                    <li><a href="#">shared inbox</a></li>
                                </ul>
                            </div>
                            <div class="bottom">
                                <h3>Features</h3>
                                <ul class="content">
                                    <li><a href="#">Power dialer</a></li>
                                    <li><a href="#">Auto rotate</a></li>
                                    <li><a href="#">Smart DID Routing</a></li>
                                    <li><a href="#">Live Call Monitoring</a></li>
                                    <li><a href="#"> SMS</a></li>
                                    <li><a href="#">Powerful Reporting</a></li>
                                    <li><a href="#">Automatic Machine Detection</a></li>
                                    <li><a href="#">Sticky Agent </a></li>
                                    <li><a href="#">Speed To Dial</a></li>
                                    <li><a href="#">All Features </a></li>
                                </ul>
                            </div>
                        </div>
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
                                    <li><a href="/support-contact-center/">Sales & Support</a></li>
                            </div>
                            <div class="bottom">
                                <h3>By use Case</h3>
                                <ul class="content">
                                    <li><a href="/predictive-dialer">Predictive Dialer</a></li>
                                    <li><a href="/virtual-phone-number">Virtual Phone Number</a></li>
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
                                    <li><a href="/office-phone-system">Office Phone System</a></li>
                                    <li><a href="/call-center-software-solution/">Call center software</a></li>
                                    <li><a href="/voice-broadcasting">Voice Broadcasting</a></li>
                                    <li><a href="/predictive-dialer">Predictive Dialer</a></li>
                                    <li><a href="/virtual-phone-number">Virtual Phone Number</a></li>


                                </ul>
                            </div>
                            <div>
                                <h3>By use Case</h3>
                                <ul>
                                    <li><a href="/support-contact-center">Sales & Support</a></li>
                                    <li><a href="/call-barging-feature">Call Barging</a></li>
                                    <li><a href="/interactive-voice-response-ivr-system">Interactive Voice</a></li>
                                    <li><a href="">Lead Generation</a></li>


                                </ul>
                            </div>
                            <div>
                                <h3>Industry</h3>
                                <ul>
                                    <li><a href="/voip-system-for-real-estate/">Real Estate</a></li>

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
                        <a id="mobileExpand">Integration <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="mobile">
                            <div class="top">
                                <h3>INTEGRATIONS</h3>
                                <ul class="content">
                                    <li><a href="/custom-crm-integration">Custom CRM</a></li>
                                    <li><a href="/shopify-integration">Shopify</a></li>
                                    <li><a href="/salesforce-integration">Salesforce</a></li>
                                    <li><a href="/slack-integration">Slack</a></li>


                                    <li><a href="/piperdrive-integration">Pipedrive</a></li>
                                    <li><a href="/zoho-crm-integration">Zoho CRM</a></li>
                                    <li><a href="/zapier-integration">Zapier</a></li>
                                    <li><a href="/hubspot-integration">HubSpot</a></li>
                                    <li><a href="/zendesk-integration">Zendesk</a></li>
                                    <li><a href="/nocrm-integration">Nocrm</a></li>
                                    <li><a href="/activecampaign-integration">ActiveCampaign</a></li>
                                    <li><a href="/intercom-integration">Intercom</a></li>
                                    <li><a href="/outreach-integration">Outreach</a></li>
                                    <li><a href="/teams-integration">Microsoft Teams</a></li>
                                    <li><a href="/freshdesk-integration">Freshdesk</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="dropdown dropdown__3">
                            <div>
                                <h3>INTEGRATIONS</h3>
                                <ul>
                                    <li><a href="/custom-crm-integration">Custom CRM</a></li>
                                    <li><a href="/shopify-integration">Shopify</a></li>
                                    <li><a href="/salesforce-integration">Salesforce</a></li>
                                    <li><a href="/slack-integration">Slack</a></li>


                                    <li><a href="/piperdrive-integration">Pipedrive</a></li>
                                    <li><a href="/zoho-crm-integration">Zoho CRM</a></li>
                                    <li><a href="/zapier-integration">Zapier</a></li>
                                    <li><a href="/hubspot-integration">HubSpot</a></li>
                                    <li><a href="/zendesk-integration">Zendesk</a></li>
                                    <li><a href="/nocrm-integration">Nocrm</a></li>
                                    <li><a href="/activecampaign-integration">ActiveCampaign</a></li>
                                    <li><a href="/intercom-integration">Intercom</a></li>
                                    <li><a href="/outreach-integration">Outreach</a></li>
                                    <li><a href="/microsoft-team-integration">Microsoft Teams</a></li>
                                    <li><a href="/freshdesk-integration">Freshdesk</a></li>
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
                        <a id="mobileExpand">Ressources <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="mobile">
                            <div class="top">
                                <h3>CASE STUDIES</h3>
                                <ul class="content">
                                    <li><a href="/ebook">E-Books & Guides</a></li>
                                    {{-- <li><a href="#">Knowledge Base</a></li> --}}
                                    <li><a href="/blog/business-guide">Business Guide</a></li>
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
                                    <li><a href="/blog">Discover Our Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown dropdown__4">
                            <div>
                                <h3>CASE STUDIES</h3>
                                <ul>
                                    <li><a href="/ebook">E-Books & Guides</a></li>
                                    {{-- <li><a href="#">Knowledge Base</a></li> --}}
                                    <li><a href="/blog/business-guide">Business Guide</a></li>
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
                <li><a href="/blog/category/virtual-numbers">Virtual Phone Number</a></li>
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
                <li><a href="//blog/category/call-center">Call Center</a></li>
                <li><a href="/blog/category/business">Business</a></li>
                <li><a href="/blog">Our Blog</a></li>
                <li><a href="/blog/category/virtual-numbers">Virtual Phone Number</a></li>
            </ul>
            <ul>
                <li class="footer-heading">
                    <a href="/">
                        <h3>Integration</h3>
                    </a><i class="fa-solid fa-caret-down"></i>
                </li>
                <li><a href="/custom-crm-integration">Custom CRM</a></li>
                <li><a href="/slack-integration">Slack</a></li>
                <li><a href="/microsoft-team-integration-integration">Microsoft Teams</a></li>
                <li><a href="/shopify-integration">Shopify</a></li>
                <li><a href="/outreach-integration">Outreach</a></li>
                <li><a href="/freshdesk-integration">Freshdesk</a></li>
                <li><a href="/activecampaign-integration">ActiveCampaign</a></li>
                
            </ul>
            <ul>
                <li class="footer-heading">
                    <a href="/">
                        <h3>Get In Touch</h3>
                    </a><i class="fa-solid fa-caret-down"></i>
                </li>
                <li style="color: #FFF1EA">Learn to Make More Calls:</li>
                <li><a href="tel:+1 (406) 220-5458">+1 (406) 220-5458</a></li>
                <li><a href="/">Contact Us</a></li>
                <li><a href="/">Contact Us</a></li>
                <li><a href="/demo">Book A Demo</a></li>

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

    <script>
        function toggleAccordion() {
            var accordionContent = document.getElementById("accordionContent");
            if (accordionContent.style.display === "block") {
                accordionContent.style.display = "none";
            } else {
                accordionContent.style.display = "block";
            }
        }
    </script>
</body>

</html>
