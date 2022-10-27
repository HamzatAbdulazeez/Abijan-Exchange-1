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
                                                <a class="nav-link active" href="#nairadiv" data-toggle="tab">Change Questions</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('updateprofile')}}"> Back to my Profile</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="white_card_body tab-pane fade active show" id="nairadiv">
                                    <div class="exchange_widget">
                                        <form name="mySettform" id="mySettform" onsubmit="event.preventDefault();" class="currency_validate" autocomplete="off">
                                            <div class="form-group">
                                                <label>Secret Question 1</label>
                                                <div class="input-group ">
                                                    <select name="question1_sett" id="question1_sett" class="form-control nice_Select" style="display: none;">
                                                        <option value="">Please select</option>
                                                        <option value="What is the name of your favourite pet?">What is the name of your favourite pet?</option>
                                                        <option value="In what city were you born?">In what city were you born?</option>
                                                        <option value="What high school did you attend?">What high school did you attend?</option>
                                                        <option value="What is the name of your first school?">What is the name of your first school?</option>
                                                        <option value="What is your favourite movie?">What is your favourite movie?</option>
                                                    </select>
                                                    <div class="nice-select form-control nice_Select" tabindex="0"><span class="current">Please select</span>
                                                        <div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div>
                                                        <ul class="list">
                                                            <li data-value="" class="option selected">Please select</li>
                                                            <li data-value="What is the name of your favourite pet?" class="option">What is the name of your favourite pet?</li>
                                                            <li data-value="In what city were you born?" class="option">In what city were you born?</li>
                                                            <li data-value="What high school did you attend?" class="option">What high school did you attend?</li>
                                                            <li data-value="What is the name of your first school?" class="option">What is the name of your first school?</li>
                                                            <li data-value="What is your favourite movie?" class="option">What is your favourite movie?</li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Answer 1</label>
                                                <input type="text" name="answer_1_sett" class="form-control" id="answer_1_sett">
                                            </div>
                                            <div class="form-group">
                                                <label>Secret Question 2</label>
                                                <div class="input-group ">
                                                    <select name="question2_sett" id="question2_sett" class="form-control nice_Select" style="display: none;">
                                                        <option value="">Please select</option>
                                                        <option value="What is your favourite colour?">What is your favourite colour?</option>
                                                        <option value="What is your mother's middle name?">What is your mother's middle name?</option>
                                                        <option value="What is your grandfather's first name?">What is your grandfather's first name?</option>
                                                        <option value="Where did you meet your spouse?">Where did you meet your spouse?</option>
                                                        <option value="Which phone number do you remember most from your childhood?">Which phone number do you remember most from your childhood?</option>
                                                    </select>
                                                    <div class="nice-select form-control nice_Select" tabindex="0"><span class="current">Please select</span>
                                                        <div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div>
                                                        <ul class="list">
                                                            <li data-value="" class="option selected">Please select</li>
                                                            <li data-value="What is your favourite colour?" class="option">What is your favourite colour?</li>
                                                            <li data-value="What is your mother's middle name?" class="option">What is your mother's middle name?</li>
                                                            <li data-value="What is your grandfather's first name?" class="option">What is your grandfather's first name?</li>
                                                            <li data-value="Where did you meet your spouse?" class="option">Where did you meet your spouse?</li>
                                                            <li data-value="Which phone number do you remember most from your childhood?" class="option">Which phone number do you remember most from your childhood?</li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Answer 2</label>
                                                <input type="text" name="answer_2_sett" class="form-control" id="answer_2_sett">
                                            </div>
                                            <div class="form-group">
                                                <label>Secret Question 3</label>
                                                <div class="input-group ">
                                                    <select name="question3_sett" id="question3_sett" class="form-control nice_Select" style="display: none;">
                                                        <option value="">Please select</option>
                                                        <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                                                        <option value="What street did you grow up on?">What street did you grow up on?</option>
                                                        <option value="What was the make of your first car?">What was the make of your first car?</option>
                                                        <option value="What is your father's middle name?">What is your father's middle name?</option>
                                                        <option value="What is your father's favourite food?">What is your father's favourite food?</option>
                                                    </select>
                                                    <div class="nice-select form-control nice_Select" tabindex="0"><span class="current">Please select</span>
                                                        <div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div>
                                                        <ul class="list">
                                                            <li data-value="" class="option selected">Please select</li>
                                                            <li data-value="What is your mother's maiden name?" class="option">What is your mother's maiden name?</li>
                                                            <li data-value="What street did you grow up on?" class="option">What street did you grow up on?</li>
                                                            <li data-value="What was the make of your first car?" class="option">What was the make of your first car?</li>
                                                            <li data-value="What is your father's middle name?" class="option">What is your father's middle name?</li>
                                                            <li data-value="What is your father's favourite food?" class="option">What is your father's favourite food?</li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Answer 3</label>
                                                <input type="text" name="answer_3_sett" class="form-control" id="answer_3_sett">
                                            </div>



                                            <button type="button" name="sett_submit" id="sett_submit" class="btn_1 w-100 ">Update Questions <span class="loadingText fa fa-spinner fa-spin fa-2x" style="display:none;float:right;" id="loadingText_sett"></span></button><input type="hidden" id="prof" name="prof" value="questions">
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
                                            <a href="#" class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Can I change my email address?
                                            </a>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_ex">
                                        <div class="card-body">
                                            <p>Your email address on Abijan Exchange can be changed anytime, but you need to verify the email anytime you make the change.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Can I use someone else's details on my Abijan Exchange account?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_ex">
                                        <div class="card-body">
                                            <p>No, you can't link personal information that isn't yours to your own Abijan Exchange account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Can I change my phone number after verification?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_ex">
                                        <div class="card-body">
                                            <p>Once your identity has been verified on Abijan Exchange, your main phone number can't be removed except the phone number changed on your BVN record.</p>
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