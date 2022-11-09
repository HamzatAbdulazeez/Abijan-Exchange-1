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
                                            <h4 class="m-0">Profile Settings</h4><br>
                                            <ul class="nav nav-pills custom_bootstrap_nav">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#nairadiv" data-toggle="tab">Change
                                                        2fa</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="profile"> Back to my Profile</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="white_card_body tab-pane fade active show" id="nairadiv">
                                        <div class="exchange_widget">
                                            @if (! auth()->user()->two_factor_secret)
                                                <form name="mySettform" method="POST" action="{{url('user/two-factor-authentication')}}"
                                                    class="currency_validate" autocomplete="off">
                                                    @csrf
                                                    <div class="form-group">
                                                        <div style="padding-bottom: 20px;">To protect your account from
                                                            unauthorized access, you should enable two-factor authentication.
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="card-header cardhead">
                                                            Enable paper code two-factor authentication
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="sett_submit" id=""
                                                        class="btn_1 w-100 hidden1">Enable 2fa <span
                                                            class="loadingText fa fa-spinner fa-spin fa-2x"
                                                            style="display:none;float:right;"
                                                            id="loadingText_sett"></span></button>
                                                </form>
                                            @else
                                            <form name="mySettform" method="POST" action="{{url('user/two-factor-authentication')}}"
                                                class="currency_validate" autocomplete="off">
                                                @csrf
                                                @method('DELETE')
                                                <div class="form-group">
                                                    <div style="padding-bottom: 20px;">To protect your account from
                                                        unauthorized access, you should enable two-factor authentication.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="card-header cardhead">
                                                        Enable paper code two-factor authentication
                                                    </div>
                                                </div>
                                                <button type="submit" name="sett_submit" id=""
                                                    class="btn_1 w-100 hidden1">Disable 2fa <span
                                                        class="loadingText fa fa-spinner fa-spin fa-2x"
                                                        style="display:none;float:right;"
                                                        id="loadingText_sett"></span></button>
                                            </form>
                                            @endif

                                            @if (session('status') == 'two-factor-authentication-enabled')
                                                <p class="mt-4 mb-4" style="text-align: center;">You have now enabled 2fa, please scan the following QR
                                                    code into you phone authenticator application
                                                </p>
                                                <p style="text-align: center">
                                                    {!! auth()->user()->twoFactorQrCodeSvg() !!}
                                                </p>
                                                <p class="mt-4 mb-4" style="text-align: center;">Please store these recovery code in a safe location</p>
                                                @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes, true)) as $code)
                                                    <p style="text-align: center">
                                                        {{ trim($code) }}
                                                    </p>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="white_box mb_30">
                                <div class="box_header ">
                                    <div class="main-title">
                                        <h3 class="mb-0">Settings FAQs</h3>
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
                                                    Can I change my email address?
                                                </a>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>Your email address on Naira Direct can be changed anytime, but you need
                                                    to verify the email anytime you make the change.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Can I use someone else's details on my Naira Direct account?
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>No, you can't link personal information that isn't yours to your own
                                                    Naira Direct account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Can I change my phone number after verification?
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>Once your identity has been verified on Naira Direct, your main phone
                                                    number can't be removed except the phone number changed on your BVN
                                                    record.</p>
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
