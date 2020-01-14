<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img style="background: white;" src="{{asset('data/images/profile/profile.jpg')}}" class="img-circle" width="60"></a></p>
            <h5 class="centered">{{ Auth::user()->name }}</h5>
            <li class="sub-menu">
                <a class="@yield('DashBoard')" href="{{route('admin')}}" >
                    <i class="fa fa-home"></i>
                    <span>DashBoard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="@yield('Registration')"href="javascript:;" >
                    <i class="fa fa-window-maximize"></i>
                    <span>Registration</span>
                </a>
                <ul class="sub">
                    <li class="@yield('publish')" ><a  href="{{ route('admin_reg') }}">Publish Courses</a></li>
                </ul>
                <ul class="sub">
                    <li class="@yield('ongoing')" ><a  href="{{ route('admin_reg_ongoing') }}">Ongoing Courses</a></li>
                </ul>
                <ul class="sub">
                    <li class="@yield('running')" ><a  href="{{ route('admin_reg_running') }}">Running Courses</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
