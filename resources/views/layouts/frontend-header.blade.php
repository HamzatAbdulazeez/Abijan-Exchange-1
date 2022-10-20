<!-- NAVBAR -->

<header id="header" class="header navbar navbar-expand-lg navbar-light navbar-floating navbar-sticky">

    <div class="container px-0 px-xl-3">

        <button class="navbar-toggler ms-n2 me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu"> <i class="ri-bar-chart-horizontal-line"></i> </button>

        <a href="/" class="navbar-brand flex-shrink-0 order-lg-1 mx-auto ms-lg-0 pe-lg-2 me-lg-4">

            <img class="d-none d-lg-block" src="{{URL::asset('assets/images/logo.png')}}" alt="{{config('app.name')}}" width="250">
            <img class="d-lg-none" src="{{URL::asset('assets/images/logo.png')}}" alt="{{config('app.name')}}" width="170">

        </a>

        <div class="d-flex align-items-center order-lg-3 ms-lg-auto">

            <a href="{{route('login')}}" class="nav-link-style fs-sm text-nowrap d-flex align-items-center"> <i class="ri-user-line me-1"></i> Sign in</a>

            <a href="{{route('register')}}" class="btn btn-primary ms-grid-gutter d-none d-lg-inline-block fs-sm"> Sign up </a>

        </div>

        <div class="offcanvas offcanvas-collapse order-lg-2" id="primaryMenu">

            <div class="offcanvas-header navbar-shadow">
                <h5 class="mt-1 mb-0">Menu</h5>
                <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">

                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a href="/about" class="nav-link fs-sm"> About Us </a>
                    </li>
                    <li class="nav-item">
                        <a href="/buy-and-sell" class=" nav-link fs-sm"> Buy &amp; Sell </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link fs-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Rates</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class=" nav-link fs-sm"> Contact </a>
                    </li>
                </ul>

            </div>

        </div>

    </div>

</header>

<!-- END NAVBAR -->