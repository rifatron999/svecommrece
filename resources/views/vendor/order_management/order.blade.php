@extends('vendor.master')
@section('title','Orders')
@section('Order_management','active')
@section('Order','active')
@section('content')
    <div class="container-fluid">
            <div class="row">
                {{--<div class="btn-group col-md-12 mar-top">
                    @foreach($sub_categories as $s)
                        <button type="button" class="btn btn-round btn-info">{{$s->name}}</button>
                    @endforeach
                    <div class="btn-group">
                        <button type="button" class="btn btn-round btn-default dropdown-toggle" data-toggle="dropdown">
                            Dropdown
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown link</a></li>
                            <li><a href="#">Dropdown link</a></li>
                        </ul>
                    </div>
                </div>--}}
                <div class="col-md-12 text-center content-panel mar-top" style="overflow: auto">
                    <table class="table  table-advance table-hover ">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col"class="text-center"><i class="fab fa-slack-hash"></i> Order Id</th>
                            <th scope="col" class="text-center"> <i class="fas fa-puzzle-piece"></i> Trx Id</th>
                            <th scope="col"class="text-center"><i class="fas fa-mobile-alt"></i> Bkash No</th>
                            <th scope="col"class="text-center"><i class="fas fa-money-bill-wave"></i> Amount</th>
                            <th scope="col"class="text-center"><i class="fas fa-user-cog"></i></i> Customer</th>
                            <th scope="col"class="text-center"><i class="fas fa-phone-volume"></i></i> Customer Phone</th>
                            <th scope="col"class="text-center"><i class="fas fa-map-marker-alt"></i></i> Shipping</th>
                            <th scope="col"class="text-center"><i class=" fa fa-edit"></i> Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $s)
                            <tr >
                                <td class="text-center"><b>{{$s->invoice_id}}</b></td>
                                <td class="text-center"><b>{{$s->payments->trx_id}}</b></td>
                                <td class="text-center"><b>{{$s->payments->sender_mobile_number}}</b></td>
                                <td class="text-center"><b>৳ {{number_format($s->total)}}</b></td>
                                <td class="text-center"><b>{{$s->customers->name}}</b></td>
                                <td class="text-center"><b>{{$s->customers->phone}}</b></td>
                                <td class="text-center"><b>{{$s->shippings->address}} , {{$s->shippings->city}}</b></td>
                                <td class="text-center">@if($s->status === 'Processing')<span class="label label-info label-mini">{{$s->status}}</span>@elseif($s->status === 'Delivered')<span class="label label-success label-mini">{{$s->status}}</span>{{--@else<span class="label label-default label-mini">{{$s->status}}</span> --}}@endif</td>
                                <td>
                                    <a href="{{route('order_details',Crypt::encrypt($s->id))}}" title="See Details" class="btn btn-primary btn-xs"><i class="fas fa-arrow-circle-right"></i> </a>
                                    <a href="{{route('orderDelivered',Crypt::encrypt($s->id))}}" title="Delivered" class="btn btn-success btn-xs" onclick="return confirm('Are you sure that the order is delivered ?')"><i class="fas fa-truck-loading"></i> </a>
                                    <a href="{{route('orderProcessiong',Crypt::encrypt($s->id))}}" title="Undo to processing" class="btn btn-warning btn-xs" onclick="return confirm('Are you sure that the order is still in processing ?')"><i class="fas fa-undo"></i></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $orders->links()  !!}
                </div>
            </div>
    </div>
@endsection
