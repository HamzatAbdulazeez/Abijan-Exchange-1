@extends('layouts.frontend')

@section('header')
@includeIf('layouts.frontend-header')
@endsection

@section('footer')
@includeIf('layouts.frontend-footer')
@endsection

@section('page-content')
<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area dark bg-cover text-center text-light" style="background: url(assets/images/3.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1> Affiliate Program </h1>
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                    -
                    <li>Affiliate Program</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<div class="privacy-policy py-5">
    <div class="container">
        <div class="row mb-n5">
            <div class="col-lg-10 offset-lg-1 col-12">
                <div class="policy-inner">
                    <div class="policy-details-body">
                        <div class="terms">
                            <h6 class="mb-3">Refer & Earn money with us!</h6>
                            <p class="fs-sm"> {{config('app.name')}} provides you with a simple tool where you can earn
                                money when your friend use us. The {{config('app.name')}} Referral Program is functional,
                                safe, and easy to use. You can be rewarded, in just a few clicks. </p>
                        </div>
                        <div class="terms">
                            <h6 class="mb-3">Share Referral</h6>
                            <p class="fs-sm my-2"> To start earning, share your referral links and earn commission
                                each time anyone you refer to us completes an order. Your referral link can be found
                                on Referrals section when log in. Our system is very smooth and in realtime - you
                                will never miss your earnings.</p>
                            <p class="fs-sm my-2"> Complete Registration & Trade </p>
                            <p class="fs-sm my-2">Using your referral link, your referrer will sign up and trade on
                                {{config('app.name')}}.</p>
                            <p class="fs-sm my-2"> Get Referral Rewards</p>
                            <p class="fs-sm my-2">You will be rewarded the commission generated from your referrer's
                                trade. The more people people you refer to us, the more money you will make</p>
                        </div>
                        <div class="terms">
                            <h6 class="mb-3 mt-4">What distinguishes us from others?</h6>
                            <ul>
                                <li class="fs-sm">Trust</li>
                                <li class="fs-sm">High-level security and compliance</li>
                                <li class="fs-sm">Ease of use</li>
                                <li class="fs-sm">Access to convenient payment method</li>
                                <li class="fs-sm"> Intuitive User Experience</li>
                                <li class="fs-sm">Robust exchange with fast and secure platform</li>
                                <li class="fs-sm">24/7 order fullfillment</li>
                                <li class="fs-sm">Responsive Message Center and much more</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection