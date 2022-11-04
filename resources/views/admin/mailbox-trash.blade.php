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
                                            <h3> Admin Support Mailbox</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dashboard_breadcam text-right">
                                            <p><a href="/admin/adminwelcome">Dashboard</a> <i class="fas fa-caret-right"></i> Mailbox
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="email-sidebar white_box">
                                <button data-toggle="modal" data-target="#messageModalCenter"
                                    class="btn_1 w-100 mb-2 btn-lg email-gradient gradient-9-hover email__btn waves-effect"><i
                                        class="ti-plus"></i>COMPOSE</button>
                                <ul class="text-left mt-2">
                                    <li>
                                        <a href="{{ 'message_center' }}">
                                            <i class="ti-user"></i> <span> <span>Inbox</span> </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ 'sent_mails' }}">
                                            <i class="ti-announcement"></i> <span> <span>Sent Mails</span></span>
                                        </a>
                                    </li>

                                    <li class="active">
                                        <a href="{{ 'mailbox_trash' }}">
                                            <i class="ti-trash"></i> <span> <span>Trash</span> </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ 'mailbox_archive' }}">
                                            <i class="ti-briefcase"></i> <span> <span>Archive</span> </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="white_box QA_section mb_30">
                                <div class="white_box_tittle list_header">
                                    <h4>Trash</h4>
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                            <div class="search_inner">
                                                <form active="#">
                                                    <div class="search_field">
                                                        <input type="text" class="tablesearch"
                                                            placeholder="Search content here...">
                                                    </div>
                                                    <button type="submit"> <i class="ti-search"></i> </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="QA_table">
                                    <!-- table-responsive -->
                                    <a href="javascript: void(0)" class="deletTop inbox" title="Delete message">
                                        <p class=""> <i class="ti-trash"></i> Delete</p>
                                    </a><a href="javascript: void(0)" class="restoreTop archive" title="Send back to inbox">
                                        <p class=""> <i class="fas fa-mail-bulk"></i> Restore to Inbox</p>
                                    </a>
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
                                                        colspan="1" style="width: 171px;">Message</th>
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 177px;">Category</th>
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 111px;">Date</th>
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 138px;">status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr class="odd">
                                                    <td valign="top" colspan="5" class="dataTables_empty">Your
                                                        messages will appear here.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                            aria-live="polite">Showing 0 to 0 of 0 messages</div>
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled"
                                                aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"
                                                id="DataTables_Table_0_previous"><i
                                                    class="ti-arrow-left"></i></a><span></span><a
                                                class="paginate_button next disabled" aria-controls="DataTables_Table_0"
                                                data-dt-idx="1" tabindex="0" id="DataTables_Table_0_next"><i
                                                    class="ti-arrow-right"></i></a></div>
                                    </div>
                                    <input type="hidden" id="countmsg" value="">
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
