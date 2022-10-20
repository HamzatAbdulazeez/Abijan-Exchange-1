<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>{{config('app.name')}} | Dashboard</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{URL::asset('dash/assets/img/fav.png')}}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{URL::asset('dash/assets/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dash/assets/fonts/ionicons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dash/assets/fonts/linearicons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dash/assets/fonts/open-iconic.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dash/assets/fonts/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dash/assets/fonts/feather.css')}}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{URL::asset('dash/assets/css/bootstrap-material.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dash/assets/css/shreerang-material.css')}}">

    <!-- Libs -->
    <link rel="stylesheet" href="{{URL::asset('dash/assets/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dash/assets/libs/flot/flot.css')}}">

</head>

<body>
    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- Side-Nav -->
                @includeIf('layouts.dashboard-sidebar')
            <!-- Side-Nav Ends -->
            <!-- Page-Content -->
                @yield('page-content')
            <!-- Page-Content Ends -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Core scripts -->
    <script src="{{URL::asset('dash/assets/js/pace.js')}}"></script>
    <script src="{{URL::asset('dash/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::asset('dash/assets/libs/popper/popper.js')}}"></script>
    <script src="{{URL::asset('dash/assets/js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('dash/assets/js/sidenav.js')}}"></script>
    <script src="{{URL::asset('dash/assets/js/layout-helpers.js')}}"></script>
    <script src="{{URL::asset('dash/assets/js/material-ripple.js')}}"></script>

    <!-- Libs -->
    <script src="{{URL::asset('dash/assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{URL::asset('dash/assets/libs/eve/eve.js')}}"></script>
    <script src="{{URL::asset('dash/assets/libs/flot/flot.js')}}"></script>
    <script src="{{URL::asset('dash/assets/libs/flot/curvedLines.js')}}"></script>
    <script src="{{URL::asset('dash/assets/libs/chart-am4/core.js')}}"></script>
    <script src="{{URL::asset('dash/assets/libs/chart-am4/charts.js')}}"></script>
    <script src="{{URL::asset('dash/assets/libs/chart-am4/animated.js')}}"></script>

    <!-- Demo -->
    <script src="{{URL::asset('dash/assets/js/demo.js')}}"></script>
    <script src="{{URL::asset('dash/assets/js/analytics.js')}}"></script>
    <script>
        $(document).ready(function() {
            // checkCookie();
            $('#exampleModalCenter').modal();
        });

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkCookie() {
            var ticks = getCookie("modelopen");
            if (ticks != "") {
                ticks++;
                setCookie("modelopen", ticks, 1);
                if (ticks == "2" || ticks == "1" || ticks == "0") {
                    $('#exampleModalCenter').modal();
                }
            } else {
                // user = prompt("Please enter your name:", "");
                $('#exampleModalCenter').modal();
                ticks = 1;
                setCookie("modelopen", ticks, 1);
            }
        }
    </script>
    <script src="assets/js/pages/dashboards_index.js"></script>

</body>

</html>