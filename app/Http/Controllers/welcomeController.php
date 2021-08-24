<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\faq;
use App\Models\product;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function welcome()
    {
        return view('welcome',[
            'categories' => category::all()
        ]);
    }

    public function show_single_product($id)
    {
        return view('show_single_product',[
            'product' => product::where('id',$id)->first()
        ]);
    }

    public function show_searched_items($item)
    {
        $products = product::where('id',$item)->orWhere('name','LIKE','%'.$item.'%')->orWhere('weight',$item)->orWhere('description','LIKE','%'.$item.'%')->orWhere('price',$item)->get();
        return view('search',[
            'products' => $products,
            'searchItem' => $item
        ]);
    }   

    public function show_searched_item_by_category($id)
    {
        $products = product::where('category_id',$id)->get();
        return view('search',[
            'products' => $products,
            'searchItem' => $id
        ]);
    }  

    /*
    * show FAQ's 
    */
    public function faq()
    {
        return view('faq',[
            'faqs' => faq::latest()->get()
        ]);
    }


    /*
    *Search product by name
    */
    public function show_searched_item_by_name($name)
    {
        $products = product::where('name',$name)->orWhere('description','LIKE','%',$name.'%')->latest()->paginate(9 );
        return view('search',[
            'products' => $products,
            'searchItem' => $name
        ]);
    }  
    
}
