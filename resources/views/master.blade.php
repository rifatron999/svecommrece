<!DOCTYPE html>
<html lang="en">
    @include('includes.header_link')
<body>
    @include('includes.top_bar')
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')
    @include('includes.footer_link')
    <script>
        $(document).ready(function () {
            $("#addCart").click(function () {
                var price = $(".product-price").text();
                var productName = $(".product-name").text();

                $("#cart_product_name").html(productName);
                $("#cart_product_price").html(price);


            });
            $("#cancel_cart").click(function () {
               $("#cart_div").remove();
            });
            $("#removeDiv").click(function () {
                $("#remove").remove();
                // $("#removeDiv").parent().remove();
            });
        });
    </script>
</body>

</html>
