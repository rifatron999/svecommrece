<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img style="background: white;" src="{{asset('assets/vendor/images/profile picture/rifat.jpg')}}" class="img-circle" width="60"></a></p>
            <h5 class="centered">{{ Auth::user()->name }}</h5>
            <li class="sub-menu">
                <a class="@yield('DashBoard')" href="{{route('nvdashboard')}}" >
                    <i class="fa fa-home"></i>
                    <span>DashBoard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="@yield('Profile')" {{--href="{{route('nvdashboard')}}"--}} title="Restricted">
                    <i class="fa fa-user"></i>
                    <span><del>Profile</del></span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="@yield('Category_management')" href="{{route('categoryManagementView')}}" >
                    <i class="fas fa-list-ul"></i>
                    <span>Category </span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="@yield('Brand_management')" href="{{route('brandManagementView')}}" >
                    <i class="far fa-copyright"></i>
                    <span>Brand </span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="@yield('Product_management')" href="{{route('productManagementView')}}" >
                    <i class="fab fa-product-hunt"></i>
                    <span>Product </span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="@yield('Offer_management')" href="{{route('offerManagementView')}}" >
                    <i class="fas fa-gift"></i>
                    <span>Offer</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="@yield('Inventory_management')" href="{{route('inventoryManagementView')}}" >
                    <i class="fas fa-store"></i>
                    <span>Inventory</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="@yield('Order_management')">
                    <i class="fab fa-accusoft"></i>
                    <span>Order</span>
                </a>
                <ul class="sub" style="display: none;">
                    <li class="@yield('Pending_Order')" ><a  href="{{ route('PendingOrderView') }}"><i class="fas fa-list-alt"></i> Pending Orders</a></li>
                    <li class="@yield('Order')" ><a  href="{{ route('OrderView') }}"><i class="fas fa-clipboard-check"></i> Orders</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->`
    </div>
</aside>
