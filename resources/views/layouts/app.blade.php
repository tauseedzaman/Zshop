<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Constra HTML Template v1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/themefisher-font/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    @livewireScripts
</head>

<body id="body">
    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="contact-number">
                        <i class="tf-ion-ios-telephone"></i>
                        <span>0129- 12323-123123</span>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <!-- Site Logo -->
                    <div class="logo text-center">
                        <a href="{{ url('/') }}">
                            <svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                    font-size="40" font-family="AustinBold, Austin" font-weight="bold">
                                    <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                                        <text id="AVIATO">
                                            <tspan x="108.94" y="325">Sellers</tspan>
                                        </text>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <ul class="top-menu text-right list-inline">
                        <li class="dropdown cart-nav dropdown-slide">
                            <a href="{{ route('cart') }}" class="dropdown-toggle" data-toggle="dropdown"
                                data-hover="dropdown"><i class="tf-ion-android-cart"></i>Cart</a>
                            <div class="dropdown-menu cart-dropdown">
                                @livewire('menu-cart')
                                <ul class="text-center cart-buttons">
                                    <li><a href="cart.html" class="btn btn-small">View Cart</a></li>
                                    <li><a href="checkout.html" class="btn btn-small btn-solid-border">Checkout</a></li>
                                </ul>
                            </div>

                        </li><!-- / Cart -->

                        <!-- Search -->
                        <li class="dropdown search dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                    class="tf-ion-ios-search-strong"></i> Search</a>
                            <ul class="dropdown-menu search-dropdown">
                                <li>
                                    <form action="post"><input type="search" class="form-control"
                                            placeholder="Search..."></form>
                                </li>
                            </ul>
                        </li><!-- / Search -->

                        <!-- Languages -->
                        <li class="commonSelect">
                            <select class="form-control">
                                <option>EN</option>
                                <option>DE</option>
                                <option>FR</option>
                                <option>ES</option>
                            </select>
                        </li><!-- / Languages -->

                    </ul><!-- / .nav .navbar-nav .navbar-right -->
                </div>
            </div>
        </div>
    </section><!-- End Top Header Bar -->


    <!-- Main Menu Section -->
    <section class="menu">
        <nav class="navbar navigation">
            <div class="container">
                <div class="navbar-header">
                    <h2 class="menu-title">Main Menu</h2>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div><!-- / .navbar-header -->

                <!-- Navbar Links -->
                <div id="navbar" class="navbar-collapse collapse text-center">
                    <ul class="nav navbar-nav">
                        <li class="dropdown ">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="dropdown ">
                            <a href="{{ route('shop') }}">Shop</a>
                        </li>
                        <li class="dropdown ">
                            <a href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="dropdown ">
                            <a href="{{ route('user_dashboard') }}">Dashboard</a>
                        </li>
                        @auth()
                            <li class="dropdown ">
                                <a href="{{ route('cart') }}"> My Cart</a>
                            </li>
                        @endauth
                        <li class="dropdown ">
                            <a href="{{ route('contact_us') }}">Contact</a>
                        </li>
                        <li class="dropdown ">
                            <a href="{{ route('about_us') }}">About</a>
                        </li>
                        <li class="dropdown ">
                            <a href="{{ route('faq') }}">FAQ</a>
                        </li>
                        @guest()
                            <li class="dropdown ">
                                <a href="{{ route('login') }}">login</a>
                            </li>
                        @endguest
                        @auth()
                        {{-- {{ dd(auth()->user()) }} --}}
                            @if (auth()->user()->isAdmin)
                                <li class="dropdown ">
                                    <a href="{{ route('admin.dashboard') }}">Admin</a>
                                </li>
                            @endif

                            <li class="dropdown ">
                                <a class="" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endauth
                    </ul><!-- / .nav .navbar-nav -->
                </div>
            </div><!-- / .container -->
        </nav>
    </section>

    @yield('content')
    <footer class="footer section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="social-media">
                        <li>
                            <a href="https://www.facebook.com/">
                                <i class="tf-ion-social-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/">
                                <i class="tf-ion-social-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/">
                                <i class="tf-ion-social-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com//">
                                <i class="tf-ion-social-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="footer-menu text-uppercase">
                        <li>
                            <a href="contact.html">CONTACT</a>
                        </li>
                        <li>
                            <a href="{{ route('shop') }}">SHOP</a>
                        </li>
                        <li>
                            <a href="{{ route('privacy') }}">PRIVACY POLICY</a>
                        </li>
                    </ul>
                    <p class="copyright-text">Copyright &copy; 2021, Front-End by <a
                            href="https://themefisher.com/">Themefisher</a> Back-End By
                        <a href="https://github.com/tauseedzaman">Tauseed Zaman</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('plugins/instafeed/instafeed.min.js') }}"></script>
    <script src="{{ asset('plugins/ekko-lightbox/dist/ekko-lightbox.min.js') }}"></script>
    <script src="{{ asset('plugins/syo-timer/build/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('plugins/slick/slick-animation.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('plugins/google-map/gmap.js') }}"></script> --}}
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
