@extends('layouts.dashboard-frontend')

@section('page-content')
    <!-- [ Layout container ] Start -->
    <div class="layout-container">
        <!-- [ Layout navbar ( Header ) ] Start -->
        @includeIf('layouts.dashboard-navbar')
        <!-- [ Layout navbar ( Header ) ] End -->

        <!-- [ Layout content ] Start -->
        <div class="layout-content">
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
                                                        Bank</a>
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
                                            <form name="mySettform" id="mySettform" onsubmit="event.preventDefault();"
                                                class="currency_validate" autocomplete="off">
                                                <div class="form-group">
                                                    <label>Bank Name</label>
                                                    <div class="input-group ">
                                                        <select name="bank_name_sett" id="bank_name_sett"
                                                            class="form-control nice_Select"
                                                            style="display: block !important;">
                                                            <option value="">Please select your bank</option>
                                                            <option value="Diamond Bank">ACCESS BANK (DIAMOND)</option>
                                                            <option value="Access Bank">ACCESS BANK PLC</option>
                                                            <option value="Citibank Nigeria">CITIBANK NIGERIA</option>
                                                            <option value="Ecobank Nigeria">ECOBANK NIGERIA PLC</option>
                                                            <option value="Enterprise Bank">ENTERPRISE BANK</option>
                                                            <option value="Fidelity Bank">FIDELITY BANK PLC</option>
                                                            <option value="First Bank of Nigeria">FIRST BANK OF NIGERIA PLC
                                                            </option>
                                                            <option value="First City Monument Bank">FIRST CITY MONUMENT
                                                                BANK PLC</option>
                                                            <option value="Guaranty Trust Bank">GTBANK PLC</option>
                                                            <option value="Heritage Bank">HERITAGE BANK</option>
                                                            <option value="Jaiz Bank">JAIZ BANK</option>
                                                            <option value="Keystone Bank">KEYSTONE BANK</option>
                                                            <option value="MainStreet Bank">MAINSTREET BANK</option>
                                                            <option value="Parallex Bank">PARALLEX BANK</option>
                                                            <option value="Polaris Bank">POLARIS BANK LIMITED</option>
                                                            <option value="Providus Bank">PROVIDUS BANK LIMITED</option>
                                                            <option value="Stanbic IBTC Bank">STANBIC IBTC BANK PLC</option>
                                                            <option value="Standard Chartered Bank">STANDARD CHARTERED BANK
                                                                NIGERIA LTD</option>
                                                            <option value="Sterling Bank">STERLING BANK PLC</option>
                                                            <option value="Union Bank of Nigeria">UNION BANK OF NIGERIA PLC
                                                            </option>
                                                            <option value="United Bank For Africa">UNITED BANK FOR AFRICA
                                                                PLC</option>
                                                            <option value="UNITY BANK">UNITY BANK PLC</option>
                                                            <option value="Wema Bank">WEMA BANK PLC</option>
                                                            <option value="Zenith Bank">ZENITH BANK PLC</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Account Number</label>
                                                    <input type="text" name="acct_no_sett" class="form-control acct_nos"
                                                        id="acct_no_sett">
                                                </div>
                                                @php
                                                    $question = \App\Models\UserSecurityQuestion::where('user_id', Auth::user()->id)->first();
                                                    //dd($question);
                                                    if($question == null){
                                                        $typeQ = true;
                                                    }
                                                    else{
                                                        $typeQ = false;
                                                    }
                                                @endphp
                                                @if ($typeQ == true)
                                                    <p class="mb-0 questions">Secret Question:</p>
                                                    <p class="mb-0 answers"><a href="settings?type=question"
                                                    alt="Set Question" title="Set Security Questions">Set your
                                                    Secret Question</a></p>
                                                @else
                                                    <div class="form-group " id="securityquesion">
                                                        <div class="d-flex justify-content-between mt-3">
                                                            <p class="mb-0 questions">Secret Question:</p>
                                                            <p class="mb-0 answers">{{$question->question}}</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-3">
                                                            <p class="mb-0 questions">Secret Answer:</p>
                                                            <input type="hidden" name="question_id" value="{{$question->id}}">
                                                            <h6 class="mb-0 ngnbal_upto balspan"><input type="text"
                                                                    name="answer1" class="form-control" id="answer1"></h6>
                                                        </div>
                                                    </div>
                                                @endif

                                                <button type="button" name="sett_submit" id="sett_submit"
                                                    class="btn_1 w-100 ">Update Bank <span
                                                        class="loadingText fa fa-spinner fa-spin fa-2x"
                                                        style="display:none;float:right;"
                                                        id="loadingText_sett"></span></button><input type="hidden"
                                                    id="prof" name="prof" value="bank">
                                            </form>
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
                                                    data-toggle="collapse" data-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
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
            <!-- [ Layout footer ] Start -->
            @includeIf('layouts.dashboard-footer')
            <!-- [ Layout footer ] End -->
        </div>
        <!-- [ Layout content ] Start -->
    </div>
    <!-- [ Layout container ] End -->
@endsection
