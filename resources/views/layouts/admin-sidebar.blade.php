<!-- [ Layout sidenav ] Start -->
<nav class="sidebar ">
    <!-- <nav class="sidebar dark_sidebar"> -->
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="{{route('admin_welcome')}}"><img src="{{URL::asset('admin/libraries/logoo.png')}}" alt=""></a>
        <a class="small_logo" href="{{route('admin_welcome')}}"><img src="{{URL::asset('admin/libraries/logo.png')}}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li>
            <a href="{{route('admin_welcome')}}" class="chome" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{URL::asset('admin/libraries/1_003.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Dashboard </span>
                </div>
            </a>
        </li>
        <li>
            <a aria-expanded="false" class="has-arrow cngnwallet">
                <div class="nav_icon_small">
                    <img src="{{URL::asset('admin/libraries/2_002.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Wallet Requests</span>
                </div>
            </a>
            <ul>
                <li><a href="{{route('Wrequest')}}">Withdraw Request</a></li>
                <li><a href="{{route('Drequest')}}">Deposit Request</a></li>
                {{-- <li><a href="">Transactions</a></li> --}}
            </ul>
        </li>
        <li>
            <a href="{{route('buy_sell')}}" aria-expanded="false" class="cbuynsell">
                <div class="nav_icon_small">
                    <img src="{{URL::asset('admin/libraries/3_002.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Buy &amp; Sell</span>
                </div>
            </a>
        </li>
        <li>
            <a class="has-arrow cbitwallet" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{URL::asset('admin/libraries/6.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Bitcoin Request</span>
                </div>
            </a>
            <ul>
                <li><a href="{{route('send_request')}}">Send BTC</a></li>
                <li><a href="{{route('receive_request')}}">Receive BTC</a></li>
                <!-- <li><a href="wallet_transactions">Transactions</a></li> -->
            </ul>
        </li>
        <li>
            <a class="has-arrow cbitwallet" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{URL::asset('admin/libraries/2_002.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Swap Request</span>
                </div>
            </a>
            <ul>
                <li><a href="{{route('swap_request')}}">Shift Swap Request</a></li>
                <!-- <li><a href="wallet_transactions">Transactions</a></li> -->
            </ul>
        </li>
        <li>
            <a href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{URL::asset('admin/libraries/2_002.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>P2P Request</span>
                </div>
            </a>
        </li>
        <li>
            <a href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{URL::asset('admin/libraries/2_002.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Utility Bills Request</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{route('view_referral')}}" class="creferral" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{URL::asset('admin/libraries/5.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Referrals</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{route('adminprofile')}}" aria-expanded="false" class="cprofile">
                <div class="nav_icon_small">
                    <img src="{{URL::asset('admin/libraries/General.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>My Profile</span>
                </div>
            </a>
        </li>
        <li>
            <a class="has-arrow cmailbox" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{URL::asset('admin/libraries/Mail_Box.svg')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Message Center </span>
                </div>
            </a>
            <ul>
                <li><a href="{{route('message_center')}}">Inbox</a></li>
                <li><a href="{{route('sent_mails')}}">Sent Mails</a></li>
                <li><a href="mailbox_trash">Trash</a></li>
                <li><a href="mailbox_archive">Archived Mails</a></li>
            </ul>
        </li>
        <li>
            <a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{URL::asset('admin/libraries/17.png')}}" alt="">
                </div>
                <div class="nav_title">
                    <span>Log Out</span>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                    </form>
                </div>
            </a>
        </li>
    </ul>
</nav>
<!-- [ Layout sidenav ] End -->