<?php

namespace App\Http\Livewire;

use App\Models\likes;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TrendeProducts extends Component
{
    public function render()
    {

        //get 6 products that has most likes

        $trendeProducts =likes::select('product_id', DB::raw('count(product_id) as counts'))
        ->groupBy('product_id')
        ->latest()
        ->where('created_at', '>=', now()->subMonth())
        ->take(6)->get();
        return view('livewire.trende-products',[
            'trendeProducts' => $trendeProducts
        ]);
    }
}
