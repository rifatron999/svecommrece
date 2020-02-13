<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order : {{$order->invoice_id}}</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
            font-size: 15px;
        }
        table{
            font-size: x-small;
        }
        tfoot tr td{
            font-weight: bold;
            font-size: x-small;
        }
        .gray {
            background-color: lightgray
        }
        img {
            vertical-align: top;
        }





    </style>

</head>
<body>

<table width="100%">
    <tr >
        <td valign="left" >
            <h1> Invoice #{{$order->invoice_id}}</h1>
            <strong  > Bill to </strong> <br>
            {{$order->customers->name}} <br>
            {{$order->customers->phone}}<br>
            {{$order->customers->email}}
            <br>
            <br>
            <hr>
            <br>


            {{--<strong  >{{$req->datex}}:</strong> {{$req->date}} <br>
            <strong>{{$req->duedatex}}:</strong> {{$req->due_date}} <br>--}}
        </td>
        {{--<td align="right">
            <img  src="assets/img/company_logo/{{session('c_logo')}}" width="100" height="125"    >
            <pre>
            {{$req->invoice_from}}
                {{session('c_address')}}
                {{session('c_phone')}}
                {{session('c_email')}}
            </pre>
        </td>--}}
    </tr>
    {{--<tr>
        <td>



        </td>

    </tr>--}}

</table>

{{--
<table width="100%">

    <tr>


        <td align="left" >


        </td>




    </tr>

</table>

<br/>

<table width="100%">
    <thead style="background-color: #464f47; color: #fff;">
    <tr align="center" >

        <th colspan="2" >ITEM</th>
        <th>Quantity</th>
        <th>Unit Price $</th>
        <th>Total $</th>
    </tr>
    </thead>
    <tbody>

    <?php for($x=0;$x<count($req->invoiceItem);$x++)
    {
    ?>
    <tr>

        <td align="center">{{$req->invoiceItem[$x]}}</td>
        <td style="color: #a0aec0;" align="left" >{{$req->invoiceItemDes[$x]}}</td>
        <td align="center">{{$req->invoiceQuantity[$x]}}</td>
        <td align="center">{{$req->invoiceRate[$x]}}</td>
        <td align="center">{{$req->invoiceAmount[$x]}}</td>
    </tr>


    <?php
    }
    ?>


    </tbody>
</table>

<table align="right"  width="30%" >

    <tr>

        <td align="center">{{$req->subTotalx}}</td>
        <td align="center">{{session('c_currency')}} {{$req->Sub_total}}</td>
    </tr>
    <tr>

        <td align="center">{{$req->taxx}}</td>
        <td align="center">{{$req->tax}}</td>
    </tr>
    <tr>

        <td align="center">{{$req->discountx}}</td>
        <td align="center">{{$req->discount}}</td>
    </tr>
    <tr>

        <td align="center">{{$req->shippingx}}</td>
        <td align="center">{{session('c_currency')}} {{$req->shipping}}</td>
    </tr>


    <tr>

        <td align="center">{{$req->totalx}}</td>
        <td align="center" class="gray">{{session('c_currency')}} {{$req->total}}</td>
    </tr>
    @if($req->invoice_type === 'Invoice')
        <tr>

            <td align="center">{{$req->paidx}}</td>
            <td align="center" class="gray">{{session('c_currency')}} {{$req->amount_paid}}</td>
        </tr>
    @endif
    <hr width="99%" align="left" >



    <table align="left"  width="70%" style="padding: 50px;
  " >


        <tr>

            <td align="left" width="20%" >{{$req->descriptionx}}: </td>
            <td align="left" width="50%"  >{{$req->description}}</td>
        </tr>

        <tr>

            <td align="left" width="20%" >{{$req->termsx}}: </td>
            <td align="left" >{{$req->terms}}</td>
        </tr>
    </table>

--}}

</body>
</html>
