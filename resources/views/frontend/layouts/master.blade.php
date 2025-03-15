<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="{{$basicInfo->meta_desc ?? ''}}">
    <meta name="keywords" content="{{$basicInfo->meta_keyword ?? ''}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Open Graph (Facebook, LinkedIn) -->
    <meta property="og:title" content="{{$basicInfo->meta_title ?? 'schoolmathematics'}}">
    <meta property="og:description" content="{{$basicInfo->meta_desc ?? ''}}">

    @if($basicInfo->meta_image)
        <meta property="og:image" content="{{asset($basicInfo->meta_image)}}">
    @endif

    <meta property="og:url" content="https://schoolmathematics.com.bd/">
    <meta property="og:type" content="website">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{$basicInfo->meta_title ?? 'schoolmathematics'}}">
    <meta name="twitter:description" content="{{$basicInfo->meta_desc ?? ''}}">
    @if($basicInfo->meta_image)
        <meta name="twitter:image" content="{{asset($basicInfo->meta_image)}}">
    @endif

    <link rel="shortcut icon" href="{{asset('frontend')}}/assets/images/x-icon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/icofont.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/lightcase.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css">
</head>
<body>

<!-- preloader start here -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- preloader ending here -->


<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
<!-- scrollToTop ending here -->

@yield('contents')


<script src="{{asset('frontend')}}/assets/js/jquery.js"></script>
<script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/swiper.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/progress.js"></script>
<script src="{{asset('frontend')}}/assets/js/lightcase.js"></script>
<script src="{{asset('frontend')}}/assets/js/counter-up.js"></script>
<script src="{{asset('frontend')}}/assets/js/isotope.pkgd.js"></script>
<script src="{{asset('frontend')}}/assets/js/functions.js"></script>

</body>
</html>
