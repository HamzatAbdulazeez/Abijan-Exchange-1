@extends('layouts.dashboard-frontend')

@section('page-content')
<!-- [ Layout container ] Start -->
@php
    $verified = \App\Models\UserBank::where('user_id', Auth::user()->id)->first();
    if($verified == null){
        $verify = false;
    }
    else{
        $verify = true;
    }
@endphp
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
                    <div class="col-12">
                        <div class="page_title_left mb_30">
                            <h3 class="m-0">Welcome, {{Auth::user()->profile->firstname}} {{Auth::user()->profile->surname}}</h3>
                            <p>Manage your info and security to make Abijan Exchange work better for you.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="white_card mb_30 card_height_100">
                            <div class="white_card_header ">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Personal Info</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body pt-0">
                                <div class="QA_section">
                                    <div class="QA_table mb-0 transaction-table">
                                        <!-- table-responsive -->
                                        <div class="table-responsive">
                                            <table class="table  ">
                                                <tbody>

                                                    <tr>
                                                        <td scope="row">
                                                            Full Name:
                                                        </td>
                                                        <td>
                                                            <p>{{Auth::user()->profile->firstname}} {{Auth::user()->profile->middlename}} {{Auth::user()->profile->surname}}</p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=update_name"><i class="far fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            Date of Birth:
                                                        </td>
                                                        <td>
                                                            <p>{{Auth::user()->profile->dob ?? '-'}}</}}</p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=birth"><i class="far fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            Gender:
                                                        </td>
                                                        <td>
                                                            <p>{{Auth::user()->profile->gender ?? '-'}}</p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=gender"><i class="far fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            Password:
                                                        </td>
                                                        <td>
                                                            <p>******** </p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=password"><i class="far fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="white_card mb_30 card_height_100">
                            <div class="white_card_header ">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Contact Info</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body pt-0">
                                <div class="QA_section">
                                    <div class="QA_table mb-0 transaction-table">
                                        <!-- table-responsive -->
                                        <div class="table-responsive">
                                            <table class="table  ">
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">
                                                            Email:
                                                        </td>
                                                        <td>
                                                            <p>{{Auth::user()->email}}</p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=email"><i class="far fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            Phone:
                                                        </td>
                                                        <td>
                                                            <p>{{Auth::user()->profile->phone_no ?? '-'}}</p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=phone"><i class="far fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            Username:
                                                        </td>
                                                        <td>
                                                            <p>{{Auth::user()->profile->username ?? '-'}}</p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=username"><i class="far fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            Photo:
                                                        </td>
                                                        <td>
                                                            <p>Add a photo to personalize your account</p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=photo"><i class="fas fa-camera"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="white_card mb_30 card_height_100">
                            <div class="white_card_header ">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Bank</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body pt-0">
                                <div class="QA_section">
                                    <div class="QA_table mb-0 transaction-table">
                                        <!-- table-responsive -->
                                        <div class="table-responsive">
                                            <table class="table  ">
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">
                                                            Bank accounts:
                                                        </td>
                                                        <td>
                                                            @if (Auth::user()->bank->bank_name != null)
                                                                <p>{{Auth::user()->bank->bank_name}} *****{{substr(Auth::user()->bank->account_num, 7)}}</p>
                                                            @else
                                                                <p>-</p>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=verify_me"><i class="far fa-edit"></i></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="white_card mb_30 card_height_100">
                            <div class="white_card_header ">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Security</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body pt-0">
                                <div class="QA_section">
                                    <div class="QA_table mb-0 transaction-table">
                                        <!-- table-responsive -->
                                        <div class="table-responsive">
                                            <table class="table  ">
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">
                                                            Secret Questions:
                                                        </td>
                                                        <td>
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
                                                        <p>None</p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=question"><i class="far fa-edit"></i></a>
                                                        </td>
                                                        @else
                                                        <p>Yes</p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=question"><i class="far fa-edit"></i></a>
                                                        </td>
                                                        @endif

                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            Two-Factor Authentication:<br>
                                                            <small><i>Protect your account with an extra layer of security.</i></small>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                @if (! auth()->user()->two_factor_secret)
                                                                    Disabled
                                                                @else
                                                                    Enabled
                                                                @endif
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=2fa"><i class="far fa-edit"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td scope="row">
                                                            Bank Verification Number (BVN): <br>
                                                            <small><i>Verify your identity to prevent fraud.</i></small>
                                                        </td>
                                                        <td>
                                                            @if (Auth::user()->bank->bvn != null)
                                                                <p>{{Auth::user()->bank->bvn}} <span class="badge badge-success"> verified </span></p>
                                                            @else
                                                                <p>-</p>
                                                            @endif

                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=verify_me"><i class="far fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            National Identification Number (NIN):
                                                        </td>
                                                        <td>
                                                            <!-- <p>xxxxx-47 <span class="badge badge-success">verified</span></p> -->
                                                            <p>-</p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="#"><i class="far fa-edit"></i></a>
                                                        </td>
                                                    </tr>
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
