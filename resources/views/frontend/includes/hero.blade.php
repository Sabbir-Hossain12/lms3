<!-- banner section start here -->
<style>
    .banner-section {
        background-image: url("{{asset($heroBanner->video_thumbnail_img)}}") !important;
        background-size: cover;
        /*padding-top: 170px;*/
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
                        <form action="/">
                            <div class="banner-icon">
                                <i class="icofont-search"></i>
                            </div>
                            <input type="text" placeholder="Keywords of your course">
                            <button type="submit">Search Course</button>
                        </form>
                        <div class="banner-catagory d-flex flex-wrap">
                            <p>Most Popular : </p>
{{--                            <ul class="lab-ul d-flex flex-wrap">--}}
{{--                                <li><a href="#">Figma</a></li>--}}
{{--                                <li><a href="#">Adobe XD</a></li>--}}
{{--                                <li><a href="#">illustration</a></li>--}}
{{--                                <li><a href="#">Photoshop</a></li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-6">
                    <div class="banner-thumb">
                        <img src="{{asset('frontend')}}/assets/images/banner/01.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="all-shapes"></div>--}}
    <div class="cbs-content-list d-none">
        <ul class="lab-ul">
            <li class="ccl-shape shape-1"><a href="#">16M Students Happy</a></li>
            <li class="ccl-shape shape-2"><a href="#">130K+ Total Courses</a></li>
            <li class="ccl-shape shape-3"><a href="#">89% Successful Students</a></li>
            <li class="ccl-shape shape-4"><a href="#">23M+ Learners</a></li>
            <li class="ccl-shape shape-5"><a href="#">36+ Languages</a></li>
        </ul>
    </div>
</section>
<!-- banner section ending here -->
