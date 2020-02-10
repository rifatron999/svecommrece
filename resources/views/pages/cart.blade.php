@extends('master')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Cart</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <div class="container">
        @if(Cart::count() == 0)
            <h1 style="padding: 3em">Cart Empty</h1>
        @else
            <div class="row">
                <div class="col-md-12">
                    <div class="order-summary clearfix">
                        <div class="section-title">
                            <h3 class="title">Order Review</h3>
                        </div>
                        <table class="shopping-cart-table table">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th></th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Total</th>
                                <th class="text-right"></th>
                            </tr>
                            </thead>


                            <tbody>

                            @foreach($cart_datas as $cart_data)

                                <tr>
                                    <td class="thumb"><img src="{{ asset('assets/vendor/images/products') }}/{{ $cart_data->options->image }}" alt=""></td>
                                    <td class="details">
                                        <a href="{{ route('pages.single_product',Crypt::encrypt($cart_data->id)  ) }}">{{ $cart_data->name }}</a>
                                        <ul>
                                            @if($cart_data->options->free_product == null)
                                                <li><span><b>Size:</b> {{ $cart_data->options->size }}</span></li>
                                            @else
                                                <li><span><b>Size:</b> {{ $cart_data->options->size }}</span></li>
                                                <li><span><b>Free product:</b> {{ $cart_data->options->free_product }}</span></li>
                                            @endif

{{--                                            <li><span>Color: Camelot</span></li>--}}
                                        </ul>
                                    </td>
                                    @if($cart_data->options->offer_percentage != null)
                                        <td class="price text-center"><strong>{{$cart_data->price}}</strong><span class="primary-color"> -{{ $cart_data->options->offer_percentage }}% </span><br></td>
                                    @else
                                        <td class="price text-center"><strong>{{$cart_data->price}}</strong><br></td>
                                    @endif
{{--                                    <td class="price text-center"><strong>{{$cart_data->price}}</strong><br></td>--}}
                                    <td class="qty text-center">
                                        <form method="post" action="{{ route('cart.update') }}">
                                            {{ @csrf_field() }}
                                            <input class="input" type="number" name="qty" value="{{ $cart_data->qty }}">
                                            <input class="input" type="hidden" name="rowId" value="{{ $cart_data->rowId }}">
                                            <input type="submit" class="btn btn-sm btn-success" value="update">
                                        </form>
                                    </td>
                                    <td class="total text-center"><strong class="primary-color">{{ $cart_data->price * $cart_data->qty }}</strong></td>
                                    <td class="text-right"><a href="{{ route('cart.delete',[$cart_data->rowId])  }}" class="main-btn icon-btn"><i class="fa fa-close"></i></a></td>
                                </tr>
                            @endforeach
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
                                <td colspan="2">Free Shipping {{ Cart::tax(1) }}</td>
                            </tr>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>TOTAL</th>
                                <?php $total_with_delivery = str_replace(',', '', Cart::total()) + 20;
                                      $total = number_format($total_with_delivery,2) ?>
                                <th colspan="2" class="total">{{$total}}</th>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="pull-right">
                            <button class="primary-btn">Place Order</button>
                        </div>
                    </div>

                </div>
            </div>
        @endif
    </div>

@endsection
