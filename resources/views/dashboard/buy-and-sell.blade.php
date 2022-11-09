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
                                            <h4 class="m-0">Buy &amp; Sell</h4><br>
                                            <ul class="nav nav-pills custom_bootstrap_nav">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#quickbuydiv" data-toggle="tab">Buy
                                                        E-Currency</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#quickselldiv" data-toggle="tab">Sell
                                                        E-Currency</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('buynsell') }}"
                                                        style="text-decoration: underline;color: #9f0fd9 !important;"
                                                        data-toggle="modal" data-target="#pricelist">Today's Price List</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-content">
                                   @if (Auth::user()->bank->bvn == null)
                                        <div class="white_card_body tab-pane fade active show" id="quickbuydiv">
                                            <div class="exchange_widget">
                                                <form id="myBuyform" class="currency_validate">
                                                    <div class="form-group buyprice">Buy 1 BTC @
                                                        ₦{{ number_format(settings()->btc_buy_rate) }}.00</div>
                                                    <div class="form-group">
                                                        <label>Currency</label>
                                                        <div class="input-group ">
                                                            <select name="currency_buy" id="currency_buy"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="Bitcoin" selected="selected"
                                                                    data-value="BTC" value="Bitcoin">Bitcoin</option>
                                                                <option data-value="PM" value="Perfect Money">Perfect Money
                                                                </option>
                                                                <option data-value="ETH" value="Ethereum">Ethereum</option>
                                                                <option data-value="TRC20" value="USDT TRC20">USDT TRC20
                                                                </option>
                                                                <option data-value="BCH" value="bitcoin Cash">bitcoin Cash
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <p class="formText verifyText"><a
                                                            href="/dashboard/settings?type=verify_me"><b>Click here</b></a><b> to
                                                            verify your identity to be able to buy.</b></p>
                                                    <p class="formText">After verification, you can buy instantly.</p>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="white_card_body tab-pane fade" id="quickselldiv">
                                            <div class="exchange_widget">
                                                <div class="form-group buyprice">Sell 1 BTC @
                                                    ₦{{ number_format(settings()->btc_sell_rate) }}.00</div>
                                                <div class="form-group">
                                                    <label>Currency</label>
                                                    <div class="input-group ">
                                                        <select name="currency_sell" id="currency_sell"
                                                            class="form-control nice_Select" style="display: none;">
                                                            <option data-display="Bitcoin" selected="selected"
                                                                data-value="BTC" value="Bitcoin">Bitcoin</option>
                                                            <option data-value="PM" value="Perfect Money">Perfect Money
                                                            </option>
                                                            <option data-value="ETH" value="Ethereum">Ethereum</option>
                                                            <option data-value="TRC20" value="USDT TRC20">USDT TRC20
                                                            </option>
                                                            <option data-value="BCH" value="bitcoin Cash">bitcoin Cash
                                                            </option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <p class="formText verifyText"><a href="/dashboard/settings?type=verify_me"><b>Click
                                                            here</b></a><b> to verify your identity to be able to buy.</b>
                                                </p>
                                                <p class="formText">After verification, you can buy instantly.</p>
                                            </div>
                                        </div>
                                    @else
                                        <div class="white_card_body tab-pane fade active show" id="quickbuydiv">
                                            <div class="exchange_widget">
                                                <form id="myBuyform" class="currency_validate">
                                                    <div class="form-group buyprice">Buy 1 BTC @
                                                        ₦{{ number_format(getCurrentBtcDollar() * rates()[0]['buy_rate'], 2) }}</div>
                                                    <div class="form-group">
                                                        <label>Currency</label>
                                                        <div class="input-group ">
                                                            <select name="currency_buy" id="currency_buy"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="Bitcoin" selected="selected"
                                                                    data-value="BTC" value="Bitcoin">Bitcoin</option>
                                                                <option data-value="PM" value="Perfect Money">Perfect Money
                                                                </option>
                                                                <option data-value="ETH" value="Ethereum">Ethereum</option>
                                                                <option data-value="TRC20" value="USDT TRC20">USDT TRC20
                                                                </option>
                                                                <option data-value="BCH" value="bitcoin Cash">bitcoin Cash
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="buyfrom_div">
                                                        <label id="buyfromlabel">Pay With</label>
                                                        <div class="input-group" id="buyfrom_btc">
                                                            <select name="buy_from" id="buy_from"
                                                                class="form-control nice_Select buy_from"
                                                                style="display: none;">
                                                                <option data-display="Naira Wallet" value="Naira Wallet"
                                                                    selected="selected">Naira Wallet</option>
                                                            </select>

                                                        </div>
                                                        <div class="input-group" style="display: none;"
                                                            id="buyfrom_account">
                                                            <select name="buy_from_acct" id="buy_from_acct"
                                                                class="form-control nice_Select buy_from_acct"
                                                                style="display: none;">
                                                                <option data-display="Naira Wallet" value="Naira Wallet"
                                                                    selected="selected">Naira Wallet</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Enter your amount</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <select id="currencyBuy"
                                                                    class="form-control input-group-text">
                                                                    <option value="USD" data-display="USD"
                                                                        selected="selected">USD</option>
                                                                    <option value="BTC">BTC</option>
                                                                    <option value="NGN">NGN</option>
                                                                </select>
                                                            </div>
                                                            <input type="text" name="amountBuy" class="form-control"
                                                                id="amountBuy">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-between mt-3 ">
                                                            <p class="mb-0" id="ecurrbuy"></p>
                                                            <p class="mb-0" id="ecurrbuy2"></p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group acctInfodivbuy" id="acctnodiv_buy"
                                                        style="display: none;">
                                                        <label id="header_acct_buy"></label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" name="acctnoBuy"
                                                                class="form-control acctnoCheck" id="acctnoBuy">
                                                        </div>
                                                    </div>
                                                    <div class="form-group acctInfodivbuy" id="acctnamediv_buy"
                                                        style="display: none;">
                                                        <label id="header_acctname_buy"></label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" name="acctnameBuy"
                                                                class="form-control acctnameCheck" id="acctnameBuy">
                                                        </div>
                                                    </div>
                                                    <div class="form-group availbuy">
                                                        <div class="d-flex justify-content-between mt-3 ">
                                                            <p class="mb-0 availbuy"><b>Available Balance</b></p>
                                                            <p class="mb-0 availbuy ngnbal balspan">₦{{number_format(Auth::user()->wallet->naira, 2)}}</p>
                                                        </div>
                                                    </div>
                                                    <button type="button" name="buyNowbtn" class="btn_1 w-100 buyNowbtn"
                                                        id="buyNowbtn">Buy Now <span
                                                            class="loadingText fa fa-spinner fa-spin fa-2x"
                                                            style="display:none;float:right;"
                                                            id="loadingText_buy"></span></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="white_card_body tab-pane fade" id="quickselldiv">
                                            <div class="exchange_widget">

                                                <div class="form-group buyprice">Sell 1 BTC @
                                                    ₦{{ number_format(getCurrentBtcDollar() * rates()[0]['sell_rate'], 2) }}</div>
                                                <div class="form-group">
                                                    <label>Currency</label>
                                                    <div class="input-group ">
                                                        <select name="currency_sell" id="currency_sell"
                                                            class="form-control nice_Select" style="display: none;">
                                                            <option data-display="Bitcoin" selected="selected"
                                                                data-value="BTC" value="Bitcoin">Bitcoin</option>
                                                            {{-- <option data-value="PM" value="Perfect Money">Perfect Money
                                                            </option> --}}
                                                            <option data-value="ETH" value="Ethereum">Ethereum</option>
                                                            <option data-value="TRC20" value="USDT TRC20">USDT TRC20
                                                            </option>
                                                            <option data-value="BCH" value="bitcoin Cash">bitcoin Cash
                                                            </option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <input type="hidden" name="btc_externalEnabled" id="btc_externalEnabled"
                                                    value="Enabled">
                                                <div class="form-group" id="sellfrom_div">
                                                    <label id="sellfromlabel">Sell From</label>
                                                    <div class="input-group" id="sellfrom_btc">
                                                        <select name="sell_from" id="sell_from"
                                                            class="form-control nice_Select" style="display: none;">
                                                            <option data-display="Bitcoin Balance" value="Bitcoin Balance"
                                                                selected="selected">Bitcoin Balance</option>
                                                            <option value="External Wallet">External Wallet</option>
                                                        </select>

                                                    </div>
                                                    <div class="input-group" style="display: none;"
                                                        id="sellfrom_account">
                                                        <select name="sell_from_acct" id="sell_from_acct"
                                                            class="form-control nice_Select" style="display: none;">
                                                            <option data-display="External Account"
                                                                value="External Account" selected="selected">External
                                                                Account</option>
                                                        </select>

                                                    </div>
                                                    <input type="hidden" name="pm_autoEnabled" id="pm_autoEnabled"
                                                        value="Enabled">
                                                    <input type="hidden" name="pm_manualEnabled" id="pm_manualEnabled"
                                                        value="Disabled">
                                                    <div class="input-group" style="display: none;" id="sellfrom_pm">
                                                        <select name="sell_from_pm" id="sell_from_pm"
                                                            class="form-control nice_Select" style="display: none;">
                                                            <option data-display="Automatic" value="Automatic"
                                                                selected="selected">Automatic</option>
                                                        </select>

                                                    </div>
                                                    <div class="input-group" style="display: none;" id="sellfrom_crypto">
                                                        <select name="sell_from_crypto" id="sell_from_crypto"
                                                            class="form-control nice_Select" style="display: none;">
                                                            <option value="External Wallet">External Wallet</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Enter your amount</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <select id="currencySell"
                                                                class="form-control input-group-text">
                                                                <option value="USD" data-display="USD"
                                                                    selected="selected">USD</option>
                                                                <option value="BTC">BTC</option>
                                                                <option value="NGN">NGN</option>
                                                            </select>
                                                        </div>
                                                        <input type="text" name="amountSell" class="form-control"
                                                            id="amountSell">
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <div class="d-flex justify-content-between mt-3 ">
                                                        <p class="mb-0" id="ecurrsell"></p>
                                                        <p class="mb-0" id="ecurrsell2"></p>
                                                    </div>
                                                </div>
                                                <div class="form-group acctInfodiv" id="acctnodiv"
                                                    style="display: none;">
                                                    <label id="header_acct"></label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="acctnoSell"
                                                            class="form-control acctnoCheck" id="acctnoSell">
                                                    </div>
                                                </div>
                                                <div class="form-group acctInfodiv" id="acctnamediv"
                                                    style="display: none;">
                                                    <label id="header_acctname"></label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="acctnameSell"
                                                            class="form-control acctnameCheck" id="acctnameSell">
                                                    </div>
                                                </div>
                                                <div class="form-group availsale">
                                                    <div class="d-flex justify-content-between mt-3 ">
                                                        <p class="mb-0 availsale"><b>Bitcoin Balance</b></p>
                                                        <p class="mb-0 availsale btcbal balspan">0 BTC</p>
                                                    </div>
                                                </div>
                                                <button type="button" name="sellNowbtn" class="btn_1 w-100 sellNowbtn"
                                                    id="sellNowbtn">Sell Now <span
                                                        class="loadingText fa fa-spinner fa-spin fa-2x"
                                                        style="display:none;float:right;"></span></button>


                                            </div>
                                        </div>
                                    @endif

                                    <!--end quickbuydiv-->

                                    <!--End quickselldiv-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="white_box mb_30">
                                <div class="box_header ">
                                    <div class="main-title">
                                        <h3 class="mb-0">Buy &amp; Sell FAQs</h3>
                                    </div>
                                </div>
                                <!-- accordian -->
                                <div class="accordion accordion_custom mb_50" id="accordion_ex">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn" type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    How long does a buy or sell transaction take?
                                                </a>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>Buying or Selling bitcoin is instant and automated while other
                                                    ecurrencies (or crypto) normally take sometime to process depending on
                                                    payment confirmation and availability.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    How do I get paid (naira) if I am selling?
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p> After you send funds to the wallet address or ecurrency account given to
                                                    you, your naira will be available in your (naira wallet) and you can
                                                    withdraw the Naira to your Nigeria bank account. <a
                                                        href="naira">Click here</a> to visit the withdrawal page.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    How will I receive my crypto or ecurrency if I am buying?
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>Your wallet or ecurrency account will be credited after your payment has
                                                    been confirmed. If you're buying bitcoin, the bitcoin will be available
                                                    in your internal wallet here.</p>
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
                                                            class="ti-search"></i>
                                                        <input type="search" class="" placeholder="Quick Search"
                                                            aria-controls="DataTables_Table_0"></style='display:none'>
                                                    </label></div>
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
            <div class="modal fade" id="pricelist" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-body p-0 table-responsive" style="background:#FFFFFF">
                        <p class="col text-center m-3 white">Price List for today 06/Nov/2022</p>
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td>E-currency</td>
                                    <td class="text-center"><button
                                            class="btn btn-success btn-sm px-4 rounded-0">Buy</button></td>
                                    <td class="text-center"><button
                                            class="btn btn-danger btn-sm px-4 rounded-0">Sell</button></td>
                                </tr>
                                @if (rates()->count() > 0)
                                    @foreach (rates() as $item)
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <img class="align-self-start mr-2" src="" alt=""
                                                        width="30px">
                                                    <div class="media-body">
                                                        <p class="mb-0">{{$item->e_currency}} ({{$item->port_short}}) </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"> ₦{{$item->buy_rate}}/$</td>
                                            <td class="text-center">₦{{$item->sell_rate}}/$</td>
                                        </tr>
                                    @endforeach
                                @else

                                @endif



                            </tbody>
                        </table>
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
