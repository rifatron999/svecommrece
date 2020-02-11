<nav class="top_nav navbar navbar-default" style="height: 70px">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('website.home') }}"><img class="logo" style="width: 120px; height: 40px" src="{{ asset('assets/website/images/logo/nobinLogo.png') }}" alt="logo"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav menus" style="padding: 12px 12px;text-align: center;width: 50%;margin-left: auto;margin-right: auto;">
                <li class=""><a href="{{  route('website.home')  }}">Home</a></li>
                <li class=""><a href="{{ route('website.about') }}">About us</a></li>
                <li class=""><a href="{{ route('pages.products') }}">Products</a></li>
                <li class=""><a href="{{ route('website.offers') }}">Offers</a></li>
                <li class=""><a href="{{ route('website.contact') }}">Contact Us</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
