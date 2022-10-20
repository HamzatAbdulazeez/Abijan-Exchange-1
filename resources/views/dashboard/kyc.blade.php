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
        <div class="container-fluid flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> -->
                    <li class="breadcrumb-item active">KYC</li>
                </ol>
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