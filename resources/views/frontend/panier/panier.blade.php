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
              <h2>Cart Products</h2>
              <p>Home <span>-</span>Cart Products</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Cart Area =================-->
  <section class="cart_area padding_top">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <div class=" d-none">
                {{$totale=0}}

              </div>
              @foreach (Auth::user()->paniers as $panier )
              @foreach ($produits as $produit )
              @if ($produit->id=== $panier->id_produit)
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img width="70px" src="{{ asset('storage/imgs/product/' . $produit->image) }}">
                    </div>
                    <div class="media-body">
                      <p>{{ $produit->title}} </p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>$ {{ $produit->prix}}</h5>
                </td>
                <td>
                  <div class="product_count">
                    <input class="input-number{{$produit->id}}" type="text" value="{{$panier->quantiter}}" min="0" max="10">
                  </div>
                </td>
                <td>
                  <h5>{{$totale=$panier->quantiter * $produit->prix}} $</h5>
                  <h5 class=" d-none">{{$totale+=$totale}} $</h5>
                </td>
              </tr>
              
                
              @endif
                
              @endforeach
              
              
                
              @endforeach
              <tr>
                <td>
                  <h5>Total:</h5>
                </td>
                <td></td>
                <td></td>
                <td>
                  <h5>{{$totale}} $</h5>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="#">Continue Shopping</a>
            <div class=" d-none">
              @if (Auth::user())
              {{$id_user=Auth::user()->id}}
              
              @else
              {{$id_user=0}}

              @endif
              
            </div>
            <form action={{ route('storecommande') }} method="POST">
              @csrf
              <input class=" d-none" type="number" name="id_user" value="{{ $id_user }}">
              <button class=" border-0 bg-transparent" type="submit">
                <a class="btn_1 checkout_btn_1" >Proceed to checkout</a>

          </form>
          </div>
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->
@endsection