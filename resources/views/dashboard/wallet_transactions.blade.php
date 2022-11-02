@extends('layouts.dashboard-frontend') @section('page-content')
<!-- [ Layout container ] Start -->
<div class="layout-container">
    <!-- [ Layout navbar ( Header ) ] Start -->
    @includeIf('layouts.dashboard-navbar')
    <!-- [ Layout navbar ( Header ) ] End -->

    <!-- [ Layout content ] Start -->
    <div class="layout-content">
        <!-- [ content ] Start -->
        <!--/ menu  -->
        <div class="main_content_iner overly_inner">
            <div class="container-fluid p-0">
                <!-- page title  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <h4>Bitcoin Wallet Transactions</h4>
                                <p>Bitcoin received, sent, bought or sold appears here.</p>
                                <br />
                                <div class="white_box_tittle list_header mb-0">
                                    <ul class="nav nav-pills custom_bootstrap_nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="wallet">Send BTC</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="wallet_receive"> Receive BTC</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#" data-toggle="tab"> Transactions</a>
                                        </li>
                                    </ul>
                                    <br />
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
                                        <!-- <div class="add_button ml-10">
                                        <a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1">Add New</a>
                                    </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="QA_table mb_30">
                                        <!-- table-responsive -->
                                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                <label><i class="ti-search"></i><input type="search" class="" placeholder="Quick Search" aria-controls="DataTables_Table_0" /></label>
                                            </div>
                                            <table class="table lms_table_active3 dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1140px;">
                                                <thead>
                                                    <tr role="row">
                                                        <th scope="col" class="sorting_disabled" rowspan="1" colspan="1" style="width: 67px;"></th>
                                                        <th scope="col" class="sorting_disabled" rowspan="1" colspan="1" style="width: 173px;">Time</th>
                                                        <th scope="col" class="sorting_disabled" rowspan="1" colspan="1" style="width: 308px;">Description</th>
                                                        <th scope="col" class="sorting_disabled" rowspan="1" colspan="1" style="width: 200px;">Status</th>
                                                        <th scope="col" class="sorting_disabled" rowspan="1" colspan="1" style="width: 240px;">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd">
                                                        <td valign="top" colspan="5" class="dataTables_empty">No data available in table</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                <a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous"><i class="ti-arrow-left"></i></a><span></span>
                                                <a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" id="DataTables_Table_0_next"><i class="ti-arrow-right"></i></a>
                                            </div>
                                        </div>
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
        @includeIf('layouts.dashboard-footer')
        <!-- [ Layout footer ] End -->
    </div>
    <!-- [ Layout content ] Start -->
</div>
<!-- [ Layout container ] End -->
@endsection