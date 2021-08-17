@forelse ($products as $product)
<div class="col-md-4">
    <div class="product-item">
        <div class="product-thumb">
            <img class="img-responsive" src="{{ config('app.url').$product->thumbnail }}" alt="product-img" />
            <div class="preview-meta">
                <ul>
                    <li>
                        <a href="{{ route('show_searched_item_by_name',$product->name) }}" >
                            <i class="tf-ion-ios-search-strong"></i>
                        </a>
                    </li>
                    <li >
                        <span id="productId"  value="{{ $product->id }}" data-pid="{{ $product->id }}"><i  class="tf-ion-ios-heart"></i>
                        </span>
                    </li>
                    <li>
                        <a href="{{ route('add_product_to_cart',$product->id) }}"><i class="tf-ion-android-cart"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="product-content">
            <h4><a href="{{ route('single_product',$product->id)}}" >{{ $product->name }}</a></h4>
            <p class="price">${{ $product->price }}</p>
        </div>
    </div>
</div>
@empty
    <h1>{{ __("no product found!") }}</h1>    
@endforelse