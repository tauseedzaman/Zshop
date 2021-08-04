@extends('layouts.app')
@section('content')


    <div class="hero-slider">
        <div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slider-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 text-center">
                        <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
                        <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">The beauty of nature <br> is hidden in details.</h1>
                        <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="{{ route('shop') }}">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slider-3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 text-left">
                        <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
                        <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">The beauty of nature <br> is hidden in details.</h1>
                        <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="{{ route('shop') }}">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slider-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 text-right">
                        <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
                        <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">The beauty of nature <br> is hidden in details.</h1>
                        <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="{{ route('shop') }}">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="product-category section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center">
                        <h2>Product Category</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="category-box">
                        <a href="#!">
                            <img src="images/shop/category/category-1.jpg" alt="" />
                            <div class="content">
                                <h3>Clothes Sales</h3>
                                <p>Shop New Season Clothing</p>
                            </div>
                        </a>
                    </div>
                    <div class="category-box">
                        <a href="#!">
                            <img src="images/shop/category/category-2.jpg" alt="" />
                            <div class="content">
                                <h3>Smart Casuals</h3>
                                <p>Get Wide Range Selection</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="category-box category-box-2">
                        <a href="#!">
                            <img src="images/shop/category/category-3.jpg" alt="" />
                            <div class="content">
                                <h3>Jewellery</h3>
                                <p>Special Design Comes First</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="products section bg-gray">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h2>Trendy Products</h2>
                </div>
            </div>
            <div class="row">

                @livewire('products')
            </div>
        </div>
    </section>


    <section class="call-to-action bg-gray section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="title">
                        <h2>SUBSCRIBE TO NEWSLETTER</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, <br> facilis numquam impedit ut sequi. Minus facilis vitae excepturi sit laboriosam.</p>
                    </div>
                   @livewire('subscribe')
                </div>
            </div> 		<!-- End row -->
        </div>   	<!-- End container -->
    </section>   <!-- End section -->

@endsection
