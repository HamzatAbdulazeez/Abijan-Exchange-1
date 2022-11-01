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
        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">
                <!-- page title  -->
                <div class="row">
                    <div class="col-md-12 m-b-30">
                        <!-- begin page title -->
                        <div class="d-block d-sm-flex flex-nowrap align-items-center">
                            <div class="page-title mb-sm-0">
                            <h4>Receive Bitcoin Request</h4>
                            </div>
                        </div>
                        <!-- end page title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="export-table-wrapper table-responsive">
                                    <div class="export-buttons m-b-20">
                                        <a href="#" id="exportExcel" class="btn btn-primary">Export To Excel</a>
                                        <a href="#" id="exportCSV" class="btn btn-primary">Export To CSV</a>
                                    </div>
                                    <table id="export-table" class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Sender Name</th>
                                                <th>Receiver Name</th>
                                                <th>Email</th>
                                                <th>Amount</th>
                                                <th>Charges</th>
                                                <th>Payment</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Hamzat Abdulazeez</td>
                                                <td>Promise</td>
                                                <td>greenmousetest@gmail.com</td>
                                                <td>$10</td>
                                                <td>$320,800</td>
                                                <td>Via Bank Transfer</td>
                                                <td>13/10/2022</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Approved
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item" href="#">Enable</a></li>
                                                            <li><a class="dropdown-item" href="#">Disable</a></li>
                                                            <li><a class="dropdown-item" href="#">Suspend</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Promise Abdulazeez</td>
                                                <td>Hamzat</td>
                                                <td>greenmousetest@gmail.com</td>
                                                <td>$10</td>
                                                <td>$320,800</td>
                                                <td>Via Bank Transfer</td>
                                                <td>13/10/2022</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Suspended
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item" href="#">Enable</a></li>
                                                            <li><a class="dropdown-item" href="#">Disable</a></li>
                                                            <li><a class="dropdown-item" href="#">Suspend</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Promise Abdulazeez</td>
                                                <td>Hamzat</td>
                                                <td>greenmousetest@gmail.com</td>
                                                <td>$10</td>
                                                <td>$320,800</td>
                                                <td>Via Bank Transfer</td>
                                                <td>13/10/2022</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Approved
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item" href="#">Enable</a></li>
                                                            <li><a class="dropdown-item" href="#">Disable</a></li>
                                                            <li><a class="dropdown-item" href="#">Suspend</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
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