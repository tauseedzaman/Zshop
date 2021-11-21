<?php

namespace App\Http\Livewire;
use App\Models\product as productModel;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function product_liked($id)
    {
       if (auth()->user()) {
           \App\Models\likes::create([
               'user_id' => auth()->id(),
               'product_id' => $id
           ]);
       }

    }
    public function render()
    {
        return view('livewire.products',[
            'products' => productModel::latest()->paginate(9)
        ]);
    }
}
