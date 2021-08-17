<?php

namespace App\Http\Livewire;
use App\Models\cart;
use App\Models\order;
use App\Models\order_details;
use Livewire\Component;

class Checkout extends Component
{
    public $total_price;

    public $address;
    public $zip_code;
    public $city;


    public $card_number;
    public $card_expiry;
    public $card_cvc;

    public function place_order()
    {
        $this->validate([
            'card_number' => 'required',
            'card_cvc' => 'required',
            'card_expiry' => 'required',
        ]);

        
        /*
        * Payment login goes here
        */
        
        
        /*
        * add product to orders table
        */
        $productsInCart = cart::where('user_id',auth()->id())->get();
        
        foreach($productsInCart as $product){
            $order = order::create([
                'user_id' => auth()->id(),
                'amount' => $product->product->price,
                'shipping_address' => auth()->user()->default_shipping_address,
                'order_address' => $this->address,
                'order_email' => auth()->user()->email,
                'order_status' => 'processing',
            ]);
            order_details::create([
                'order_id' => $order->id,
                'product_id' => $product->product_id,
                'price' => $product->product->price,
                'sku' => 'sku',
                'quantity' => '1',
            ]);
            
        }

        /*
        * now delete the products from the cart
        */
        cart::where('user_id',auth()->id())->delete();

        session()->flash('message', 'Order Placed Successfully.');
        
        unset($this->card_number);
        unset($this->card_expiry);
        unset($this->card_cvc);

    }

    public function removePrduct($id)
    {
        cart::where('id',$id)->delete();
        return $this->products = cart::where('user_id',auth()->id())->get();
    }

    public function apply_coupon_code()
    {
        dd('applied');
    }

    public function mount()
    {
        $this->address = auth()->user()->default_shipping_address;
    }
    public function render()
    {
        return view('livewire.checkout',[
            'products' => cart::where('user_id',auth()->id())->get()
        ]);
    }
}
