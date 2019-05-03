<?php

namespace App\Http\Controllers;

use App\Models\CustomerInfo;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.pages.contact');
    }

    public function store(Request $request){
        $data = $request->validate([
            'phone' => 'required|unique:customer_infos|max:255',
            'full_name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        $saved = CustomerInfo::create($data);
        return redirect()->route('contact')->with('success','Đăng ký thành công!');
    }
}
