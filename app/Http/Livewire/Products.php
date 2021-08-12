<?php

namespace App\Http\Livewire;
use App\Models\product as productModel;
use Livewire\Component;

class Products extends Component
{
    public function product_liked($id)
    {
        dd($id);
    }
    public function render()
    {
        return view('livewire.products',[
            'products' => productModel::latest()->paginate(9)
        ]);
    }
}
 