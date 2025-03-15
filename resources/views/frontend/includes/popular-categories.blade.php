<!-- category section start here -->
<div class="category-section padding-tb">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">Popular Category</span>
            <h2 class="title">Popular Category For Learn</h2>
        </div>
        <div class="section-wrapper">
            <div class="row g-2 justify-content-center row-cols-xl-6 row-cols-md-3 row-cols-sm-2 row-cols-1">
                @forelse($courseClasses as $category)
                <div class="col">
                    <div class="category-item text-center">
                        <div class="category-inner">
                            <div class="category-thumb">
                                @if($category->img)
                                <img src="{{ $category->img }}" alt="category">
                                @endif
                            </div>
                            <div class="category-content">
                                <a href="#"><h6>{{ $category->title ?? '' }}</h6></a>
                                <span>{{ count($category->courses) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
            <div class="text-center mt-5">
                <a href="{{ route('class-list') }}" class="lab-btn"><span>Browse All Categories</span></a>
            </div>
        </div>
    </div>
</div>
<!-- category section start here -->
