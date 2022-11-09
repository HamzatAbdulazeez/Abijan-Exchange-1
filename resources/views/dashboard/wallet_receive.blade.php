@extends('layouts.dashboard-frontend') @section('page-content')
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
                                    <h4 class="m-0">Receive Bitcoin</h4><br>
                                      <ul class="nav nav-pills custom_bootstrap_nav">
                                        <li class="nav-item">
                                          <a class="nav-link" href="{{route('sendbtn')}}">Send BTC</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link active" href="#bitdiv" data-toggle="tab"> Receive BTC</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="{{route('wallet_transactions')}}"> Transactions</a>
                                        </li>
                                      </ul>
                                </div>

                            </div>
                        </div>
                        <div class="tab-content">

                        <div class="white_card_body tab-pane fade active show" id="bitdiv">
                            <div class="exchange_widget">

                                    <div class="form-group" id="walletdiv">


                                        <span>Give out the bitcoin address below to receive bitcoins.</span>

                                        <div class="bitcoin-address-container" data-bc-address="{{settings()->receive_btc_wallet}}">

                                            <div class="walletaddy">
                                                <b class="receive-address"><span class="bitcoin-address bitcoin-address-controls walletinfo" style="display:none1" id="walletinfo">
                                                    {{settings()->receive_btc_wallet}}
                                                    <button class="btn btn-default mb-3 bitcoin-address-action bitcoin-address-action-copy" type="button" title="Copy Wallet Address" data-info="walletinfo"> <i class="far fa-copy"></i></button></span></b>

                                            </div>

                                        </div>
                                            <span class="mybarcode"><img src="{{settings()->btc_r_qr_code}}" style="width: 100%;height: 100%;" title="Scan Me" alt="{{settings()->receive_btc_wallet}}"></span>
                                            <input type="hidden" name="addr" id="addr" value="{{settings()->receive_btc_wallet}}">
                                            <input type="hidden" name="addr_key" id="addr_key" value="address_key">
                                            <br>

                                            <span> This address will change after use. A new one will be automatically generated.</span>
                                                                                </div>

                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <!-- <h3 class="mb-0" > FAQs</h3> -->
                            </div>
                        </div>
                        <!-- accordian -->
                        <div class="accordion accordion_custom mb_50" id="accordion_ex">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Incoming transactions
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_ex">
                                    <div class="card-body">
                                        <p>Receiving Bitcoin usually takes 30 minutes to 1 hour, however it can be longer than that depending on the bitcoin network traffic and the miner fee. An incoming transaction needs to receive 3 Bitcoin network confirmations to appear in your wallet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Old addresses
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_ex">
                                    <div class="card-body">
                                        <p>To protect your privacy, we provide a new bitcoin address for each transfer. This prevents someone from tracking all the payments you receive by looking at the blockchain.</p>
                                        <p>Note that addresses are valid only for 2 months.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            QR Code for Mobile
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_ex">
                                    <div class="card-body">
                                        <p>The bar code displayed on this page is the QR code for your receiving address. It is possible to send bitcoins to you from mobile wallets by scanning this code.</p>

                                    </div>
                                </div>
                            </div>
                                                        <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Bitcoin transfer fees
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion_ex">
                                    <div class="card-body">
                                        <p>Transactions sent from wallets of other Abijan Exchange users are free.</p>

<p>Transactions from other Bitcoin wallets are subject to a deposit fee. The size of the fee changes depending on the current usage rate of the Bitcoin blockchain, we automatically adjust this fee based on the current network congestion to make sure your transactions are confirmed as quickly as possible. The deposit fee is paid from your Abijan Exchange wallet when you receive a transaction.</p>

<p>Current incoming transfer fee: <b>Free</b></p>
                                    </div>
                                </div>
                            </div>
                                                    </div>
                        <!-- accordian -->
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
