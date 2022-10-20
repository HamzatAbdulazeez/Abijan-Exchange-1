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
                <h1>Privacy policy</h1>
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                    -
                    <li>Privacy policy</li>
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
                        <div class="terms" id="policy">
                            <h6 class="mb-3"> Privacy Policy </h6>
                            <p class="fs-sm">
                                Any information (s) we collect from you is for the sole use of identifying and providing you with quality service. We will neither lend nor sale out any of your personal details nor use it for any other activity outside serving you. However, we will comply fully with the law if we are demanded to provide any details about you which is within our reach.
                                We do hope you enjoy our service and refer others to us.
                            </p>
                        </div>
                        <div class="terms">
                            <h6 class="mb-3">General Provisions</h6>
                            <p class="fs-sm"> Before using any of our services, you agree to these terms and conditions and guarantee to be bound by it. </p>
                        </div>
                        <div class="terms">
                            <h6 class="mb-3">Definitions</h6>
                            <p class="fs-sm"> In this terms, many phrases will be used to address us and you. Definitions We” “Us” or “Provider” or ”
                                Abijan Integrated Services and her Web Sites” “You” “Your” “Client” “Customer” or “Member.” </p>
                        </div>
                        <div class="terms">
                            <h6 class="mb-3">Disclaimer of Warranty</h6>
                            <p class="fs-sm">
                                The internet is a very complex place. Sometimes, things may not go as expected. We do not give any guarantee or warranty for any service provided. However, we try our best to provide you with a better service at the shortest time possible. Anything you do on the internet is at your own risk and we’ll not be directly or indirectly responsible for any loss or unpleasant situations that might arise. <br>
                                ABIJAN INTEGRATED SERVICE MAKES NO WARRANTIES OR REPRESENTATIONS OF ANY KIND FOR THE SERVICES BEING OFFERED. THE SERVICE IS PROVIDED ON A “AS IS” AND “AS AVAILABLE” BASIS WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO WARRANTIES OF TITLE, NON-INFRINGEMENT, OR IMPLIED WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. If you are dissatisfied with Sunej Global and her Web Sites service or any of its terms, conditions, rules, policies, guidelines, or practices, your sole and exclusive remedy is to discontinue using the service. You may also want to write us with your reason for us to consider possible improvements. </p>
                        </div>
                        <div class="terms">
                            <h6 class="mb-3"> Processing Time and Notifications</h6>
                            <p class="fs-sm">
                                We try our best to process all orders same day or within 24hrs. However, for some reasons like scarcity, demand higher than supply, availability, and so many others, orders maybe be delayed. You agree to be patient and not use any kind of threat or abusive words on any of our staff or representative.
                            </p>
                        </div>
                        <div class="terms">
                            <h6 class="mb-3"> Your Account Security </h6>
                            <p class="fs-sm">
                                You are totally responsible for the security of your account. Account compromising is common and we neither have access nor a way of accessing your account. Please read our security recommendation on how to protect your account.
                            </p>
                        </div>
                        <div class="terms">
                            <h6 class="mb-3"> Information Authentication </h6>
                            <p class="fs-sm">
                                We will try our best to give out correct informations and to also work with the informations you provide us correctly. We will not be responsible for funding or working with wrong account details or informations provided by you. We will not also be responsible for any information wrongly displayed on any of our websites.
                            </p>
                        </div>
                        <div class="terms">
                            <h6 class="mb-3"> Refund Policy </h6>
                            <p class="fs-sm">
                                For any reason you need to demand for refund, this must be done in writing either electronic or physical. If the need for a refund is caused by us or we consider it neccesary, refund will be made within five (5) business days and we will remove 10% handling and 5% VAT and make refund within 5 business days from day of request.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection