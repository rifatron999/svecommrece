@extends('master')
@section('content')
    <div class="container">

        @if(!$temp_Orders->isEmpty() )
            <h1 class="text-center">My Orders</h1><br>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Invoice Id</th>
                    <th scope="col">Trx Id</th>
                    <th scope="col">Total Products</th>
                    <th scope="col">Total</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">Date</th>
                </tr>
                </thead>
                <tbody>

                @php $i = 1 @endphp
                @foreach($temp_Orders as $temp_Order)
                    @php
                        $product_ids = json_decode($temp_Order->product_ids);
                    @endphp
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $temp_Order->invoice_id }}</td>
                        <td>{{ $temp_Order->trx_id }}</td>
                        <td>{{ count($product_ids) }}</td>
                        <td>{{ $temp_Order->total }}</td>
                        <td>{{ $temp_Order->status }}</td>
                        <td>{{ $temp_Order->created_at }}</td>
                    </tr>

                    @php $i ++ @endphp
                @endforeach

                </tbody>
            </table>
        @endif
        @if(!$orders->isEmpty())
            <h1 class="text-center">Previous Orders</h1><br>
            {{--        successfull orders --}}
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Invoice Id</th>
                    <th scope="col">Total Products</th>
                    <th scope="col">Total</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">Date</th>
                </tr>
                </thead>
                <tbody>

                @php $i = 1 @endphp
                @foreach($orders as $order)
                    @php
                        $product_ids = json_decode($order->product_ids);
                    @endphp
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $order->invoice_id }}</td>
                        <td>{{ count($product_ids) }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->created_at }}</td>
                    </tr>

                    @php $i ++ @endphp
                @endforeach

                </tbody>
            </table>
        @endif

    </div>
@endsection
