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
        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">
                <!-- page title  -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="white_card card_height_100 mb_10">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h4 class="m-0">Edit Your Personal Settings</h4><br>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="white_card_body tab-pane fade active show" id="nairadiv">
                                    <div class="exchange_widget">
                                        <form name="mySettform" id="mySettform" onsubmit="event.preventDefault();" class="currency_validate" autocomplete="off">


                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text"  name="firstname" autocomplete="off" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lastname" class="form-control pwrds" >
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="eamil" name="eamil" class="form-control pwrds">
                                            </div>
                                            <button type="button" name="sett_submit" id="sett_submit" class="btn_1 w-100 ">Update Profile <span class="loadingText fa fa-spinner fa-spin fa-2x" style="display:none;float:right;" id="loadingText_sett"></span></button><input type="hidden" id="prof" name="prof" value="password">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="white_card card_height_100 mb_10">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h4 class="m-0">Reset Your Password</h4><br>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="white_card_body tab-pane fade active show" id="nairadiv">
                                    <div class="exchange_widget">
                                        <form name="mySettform" id="mySettform" onsubmit="event.preventDefault();" class="currency_validate" autocomplete="off">
                                            <div class="form-group">
                                                <label>Current Password</label>
                                                <input type="password" name="curr_password_sett" autocomplete="off" class="form-control" id="curr_password_sett">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" name="pwrd" class="form-control pwrds" id="pwrd">
                                                <div class="d-flex justify-content-between mt-3">
                                                    <div class="form-valid" id="error_pwrd" style="display: none;">
                                                        <div class="form-valid" id="errormin_pwrd" style="color: red;"><i class="ti-check-box"></i> Minimum 8 characters.<br></div>
                                                        <div class="form-valid" id="errorlow_pwrd" style="color: red;"><i class="ti-close"></i> A lowercase letter.<br></div>
                                                        <div class="form-valid" id="errorupper_pwrd" style="color: red;"><i class="ti-close"></i> A capital (uppercase) letter.<br></div>
                                                        <div class="form-valid" id="errornum_pwrd" style="color: red;"><i class="ti-close"></i> A number.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Retype New Password</label>
                                                <input type="password" name="pwrd2" class="form-control pwrds" id="pwrd2">
                                                <div class="d-flex justify-content-between mt-3">
                                                    <div class="form-valid" id="error_pwrd2" style="display: none;">
                                                        <div class="form-valid" id="errormin_pwrd2" style="color: red;"><i class="ti-check-box"></i> Minimum 8 characters.<br></div>
                                                        <div class="form-valid" id="errorlow_pwrd2" style="color: red;"><i class="ti-close"></i> A lowercase letter.<br></div>
                                                        <div class="form-valid" id="errorupper_pwrd2" style="color: red;"><i class="ti-close"></i> A capital (uppercase) letter.<br></div>
                                                        <div class="form-valid" id="errornum_pwrd2" style="color: red;"><i class="ti-close"></i> A number.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" name="sett_submit" id="sett_submit" class="btn_1 w-100 ">Update Password <span class="loadingText fa fa-spinner fa-spin fa-2x" style="display:none;float:right;" id="loadingText_sett"></span></button><input type="hidden" id="prof" name="prof" value="password">
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