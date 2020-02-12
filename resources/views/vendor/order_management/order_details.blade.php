@extends('vendor.master')
@section('title','Order : '.$order->invoice_id)
@section('Order_management','active')
{{--@section('cancel_Order','active')--}}
@section('content')
    <div class="container-fluid">
       <div class="row">
           <div class="col-md-12  content-panel mar-top" style="overflow: auto">
                <div class="col-sm-2 ">
                    <table class="table  table-advance table-hover ">
                        <tbody>
                        <tr >
                            <td class="text-center" >
                                <img src="{{ asset('assets/website/images/logo/nobinLogo.png') }}"width="100%" alt="">
                            </td>
                        </tr>
                        <tr >
                            <td >
                                <span class="label label-info label-mini"><i class="fab fa-slack-hash"></i></span> <b> {{$order->invoice_id}}</b>
                            </td>
                        </tr>
                        <tr >
                            <td >
                                @php
                                    $time = date('g:i a,d M,Y',strtotime($order->created_at) + 6 * 3600);
                                @endphp
                                <span class="label label-info label-mini"><i class="fas fa-clock"></i></span> <b> {{$time}}</b>
                            </td>
                        </tr>
                        <tr >
                            <td >
                                @if($order->status === "Processing")
                                    <span class="label label-info ">{{$order->status}}</span>
                                @elseif($order->status === "Delivered")
                                    <span class="label label-success ">{{$order->status}}</span>
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-5 ">

                </div>
                <div class="col-sm-5 ">
                    <table class="table  table-advance table-hover ">
                        <tbody>
                            <tr>
                                <td >
                                    <span class="label label-success label-mini"><b>Customer's Information</b></span>
                                </td>
                                <td >
                                    <span class="label label-info label-mini"><i class="fas fa-signature"></i></span> <b>{{$order->customers->name}}</b><br><br>
                                </td>
                            </tr>
                            <tr >
                                <td class="text-center" width="60%" >
                                    @if(empty($order->customers->image))
                                        <img class="img-circle" src="{{ asset('assets/vendor/images/profile picture/empty.jpg') }}"width="20%" alt="" title="Unavailable">
                                    @else
                                        <img class="img-circle" src="{{ asset('assets/vendor/images/profile picture/') }}/{{$order->customers->image}}" width="20%" alt="" >
                                    @endif
                                </td>
                                <td >
                                    <span class="label label-info label-mini"><i class="fas fa-venus-mars"></i></span> <b>{{$order->customers->gender}}</b><br><br>
                                    <span class="label label-info label-mini"><i class="fas fa-phone-volume"></i></span> <b>{{$order->customers->phone}}</b><br><br>
                                    <span class="label label-info label-mini"><i class="fas fa-envelope"></i></span> <b>{{$order->customers->email}}</b>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <span class="label label-info label-mini"><i class="fas fa-envelope"></i></span> <b>{{$order->customers->address}}</b><b class="mark">{{$order->customers->city}}</b>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
           </div>
       </div>
        <div class="row">
            <div class="col-md-12  content-panel mar-top" style="overflow: auto">
                <table class="table  table-advance table-hover ">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col"class="text-center"><i class="fab fa-slack-hash"></i></th>
                        <th scope="col" class="text-center"> <i class="fas fa-puzzle-piece"></i> Product</th>
                        <th scope="col" class="text-center"> <i class="fas fa-gift"></i> </th>
                        <th scope="col"class="text-center"><i class="fas fa-mobile-alt"></i> Selling price</th>
                        <th scope="col"class="text-center"><i class="fas fa-money-bill-wave"></i> Quantity</th>
                        <th scope="col"class="text-center"><i class="fas fa-phone-volume"></i></i>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($selling_price as $i => $s)
                            <tr >
                                <td class="text-center" >
                                    @php
                                        $imgarray = json_decode($products[$i]->image);
                                    @endphp
                                    <img src="{{ asset('assets/vendor/images/products/') }}/{{$imgarray[0]->image}}" width="70px" {{--class="imgs"--}} alt="">
                                </td>
                                <td class="text-center" ><b> {{$products[$i]->name}}</b></td>
                                <td class="text-center" >
                                    <b>
                                        @if($offer_type[$i] === 'Discount')
                                            Actual Price : ৳ {{number_format($products[$i]->price)}} <br>
                                           Discount : {{$offer_percentage[$i]}} %
                                        @endif
                                        @if($offer_type[$i] === 'Buy one get one')
                                                @if(!empty($free_products[$i]->image))
                                                    @php
                                                        $imgarray2 = json_decode($free_products[$i]->image);
                                                    @endphp
                                                    <img src="{{ asset('assets/vendor/images/products/') }}/{{$imgarray2[0]->image}}" width="70px" {{--class="imgs"--}} alt="">
                                                @endif
                                                  <br>  Free: {{$free_products[$i]->name}}
                                        @endif
                                    </br>
                                </td>
                                <td class="text-center" ><b>৳ {{number_format($selling_price[$i])}}</b></td>
                                <td class="text-center" ><b> {{$quantity[$i]}}</b></td>
                                <td class="text-center" ><b> {{$selling_price[$i] * $quantity[$i]}}</b></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            
        </div>
    </div>
@endsection
