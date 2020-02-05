@extends('master')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Products</li>
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
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">

                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter by Price</h3>
                        <div id="price-slider"></div>
                    </div>
                    <!-- aside widget -->

                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter By Color:</h3>
                        <ul class="color-option">
                            <li><a href="#" style="background-color:#475984;"></a></li>
                            <li><a href="#" style="background-color:#8A2454;"></a></li>
                            <li class="active"><a href="#" style="background-color:#BF6989;"></a></li>
                            <li><a href="#" style="background-color:#9A54D8;"></a></li>
                            <li><a href="#" style="background-color:#675F52;"></a></li>
                            <li><a href="#" style="background-color:#050505;"></a></li>
                            <li><a href="#" style="background-color:#D5B47B;"></a></li>
                        </ul>
                    </div>
                    <!-- /aside widget -->

                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter By Size:</h3>
                        <ul class="size-option">
                            <li class="active"><a href="#">S</a></li>
                            <li class="active"><a href="#">XL</a></li>
                            <li><a href="#">SL</a></li>
                        </ul>
                    </div>
                    <!-- /aside widget -->

                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter by Brand</h3>
                        <ul class="list-links">
                            <li><a href="#">Nike</a></li>
                            <li><a href="#">Adidas</a></li>
                            <li><a href="#">Polo</a></li>
                            <li><a href="#">Lacost</a></li>
                        </ul>
                    </div>
                    <!-- /aside widget -->

                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter by Gender</h3>
                        <ul class="list-links">
                            <li class="active"><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                        </ul>
                    </div>
                    <!-- /aside widget -->

                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Top Rated Product</h3>
                        <!-- widget product -->
                        <div class="product product-widget">
                            <div class="product-thumb">
                                <img src="{{ asset('assets/img/thumb-product01.jpg') }}" alt="">
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /widget product -->

                        <!-- widget product -->
                        <div class="product product-widget">
                            <div class="product-thumb">
                                <img src="{{ asset('assets/img/thumb-product01.jpg') }}" alt="">
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">$32.50</h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /widget product -->
                    </div>
                    <!-- /aside widget -->
                </div>
                <!-- /ASIDE -->

                <!-- MAIN -->
                <div id="main" class="col-md-9">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        <div class="pull-left">
                            <div class="row-filter">

                                <a href="#" class="active"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="sort-filter">
                                <span class="text-uppercase">Sort By:</span>
                                <select class="input">
                                    <option value="0">Position</option>
                                    <option value="0">Price</option>
                                    <option value="0">Rating</option>
                                </select>
                                <a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
                            </div>
                        </div>
                        <div class="pull-right">
                            {{ $products->links() }}
                        </div>
                    </div>
                    <!-- /store top filter -->

                    <!-- STORE -->
                    <div id="store">
                        <!-- row -->
                        <div class="row">
                            <!-- Product Single -->
                            @foreach($products as $product)
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="product product-single">
                                        <div class="product-thumb">
                                            <div class="product-label">
                                                @php
                                                    date_default_timezone_set("Asia/Dhaka");
                                                    $now = time(); // or your date as well
                                                    $your_date = strtotime( $product->created_at );
                                                    $datediff = $now - $your_date;
                                                    $days_left = round($datediff / (60 * 60 * 24));
                                                @endphp
                                                @if($days_left <= 30)
                                                    <span>New</span>
                                                @endif
                                                @if($product->offer_id != null && $product->offer_id == $product->offers->id)
                                                    @if($product->offers->type == "discount")
                                                        <span class="sale">- {{$product->offers->offer_percentage}}%</span>
                                                    @elseif($product->offers->type == "buy1get1")
                                                        <span class="sale" style="background: red">Buy 1 Get 1</span>
                                                    @endif
                                                @endif

                                            </div>
                                            <a href="{{ route('pages.single_product',Crypt::encrypt($product->id)  ) }}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> See Details </a>
                                            @php
                                                $imgarray = json_decode($product->image);
                                            @endphp
                                            <img src="{{ asset('assets/vendor/images/products') }}/{{$imgarray[0]->image}}" alt="">
                                        </div>
                                        <div class="product-body">
                                            @if($product->offer_id != null && $product->offer_id == $product->offers->id)
                                                @if($product->offers->type == "discount")
                                                    <h3 class="product-price">৳ {{ number_format($product->offer_price) }} <del class="product-old-price">৳ {{ number_format($product->price) }}</del></h3>
                                                @elseif($product->offers->type == "buy1get1")
                                                    @php
                                                        $main_product_id = json_decode($product->offers->product_ids);
                                                        $free_product_id = json_decode($product->offers->free_product_ids);
                                                    @endphp
                                                    @if($main_product_id[0]->id == $product->id)
                                                        @php
                                                            $free_product = \App\Product::find($free_product_id[0]->id);
                                                        @endphp
                                                        <h3 class="product-price">৳ {{ number_format($product->price) }} <span class="product-old-price">Get {{ $free_product->name }} Free</span></h3>
                                                    @endif
                                                @endif
                                            @elseif($product->offer_id == null)
                                                <h3 class="product-price">৳ {{ number_format($product->price) }}</h3>
                                            @endif

                                            <h2 class="product-name"><a href="{{ route('pages.single_product',Crypt::encrypt($product->id) ) }}">{{ $product->name }}</a></h2>
                                            <div class="product-btns text-center">
                                                @if($product->status == 'Available')
                                                    <a href="{{ route('cart.add',[$product->id]) }}" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                                @elseif($product->status == 'Out of Stock')
                                                    <button class="primary-btn" style="background: #d43f3a;"><i class="fa fa-window-close"></i> Out Of Stock </button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        <!-- /Product Single -->
                        </div>

                        <!-- /row -->
                    </div>
                    <!-- /STORE -->

                    <!-- store bottom filter -->
                    <div class="store-filter clearfix">
                        <div class="pull-left">
                            <div class="row-filter">
                                <a href="#" class="active"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="sort-filter">
                                <span class="text-uppercase">Sort By:</span>
                                <select class="input">
                                    <option value="0">Position</option>
                                    <option value="0">Price</option>
                                    <option value="0">Rating</option>
                                </select>
                                <a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
                            </div>
                        </div>
                        <div class="pull-right">
                            {{ $products->links() }}
                        </div>
                    </div>
                    <!-- /store bottom filter -->
                </div>
                <!-- /MAIN -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

@endsection
