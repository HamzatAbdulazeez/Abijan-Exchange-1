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
                                            {{$naira->count()}}
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
                                            {{$btc->count()}}
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
                                <div class="table-responsive pb-5">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">S/N</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone Number</th>
                                                <th scope="col">Gender</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($users->count() > 0)
                                                @foreach ($users as $item)
                                                    <tr>
                                                        @php
                                                            $user = \App\Models\UserProfile::where('user_id', $item->id)->first();
                                                            if($user == null){
                                                                $true = false;
                                                            }
                                                            else{
                                                                $true = true;
                                                            }
                                                        @endphp
                                                        <th scope="row">#</th>
                                                        <td>
                                                            @if ($true == true)
                                                                {{\App\Models\UserProfile::where('user_id', $item->id)->first()->firstname}} {{\App\Models\UserProfile::where('user_id', $item->id)->first()->surname}}
                                                            @endif

                                                        </td>
                                                        <td>{{$item->email}}</td>
                                                        <td>
                                                            @if ($true == true)
                                                                {{\App\Models\UserProfile::where('user_id', $item->id)->first()->phone_no}}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($true == true)
                                                                {{\App\Models\UserProfile::where('user_id', $item->id)->first()->gender}}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @php
                                                                $bvn = \App\Models\UserBank::where('user_id', $item->id)->first();
                                                                if($bvn == null){
                                                                    $bvnver = false;
                                                                }
                                                                else{
                                                                    $bvnver = true;
                                                                }
                                                            @endphp
                                                            @if ($bvnver == true)
                                                                Verified
                                                            @else
                                                                <span style="font-size: 11px; background: red;padding: 5px;border-radius: 5px;color: #fff;font-weight: 600;text-transform: uppercase;">Not Verified</span>
                                                            @endif
                                                        </td>

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
                                {{ $users->links() }}
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12 mb-30">
                            <div class="card card-statistics h-100 mb-0">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="card-heading">
                                        <h4 class="card-title">Invoices</h4>
                                    </div>
                                    <div class="dropdown">
                                        <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="ti ti-more-alt"></i>
                                        </a>
                                        <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                            <h6 class="mb-1">Export</h6>
                                            <a class="dropdown-item" href="#!"><i
                                                    class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                                            <a class="dropdown-item" href="#!"><i
                                                    class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="tab nav-border-bottom">
                                        <div class="tab-content">
                                            <div class="tab-pane table-responsive fade active show pb-3" id="home-01"
                                                role="tabpanel" aria-labelledby="home-01-tab">
                                                <table class="table table-borderless crypto-table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Invoice Id</th>
                                                            <th scope="col">email</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Currency</th>
                                                            <th scope="col">Fund Method</th>
                                                            <th scope="col">Fund Amount</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Fund Date</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if ($inv->count() > 0)
                                                            @foreach ($inv as $item)
                                                                <tr>
                                                                    <td>#{{$item->invoice_id}} </td>
                                                                    <td>
                                                                        {{ \App\Models\User::where('id', $item->user_id)->first()->email }}
                                                                    </td>
                                                                    <td>{{$item->order_amount}} {{$item->unit}}</td>
                                                                    <td>{{$item->currency}}</td>
                                                                    <td>{{$item->fund_method}}</td>
                                                                    <td>{{$item->amount_sent}}</td>
                                                                    <td>{{$item->created_at->format('d/M/Y')}}</td>
                                                                    <td>{{$item->fund_date}}</td>
                                                                    <td>
                                                                        @if ($item->status == 0)
                                                                            <form action="{{ route('invoice.update') }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                <input type="hidden" name="id"
                                                                                    value="{{ $item->id }}">
                                                                                <button type="submit"
                                                                                    class="btn btn-success">Approve</button>
                                                                            </form>
                                                                        @endif
                                                                        @if ($item->status == 2)
                                                                            <form action="{{ route('invoice.update') }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                <input type="hidden" name="id"
                                                                                    value="{{ $item->id }}">
                                                                                <button type="submit"
                                                                                    class="btn btn-success">Approve</button>
                                                                            </form>
                                                                        @endif
                                                                        @if ($item->status == 1)
                                                                            <span
                                                                                style="font-size: 11px; background: #95ff95;padding: 5px;border-radius: 5px;color: #599d2a;font-weight: 600;text-transform: capitalize;">
                                                                                Order Approved
                                                                            </span>
                                                                        @endif

                                                                        @if ($item->status == 3)
                                                                            <span
                                                                                style="font-size: 11px; background: #fbabab;padding: 5px;border-radius: 5px;color: #e15d5d;font-weight: 600;text-transform: capitalize;">
                                                                                Order Cancelled
                                                                            </span>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @else

                                                        @endif

                                                    </tbody>

                                                </table>

                                            </div>
                                            {{ $inv->links() }}
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
