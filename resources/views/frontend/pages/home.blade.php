@extends('Frontend.layouts.master')

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .category-content
        {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            /* width: 200px; */
            height: 50px;
        }
    </style>
    
@endpush

@section('contents')

    @include('frontend.includes.header')

    @include('frontend.includes.hero')

    @include('frontend.includes.popular-categories')

    @include('frontend.includes.featured-courses')

    @include('frontend.includes.about')

    @include('frontend.includes.instructor')

    @include('frontend.includes.feedback')

{{--    @include('Frontend.includes.register')--}}

    @include('frontend.includes.blog')

    @include('frontend.includes.achievement')


    @include('frontend.includes.footer')
    
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endpush


@endsection
