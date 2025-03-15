<!-- course section start here -->
<div class="course-section padding-tb section-bg">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">Featured Courses</span>
            <h2 class="title">Pick A Course To Get Started</h2>
        </div>
        <div class="section-wrapper">
            <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">
                @forelse($featuredCourses as $course)
                <div class="col">
                    <div class="course-item">
                        <div class="course-inner">
                            @if(isset($course->thumbnail_img))
                            <div class="course-thumb">
                                <img src="{{ asset($course->thumbnail_img) }}" alt="course">
                            </div>
                            @endif

                            <div class="course-content">
                                <div class="course-price">{{$basicInfo->currency_symbol}}{{$course->sale_price }}</div>
                                <div class="course-category">
                                    <div class="course-cate">
                                        <a href="{{ route('course-details', $course->slug) }}">{{ $course->category->title ?? '' }}</a>
                                    </div>
{{--                                    <div class="course-reiew">--}}
{{--                                            <span class="ratting">--}}
{{--                                                <i class="icofont-ui-rating"></i>--}}
{{--                                                <i class="icofont-ui-rating"></i>--}}
{{--                                                <i class="icofont-ui-rating"></i>--}}
{{--                                                <i class="icofont-ui-rating"></i>--}}
{{--                                                <i class="icofont-ui-rating"></i>--}}
{{--                                            </span>--}}
{{--                                        <span class="ratting-count">--}}
{{--                                                03 reviews--}}
{{--                                            </span>--}}
{{--                                    </div>--}}
                                </div>
                                <a href="{{ route('course-details', $course->slug) }}"><h5>{{ $course->title ?? '' }}</h5></a>
                                <div class="course-details">
                                    <div class="couse-count"><i class="icofont-video-alt"></i> {{ count($course->lessons) }} Lesson</div>
                                    <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                </div>

                                <div class="course-footer">
                                    <div class="course-author">
                                        @if($course->teacher->profile_img)
                                        <img src="#" alt="course author">
                                        @endif
                                        <a href="{{ asset($course->teacher->profile_img) }}" class="ca-name">{{ $course->teacher->name ?? '' }}</a>
                                    </div>
                                    <div class="course-btn">
                                        <a href="#" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse

            </div>
        </div>
    </div>
</div>
<!-- course section ending here -->
