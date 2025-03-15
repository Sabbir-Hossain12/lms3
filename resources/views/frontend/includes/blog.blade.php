<!-- blog section start here -->
<div class="blog-section padding-tb section-bg">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">FORM OUR BLOG POSTS</span>
            <h2 class="title">More Articles From Resource Library</h2>
        </div>
        <div class="section-wrapper">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                @forelse($blogs as $blog)
                <div class="col">
                    <div class="post-item">
                        <div class="post-inner">
                            @if($blog->thumbnail_img)
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
        </div>
    </div>
</div>
<!-- blog section ending here -->
