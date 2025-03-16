@extends('Frontend.layouts.master')

@section('contents')
    @include('frontend.includes.header')
    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Categories</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Course Page</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    <!-- course section start here -->
    <div class="course-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="course-showing-part">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="course-showing-part-left">
                            <p>Showing 1-6 of 10 results</p>
                        </div>
{{--                        <div class="course-showing-part-right d-flex flex-wrap align-items-center">--}}
{{--                            <span>Sort by :</span>--}}
{{--                            <div class="select-item">--}}
{{--                                <select>--}}
{{--                                    <option value="">Select Oder</option>--}}
{{--                                    <option value="html">HTML</option>--}}
{{--                                    <option value="css">CSS</option>--}}
{{--                                    <option value="php">PHP</option>--}}
{{--                                    <option value="java">JAVA</option>--}}
{{--                                    <option value="javascript">JAVASCRIPT</option>--}}
{{--                                </select>--}}
{{--                                <div class="select-icon">--}}
{{--                                    <i class="icofont-rounded-down"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="row g-2 justify-content-center row-cols-xl-6 row-cols-md-3 row-cols-sm-2 row-cols-1">                    @forelse($classes as $category)
                        <div class="col">
                            <div class="category-item text-center">
                                <div class="category-inner">
                                    <div class="category-thumb">
                                        @if(isset($category->img))
                                            <img src="{{asset($category->img) }}" alt="category">
                                        @endif
                                    </div>
                                    <div class="category-content">
                                        <a href="{{ route('course-by-class', $category->slug ) }}"><h6>{{ $category->title ?? '' }}</h6></a>
                                        <span>{{ count($category->courses) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
                {{--                <ul class="default-pagination lab-ul">--}}
                {{--                    <li>--}}
                {{--                        <a href="#"><i class="icofont-rounded-left"></i></a>--}}
                {{--                    </li>--}}
                {{--                    <li>--}}
                {{--                        <a href="#">01</a>--}}
                {{--                    </li>--}}
                {{--                    <li>--}}
                {{--                        <a href="#" class="active">02</a>--}}
                {{--                    </li>--}}
                {{--                    <li>--}}
                {{--                        <a href="#">03</a>--}}
                {{--                    </li>--}}
                {{--                    <li>--}}
                {{--                        <a href="#"><i class="icofont-rounded-right"></i></a>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
            </div>
        </div>
    </div>
    <!-- course section ending here -->

    @include('frontend.includes.footer')
@endsection

