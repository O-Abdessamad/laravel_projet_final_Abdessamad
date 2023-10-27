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
                                    <a href="{{ route('sengleproduit.index', $produits[$i - 1]->id) }} ">
                                        <img src="{{ asset('storage/imgs/product/' . $produits[$i - 1]->image) }}">
                                    </a>
                                    <div class="single_product_text">
                                        <h4>{{ $produits[$i - 1]->titre }} </h4>
                                        <div class=" d-flex justify-content-between">
                                            <h3>
                                                $ {{ $produits[$i - 1]->prix }}
                                            </h3>
                                            <h4>

                                                @if (Auth::user())
                                                    <h1 class=" d-none">
                                                        {{ $id_user = Auth::user()->id }}

                                                        {{ $coeurr = Auth::user()->coeurs }}
                                                    </h1>

                                                    @if ($coeurr->contains('id_produit', $produits[$i - 1]->id))
                                                        <form
                                                            action="{{ route('coeur.destroyproduitcoeur', $coeurr[0]->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class=" border-0 bg-transparent" type="submit">
                                                                <i class="fa-solid fa-heart"
                                                                    style="color: #ff0000;"></i>
                                                            </button>
                                                        </form>
                                                    @else
                                                        <form action={{ route('storecoeur', $produits[$i - 1]->id) }}
                                                            method="POST">
                                                            @csrf
                                                            <input class=" d-none" type="number" name="id_user"
                                                                value="{{ $id_user }}">
                                                            <button class=" border-0 bg-transparent" type="submit">
                                                                <i class="fa-regular fa-heart"></i> </button>
                                                        </form>
                                                    @endif
                                                @else
                                                <h1 class=" d-none">
                                                    {{ $id_user = 0 }}

                                                    {{ $coeurr = 0 }}
                                                </h1>
                                                    <i class="fa-solid fa-heart"></i>

                                                @endif



                                            </h4>
                                        </div>

                                        <div class=" d-flex justify-content-between">

                                            <form action={{ route('addToPanier', $produits[$i - 1]->id) }}
                                                method="POST">
                                                @csrf

                                                <input class=" d-none" type="number" name="id_user"
                                                    value="{{ $id_user }}">

                                                <button class=" border-0 bg-transparent" type="submit">
                                                    <a class="add_cart">+
                                                        add to cart </a>
                                                </button>

                                            </form>

                                        </div>
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
