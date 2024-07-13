@extends('layouts')
@section('content')
    <div class="callCenter__container">
        <section class="hero__items">
            <div class="hero__content" style="text-align: center; padding-top: 5rem; padding-bottom : 5rem">

                <p class="title">Conquer Global Markets With Us</p>
                <p class="content" style="margin: auto">
                    The ultimate solution you have been looking for to expand your reach andstreamline your calling process. Effortlessly tap into new markets,retain customers, and drive revenue.

                </p>
                <div class="hero__btn" style="margin: 25px" > <button style="margin: auto;"><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button></div>
            </div>
        </section>
        
        
        <div class="benefitsGrid" style="margin-top: 20px">
            <div class="left">
                <p style="margin-bottom: 0px; color: #525151; font-size: 20px;">Upgrade Your Communication</p>
                <h4>
                    Game with HivoCall
                </h4>

                <p>
                    HivoCall is a global leader in the VoIP industry with a presence in 100+ countries and a loyal customer base of 5000+. We attribute this success to our team of highly skilled professionals who not only build exceptional products but also provide quality support. Moreover, to ensure our innovative solutions reach businesses worldwide, we regularly participate in international exhibitions and events.


                </p>
            </div>
            <div class="right">

                
                <div class="card_1">
                    <img src="{{ asset('img/Professional/Ace-your-meetings.jpg') }}" alt="">
                    
                </div>
                <div class="card_1">
                    <img src="{{ asset('img/Professional/difference-between-firm-and-company.png') }}" alt="">
                    
                </div>
                <div class="card_1">
                    <img src="{{ asset('img/Professional/register-company-online-1.png') }}" alt="">
                    
                </div>
                <div class="card_1">
                    <img src="{{ asset('img/Professional/Revised-Definition-of-a-Small-Company-2022.jpg') }}" alt="">
                    
                </div>
               

            </div>
        </div>
        <section class="setup-container">
            <div class="setup-wrapper">
                <div class="setup-content">
                    <h5>
                        Set Up Your Call Center Software In Less Than
                        <span>3 Minutes</span>
                    </h5>
                    <p class="desc">
                        From buying a number to making the first call, all it takes is 3 minutes to set up your virtual
                        phone system.
                    </p>
                    <button><a href="/checkout/{{ $firstPlanId }}">Get A Plan</a></button>
                </div>
                <img loading="lazy" src="{{ asset('img/SVG/business-phone-number.png') }}"
                    alt="Mobile" />
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
