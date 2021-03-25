<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{url('/')}}"><img src="{{ asset('/assets/logo/logo_3.png')}}" alt="logo" style="height: 60px; width:auto;"></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a class="has-arrow"  href="#"  aria-expanded="false">
                <!-- <i class="fas fa-th"></i> -->
                <div class="icon_menu">
                    <img src="{{asset('img/menu-icon/dashboard.svg')}}" alt="">
                </div>
                <span>Dashboard</span>
            </a>
            <ul>
                <li><a  href="{{url('home')}}">Overview</a></li>

            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('img/menu-icon/2.svg')}}" alt="">
                </div>
                <span>Es Data</span>
            </a>
            <ul>
                <li><a href="{{url('back/supplier')}}">Suppliers</a></li>
                <li><a href="{{url('back/employee')}}">Employees</a></li>

            </ul>
        </li>
    </ul>

</nav>
