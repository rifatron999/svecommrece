<?php

namespace App\Http\Controllers\Userend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


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
}
