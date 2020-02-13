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
                <form id="checkout-form" method="post" action="{{ route('paymentConfirm') }}" class="clearfix">
                    @csrf
                    <div class="col-md-6">
                        <div class="billing-details">

                            <div class="section-title">
                                <h3 class="title">Shipping Details</h3>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="customer_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="temp_order_id" value="{{ $temp_orders->id }}">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="name" placeholder="Name" value="{{ Auth::user()->name }}" required>
                            </div>
                            <div class="form-group">
                                <input class="input" type="email" name="email" placeholder="Email" value="{{ Auth::user()->email }}" required>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="address" placeholder="Address" value="{{ Auth::user()->address }}" required>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="city" placeholder="City" value="{{ Auth::user()->city }}" required>
                            </div>
                            <div class="form-group">
                                <input class="input" type="tel" name="phone" placeholder="Phone" value="{{ Auth::user()->phone }}" required>
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
{{--                                @php--}}
{{--                                    $product_ids = json_decode($temp_orders->product_ids);--}}
{{--                                @endphp--}}
{{--                                @for($i=0; $i<count($product_ids); $i++)--}}
{{--                                    @php $product = App\Product::find($product_ids[$i]) @endphp--}}
{{--                                    <tr>--}}
{{--                                        <td></td>--}}
{{--                                        <td class="details">--}}
{{--                                            <a href="{{ route('pages.single_product',Crypt::encrypt($temp_orders->product_ids[$i])  ) }}">--}}
{{--                                                {{ $product->name }}</a>--}}
{{--                                            <ul>--}}
{{--                                                @if($temp_orders->free_product_ids[$i] == null)--}}
{{--                                                    <li><span><b>Size:</b> {{ $product->size }}</span></li>--}}
{{--                                                @else--}}
{{--                                                    @php--}}
{{--                                                        $free_product = \App\Product::find($temp_orders->free_product_ids[$i]);--}}
{{--                                                    @endphp--}}
{{--                                                    <li><span><b>Size:</b> </span></li>--}}
{{--                                                    <li><span><b>Free product:</b> </span></li>--}}
{{--                                                @endif--}}


{{--                                            </ul>--}}
{{--                                        </td>--}}
{{--                                        @if($product->offers->offer_percentage != null)--}}
{{--                                            <td class="price text-center"><strong></strong><span class="primary-color"> -% </span><br></td>--}}
{{--                                        @else--}}
{{--                                            <td class="price text-center"><strong>{{$temp_orders->selling_price}}</strong><br></td>--}}
{{--                                        @endif--}}

{{--                                        <td class="qty text-center">{{ $temp_orders->quantity }}</td>--}}
{{--                                        <td class="total text-center"><strong class="primary-color">{{ $temp_orders->selling_price * $temp_orders->quantity }}</strong></td>--}}
{{--                                    </tr>--}}
{{--                                @endfor--}}
                                </tbody>


                                <tfoot>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>SUBTOTAL</th>
                                    <th colspan="2" class="sub-total">{{ Cart::subtotal() }}</th>
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
                                    <th colspan="2" class="total">{{ Cart::total() }}</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
{{--                        <div class="shiping-methods">--}}
{{--                            <div class="section-title">--}}
{{--                                <h4 class="title">Shiping Methods</h4>--}}
{{--                            </div>--}}

{{--                            <div class="input-checkbox">--}}
{{--                                <input type="radio" name="shipping" id="shipping-2">--}}
{{--                                <label for="shipping-2">Standard - $4.00</label>--}}
{{--                                <div class="caption">--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.--}}
{{--                                    <p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="payments-methods">
                            <div class="section-title">
                                <h4 class="title">Payments Methods</h4>
                            </div>
                            <div class="form-group">
                                <input class="input" type="tel" name="sender_mbl" placeholder="Sender Number" required>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="trx_number" placeholder="Trx Number" required>
                            </div>
                        </div>
                    </div>


                    <input type="submit" value="Confirm payment" class="primary-btn">
                    {{--                    <a href="" class="primary-btn">Place Order</a>--}}


                </form>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection
