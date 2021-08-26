<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\likes;
use App\Models\cart;
use App\Models\aboutUs;
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
        $request->validate([
            'content' => 'required'
        ]);

        aboutUs::create(['content' => $request->content]);
        return redirect()->back();
    }
    public function uploadCKEImage(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('images'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image successfully uploaded'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }
}

