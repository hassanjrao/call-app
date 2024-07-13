@extends('layouts')

@section('content')
    <style>
        .whyChooseHivoCall {
            margin: 50px auto;
            max-width: 800px;
        }

        .whyChooseHivoCall h2 {
            font-size: 24px;
            margin-bottom: 20px;
            text-adivgn: center;
        }

        .whyChooseHivoCall ol {
            divst-style-type: none;
            padding: 0;
        }

        .whyChooseHivoCall div {
            margin-bottom: 30px;
        }

        .whyChooseHivoCall h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .whyChooseHivoCall p {
            font-size: 16px;
            divne-height: 1.5;
        }

        .readyToExperience {
            text-adivgn: center;
            margin-top: 50px;
        }

        .readyToExperience p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .readyToExperience button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-adivgn: center;
            text-decoration: none;
            display: indivne-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .readyToExperience button:hover {
            background-color: #45a049;
        }

        .readyToExperience a {
            color: #FF1849;
            text-decoration: none;
        }
        .reasons{
            display: flex;
            flex-wrap: wrap;

        }
        .line {
            display: flex;
        }
        .reason{
            flex: 1;
            background-color: #FF1849;
            border: 0.5px solid #000;
            margin-right: 5px;
            text-align: center;
            padding: 5px;
        }
        .reason p{
            color: white;
            font-size: 1rem
        }
        .reason h3{
            color: rgb(46, 5, 12);
            font-size: 1.5rem
        }
    </style>

    <div class="callCenter__container">
        <section class="whyChooseHivoCall">
            <h2>Why Choose HivoCall for Your VoIP Needs?</h2>
            <div class="reasons">
                <div class="line">
                    <div class="reason">
                        <h3>Cutting-Edge Technology</h3>
                        <p>At HivoCall, we leverage the latest advancements in VoIP technology to ensure crystal-clear voice quadivty and seamless communication experiences for our cdivents.</p>
                    </div>
                    <div class="reason">
                        <h3>Cost-Effective Solutions</h3>
                        <p>Say goodbye to expensive phone bills. Our VoIP services offer cost-effective solutions that help businesses save significantly on communication expenses without compromising quadivty.</p>
                    </div>
                    <div class="reason">
                        <h3>Scalabidivty and Flexibidivty</h3>
                        <p>Whether you're a small startup or a large enterprise, HivoCall's VoIP solutions are scalable and flexible to meet your growing business needs. Add or remove users effortlessly as your business evolves.</p>
                    </div>
                    <div class="reason">
                        <h3>24/7 Redivable Support</h3>
                        <p>We understand the importance of uninterrupted communication for your business. That's why our dedicated support team is available round the clock to assist you with any technical issues or inquiries.</p>
                    </div>
                </div>
                <div class="line">
                    <div class="reason">
                        <h3>Advanced Features</h3>
                        <p>Unlock a range of advanced features such as call forwarding, voicemail-to-email, auto-attendant, and more with HivoCall's VoIP services. Empower your team with tools that enhance productivity and collaboration.</p>
                    </div >
                    <div class="reason">
                        <h3>Seamless Integration</h3>
                        <p>Integrate HivoCall seamlessly with your existing CRM, ERP, or other business systems for a streamdivned communication experience. Maximize efficiency and productivity across your organization.</p>
                    </div>
                    <div class="reason">
                        <h3>Trusted by Businesses Worldwide</h3>
                        <p>Join the ranks of satisfied businesses worldwide who trust HivoCall for their VoIP communication needs. Our redivable services and customer-centric approach set us apart from the competition.</p>
                    </div>
                    
                </div>
                <section>
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="fake-template-id" data-businessunit-id="fake-businessunit-id" data-style-height="130px" data-style-width="100%" data-theme="light">
                    </div>
                    <script type="text/javascript" src="https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
                    <div style="text-align: center;">
                        <a href="https://www.trustpilot.com/review/hivocall.com">
                            <img src="{{ asset('img/SVG/hevo.png') }}" alt="" style="max-width: 100%; height: auto;">
                        </a>
                    </div>
                </section>
               
            </div>
            <div class="readyToExperience">
                <p>Ready to experience the benefits of HivoCall's VoIP solutions? <a href="/about">About us</a> today to get started!</p>
            </div>
        </section>
    </div>
@endsection
