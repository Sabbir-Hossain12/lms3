<!-- header section start here -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="header-top-area">
                <ul class="lab-ul left">
                    <li>
                        <i class="icofont-ui-call"></i> <span>{{ $basicInfo->phone_1 ?? '' }}</span>
                    </li>
                    <li>
                        <i class="icofont-location-pin"></i> {{ $basicInfo->address ?? '' }}
                    </li>
                </ul>
                <ul class="lab-ul social-icons d-flex align-items-center">
                    <li><p>Find us on : </p></li>
                    <li><a href="{{ $basicInfo->fb_link ?? '#' }}" class="fb"><i class="icofont-facebook-messenger"></i></a></li>
                    <li><a href="{{ $basicInfo->twitter_link ?? '#' }}" class="twitter"><i class="icofont-twitter"></i></a></li>
                    <li><a href="{{ $basicInfo->vimeo_link ?? '#' }}" class="vimeo"><i class="icofont-vimeo"></i></a></li>
                    <li><a href="{{ $basicInfo->skype_link ?? '#' }}" class="skype"><i class="icofont-skype"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset($basicInfo->light_logo) }}" alt="logo" style="height: 60px !important;"></a>
                </div>
                <div class="menu-area">
                    <div class="menu">
                        <ul class="lab-ul">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>

                            <li>
                                <a href="{{ route('class-list') }}">Categories</a>
                            </li>

                            <li>
                                <a href="{{ route('course-list') }}">Courses</a>
                            </li>

                            <li>
                                <a href="{{ route('blog-list') }}">Blog</a>

                            </li>

                            <li><a href="{{ route('contact-us') }}">Contact</a></li>
                        </ul>
                    </div>

                    <a href="{{ route('user.login-page') }}" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                    <a href=" {{ route('user.register-page') }} " class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a>

                    <!-- toggle icons -->
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="ellepsis-bar d-lg-none">
                        <i class="icofont-info-square"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header section ending here -->
