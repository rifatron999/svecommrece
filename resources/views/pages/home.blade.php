@extends('master')
@section('content')

    <!-- HOME banner -->
    <div id="home">
        <!-- container -->
        <div class="container">
            <!-- home wrap -->
            <div class="home-wrap">
                <!-- home slick -->
                <div id="home-slick">
                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset('assets/img/banner01.jpg') }}" alt="">
                        <div class="banner-caption text-center">
                            <h1>Bags sale</h1>
                            <h3 class="white-color font-weak">Up to 50% Discount</h3>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                    <!-- /banner -->

                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset('assets/img/banner02.jpg') }}" alt="">
                        <div class="banner-caption">
                            <h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                    <!-- /banner -->

                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset('assets/img/banner03.jpg') }}" alt="">
                        <div class="banner-caption">
                            <h1 class="white-color">New Product <span>Collection</span></h1>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                    <!-- /banner -->
                </div>
                <!-- /home slick -->
            </div>
            <!-- /home wrap -->
        </div>
        <!-- /container -->
    </div>
    <!-- /HOME -->

    <!-- section 3 short poster -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- banner -->
                <div class="col-md-4 col-sm-6">
                    <a class="banner banner-1" href="#">
                        <img src="{{ asset('assets/img/banner10.jpg') }}" alt="">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-4 col-sm-6">
                    <a class="banner banner-1" href="#">
                        <img src="{{ asset('assets/img/banner11.jpg') }}" alt="">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
                    <a class="banner banner-1" href="#">
                        <img src="{{ asset('assets/img/banner12.jpg') }}" alt="">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- section (deals of the week) -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section-title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Deals Of The Week</h2>
                        <div class="pull-right">
                            <div class="product-slick-dots-1 custom-dots"></div>
                        </div>
                    </div>
                </div>
                <!-- /section-title -->

                <!-- banner -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="banner banner-2">
                        <img src="{{ asset('assets/img/banner14.jpg') }}" alt="">
                        <div class="banner-caption">
                            <h2 class="white-color">NEW<br>COLLECTION</h2>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                </div>
                <!-- /banner -->

                <!-- Product Slick -->
                <div class="col-md-9 col-sm-6 col-xs-6">
                    <div class="row">
                        <div id="product-slick-1" class="product-slick">

                            @foreach($products as $product)
                                <!-- Product Single -->
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
                                            @if($product->offer_percentage != 0)
                                                <span class="sale">{{$product->offer_percentage}}%</span>
                                            @endif
                                        </div>
                                        <a href="{{ route('pages.single_product',[$product->id]) }}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> See Details </a>
                                        @php
                                            $imgarray = json_decode($product->image);
                                        @endphp
                                        <img src="{{ asset('assets/vendor/images/products') }}/{{$imgarray[0]->image}}" alt="">
                                    </div>
                                    <div class="product-body">
                                        @if($product->offer_price != null)
                                            <h3 class="product-price">৳ {{ number_format($product->offer_price) }} <del class="product-old-price">৳ {{ number_format($product->price) }}</del></h3>
                                        @else
                                            <h3 class="product-price">৳ {{ number_format($product->price) }}</h3>
                                        @endif
                                        <h2 class="product-name"><a href="{{ route('pages.single_product',[$product->id]) }}">{{ $product->name }}</a></h2>
                                        <div class="product-btns text-center">
                                            @if($product->stock != null)
                                                <a href="{{ route('cart.add',[$product->id]) }}" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                            @else
                                                <button class="primary-btn" style="background: #d43f3a;"><i class="fa fa-window-close"></i> Out Of Stock </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product Single -->
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- /Product Slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- section (Current Products) -->
    <div class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Current Products</h2>
                        <div class="pull-right">
                            <div class="product-slick-dots-2 custom-dots">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- section title -->

                <!-- Product Single -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single product-hot">
                        <div class="product-thumb">
                            <div class="product-label">
                                <span class="sale">-20%</span>
                            </div>
                            <ul class="product-countdown">
                                <li><span>00 H</span></li>
                                <li><span>00 M</span></li>
                                <li><span>00 S</span></li>
                            </ul>
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                            <img src="{{ asset('assets/img/product01.jpg') }}" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->

                <!-- Product Slick -->
                <div class="col-md-9 col-sm-6 col-xs-6">
                    <div class="row">
                        <div id="product-slick-2" class="product-slick">

                            @foreach($products as $product)
                                <!-- Product Single -->
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
                                            @if($product->offer_percentage != 0)
                                                <span class="sale">{{$product->offer_percentage}}%</span>
                                            @endif
                                        </div>
                                        <a href="{{ route('pages.single_product',[$product->id]) }}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> See Details </a>
                                        @php
                                            $imgarray = json_decode($product->image);
                                        @endphp
                                        <img src="{{ asset('assets/vendor/images/products') }}/{{$imgarray[0]->image}}" alt="">
                                    </div>
                                    <div class="product-body">
                                        @if($product->offer_price != null)
                                            <h3 class="product-price">৳ {{ number_format($product->offer_price) }} <del class="product-old-price">৳ {{ number_format($product->price) }}</del></h3>
                                        @else
                                            <h3 class="product-price">৳ {{ number_format($product->price) }}</h3>
                                        @endif
                                        <h2 class="product-name"><a href="{{ route('pages.single_product',[$product->id]) }}">{{ $product->name }}</a></h2>
                                        <div class="product-btns text-center">
                                            @if($product->stock != null)
                                                <a href="{{ route('cart.add',[$product->id]) }}" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                            @else
                                                <button class="primary-btn" style="background: #d43f3a;"><i class="fa fa-window-close"></i> Out Of Stock </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product Single -->
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- /Product Slick -->
            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- /section -->

    <!-- section (3 banner) -->
    <div class="section section-grey">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- banner -->
                <div class="col-md-8">
                    <div class="banner banner-1">
                        <img src="{{ asset('assets/img/banner13.jpg') }}" alt="">
                        <div class="banner-caption text-center">
                            <h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-4 col-sm-6">
                    <a class="banner banner-1" href="#">
                        <img src="{{ asset('assets/img/banner11.jpg') }}" alt="">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-4 col-sm-6">
                    <a class="banner banner-1" href="#">
                        <img src="{{ asset('assets/img/banner12.jpg') }}" alt="">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- section (latest) -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Latest Products</h2>
                    </div>
                </div>
                <!-- section title -->

                <!-- Product Single -->
                @foreach($products as $product)
                    <div class="col-md-3 col-sm-6 col-xs-6">
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
                                    @if($product->offer_percentage != 0)
                                        <span class="sale">{{$product->offer_percentage}}%</span>
                                    @endif
                                </div>
                                <a href="{{ route('pages.single_product',[$product->id]) }}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> See Details </a>
                                @php
                                    $imgarray = json_decode($product->image);
                                @endphp
                                <img src="{{ asset('assets/vendor/images/products') }}/{{$imgarray[0]->image}}" alt="">
                            </div>
                            <div class="product-body">
                                @if($product->offer_price != null)
                                    <h3 class="product-price">৳ {{ number_format($product->offer_price) }} <del class="product-old-price">৳ {{ number_format($product->price) }}</del></h3>
                                @else
                                    <h3 class="product-price">৳ {{ number_format($product->price) }}</h3>
                                @endif
                                <h2 class="product-name"><a href="{{ route('pages.single_product',[$product->id]) }}">{{ $product->name }}</a></h2>
                                <div class="product-btns text-center">
                                    @if($product->stock != null)
                                        <a href="{{ route('cart.add',[$product->id]) }}" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                    @else
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
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- section (Picked For you) -->
    <div class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Picked For You</h2>
                    </div>
                </div>
                <!-- section title -->

                <!-- Product Single -->
                @foreach($products as $product)
                    <div class="col-md-3 col-sm-6 col-xs-6">
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
                                    @if($product->offer_percentage != 0)
                                        <span class="sale">{{$product->offer_percentage}}%</span>
                                    @endif
                                </div>
                                <a href="{{ route('pages.single_product',[$product->id]) }}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> See Details </a>
                                @php
                                    $imgarray = json_decode($product->image);
                                @endphp
                                <img src="{{ asset('assets/vendor/images/products') }}/{{$imgarray[0]->image}}" alt="">
                            </div>
                            <div class="product-body">
                                @if($product->offer_price != null)
                                    <h3 class="product-price">৳ {{ number_format($product->offer_price) }} <del class="product-old-price">৳ {{ number_format($product->price) }}</del></h3>
                                @else
                                    <h3 class="product-price">৳ {{ number_format($product->price) }}</h3>
                                @endif
                                <h2 class="product-name"><a href="{{ route('pages.single_product',[$product->id]) }}">{{ $product->name }}</a></h2>
                                <div class="product-btns text-center">
                                    @if($product->stock != null)
                                        <a href="{{ route('cart.add',[$product->id]) }}" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                    @else
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
    </div>
    <!-- /section -->
@endsection
