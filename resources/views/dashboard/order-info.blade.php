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
                                            <h4 class="m-0">Sell Order for Invoice Number: 11068998</h4><br>

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
                                                    value="11068998">
                                                <div class="form-group">
                                                    <label>Order Date &amp; Time:</label> 06/Nov/2022 at 09:11 AM
                                                </div>
                                                <div class="form-group">
                                                    <label>Currency:</label> Perfect Money
                                                </div>
                                                <div class="form-group">
                                                    <label>You will send via:</label> Automatic
                                                </div>

                                                <div class="form-group">
                                                    <label>Status:</label> Order Booked
                                                </div>
                                                <div class="form-group">
                                                    <label>Order Amount:</label> $100.00, ₦79000
                                                </div>
                                                <div class="form-group">
                                                    <label>Our PM Account Number:</label>
                                                    <div class="input-group mb-3">
                                                        U36217627 </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Our PM Account Name:</label>
                                                    <div class="input-group mb-3">
                                                        nairadirect.com </div>
                                                </div>

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
                                        <h3 class="mb-0">Order FAQs</h3>
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
                                                    How long does a sell order take to be completed?
                                                </a>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>If you have sent the perfect money, your naira wallet will be credited
                                                    after confirming the perfect money.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    How do I receive money?
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>Your naira will be credited to your AbijanExchange wallet after your
                                                    order has been processed. You can withdraw it to your bank account
                                                    anytime.</p>
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
