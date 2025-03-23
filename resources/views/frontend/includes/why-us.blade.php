
<style>
    #gallery
    {
        margin-top: 80px;
    }
    #gallery .card
    {
        border: none;
        border-radius: 0px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }
    
    #gallery img
    {
        border-radius: 10px;
        max-width:450px !important;
        max-height: 600px !important;
    }
    
    @media (min-width: 767px) {
        #gallery .card
        {
            width: 80%;
        }
    }
   
</style>

<section id="gallery">
    <div class="container">
        <div class="row g-2 justify-content-center">
            @forelse($whyUs as $why) 
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="{{ asset($why->image) }}"
                         alt="" class="card-img-top">
                    <div class="card-body">
                        <a href="#" class="d-block text-center"> <h5 class="card-title text-center">{{ $why->title ?? '' }}</h5></a>
                        <p class="card-text text-center">{{ $why->description ?? '' }}</p>
                  
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</section>