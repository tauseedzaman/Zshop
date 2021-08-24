<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\likes;
use App\Models\cart;
use App\Models\order_details;
use Illuminate\Http\Request;

class adminHelperController extends Controller
{
    public function showSingleCustomer($id)
    {
        return view('admin.user_details',[
            'customer' => user::find($id)->first(),
            'likes' => likes::where('user_id',$id)->get(),
            'cartProducts' => cart::where('user_id',$id)->get(),
        ]);
    }

    public function manage_aboutUs_page()
    {
        return view('admin.aboutUs');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
