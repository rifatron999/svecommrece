<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function products()
    {
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
