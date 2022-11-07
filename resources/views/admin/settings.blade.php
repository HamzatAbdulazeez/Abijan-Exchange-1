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
            <div class="main_content_iner ">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="dashboard_header mb_50">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="page_title_left mb_30">
                                            <h3>Admin Settings</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dashboard_breadcam text-right">
                                            <p><a href="/">Dashboard</a> <i class="fas fa-caret-right"></i> Mailbox
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="email-sidebar white_box">
                                <ul class="text-left mt-2">
                                    <li class="active">
                                        <a href="{{ 'settings' }}">
                                            <i class="ti-settings"></i> <span> <span>Settings</span> </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ 'set_rate' }}">
                                            <i class="ti-credit-card"></i> <span> <span>Rates</span></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ 'create_admin' }}">
                                            <i class="ti-user"></i> <span> <span>Create Admin</span> </span>
                                        </a>
                                    </li>

                                    {{-- <li>
                                        <a href="{{ 'mailbox_archive' }}">
                                            <i class="ti-briefcase"></i> <span> <span>Archive</span> </span>
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="white_box QA_section mb_30">
                                <div class="white_box_tittle list_header">
                                    <h4>Settings</h4>
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                        </div>
                                    </div>
                                </div>

                                <div class="QA_table">
                                    <!-- table-responsive -->
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                        <form method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>Naira Deposit Fee ₦</label>
                                                        <input name="naira_deposit" id="currency" value="{{settings()->naira_deposit}}" type="text" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>Naira Withdraw Fee %</label>
                                                        <input name="naira_withdraw_fee" id="buy_rate" type="text" value="{{settings()->naira_withdraw_fee}}" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>BTC Buy Rate</label>
                                                        <input name="btc_sell_rate" value="{{settings()->btc_buy_rate}}" id="sell_rate" type="text" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>BTC Sell Rate</label>
                                                        <input name="btc_buy_rate" value="{{settings()->btc_sell_rate}}" id="charges" type="text" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>BTC Transfer Rate</label>
                                                        <input name="btc_trans_fee" value="{{settings()->btc_trans_fee}}" id="charges" type="text" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>Referral Commission</label>
                                                        <input name="referral_comission" id="charges" value="{{settings()->referral_comission}}" type="text" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                {{-- <legend>Bank</legend> --}}

                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>Bank Name</label>
                                                        <input name="bank_name" id="charges" value="{{settings()->bank_name}}" type="text" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>Account Number</label>
                                                        <input name="acct_num" id="charges"  value="{{settings()->acct_num}}"type="text" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>Account Name</label>
                                                        <input name="acct_name" id="charges" value="{{settings()->acct_name}}" type="text" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>Memo</label>
                                                        <input name="memo" id="charges" type="text" value="{{settings()->memo}}" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>BTC Wallet</label>
                                                        <input name="btc_wallet" id="btc_wallet" type="text" value="{{settings()->btc_wallet}}" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>Ethereum Wallet</label>
                                                        <input name="eth_wallet" id="eth_wallet" type="text" value="{{settings()->eth_wallet}}" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>Receive BTC Wallet</label>
                                                        <input name="receive_btc_wallet" id="receive_btc_wallet" type="text" value="{{settings()->receive_btc_wallet}}" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>Receive BTC Wallet QrCode</label>
                                                        <input name="btc_r_qr_code" id="btc_r_qr_code" type="file" accept="image/*" value=""
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>Bicoin Cash Wallet</label>
                                                        <input name="bch_wallet" id="bch_wallet" type="text" value="{{settings()->bch_wallet}}" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>USDT TRC20 Wallet</label>
                                                        <input name="usdt_wallet" id="usdt_wallet" type="text" value="{{settings()->usdt_wallet}}" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>Perfect Money Account Name</label>
                                                        <input name="pm_name" id="pm_name" type="text" value="{{settings()->pm_name}}" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="common_input mb_20">
                                                        <label>Perfect Money Account Number</label>
                                                        <input name="pm_number" id="pm_number" type="text" value="{{settings()->pm_number}}" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 forgotpasswordhide">
                                                    <div class="common_input mb_20">
                                                        <button type="submit" class="btn_1 w-100 col-md-5" id="ContinueCompose">Update Settings
                                                            <span class="spincompose fa fa-spinner fa-spin fa-2x"
                                                                style="display: none;"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
