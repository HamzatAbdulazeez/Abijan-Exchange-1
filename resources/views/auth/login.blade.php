@extends('layouts.frontend')

@section('page-content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<section class="togther">
    <div class="page-header min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                    <div class="card card-plain"><a href="https://abijan-website.netlify.app" target="_blank" rel="noreferrer"><img class="mb-4 text-center m-auto d-block d-lg-none" src="/static/media/logo.89ab20edece446e181e1.png" alt="" width="200"></a>
                        <div class="card-header pb-0 text-start mb-2">
                            <h4 class="fw-bold">Sign In</h4>
                            <p class="mb-0">Enter your email and password to sign In</p>
                        </div>
                        <div class="card-body">
                            <form action="#" autocomplete="off">
                                <div class="mb-4">
                                    <div class=""><input name="email" type="email" placeholder="Emaill address" class="form-control form-control-lg" value=""></div>
                                </div>
                                <div class="mb-4">
                                    <div class="">
                                        <div class="input-group"><input type="password" class="form-control form-control-lg" name="password" placeholder="Password" value=""><span class="input-group-text"><svg stroke="currentColor" fill="currentColor" stroke-width="0" onclick="Seepassword()" viewBox="0 0 512 512" class="visiblePassword" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M256.1 144.8c56.2 0 101.9 45.3 101.9 101.1 0 13.1-2.6 25.5-7.3 37l59.5 59c30.8-25.5 55-58.4 69.9-96-35.3-88.7-122.3-151.6-224.2-151.6-28.5 0-55.8 5.1-81.1 14.1l44 43.7c11.6-4.6 24.1-7.3 37.3-7.3zM52.4 89.7l46.5 46.1 9.4 9.3c-33.9 26-60.4 60.8-76.3 100.8 35.2 88.7 122.2 151.6 224.1 151.6 31.6 0 61.7-6.1 89.2-17l8.6 8.5 59.7 59 25.9-25.7L78.2 64 52.4 89.7zM165 201.4l31.6 31.3c-1 4.2-1.6 8.7-1.6 13.1 0 33.5 27.3 60.6 61.1 60.6 4.5 0 9-.6 13.2-1.6l31.6 31.3c-13.6 6.7-28.7 10.7-44.8 10.7-56.2 0-101.9-45.3-101.9-101.1 0-15.8 4.1-30.7 10.8-44.3zm87.8-15.7l64.2 63.7.4-3.2c0-33.5-27.3-60.6-61.1-60.6l-3.5.1z"></path>
                                                </svg></span></div>
                                    </div>
                                </div><a class="text-sm mx-auto text-dark" href="/forgot-password">Forgot Password?</a>
                                <div class="text-center mt-3"><button type="submit" class="btn btn-dark w-100 mt-2 mb-0 py-2">Sign in</button></div>
                            </form>
                        </div>
                        <div class="text-center pt-0 px-lg-2 px-1">
                            <p class="mb-4 text-sm mx-auto">Don't have an account?<a class="text-primary text-gradient fw-bold" href="{{route('register')}}"> Sign up</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                    <div class="position-relative bg-gradient-primary h-100 m-3 px-5 border-radius-lg d-flex flex-column justify-content-center overflow-hidden">
                        <div class="container"><a href="{{route('home')}}" target="_blank" rel="noopener noreferrer"><img src="{{URL::asset('assets/images/logoo.png')}}" alt="Logo" width="200"></a>
                            <h4 class="mt-5 text-white position-relative mb-5">The Most Trusted E-currency Exchange and Bills Payment Platform</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="logIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="sign">
                    <form class="sign-div" method="POST" action="{{ route('login') }}">
                        @csrf
                        <a href="/">
                            <img src="{{URL::asset('assets/images/logo.png')}}" draggable="false" alt="">
                        </a>

                        @includeIf('layouts.error_template')

                        <div class="row">
                            <div class="col-lg-12">
                                <label>Email</label>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input type="email" placeholder="Enter Your Email" name="email" class="input @error('email') is-invalid @enderror" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <label>Password</label>
                                <div class="row">
                                    <div class="col-md-12 mb-1">
                                        <input type="password" placeholder="Enter your Password" name="password" class="input @error('password') is-invalid @enderror" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-9"></div>
                                    <div class="col-md-3">
                                        <p>
                                            <a href="{{route('password.request')}}" style="color: #212536;font-size: 12px;">
                                                Forgot-Password
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        {!! app('captcha')->display() !!}

                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <button type="submit">Login</button>
                            </div>
                            <p class="fine">Don't have an account ? <a href="{{route('register')}}">Sign Up</a> </p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section> -->
@endsection