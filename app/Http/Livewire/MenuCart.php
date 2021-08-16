<?php

namespace App\Http\Livewire;
use App\Models\cart;
use Livewire\Component;
use App\Models\product;
class MenuCart extends Component
{
    public $total_price;

    public function delete_product_from_cart($id)
    {
        cart::find($id)->delete();
            return $this->products = cart::where('user_id',auth()->id())->get();
    }
        public function render()
        {
            return view('livewire.menu-cart',[
            'products' => cart::where('user_id',auth()->id())->get()
        ]);
    }
}
