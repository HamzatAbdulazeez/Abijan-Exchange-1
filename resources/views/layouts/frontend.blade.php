<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="shortcut icon" href="{{URL::asset('assets/images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{URL::asset('assets/css/remix.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/stick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/all.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/select.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/btn.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/party.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-c59500cb-d1db-4ed8-a5ab-4a3d80fd542b"></div>
    {!! NoCaptcha::renderJs() !!}
    <title> {{config('app.name')}} </title>
    <style type="text/css">
        div.eapps-widget {
            position: relative
        }

        div.eapps-widget.eapps-widget-show-toolbar:before {
            position: absolute;
            content: "";
            display: block;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
            pointer-events: none;
            border: 1px solid transparent;
            transition: border .3s ease;
            z-index: 1
        }

        .eapps-widget-toolbar {
            position: absolute;
            top: -32px;
            left: 0;
            right: 0;
            display: block;
            z-index: 99999;
            padding-bottom: 4px;
            transition: all .3s ease;
            pointer-events: none;
            opacity: 0
        }

        .eapps-widget:hover .eapps-widget-toolbar {
            opacity: 1;
            pointer-events: auto
        }

        .eapps-widget-toolbar a {
            text-decoration: none;
            box-shadow: none !important
        }

        .eapps-widget-toolbar-panel {
            border-radius: 6px;
            background-color: #222;
            color: #fff;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center;
            top: 0;
            position: relative;
            transition: all .3s ease;
            opacity: 0;
            overflow: hidden;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            box-shadow: 0 0 0 1px hsla(0, 0%, 100%, .2);
            height: 28px
        }

        .eapps-widget:hover .eapps-widget-toolbar-panel {
            opacity: 1
        }

        .eapps-widget-toolbar-panel-wrapper {
            width: 100%;
            position: relative
        }

        .eapps-widget-toolbar-panel-only-you {
            position: absolute;
            top: -24px;
            font-size: 11px;
            line-height: 14px;
            color: #9c9c9c;
            padding: 5px 4px
        }

        .eapps-widget-toolbar-panel-logo {
            width: 28px;
            height: 28px;
            border-right: 1px solid hsla(0, 0%, 100%, .2);
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .eapps-widget-toolbar-panel-logo svg {
            display: block;
            width: 15px;
            height: 15px;
            fill: #f93262
        }

        .eapps-widget-toolbar-panel-edit {
            font-size: 12px;
            font-weight: 400;
            line-height: 14px;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center;
            padding: 9px;
            border-right: 1px solid hsla(0, 0%, 100%, .2);
            color: #fff;
            text-decoration: none
        }

        .eapps-widget-toolbar-panel-edit-icon {
            width: 14px;
            height: 14px;
            margin-right: 8px
        }

        .eapps-widget-toolbar-panel-edit-icon svg {
            display: block;
            width: 100%;
            height: 100%;
            fill: #fff
        }

        .eapps-widget-toolbar-panel-views {
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center
        }

        .eapps-widget-toolbar-panel-views-label {
            font-size: 12px;
            font-weight: 400;
            line-height: 14px;
            margin-left: 8px
        }

        .eapps-widget-toolbar-panel-views-bar {
            display: -ms-inline-flexbox;
            display: inline-flex;
            width: 70px;
            height: 3px;
            border-radius: 2px;
            margin-left: 8px;
            background-color: hsla(0, 0%, 100%, .3)
        }

        .eapps-widget-toolbar-panel-views-bar-inner {
            border-radius: 2px;
            background-color: #4ad504
        }

        .eapps-widget-toolbar-panel-views-green .eapps-widget-toolbar-panel-views-bar-inner {
            background-color: #4ad504
        }

        .eapps-widget-toolbar-panel-views-red .eapps-widget-toolbar-panel-views-bar-inner {
            background-color: #ff4734
        }

        .eapps-widget-toolbar-panel-views-orange .eapps-widget-toolbar-panel-views-bar-inner {
            background-color: #ffb400
        }

        .eapps-widget-toolbar-panel-views-percent {
            display: -ms-inline-flexbox;
            display: inline-flex;
            margin-left: 8px;
            margin-right: 8px;
            font-size: 12px;
            font-weight: 400;
            line-height: 14px
        }

        .eapps-widget-toolbar-panel-views-get-more {
            padding: 9px 16px;
            background-color: #f93262;
            color: #fff;
            font-size: 12px;
            font-weight: 400;
            border-radius: 0 6px 6px 0
        }

        .eapps-widget-toolbar-panel-share {
            position: absolute;
            top: 0;
            display: inline-block;
            margin-left: 8px;
            width: 83px;
            height: 28px;
            padding-bottom: 4px;
            box-sizing: content-box !important
        }

        .eapps-widget-toolbar-panel-share:hover .eapps-widget-toolbar-panel-share-block {
            opacity: 1;
            pointer-events: all
        }

        .eapps-widget-toolbar-panel-share-button {
            padding: 0 18px;
            height: 28px;
            background-color: #1c91ff;
            color: #fff;
            font-size: 12px;
            font-weight: 400;
            border-radius: 6px;
            position: absolute;
            top: 0;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: row;
            flex-direction: row;
            cursor: default;
            -ms-flex-align: center;
            align-items: center
        }

        .eapps-widget-toolbar-panel-share-button svg {
            display: inline-block;
            margin-right: 6px;
            fill: #fff;
            position: relative;
            top: -1px
        }

        .eapps-widget-toolbar-panel-share-block {
            position: absolute;
            background: #fff;
            border: 1px solid hsla(0, 0%, 7%, .1);
            border-radius: 10px;
            width: 209px;
            top: 32px;
            transform: translateX(-63px);
            opacity: 0;
            pointer-events: none;
            transition: all .3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, .05)
        }

        .eapps-widget-toolbar-panel-share-block:hover {
            opacity: 1;
            pointer-events: all
        }

        .eapps-widget-toolbar-panel-share-block-text {
            color: #111;
            font-size: 15px;
            font-weight: 400;
            padding: 12px 0;
            text-align: center
        }

        .eapps-widget-toolbar-panel-share-block-text-icon {
            padding-bottom: 4px
        }

        .eapps-widget-toolbar-panel-share-block-actions {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: row;
            flex-direction: row;
            border-top: 1px solid hsla(0, 0%, 7%, .1)
        }

        .eapps-widget-toolbar-panel-share-block-actions-item {
            width: 33.333333%;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            height: 39px;
            transition: all .3s ease;
            background-color: transparent
        }

        .eapps-widget-toolbar-panel-share-block-actions-item:hover {
            background-color: #fafafa
        }

        .eapps-widget-toolbar-panel-share-block-actions-item a {
            width: 100%;
            height: 100%;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center
        }

        .eapps-widget-toolbar-panel-share-block-actions-item-icon {
            width: 16px;
            height: 16px;
            display: block
        }

        .eapps-widget-toolbar-panel-share-block-actions-item-facebook .eapps-widget-toolbar-panel-share-block-actions-item-icon {
            fill: #3c5a9b
        }

        .eapps-widget-toolbar-panel-share-block-actions-item-twitter .eapps-widget-toolbar-panel-share-block-actions-item-icon {
            fill: #1ab2e8
        }

        .eapps-widget-toolbar-panel-share-block-actions-item-google .eapps-widget-toolbar-panel-share-block-actions-item-icon {
            fill: #dd4b39
        }

        .eapps-widget-toolbar-panel-share-block-actions-item:not(:last-child) {
            border-right: 1px solid hsla(0, 0%, 7%, .1)
        }
    </style>
    <link href="https://apps.elfsight.com" rel="preconnect" crossorigin="">
    <link href="https://static.elfsight.com" rel="preconnect" crossorigin="">
    <link href="https://service-reviews-ultimate.elfsight.com" rel="preconnect" crossorigin="">
    <link href="https://storage.elfsight.com" rel="preconnect" crossorigin="">
    <script>
        window.setTimeout(function() {
            $(".alert-timeout").fadeTo(500, 0).slideUp(1000, function() {
                $(this).remove();
            });
        }, 11000);
    </script>
</head>

<body cz-shortcut-listen="true" style="padding-top: 0px;">
    <div id='loader'>
        <div class="loader-inner">
            <div class="loading-content"></div>
        </div>
    </div>
    <!-- Header -->
        @yield('header')
    <!-- Header Ends -->

    <!-- Page-Content -->
        @yield('page-content')
    <!-- Page-Content Ends -->

    <!-- Footer -->
        @yield('footer')
    <!-- Footer Ends -->

    <!-- MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel"> PRICE LIST FOR TODAY <span class="fw-bold" id="todayDate">10/17/2022</span> </h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="row">

                        <div class="col-6">
                            <h6 class="fw-bold"> E-Currency </h6>
                        </div>

                        <div class="col-3">
                            <div class="badge bg-success py-2 px-3">Buy</div>
                        </div>

                        <div class="col-3">
                            <div class="badge bg-danger py-2 px-3">Sell</div>
                        </div>

                    </div>

                    <hr class="w-100">
                    <div class="row mt-4">

                        <div class="col-6">
                            <d class="flex align-items-center">
                                <img width="30" src="assets/images/btc_icon.svg" alt="">
                                <span class="ps-2 fs-sm "> Bitcoin </span>
                            </d>
                        </div>

                        <div class="col-3 fw-bold fs-sm">₦615/$</div>
                        <div class="col-3 fw-bold fs-sm">₦595/$</div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END MODAL -->

    <script src="{{URL::asset('assets/js/platform.js')}}"></script>
    <!-- <div class="elfsight-app-659d6c3a-e491-45a4-95a3-647fa0e14e83"></div> -->
    <script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/slick.js')}}"></script>
    <script src="{{URL::asset('assets/js/counter.js')}}"></script>
    <script src="{{URL::asset('assets/js/way.js')}}"></script>
    <script src="{{URL::asset('assets/js/select.js')}}"></script>
    <script src="{{URL::asset('assets/js/main.js')}}"></script>
    <script src="{{URL::asset('assets/js/boot.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="//code.tidio.co/f6xeuwwuzfupgmmdthyenwaj4ys1zray.js" async></script>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    <!--End mc_embed_signup-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <iframe id="tidio-chat-code" title="Tidio Chat code" style="display: none;"></iframe>
    <div id="tidio-chat"><iframe title="Tidio Chat" id="tidio-chat-iframe" style="display: block; border: none; position: fixed; inset: auto 9px 35px auto; width: 94px; height: 94px; opacity: 1; background: none transparent !important; margin: 0px; max-height: 100vh; max-width: 100vw; transform: translateY(0px); transition: none 0s ease 0s !important; visibility: visible; z-index: 999999999 !important; border-radius: 47px 30px 47px 47px;"></iframe>
    </div>
    <script>
        $(function() {
            $("form").submit(function() {
                $('#loader').show();
            });
        });
    </script>
</body>

</html>
