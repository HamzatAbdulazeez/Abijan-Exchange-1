<!-- [ Layout navbar ( Header ) ] Start -->
<div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="line_icon open_miniSide d-none d-lg-block">
                            <img src="{{URL::asset('dash/libraries/line_img.png')}}" alt="">
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a class="CHATBOX_open nav-link-notify1" href="javascript: void(0)">
                                        <img src="{{URL::asset('dash/libraries/msg.svg')}}" title="You have no unread messages">
                                    </a>
                                </li>
                                <li>
                                    <a class="bell_notification_clicker nav-link-notify1" href="javascript: void(0)">
                                        <img src="{{URL::asset('dash/libraries/bell.svg')}}" class="clickimage"
                                            title="You have no unread notifications">
                                        <!-- <span>2</span> -->
                                    </a>
                                    <!-- Menu_NOtification_Wrap  -->
                                    <div class="Menu_NOtification_Wrap">
                                        <div class="notification_Header">
                                            <h4>Notifications</h4>
                                        </div>
                                        <div class="Notification_body">
                                            <style>
                                                .Menu_NOtification_Wrap .Notification_body {
                                                    height: auto;
                                                }
                                            </style>
                                            <div class="single_notify d-flex align-items-center">

                                                <div class="notify_content">
                                                    <!-- <a href="#"><h5>Cool Marketing </h5></a> -->
                                                    <p>You have no unread notifications</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <!--/ Menu_NOtification_Wrap  -->
                                </li>

                            </div>
                            <div class="profile_info d-flex align-items-center">
                                <div class="profile_thumb mr_20">
                                    <img src="{{URL::asset('dash/libraries/sample_pic.png')}}" alt="#">
                                </div>
                                <div class="author_name">
                                    <h4 class="f_s_15 f_w_500 mb-0">Hamzat Abdulazeez Adeleke</h4>
                                    <p class="f_s_12 f_w_400">Not Verified</p>
                                </div>
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <h5>Hamzat Abdulazeez Adeleke</h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="verify_me">Verify Me</a> <a href="profile">My Profile</a>
                                        <a href="logout">Log Out </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- [ Layout navbar ( Header ) ] End -->