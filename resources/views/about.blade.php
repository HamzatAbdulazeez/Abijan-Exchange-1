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
                <h1>About Us</h1>
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                    -
                    <li>About Us</li>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->


<!-- ABOUT -->
<section class="choose-us py-5 style-6 mt-5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="img">
                    <img src="{{URL::asset('assets/images/man_arrow.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="info">
                    <h3 class="fw-bold mb-4">Welcome to {{config('app.name')}}</h3>
                    <p class="fs-sm mb-3">
                        {{config('app.name')}} is a leading cryptocurrency exchange and your most reliable source for fast e-currency funding, we provide the safest and easy-to-use digital currency trading platform. {{config('app.name')}} is a Nigeria biggest E-currency Exchange Company sine 2012. <br> <br> {{config('app.name')}} is a registered company with CAC No. 1820723 and its operated as Abijan Integrated Services.
                    </p>
                    <p class="fs-sm">We solve the incessant problem of getting into the crypto market at the right price. We have reduced the unbearable margin between Buying and Selling.</p>
                    <ul class="mt-5">
                        <li class="d-flex align-items-center mb-3">
                            <small class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                <img src="{{URL::asset('assets/images/ch5.png')}}" alt="">
                            </small>
                            <div class="">
                                <h5 class="fs-sm">Trade With Confidence</h5>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <small class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                <img src="{{URL::asset('assets/images/ch5.png')}}" alt="">
                            </small>
                            <div class="">
                                <h5 class="fs-sm">Asset, Price, Quantity, Time and Margin are decided by you. </h5>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <small class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                <img src="{{URL::asset('assets/images/ch5.png')}}" alt="">
                            </small>
                            <div class="">
                                <h5 class="fs-sm">Our system is very fluid - you will never miss important opportunities to Trade 24/7.</h5>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <small class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                <img src="{{URL::asset('assets/images/ch5.png')}}" alt="">
                            </small>
                            <div class="">
                                <h5 class="fs-sm">Asset Security Is Paramount</h5>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <small class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                <img src="assets/images/ch5.png" alt="">
                            </small>
                            <div class="">
                                <h5 class="fs-sm">We keep your bitcoin in the most secure wallets. We use the most Secure Procedures to keep and move funds; we have cold storage.</h5>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <small class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                <img src="assets/images/ch5.png" alt="">
                            </small>
                            <div class="">
                                <h5 class="fs-sm">We have wealth of experience in the digital currency industry. We deliver the international standard of cryptocurrency Exchange and give you peace of mind</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about section-padding style-5 mt-5">
    <div class="content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-0">
                    <div class="section-head mb-30 style-5">
                        <h2 class="fw-bold"> What distinguishes us from others? </h2>
                    </div>
                    <p>We have wealth of experience in the digital currency industry. We deliver the international standard of cryptocurrency Exchange and give you peace of mind. </p>
                    <div class="line-links mt-2">
                        <a href="#">Trust</a>
                        <a href="#">High-level security and compliance</a>
                        <a href="#">Ease of use</a>
                        <a href="#">Access to convenient payment method</a>
                        <a href="#">Intuitive User Experience</a>
                        <a href="#">Robust exchange with fast and secure platform</a>
                        <a href="#">24/7 order fullfillment</a>
                        <a href="#">Responsive Message Center and much more</a>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-lg-5 order-0 order-lg-2 mb-5">
                    <img src="{{URL::asset('assets/images/mobile_wallet.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ's -->
<div class="content sec-content my-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12 order-2 order-lg-0">
                <div class="info">
                    <div class="section-head style-4 mb-5">
                        <h2 class="fw-bold"> Frequently asked questions </h2>
                    </div>
                    <div class="faq style-3 style-4">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading1"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">How is
                                        the price calculated?</button></h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">The price of Bitcoin and other
                                        digital currencies are determined by supply and demand:
                                        the buyers who want a certain currency and the sellers
                                        who have that currency. {{config('app.name')}} does not set the
                                        price of Bitcoin or any digital currency.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Why is
                                        the Bitcoin price different on Google?</button></h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">There is no global Bitcoin
                                        price, it isn't pegged to any currency, country or
                                        Bitcoin platform. When you see the price on Google, it
                                        is simply showing an estimated, international price
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Do I
                                        need to buy a whole Bitcoin?</button></h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">No. Bitcoin, Ethereum and most
                                        other digital currencies are divisible. You can spend a
                                        small amount of money and buy or sell very small amounts
                                        over time.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection