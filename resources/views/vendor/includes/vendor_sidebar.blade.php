<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img style="background: white;" src="{{asset('assets/vendor/images/profile picture/blankprofilepicture.jpg')}}" class="img-circle" width="60"></a></p>
            <h5 class="centered">{{ Auth::user()->name }}</h5>
            <li class="sub-menu">
                <a class="@yield('DashBoard')" href="{{route('nvdashboard')}}" >
                    <i class="fa fa-home"></i>
                    <span>DashBoard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="@yield('Category_management')" href="{{route('categoryManagementView')}}" >
                    <i class="fas fa-list-ul"></i>
                    <span>Category Management</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
