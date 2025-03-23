@extends('frontend.layouts.master')

@push('css')
    <style>
        .form-group2 {
            display: flex;
            align-items: center;
            gap: 10px; /* Space between checkbox and label */
            margin-bottom: 8px; /* Space between each option */
        }

        .form-group2 input[type="radio"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .form-group2 label {
            font-size: 16px;
            cursor: pointer;
        }
        h1, h2, h3, h4, h5, h6 {
            color: #101115;
            font-weight: 500!important;
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
                        <h2>How To Apply</h2>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Apply</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--   How to Apply Text --}}
    <div class="contact-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Apply Now</span>
                <h2 class="title">Fill The Form Below So We Can Get To Know You And Your Needs Better.</h2>
            </div>
            <div class="section-wrapper">
                {!!  $applyContent->long_desc ?? '' !!}
            </div>
        </div>
    </div>

    <div class="contact-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Admission Form</span>
                <h4 class="title">In case of any difficulties with the online Admission Application, download the application form. </h4>
            </div>

            <div class="section-wrapper d-flex justify-content-center">
                <div>
                    <a href="{{ asset($applyContent->form_file) }}" class="signup btn btn-lg btn-danger" download>
                        <span class="text-light">Download Admission Form</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Admission Form</span>
                <h2 class="title">Fill The Form Below So We Can Get To Know You And Your Needs Better.</h2>
            </div>
            <div class="section-wrapper">
                <form class="contact-form" action="{{ route('apply-now') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="Your First Name" id="first_name" value="{{ old('first_name') }}" name="first_name" required="">
                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Your Last Name" id="last_name" value="{{ old('last_name') }}" name="last_name" required="">
                        @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Your Email" id="email" name="email" value="{{ old('email') }}" required="">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Phone" id="phone" name="phone" value="{{ old('phone') }}" required="">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>




                    <div class="d-flex flex-column">
                        <p>What is your highest level of education? <span class="required">*</span></p>
                        <div class="form-group2">
                            <input type="radio" id="highschool" value="highschool" name="highest_education">
                            <label for="highschool">High school diploma or GED</label>
                        </div>

                        <div class="form-group2">
                            <input type="radio" id="somecollege" value="somecollege" name="highest_education">
                            <label for="somecollege">Some college, but no degree earned</label>
                        </div>

                        <div class="form-group2">
                            <input type="radio" id="bachelor" value="bachelor" name="highest_education">
                            <label for="bachelor">Bachelor's degree</label>
                        </div>

                        <div class="form-group2">
                            <input type="radio" id="master" value="master" name="highest_education">
                            <label for="master">Master's degree</label>
                        </div>

                        <div class="form-group2">
                            <input type="radio" id="doctorate" value="doctorate" name="highest_education">
                            <label for="doctorate">Doctorate</label>
                        </div>

                        <div class="form-group2">
                            <input type="radio" value="other" id="other" name="highest_education">
                            <label for="other">Other</label>
                        </div>
                    </div>
                    @error('highest_education')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                    <div class="form-group w-100 mt-1">
                        <p>Explain in few sentences why have you chosen to pursue the non-conventional
                            professional educational program. Also Explain your role on the natural integrative and functional medicine
                            till today if any*</p>
                        <textarea name="why_chose" rows="4" id="message" placeholder="Your Overview"
                                  required=""></textarea>
                        @error('why_chose')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group w-100 mt-1">
                        <p>Upload Your Previous Transcript/Certificate (Format:jpg, jpeg, pdf, doc)</p>
                      <input type="file" name="documents">
                    </div>

                    <div class="form-group w-100 mt-1">
                        <p>In which program of study are you interested? *</p>
                        <textarea name="why_interested" rows="4" id="message" placeholder="Your Overview"
                                  required=""></textarea>

                        @error('why_interested')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="form-group w-100 text-center">
                        <button class="lab-btn"><span>Submit</span></button>
                    </div>
                </form>
                <p class="form-message"></p>
            </div>
        </div>
    </div>




    @include('frontend.includes.footer')

@endsection
