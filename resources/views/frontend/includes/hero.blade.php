<!-- banner section start here -->
<style>
    @media (min-width: 576px) {
        .banner-section .section-wrapper .banner-content .desc {
            font-size: 17px !important;
            line-height: 1.5;
        }
    }
    
    .banner-section {
        background-image: url("{{asset($heroBanner->video_thumbnail_img)}}") !important;
        background-size: cover;
        /*padding-top: 170px;*/
        position: relative !important;
    }
    
    
    .guidance
    {
        color: rgb(255, 255, 255) !important;
        border-radius: 0px 2px 2px 0px;
        background: #f16126;
    } 
    .apply
    {
        color: rgb(255, 255, 255) !important;
        border-radius: 0px 2px 2px 0px;
        background: #f16126;
        
    } 
    .programs
    {
        color: rgb(255, 255, 255) !important;
        border-radius: 0px 2px 2px 0px;
        background: #f16126;
        
      
    }
    
    
    
    @media (min-width: 1200px) {
         .guidance, .apply, .programs {
            padding: 15px;
        }
    }
    @media (min-width: 768px) {  
        .guidance, .apply, .programs {
            padding: 10px;
            display: inline-block;
        }
        
       
    }

    @media (min-width: 1000px) {
        
        #heroButton
        {
            display: block !important;
            position: absolute;
            left: 85%;
            bottom:120px;
        }
    }

    .category-item .category-inner {
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px !important;
    }

</style>

<section class="banner-section style-1">
    <div class="container">
        <div class="section-wrapper">
            <div class="row align-items-center">
                <div class="col-xxl-5 col-xl-6 col-lg-10">
                    <div class="banner-content">
                        <h6 class="subtitle text-uppercase fw-medium">{{ $heroBanner->short_title ?? '' }}</h6>
                        <h2 class="title"><span class="d-lg-block">{{ $heroBanner->main_title ?? '' }}</h2>
                        <p class="desc">{{ $heroBanner->sub_title ?? '' }}</p>
                        <form action="{{ route('course.search') }}" method="post">
                            @csrf
                            <div class="banner-icon">
                                <i class="icofont-search"></i>
                            </div>

                            <input type="text" name="keyword" placeholder="Keywords of your course">

                            <button type="submit">Search Course</button>
                        </form>

                        <div class="banner-catagory d-flex flex-wrap">
                            <p>Most Popular : </p>
                            <ul class="lab-ul d-flex flex-wrap">
                                @forelse($courseClasses->take(3) as $category)
                                <li>
                                    <a href="{{ route('course-by-class', $category->slug) }}">
                                        {{ $category->title ?? '' }}
                                    </a>
                                </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-6">
{{--                    <div class="banner-thumb">--}}
{{--                        <img src="{{asset('frontend')}}/assets/images/banner/01.png" alt="img">--}}
{{--                    </div>--}}
                    <div id="heroButton" class="d-none">
                        <a href="{{ route('contact-us') }}" class="guidance mb-3"><i class="fa-solid fa-arrow-alt-circle-right"></i> <span>Guidance</span> </a>
                        <a href="{{ route('how-to-apply') }}" class="apply mb-3"><i class="fa-solid fa-arrow-alt-circle-right"></i> <span>Apply Today</span></a>
                        <a href="{{ route('course-list') }}" class="programs mb-3"><i class="fa-solid fa-arrow-alt-circle-right"></i> <span>Programs</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="all-shapes"></div>--}}
{{--    <div class="cbs-content-list d-none">--}}
{{--        <ul class="lab-ul">--}}
{{--            <li class="ccl-shape shape-1"><a href="#">16M Students Happy</a></li>--}}
{{--            <li class="ccl-shape shape-2"><a href="#">130K+ Total Courses</a></li>--}}
{{--            <li class="ccl-shape shape-3"><a href="#">89% Successful Students</a></li>--}}
{{--            <li class="ccl-shape shape-4"><a href="#">23M+ Learners</a></li>--}}
{{--            <li class="ccl-shape shape-5"><a href="#">36+ Languages</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
</section>
<!-- banner section ending here -->
