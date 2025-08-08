<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('Home');
    }
    public function shop(){
        return view('Shop');
    }
    public function contact(){
        return view('Contact');
    }




}
