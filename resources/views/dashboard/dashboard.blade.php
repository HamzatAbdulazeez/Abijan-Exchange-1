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
                <div class="row ">
                    <div class="col-12">
                        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                            <div class="page_title_left mb_10">
                                <h3 class="mb-0">Overview</h3>
                                <p>
                                    Buy, Sell, Send Bitcoin, Receive Bitcoin, etc.
                                </p>
                            </div>
                            <div class="page_title_right">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-12">

                    </div>
                    <div class="col-xl-4" id="portfoliomobile">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Your Portfolio</h3>
                                    </div>
                                    <a class="hidebalspan hidebal" href="javascript: void(0)" > <small>
                                            <i class="fa fa-eye-slash" aria-hidden="true"></i> Hide balance</small></a>

                                    <a class="hidebalspan showbal" href="javascript: void(0)" style="display:none;">
                                        <small><i class="fa fa-eye" aria-hidden="true"></i> Show balance</small></a>

                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="row justify-content-center mb_30  ">
                                    <div class="col-12 text-center">
                                        <h4 class="f_s_22 f_w_700 mb-0"><span class="totalbal balspan">₦0.00</span></h4>
                                        <p class="f_s_11 f_w_400">Total Balance</p>
                                    </div>
                                </div>
                                <div class="social_media_list">
                                    <div class="single_media d-flex justify-content-between align-items-center">
                                        <span class="mediaName"> <img src="libraries/1.svg" alt=""> Bitcoin</span>
                                        <span class="earning_amount">
                                            <a href="javascript: void(0)" title="">
                                                <h4><span class="btcbal balspan">0 BTC</span></h4>
                                            </a>
                                            <p><span class="usdbal balspan">$0.00</span></p>
                                        </span>
                                    </div>
                                    <div class="single_media d-flex justify-content-between align-items-center">
                                        <span class="mediaName"> <img src="libraries/naira.png" alt=""> Naira</span>
                                        <span class="earning_amount">
                                            <a href="javascript: void(0)" title="">
                                                <h4><span class="ngnbal balspan">₦0.00</span></h4>
                                            </a>

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8" id="order_history_desk">
                        <div class="white_card mb_30 card_height_100">
                            <div class="white_card_header ">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Order History</h3>
                                    </div>
                                    <a href="orders">
                                        <p>View all</p>
                                    </a>
                                </div>
                            </div>
                            <div class="white_card_body pt-0">
                                <div class="QA_section">
                                    <div class="QA_table mb-0 transaction-table">
                                        <!-- table-responsive -->
                                        <div class="table-responsive">
                                            <table class="table  ">
                                                <tbody>
                                                    <p>
                                                        Your recent order history will appear here.
                                                    </p>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4" id="portfoliodesk">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Your Portfolio</h3>
                                    </div>
                                    <a class="hidebalspan hidebal" href="javascript: void(0)"> <small>
                                            <i class="fa fa-eye-slash" aria-hidden="true"></i> Hide balance</small></a>
                                    <a class="hidebalspan showbal" href="javascript: void(0)" style="display:none;">
                                        <small><i class="fa fa-eye" aria-hidden="true"></i> Show balance</small></a>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="row justify-content-center mb_30  ">
                                    <div class="col-12 text-center">
                                        <h4 class="f_s_22 f_w_700 mb-0"><span class="totalbal balspan">₦0.00</span>
                                        </h4>
                                        <p class="f_s_11 f_w_400">Total Balance</p>
                                    </div>
                                </div>
                                <div class="social_media_list">
                                    <div class="single_media d-flex justify-content-between align-items-center">
                                        <span class="mediaName"> <img src="libraries/1.svg" alt=""> Bitcoin</span>
                                        <span class="earning_amount">
                                            <a href="javascript: void(0)" title="">
                                                <h4><span class="btcbal balspan">0 BTC</span></h4>
                                            </a>
                                            <p><span class="usdbal balspan">$0.00</span></p>
                                        </span>
                                    </div>
                                    <div class="single_media d-flex justify-content-between align-items-center">
                                        <span class="mediaName"> <img src="libraries/naira.png" alt=""> Naira</span>
                                        <span class="earning_amount">
                                            <a href="javascript: void(0)" title="">
                                                <h4><span class="ngnbal balspan">₦0.00</span></h4>
                                            </a>
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <!-- <h3 class="m-0">Quick Sell</h3> -->
                                        <ul class="nav nav-pills custom_bootstrap_nav">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#quickselldiv" data-toggle="tab">Quick
                                                    Sell</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#quickbuydiv" data-toggle="tab">Quick Buy</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="white_card_body tab-pane fade active show" id="quickselldiv">
                                    <div class="exchange_widget">
                                        <form id="mySellform" class="currency_validate">
                                            <div class="form-group buyprice">Sell 1 BTC @ ₦13,985,337.00</div>
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
                                                <div class="input-group" style="display: none;" id="sellfrom_account">
                                                    <select name="sell_from_acct" id="sell_from_acct"
                                                        class="form-control nice_Select" style="display: none;">
                                                        <option data-display="External Account" value="External Account"
                                                            selected="selected">External Account</option>
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
                                            <div class="form-group" style="display: none;" id="sellfrom_type">
                                                <label id="sellfromlabel2">Wallet Type</label>
                                                <div class="input-group">
                                                    <select name="sell_from_type" id="sell_from_type"
                                                        class="form-control nice_Select" style="display: none;">
                                                        <option data-display="Blockchain" value="Blockchain"
                                                            selected="selected">Blockchain</option>
                                                        <option value="Binance">Binance</option>
                                                        <option value="Coinbase">Coinbase</option>
                                                        <option value="Paxful">Paxful</option>
                                                        <option value="Others">Others</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Enter your amount</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <select id="currencySell" class="form-control input-group-text">
                                                            <option data-display="USD" value="USD" selected="selected">
                                                                USD</option>
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
                                            <div class="form-group acctInfodiv" id="acctnodiv" style="display: none;">
                                                <label id="header_acct">PM Account Number</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="acctnoSell"
                                                        class="form-control acctnoCheck" id="acctnoSell">
                                                </div>
                                            </div>
                                            <div class="form-group acctInfodiv" id="acctnamediv" style="display: none;">
                                                <label id="header_acctname">PM Account Name</label>
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
                                        </form>
                                    </div>
                                </div>
                                <!--End quickselldiv-->
                                <div class="white_card_body tab-pane fade" id="quickbuydiv">
                                    <div class="exchange_widget">
                                        <div class="form-group buyprice">Buy 1 BTC @ ₦14,660,491.20</div>
                                        <div class="form-group">
                                            <label>Currency</label>
                                            <div class="input-group ">
                                                <select name="currency_buy" id="currency_buy"
                                                    class="form-control nice_Select" style="display: none;">
                                                    <option data-display="Bitcoin" selected="selected" data-value="BTC"
                                                        value="Bitcoin">Bitcoin</option>
                                                    <option data-value="PM" value="Perfect Money">Perfect Money</option>
                                                    <option data-value="ETH" value="Ethereum">Ethereum</option>
                                                    <option data-value="TRC20" value="USDT TRC20">USDT TRC20</option>
                                                    <option data-value="BCH" value="bitcoin Cash">bitcoin Cash</option>
                                                </select>

                                            </div>
                                        </div>
                                        <p class="formText verifyText"><a href="verify_me?type=identity"><b>Click
                                                    here</a> to verify your identity to be able to buy.</b></p>
                                        <p class="formText">After verification, you can buy instantly.</p>
                                    </div>
                                </div>
                                <!--end quickbuydiv-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8" id="goTopriceList">
                        <div class="white_card mb_30 card_height_100">
                            <div class="white_card_header ">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0 pricelist">Price List for Today 25/Oct/2022</h3>
                                    </div>
                                    <!-- <a href="#">
                                    <p>View all</p>
                                </a> -->
                                </div>
                            </div>
                            <div class="white_card_body pt-0">
                                <div class="QA_section">
                                    <div class="QA_table mb-0 transaction-table">
                                        <!-- table-responsive -->
                                        <div class="table-responsive">
                                            <table class="table  ">
                                                <tbody>
                                                    <ul class="nav nav-pills custom_bootstrap_nav pricemobile">
                                                        <li class="nav-item">
                                                            <a class="nav-link buyptab active"
                                                                style="background:#77c454;" data-toggle="tab">Buy
                                                                Prices</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link sellptab" data-toggle="tab">Sell
                                                                Prices</a>
                                                        </li>
                                                    </ul>

                                                    <tr class="pricedesk">
                                                        <td scope="row">E-currency</span></td>
                                                        <td><span class="badge badge-success pricetag">Buy (per
                                                                USD)</span></td>
                                                        <td><span class="badge badge-danger pricetag">Sell (per
                                                                USD)</span></td>
                                                    </tr>
                                                    <input type="hidden" id="typepr">
                                                    <tr>
                                                        <td scope="row"> <img class="small_img" src="/images/1.svg"
                                                                alt=""> Bitcoin</td>
                                                        <td class="buypricediv1" style="color:#77c454">₦ 760</td>
                                                        <td class="sellpricediv1" style="color:#ff788e">₦ 725</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"> <img class="small_img" src="/images/pm.png"
                                                                alt=""> Perfect Money</td>
                                                        <td class="buypricediv1" style="color:#77c454">₦ 760</td>
                                                        <td class="sellpricediv1" style="color:#ff788e">₦ 720</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"> <img class="small_img" src="/images/eth.png"
                                                                alt=""> Ethereum</td>
                                                        <td class="buypricediv1" style="color:#77c454">₦ 770</td>
                                                        <td class="sellpricediv1" style="color:#ff788e">₦ 640</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"> <img class="small_img"
                                                                src="/images/usdt_trc_2068.png" alt=""> USDT TRC20</td>
                                                        <td class="buypricediv1" style="color:#77c454">₦ 760</td>
                                                        <td class="sellpricediv1" style="color:#ff788e">₦ 725</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row"> <img class="small_img"
                                                                src="/images/bitcoin_cash69.jpg" alt=""> bitcoin Cash
                                                        </td>
                                                        <td class="buypricediv1" style="color:#77c454">₦ 770</td>
                                                        <td class="sellpricediv1" style="color:#ff788e">₦ 640</td>
                                                    </tr>
                                                    <!-- </div> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8" id="order_history_mobile">
                        <div class="white_card mb_30 card_height_100">
                            <div class="white_card_header ">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Order History</h3>
                                    </div>
                                    <a href="orders">
                                        <p>View all</p>
                                    </a>
                                </div>
                            </div>
                            <div class="white_card_body pt-0">
                                <div class="QA_section">
                                    <div class="QA_table mb-0 transaction-table">
                                        <!-- table-responsive -->
                                        <div class="table-responsive">
                                            <table class="table  ">
                                                <tbody>
                                                    <p>
                                                        Your recent order history will appear here.
                                                    </p>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <!-- <h3 class="m-0">Quick Transfer</h3> -->
                                        <ul class="nav nav-pills custom_bootstrap_nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#bitdiv" data-toggle="tab">Send BTC</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#nairadiv" data-toggle="tab"> Withdraw
                                                    Naira</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="white_card_body tab-pane fade active show" id="nairadiv">
                                    <div class="exchange_widget">
                                        <form name="myWithform" id="myWithform" class="currency_validate">
                                            <div class="form-group" id="bankacctdiv">
                                                <label>Bank Account</label> <small style="float:right;"><a
                                                        href="settings?type=bank"><i class="fas fa-edit"></i> Add/Edit
                                                        Bank</a></small>
                                                <div class="input-group ">
                                                    <select name="bank_name" id="bank_name"
                                                        class="form-control nice_Select" style="display: none;">
                                                    </select>

                                                </div>
                                            </div><!-- mustverify_with_naira -->
                                            <div class="form-group">
                                                <label>Enter your amount</label>
                                                <div class="input-group">
                                                    <input type="text" name="trf_amount" class="form-control"
                                                        id="trf_amount">
                                                </div>
                                                <div class="d-flex justify-content-between mt-3">
                                                    <p class="mb-0">Transfer Fee</p>
                                                    <h6 class="mb-0 showwithfee">0.2% of your withdrawal amount</h6>
                                                    <input type="hidden" name="withfee" id="withfee" value="0.2">
                                                    <input type="hidden" name="fee_method" id="fee_method"
                                                        value="percentage">
                                                    <input type="hidden" name="balngn" id="balngn" value="0.00">
                                                    <input type="hidden" name="above_amount" id="above_amount"
                                                        value="10000">
                                                </div>
                                                <div class="d-flex justify-content-between mt-3" id="availBal">
                                                    <p class="mb-0">Current Balance</p>
                                                    <h6 class="mb-0 ngnbal_upto balspan" id="balspanOne">₦0</h6>
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
                                <div class="white_card_body tab-pane fade" id="bitdiv">
                                    <div class="exchange_widget">
                                        <div class="form-group" id="walletdiv">
                                            <label id="header_trf_wallet">Wallet Address</label>
                                            <p class="dangerP error_address" style="display: none;"></p>
                                            <div class="input-group">
                                                <input type="text" name="trf_wallet" class="form-control"
                                                    id="trf_wallet">
                                            </div>
                                        </div>
                                        <p class="formText verifyText"><a href="verify_me?type=identity"><b>Click
                                                    here</a> to verify your identity to be able to send bitcoin.</b></p>
                                        <p class="formText">After verification, you can send bitcoin to any wallet
                                            address comfortably.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="white_card mb_30 card_height_100">
                            <div class="white_card_header ">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Recent Bitcoin Transactions</h3>
                                    </div>
                                    <a href="wallet_transactions">
                                        <p class="viewall">View all</p>
                                    </a>
                                </div>
                            </div>
                            <div class="white_card_body pt-0">
                                <div class="QA_section">
                                    <div class="QA_table mb-0 transaction-table">
                                        <!-- table-responsive -->
                                        <div class="table-responsive">
                                            <table class="table  ">
                                                <tbody>
                                                    <p>
                                                        Your recent bitcoin transactions will appear here.
                                                    </p>

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