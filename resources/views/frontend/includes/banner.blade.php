<style>
    .banner-section2 {
        {{--background-image: url("{{asset($heroBanner->video_thumbnail_img)}}") !important;--}}
        background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
        url("{{asset($banner->image)}}") !important;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-color: #21236f;
        /*opacity: 0.5;*/
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        /*padding-top: 170px;*/
    }

    /*@media (min-width: 576px) {*/
        .banner-section2 {
            padding-top: 215px;
            padding-bottom: 215px;
        }
    /*}*/
    
    .banner-section2 h2
    {
        /*color: rgb(230, 209, 209) !important;*/
        color: #f16126;
        font-size: 55px !important;
    }
    
    .banner-section2 p
    {
        color: whitesmoke;
    }
    

</style>

<section class="banner-section2 style-1">
    <div class="container">
        <div class="section-wrapper">
            <div class="row align-items-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="banner-content d-flex flex-column justify-content-center align-items-center">
{{--                        <h6 class="subtitle text-uppercase fw-medium">{{ $heroBanner->short_title ?? '' }}</h6>--}}
                        <h2 class="title"><span class="d-lg-block text-center"> {{ $banner->title ?? '' }}</span></h2>
                        <p class="desc">{{ $banner->description	 ?? '' }}</p>
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