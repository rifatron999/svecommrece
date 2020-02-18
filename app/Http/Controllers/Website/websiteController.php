<?php

namespace App\Http\Controllers\Website;


use App\Category;
use App\Offer;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class websiteController extends Controller
{

    public function index()
    {
        $offers = Offer::where('status','!=','Deactive')->get();
        $categories = Category::where('parent_id','!=', null)->take(8)->get();
        return view('website.pages.index',compact('categories','offers'));
    }

    public function about()
    {
        return view('website.pages.about');
    }

//    public function products()
//    {
//        $products = Product::where('status','!=','Disable')->paginate(14);
//        return view('pages.products',compact('products'));
//    }

    public function offers()
    {
        $offers = Offer::where('status','!=','Deactive')->get();
        return view('website.pages.offers',compact('offers'));
    }

    public function contact_us()
    {
        return view('website.pages.contact');
    }
}
