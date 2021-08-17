<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\product;

class MenuSearchBar extends Component
{
    public $search;

    public function searchBar()
    {
        // dd(product::Where('name','LIKE','%'.$this->search.'%')->orWhere('weight',$this->search)->orWhere('description','LIKE','%'.$this->search.'%')->orWhere('price',$this->search)->get());
        // 'products' => product::Where('name','LIKE','%'.$this->search.'%')->orWhere('weight',$this->search)->orWhere('description','LIKE','%'.$this->search.'%')->orWhere('price',$this->search)->get(),
        return redirect()->route('show_searched_items',$this->search);
    }
    public function render()
    {
        return view('livewire.menu-search-bar');
    }
}
