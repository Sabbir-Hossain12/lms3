@extends('frontend.layouts.master')

@section('contents')
    @include('frontend.includes.header')
    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Search Result for {{$keyword}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>

                                <li class="breadcrumb-item active" aria-current="page">Search</li>
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
                            <p>Showing {{count($courses)}} results</p>
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
                <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">
                    @forelse($courses as $course)
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
                                                <a href="javascript:void(0);">{{ $course->category->title ?? '' }}</a>
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
                                                @if(isset($course->teacher->profile_img))
                                                    <img src="#" alt="course author">
                                                @endif
                                                <a href="{{ asset($course->teacher->profile_img) }}" class="ca-name">{{ $course->teacher->name ?? '' }}</a>
                                            </div>
                                            <div class="course-btn">
                                                <a href="{{ route('course-details', $course->slug) }}" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col">
                            <div class="course-item">
                                <p class="text-center">No Course Found</p>
                            </div>
                        </div>
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

