@forelse ($trendeProducts as $trende)
    <div class="col-md-4">
        <div class="product-item">
            <div class="product-thumb">
                <img class="img-responsive" src="{{ config('app.url') . $trende->product->thumbnail }}" alt="product-img" />
                <div class="preview-meta">
                    <ul>
                        <li>
                            <a href="{{ route('show_searched_item_by_name', $trende->product->name) }}">
                                <i class="tf-ion-ios-search-strong"></i>
                            </a>
                        </li>
                        @livewire('product-menu-like', ['kid' =>$trende->product_id ])
                        @livewire('product-menu-cart', ['cid' =>$trende->product_id ])
                    </ul>
                </div>
            </div>
            <div class="product-content">
                <h4><a href="{{ route('single_product', $trende->product_id) }}">{{ $trende->product->name }}</a></h4>
                <p class="price">${{ $trende->product->price }}</p>
            </div>
        </div>
    </div>
@empty
    <h1>{{ __('no product found!') }}</h1>
@endforelse
