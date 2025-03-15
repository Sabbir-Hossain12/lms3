@extends('frontend.layouts.master')

@section('contents')

    @include('frontend.includes.header')

    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Blog Details</h2>
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

    <div class="blog-section blog-single padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="section-wrapper">
                            <div class="row row-cols-1 justify-content-center g-4">
                                <div class="col">
                                    <div class="post-item style-2">
                                        <div class="post-inner">
                                            @if($blog->main_img)
                                            <div class="post-thumb">
                                                <img src="{{ asset($blog->main_img) }}" alt="blog thumb rajibraj91" class="w-100">
                                            </div>
                                            @endif
                                            <div class="post-content">
                                                <h2>{{ $blog->title ?? '' }}</h2>
                                                <div class="meta-post">
                                                    <ul class="lab-ul">
                                                        <li><a href="#"><i class="icofont-calendar"></i>{{ $blog->created_at->format('M d, Y') }}</a></li>
                                                        <li><a href="#"><i class="icofont-ui-user"></i>{{ $blog->author->name ?? '' }}</a></li>
{{--                                                        <li><a href="#"><i class="icofont-speech-comments"></i>09 Comments</a></li>--}}
                                                    </ul>
                                                </div>
                                                {!! $blog->desc ?? '' !!}

                                            </div>
                                        </div>
                                    </div>


                                    <div class="authors">
                                        @if(isset($blog->author->profile_image))
                                        <div class="author-thumb">
                                            <img src="{{  asset($blog->author->profile_image ?? '')}}" alt="rajibraj91">
                                        </div>
                                        @endif
                                        <div class="author-content">
                                            <h5>{{ $blog->author->name ?? '' }}</h5>
                                            <span>{{  $blog->author->title ?? ''}}</span>
{{--                                            <p>I'm an Afro-Latina digital artist originally from Long Island, NY. I love to paint design and photo manpulate in Adobe Photoshop while helping others learn too. Follow me on Instagram or tweet me</p>--}}
                                            <ul class="lab-ul social-icons">
                                                <li>
                                                    <a href="{{ $blog->author->fb_link ?? '#' }}" class="facebook"><i class="icofont-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="{{ $blog->author->twitter_link ?? '#' }}" class="twitter"><i class="icofont-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="{{ $blog->author->fb_link ?? '#' }}" class="linkedin"><i class="icofont-linkedin"></i></a>
                                                </li>
                                                <li>
                                                    <a href="{{ $blog->author->insta_link ?? '#' }}" class="instagram"><i class="icofont-instagram"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-12">
                    <aside>
                        <div class="widget widget-search">
                            <form action="/" class="search-wrapper">
                                <input type="text" name="s" placeholder="Search...">
                                <button type="submit"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>

                        <div class="widget widget-post">
                            <div class="widget-header">
                                <h5 class="title">Recent Post</h5>
                            </div>
                            <ul class="widget-wrapper">

                                @forelse($recentBlogs as $blog)
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="{{ route('blog-details', $blog->slug) }}"><img src="{{ asset($blog->thumbnail_img) }}" alt="rajibraj91"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="{{ route('blog-details', $blog->slug) }}">
                                            <h6>{{ $blog->title }}</h6>
                                        </a>
                                            <p>{{ $blog->created_at->format('M d, Y') }}</p>
                                    </div>
                                </li>
                                @empty
                                @endforelse

                            </ul>
                        </div>



                    </aside>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.includes.footer')


@endsection
