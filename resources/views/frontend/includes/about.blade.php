<!-- abouts section start here -->
<style>
    .about-section::before
    {
        border-bottom: 0px !important;
        border-right: 0px !important;
    }
</style>
<div class="about-section">
    <div class="container">
        <div class="row justify-content-center row-cols-xl-2 row-cols-1 align-items-end flex-row-reverse">
            <div class="col">
                <div class="about-right padding-tb">
                    <div class="section-header">
                        <span class="subtitle">About Us</span>
                        <h2 class="title">{{ $about->short_title ?? '' }}</h2>
                        <p>{{ $about->main_title ?? '' }}</p>
                    </div>
                    <div class="section-wrapper">
                        {!! $about->desc !!}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="about-left">
                    @if($about->side_img )
                    <div class="about-thumb">
                        <img src="{{ $about->side_img }}" alt="about">
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about section ending here -->
