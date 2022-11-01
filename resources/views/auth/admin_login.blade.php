@extends('layouts.frontend')

@section('page-content')
@include('sweetalert::alert')
<section class="logIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="sign">
                    <form class="sign-div" method="POST" action="{{ route('admin.post.login') }}">
                        @csrf
                        <a href="/">
                            <img src="{{URL::asset('assets/images/logo.png')}}" class="mb-3" draggable="false" alt="">
                        </a>
                            <div class="text-center">
                                <h4>
                                    Admin Login
                                </h4>
                            </div>
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
                            <!--Password-->
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
                            <!--Password-->
                            <div class="col-md-12 mb-3">
                                <button type="submit">Login</button>
                            </div>
                            <!-- <p class="fine">Don't have an account ? <a href="{{route('register')}}">Sign Up</a> </p> -->
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
@endsection
