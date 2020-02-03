<?php

namespace App\Http\Controllers\Userend;

use Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(){
        $cart_datas = Cart::content();
//        dd($cart_datas);
        return view('pages.cart',compact('cart_datas'));
    }
    public function addItem($id){
        $pro = Product::find($id);

        $imgarray = json_decode($pro->image);

        if ($pro->offer_price != null){
            Cart::add(['id' => $pro->id, 'name' => $pro->name, 'qty' => 1, 'price' => $pro->offer_price, 'weight' => 1, 'options' => ['size' => $pro->size_capacity,'image'=>$imgarray[0]->image ]]);
        }
        else{
            Cart::add(['id' => $pro->id, 'name' => $pro->name, 'qty' => 1, 'price' => $pro->price, 'weight' => 1, 'options' => ['size' => $pro->size_capacity,'image'=>$imgarray[0]->image ]]);
        }
        return back();
    }
    public function deleteItem($rowId){
        Cart::remove($rowId);
        return back();
    }
    public function updateItem(Request $request){
        $qty = $request->qty;
        $rowId = $request->rowId;
        Cart::update($rowId, $qty);

        return redirect()->route('cart.index');
    }
}
