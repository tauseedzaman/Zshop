<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\likes;
class productLikeController extends Controller
{
    public function like($id)
    {
        $d = likes::firstOrCreate([
            'user_id' => auth()->id(),
            'product_id' =>$id
        ]);
        return redirect()->back()->with(['message'=>'your like added']);
    }
}
