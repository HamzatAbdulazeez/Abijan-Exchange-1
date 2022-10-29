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
                                                            <a class="action_btn" href="settings?type=name"><i class="far fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            Date of Birth:
                                                        </td>
                                                        <td>
                                                            <p>-</p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="{{route('typebirth')}}"><i class="far fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            Gender:
                                                        </td>
                                                        <td>
                                                            <p>-</p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="{{route('typegender')}}"><i class="far fa-edit"></i></a>
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
                                                            <a class="action_btn" href="{{route('typepassword')}}"><i class="far fa-edit"></i></a>
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
                                                            <p>-</p>
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
                                                            <p>-</p>
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
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=bank"><i class="far fa-edit"></i></a>
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
                                                            <p>None</p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="settings?type=questions"><i class="far fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            Two-Factor Authentication:<br>
                                                            <small><i>Protect your account with an extra layer of security.</i></small>
                                                        </td>
                                                        <td>
                                                            <p>Disabled</p>
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
                                                            <p>-</p>
                                                        </td>
                                                        <td>
                                                            <a class="action_btn" href="verify_me"><i class="far fa-edit"></i></a>
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
                                                            <a class="action_btn" href="verify_me"><i class="far fa-edit"></i></a>
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
