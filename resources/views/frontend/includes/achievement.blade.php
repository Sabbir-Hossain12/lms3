<!-- Achievement section start here -->
<div class="achievement-section padding-tb">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">START TO SUCCESS</span>
            <h2 class="title">Achieve Your Goals</h2>
        </div>
        <div class="section-wrapper">
            <div class="counter-part mb-4">
                <div class="row g-4 row-cols-lg-4 row-cols-sm-2 row-cols-1 justify-content-center">
                    @forelse($achievements as $achievement)
                    <div class="col">
                        <div class="count-item">
                            <div class="count-inner">
                                <div class="count-content">
                                    <h2><span class="count" data-to="{{ $achievement->count }}" data-speed="1500"></span><span>+</span></h2>
                                    <p>{{ $achievement->title }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
            <div class="achieve-part">
                <div class="row g-4 row-cols-1 row-cols-lg-2">
{{--                    <div class="col">--}}
{{--                        <div class="achieve-item">--}}
{{--                            <div class="achieve-inner">--}}
{{--                                <div class="achieve-thumb">--}}
{{--                                    <img src="assets/images/achive/01.png" alt="achieve thumb">--}}
{{--                                </div>--}}
{{--                                <div class="achieve-content">--}}
{{--                                    <h4>Start Teaching Today</h4>--}}
{{--                                    <p>Seamlessly engage technically sound coaborative reintermed goal oriented content rather than ethica</p>--}}
{{--                                    <a href="#" class="lab-btn"><span>Become A Instructor</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col">
                        <div class="achieve-item">
                            <div class="achieve-inner">
{{--                                <div class="achieve-thumb">--}}
{{--                                    <img src="{{asset('frontend')}}/assets/images/achive/02.png" alt="achieve thumb">--}}
{{--                                </div>--}}
                                <div class="achieve-content">
                                    <h4>If You Join Our Course</h4>
                                    <p>Are you ready to take the next step toward your future career?</p>
                                    <a href="{{ route('user.register-page') }}" class="lab-btn"><span>Register For Free</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Achievement section ending here -->
