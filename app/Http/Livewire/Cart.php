<?php

namespace App\Http\Livewire;
use App\Models\cart as cartModel;
use Livewire\Component;

class Cart extends Component
{
    public $total;

    public function delete($id)
    {
        dd("you are here");
        cartModel::find($id)->delete();
        $this->products = cartModel::where('user_id',auth()->id())->get();
    }
    public function render()
    {
        return view('livewire.cart',[
            'products' => cartModel::where('user_id',auth()->id())->get()
        ])->layout('');
    }
}
