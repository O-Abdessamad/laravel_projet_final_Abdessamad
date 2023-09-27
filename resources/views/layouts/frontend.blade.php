<!doctype html>
<html lang="zxx">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>aranoz</title>
        <link rel="icon" href="img/favicon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}  > 
        <!-- animate CSS -->
        <link rel="stylesheet" href={{ asset('css/animate.css') }}  >
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }}  >
        <!-- font awesome CSS -->
        <link rel="stylesheet" href={{ asset('css/all.css') }}  >
        <!-- flaticon CSS -->
        <link rel="stylesheet" href={{ asset('css/flaticon.css') }}  >
        <link rel="stylesheet" href={{ asset('css/themify-icons.css') }}  >
        <!-- font awesome CSS -->
        <link rel="stylesheet" href={{ asset('css/magnific-popup.css') }}  >
        <!-- swiper CSS -->
        <link rel="stylesheet" href={{ asset('css/slick.css') }}  >
        <!-- style CSS -->
        <link rel="stylesheet" href={{ asset('css/style.css') }}  >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Laravel</title>
    
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny/">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
    
    </head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"> 
                            <img src={{ asset('img/logo.png') }} alt="logo">
                            
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/shop">
                                        Shop
                                    </a>
                                    
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href='/contact'>Contact</a>
                                </li>
                                @role("admin")

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href='/alluser'>Backend</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="{{route('backend.allproduit')}}"> Produit</a>
                                        <a class="dropdown-item" href="{{route('backend.alluser')}}">Utilisateur</a>
                                        <a class="dropdown-item" href="{{route('backend.boitemail')}}">Info</a>
                                        <a class="dropdown-item" href="{{route('backend.boitemail')}}">Boit de Messages</a>
                                    </div>
                                </li>
                                @endrole

                                @role('webmaster')

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href='/allproduitWM'>Backend</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="{{route('backend.allproduitWM')}}"> Produit</a>
                                </li>

                                @endrole


                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>

                            <a href="/coeur"><i class="ti-heart"></i></a>

                            <div class=" position-relative bg-black divpanier">

                                <span class="text-light panier">4</span>

                                <a href="/panier"><i class="fas fa-cart-plus "></i></a>

                            </div>




                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                        <div class=" d-flex ">
                                            <div class=" d-flex justify-content-center flex-column align-items-center">
                                                <i class="fa-solid fa-user "></i>
                                                {{ Auth::user()->name }}
                                                
                                            </div>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">

                                                    <i class="fa-solid fa-right-from-bracket m-0 p-0"></i>
                                                </x-dropdown-link>
                                            </form>
                                        </div>
                                    @else
                                        <a href="/login">
                                            <i class="fa-solid fa-right-to-bracket"></i>
                                        </a>
                                    @endauth
                                </div>
                            @endif










                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>

    </header>


    <!-- Header part end-->


    @yield('content')

  <!--::footer_part start::-->
  <footer class="footer_part">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>Top Products</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Managed Website</a></li>
                        <li><a href="">Manage Reputation</a></li>
                        <li><a href="">Power Tools</a></li>
                        <li><a href="">Marketing Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Jobs</a></li>
                        <li><a href="">Brand Assets</a></li>
                        <li><a href="">Investor Relations</a></li>
                        <li><a href="">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>Features</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Jobs</a></li>
                        <li><a href="">Brand Assets</a></li>
                        <li><a href="">Investor Relations</a></li>
                        <li><a href="">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>Resources</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Guides</a></li>
                        <li><a href="">Research</a></li>
                        <li><a href="">Experts</a></li>
                        <li><a href="">Agencies</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="single_footer_part">
                    <h4>Newsletter</h4>
                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                    </p>
                    <div>
                        <form action="{{route('sendmail')}} " method="POST" class="subscribe_form relative mail_part">
                            @csrf


                            <input type="email" name="email" id="email"
                                placeholder="Email Address" class="placeholder hide-on-focus"
                                required>
                            <button type="submit" 
                                class="email_icon newsletter-submit button-contactForm">subscribe</button>
                        </form>
                    </div>
                
                </div>
            </div>
        </div>

    </div>
    <div class="copyright_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </P>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_icon social_icon">
                        <ul class="list-unstyled">
                            <li><a href="#" class="single_social_icon"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a>
                            </li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--::footer_part end::-->

<!-- jquery plugins here--><script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
<!-- popper js -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- easing js -->
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('js/lightslider.min.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('js/masonry.pkgd.js') }}"></script>
<!-- particles js -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<!-- slick js -->
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/swiper.jquery.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/contact.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/mail-script.js') }}"></script>
<script src="{{ asset('js/stellar.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('js/theme.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
