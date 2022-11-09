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
                <h1>Contact Us</h1>
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                    -
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<div id="contact" class="contact-area my-5 pt-5" style="margin-bottom: 50px;">
    <div class="container">
        <div class="contact-content">
            <div class="row">
                <div class="col-lg-4 info align-self-center mb-5">
                    <div class="content">
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5>Our Email</h5>
                                    <a class="text-dark fs-sm" href="mailto:info@abijanexchange.com">info@abijanexchange.com</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5>Address</h5>
                                    <p class="fs-sm mb-3">
                                        <span class="fw-bold">IKEJA OFFICE: </span>
                                        5, Awolowo Way, Opposite Ikeja Local Govt. Ikeja,
                                        Lagos, Nigeria.
                                    </p>
                                    <p class="fs-sm">
                                        <span class="fw-bold">SHASHA OFFICE: </span>
                                        No 13, Shasha Road, Beside KFC Lagos State.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="icon">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="info">
                                    <h5>Phone</h5>
                                    <a class="text-dark fs-sm" href="tel:08038370329">08038370329</a> <br> <a class="text-dark fs-sm" href="tel:08023945439">08023945439</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 contact-form-box">
                    <div class="form-box">
                        <h2>Let's talk?</h2>
                        <p class="mt-3 fs-sm">
                            Although AbijanExchange is touted as a strictly online cryptocurrency exchange, we have
                            an office location where our staff provides worldclass support for you to be able to buy
                            and sell crypto/e-currencies with ease and at anytime.
                        </p>
                        @if(Session::has('success'))
                            <span class="alert alert-success">
                                {{Session::get('success')}}
                            </span>
                        @endif
                        <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        
                                        @if ($errors->has('name'))
                                            <span class="alert alert-error">
                                                {{ $errors->first('name') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        @if ($errors->has('email'))
                                            <span class="alert alert-error">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        @if ($errors->has('phone'))
                                            <span class="alert alert-error">
                                                {{ $errors->first('phone') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text">
                                        
                                        @if ($errors->has('subject'))
                                            <span class="alert alert-error">
                                                {{ $errors->first('subject') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="message" name="message" placeholder="Tell Us How we can Help You *"></textarea>
                                        @if ($errors->has('message'))
                                            <span class="alert alert-error">
                                                {{ $errors->first('message') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="submit" value="Send Message" class="btn btn-primary text-light">
                                        
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- MAP -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.343384098207!2d3.307846014150267!3d6.604181124053886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b91a5dd3fcf1b%3A0xb1888d2035a7f23e!2s13%20Shasha%20Rd%2C%20Akowonjo%20100001%2C%20Lagos!5e0!3m2!1sen!2sng!4v1664566826763!5m2!1sen!2sng" class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>
@endsection