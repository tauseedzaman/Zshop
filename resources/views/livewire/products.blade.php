@forelse ($products as $product)
<div class="col-md-4">
    <div class="product-item">
        <div class="product-thumb">
            <img class="img-responsive" src="{{ config('app.url').$product->thumbnail }}" alt="product-img" />
            <div class="preview-meta">
                <ul>
                    <li>
                        <span data-toggle="modal" data-target="#product-modal">
                            <i class="tf-ion-ios-search-strong"></i>
                        </span>
                    </li>
                    <li wire:click="product_liked({{ $product->id }})">
                        <span >
                            <i class="tf-ion-ios-heart"></i>
                        </span>
                        {{-- <a><i  class="tf-ion-ios-heart"></i></a> --}}
                    </li>
                    <li>
                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="product-content">
            <h4><a href="product/{{ $product->id }}">{{ $product->name }}</a></h4>
            <p class="price">${{ $product->price }}</p>
        </div>
    </div>
</div>
@empty
    <h1>{{ __("no product found!") }}</h1>    
@endforelse