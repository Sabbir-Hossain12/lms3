@extends('Frontend.layouts.master')

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


@endsection
