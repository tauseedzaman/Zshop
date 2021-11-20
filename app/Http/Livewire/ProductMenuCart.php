<?php

namespace App\Http\Livewire;

use App\Models\cart;
use Livewire\Component;

class ProductMenuCart extends Component
{

    public $Id;

    public function mount($cid)
    {
        $this->Id= $cid;
    }


    public function add_to_cart()
    {
        cart::create([
            'user_id' => auth()->id(),
            'product_id' => $this->Id
        ]);
    }
    public function render()
    {
        return view('livewire.product-menu-cart');
    }
}
