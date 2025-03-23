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

                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">About</a>
                                
                                <ul class="lab-ul">
                                    @forelse(\App\Models\Page::where('status', 1)->get() as $page)
                                        <li>
                                            <a href="{{ route('page', $page->slug) }}">{{ $page->title }}</a>
                                        </li>
                                    @empty
                                    @endforelse
                                    
                                    <li>
                                        <a href="{{ route('about-us') }}">About Us</a>
                                    </li>
                                        <li>
                                            <a href="{{ route('faq') }}">FAQ</a>
                                        </li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">Admission</a>
                                <ul class="lab-ul">
                                    <li>
                                        <a href="{{ route('how-to-apply') }}">How to Apply</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('scholarship') }}">Scholarship</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('date-timeline') }}">Dates and Timeline</a>
                                    </li>

{{--                                    <li>--}}
{{--                                        <a href="{{ route('course-list') }}">Scholarship</a>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <a href="{{ route('course-list') }}">Dates and Deadline</a>--}}
{{--                                    </li>--}}
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)">Academics</a>
                                <ul class="lab-ul">
                                    @forelse($classes as $category)
                                        <li>
                                            <a class="text-danger" href="{{ route('course-by-class', $category->slug ) }}">{{ $category->title }}</a>
                                        </li>

                                        @forelse($category->courses as $course)
                                            <li>
                                                <a href="{{ route('course-details', $course->slug)}}">{{ $course->title }}</a>
                                            </li>
                                        @empty
                                        @endforelse

                                    @empty
                                    @endforelse

                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('blog-list') }}">Blogs</a>
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
