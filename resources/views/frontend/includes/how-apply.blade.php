<style>
    

    #how-apply .card {
        border: none;
        border-radius: 0px;
        /*box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;*/
    }

    #how-apply img {
        border-radius: 10px;
        max-width: 450px !important;
        max-height: 600px !important;
    }

    @media (min-width: 767px) {
        #how-apply .card {
            width: 80%;
        }
    }

    #how-apply svg {
        color: #f16126;
        display: block;
        text-align: center;
        height: 40px;
        width: 40px;
    }
    @media (min-width: 767px) {
        #how-apply {
            margin-top: 80px;
        }
        
    #how-apply h5 {
        font-size: 26px;
    }
        #how-apply h2 {
            color: #21236f;
            font-size: 35px;
        }
        
        #applyHeader
        {
            margin-bottom: 80px;
        }

        #how-apply .col-lg-4:not(:last-child) 
        {
            border-style: solid;
            border-width: 0px 1px 0px 0px;
            border-color: #D4D4D4;
            margin: 0px 0px 0px 0px;
        }
    }
    
    @media (max-width: 767px) {

        #applyHeader
        {
            margin-bottom: 40px;
        }
    }

</style>

<section id="how-apply">
    <div class="container">
        <div class="row" id="applyHeader">
            <div class="col-12">
                <div class="d-flex justify-content-start">
                    <div class="dashboard__section__title">
                        <h2>How To Apply</h2>
                    </div>
                </div>

            </div>
        </div>

        <div class="row g-2 justify-content-center">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="d-flex justify-content-center">
                        <i class="fa-solid {{ $howApply->icon_1 ?? '' }}"></i>
                    </div>
                    {{--                    <img src="https://uih.education/wp-content/uploads/2023/01/Untitled-1.webp"--}}
                    {{--                         alt="" class="card-img-top">--}}
                    <div class="card-body">
                        <a href="{{ route('how-to-apply') }}" class="d-block text-center my-3"><h5 class="card-title text-center">
                                {{ $howApply->title_1 ?? '' }}</h5></a>
                        <p class="card-text text-center">
                            {{ $howApply->description_1 ?? '' }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="d-flex justify-content-center">
                        <i class="fa-solid {{ $howApply->icon_2 ?? '' }}"></i>
                    </div>
                    {{--                    <img src="https://uih.education/wp-content/uploads/2023/01/Untitled-1.webp"--}}
                    {{--                         alt="" class="card-img-top">--}}
                    <div class="card-body">
                        <a href="{{ route('how-to-apply') }}" class="d-block text-center my-3"><h5 class="card-title text-center">
                                {{ $howApply->title_2 ?? '' }}</h5></a>
                        <p class="card-text text-center">
                            {{ $howApply->description_2 ?? '' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="d-flex justify-content-center">
                        <i class="fa-solid {{ $howApply->icon_3 ?? '' }}"></i>
                    </div>
                    {{--                    <img src="https://uih.education/wp-content/uploads/2023/01/Untitled-1.webp"--}}
                    {{--                         alt="" class="card-img-top">--}}
                    <div class="card-body">
                        <a href="{{ route('how-to-apply') }}" class="d-block text-center my-3"><h5 class="card-title text-center">
                                {{ $howApply->title_3 ?? '' }}</h5></a>
                        <p class="card-text text-center">
                            {{ $howApply->description_3 ?? '' }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>