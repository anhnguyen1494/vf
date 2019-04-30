<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function category(){
        return view('frontend.pages.category');
    }
}
