<?php

namespace App\Http\Controllers\Userend;

use Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function index(){
        $cart_datas = Cart::content();
//        dd($cart_datas);
        return view('pages.cart',compact('cart_datas'));
    }
    public function addItem($id){
        $pro = Product::find($id);

        $imgarray = json_decode($pro->image);

        if($pro->offer_id != null){

            if ($pro->offer_price != null){
                Cart::add(['id' => $pro->id,
                           'name' => $pro->name,
                           'qty' => 1,
                           'price' => $pro->offer_price,
                           'weight' => 1,
                           'options' => ['size' => $pro->size_capacity,
                                         'image'=>$imgarray[0]->image,
                                         'offer_type'=> "Discount",
                                         'offer_percentage'=> $pro->offers->offer_percentage ,
                                         'free_product'=> null,
                                         'free_product_id'=> null
                                         ]]);
            }
            else{
                $main_product_id = json_decode($pro->offers->product_ids);
                $free_product_id = json_decode($pro->offers->free_product_ids);
                for ($i=0; $i<count($main_product_id); $i++){
                    if($main_product_id[$i]->id == $pro->id){
                        $free_product = Product::find($free_product_id[0]->id);
                        Cart::add(['id' => $pro->id, 'name' => $pro->name, 'qty' => 1, 'price' => $pro->price, 'weight' => 1, 'options' => ['size' => $pro->size_capacity,'image'=>$imgarray[0]->image, 'offer_type'=> 'Buy one get one', 'offer_percentage'=> null , 'free_product'=>$free_product->name, 'free_product_id'=>$free_product_id[0]->id ]]);
                    }
                }
            }
        }
        else{
            Cart::add(['id' => $pro->id, 'name' => $pro->name, 'qty' => 1, 'price' => $pro->price, 'weight' => 1, 'options' => ['size' => $pro->size_capacity,'image'=>$imgarray[0]->image, 'offer_type'=> null, 'offer_percentage'=> null , 'free_product'=> null, 'free_product_id'=> null ]]);
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
        $product_id = $request->product_id;
        $product = Product::find($product_id);
        $stock =  $product->stock;


        $request->validate([ 'qty' => 'required|numeric|min:1|max:'.$stock, ],
            [
                'qty.max' => 'Stock out of your limit'
            ]);


        Cart::update($rowId, $qty);

        return redirect()->route('cart.index');
    }
}
