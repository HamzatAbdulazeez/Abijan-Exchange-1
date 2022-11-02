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
                                                <a class="nav-link" href="{{route('edit_profile')}}"> Back to my Profile</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="white_card_body tab-pane fade active show" id="nairadiv">
                                    <div class="exchange_widget">
                                        <form name="mySettform" id="mySettform" method="POST" action="{{route('user.update.question')}}"  autocomplete="off">
                                            @csrf
                                            <div class="form-group">
                                                <label>Secret Question 1</label>
                                                <div class="input-group ">
                                                    <select name="question1_sett" id="" class="form-control nice_Select" style="display: block !important;">
                                                        <option value="">Please select</option>
                                                        @foreach ($questions as $item)
                                                            <option value="{{$item->question}}">{{$item->question}}</option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Answer 1</label>
                                                <input type="text" name="answer_1_sett" class="form-control" id="answer_1_sett">
                                            </div>
                                            <div class="form-group">
                                                <label>Secret Question 2</label>
                                                <div class="input-group ">
                                                    <select name="question2_sett" id="question2_sett" class="form-control nice_Select" style="display: block !important;">
                                                        <option value="">Please select</option>
                                                        @foreach ($questions as $item)
                                                            <option value="{{$item->question}}">{{$item->question}}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Answer 2</label>
                                                <input type="text" name="answer_2_sett" class="form-control" id="answer_2_sett">
                                            </div>
                                            <div class="form-group">
                                                <label>Secret Question 3</label>
                                                <div class="input-group ">
                                                    <select name="question3_sett" id="question3_sett" class="form-control nice_Select" style="display: block !important;">
                                                        <option value="">Please select</option>
                                                        @foreach ($questions as $item)
                                                            <option value="{{$item->question}}">{{$item->question}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Answer 3</label>
                                                <input type="text" name="answer_3_sett" class="form-control" id="answer_3_sett">
                                            </div>



                                            <button type="submit" name="" id="" class="btn_1 w-100 ">Update Questions <span class="loadingText fa fa-spinner fa-spin fa-2x" style="display:none;float:right;" id="loadingText_sett"></span></button><input type="hidden" id="prof" name="prof" value="questions">
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
