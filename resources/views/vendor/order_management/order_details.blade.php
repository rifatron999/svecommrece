@extends('vendor.master')
@section('title','Order : '.$order->invoice_id)
@section('Order_management','active')
{{--@section('cancel_Order','active')--}}
@section('content')
    <div class="container-fluid">
       <div class="row">
           <div class="col-md-12  content-panel mar-top" style="overflow: auto">
                <div class="col-sm-2 ">
                    <img src="{{ asset('assets/website/images/logo/nobinLogo.png') }}"width="100%" alt="" title="Click to see Sub-Category">
                </div>
                <div class="col-sm-5 form-style"></div>
                <div class="col-sm-5 ">
                    <table class="table  table-advance table-hover ">
                        <tbody>
                            <tr>
                                <td class="text-center" colspan="2">
                                    <span class="label label-success label-mini"><b>Customer's Information</b></span>
                                </td>
                            </tr>
                            <tr >
                                <td class="text-center" >
                                    @if(empty($order->customers->image))
                                        <img class="img-circle" src="{{ asset('assets/vendor/images/profile picture/empty.jpg') }}"width="20%" alt="" title="Unavailable">
                                    @else
                                        <img class="img-circle" src="{{ asset('assets/vendor/images/profile picture/') }}/{{$order->customers->image}}" width="20%" alt="" >
                                    @endif
                                </td>
                                <td >
                                    <span class="label label-info label-mini"><i class="fas fa-signature"></i></span> <b>{{$order->customers->name}}</b><br><br>
                                    <span class="label label-info label-mini"><i class="fas fa-venus-mars"></i></span> <b>{{$order->customers->gender}}</b>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    <span class="label label-info label-mini"><i class="fas fa-envelope"></i></span> <b>{{$order->customers->email}}</b>
                                </td>
                                <td >
                                    <span class="label label-info label-mini"><i class="fas fa-phone-volume"></i></span> <b>{{$order->customers->phone}}</b>
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
    </div>
@endsection
