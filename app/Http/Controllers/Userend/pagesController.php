<?php

namespace App\Http\Controllers\Userend;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class pagesController extends Controller
{
    public function home()
    {
//        $categories = Category::all();
        $products = Product::all();
        return view('pages.home',compact('products'));

    }

    public function products()
    {
        $products = Product::all();
        return view('pages.products');
    }

    public function single_product()
    {
        return view('pages.single_product');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

    public function single()
    {
        return view('pages.tshirt');
    }
}
