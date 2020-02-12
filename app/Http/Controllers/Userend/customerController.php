<?php

namespace App\Http\Controllers\Userend;

use App\Temp_Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use Illuminate\Support\Facades\Crypt;


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
    public function checkout($id)
    {
        $temp_orders = Temp_Order::find(Crypt::decrypt($id));
        $cart_datas = Cart::content();
        return view('pages.checkout',compact('cart_datas','temp_orders'));
    }
}
