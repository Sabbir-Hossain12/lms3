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
    </style>
@endpush

@section('contents')

    @include('frontend.includes.header')

    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Scholarships</h2>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Scholarships</li>
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
                <div>#</div>
            </div>
        </div>
    </div>
    
    @include('frontend.includes.blog')
    
    <div class="contact-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Scholarship Form</span>
                <h4 class="title">In case of any difficulties with the online scholarship application, download the application form. </h4>
            </div>
            
            <div class="section-wrapper d-flex justify-content-center">
                <div>
                    <a href="#" class="signup btn btn-lg btn-danger" download>
                        <span class="text-light">Download Scholarship Form</span> 
                    </a>
                </div>
            </div>
        </div>
    </div>
        

    <div class="contact-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Scholarship Form</span>
                <h2 class="title">Fill The Form Below So We Can Get To Know You And Your Needs Better.</h2>
            </div>
            <div class="section-wrapper">
                <form class="contact-form" action="{{ route('apply-scholarship') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" placeholder="Your First Name" id="first_name" value="{{ old('first_name') }}" name="first_name" required="">
                        @error('first_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" placeholder="Your Last Name" id="last_name" value="{{ old('last_name') }}" name="last_name" required="">
                        @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="date_of_birth" class="form-label">Date Of Birth</label>
                        <input type="date" id="date_of_birth" value="{{ old('date_of_birth') }}" name="date_of_birth" required="">
                        @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="address_1" class="form-label">Address</label>
                        <textarea  id="address_1"  name="address_1" required=""></textarea>
                        
                        @error('address')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="city" class="form-label">City</label>
                        <input type="text" id="city" value="{{ old('city') }}" name="city" required="">
                        @error('city')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="state" class="form-label">State/Province/Region</label>
                        <input type="text" id="state" value="{{ old('state') }}" name="state" required="">
                        @error('state')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="zip" class="form-label">Zip/Postal Code</label>
                        <input type="text" id="zip" value="{{ old('zip') }}" name="zip" required="">
                        @error('postal_code')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" id="country" value="{{ old('country') }}" name="country" required="">
                        @error('country')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" placeholder="Your Email" id="email" name="email" value="{{ old('email') }}" required="">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" placeholder="Phone" id="phone" name="phone" value="{{ old('phone') }}" required="">
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="d-flex flex-column">
                        <p>Which month and year do you plan to enter? * <span class="required">*</span></p>
                        
                        <div class="form-group2">
                            <input type="radio" id="january" value="january" name="month_enter">
                            <label for="january">January</label>
                        </div>

                        <div class="form-group2">
                            <input type="radio" value="august" id="august" name="month_enter">
                            <label for="august">August</label>
                        </div>
                    </div>
                    @error('highest_education')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
                    



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
