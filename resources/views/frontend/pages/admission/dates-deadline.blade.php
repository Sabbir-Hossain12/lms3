@extends('frontend.layouts.master')

@push('css')
    <style>
        .form-group2 {
            display: flex;
            align-items: center;
            gap: 10px; /* Space between checkbox and label */
            margin-bottom: 8px; /* Space between each option */
        }

        .form-group2 input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .form-group2 label {
            font-size: 16px;
            cursor: pointer;
        }
        
        #bottom-date
        {
            margin-bottom: 100px;
        }
        .category-item .category-inner .category-content span {
            font-weight: 400 !important;
        }
        b, strong {
            font-weight: 500 !important;
        }
    </style>
@endpush

@section('contents')

    @include('frontend.includes.header')

    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Dates and Deadline</h2>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dates and Deadline</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--   How to Apply Text --}}
    <div class="contact-section padding-tb bg-light">
        <div class="container">
{{--         <div class="row justify-content-center">--}}
{{--             <div class="col-lg-4 d-flex flex-column align-items-center">--}}
{{--                 <h3 >ACADEMIC TERM</h3>--}}
{{--                 <p class="mt-2">Fall 2023</p>--}}
{{--                 <p>Spring 2024</p>--}}
{{--             </div>--}}

{{--             <div class="col-lg-4 d-flex flex-column align-items-center">--}}
{{--                 <h3>DESIRED START DATE</h3>--}}
{{--                 <p class="mt-2">Fall 2023</p>--}}
{{--                 <p>Spring 2024</p>--}}
{{--             </div>--}}

{{--             <div class="col-lg-4 d-flex flex-column align-items-center">--}}
{{--                 <h3>LAST DATE OF APPLICATION</h3>--}}
{{--                 <p class="mt-2">Fall 2023</p>--}}
{{--                 <p>Spring 2024</p>--}}
{{--             </div>--}}
{{--             --}}
{{--         </div>--}}
            <div class="row justify-content-center row-cols-xl-6 row-cols-md-3 row-cols-sm-2 row-cols-1">
                <div class="col-md-4 ">
                    <div class="category-item text-center">
                        <div class="category-inner">
                            <div class="category-content">
                                <a href="#"><h6>Academic Term</h6></a>
                                <span>{{ $dateDeadline->academic_term ?? '' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-item text-center">
                        <div class="category-inner">
                            
                            <div class="category-content">
                                <a href="#"><h6>Desired Start Date</h6></a>
                                <span>{{ $dateDeadline->desired_start_date ?? '' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-item text-center">
                        <div class="category-inner">
                            <div class="category-content">
                                <a href="#"><h6>Application Last Date</h6></a>
                                <span>{{ $dateDeadline->application_last_date ?? '' }}</span>
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
               
                <h4 class="title">{{ $dateDeadline->title ?? '' }}</h4>
            </div>

            <div class="section-wrapper">
                {!! $dateDeadline->description ?? '' !!}
            </div>
        </div>
    </div>

    <div class="contact-section padding-tb bg-danger" id="bottom-date">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 d-flex flex-column align-items-center">
                    <a class="date-anchor text-light" href="{{ route('how-to-apply') }}"><h2 class="text-light">Apply Online</h2></a>
                </div>
                
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    <a href="{{ route('scholarship') }}" class="date-anchor text-light"><h2 class="text-light">Apply For Scholarships</h2></a>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.includes.footer')

@endsection
