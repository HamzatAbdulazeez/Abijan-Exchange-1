@extends('layouts.admin-frontend')

@section('page-content')
@include('sweetalert::alert')
<!-- [ Layout container ] Start -->
<div class="layout-container">
    <!-- [ Layout navbar ( Header ) ] Start -->
    @includeIf('layouts.admin-navbar')
    <!-- [ Layout navbar ( Header ) ] End -->

    <!-- [ Layout content ] Start -->
    <div class="layout-content">

        <!-- [ content ] Start -->
        <!--/ menu  -->
        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">
                <!-- page title  -->
                <div class="row">
                    <div class="row crypto-currency">
                        <div class="col-12">
                            <div class="card card-statistics p-0 owl-wrapper">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-xs-2 text-center text-xxl-left bg-primary px-3 py-3">
                                        <span class="text-white">Price Overview</span>
                                        <span class="badge badge-light-inverse ml-xxl-4">50.12%</span>
                                    </div>
                                    <div class="col-xs-10 py-3 py-xs-0">
                                        <div class="owl-carousel owl-theme pl-4" data-nav-dots="false" data-items="5" data-xl-items="4" data-lg-items="3" data-md-items="2" data-sm-items="2" data-xs-items="2" data-xx-items="1">
                                            <div class="item d-flex align-items-center">
                                                <p class="d-flex align-items-center mr-3">
                                                    <i class="bi bi-currency-bitcoin text-warning font-18 mr-1"></i>Bitcoin
                                                </p>
                                                <p class="d-flex align-items-center">$4,465.65 <span class="ml-2 text-danger">-1.26% <i class="fa fa-level-down"></i></span></p>
                                            </div>
                                            <div class="item d-flex align-items-center">
                                                <p class="d-flex align-items-center mr-3"><i class="fa-brands fa-ethereum text-warning font-18 mr-1"></i> Ethereum </p>
                                                <p class="d-flex align-items-center">$2,495.45 <span class="ml-2 text-danger">-1.26% <i class="fa fa-level-down"></i></span></p>
                                            </div>
                                            <div class="item d-flex align-items-center">
                                                <p class="d-flex align-items-center mr-3"><i class="bi bi-arrow-repeat text-info font-18 mr-1"></i> Swap </p>
                                                <p class="d-flex align-items-center">$5,654.45 <span class="ml-2 text-success">-1.26% </span></p>
                                            </div>
                                            <div class="item d-flex align-items-center">
                                                <p class="d-flex align-items-center mr-3"><i class="bi bi-coin text-success font-18 mr-1"></i> P2P </p>
                                                <p class="d-flex align-items-center">$3,652.54 <span class="ml-2 text-success">-1.26% </span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6 mb-30">
                            <div class="card card-statistics h-100 mb-0">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="card-heading">
                                        <h4 class="card-title">Seller Request</h4>
                                    </div>
                                    <div class="dropdown">
                                        <a class="p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti ti-more-alt"></i>
                                        </a>
                                        <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                            <h6 class="mb-1">Export</h6>
                                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S/N</th>
                                                    <th scope="col">Full Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone Number</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td>Hamzat Abdulazeez</td>
                                                    <td>greenmouse@gmail.com</td>
                                                    <td>09068831216</td>
                                                    <td>1/11/2022</td>
                                                    <td><span style="font-size: 11px; background: red;padding: 5px;border-radius: 5px;color: #fff;font-weight: 600;text-transform: uppercase;">Pending</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 mb-30">
                            <div class="card card-statistics h-100 mb-0">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="card-heading">
                                        <h4 class="card-title">Buyer Request</h4>
                                    </div>
                                    <div class="dropdown">
                                        <a class="p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti ti-more-alt"></i>
                                        </a>
                                        <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                            <h6 class="mb-1">Export</h6>
                                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                                            <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S/N</th>
                                                    <th scope="col">Full Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone Number</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td>Hamzat Abdulazeez</td>
                                                    <td>greenmouse@gmail.com</td>
                                                    <td>09068831216</td>
                                                    <td>31/10/2022</td>
                                                    <td>500</td>
                                                    <td><span style="font-size: 11px; background: green;padding: 5px;border-radius: 5px;color: #fff;font-weight: 600;text-transform: uppercase;">Approved</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-xxl-12 mb-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-heading">
                                            <h4 class="card-title">Recent Trade History</h4>
                                        </div>
                                        <div class="dropdown">
                                            <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti ti-more-alt"></i>
                                            </a>
                                            <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                                <h6 class="mb-1">Export</h6>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="tab nav-border-bottom">
                                            <ul class="nav nav-tabs nav-fill" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" id="home-01-tab" data-toggle="tab" href="#home-01" role="tab" aria-controls="home-01" aria-selected="true">
                                                        <b>Buying</b> </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-01-tab" data-toggle="tab" href="#profile-01" role="tab" aria-controls="profile-01" aria-selected="false"><b>Selling</b> </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane table-responsive fade active show" id="home-01" role="tabpanel" aria-labelledby="home-01-tab">
                                                    <table class="table table-borderless crypto-table mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Price per Coin</th>
                                                                <th scope="col">Amount</th>
                                                                <th scope="col">Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>$4948.89 </td>
                                                                <td>0.123</td>
                                                                <td>12/01/2018</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$1562.45 </td>
                                                                <td>1.45</td>
                                                                <td>11/02/2018</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$7856.23 </td>
                                                                <td>0.12</td>
                                                                <td>16/03/2018</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$6592.36 </td>
                                                                <td>1.44</td>
                                                                <td>20/04/2018</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$5894.35 </td>
                                                                <td>5.12</td>
                                                                <td>26/08/2018</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$6598.89 </td>
                                                                <td>6.22</td>
                                                                <td>12/12/2018</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane table-responsive fade" id="profile-01" role="tabpanel" aria-labelledby="profile-01-tab">
                                                    <table class="table table-borderless crypto-table mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Price per Coin</th>
                                                                <th scope="col">Amount</th>
                                                                <th scope="col">Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>$2248.89 </td>
                                                                <td>0.143</td>
                                                                <td>12/02/2018</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$3562.45 </td>
                                                                <td>1.75</td>
                                                                <td>11/02/2018</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$2856.23 </td>
                                                                <td>0.42</td>
                                                                <td>14/02/2018</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$3592.36 </td>
                                                                <td>1.84</td>
                                                                <td>20/02/2018</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$1894.35 </td>
                                                                <td>3.12</td>
                                                                <td>26/02/2018</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$4598.89 </td>
                                                                <td>4.22</td>
                                                                <td>28/02/2018</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ content ] End -->

        <!-- [ Layout footer ] Start -->
        @includeIf('layouts.admin-footer')
        <!-- [ Layout footer ] End -->
    </div>
    <!-- [ Layout content ] Start -->
</div>
<!-- [ Layout container ] End -->
@endsection