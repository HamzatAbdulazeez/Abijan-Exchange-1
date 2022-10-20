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
                <h1>Buy & Sell</h1>
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                    -
                    <li>Buy & Sell</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->


<section class="about section-padding style-5 mt-5">
    <div class="content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-0">
                    <div class="section-head mb-30 style-5">
                        <h4 class="fw-bold"> HOW TO SELL E-CURRENCY TO US </h4>
                    </div>
                    <div class="line-links mt-3">
                        <a href="#">Once you login click the Buy/Sell button and select Sell E-Currency.</a>
                        <a href="#">Complete the form and click submit.</a>
                        <a href="#">A wallet address or ecurrency account will be given to you to send the coins to us.</a>
                        <a href="#">After you send funds to the wallet address or ecurrency account given to you, your naira will be available in your (naira wallet) and you can withdraw the Naira to your Nigeria bank account.</a>
                        <a href="#"> <span class="fw-bold">DROP YOUR MESSAGE: </span>
                            <span class="fs-sm"> Please ensure to provide complete details to help us attend to you as fast as possible. Please do not be in a hurry to tell us that you transferred coins 2 seconds ago and your acct is not funded. If you have sent coins to us, just hold on as it goes through blockchain confirmations and upon the first confirmation your funds will be credited into your naira wallet.</span> </a>
                    </div>
                    <p class="fs-sm mt-4">
                        <span class="fw-bold">NOTE*</span> We do not allow payment from third party and the money must carry your first name and surmane used to registered on our web portal. Pls do not write anything bitcoin or crypto when sending payment to us or else you stand the chance of losing your money.
                    </p>
                    <button class="btn btn-primary">
                        <a href="/register">
                            Procceed
                        </a>
                    </button>
                </div>

                <div class="col-2"></div>
                <div class="col-lg-5 order-0 order-lg-2 mb-5">
                    <img src="{{URL::asset('assets/images/mobile_wallet.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-0 order-lg-2 mb-5">
                    <div class="section-head mb-30 style-5">
                        <h4 class="fw-bold"> HOW TO BUY E -CURRENCY FROM US? </h4>
                    </div>
                    <div class="line-links mt-3">
                        <a href="#">Once you login click the Buy/Sell button and select Buy E-Currency.</a>
                        <a href="#">Complete the form and click submit.</a>
                        <a href="#">Go ahead with your payment as payment bank will pop up and must have been sent to you registered email, proceed to make the payment.</a>
                        <a href="#">Your wallet or ecurrency account will be credited after your payment has been confirmed. If you're buying bitcoin, the bitcoin will be available in your internal wallet.</a>
                        <a href="#"> <span class="fw-bold">DROP YOUR MESSAGE: </span>
                            <span class="fs-sm">Please ensure to provide complete details to help us attend to you as fast as possible. Once you go to your transaction log/history you will see the status of your transaction.
                        </a>
                    </div>
                    <p class="fs-sm mt-4">
                        <span class="fw-bold">NOTE *</span> We do not allow payment from third party and the money must carry your first name and surname used to register on our web portal. Pls do not write anything bitcoin or crypto when sending payment to us or else you stand the chance of losing your money. Your crypto or e-currency account will be funded in minutes after payment confirmation.
                    </p>
                    <button class="btn btn-primary">
                        <a href="/register">
                            Procceed
                        </a>
                    </button>
                </div>
                <div class="col-lg-5 order-2 order-lg-0 mb-5">
                    <img src="{{URL::asset('assets/images/mobile_wallet.png')}}" alt="">
                </div>
                <div class="col-2"></div>
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