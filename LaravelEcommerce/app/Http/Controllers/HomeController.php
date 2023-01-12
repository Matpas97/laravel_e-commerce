<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    //
    public function index() {
        $products = Product::orderBy('price','asc')->paginate(10);
        $title = 'PHP E-commerce';
        return view('home',compact('title','products'));
    }
}
