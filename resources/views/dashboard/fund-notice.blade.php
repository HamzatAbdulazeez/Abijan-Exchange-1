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
                                            <h4 class="m-0">Fund Notice form for Invoice Number: {{$inv->invoice_id}}</h4><br>

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="white_card_body tab-pane fade active show" id="quickbuydiv">
                                        <div class="exchange_widget">
                                            <form role="form" id="notice-form" name="notice-form" method="post"
                                                action="" enctype="multipart/form-data" class="notice-form"
                                                autocomplete="OFF">
                                                <input type="hidden" name="hiddeninvoice_no" id="hiddeninvoice_no"
                                                    value="{{$inv->invoice_id}}">
                                                <div class="form-group">
                                                    <label>Currency:</label>
                                                    <div class="input-group ">
                                                        <select name="currency" class="form-control nice_Select"
                                                            style="display: none;">
                                                            <option data-display="{{$inv->currency}}" value="{{$inv->currency}}"
                                                                selected="selected">{{$inv->currency}}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Fund Method:</label>
                                                    <div class="input-group ">
                                                        <select id="fundmethod" class="form-control nice_Select"
                                                            style="display: none;">
                                                            <option data-display="{{$inv->fund_method}}" value="{{$inv->fund_method}}"
                                                                selected="selected">{{$inv->fund_method}}</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Order Amount:</label>
                                                    <div class="input-group ">
                                                        <select name="currency" class="form-control nice_Select"
                                                            style="display: none;">
                                                            @if ($inv->currency == "Ethereum")
                                                                @if ($inv->unit == "USD")
                                                                    <option data-display="${{number_format($inv->order_amount, 2)}}" value="{{number_format($inv->order_amount, 2)}}"
                                                                    selected="selected">${{number_format($inv->order_amount, 2)}}</option>
                                                                    <option value="{{$inv->order_amount/getCurrentBtcDollar()}}">{{$inv->order_amount/getCurrentBtcDollar()}} BTC</option>
                                                                    <option value="{{number_format(($inv->order_amount*rates()[2]['sell_rate']), 2)}}">₦{{number_format(($inv->order_amount*rates()[2]['sell_rate']), 2)}}</option>
                                                                @endif
                                                                @if ($inv->unit == "NGN")
                                                                    <option data-display="${{$inv->order_amount*rates()[2]['sell_rate']}}" value="{{$inv->order_amount*rates()[2]['sell_rate']}}"
                                                                    selected="selected">${{number_format($inv->order_amount*rates()[2]['sell_rate'])}}</option>
                                                                    <option value="{{($inv->order_amount*rates()[2]['sell_rate'])*getCurrentBtcDollar()}}">0.04718 BTC</option>
                                                                    <option value="{{$inv->order_amount}}">₦{{$inv->order_amount}}</option>
                                                                @endif

                                                            @endif
                                                            @if ($inv->currency == "Bitcoin")
                                                                @if ($inv->unit == "USD")
                                                                    <option data-display="${{number_format($inv->order_amount, 2)}}" value="{{number_format($inv->order_amount, 2)}}"
                                                                    selected="selected">${{number_format($inv->order_amount, 2)}}</option>
                                                                    <option value="{{$inv->order_amount/getCurrentBtcDollar()}}">{{$inv->order_amount/getCurrentBtcDollar()}} BTC</option>
                                                                    <option value="{{number_format(($inv->order_amount*rates()[0]['sell_rate']), 2)}}">₦{{number_format(($inv->order_amount*rates()[0]['sell_rate']), 2)}}</option>
                                                                @endif
                                                                @if ($inv->unit == "NGN")
                                                                    <option data-display="${{$inv->order_amount*rates()[0]['sell_rate']}}" value="{{$inv->order_amount*rates()[0]['sell_rate']}}"
                                                                    selected="selected">${{number_format($inv->order_amount*rates()[0]['sell_rate'])}}</option>
                                                                    <option value="{{($inv->order_amount*rates()[0]['sell_rate'])*getCurrentBtcDollar()}}">{{($inv->order_amount*rates()[0]['sell_rate'])*getCurrentBtcDollar()}} BTC</option>
                                                                    <option value="{{$inv->order_amount}}">₦{{$inv->order_amount}}</option>
                                                                @endif
                                                                @if ($inv->unit == "BTC")
                                                                    <option data-display="${{number_format($inv->order_amount*getCurrentBtcDollar()), 2}}" value="{{$inv->order_amount*getCurrentBtcDollar()}}"
                                                                    selected="selected">${{number_format($inv->order_amount*getCurrentBtcDollar())}}</option>
                                                                    <option value="{{$inv->order_amount}}">{{$inv->order_amount}} BTC</option>
                                                                    <option value="{{number_format(($inv->order_amount*getCurrentBtcDollar())*rates()[3]['sell_rate'], 2)}}">₦{{number_format(($inv->order_amount*getCurrentBtcDollar())*rates()[3]['sell_rate'], 2)}}</option>
                                                                @endif
                                                            @endif
                                                            @if ($inv->currency == "USDT TRC20")
                                                                @if ($inv->unit == "USD")
                                                                    <option data-display="${{number_format($inv->order_amount, 2)}}" value="{{number_format($inv->order_amount, 2)}}"
                                                                    selected="selected">${{number_format($inv->order_amount, 2)}}</option>
                                                                    <option value="{{$inv->order_amount/getCurrentBtcDollar()}}">{{$inv->order_amount/getCurrentBtcDollar()}} BTC</option>
                                                                    <option value="{{number_format(($inv->order_amount*rates()[3]['sell_rate']), 2)}}">₦{{number_format(($inv->order_amount*rates()[3]['sell_rate']), 2)}}</option>
                                                                @endif
                                                                @if ($inv->unit == "NGN")
                                                                    <option data-display="${{$inv->order_amount*rates()[3]['sell_rate']}}" value="{{$inv->order_amount*rates()[3]['sell_rate']}}"
                                                                    selected="selected">${{number_format($inv->order_amount*rates()[3]['sell_rate'])}}</option>
                                                                    <option value="{{($inv->order_amount*rates()[3]['sell_rate'])*getCurrentBtcDollar()}}">{{($inv->order_amount*rates()[3]['sell_rate'])*getCurrentBtcDollar()}} BTC</option>
                                                                    <option value="{{$inv->order_amount}}">₦{{$inv->order_amount}}</option>
                                                                @endif
                                                            @endif
                                                            @if ($inv->currency == "bitcoin Cash")
                                                                @if ($inv->unit == "USD")
                                                                    <option data-display="${{number_format($inv->order_amount, 2)}}" value="{{number_format($inv->order_amount, 2)}}"
                                                                    selected="selected">${{number_format($inv->order_amount, 2)}}</option>
                                                                    <option value="{{$inv->order_amount/getCurrentBtcDollar()}}">{{$inv->order_amount/getCurrentBtcDollar()}} BTC</option>
                                                                    <option value="{{number_format(($inv->order_amount*rates()[4]['sell_rate']), 2)}}">₦{{number_format(($inv->order_amount*rates()[4]['sell_rate']), 2)}}</option>
                                                                @endif
                                                                @if ($inv->unit == "NGN")
                                                                    <option data-display="${{$inv->order_amount*rates()[4]['sell_rate']}}" value="{{$inv->order_amount*rates()[4]['sell_rate']}}"
                                                                    selected="selected">${{number_format($inv->order_amount*rates()[2]['sell_rate'])}}</option>
                                                                    <option value="{{($inv->order_amount*rates()[4]['sell_rate'])*getCurrentBtcDollar()}}">{{($inv->order_amount*rates()[4]['sell_rate'])*getCurrentBtcDollar()}} BTC</option>
                                                                    <option value="{{$inv->order_amount}}">₦{{$inv->order_amount}}</option>
                                                                @endif
                                                            @endif

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Enter the Amount Sent</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="amount_sent" class="form-control"
                                                            id="amount_sent">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    @if ($inv->currency == "bitcoin Cash")
                                                    <label>Our bitcoin Cash Address for this transaction:</label>
                                                    <div class="input-group mb-3">
                                                        {{settings()->bch_wallet}} </div>
                                                    {{-- <span class="mybarcode" id="mybarcode_mobile"><img
                                                            src="https://chart.googleapis.com/chart?chs=150x150&amp;cht=qr&amp;chl=1HBbatU8pGCg82WJ5YV7RNsu4stokcUQ7Q"
                                                            title="Scan Me"
                                                            alt="1HBbatU8pGCg82WJ5YV7RNsu4stokcUQ7Q"></span> --}}
                                                    @endif
                                                    @if ($inv->currency == "Ethereum")
                                                    <label>Our Ethereum Address for this transaction:</label>
                                                    <div class="input-group mb-3">
                                                        {{settings()->eth_wallet}} </div>
                                                    {{-- <span class="mybarcode" id="mybarcode_mobile"><img
                                                            src="https://chart.googleapis.com/chart?chs=150x150&amp;cht=qr&amp;chl=1HBbatU8pGCg82WJ5YV7RNsu4stokcUQ7Q"
                                                            title="Scan Me"
                                                            alt="1HBbatU8pGCg82WJ5YV7RNsu4stokcUQ7Q"></span> --}}
                                                    @endif
                                                    @if ($inv->currency == "Bitcoin")
                                                    <label>Our Bitcoin Address for this transaction:</label>
                                                    <div class="input-group mb-3">
                                                        {{settings()->btc_wallet}} </div>
                                                    {{-- <span class="mybarcode" id="mybarcode_mobile"><img
                                                            src="https://chart.googleapis.com/chart?chs=150x150&amp;cht=qr&amp;chl=1HBbatU8pGCg82WJ5YV7RNsu4stokcUQ7Q"
                                                            title="Scan Me"
                                                            alt="1HBbatU8pGCg82WJ5YV7RNsu4stokcUQ7Q"></span> --}}
                                                    @endif
                                                    @if ($inv->currency == "USDT TRC20")
                                                    <label>Our bitcoin Cash Address for this transaction:</label>
                                                    <div class="input-group mb-3">
                                                        {{settings()->usdt_wallet}} </div>
                                                    {{-- <span class="mybarcode" id="mybarcode_mobile"><img
                                                            src="https://chart.googleapis.com/chart?chs=150x150&amp;cht=qr&amp;chl=1HBbatU8pGCg82WJ5YV7RNsu4stokcUQ7Q"
                                                            title="Scan Me"
                                                            alt="1HBbatU8pGCg82WJ5YV7RNsu4stokcUQ7Q"></span> --}}
                                                    @endif
                                                </div>

                                                <div class="form-group">
                                                    <label>Enter the Fund Date:</label>
                                                    <div class="input-group mb-3">
                                                        <input type="date" name="funding_date" class="form-control"
                                                            id="funding_date">
                                                    </div>
                                                </div>
                                                <button type="button" name="submit"
                                                    class="btn_1 w-100 submitNotice">Submit <span
                                                        class="loadingText fa fa-spinner fa-spin fa-2x"
                                                        style="display:none;float:right;"></span></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--end quickbuydiv-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="white_box mb_30">
                                <div class="box_header ">
                                    <div class="main-title">
                                        <h3 class="mb-0">Fund Notice FAQs</h3>
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
                                                    How long does a sell transaction take?
                                                </a>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>By submitting this form you confirm that you've actually sent the
                                                    bitcoin, so your order will be processed once it has been received and
                                                    confirmed.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    How do I get paid (naira) for this order?
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>After you send funds to the wallet on this page, your naira will be
                                                    available in your (naira wallet) and you can now withdraw the Naira to
                                                    your Nigeria bank account. <a href="naira">Click here</a> to visit
                                                    the withdrawal page.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn" type="button" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="true"
                                                    aria-controls="collapseThree">
                                                    QR Code for Mobile
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>The bar code displayed on this page is the QR code for this transaction.
                                                    It is possible to send bitcoin to the wallet address provided by
                                                    scanning this code.</p>

                                            </div>
                                           {{--  <span class="mybarcode" id="mybarcode_desktop"><img
                                                    src="https://chart.googleapis.com/chart?chs=150x150&amp;cht=qr&amp;chl=1HBbatU8pGCg82WJ5YV7RNsu4stokcUQ7Q"
                                                    title="Scan Me" alt="1HBbatU8pGCg82WJ5YV7RNsu4stokcUQ7Q"></span> --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- accordian -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Layout footer ] Start -->
            @includeIf('layouts.dashboard-footer')
            <!-- [ Layout footer ] End -->
        </div>
        <!-- [ Layout content ] Start -->
    </div>
    <!-- [ Layout container ] End -->
@endsection
