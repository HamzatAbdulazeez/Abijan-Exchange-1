<!-- [ Layout navbar ( Header ) ] Start -->
<nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x" id="layout-navbar">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <a href="/" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
        <span class="app-brand-logo demo">
            <img src="{{URL::asset('dash/assets/img/logo.png')}}" alt="Brand Logo" class="img-fluid">
        </span>
    </a>

    <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
    <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
        <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
            <i class="ion ion-md-menu text-large align-middle"></i>
        </a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
        <!-- Divider -->
        <hr class="d-lg-none w-100 my-2">

        <div class="navbar-nav align-items-lg-center ml-auto">
            <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                    <i class="feather icon-bell navbar-icon align-middle"></i>
                    <span class="badge badge-danger badge-dot indicator"></span>
                    <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                        4 New Notifications
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                            <div class="ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white"></div>
                            <div class="media-body line-height-condenced ml-3">
                                <div class="text-dark">Login from 192.168.1.1</div>
                                <div class="text-light small mt-1">
                                    Aliquam ex eros, imperdiet vulputate hendrerit et.
                                </div>
                                <div class="text-light small mt-1">12h ago</div>
                            </div>
                        </a>
                    </div>
                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>
                </div>
            </div>

            <!-- Divider -->
            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
            <div class="demo-navbar-user nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                        <img src="{{URL::asset('assets/img/avatars/1.png')}}" alt class="d-block ui-w-30 rounded-circle">
                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0">Hello {{Auth::user()->first_name}}</span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{route('profile')}}" class="dropdown-item">
                        <i class="feather icon-user text-muted"></i> &nbsp; My profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('logout')}}" class="dropdown-item">
                        <i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- [ Layout navbar ( Header ) ] End -->