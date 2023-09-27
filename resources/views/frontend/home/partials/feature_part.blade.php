<section class="feature_part padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_tittle text-center">
                    <h2>Featured Category</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="{{route('sengleproduit.index',$produits[0]->id)}} " class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>

                    <img height="300px" src="{{ asset('storage/imgs/product/' . $produits[0]->image) }}">

                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="{{route('sengleproduit.index',$produits[1]->id)}} " class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img height="290px" src="{{ asset('storage/imgs/product/' . $produits[1]->image) }}">
                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="{{route('sengleproduit.index',$produits[2]->id)}} " class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img height="290px" src="{{ asset('storage/imgs/product/' . $produits[2]->image) }}">
                </div>
            </div>
            <div class="col-lg-7 col-sm-6 ddddd">
                <div class="single_feature_post_text">
                    <p class="z-3 position-absolute">Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="{{route('sengleproduit.index',$produits[3]->id)}} " class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img height="300px" src="{{ asset('storage/imgs/product/' . $produits[3]->image) }}">
                </div>
            </div>
        </div>
    </div>
</section>