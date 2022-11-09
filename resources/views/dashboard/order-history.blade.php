@extends('layouts.dashboard-frontend')

@section('page-content')
    <!-- [ Layout container ] Start -->
    <div class="layout-container">
        <!-- [ Layout navbar ( Header ) ] Start -->
        @includeIf('layouts.dashboard-navbar')
        <!-- [ Layout navbar ( Header ) ] End -->

        <!-- [ Layout content ] Start -->
        <div class="layout-content">

            <!-- [ content ] Start -->
            <!--/ menu  -->
            <div class="main_content_iner overly_inner ">
                <div class="container-fluid p-0 ">
                    <!-- page title  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_header">
                                    <h4>Order History</h4><br>
                                    <div class="white_box_tittle list_header mb-0">
                                        The list below shows all your buy and sell orders.
                                        <br>
                                        <div class="box_right d-flex lms_block">
                                            <div class="serach_field_2">
                                                <div class="search_inner">
                                                    <form active="#">
                                                        <div class="search_field">
                                                            <input type="text" class="tablesearch"
                                                                placeholder="Search content here...">
                                                        </div>
                                                        <button type="submit"> <i class="ti-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- <div class="add_button ml-10">
                                            <a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1">Add New</a>
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="white_card_body">

                                    <div class="QA_section transaction-table">
                                        <div class="QA_table mb_30">
                                            <!-- table-responsive -->
                                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                    <label>
                                                        <i class="ti-search"></i>
                                                        <input type="search" class=""placeholder="Quick Search"
                                                            aria-controls="DataTables_Table_0">
                                                    </label>
                                                </div>
                                                <table class="table lms_table_active3 dataTable no-footer dtr-inline"
                                                    id="DataTables_Table_0" role="grid"
                                                    aria-describedby="DataTables_Table_0_info" style="width: 980px;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th scope="col" class="sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 82px;"></th>
                                                            <th scope="col" class="sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 192px;">Time</th>
                                                            <th scope="col" class="sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 143px;">Currency</th>
                                                            <th scope="col" class="sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 222px;">Status</th>
                                                            <th scope="col" class="sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 88px;">Amount ($)</th>
                                                            {{-- <th scope="col" class="sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 71px;">Info</th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if ($order->count() > 0)
                                                            @foreach ($order as $i)
                                                                <tr role="row" class="odd">
                                                                    @if ($i->type == 'Sell')
                                                                        <td tabindex="0">
                                                                            <div class="trade d-flex align-items-center">
                                                                                <span
                                                                                    class="idtbale">{{ $i->id }}</span>
                                                                                <span class="sold-thumb"><i
                                                                                        class="ti-arrow-down"></i></span>
                                                                                <span
                                                                                    class="ml-3 badge badge-danger">{{ $i->type }}</span>
                                                                            </div>
                                                                        </td>
                                                                    @endif
                                                                    @if ($i->type == 'Buy')
                                                                        <td tabindex="0">
                                                                            <div class="trade d-flex align-items-center">
                                                                                <span
                                                                                    class="idtbale">{{ $i->id }}</span>
                                                                                <span class="buy-thumb"><i
                                                                                        class="ti-arrow-up"></i></span>
                                                                                <span
                                                                                    class="ml-3 badge badge-success">{{ $i->type }}</span>
                                                                            </div>
                                                                        </td>
                                                                    @endif

                                                                    <td>
                                                                        <span>{{ $i->created_at->format('d/M/Y') }} at
                                                                            {{ $i->created_at->format('h:m:s a') }}</span>
                                                                    </td>
                                                                    <td><img class="small_img" src="../images/pm.png"
                                                                            alt="">
                                                                        {{ $i->currency }} </td>
                                                                    <td>
                                                                        <span>
                                                                            @php
                                                                                $in = App\Models\Invoice::where('user_id', Auth::user()->id)
                                                                                    ->where('order_id', $i->id)
                                                                                    ->first();
                                                                                if ($in != null) {
                                                                                    $ins = true;
                                                                                } else {
                                                                                    $ins = false;
                                                                                }
                                                                            @endphp
                                                                            @if ($in == true AND $in->status = 0)
                                                                                <a href="#"
                                                                                    data-value="{{ $in->invoice_id }}"
                                                                                    class="invoice_me"
                                                                                    title="Send Notice">Send Notice</a>
                                                                                OR
                                                                            @endif
                                                                            @if ($i->status == 3)
                                                                                <a href="#"
                                                                                    class="status_btn cancel_btn"
                                                                                    title="Order Canceled">Order
                                                                                    Cancelled</a>
                                                                            @endif
                                                                            @if ($i->status == 0)
                                                                                <a href="#"
                                                                                    class="status_btn cancel_btn cancel_me_sell"
                                                                                    data-value="{{ $i->id }}"
                                                                                    title="Click here to cancel this order">Cancel
                                                                                    Order</a>
                                                                            @endif
                                                                            @if ($i->status == 1)
                                                                                <a href="#"
                                                                                    class="status_btn success_btn"
                                                                                    title="Order Succeeded">Order
                                                                                    Succeeded</a>
                                                                            @endif
                                                                            @if ($i->status == 2)
                                                                                <a href="#"
                                                                                    class="status_btn success_btn"
                                                                                    title="Order Succeeded">In-Process</a>
                                                                            @endif
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        @if ($i->unit == 'USD')
                                                                            {{ number_format($i->amount, 2) }}
                                                                        @endif
                                                                        @if ($item->unit == "NGN")
                                                                            {{$i->amount}} NGN
                                                                        @endif
                                                                        @if ($item->unit == "BTC")
                                                                            {{number_format($i->amount, 7)}} BTC
                                                                        @endif
                                                                    </td>
                                                                    {{-- <td><a href="/dashboard/orderinfo?i={{ $i->id }}"><button
                                                                                class="btn btn-outline-info rounded-pill mb-3"
                                                                                type="button">View</button></a></td> --}}
                                                                </tr>
                                                            @endforeach
                                                        @else
                                                        @endif
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
            @includeIf('layouts.dashboard-footer')
            <!-- [ Layout footer ] End -->
        </div>
        <!-- [ Layout content ] Start -->
    </div>
    <!-- [ Layout container ] End -->
@endsection
