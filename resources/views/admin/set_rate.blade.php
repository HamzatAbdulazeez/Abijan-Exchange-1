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
                                            <h3>Admin Rates</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dashboard_breadcam text-right">
                                            <p><a href="/">Dashboard</a> <i class="fas fa-caret-right"></i> Rates
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

                                    <li class="active">
                                        <a href="{{ 'set_rate' }}">
                                            <i class="ti-credit-card"></i> <span> <span>Rates</span></span>
                                        </a>
                                    </li>

                                    <li>
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
                                    <h4>Rates</h4>
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                        </div>
                                    </div>
                                </div>

                                <div class="QA_table">
                                    <!-- table-responsive -->
                                    <!-- table-responsive -->
                                    <button data-toggle="modal" data-target="#addRate"
                                        class="btn_1 w-100 mb-2 btn-lg email-gradient gradient-9-hover email__btn waves-effect"
                                        title="Delete message">
                                        <i class="ti-user"></i> Add Rate
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
                                                        colspan="1" style="width: 171px;">E-Currency</th>
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 177px;">Buy Rate</th>
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 111px;">Sell Rate</th>
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 138px;">Charges Fee</th>
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 138px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($rates->count() > 0)
                                                    @foreach ($rates as $item)
                                                        <tr>
                                                            <td scope="" tabindex="0">
                                                                <p>#</p>
                                                            </td>
                                                            <td>
                                                                <p class="" style="cursor: pointer;">
                                                                    {{ $item->e_currency }} ({{$item->port_short}})
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="" style="cursor: pointer;">
                                                                    {{ $item->buy_rate }} </p>
                                                            </td>
                                                            <td>
                                                                <p class="" style="cursor: pointer;"
                                                                    data-value="{{ $item->id }}">
                                                                    {{ $item->sell_rate }}
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="" style="cursor: pointer;">
                                                                    {{ $item->fee }} </p>
                                                            </td>
                                                            <td>
                                                                <p class="" style="cursor: pointer;">
                                                                    <button data-toggle="tooltip" data-id="{{ $item->id }}" data-currency="{{ $item->e_currency }}"
                                                                        data-sell_rate="{{ $item->sell_rate }}"
                                                                        data-buy_rate="{{ $item->buy_rate }}"
                                                                        data-fee="{{ $item->fee }}"
                                                                        data-port_short="{{ $item->port_short }}"
                                                                        data-placement="top"
                                                                        title="Edit Rate"
                                                                        id="editRate"
                                                                        style="border: 0;background: transparent;color: #373063;"><i
                                                                            class=" ti-pencil-alt "></i></button>
                                                                    <!--<button data-id="{{ $item->id }}" id="deleteRate" data-toggle="tooltip" data-placement="top"
                                                                        title="Delete Rate"
                                                                        style="background: transparent;color: red;border: 0;"><i
                                                                            class="ti-trash"></i></button>-->
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr class="odd">
                                                        <td valign="top" colspan="5" class="dataTables_empty">Your
                                                            rates will appear here.</td>
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
    <div class="modal fade" id="addRate" tabindex="-1" role="dialog" aria-labelledby="messageModalCenterTitle"
        aria-hidden="true">
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
                        <p>Use this form to add currency current rate.</p><br>
                    </div>
                    <form method="POST" action="{{ route('SetRate') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="common_input mb_20">
                                    <label>E-Currency</label>
                                    <input name="currency" id="currency" type="text" maxlength="100"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="common_input mb_20">
                                    <label>E-Currency Short</label>
                                    <input name="port_short" id="port_short" type="text" maxlength="100"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="common_input mb_20">
                                    <label>Buy Rate</label>
                                    <input name="buy_rate" id="buy_rate" type="text" maxlength="100"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="common_input mb_20">
                                    <label>Sell Rate</label>
                                    <input name="sell_rate" id="sell_rate" type="text" maxlength="100"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="common_input mb_20">
                                    <label>Charges Fee</label>
                                    <input name="charges" id="charges" type="text" maxlength="100"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12 forgotpasswordhide">
                                <div class="common_input mb_20">
                                    <button type="submit" class="btn_1 w-100 col-md-5" id="ContinueCompose">Add Rate
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
    <div class="modal fade" id="editRateModal"
        tabindex="-1" role="dialog"
        aria-labelledby="messageModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="main-title">
                        <h3 class="m-0">Create an Admin</h3>
                    </div>
                    <button type="button" class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <p>Use this form to update currency current rate.</p><br>
                    </div>
                    <form method="POST"
                        action="{{ route('updateRate') }}">
                        @csrf
                        <input type="hidden" name="id" value="" id="edit_id">
                        <div class="row">
                            <div class="col-lg-12">
                                <div
                                    class="common_input mb_20">
                                    <label>E-Currency</label>
                                    <input name="currency"
                                        id="edit_currency"
                                        value=""
                                        type="text"
                                        maxlength="100"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="common_input mb_20">
                                    <label>E-Currency Short</label>
                                    <input name="port_short" id="edit_port_short" type="text" maxlength="100"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div
                                    class="common_input mb_20">
                                    <label>Buy Rate</label>
                                    <input name="buy_rate"
                                        id="edit_buy_rate"
                                        type="text"
                                        maxlength="100"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div
                                    class="common_input mb_20">
                                    <label>Sell Rate</label>
                                    <input name="sell_rate"
                                        id="edit_sell_rate"
                                        type="text"
                                        maxlength="100"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div
                                    class="common_input mb_20">
                                    <label>Charges Fee</label>
                                    <input name="charges"
                                        id="edit_fee"
                                        type="text"
                                        maxlength="100"
                                        class="form-control">
                                </div>
                            </div>

                            <div
                                class="col-lg-12 forgotpasswordhide">
                                <div
                                    class="common_input mb_20">
                                    <button type="submit"
                                        class="btn_1 w-100 col-md-5"
                                        id="ContinueCompose">Update
                                        Rate
                                        <span
                                            class="spincompose fa fa-spinner fa-spin fa-2x"
                                            style="display: none;"></span></button>
                                </div>
                            </div>
                            <div class="col-lg-12 forgotpasswordshow"
                                style="display:none;">
                                <div
                                    class="common_input mb_20">
                                    <p>Please click <b><a
                                                href="forgotpassword">HERE</a></b>
                                        to reset your password
                                        or
                                        click the "Forgot
                                        Password" link on the
                                        login page.</p>
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

