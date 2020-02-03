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
        $categories = Category::where('parent_id',null)->take(6)->get();
        $products = Product::all();
        return view('pages.home',compact('products','categories'));

    }

    public function products()
    {
        $products = Product::all();
        return view('pages.products',compact('products'));
    }

    public function single_product($id)
    {
        $product_single = Product::where('id',$id)->get();
//        dd($product_single);
        return view('pages.single_product',compact('product_single'));
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

    public function single()
    {
        return view('pages.tshirt');
    }

    public function subCatgProductSearch($id)
    {
        $products = Product::where('category_id',$id)->get();
        return view('pages.products',compact('products'));
    }

}
