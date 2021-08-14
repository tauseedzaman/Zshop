<?php

namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function welcome()
    {
        return view('welcome',[
            'categories' => category::all()
        ]);
    }
    public function show_category_products($id)
    {
        $products
    }
}
