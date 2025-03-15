@extends('Frontend.layouts.master')

@section('contents')

    @include('frontend.includes.header')

    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Our Blog Posts</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">

                    @forelse($blogs as $blog)
                        <div class="col">
                            <div class="post-item">
                                <div class="post-inner">
                                    @if(isset($blog->thumbnail_img))
                                        <div class="post-thumb">
                                            <a href="{{ route('blog-details', $blog->slug) }}"><img src="{{ asset($blog->thumbnail_img) }}" alt="blog thumb"></a>
                                        </div>
                                    @endif
                                    <div class="post-content">
                                        <a href="{{ route('blog-details', $blog->slug) }}"><h4>{{ $blog->title }}</h4></a>
                                        <div class="meta-post">
                                            <ul class="lab-ul">
                                                <li><i class="icofont-ui-user"></i>{{ $blog->author->name ?? '' }}</li>
                                                <li><i class="icofont-calendar"></i>{{ $blog->created_at->format('') }}</li>
                                            </ul>
                                        </div>
                                        <p>{{ $blog->short_desc ?? '' }}</p>
                                    </div>
                                    <div class="post-footer">
                                        <div class="pf-left">
                                            <a href="{{ route('blog-details', $blog->slug) }}" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
                                        </div>
                                        {{--                                <div class="pf-right">--}}
                                        {{--                                    <i class="icofont-comment"></i>--}}
                                        {{--                                    <span class="comment-count">3</span>--}}
                                        {{--                                </div>--}}
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

    @include('frontend.includes.footer')

@endsection
