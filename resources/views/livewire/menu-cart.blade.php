@forelse ($products as $product)
<div class="media" {{ $total_price = $total_price+$product->product->price }}>
    <a class="pull-left" href="">
        <img class="media-object" src="{{ config('app.url') . $product->product->thumbnail }}" alt="image" />
    </a>
    <div class="media-body">
        <h4 class="media-heading"><a href="{{ route('show_searched_item_by_name',$product->product->name) }}">{{ $product->product->name }}</a></h4>
        <div class="cart-price">
            <span>1 x</span>
            <span>{{ $product->product->price }}.00</span>
        </div>
        <h5><strong>${{ $product->product->price }}</strong></h5>
    </div>
    <span wire:click="delete_product_from_cart({{ $product->id }})" class="remove"><i class="tf-ion-close"></i></span>
</div>
@empty
    <p class="text-info">No Product Found!</p>
@endforelse 
<div class="cart-summary">
    <span>Total</span>
    <span class="total-price">${{ $total_price ? $total_price : '00' }}.00</span>
</div>
