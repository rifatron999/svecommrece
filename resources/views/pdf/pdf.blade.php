<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid black;
            padding: 8px;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
<div class="container">
    <div style="width: 100%">

        <p><img src="{{ public_path("assets/website/images/logo/nobinLogo.png") }}" alt="" style="width: 200px;height: 60px"></p>
        <div style="text-align: center">
            <h2>Nobin Bangladesh</h2>
            <p>018574521231</p>
            <br>
        </div>
    </div>

    <div style="width: 100%; height: 150px">
        <div style="width: 47.5%; float: left;border: 1px solid black; padding: 0 1%">
            <div>
                <p><b>Invoice No : </b></p>
                <p><b>Customer Name</b> Zahid</p>
                <p><b>Address</b> Banasree Dhaka</p>
            </div>
        </div>
        <div style="width: 48%; float: right; border: 1px solid;padding: 0 1%">
            <div>
                <p><b>Ref no</b> 12542121412</p>
                <p><b>Date</b> 12/08/2019</p>
                <p><b>Delivery Date</b> 13/05/2019</p>
            </div>
        </div>
    </div>

    <table id="customers">
        <tr>
            <th>Name</th>
            <th>Free Product</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>

        <tr>
            <td>HD tv 32"</td>
            <td>Basic 24"</td>
            <td>32"</td>
            <td>5</td>
            <td>5000</td>
        </tr>



    </table>
    <br>

    <div style="width: 100%">
        <div style="float: right; width: 50%">
            <p><b>Total Amount</b></p>
            <p><b>Vat</b></p>
            <p><b>Discount</b></p>
            <p><b>Net Payable amount</b></p>
        </div>
    </div>
</div>

</body>
</html>
