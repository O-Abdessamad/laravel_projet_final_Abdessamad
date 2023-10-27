<section class="product_list best_seller section_padding">
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
                    @foreach ($produits as $produit)

                        @if ($produit->stock < 5)
                            <div class="single_product_item">

                                <a href="{{ route('sengleproduit.index', $produit->id) }} ">
                                    <img src="{{ asset('storage/imgs/product/' . $produit->image) }}">
                                </a>
                                <div class="single_product_text">
                                    <h4> {{ $produit->titre }} </h4>
                                    <h4>

                                        @if (Auth::user())
                                            <div class=" d-none">
                                                {{ $coeurr = Auth::user()->coeurs }}
                                                {{ $id_user = Auth::user()->id }}

                                            </div>


                                            @if ($coeurr->contains('id_produit', $produit->id))
                                                <form action="{{ route('coeur.destroyproduitcoeur', $coeurr[0]->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class=" border-0 bg-transparent" type="submit">
                                                        <i class="fa-solid fa-heart" style="color: #ff0000;"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <form action={{ route('storecoeur', $produit->id) }} method="POST">
                                                    @csrf
                                                    <input class=" d-none" type="number" name="id_user"
                                                        value="{{ $id_user }}">
                                                    <button class=" border-0 bg-transparent" type="submit">
                                                        <i class="fa-regular fa-heart"></i> </button>
                                                </form>
                                            @endif
                                        @else
                                            <i class="fa-solid fa-heart"></i>
                                        @endif



                                    </h4>
                                    <h3>Stock: {{ $produit->stock }} </h3>
                                </div>

                                
                                
                            </div>
                        @endif

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
