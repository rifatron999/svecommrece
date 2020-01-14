<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- category nav -->
            <div class="category-nav show-on-click">
                <span class="category-header">Categories <i class="fa fa-list"></i></span>
                <ul class="category-list">
                    <li class="dropdown side-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women’s Clothing <i class="fa fa-angle-right"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Clothes</h3></li>
                                        <li><a href="{{ route('pages.single') }}">Pant</a></li>
                                        <li><a href="{{ route('pages.single') }}">Skirt</a></li>
                                        <li><a href="{{ route('pages.single') }}">Jacket</a></li>
                                        <li><a href="{{ route('pages.single') }}">Salwar</a></li>
                                        <li><a href="{{ route('pages.single') }}">Kameez</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li><h3 class="list-links-title">Bag</h3></li>
                                        <li><a href="{{ route('pages.single') }}">Cross Body</a></li>
                                        <li><a href="{{ route('pages.single') }}">Shoulder Bag</a></li>
                                        <li><a href="{{ route('pages.single') }}">Clutches</a></li>
                                        <li><a href="{{ route('pages.single') }}">Top-Handle Bag</a></li>
                                        <li><a href="{{ route('pages.single') }}">Bags & Shoes</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Shoes</h3></li>
                                        <li><a href="{{ route('pages.single') }}">Flat Sandals</a></li>
                                        <li><a href="{{ route('pages.single') }}">Heels</a></li>
                                        <li><a href="{{ route('pages.single') }}">Flat Shoes</a></li>
                                        <li><a href="{{ route('pages.single') }}">Flip Flops</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row hidden-sm hidden-xs">
                                <div class="col-md-12">
                                    <hr>
                                    <a class="banner banner-1" href="{{ route('pages.single') }}">
                                        <img src="{{ asset('assets/img/banner05.jpg') }}" alt="">
                                        <div class="banner-caption text-center">
                                            <h2 class="white-color">NEW COLLECTION</h2>
                                            <h3 class="white-color font-weak">HOT DEAL</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ route('pages.single') }}">Men’s Clothing</a></li>
                    <li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Phones & Devices <i class="fa fa-angle-right"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Mobiles</h3></li>
                                        <li><a href="{{ route('pages.single') }}">Xiamoni</a></li>
                                        <li><a href="{{ route('pages.single') }}">Samsung</a></li>
                                        <li><a href="{{ route('pages.single') }}">Nokia</a></li>
                                        <li><a href="{{ route('pages.single') }}">Huawei</a></li>
                                        <li><a href="{{ route('pages.single') }}">Vivo</a></li>
                                    </ul>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Laptop</h3></li>
                                        <li><a href="{{ route('pages.single') }}">Asus</a></li>
                                        <li><a href="{{ route('pages.single') }}">HP</a></li>
                                        <li><a href="{{ route('pages.single') }}">Samsung</a></li>
                                        <li><a href="{{ route('pages.single') }}">Dell</a></li>
                                        <li><a href="{{ route('pages.single') }}">Acer</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Gaming Consoles</h3></li>
                                        <li><a href="{{ route('pages.single') }}">Playstation console</a></li>
                                        <li><a href="{{ route('pages.single') }}">Playstation games</a></li>
                                        <li><a href="{{ route('pages.single') }}">Xbox game</a></li>
                                        <li><a href="{{ route('pages.single') }}">Playstation controller</a></li>
                                    </ul>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Camera & Lenses</h3></li>
                                        <li><a href="{{ route('pages.single') }}">DSLR Lens</a></li>
                                        <li><a href="{{ route('pages.single') }}">Smartphone lens</a></li>
                                        <li><a href="{{ route('pages.single') }}">Lens Accessories</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 hidden-sm hidden-xs">
                                    <a class="banner banner-2" href="#">
                                        <img src="{{ asset('assets/img/banner04.jpg') }}" alt="">
                                        <div class="banner-caption">
                                            <h3 class="white-color">NEW<br>COLLECTION</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ route('pages.single') }}">Computer & Office</a></li>
                    <li><a href="{{ route('pages.single') }}">Consumer Electronics</a></li>
                    <li><a href="{{ route('pages.single') }}">Jewelry & Watches</a></li>
                    <li><a href="{{ route('pages.single') }}">Bags & Shoes</a></li>
                    <li><a href="{{ route('pages.single') }}">View All</a></li>
                </ul>
            </div>
            <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                <ul class="menu-list">
                    <li><a href="{{ route('pages.home') }}">Home</a></li>
                    <li><a href="{{  route('pages.single') }}">Shop</a></li>
                    <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Life Style <i class="fa fa-caret-down"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="{{ route('pages.single') }}">
                                            <img src="{{ asset('assets/img/banner06.jpg') }}" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Men's</h3>
                                            </div>
                                        </a>
                                        <hr>
                                    </div>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Men's Categories</h3></li>
                                        <li><a href="{{ route('pages.single') }}">Pant</a></li>
                                        <li><a href="{{ route('pages.single') }}">Shoe</a></li>
                                        <li><a href="{{ route('pages.single') }}">Bag</a></li>
                                        <li><a href="{{ route('pages.single') }}">T-shirt</a></li>
                                        <li><a href="{{ route('pages.single') }}">Jacket</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="{{ route('pages.single') }}">
                                            <img src="{{ asset('assets/img/banner07.jpg') }}" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Women’s</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Women's Categories</h3></li>
                                        <li><a href="{{ route('pages.single') }}">Saree</a></li>
                                        <li><a href="{{ route('pages.single') }}">Clothing</a></li>
                                        <li><a href="{{ route('pages.single') }}">Weeding dress</a></li>
                                        <li><a href="{{ route('pages.single') }}">Salwar kameez</a></li>
                                        <li><a href="{{ route('pages.single') }}">Bags & Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="{{ route('pages.single') }}">
                                            <img src="{{ asset('assets/img/banner08.jpg') }}" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Accessories</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">MOBILE ACCESSORIES</h3></li>
                                        <li><a href="{{ route('pages.single') }}">Headphone</a></li>
                                        <li><a href="{{ route('pages.single') }}">Data Cable</a></li>
                                        <li><a href="{{ route('pages.single') }}">Power Bank</a></li>
                                        <li><a href="{{ route('pages.single') }}">Memory Card</a></li>
                                        <li><a href="{{ route('pages.single') }}">Screen Protector</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="{{ route('pages.single') }}">
                                            <img src="{{ asset('assets/img/banner16.jpg') }}" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Baby's</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Baby's Categories</h3></li>
                                        <li><a href="{{ route('pages.single') }}">Feeding</a></li>
                                        <li><a href="{{ route('pages.single') }}">Baby Gear</a></li>
                                        <li><a href="{{ route('pages.single') }}">Nursery</a></li>
                                        <li><a href="{{ route('pages.single') }}">Toys</a></li>
                                        <li><a href="{{ route('pages.single') }}">Baby sitting</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ route('pages.single') }}">Sales</a></li>
                    <li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
                        <ul class="custom-menu">
                            <li><a href="{{ route('pages.home') }}">Home</a></li>
                            <li><a href="{{ route('pages.products') }}">Products</a></li>
                            <li><a href="{{ route('pages.single_product') }}">Product Details</a></li>
                            <li><a href="{{ route('pages.checkout') }}">Checkout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /NAVIGATION -->
