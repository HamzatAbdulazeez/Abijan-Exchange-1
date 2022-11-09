<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - Fastest and easiest way to buy and sell bitcoins - Abijan Exchange</title>


    <!-- css files -->
    <script src="https://kit.fontawesome.com/997b229808.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{URL::asset('admin/libraries/logo.png')}}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/bootstrap.css')}}">


    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/themify-icons.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/nice-select.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/owl.css')}}">
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/gijgo.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{URL::asset('admin/awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/tagsinput.css')}}">

    <!-- date picker -->
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/date-picker.css')}}">

    <link rel="stylesheet" href="{{URL::asset('admin/libraries/vectormap-2.css')}}">

    <!-- scrollabe  -->
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/scrollable.css')}}">
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/jquery.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/responsive.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/buttons.css')}}">
    <!-- text editor css -->
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/summernote-bs4.css')}}">
    <!-- morris css -->
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/morris.css')}}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/material-icons.css')}}">
    <!--  -->
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/adminstyle.css')}}">

    <!-- menu css  -->
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/metisMenu.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{URL::asset('admin/libraries/style.css')}}">

    <!--  -->
    <link rel="stylesheet" href="{{URL::asset('admin/apex/css/style.css')}}">
    <!--  -->
    <link rel="stylesheet" href="{{URL::asset('admin/apex/css/vendors.css')}}">

    <!-- fontawesome Icon -->
    <script src="https://kit.fontawesome.com/997b229808.js" crossorigin="anonymous"></script>
        <!-- bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Java -->

    <!-- <link rel="stylesheet" href="libraries/default.css" id="colorSkinCSS"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
    <!-- [ Layout wrapper ] Start -->
    <!-- Side-Nav -->
    @includeIf('layouts.admin-sidebar')
    @include('sweetalert::alert')
            <!-- Side-Nav Ends -->
    <section class="main_content adminboard_part large_header_bg">
        @yield('page-content')
    </section>
    <div class="CHAT_MESSAGE_POPUPBOX">
    <div class="CHAT_POPUP_HEADER">
        <div class="MSEESAGE_CHATBOX_CLOSE">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z" fill="white"></path>
            </svg>

        </div>
        <h3>Message Notification</h3>
        <div class="Chat_Listed_member">
            <!--  You have no new message -->
            You have no new messages from Abijan Exchange Support.
        </div>
    </div>
    <div class="CHAT_POPUP_BODY">
                <p class="mesaged_send_date">
            Your new messages will appear here.
        </p>
                    </div>
</div>
    <!-- [ Layout wrapper] End -->
    <!-- js files -->
    <script src="{{URL::asset('admin/libraries/jquery-3.js')}}"></script>
    <!-- popper js -->
    <script src="{{URL::asset('admin/libraries/popper.js')}}"></script>
    <!-- bootstarp js -->
    <script src="{{URL::asset('admin/libraries/bootstrap.js')}}"></script>
    <!-- sidebar menu  -->
    <script src="{{URL::asset('admin/libraries/metisMenu.js')}}"></script>
    <!-- waypoints js -->
    <script src="{{URL::asset('admin/libraries/jquery_003.js')}}"></script>
    <!-- waypoints js -->
    <script src="{{URL::asset('admin/libraries/Chart.js')}}"></script>
    <!-- counterup js -->
    <script src="{{URL::asset('admin/libraries/jquery_002.js')}}"></script>

    <!-- nice select -->
    <script src="{{URL::asset('admin/libraries/jquery_004.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{URL::asset('admin/libraries/owl.js')}}"></script>

    <!-- responsive table -->
    <script src="{{URL::asset('admin/libraries/jquery.js')}}"></script>
    <script src="{{URL::asset('admin/libraries/dataTables_002.js')}}"></script>
    <script src="{{URL::asset('admin/libraries/dataTables.js')}}"></script>
    <script src="{{URL::asset('admin/libraries/buttons_003.js')}}"></script>
    <script src="{{URL::asset('admin/libraries/jszip.js')}}"></script>
    <script src="{{URL::asset('admin/libraries/pdfmake.js')}}"></script>
    <script src="{{URL::asset('admin/libraries/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('admin/libraries/buttons.js')}}"></script>
    <script src="{{URL::asset('admin/libraries/buttons_002.js')}}"></script>

    <!-- datepicker  -->
    <!-- <script src="libraries/datepicker_002.js"></script> -->
    <script src="{{URL::asset('admin/libraries/datepicker.js')}}"></script>
    <script src="{{URL::asset('admin/libraries/datepicker_003.js')}}"></script>

    <script src="{{URL::asset('admin/libraries/chart.js')}}"></script>
    <script src="{{URL::asset('admin/libraries/roundedBar.js')}}"></script>
    <script src="{{URL::asset('admin/libraries/sweetalert.min.js')}}"></script>


    <!-- custom js -->
    <script src="{{URL::asset('admin/libraries/dashboard_init.js')}}"></script>

    <script>
        var txn_ngn = "0.00";
        var txn_usd = "0.00";
        var txn_btc = "0";
        var txn_total = "0";
        var txn_btc_upto = "";
        var txn_ngn_upto = "0";

        function getrate(unit, buy = null) {
            var btc_in_usd = "19290.12";
            var fiat_conversion_table = [{ "port_short": "BTC", "port_type": "crypto", "port_sell": "725", "port_buy": "760" }, { "port_short": "PM", "port_type": "ecurrency", "port_sell": "720", "port_buy": "760" }, { "port_short": "ETH", "port_type": "crypto", "port_sell": "640", "port_buy": "770" }, { "port_short": "TRC20", "port_type": "crypto", "port_sell": "725", "port_buy": "760" }, { "port_short": "BCH", "port_type": "crypto", "port_sell": "640", "port_buy": "770" }];
            let counterfiat = 0;
            for (const obj of fiat_conversion_table) {
                var cname = (obj.port_short).toLowerCase();
                var csell = obj.port_sell;
                var cbuy = obj.port_buy;
                var ctype = obj.port_type;
                if (cname === unit) {
                    switch (buy) {
                        case 'sell':
                            var answer = csell;
                            break;
                        case 'buy':
                            var answer = cbuy;
                            break;
                        case 'type':
                            var answer = ctype;
                            break;
                        default:
                            break;
                    }
                }
                counterfiat++;
            }
            if (unit == "live") {
                var answer = btc_in_usd;
            }
            return answer;
        }
    </script>
    <script src="{{URL::asset('admin/libraries/custom.js?v=1666701143')}}"></script>

    <script src="{{URL::asset('admin/apex/js/vendors.js')}}"></script>

    <script src="{{URL::asset('admin/apex/js/app.js')}}"></script>
    <script src="{{URL::asset('admin/apex/js/bootstrap.min.js')}}"></script>
    <script>
        $(function(){
            $('#editRate').click(function(){
                var id = ($(this).data("id"));
                var currency = ($(this).data("currency"));
                var sell_rate = ($(this).data("sell_rate"));
                var buy_rate = ($(this).data("buy_rate"));
                var port_short = ($(this).data("port_short"));
                var fee = ($(this).data("fee"));
                $('#edit_id').val(id);
                $('#edit_currency').val(currency);
                $('#edit_sell_rate').val(sell_rate);
                $('#edit_port_short').val(port_short);
                $('#edit_buy_rate').val(buy_rate);
                $('#edit_fee').val(fee);
                $('#editRateModal').modal('show')

            })
            $('#deleteRate').click(function(){
                var id = ($(this).data("id"));
                Swal.fire({
                title: 'Are you sure you want to delete this currency?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "POST",
                        url: "{{route('delete.rate')}}",
                        data: {
                            id: id
                        },
                        success: function(result) {
                            Swal.fire(
                                'Deleted!',
                                'Rate deleted.',
                                'success'
                            )
                            location.reload();
                        }
                    });

                })

            })
        })
    </script>
</body>

</html>
