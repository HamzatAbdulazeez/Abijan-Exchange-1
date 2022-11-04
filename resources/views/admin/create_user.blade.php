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
            <div class="main_content_iner ">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="dashboard_header mb_50">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="page_title_left mb_30">
                                            <h3>Admin User</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dashboard_breadcam text-right">
                                            <p><a href="/">Dashboard</a> <i class="fas fa-caret-right"></i> Admins
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="email-sidebar white_box">
                                <ul class="text-left mt-2">
                                    <li>
                                        <a href="{{ 'settings' }}">
                                            <i class="ti-settings"></i> <span> <span>Settings</span> </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ 'set_rate' }}">
                                            <i class="ti-credit-card"></i> <span> <span>Rates</span></span>
                                        </a>
                                    </li>

                                    <li class="active">
                                        <a href="{{ 'create_admin' }}">
                                            <i class="ti-user"></i> <span> <span>Create Admin</span> </span>
                                        </a>
                                    </li>

                                    {{-- <li>
                                        <a href="{{ 'mailbox_archive' }}">
                                            <i class="ti-briefcase"></i> <span> <span>Archive</span> </span>
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="white_box QA_section mb_30">
                                <div class="white_box_tittle list_header">
                                    <h4>Admins</h4>
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                        </div>
                                    </div>
                                </div>

                                <div class="QA_table">
                                    <!-- table-responsive -->
                                    <button data-toggle="modal" data-target="#createAdmin" class="btn_1 w-100 mb-2 btn-lg email-gradient gradient-9-hover email__btn waves-effect" title="Delete message">
                                        <i class="ti-user"></i> Add Admin
                                    </button>
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><i
                                                    class="ti-search"></i>
                                                <input type="search" class="" placeholder="Quick Search"
                                                    aria-controls="DataTables_Table_0"></style='display:none'>
                                            </label></div>
                                        <table class="table readMsgTable dataTable no-footer dtr-inline"
                                            id="DataTables_Table_0" role="grid"
                                            aria-describedby="DataTables_Table_0_info" style="width: 835px;">
                                            <thead>
                                                <tr role="row">
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 86px;"><label
                                                            class="primary_checkbox d-flex mr-12 selectDelete1">
                                                            <input type="checkbox" id="checkboxAll">
                                                            <span class="checkmark" title="Select"
                                                                id="checkboxmsgAll"></span>
                                                        </label></th>
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 171px;">Name</th>
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 177px;">Email</th>
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 111px;">Role</th>
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 138px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($users->count() > 0)
                                                    @foreach ($users as $item)
                                                    <tr>
                                                        <td scope="" tabindex="0">
                                                            <p>#</p>
                                                        </td>
                                                        <td>
                                                            <p class=""
                                                                style="cursor: pointer;"
                                                                >
                                                               {{\App\Models\UserProfile::where('user_id', $item->id)->first()->firstname}}
                                                               {{\App\Models\UserProfile::where('user_id', $item->id)->first()->surname}}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class=""
                                                                style="cursor: pointer;"
                                                                >
                                                                {{ $item->email }} </p>
                                                        </td>
                                                        <td>
                                                            <p class=""
                                                                style="cursor: pointer;"
                                                                data-value="{{ $item->id }}">
                                                                {{ $item->user_type }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class=""
                                                                style="cursor: pointer;"
                                                                >
                                                               aa </p>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @else
                                                    <tr class="odd">
                                                        <td valign="top" colspan="5" class="dataTables_empty">Your
                                                            user will appear here.</td>
                                                    </tr>
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                    <input type="hidden" id="countmsg" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="createAdmin" tabindex="-1" role="dialog"
            aria-labelledby="messageModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="main-title">
                            <h3 class="m-0">Create an Admin</h3>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p>Use this form to create an admin account.</p><br>
                        </div>
                    <form method="POST" action="{{route('createAdmin')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Role</label>
                                <div class="common_input mb_20">
                                    <select class="form-control" id="role" name="role">
                                        <option value="">Choose a role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Support">Support</option>
                                        <option value="MAnager">Manager</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="common_input mb_20">
                                    <label>Email</label>
                                    <input name="email" id="subject" type="email" maxlength="100"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="common_input mb_20">
                                    <label>Firstname</label>
                                    <input name="firstname" id="firstname" type="text" maxlength="100"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="common_input mb_20">
                                    <label>Middlename</label>
                                    <input name="middlename" id="middlename" type="text" maxlength="100"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="common_input mb_20">
                                    <label>Surname</label>
                                    <input name="surname" id="surname" type="text" maxlength="100"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="common_input mb_20">
                                    <label>Password</label>
                                    <input name="password" id="password" type="password" maxlength="100"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12 forgotpasswordhide">
                                <div class="common_input mb_20">
                                    <button type="submit" class="btn_1 w-100 col-md-5" id="ContinueCompose">Create Admin
                                        <span class="spincompose fa fa-spinner fa-spin fa-2x"
                                            style="display: none;"></span></button>
                                </div>
                            </div>
                            <div class="col-lg-12 forgotpasswordshow" style="display:none;">
                                <div class="common_input mb_20">
                                    <p>Please click <b><a href="forgotpassword">HERE</a></b> to reset your password or
                                        click the "Forgot Password" link on the login page.</p>
                                </div>
                            </div>
                        </div>
                    </form>
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
