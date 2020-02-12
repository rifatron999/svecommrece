<!-- HEADER -->
<header>

    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="pull-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="logo" href="#">
{{--                        <img src="{{ asset('assets/img/icon/logo.jpg') }}" alt="">--}}
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Search -->
                <div class="header-search">
                    <form>
                        <input class="input search-input" type="text" placeholder="Enter your keyword">
{{--                        <select class="input search-categories">--}}
{{--                            <option value="0">All Categories</option>--}}
{{--                            <option value="1">Men</option>--}}
{{--                            <option value="1">Women</option>--}}
{{--                        </select>--}}
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- /Search -->
            </div>
            <div class="pull-right">
                <ul class="header-btns">
                    <!-- Account -->
                    <li class="header-account dropdown default-dropdown">
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
                        </div>
                        @if( Auth::check() )
                            <a href="" class="text-uppercase">{{ Auth::user()->name }}</a>
                            <ul class="custom-menu">
                                <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                        <i class="fa fa-unlock-alt"></i>
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        @else
                            <a href="{{ route('customer.login') }}" class="text-uppercase">Login</a>
                            <ul class="custom-menu">
                                <li><a href="{{ route('customer.login') }}"><i class="fa fa-unlock-alt"></i> Login</a></li>
                                <li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                            </ul>
                        @endif

                    </li>
                    <!-- /Account -->

                    <!-- Cart -->
                    <li class="header-cart dropdown default-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="qty">{{ Cart::count() }}</span>
                            </div>
                            <strong class="text-uppercase">My Cart:</strong>
                            <br>
                            <span>{{Cart::total()}}</span>
                        </a>
                        <div class="custom-menu">
                            <div id="shopping-cart">
                                <div class="shopping-cart-list">
{{--                                    <div class="product product-widget">--}}
{{--                                        <div class="product-thumb">--}}
{{--                                            <img src="{{ asset('assets/img/thumb-product01.jpg') }}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="product-body">--}}
{{--                                            <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>--}}
{{--                                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>--}}
{{--                                        </div>--}}
{{--                                        <button class="cancel-btn"><i class="fa fa-trash"></i></button>--}}
{{--                                    </div>--}}
{{--                                    <div class="product product-widget">--}}
{{--                                        <div class="product-thumb">--}}
{{--                                            <img src="{{ asset('assets/img/thumb-product01.jpg') }}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="product-body">--}}
{{--                                            <h3 class="product-price" id="cart_product_price">$32.50 <span class="qty">x3</span></h3>--}}
{{--                                            <h2 class="product-name" id="cart_product_name"><a href="#">Product Name Goes Here</a></h2>--}}
{{--                                        </div>--}}
{{--                                        <button class="cancel-btn"><i class="fa fa-trash"></i></button>--}}
{{--                                    </div>--}}
{{--                                    <div class="product product-widget" id="cart_div">--}}
{{--                                        <div class="product-thumb">--}}
{{--                                            <img src="{{ asset('assets/img/thumb-product01.jpg') }}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="product-body">--}}
{{--                                            <h3 class="product-price" id="cart_product_price">$32.50 <span class="qty">x3</span></h3>--}}
{{--                                            <h2 class="product-name" id="cart_product_name"><a href="#">Product Name Goes Here</a></h2>--}}
{{--                                        </div>--}}
{{--                                        <button class="cancel-btn" id="cancel_cart"><i class="fa fa-trash"></i></button>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="shopping-cart-btns">
                                    <a href="{{ route('cart.index') }}" class="main-btn">View Cart</a>
                                    <button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- /Cart -->
                    <!-- Mobile nav toggle-->
                    <li class="nav-toggle">
                        <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                    </li>
                    <!-- / Mobile nav toggle -->
                </ul>
            </div>
        </div>
        <!-- header -->
    </div>
    <!-- container -->
</header>
<!-- /HEADER -->
