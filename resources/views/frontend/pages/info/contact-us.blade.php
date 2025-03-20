@extends('frontend.layouts.master')

@section('contents')

    @include('frontend.includes.header')
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Get In Touch With Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="map-address-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Get in touch with us</span>
                <h2 class="title">We're Always Eager To Hear From You!</h2>
            </div>
            <div class="section-wrapper">
                <div class="row flex-row-reverse">
                    <div class="col-xl-4 col-lg-5 col-12">
                        <div class="contact-wrapper">
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{asset('frontend')}}/assets/images/icon/01.png" alt="CodexCoder">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">Office Address</h6>
                                    <p>{{ $basicInfo->address ?? '' }}</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{asset('frontend')}}/assets/images/icon/02.png" alt="CodexCoder">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">Phone number</h6>
                                    <p>{{ $basicInfo->phone_1 ?? '' }}</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{asset('frontend')}}/assets/images/icon/03.png" alt="CodexCoder">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">Send email </h6>
                                    <a href="mailto:info@gmail.com">{{ $basicInfo->mail ?? '' }}</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{asset('frontend')}}/assets/images/icon/04.png" alt="CodexCoder">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">Our website</h6>
                                    <a href="#">{{ $basicInfo->site_name ?? '' }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="map-area">
                            <div class="maps">
                               {!! $basicInfo->map_iframe !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Get in touch with Contact us</span>
                <h2 class="title">Fill The Form Below So We Can Get To Know You And Your Needs Better.</h2>
            </div>
            <div class="section-wrapper">
                <form class="contact-form" action="#" id="contact-form" method="POST">
                    <div class="form-group">
                        <input type="text" placeholder="Your Name" id="name" name="name" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Your Email" id="email" name="email" required="">
                    </div>
                    <div class="form-group w-100">
                        <textarea name="message" rows="8" id="message" placeholder="Your Message" required=""></textarea>
                    </div>
                    <div class="form-group w-100 text-center">
                        <button class="lab-btn"><span>Send our Message</span></button>
                    </div>
                </form>
                <p class="form-message"></p>
            </div>
        </div>
    </div>

    @include('frontend.includes.footer')




@endsection
