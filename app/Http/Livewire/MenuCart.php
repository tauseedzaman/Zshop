<?php

namespace App\Http\Livewire;
use App\Models\cart;
use Livewire\Component;

class MenuCart extends Component
{
    public function render()
    {
        return view('livewire.menu-cart',[
            'products' => cart::where('user_id',auth()->id())->get('product_id')
        ]);
    }
}
