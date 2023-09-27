<section class="our_offer section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6">
                <div class="offer_img">
                    <a href="{{route('sengleproduit.index',$produits[0]->id)}} ">
                        <img src="{{ asset('storage/imgs/product/' . $produits[0]->image) }}">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="offer_text">
                    <h2>Weekly Sale on
                        60% Off All Products</h2>
                    <div class="date_countdown">
                        <div id="timer">
                            <div id="days" class="date"></div>
                            <div id="hours" class="date"></div>
                            <div id="minutes" class="date"></div>
                            <div id="seconds" class="date"></div>
                        </div>
                    </div>

                    <form action="{{ route('sendmail') }} " method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="enter email address" aria-label="Recipient's username"
                                aria-describedby="basic-addon2" required>
                            <button type="submit" class="input-group-text btn_2">
                                book now
                            </button>
                        </div>
                    </form>





                </div>
            </div>
        </div>
    </div>
</section>