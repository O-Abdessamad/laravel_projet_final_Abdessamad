@extends('layouts.frontend')

@section('content')
    @if (Auth::user())
        <h1 class=" d-none">
            {{ $id_user = Auth::user()->id }}
        </h1>
    @else
        <h1 class=" d-none">
            {{ $id_user = 0 }}
        </h1>
    @endif


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
                                <th scope="col">Supperimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coeurs as $coeur)
                                @if ($coeur->id_user == $id_user)
                                    @foreach ($produits as $produit)
                                    @if ($coeur->id_produit == $produit->id)

                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img width="70px" src="{{ asset('storage/imgs/product/' . $produit->image) }}">
                                                </div>
                                                <div class="media-body">
                                                    <p>{{$produit->titre}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>${{$produit->prix}}</h5>
                                        </td>

                                        <td>
                                            <form action="{{ route('coeur.destroyproduitcoeur', $coeur->id ) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class=" btn btn-danger text-white "
                                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')"><i
                                                        class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        </td>
                                    </tr>                                        
                                    @endif
                                        
                                    @endforeach

                                @endif
                            @endforeach


                        </tbody>
                    </table>
                    <div class="checkout_btn_inner float-right">
                        <a class="btn_1" href="#">Continue Shopping</a>
                        <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>
                    </div>
                </div>
            </div>
    </section>
    <!--================End Cart Area =================-->
@endsection
