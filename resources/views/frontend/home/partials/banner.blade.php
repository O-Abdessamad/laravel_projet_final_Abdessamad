<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="banner_slider owl-carousel">

                    @for ($i = 1; $i <= 3; $i++)
                    <div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Wood & Cloth
                                            Sofa</h1>
                                        <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                            suspendisse ultrices gravida. Risus commodo viverra</p>
                                        <a href="{{route('sengleproduit.index',$shuffledProducts[$i - 1]->id)}} " class="btn_2">buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img src="{{ asset('storage/imgs/product/' . $shuffledProducts[$i - 1]->image) }}">

                            </div>
                        </div>
                    </div>
                        
                    @endfor

                </div>
                <div class="slider-counter"></div>
            </div>
        </div>
    </div>
</section>