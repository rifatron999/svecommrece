<nav class="navbar navbar-expand-lg navbar-light nav-bar" style="height: 100px">
    <a href="{{ route('website.home') }}" ><img class="logo" style="width: 60px; height: 60px" src="{{ asset('assets/img/icon/logo.jpg') }}" alt="logo"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto ml-auto mt-2 mt-lg-0 nav-style">
            <li class="nav-item">
                <a class="nav-link nav_item_design" href="{{  route('website.home')  }}">Home</a>
            </li>

{{--            <li class="nav-item">--}}
{{--                <a class="nav-link nav_item_design" href="">About Us</a>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link nav_item_design" href="{{ route('website.about') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav_item_design" href="{{ route('pages.products') }}">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav_item_design" href="{{ route('website.offers') }}">Offers</a>
            </li>

            <li class="nav-item">
                <a class="nav-link nav_item_design" href="{{ route('website.contact') }}">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right">

        </ul>

    </div>
</nav>
