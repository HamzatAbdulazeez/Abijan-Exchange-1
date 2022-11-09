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
                        <div class="col-xl-6">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h4 class="m-0">Withdraw Naira</h4><br>
                                            <ul class="nav nav-pills custom_bootstrap_nav">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#nairadiv" data-toggle="tab">Withdraw
                                                        Naira</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('deposit') }}"> Deposit Naira</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('transaction') }}"> Transactions</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-content">
                                    
                                    @if (Auth::user()->bank->bvn == null)
                                        <div class="white_card_body tab-pane fade active show" id="nairadiv">
                                            <div class="exchange_widget">
                                                <div class="form-group" id="bankacctdiv">
                                                   <label>Bank Account</label> <small style="float:right;"><a
                                                            href="/dashboard/settings?type=verify_me"><i class="fas fa-edit"></i> Add/Edit
                                                            Bank</a></small>
                                                    <div class="input-group ">
                                                        <select name="bank_name" id="bank_name"
                                                            class="form-control nice_Select" style="display: none;">

                                                            <option value="">Verify your identity to withdraw money
                                                            </option>
                                                        </select>
                                                        <div class="nice-select form-control nice_Select" tabindex="0">
                                                            <span class="current">Verify your identity to withdraw
                                                                money</span>
                                                            <div class="nice-select-search-box"><input type="text"
                                                                    class="nice-select-search" placeholder="Search...">
                                                            </div>
                                                            <ul class="list">
                                                                <li data-value="" class="option selected">Verify your
                                                                    identity
                                                                    to withdraw money</li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <p class="formText verifyText"><a href="/dashboard/settings?type=verify_me"><b>Click
                                                            here</b></a><b> to verify your identity to be able to withdraw
                                                        Naira.</b></p>
                                                <p class="formText">After verification, you can withraw you money to bank account number and get funds in your
                                                    instantly.
                                                </p>
                                            </div>
                                        </div>
                                    @else
                                    <div class="white_card_body tab-pane fade active show" id="nairadiv">
                                        <div class="exchange_widget">
                                            <form name="myWithform" id="myWithform" class="currency_validate">
                                                <div class="form-group" id="bankacctdiv">
                                                    <label>Bank Account</label> <!--<small style="float:right;"><a
                                                            href="/dashboard/settings?type=verify_me"><i class="fas fa-edit"></i> Add
                                                            Bank</a></small>-->
                                                    <div class="input-group ">
                                                        <select name="bank_name" id="bank_name"
                                                            class="form-control nice_Select" style="display: block;">
                                                            <option data-display="{{Auth::user()->bank->account_num}}" selected="" value="{{Auth::user()->bank->account_num}}" data-value="first">{{Auth::user()->bank->bank_name}}...{{substr(Auth::user()->bank->account_num , 7)}}</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Enter your amount</label>
                                                    <div class="input-group">
                                                        <input type="text" name="trf_amount" class="form-control"
                                                            id="trf_amount">
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <p class="mb-0">Transfer Fee</p>
                                                        <h6 class="mb-0 showwithfee">{{settings()->naira_withdraw_fee}}% of your withdrawal amount</h6>
                                                        <input type="hidden" name="withfee" id="withfee" value="{{settings()->naira_withdraw_fee}}">
                                                        <input type="hidden" name="fee_method" id="fee_method"
                                                            value="percentage">
                                                        <input type="hidden" name="balngn" id="balngn" value="{{Auth::user()->wallet->naira}}">
                                                        <input type="hidden" name="above_amount" id="above_amount"
                                                            value="">
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-3 hidden" id="availBal">
                                                        <p class="mb-0">Current Balance</p>
                                                        <h6 class="mb-0 ngnbal_upto balspan" id="balspanOne"></h6>

                                                    </div>
                                                    <div class="d-flex justify-content-between mt-3 hidden"
                                                        id="availBalwith">
                                                        <p class="mb-0">Balance after this withdrawal</p>
                                                        <h6 class="mb-0 ngnbal_upto balspanwith"></h6>

                                                    </div>
                                                </div>
                                                <button type="button" name="with_submit" id="with_submit"
                                                    class="btn_1 w-100">Withdraw Now <span
                                                        class="loadingText fa fa-spinner fa-spin fa-2x"
                                                        style="display:none;float:right;"
                                                        id="loadingText_with"></span></button>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="white_box mb_30">
                                <div class="box_header ">
                                    <div class="main-title">
                                        <h3 class="mb-0">Withdrawal FAQs</h3>
                                    </div>
                                </div>
                                <!-- accordian -->
                                <div class="accordion accordion_custom mb_50" id="accordion_ex">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="false" aria-controls="collapseOne">
                                                    How long does a withdrawal take?
                                                </a>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>Withdrawal to bank accounts normally take about 10 to 30 minutes to be
                                                    processed, on occasion it can take a few hours depending on the
                                                    interbank network.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Can I withdraw to someone's bank account?
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>No, you can't withdraw naira to someone's bank account. If you wish to
                                                    send the money to someone else, please transfer to them through another
                                                    means.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Withdrawal fees
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>When withdrawing from your Abijan Exchange wallet to your bank account, a
                                                    transfer fee is reserved and deducted from your naira wallet balance.
                                                </p>

                                                <p>Current transfer fee: 0.2% of your withdrawal amount</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- accordian -->
                            </div>
                        </div>
                        <div class="col-lg-12" style="display:none;">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_header">
                                    <div class="white_box_tittle list_header mb-0">
                                        <h4>Send Bitcoin</h4>
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
                                    <div class="QA_section">
                                        <div class="QA_table mb_30">
                                            <!-- table-responsive -->
                                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                                <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><i
                                                            class="ti-search"></i><input type="search" class=""
                                                            placeholder="Quick Search" aria-controls="DataTables_Table_0">
                                                        </style='display:none'></label></div>
                                                <table class="table lms_table_active3 dataTable no-footer dtr-inline"
                                                    id="DataTables_Table_0" role="grid"
                                                    aria-describedby="DataTables_Table_0_info" style="width: 0px;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th scope="col" class="sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 0px;"></th>
                                                            <th scope="col" class="sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 0px;">Time</th>
                                                            <th scope="col" class="sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 0px;">Description</th>
                                                            <th scope="col" class="sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 0px;">Status</th>
                                                            <th scope="col" class="sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 0px;">Amount (NGN)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>











                                                        <tr role="row" class="odd">
                                                            <th scope="row" tabindex="0">
                                                                <div class="trade d-flex align-items-center">
                                                                    <span class="idtbale">1001</span>
                                                                    <span class="sold-thumb"><i
                                                                            class="ti-arrow-up"></i></span>
                                                                    <span class="ml-3 badge badge-danger">Sent</span>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <span>May 28, 04:10 pm</span>
                                                            </td>
                                                            <td>HJD9R034JNN3N43</td>
                                                            <td><a href="#" class="status_btn">completed</a></td>
                                                            <td>50,202.10 </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <th scope="row" tabindex="0">
                                                                <div class="trade d-flex align-items-center">
                                                                    <span class="idtbale">1000</span>
                                                                    <span class="buy-thumb"><i
                                                                            class="ti-arrow-down"></i></span>
                                                                    <span class="ml-3 badge badge-success">Received</span>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <span>September 28, 2020 6:05 pm</span>
                                                            </td>
                                                            <td>HJD9R034JNN3N43</td>
                                                            <td><a href="#" class="status_btn">completed</a></td>
                                                            <td>50,202.10</td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <th scope="row" tabindex="0">
                                                                <div class="trade d-flex align-items-center">
                                                                    <span class="idtbale">1002</span>
                                                                    <span class="sold-thumb"><i
                                                                            class="ti-arrow-up"></i></span>
                                                                    <!-- <span class="ml-3">Sent</span> -->
                                                                    <span class="ml-3 badge badge-danger">Sent</span>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                gdh-34um3bbj</td>
                                                            <td>HJD9R034JNN3N43</td>
                                                            <td><a href="#"
                                                                    class="status_btn cancel_btn">refunded</a></td>
                                                            <td>50,202.10</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <th scope="row" tabindex="0">
                                                                <div class="trade d-flex align-items-center">
                                                                    <span class="idtbale">1003</span>
                                                                    <span class="buy-thumb"><i
                                                                            class="ti-arrow-down"></i></span>
                                                                    <span class="ml-3 badge badge-success">Received</span>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                gdh-34um3bbj</td>
                                                            <td>HJD9R034JNN3N43</td>
                                                            <td><a href="#"
                                                                    class="status_btn cancel_btn">cancelled</a></td>
                                                            <td>50,202.10</td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <th scope="row" tabindex="0">
                                                                <div class="trade d-flex align-items-center">
                                                                    <span class="idtbale">1004</span>
                                                                    <span class="buy-thumb"><i
                                                                            class="ti-arrow-down"></i></span>
                                                                    <span class="ml-3 badge badge-success">Received</span>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                gdh-34um3bbj</td>
                                                            <td>HJD9R034JNN3N43</td>
                                                            <td><a href="#" class="status_btn">completed</a></td>
                                                            <td>50,202.10</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <th scope="row" tabindex="0">
                                                                <div class="trade d-flex align-items-center">
                                                                    <span class="idtbale">1005</span>
                                                                    <span class="sold-thumb"><i
                                                                            class="ti-arrow-up"></i></span>
                                                                    <!-- <span class="ml-3">Sent</span> -->
                                                                    <span class="ml-3 badge badge-danger">Sent</span>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                gdh-34um3bbj</td>
                                                            <td>HJD9R034JNN3N43</td>
                                                            <td><a href="#"
                                                                    class="status_btn pending_btn">pending</a></td>
                                                            <td>50,202.10</td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <th scope="row" tabindex="0">
                                                                <div class="trade d-flex align-items-center">
                                                                    <span class="idtbale">1006</span>
                                                                    <span class="buy-thumb"><i
                                                                            class="ti-arrow-down"></i></span>
                                                                    <span class="ml-3 badge badge-success">Received</span>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                gdh-34um3bbj</td>
                                                            <td>HJD9R034JNN3N43</td>
                                                            <td><a href="#"
                                                                    class="status_btn cancel_btn">cancelled</a></td>
                                                            <td>50,202.10</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <th scope="row" tabindex="0">
                                                                <div class="trade d-flex align-items-center">
                                                                    <span class="idtbale">1007</span>
                                                                    <span class="buy-thumb"><i
                                                                            class="ti-arrow-down"></i></span>
                                                                    <span class="ml-3 badge badge-success">Received</span>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                gdh-34um3bbj</td>
                                                            <td>HJD9R034JNN3N43</td>
                                                            <td><a href="#" class="status_btn">completed</a></td>
                                                            <td>50,202.10</td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <th scope="row" tabindex="0">
                                                                <div class="trade d-flex align-items-center">
                                                                    <span class="idtbale">1008</span>
                                                                    <span class="sold-thumb"><i
                                                                            class="ti-arrow-up"></i></span>
                                                                    <!-- <span class="ml-3">Sent</span> -->
                                                                    <span class="ml-3 badge badge-danger">Sent</span>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                gdh-34um3bbj</td>
                                                            <td>HJD9R034JNN3N43</td>
                                                            <td><a href="#" class="status_btn">completed</a></td>
                                                            <td>50,202.10</td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <th scope="row" tabindex="0">
                                                                <div class="trade d-flex align-items-center">
                                                                    <span class="idtbale">1009</span>
                                                                    <span class="buy-thumb"><i
                                                                            class="ti-arrow-down"></i></span>
                                                                    <span class="ml-3 badge badge-success">Received</span>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                gdh-34um3bbj</td>
                                                            <td>HJD9R034JNN3N43</td>
                                                            <td><a href="#" class="status_btn">completed</a></td>
                                                            <td>50,202.10</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                                    aria-live="polite">Showing 1 to 10 of 11 records</div>
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="DataTables_Table_0_paginate"><a
                                                        class="paginate_button previous disabled"
                                                        aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"
                                                        id="DataTables_Table_0_previous"><i
                                                            class="ti-arrow-left"></i></a><span><a
                                                            class="paginate_button current"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="1"
                                                            tabindex="0">1</a><a class="paginate_button "
                                                            aria-controls="DataTables_Table_0" data-dt-idx="2"
                                                            tabindex="0">2</a></span><a class="paginate_button next"
                                                        aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0"
                                                        id="DataTables_Table_0_next"><i class="ti-arrow-right"></i></a>
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
            @includeIf('layouts.dashboard-footer')
            <!-- [ Layout footer ] End -->
        </div>
        <!-- [ Layout content ] Start -->
    </div>
    <!-- [ Layout container ] End -->
@endsection
