@extends('layouts.admin-frontend') @section('page-content') @include('sweetalert::alert')
<!-- [ Layout container ] Start -->
<div class="layout-container">
    <!-- [ Layout navbar ( Header ) ] Start -->
    @includeIf('layouts.admin-navbar')
    <!-- [ Layout navbar ( Header ) ] End -->

    <!-- [ Layout content ] Start -->
    <div class="layout-content">
        <!-- [ content ] Start -->
        <!--/ menu  -->
        <div class="main_content_iner">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="dashboard_header mb_50">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="page_title_left mb_30">
                                        <h3>Support Mailbox</h3>
                                        <p>Manage communications with AbijanExchange Customer Support.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="dashboard_breadcam text-right">
                                        <p><a href="/admin/adminwelcome">Dashboard</a> <i class="fas fa-caret-right"></i> Mailbox</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="email-sidebar white_box">
                            {{-- <button data-toggle="modal" data-target="#messageModalCenter" class="btn_1 w-100 mb-2 btn-lg email-gradient gradient-9-hover email__btn waves-effect"><i class="ti-plus"></i>COMPOSE</button> --}}
                            <ul class="text-left mt-2">
                                <li  class="active">
                                    <a href="{{route('message_center')}}">
                                        <i class="ti-user"></i> <span> <span>Inbox</span> </span>
                                    </a>
                                </li>

                                {{-- <li>
                                    <a href="{{route('sent_mails')}}">
                                        <i class="ti-announcement"></i> <span> <span>Sent Mails</span></span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('mailbox_trash')}}">
                                        <i class="ti-trash"></i> <span> <span>Trash</span> </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('mailbox_archive')}}">
                                        <i class="ti-briefcase"></i> <span> <span>Archive</span> </span>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="white_box QA_section mb_30">
                            <div class="white_box_tittle list_header">
                                <h4>Inbox</h4>
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                        <div class="search_inner">
                                            <form active="#">
                                                <div class="search_field">
                                                    <input type="text" class="tablesearch" placeholder="Search content here..." />
                                                </div>
                                                <button type="submit"><i class="ti-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="QA_table">
                                <!-- table-responsive -->
                                {{-- <a href="javascript: void(0)" class="deletTop inbox" title="Delete message">
                                    <p class=""><i class="ti-trash"></i> Delete</p>
                                </a>
                                <a href="javascript: void(0)" class="restoreTop inbox" title="Archive message">
                                    <p class=""><i class="ti-briefcase"></i> Archive</p>
                                </a> --}}
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                        <label><i class="ti-search"></i><input type="search" class="" placeholder="Quick Search" aria-controls="DataTables_Table_0" /></label>
                                    </div>
                                    <table class="table lms_table_active31 readMsgTable dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 835px;">
                                        <thead>
                                            <tr role="row">
                                                <th scope="col" class="sorting_disabled" rowspan="1" colspan="1" style="width: 86px;">
                                                    <label class="primary_checkbox d-flex mr-12 selectDelete1">
                                                        <input type="checkbox" id="checkboxAll" />
                                                        <span class="checkmark" title="Select" id="checkboxmsgAll"></span>
                                                    </label>
                                                </th>
                                                <th scope="col" class="sorting_disabled" rowspan="1" colspan="1" style="width: 171px;">Message</th>
                                                <th scope="col" class="sorting_disabled" rowspan="1" colspan="1" style="width: 171px;">From</th>
                                                <th scope="col" class="sorting_disabled" rowspan="1" colspan="1" style="width: 177px;">Category</th>
                                                <th scope="col" class="sorting_disabled" rowspan="1" colspan="1" style="width: 138px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($msg->count() > 0)
                                                        @foreach ($msg as $item)
                                                            <tr role="row" class="odd">
                                                                <td scope="row" tabindex="0">
                                                                    <label class="primary_checkbox d-flex mr-12 ">
                                                                        <input type="checkbox" class="checkboxmsg"
                                                                            id="{{ $item->id }}">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <p class="readMsgFn  {{ $item->id }}"
                                                                        style="cursor: pointer;"
                                                                        data-value="{{ $item->id }}">
                                                                        {{ $item->message }} </p>
                                                                </td>
                                                                <td>
                                                                    <p class="readMsgFn  {{ $item->id }}"
                                                                        style="cursor: pointer;"
                                                                        data-value="{{ $item->id }}">
                                                                        {{ \App\Models\User::where('id', $item->user_id)->first()->email }} </p>
                                                                </td>
                                                                <td>
                                                                    <div class="media align-items-center">
                                                                        <div class="media-body">
                                                                            <p class="readMsgFn  {{ $item->id }}"
                                                                                style="cursor: pointer;"
                                                                                data-value="{{ $item->id }}">
                                                                                {{ $item->subject }}</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                {{-- <td>
                                                                    <p class="readMsgFn  {{ $item->id }}"
                                                                        style="cursor: pointer;"
                                                                        data-value="{{ $item->id }}">
                                                                        {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                                                    </p>
                                                                </td> --}}
                                                                <td>
                                                                    <a href="mailto:{{ \App\Models\User::where('id', $item->user_id)->first()->email }}" class=""
                                                                    id=""><i class="ti-send"></i>
                                                                    Reply</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr class="odd">
                                                            <td colspan="5" class="dataTables_empty" valign="top">
                                                                Your
                                                                messages will appear here.</td>
                                                        </tr>
                                                    @endif
                                        </tbody>
                                    </table>
                                </div>
                                <input type="hidden" id="countmsg" value="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="modal fade" id="messageModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="messageModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="main-title">
                                <h3 class="m-0">Compose a message</h3>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <p>Use this form to contact Nairadirect Support.</p><br>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Category</label>
                                    <div class="common_input mb_20">
                                        <select class="form-control" id="category" name="category">
                                            <option value="">Choose a category for your question</option>
                                            <option value="General Questions">General Questions</option>
                                            <option value="Account Problem">Problem with my Account</option>
                                            <option value="Forgot Password">Forgot Password</option>
                                            <option value="Naira Wallet Questions">Naira Wallet Questions</option>
                                            <option value="Bitcoin Wallet Questions">Bitcoin Wallet Questions</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>Subject</label>
                                        <input name="subject" id="subject" type="text" maxlength="100"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>Message To</label>
                                        <input name="admin_to" id="admin_to" type="email" maxlength="100"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 forgotpasswordhide">
                                    <div class="common_input mb_20">
                                        <label>Message</label>
                                        <textarea name="message" id="memo" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 forgotpasswordhide">
                                    <div class="common_input mb_20">
                                        {{-- <input type="hidden" id="idread">
                                    <input type="hidden" id="msgtyperead" value="compose"> --}}
                                        {{-- <button type="submit" class="btn_1 w-100 col-md-5" id="ContinueCompose">Continue
                                            <span class="spincompose fa fa-spinner fa-spin fa-2x"
                                                style="display: none;"></span></button>
                                    </div>
                                </div>
                                <div class="col-lg-12 forgotpasswordshow" style="display:none;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="modal fade loadingModalCenter" data-keyboard="true" tabindex="-1">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content" style="width: 48px">
                        <!-- <span class="fa fa-spinner fa-spin fa-3x"></span> -->
                        <div class="loader--ellipsis colord_bg_2 mb_30">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="readMsgModalCenter" tabindex="-1" role="dialog" aria-labelledby="readMsgModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="main-title" id="readMsgModalCenterTitle">
                                <h3 class="m-0 messageSupport">Message from Support</h3>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Date</label>
                                    <div class="common_input mb_20">
                                        <p><span id="datereadMsg"></span>&nbsp;&nbsp;<span id="timereadMsg"></span></p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>From</label>
                                        <p id="msgFrom">From</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>Category</label>
                                        <p id="categoryreadMsg">General</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 subjectBox">
                                    <div class="common_input mb_20">
                                        <label>Subject</label>
                                        <p id="subjectreadMsg">My Subject</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>Message</label>
                                        <p id="memoreadMsg">General</p>
                                    </div>
                                </div>
                                <div class="col-lg-12" style="display:none1">
                                    <div class="common_input mb_20">
                                        <input type="hidden" id="idreadMsg">
                                        <input type="hidden" id="typereadMsg">

                                        <button type="button" id="replybtnMsg" class="btn_1 w-100 col-md-5"><i class="ti-arrow-top-left"></i> Reply</button>
                                        <span class="col-md-2"></span>

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
