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
                    <div class="col-12 col-lg-12">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <div class="card-heading">
                                    <h4 class="card-title">View all Recently referred</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">S/N</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone Number</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">#</th>
                                                <td>Hamzat Abdulazeez</td>
                                                <td>greenmouse@gmail.com</td>
                                                <td>09068831216</td>
                                                <td>
                                                    <span style="font-size: 11px; background: green;padding: 5px;border-radius: 5px;color: #fff;font-weight: 600;text-transform: uppercase;">Reffered</span>
                                                </td>
                                                <td><span style="font-size: 11px; background: green;padding: 5px;border-radius: 5px;color: #fff;font-weight: 600;text-transform: uppercase;">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <td style="white-space:nowrap">No Data yet</td>
                                            </tr>
                                        </tbody>
                                    </table>
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