<!-- [ Layout navbar ( Header ) ] Start -->
<div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="line_icon open_miniSide d-none d-lg-block">
                            <img src="{{URL::asset('admin/libraries/line_img.png')}}" alt="">
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            
                            <div class="profile_info d-flex align-items-center">
                                <div class="profile_thumb mr_20">
                                    <img src="{{URL::asset('admin/libraries/sample_pic.png')}}" alt="#">
                                </div>
                                @php
                                    $user = \App\Models\UserProfile::where('user_id', Auth::user()->id)->first();
                                    if($user == null){
                                        $verify = false;
                                    }
                                    else{
                                        if($user->firstname == null || $user->middlename == null || $user->surname == null){
                                            $verify = false;
                                        }
                                        else{
                                            $verify = true;
                                            $fullname = $user->firstname.' '.$user->middlename.' '.$user->surname;
                                        }
                                    }
                                @endphp
                                @if ($verify == false)
                                    <div class="author_name">
                                        <p class="f_s_12 f_w_400">Not Verified</p>
                                    </div>
                                    <div class="profile_info_iner">
                                        <div class="profile_info_details">
                                            <a href="/admin/profile">My Profile</a>
                                            <a onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" href="#">Log Out </a>
                                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                @else
                                    <div class="author_name">
                                        <h4 class="f_s_15 f_w_500 mb-0">{{$fullname}}</h4>
                                        <p class="f_s_12 f_w_400">Verified</p>
                                    </div>
                                    <div class="profile_info_iner">
                                        <div class="profile_author_name">
                                            <h5>{{$fullname}}</h5>
                                        </div>
                                        <div class="profile_info_details">
                                            <a href="/admin/profile">My Profile</a>
                                            <a onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" href="#">Log Out </a>
                                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- [ Layout navbar ( Header ) ] End -->
