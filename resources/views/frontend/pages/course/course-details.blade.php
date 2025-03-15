@extends('frontend.layouts.master')

@section('contents')

    @include('frontend.includes.header')
    <div class="pageheader-section style-2">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center flex-row-reverse">
                <div class="col-lg-7 col-12">
                    <div class="pageheader-thumb">
                        <img src="{{ asset($courseDetails->details_img) }}" alt="rajibraj91" class="w-100">
{{--                        <a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" class="video-button" data-rel="lightcase"><i class="icofont-ui-play"></i></a>--}}
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="pageheader-content">
                        <div class="course-category">
                            <a href="#" class="course-cate">{{ $courseDetails->category->title ?? '' }}</a>
{{--                            <a href="#" class="course-offer">30% Off</a>--}}
                        </div>
                        <h2 class="phs-title">{{ $courseDetails->title ?? '' }}</h2>
                        <p class="phs-desc">{{ $courseDetails->short_desc ?? '' }}</p>
{{--                        <div class="phs-thumb">--}}
{{--                            <img src="assets/images/pageheader/03.jpg" alt="rajibraj91">--}}
{{--                            <span>Rajib Raj</span>--}}
{{--                            <div class="course-reiew">--}}
{{--                                <span class="ratting">--}}
{{--                                    <i class="icofont-ui-rating"></i>--}}
{{--                                    <i class="icofont-ui-rating"></i>--}}
{{--                                    <i class="icofont-ui-rating"></i>--}}
{{--                                    <i class="icofont-ui-rating"></i>--}}
{{--                                    <i class="icofont-ui-rating"></i>--}}
{{--                                </span>--}}
{{--                                <span class="ratting-count">--}}
{{--                                    03 reviews--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="course-single-section padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="main-part">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-content">
                                    <h3>Course Overview</h3>
                                    {!! $courseDetails->long_desc ?? '' !!}

                                </div>
                            </div>
                        </div>

                        <div class="course-video">
                            <div class="course-video-title">
                                <h4>Course Content</h4>
                            </div>
                            <div class="course-video-content">
                                <div class="accordion" id="accordionExample">
                                    @forelse($lessons as $key=> $lesson)
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="accordion{{ $key }}">
                                            <button class="d-flex flex-wrap justify-content-between" data-bs-toggle="collapse" data-bs-target="#videolist{{$key}}" aria-expanded="false" aria-controls="videolist1">
                                                <span>{{ $lesson->title ?? '' }}</span>
                                                <span>{{ count($lesson->lessonVideos) }} Videos</span>
                                            </button>
                                        </div>
                                        @forelse($lesson->lessonVideos as $key2=>$video)
                                        <div id="videolist{{$key}}" class="accordion-collapse collapse" aria-labelledby="accordion{{ $key }}"
                                             data-bs-parent="#accordionExample">
                                            <ul class="lab-ul video-item-list">
                                                <li class=" d-flex flex-wrap justify-content-between">
                                                    <div class="video-item-title">{{$key+1}}. {{$video->title}}, {{$video->duration ?? ''}}</div>
{{--                                                    <div class="video-item-icon"><a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" data-rel="lightcase"><i class="icofont-play-alt-2"></i></a></div>--}}
                                                </li>
                                            </ul>
                                        </div>
                                        @empty
                                        @endforelse
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>

                        <div class="authors">
                            @if($courseDetails->teacher->profile_image)
                            <div class="author-thumb">
                                <img src="{{ asset($courseDetails->teacher->profile_image) }}" alt="rajibraj91">
                            </div>
                            @endif
                            <div class="author-content">
                                <h5>{{ $courseDetails->teacher->name ?? '' }}</h5>
                                <span>{{ $courseDetails->teacher->title ?? ''  }}</span>
{{--                                <p>I'm an Afro-Latina digital artist originally from Long Island, NY. I love to paint design and photo manpulate in Adobe Photoshop while helping others learn too. Follow me on Instagram or tweet me</p>--}}
                                <ul class="lab-ul social-icons">
                                    <li>
                                        <a href="{{ $courseDetails->teacher->fb_link ?? '#' }}" class="facebook"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $courseDetails->teacher->twitter_link ?? '#' }}" class="twitter"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $courseDetails->teacher->fb_link ?? '#' }}" class="linkedin"><i class="icofont-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $courseDetails->teacher->insta_link ?? '#' }}" class="instagram"><i class="icofont-instagram"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>

{{--                        <div id="comments" class="comments">--}}
{{--                            <h4 class="title-border">02 Comment</h4>--}}
{{--                            <ul class="comment-list">--}}
{{--                                <li class="comment menu-item-has-children">--}}
{{--                                    <div class="com-thumb">--}}
{{--                                        <img alt="rajibraj91" src="assets/images/author/02.jpg">--}}
{{--                                    </div>--}}
{{--                                    <div class="com-content">--}}
{{--                                        <div class="com-title">--}}
{{--                                            <div class="com-title-meta">--}}
{{--                                                <h6>Linsa Faith</h6>--}}
{{--                                                <span> October 5, 2018 at 12:41 pm </span>--}}
{{--                                            </div>--}}
{{--                                            <span class="ratting">--}}
{{--                                                <i class="icofont-ui-rating"></i>--}}
{{--                                                <i class="icofont-ui-rating"></i>--}}
{{--                                                <i class="icofont-ui-rating"></i>--}}
{{--                                                <i class="icofont-ui-rating"></i>--}}
{{--                                                <i class="icofont-ui-rating"></i>--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                        <p>The inner sanctuary, I throw myself down among the tall grass bye the trckli stream and, as I lie close to the earth</p>--}}
{{--                                    </div>--}}
{{--                                    <ul class="comment-list">--}}
{{--                                        <li class="comment">--}}
{{--                                            <div class="com-thumb">--}}
{{--                                                <img alt="rajibraj91" src="assets/images/author/03.jpg">--}}
{{--                                            </div>--}}
{{--                                            <div class="com-content">--}}
{{--                                                <div class="com-title">--}}
{{--                                                    <div class="com-title-meta">--}}
{{--                                                        <h6>James Jusse</h6>--}}
{{--                                                        <span> October 5, 2018 at 12:41 pm </span>--}}
{{--                                                    </div>--}}
{{--                                                    <span class="ratting">--}}
{{--                                                        <i class="icofont-ui-rating"></i>--}}
{{--                                                        <i class="icofont-ui-rating"></i>--}}
{{--                                                        <i class="icofont-ui-rating"></i>--}}
{{--                                                        <i class="icofont-ui-rating"></i>--}}
{{--                                                        <i class="icofont-ui-rating"></i>--}}
{{--                                                    </span>--}}
{{--                                                </div>--}}
{{--                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings spring which I enjoy with my whole heart</p>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <div id="respond" class="comment-respond mb-lg-0">--}}
{{--                            <h4 class="title-border">Leave a Comment</h4>--}}
{{--                            <div class="add-comment">--}}
{{--                                <form action="#" method="post" id="commentform" class="comment-form">--}}
{{--                                    <input type="text" placeholder="review title">--}}
{{--                                    <input type="text" placeholder="reviewer name">--}}
{{--                                    <input type="email" placeholder="reviewer email">--}}
{{--                                    <textarea rows="5" placeholder="review summary"></textarea>--}}
{{--                                    <button type="submit" class="lab-btn"><span>Submit Review</span></button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-part">
                        <div class="course-side-detail">
                            <div class="csd-title">
                                <div class="csdt-left">
                                    <h4 class="mb-0"><sup>{{$basicInfo->currency_symbol}}</sup>{{ $courseDetails->sale_price }}</h4>
                                </div>
                                <div class="csdt-right">
                                    <p class="mb-0"><i class="icofont-clock-time"></i>Limited time offer</p>
                                </div>
                            </div>
                            <div class="csd-content">
                                <div class="csdc-lists">
                                    <ul class="lab-ul">

                                        <li>
                                            <div class="csdc-left"><i class="icofont-book-alt"></i>Course Duration</div>
                                            <div class="csdc-right">{{ $courseDetails->duration ?? '' }}</div>
                                        </li>

                                        <li>
                                            <div class="csdc-left"><i class="icofont-video-alt"></i>Lessons</div>
                                            <div class="csdc-right">{{ count($courseDetails->lessons) }}</div>
                                        </li>

                                        <li>
                                            <div class="csdc-left"><i class="icofont-certificate"></i>Certificate</div>
                                            <div class="csdc-right">{{ $courseDetails->is_certificate ? 'Yes' : 'No' }}</div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="sidebar-payment">
                                    <div class="sp-title">
                                        <h6>Secure Payment:</h6>
                                    </div>
                                    <div class="sp-thumb">
                                        <img src="{{asset('frontend') }}/assets/images/pyment/01.jpg" alt="CodexCoder">
                                    </div>
                                </div>
{{--                                <div class="sidebar-social">--}}
{{--                                    <div class="ss-title">--}}
{{--                                        <h6>Share This Course:</h6>--}}
{{--                                    </div>--}}
{{--                                    <div class="ss-content">--}}
{{--                                        <ul class="lab-ul">--}}
{{--                                            <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>--}}
{{--                                            <li><a href="#" class="vimeo"><i class="icofont-vimeo"></i></a></li>--}}
{{--                                            <li><a href="#" class="rss"><i class="icofont-rss"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="course-enroll">
                                    <a href="#" class="lab-btn"><span>Enrolled Now</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="course-side-cetagory">
                            <div class="csc-title">
                                <h5 class="mb-0">Related Categories</h5>
                            </div>
                            <div class="csc-content">
                                <div class="csdc-lists">
                                    <ul class="lab-ul">
                                        @forelse($popularClasses as $category )
                                        <li>
                                            <div class="csdc-left"><a href="#">{{ $category->title }}</a></div>
                                            <div class="csdc-right">{{ count($category->courses) }}</div>
                                        </li>
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

    @include('frontend.includes.footer')

@endsection
