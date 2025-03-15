<!-- student feedbak section start here -->
<div class="student-feedbak-section padding-tb shape-img">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">{{ $testimonialSetting->short_title ?? '' }}</span>
            <h2 class="title">{{ $testimonialSetting->main_title ?? '' }}</h2>
        </div>

        <div class="section-wrapper">
            <div class="row justify-content-center row-cols-lg-2 row-cols-1">
                <div class="col">
                    <div class="sf-left">
                        @if($testimonialSetting->side_img)
                        <div class="sfl-thumb">
                            <img src="{{ asset($testimonialSetting->side_img) }}" alt="student feedback">
                            <a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" class="video-button" data-rel="lightcase"><i class="icofont-ui-play"></i></a>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="col">
                    @forelse($testimonials as $testimonial)
                    <div class="stu-feed-item">
                        <div class="stu-feed-inner">
                            <div class="stu-feed-top">
                                <div class="sft-left">
                                    @if($testimonial->img)
                                    <div class="sftl-thumb">
                                        <img src="{{ asset($testimonial->img) }}" alt="student feedback">
                                    </div>
                                    @endif

                                    <div class="sftl-content">
                                        <a href="#"><h6>{{ $testimonial->name ?? '' }}</h6></a>
                                        <span>{{ $testimonial->title ?? '' }}</span>
                                    </div>
                                </div>
{{--                                <div class="sft-right">--}}
{{--                                        <span class="ratting">--}}
{{--                                            <i class="icofont-ui-rating"></i>--}}
{{--                                            <i class="icofont-ui-rating"></i>--}}
{{--                                            <i class="icofont-ui-rating"></i>--}}
{{--                                            <i class="icofont-ui-rating"></i>--}}
{{--                                            <i class="icofont-ui-rating"></i>--}}
{{--                                        </span>--}}
{{--                                </div>--}}
                            </div>
                            <div class="stu-feed-bottom">
                                <p>{{ $testimonial->desc ?? '' }}</p>
                            </div>
                        </div>
                    </div>

                    @empty
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</div>
<!-- student feedbak section ending here -->
