@extends('layouts.frontend')
@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Shop Single</h2>
                            <p>Home <span>-</span> Shop Single</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <!--================End Home Banner Area =================-->

    <!--================Single Product Area =================-->
    <div class="product_image_area section_padding">
        <div class="container">
            <div class="row s_product_inner justify-content-between">
                <div class="col-lg-7 col-xl-7">
                    <div class="product_slider_img">
                        <div id="vertical">
                            <div data-thumb="img/product/single-product/product_1.png">
                                <img src={{ asset('storage/imgs/product/'. $produit->image) }} class="w-100" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="s_product_text">
                        <h5>previous <span>|</span> next</h5>
                        <h3>{{ $produit->titre }}</h3>
                        <h2>${{ $produit->prix }}</h2>
                        <ul class="list">
                            <li>
                                <a class="active" href="#">
                                    <span>Category</span> : {{ $produit->categorie }}</a>
                            </li>
                            <li>
                                <a href="#"> <span>Availibility</span> : In Stock</a>
                            </li>
                        </ul>
                        <p>
                            First replenish living. Creepeth image image. Creeping can't, won't called.
                            Two fruitful let days signs sea together all land fly subdue
                        </p>
                        <div class="card_area d-flex justify-content-between align-items-center">
                            <div class="product_count">
                                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                                <input class="input-number" type="text" value="1" min="0" max="10">
                                <span class="number-increment"> <i class="ti-plus"></i></span>
                            </div>
                            <a href="#" class="btn_3">add to cart</a>
                            <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!-- product_list part start-->
    <section class="product_list best_seller">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        
                        @foreach ($allproduits as $allproduit )

                        @if ($allproduit->stock<5)
                        <div class="single_product_item">
                            <img src="{{ asset('storage/imgs/product/' . $allproduit->image) }}">
                            <div class="single_product_text">
                                <h4> {{$allproduit->titre}} </h4>
                                <h3>$ {{$allproduit->prix}} </h3>
                                <h3>Stock: {{$allproduit->stock}} </h3>
                            </div>
                        </div>
                            
                        @endif
                            
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->
@endsection