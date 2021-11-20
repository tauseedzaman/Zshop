@extends('layouts.app')
@section('content')
    <section class="products section bg-gray">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h2 class="border shadow padding" style="color: green;border-bottom:1px solid lightgreen"> Result for
                        <span style="color: blue; background-color:cyan">{{ $searchedItem }}</span>
                        ({{ $products->count() . ') Items Found' }}</h2>
                </div>
            </div>
            <div class="row">

                @forelse ($products as $product)
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="product-thumb">
                                <img class="img-responsive" src="{{ config('app.url') . $product->thumbnail }}"
                                    alt="product-img" />
                                <div class="preview-meta">
                                    <ul>
                                        <li>
                                            <a href="{{ route('show_searched_item_by_name', $product->name) }}">
                                                <i class="tf-ion-ios-search-strong"></i>
                                            </a>
                                        </li>
                                    @livewire('product-menu-like',['kid' => $product->id])
                                    @livewire('product-menu-cart',['cid' => $product->id])
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="{{ route('single_product', $product->id) }}">{{ $product->name }}</a></h4>
                                <p class="price">${{ $product->price }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1>{{ __('no product found!') }}</h1>
                @endforelse
            </div>
        </div>
    </section>


    <section class="call-to-action bg-gray section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="title">
                        <h2>SUBSCRIBE TO NEWSLETTER</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, <br> facilis numquam impedit ut
                            sequi. Minus facilis vitae excepturi sit laboriosam.</p>
                    </div>
                    @livewire('subscribe')
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->
@endsection
