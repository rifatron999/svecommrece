<?php

namespace App\Http\Controllers\Userend;

use App\Category;
use App\Product;
use App\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

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
        $products = Product::where('status','!=','Disable')->paginate(14);
        return view('pages.products',compact('products'));
    }

    public function single_product($id)
    {
        $single_id = Crypt::decrypt($id);
        $product_single = Product::where('id',$single_id)->get();
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
        $subCatg_id = Crypt::decrypt($id);
        $products = Product::where('category_id',$subCatg_id)->paginate(14);
        return view('pages.products',compact('products'));
    }

}
