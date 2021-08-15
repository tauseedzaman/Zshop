<?php

namespace App\Http\Controllers;
use App\Models\cart;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function store($id)
    {
        cart::create([
            'user_id' => auth()->id(),
            'product_id' => $id
        ]);
        return redirect()->back();
    }
    

 
}
