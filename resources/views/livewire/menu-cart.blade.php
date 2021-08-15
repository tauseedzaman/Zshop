{{-- {{ dd($products) }} --}}
@forelse ($products as $product)
<div class="media">
    <a class="pull-left" href="#!">
        <img class="media-object" src="" alt="image" />
    </a>
    <div class="media-body">
        <h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
        <div class="cart-price">
            <span>1 x</span>
            <span>1250.00</span>
        </div>
        <h5><strong>$1200</strong></h5>
    </div>
    <a href="#!" class="remove"><i class="tf-ion-close"></i></a>
</div>
@empty
    <p class="text-info">No Product Found!</p>
@endforelse ()


<div class="cart-summary">
    <span>Total</span>
    <span class="total-price">$1799.00</span>
</div>
