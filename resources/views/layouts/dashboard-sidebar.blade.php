<!-- [ Layout sidenav ] Start -->
<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo">
        <span class="app-brand-logo demo">
            <a href="/" class="app-brand-text demo sidenav-text font-weight-normal ml-2">
                <img src="{{URL::asset('dash/assets/img/logo.png')}}" alt="Brand Logo" width="160" class="img-fluid">
            </a>
        </span>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>
    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">

        <!-- Dashboards -->
        <li class="sidenav-item open active">
            <a href="javascript:" class="sidenav-link">
                <i class="sidenav-icon feather icon-home"></i>
                <div>Dashboards</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-layers"></i>
                <div>Naira Wallet</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="" class="sidenav-link">
                        <div>Withdraw Naira</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="" class="sidenav-link">
                        <div>Deposit Naira</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="" class="sidenav-link">
                        <div>Transactions</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-layout"></i>
                <div>Bitcoin Wallet</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="" class="sidenav-link" target="_blank">
                        <div>Send BTC</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="" class="sidenav-link" target="_blank">
                        <div>Receive BTC</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="" class="sidenav-link" target="_blank">
                        <div>Transaction</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link">
                <i class="sidenav-icon feather icon-activity"></i>
                <div>Buy & Sell</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link">
                <i class="sidenav-icon feather icon-user-check"></i>
                <div>Utility Bill</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link">
                <i class="sidenav-icon feather icon-life-buoy"></i>
                <div>Rate</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-book"></i>
                <div>Message Center</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item"><a href="" class="sidenav-link">
                        <div>Inbox</div>
                    </a></li>
                <li class="sidenav-item"><a href="" class="sidenav-link">
                        <div>Sent Mail</div>
                    </a></li>
                <li class="sidenav-item"><a href="" class="sidenav-link">
                        <div>Trash</div>
                    </a></li>
                <li class="sidenav-item"><a href="" class="sidenav-link">
                        <div>Archived Mails</div>
                    </a></li>
            </ul>
        </li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-target"></i>
                <div>Settings</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item"><a href="{{route('profile')}}" class="sidenav-link">
                        <div>Profile</div>
                    </a></li>
                <li class="sidenav-item"><a href="{{route('referral')}}" class="sidenav-link">
                        <div>Referral</div>
                    </a></li>
            </ul>
        </li>
    </ul>
</div>
<!-- [ Layout sidenav ] End -->