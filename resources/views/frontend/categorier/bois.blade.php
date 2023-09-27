@extends('layouts.frontend')
@section('content')
    


    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Shop Category</h2>
                            <p>Home <span>-</span> Shop Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Browse Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">

                                    <li>
                                        <a href="/shop"> All </a>
                                    </li>

                                    <li>
                                        <a href="/shop/categorier/plastique"> Chaise en Plastique </a>
                                    </li>
                                    <li>
                                        <a href="/shop/categorier/bois"> Chaise en Bois </a>
                                    </li>
                                    <li>
                                        <a href="/shop/categorier/fer"> Chaise en Fer </a>
                                    </li>

                                </ul>
                            </div>
                        </aside>                        
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row align-items-center latest_product_inner">

                        @foreach ($produits as $produit )
                        @if ($produit->categorie=="Chaise en bois")
                        
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('storage/imgs/product/' . $produit->image) }}">
                                <div class="single_product_text">
                                    <h4>{{ $produit->name}} </h4>
                                    <h3>$ {{ $produit->prix}}</h3>
                                    <a href="{{route('sengleproduit.index',$produit->id)}} " class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        @endif
                            
                        @endforeach
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->

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
                        
                        @foreach ($produits as $produit )

                        @if ($produit->stock<5)
                        <div class="single_product_item">
                            <img src="{{ asset('storage/imgs/product/' . $produit->image) }}">
                            <div class="single_product_text">
                                <h4> {{$produit->titre}} </h4>
                                <h3>$ {{$produit->prix}} </h3>
                                <h3>Stock: {{$produit->stock}} </h3>
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