@extends('master')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <form id="checkout-form" class="clearfix">
                    <div class="col-md-6">
                        <div class="billing-details">
                            <p>Already a customer ? <a href="#">Login</a></p>
                            <div class="section-title">
                                <h3 class="title">Billing Details</h3>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="first-name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="last-name" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input class="input" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="address" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="city" placeholder="City">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="country" placeholder="Country">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="zip-code" placeholder="ZIP Code">
                            </div>
                            <div class="form-group">
                                <input class="input" type="tel" name="tel" placeholder="Telephone">
                            </div>
                            <div class="form-group">
                                <div class="input-checkbox">
                                    <input type="checkbox" id="register">
                                    <label class="font-weak" for="register">Create Account?</label>
                                    <div class="caption">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                        <p>
                                            <input class="input" type="password" name="password" placeholder="Enter Your Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="cart_details">
                            <h2 style="text-align: center; color: deepskyblue"> Shopping Details</h2>
                            <table class="shopping-cart-table table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Total</th>
                                </tr>
                                </thead>


                                <tbody>
                                @php
                                    $product_ids = json_decode($temp_order->product_ids);
                                @endphp
                                @for($i=0; $i<count($product_ids); $i++)
                                    @php $product = App\Product::find($temp_order->product_ids[$i]) @endphp
                                    <tr>
                                        <td></td>
                                        <td class="details">
                                            <a href="{{ route('pages.single_product',Crypt::encrypt($temp_order->product_ids[$i])  ) }}">{{ $product->name }}</a>
                                            <ul>
                                                @if($temp_order->free_product_ids[$i] == null)
                                                    <li><span><b>Size:</b> {{ $product->size }}</span></li>
                                                @else
                                                    @php
                                                        $free_product = \App\Product::find($temp_order->free_product_ids[$i]);
                                                    @endphp
                                                    <li><span><b>Size:</b> </span></li>
                                                    <li><span><b>Free product:</b> </span></li>
                                                @endif


                                            </ul>
                                        </td>
{{--                                        @if($product->offers->offer_percentage != null)--}}
{{--                                            <td class="price text-center"><strong></strong><span class="primary-color"> -% </span><br></td>--}}
{{--                                        @else--}}
{{--                                            <td class="price text-center"><strong>{{$temp_order->selling_price}}</strong><br></td>--}}
{{--                                        @endif--}}

                                        <td class="qty text-center">{{ $temp_order->quantity }}</td>
{{--                                        <td class="total text-center"><strong class="primary-color">{{ $temp_order->selling_price * $temp_order->quantity }}</strong></td>--}}
                                    </tr>
                                @endfor

{{--                                    <tr>--}}
{{--                                        <td></td>--}}
{{--                                        <td class="details">--}}
{{--                                            <a href="{{ route('pages.single_product',Crypt::encrypt($temp_order->id)  ) }}">{{ $temp_order->name }}</a>--}}
{{--                                            <ul>--}}
{{--                                                @if($temp_order->options->free_product == null)--}}
{{--                                                    <li><span><b>Size:</b> {{ $temp_order->options->size }}</span></li>--}}
{{--                                                @else--}}
{{--                                                    <li><span><b>Size:</b> {{ $temp_order->options->size }}</span></li>--}}
{{--                                                    <li><span><b>Free product:</b> {{ $temp_order->options->free_product }}</span></li>--}}
{{--                                                @endif--}}


{{--                                            </ul>--}}
{{--                                        </td>--}}
{{--                                        @if($cart_data->options->offer_percentage != null)--}}
{{--                                            <td class="price text-center"><strong>{{$temp_order->price}}</strong><span class="primary-color"> -{{ $temp_order->options->offer_percentage }}% </span><br></td>--}}
{{--                                        @else--}}
{{--                                            <td class="price text-center"><strong>{{$temp_order->price}}</strong><br></td>--}}
{{--                                        @endif--}}

{{--                                        <td class="qty text-center">{{ $temp_order->qty }}</td>--}}
{{--                                        <td class="total text-center"><strong class="primary-color">{{ $temp_order->price * $temp_order->qty }}</strong></td>--}}
{{--                                    </tr>--}}

                                </tbody>


                                <tfoot>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>SUBTOTAL</th>
                                    <th colspan="2" class="sub-total">{{ $temp_order->subtotal }}</th>
                                </tr>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>SHIPING</th>
                                    <td colspan="2">Free Shipping </td>
                                </tr>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>TOTAL</th>
<!--                                    --><?php //$total_with_delivery = str_replace(',', '', Cart::total()) + 20;
//                                    $total = number_format($total_with_delivery,2) ?>
                                    <th colspan="2" class="total">{{ $temp_order->total }}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="shiping-methods">
                            <div class="section-title">
                                <h4 class="title">Shiping Methods</h4>
                            </div>

                            <div class="input-checkbox">
                                <input type="radio" name="shipping" id="shipping-2">
                                <label for="shipping-2">Standard - $4.00</label>
                                <div class="caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    <p>
                                </div>
                            </div>
                        </div>

                        <div class="payments-methods">
                            <div class="section-title">
                                <h4 class="title">Payments Methods</h4>
                            </div>
                            <div class="input-checkbox">
                                <input type="radio" name="payments" id="payments-2">
                                <label for="payments-2">Cheque Payment</label>
                                <div class="caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    <p>
                                </div>
                            </div>
                            <div class="input-checkbox">
                                <input type="radio" name="payments" id="payments-3">
                                <label for="payments-3">Paypal System</label>
                                <div class="caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <input type="submit" value="Confirm payment" class="primary-btn">--}}
                    <a href="" class="primary-btn">Place Order</a>
                </form>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection
