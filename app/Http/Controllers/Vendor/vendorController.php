<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class vendorController extends Controller
{
    public function index()
    {
        if(Auth::user()->type == 'Normal') {return redirect('dashboard');}
    }
}
