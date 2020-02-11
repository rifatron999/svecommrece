<?php

namespace App\Http\Controllers\Userend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;


class customerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('customerAuth.home');
    }
    public function checkout()
    {
        $cart_datas = Cart::content();
        return view('pages.checkout',compact('cart_datas'));
    }
}
