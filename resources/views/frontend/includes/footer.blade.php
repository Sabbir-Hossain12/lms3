<footer class="style-2 yellow-color-section">
    <div class="footer-top dark-view padding-tb">
        <div class="container">
            <div class="row g-4 row-cols-xl-4 row-cols-sm-2 row-cols-1 justify-content-center">
                <div class="col">
                    <div class="footer-item our-address">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h4>About {{ $basicInfo->site_name ?? '' }}</h4>
                                </div>
                                <div class="content">
                                    <p>{{ $basicInfo->about_text }}</p>
                                    <ul class="lab-ul office-address">
                                        <li><i class="icofont-google-map"></i>{{ $basicInfo->address ?? '' }}</li>
                                        <li><i class="icofont-phone"></i>{{ $basicInfo->phone_1 ?? '' }}</li>
                                        <li><i class="icofont-envelope"></i>{{ $basicInfo->mail ?? '' }}</li>
                                    </ul>
                                    <ul class="lab-ul social-icons">
                                        <li>
                                            <a href="{{ $basicInfo->fb_link ?? '#' }}" class="facebook"><i class="icofont-facebook"></i></a>
                                        </li>

                                        <li>
                                            <a href="{{ $basicInfo->twitter_link ?? '#' }}" class="twitter"><i class="icofont-twitter"></i></a>
                                        </li>

                                        <li>
                                            <a href="{{ $basicInfo->linkedin_link ?? '#' }}" class="linkedin"><i class="icofont-linkedin"></i></a>
                                        </li>

                                        <li>
                                            <a href="{{ $basicInfo->insta_link ?? '#' }}" class="instagram"><i class="icofont-instagram"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h4>Courses</h4>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="{{ route('course-list') }}">All Courses</a></li>
                                        <li><a href="{{ route('class-list') }}">Categories</a></li>
                                        <li><a href="{{ route('blog-list') }}">Blogs</a></li>
                                        <li><a href="{{ route('contact-us') }}">Contacts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Register</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-item twitter-post">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h4>Recent Blogs</h4>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        @forelse($blogs as $blog)
                                        <a>
                                            <a href="{{ route('blog-details', $blog->slug) }}">
                                                <p>{{ $blog->title ?? ''}}</p>
                                            </a>
                                        </a>

                                        @empty
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="section-wrapper">
                <p class="text-center">© 2025- <a href="#">{{ $basicInfo->site_name ?? '' }}</a> Developed by <a href="https://danpite.tech/" target="_blank">Danpite.tech</a> </p>

            </div>
        </div>
    </div>
</footer>
