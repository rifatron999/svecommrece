<?php

namespace App\Http\Controllers\Userend;

use App\Order;
use App\Payment;
use App\Shipping;
use Cart;
use App\Product;
use App\Temp_Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class orderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }
    public function place_order(Request $request)
    {
        $cart_contents = Cart::content();

        foreach ($cart_contents as $cart_content){
            $cart_ids[] = $cart_content->rowId;
            $pro_ids[] = $cart_content->id;
            $quantity[] = $cart_content->qty;
        }

        for ($i=0; $i<count($cart_contents); $i++){
            $pro_id = Product::find($pro_ids[$i]);
            $pro_stock = $pro_id->stock;

            $validator = Validator::make($request->all(), [
                'quantity_'.$i => 'required|numeric|min:1|max:'.$pro_stock,
            ]);
//            $request->validate([
//                'quantity_'.$i => 'required|numeric|min:1|max:'.$pro_stock,
//            ]);

            if ($validator->fails()) {
                return redirect()->route('cart.delete',$cart_ids[$i]);
            }


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

        $subtotal = str_replace(',', '', Cart::subtotal());
        $total = str_replace(',', '', Cart::total());


        $temp_order = Temp_Order::create([
            'customer_id' => Auth::user()->id,
            'shipping_id' => null,
            'vendor_id' => null,
            'invoice_id' => null,
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
        return redirect()->route('pages.checkout', Crypt::encrypt($temp_order->id) );

//        dd($product_ids,$selling_price,$quantity,$offer_type,$offer_percentage,$free_product_ids,$subtotal,$total,$invoice_id);
    }

    public function paymentConfirm(Request $request)
    {
        $shipping = Shipping::create([
            'customer_id' => $request->customer_id,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'phone' => $request->phone,
        ]);

        $payment = Payment::create([
            'method' => "Manual",
            'trx_id' => $request->trx_number,
            'sender_mobile_number' => $request->sender_mbl,
            'status' => "Paid",
        ]);

        $update = Temp_Order::find($request->temp_order_id);
        $invoice_id = uniqid();
        $update->update([
            'shipping_id' => $shipping->id,
            'payment_id' => $payment->id,
            'invoice_id' => $invoice_id,
            'trx_id' => $request->trx_number,
            'sender_mobile_number' => $request->sender_mbl,
            'status' => "Pending",
        ]);
        Cart::destroy();
        Return redirect()->route('pages.products');


    }
}
