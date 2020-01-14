<?php

namespace App\Http\Controllers\Vendor;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class normalVendorController extends Controller
{
    public function index()
    {
        return view('vendor.dashboard.index');
    }

    public function categoryManagementView()
    {
        $categories = Category::get();
        //dd($categories);
       return view('vendor.category_management.index',compact('categories'));
    }
}
