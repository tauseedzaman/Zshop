<?php

namespace App\Http\Livewire;
use App\Models\cart;
use App\Models\order;
use App\Models\order_details;
use Livewire\Component;

class Checkout extends Component
{
    public $total_price;
    public function render()
    {
        return view('livewire.checkout',[
            'products' => cart::where('user_id',auth()->id())->get()
        ]);
    }
}
