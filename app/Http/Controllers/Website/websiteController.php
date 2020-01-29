<?php

namespace App\Http\Controllers\Website;


use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class websiteController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id','!=', null)->take(8)->get();
        return view('website.pages.index',compact('categories'));
    }

    public function about()
    {
        return view('website.pages.about');
    }

    public function offers()
    {
        return view('website.pages.offers');
    }

    public function contact_us()
    {
        return view('website.pages.contact');
    }
}
