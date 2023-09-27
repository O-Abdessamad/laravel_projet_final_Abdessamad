<section class="product_list section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>awesome <span>shop</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                
                    <div class="single_product_list_slider">
                        <div class="row align-items-center justify-content-between">

                            @for ($i = 1; $i <= 8; $i++)
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <a href="{{route('sengleproduit.index',$produits[$i - 1]->id)}} ">
                                        <img src="{{ asset('storage/imgs/product/' . $produits[$i - 1]->image) }}">
                                    </a>
                                    <div class="single_product_text">
                                        <h4>{{$produits[$i - 1]->titre}} </h4>
                                        <h3>$ {{$produits[$i - 1]->prix}}</h3>
                                        
                                        <a href="{{route('sengleproduit.index',$produits[$i - 1]->id)}} " class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                                
                            @endfor
                            
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>