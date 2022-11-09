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
                                            <div class="owl-carousel owl-theme pl-4" data-nav-dots="false" data-items="5"
                                                data-xl-items="4" data-lg-items="3" data-md-items="2" data-sm-items="2"
                                                data-xs-items="2" data-xx-items="1">
                                                <div class="item d-flex align-items-center">
                                                    <p class="d-flex align-items-center mr-3">
                                                        <i
                                                            class="bi bi-currency-bitcoin text-warning font-18 mr-1"></i>Bitcoin
                                                    </p>
                                                    <p class="d-flex align-items-center">$4,465.65 <span
                                                            class="ml-2 text-danger">-1.26% <i
                                                                class="fa fa-level-down"></i></span></p>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <p class="d-flex align-items-center mr-3"><i
                                                            class="fa-brands fa-ethereum text-warning font-18 mr-1"></i>
                                                        Ethereum </p>
                                                    <p class="d-flex align-items-center">$2,495.45 <span
                                                            class="ml-2 text-danger">-1.26% <i
                                                                class="fa fa-level-down"></i></span></p>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <p class="d-flex align-items-center mr-3"><i
                                                            class="bi bi-arrow-repeat text-info font-18 mr-1"></i> Swap </p>
                                                    <p class="d-flex align-items-center">$5,654.45 <span
                                                            class="ml-2 text-success">-1.26% </span></p>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <p class="d-flex align-items-center mr-3"><i
                                                            class="bi bi-coin text-success font-18 mr-1"></i> P2P </p>
                                                    <p class="d-flex align-items-center">$3,652.54 <span
                                                            class="ml-2 text-success">-1.26% </span></p>
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
                                            <h4 class="card-title">Buy Request</h4>
                                        </div>
                                        <div class="dropdown">
                                            <a class="p-2" data-toggle="dropdown" aria-haspopup="true"
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
                                    <div class="card-body">
                                        <div class="table-responsive pb-4">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">S/N</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Wallet</th>
                                                        <th scope="col">Pay With</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Currency</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($buy->count() > 0)
                                                        @foreach ($buy as $item)
                                                            <tr>
                                                                <th scope="row">#</th>
                                                                <td>{{ \App\Models\User::where('id', $item->user_id)->first()->email }}
                                                                </td>
                                                                <td>
                                                                    @if ($item->currency == 'Ethereum')
                                                                        {{ $item->eth_wallet }}
                                                                    @endif
                                                                    @if ($item->currency == 'Bitcoin')
                                                                        BTC Wallet
                                                                    @endif
                                                                    @if ($item->currency == 'Perfect Money')
                                                                        {{ $item->btc_wallet }}
                                                                    @endif
                                                                    @if ($item->currency == 'USDT TRC20')
                                                                        {{ $item->usdt_wallet }}
                                                                    @endif
                                                                    @if ($item->currency == 'bitcoin Cash')
                                                                        {{ $item->bth_wallet }}
                                                                    @endif
                                                                </td>
                                                                <td>{{ $item->pay_with }}</td>
                                                                <td>{{ $item->amount }} {{ $item->unit }}</td>
                                                                <td>{{ $item->currency }}</td>
                                                                <td>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                                                </td>
                                                                <td>
                                                                    @if ($item->status == 0)
                                                                        @if ($item->currency == 'Bitcoin')
                                                                            <form action="{{ route('buy.update') }}"
                                                                            method="POST">
                                                                                @csrf
                                                                                <input type="hidden" name="id"
                                                                                value="{{ $item->id }}">
                                                                                <input type="hidden" name="user_id"
                                                                                value="{{ $item->user_id }}">
                                                                                <input type="hidden" name="type"
                                                                                value="btc">
                                                                                <input type="hidden" name="unit"
                                                                                value="{{ $item->unit }}">
                                                                                <input type="hidden" name="amount"
                                                                                value="{{ $item->amount }}">
                                                                                <button type="submit"
                                                                                    class="btn btn-success">Approve</button>
                                                                            </form>
                                                                        @else
                                                                            <form action="{{ route('buy.update') }}"
                                                                            method="POST">
                                                                                @csrf
                                                                                <input type="hidden" name="id"
                                                                                value="{{ $item->id }}">
                                                                                <button type="submit"
                                                                                    class="btn btn-success">Approve</button>
                                                                            </form>
                                                                        @endif
                                                                        
                                                                    @endif
                                                                    @if ($item->status == 2)
                                                                         @if ($item->currency == 'Bitcoin')
                                                                            <form action="{{ route('buy.update') }}"
                                                                            method="POST">
                                                                                @csrf
                                                                                <input type="hidden" name="id"
                                                                                value="{{ $item->id }}">
                                                                                <input type="hidden" name="user_id"
                                                                                value="{{ $item->user_id }}">
                                                                                <input type="hidden" name="amount"
                                                                                value="{{ $item->amount }}">
                                                                                <input type="hidden" name="type"
                                                                                value="btc">
                                                                                <input type="hidden" name="unit"
                                                                                value="{{ $item->unit }}">
                                                                                <button type="submit"
                                                                                    class="btn btn-success">Approve</button>
                                                                            </form>
                                                                        @else
                                                                            <form action="{{ route('buy.update') }}"
                                                                            method="POST">
                                                                                @csrf
                                                                                <input type="hidden" name="id"
                                                                                value="{{ $item->id }}">
                                                                                <button type="submit"
                                                                                    class="btn btn-success">Approve</button>
                                                                            </form>
                                                                        @endif
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
                                                    @endif

                                                </tbody>

                                            </table>
                                        </div>
                                        {{ $buy->links() }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 mb-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-heading">
                                            <h4 class="card-title">Sell Request</h4>
                                        </div>
                                        <div class="dropdown">
                                            <a class="p-2" data-toggle="dropdown" aria-haspopup="true"
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
                                    <div class="card-body">
                                        <div class="table-responsive pb-4">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">S/N</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Invoice Id</th>
                                                        <th scope="col">Pay With</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Currency</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($sell->count() > 0)
                                                        @foreach ($sell as $item)
                                                            <tr>
                                                                <th scope="row">#</th>
                                                                <td>{{ \App\Models\User::where('id', $item->user_id)->first()->email }}
                                                                </td>
                                                                <td>
                                                                    #{{ \App\Models\Invoice::where('order_id', $item->id)->first()->invoice_id ?? '' }}
                                                                </td>
                                                                <td>{{ $item->pay_with }}</td>
                                                                <td>{{ $item->amount }} {{ $item->unit }}</td>
                                                                <td>{{ $item->currency }}</td>
                                                                <td>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                                                </td>
                                                                <td>
                                                                    @if ($item->status == 0)
                                                                        <form action="{{ route('buy.update') }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $item->id }}">
                                                                            <button type="submit"
                                                                                class="btn btn-success">Approve</button>
                                                                        </form>
                                                                    @endif
                                                                    @if ($item->status == 2)
                                                                        <form action="{{ route('buy.update') }}"
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
                                                    @endif

                                                </tbody>

                                            </table>
                                        </div>
                                        {{ $buy->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-12 mb-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-heading">
                                            <h4 class="card-title">Sell Invoices</h4>
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
                                                                            @if($item->amount_sent == null)
                                                                                @if ($item->status == 0)
                                                                                    <span style="color: orange">Awaiting Fund</span>
                                                                                @endif
                                                                                
                                                                                @if ($item->status == 3)
                                                                                    <span
                                                                                        style="font-size: 11px; background: #fbabab;padding: 5px;border-radius: 5px;color: #e15d5d;font-weight: 600;text-transform: capitalize;">
                                                                                        Order Cancelled
                                                                                    </span>
                                                                                @endif
                                                                            @else
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
