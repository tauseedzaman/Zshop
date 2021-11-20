<?php

namespace App\Http\Livewire;

use App\Models\likes;
use Livewire\Component;

class ProductMenuLike extends Component
{

    public $Id;

    public function mount($kid)
    {
        $this->Id= $kid;
    }

    public function save_like()
    {
        likes::firstOrCreate([
            'user_id' => auth()->id(),
            'product_id' =>$this->Id
        ]);
    }


    public function render()
    {
        return view('livewire.product-menu-like');
    }
}
