<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::where('featured', true)->take(4)->inRandomOrder()->get();
        return view('landing-page')->with('products', $products);
    }
}
