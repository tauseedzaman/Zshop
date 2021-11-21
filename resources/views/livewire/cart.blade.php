
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Cart</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">cart</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="block">
                            <div class="product-list">
                                <form method="post">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="">Item Name</th>
                                            <th class="">Item Price</th>
                                            <th class="">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($products as $product)
                                            <!--{{ $total = $total+$product->product->price }}-->
                                            <tr class="" >
                                                <td class="">
                                                    <div class="product-info">
                                                        <img width="80" src="{{ config('app.url') . $product->product->thumbnail }}" alt="" />
                                                        <a href="{{ route('show_searched_item_by_name',$product->product->name) }}">{{ $product->product->name }}</a>
                                                    </div>
                                                </td>
                                                <td class="">${{ $product->product->price ? $product->product->price : '00'  }}.00</td>
                                                <td class="">
                                                    <button type="button" class="btn product-remove" wire:click="delete({{ $product->id }})" style="cursor: pointer">Remove</button>
                                                </td>
                                            </tr>

                                            @empty
                                                <tr>
                                                    <td class="text-danger"> null </td>
                                                    <td  class="text-danger"> null </td>
                                                    <td  class="text-danger"> null </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="cart-total">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="subtotal">
                                                    <div class="title">Subtotal</div>
                                                    <div class="price" wire:model="total">${{ $total ? $total : '00' }}.00</div>
                                                </div>
                                                <div class="subtotal">
                                                    <div class="title">Shipping</div>
                                                    <div class="price">$00.10</div>
                                                </div>
                                                <div class="subtotal">
                                                    <div class="title">Tax</div>
                                                    <div class="price">$00.40</div>
                                                </div>
                                                <div class="subtotal">
                                                    <div class="title">Discount</div>
                                                    <div class="price">$00.55</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="total">
                                                    <div class="title">Total</div>
                                                    <div class="price">${{ $total ? $total : '00' }}.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    {{-- i am still conpuse in this logic --}}
                                    <a href="{{ route('checkout') }}" class="btn btn-main pull-right " @if($products->count() <= 0) disabled="" @endif >Checkout</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
