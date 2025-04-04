@extends('frontend.layouts.master')


@push('css')
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css'>
    <style>
        /*body{margin-top:20px;}*/
        .section_padding_130 {
            padding-top: 140px;
            padding-bottom: 130px;
        }
        .faq_area {
            position: relative;
            z-index: 1;
            background-color: #f5f5ff;
        }

        .faq-accordian {
            position: relative;
            z-index: 1;
        }
        .faq-accordian .card {
            position: relative;
            z-index: 1;
            margin-bottom: 1.5rem;
        }
        .faq-accordian .card:last-child {
            margin-bottom: 0;
        }
        .faq-accordian .card .card-header {
            background-color: #ffffff;
            padding: 0;
            border-bottom-color: #ebebeb;
        }
        .faq-accordian .card .card-header h6 {
            cursor: pointer;
            padding: 1.75rem 2rem;
            color: #3f43fd;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-grid-row-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
        .faq-accordian .card .card-header h6 span {
            font-size: 1.5rem;
        }
        
        .faq-accordian .card .card-header h6.collapsed {
            color: #070a57;
        }
        
        .faq-accordian .card .card-header h6.collapsed span {
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }
        
        .faq-accordian .card .card-body {
            padding: 1.75rem 2rem;
        }
        
        .faq-accordian .card .card-body p:last-child {
            margin-bottom: 0;
        }

        @media only screen and (max-width: 575px) {
            .support-button p {
                font-size: 14px;
            }
        }

        .support-button i {
            color: #3f43fd;
            font-size: 1.25rem;
        }
        @media only screen and (max-width: 575px) {
            .support-button i {
                font-size: 1rem;
            }
        }

        .support-button a {
            text-transform: capitalize;
            color: #2ecc71;
        }
        @media only screen and (max-width: 575px) {
            .support-button a {
                font-size: 13px;
            }
        } 
        
        @media only screen and (min-width: 800px) {
            .section_padding_130 {
                padding-top: 180px;
            }
        }
    </style>
@endpush

@section('contents')

    @include('frontend.includes.header')


    <div class="faq_area section_padding_130" id="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-lg-6">
                    <!-- Section Heading-->
                    <div class="section_heading text-center wow fadeInUp mb-4" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <h3><span>Frequently </span> Asked Questions</h3>
{{--                        <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>--}}
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- FAQ Area-->
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="accordion faq-accordian" id="faqAccordion">
                        
                        @forelse($faqs as $key=> $faq) 
                        <div class="card border-0 wow fadeInUp" data-wow-delay="0.{{$key+2}}s" style="visibility: visible; animation-delay: 0.{{$key+2}}s; animation-name: fadeInUp;">
                            <div class="card-header" id="headingOne">
                                <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse{{$faq->id}}" aria-expanded="true" 
                                    aria-controls="collapseOne">{{ $faq->question ?? '' }}<span class="lni-chevron-up"></span></h6>
                            </div>
                            <div class="collapse" id="collapse{{$faq->id}}" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                <div class="card-body">
                                    <p>{{ $faq->answer ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </div>
                    <!-- Support Button-->
                    <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <i class="lni-emoji-sad"></i>
                        <p class="mb-0 px-2">Can't find your answers?</p>
                        <a href="#"> Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.includes.footer')



@push('js')
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js'></script>
@endpush
@endsection