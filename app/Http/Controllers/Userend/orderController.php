<?php

namespace App\Http\Controllers\Userend;

use Cart;
use App\Product;
use App\Temp_Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class orderController extends Controller
{
    public function place_order(Request $request)
    {
        $cart_contents = Cart::content();

//        dd($request);
        foreach ($cart_contents as $cart_content){
            $pro_ids[] = $cart_content->id;
            $quantity[] = $cart_content->qty;
        }

        for ($i=0; $i<count($cart_contents); $i++){
            $pro_id = Product::find($pro_ids[$i]);
            $pro_stock = $pro_id->stock;

            $request->validate([
                'quantity_'.$i => 'required|numeric|min:1|max:'.$pro_stock,
            ]);

//            dd($pro_id->stock);

        }

        return redirect()->route('temp_orders');


    }
    public function temp_orders()
    {
        $cart_contents = Cart::content();

        foreach ($cart_contents as $cart_content){
            $product_id[] = $cart_content->id;
            $selling_prices[] = $cart_content->price;
            $quantities[] = $cart_content->qty;
            $offer_types[] = $cart_content->options->offer_type;
            $offer_percentages[] = $cart_content->options->offer_percentage;
            $free_product_id[] = $cart_content->options->free_product_id;
        }
        $product_ids = json_encode($product_id);
        $selling_price = json_encode($selling_prices);
        $quantity = json_encode($quantities);
        $offer_type = json_encode($offer_types);
        $offer_percentage = json_encode($offer_percentages);
        $free_product_ids = json_encode($free_product_id);

        $invoice_id = uniqid();
        $subtotal = str_replace(',', '', Cart::subtotal());
        $total = str_replace(',', '', Cart::total());


        $temp_order = Temp_Order::create([
            'customer_id' => 1,
            'shipping_id' => 1,
            'vendor_id' => null,
            'invoice_id' => $invoice_id,
            'product_ids' => $product_ids,
            'selling_price' => $selling_price,
            'quantity' => $quantity,
            'offer_type' => $offer_type,
            'offer_percentage' => $offer_percentage,
            'free_product_ids' => $free_product_ids,
            'subtotal' => $subtotal,
            'total' => $total

        ]);

        $cart_products = Temp_Order::find($temp_order->id);

        $cart_product = json_decode($cart_products->product_ids);
        for($i = 0; $i < count($cart_product) ; $i++){
            $pro_id = $cart_product[$i];
            $qty = $quantities[$i];
            $update = Product::find($pro_id);
            $new_stock = $update->stock - $qty;
            if($new_stock == 0){
                $update->update([
                    'stock' => $new_stock,
                    'status' => "Out of Stock",
                ]);
            }elseif ($new_stock > 0){
                $update->update([
                    'stock' => $new_stock,
                ]);
            }
        }

//        Cart::destroy();
//        return view('pages.checkout',compact('temp_order'));
        return redirect()->route('pages.checkout');

//        dd($product_ids,$selling_price,$quantity,$offer_type,$offer_percentage,$free_product_ids,$subtotal,$total,$invoice_id);
    }
}
