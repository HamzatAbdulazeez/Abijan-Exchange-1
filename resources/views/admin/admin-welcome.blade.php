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
                <div class="row ">
                    <div class="col-12">
                        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                            <div class="page_title_left mb_10">
                                <h3 class="mb-0">Super Admin Dashboard</h3>
                            </div>
                            <!-- <div class="page_title_right">
                                <div class="dropdown CRM_dropdown  mr_5 mb_10">
                                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Navigation
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="buynsell">Buy & Sell</a>
                                        <a class="dropdown-item" href="{{route('deposit')}}">Deposit Naira</a>
                                        <a class="dropdown-item" href="{{route('naira')}}">Withdraw Naira</a>
                                        <a class="dropdown-item" href="wallet">Send Bitcoin</a>
                                        <a class="dropdown-item" href="wallet_receive">Receive Bitcoin</a>
                                        <a class="dropdown-item" href="#goTopriceList">Price List</a>
                                    </div>
                                </div>
                                <a href="logout" class="white_btn mb_10 red_btn">Log Out</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="counting">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="category">
                                        <h1>
                                            Total No. of Users
                                        </h1>
                                        <h6>
                                            {{$users->count()}}
                                        </h6>
                                        <p>
                                            Users
                                        </p>
                                        <img src="{{URL::asset('admin/libraries/team.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="category">
                                        <h1>
                                            Total
                                            Of Naira Wallet
                                        </h1>
                                        <h6>
                                            5000
                                        </h6>
                                        <p>
                                            Users
                                        </p>
                                        <img src="{{URL::asset('admin/libraries/nairaa.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="category">
                                        <h1>
                                            Bitcoin Wallet
                                        </h1>
                                        <h6>
                                            1000
                                        </h6>
                                        <p>
                                            Users
                                        </p>
                                        <img src="{{URL::asset('admin/libraries/wallet.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <div class="card-heading">
                                    <h4 class="card-title">View all users</h4>
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
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($users->count() > 0)
                                                @foreach ($users as $item)
                                                    <tr>
                                                        <th scope="row">#</th>
                                                        <td>{{$item->profile->firstname}} {{$item->profile->surname}}</td>
                                                        <td>{{$item->email}}</td>
                                                        <td>{{$item->profile->phone_no}}</td>
                                                        <td>
                                                            @if ($item->profile->phone_no)
                                                                Verified
                                                            @else
                                                                <span style="font-size: 11px; background: red;padding: 5px;border-radius: 5px;color: #fff;font-weight: 600;text-transform: uppercase;">Not Verified</span>
                                                            @endif
                                                        </td>
                                                        <td>Edit</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td style="white-space:nowrap">No Data yet</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 mb-30">
                        <div class="card card-statistics h-100 mb-0">
                            <div class="card-header d-flex justify-content-between">
                                <div class="card-heading">
                                    <h4 class="card-title">Trade History</h4>
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
                                                        <td>12/01/2023</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$1562.45 </td>
                                                        <td>1.45</td>
                                                        <td>11/02/2023</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$7856.23 </td>
                                                        <td>0.12</td>
                                                        <td>16/03/2023</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$6592.36 </td>
                                                        <td>1.44</td>
                                                        <td>20/04/2023</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$5894.35 </td>
                                                        <td>5.12</td>
                                                        <td>26/08/2023</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$6598.89 </td>
                                                        <td>6.22</td>
                                                        <td>12/12/2023</td>
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
                                                        <td>12/02/2023</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$3562.45 </td>
                                                        <td>1.75</td>
                                                        <td>11/02/2023</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$2856.23 </td>
                                                        <td>0.42</td>
                                                        <td>14/02/2023</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$3592.36 </td>
                                                        <td>1.84</td>
                                                        <td>20/02/2023</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$1894.35 </td>
                                                        <td>3.12</td>
                                                        <td>26/02/2023</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$4598.89 </td>
                                                        <td>4.22</td>
                                                        <td>28/02/2023</td>
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
        <!-- [ content ] End -->

        <!-- [ Layout footer ] Start -->
        @includeIf('layouts.admin-footer')
        <!-- [ Layout footer ] End -->
    </div>
    <!-- [ Layout content ] Start -->
</div>
<!-- [ Layout container ] End -->
@endsection
