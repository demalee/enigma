<nav class="navbar navbar-expand-lg navbar-light theme-nav fixed-top">
    <div class="container"><a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('/assets/logo/logo_3.png')}}" alt="logo" style="height: 60px; width:auto;"></a>
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>--}}
        <div class="collapse navbar-collapse default-nav" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto" id="mymenu">
                <li class="nav-item"><a class="nav-link" href="{{url('auth/client_login')}}" data-menuanchor="contact">Login</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ES Data</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="{{url('supplier')}}">Supplier</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('employee')}}">Employee</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

