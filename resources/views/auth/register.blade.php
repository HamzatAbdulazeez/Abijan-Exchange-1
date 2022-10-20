@extends('layouts.frontend')

@section('page-content')
<section class="SignUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="sign">
                    <form class="sign-div" method="POST" action="{{ route('post.register') }}" enctype="multipart/form-data">
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
                                        <input type="email" placeholder="Enter Your Email" name="email" class="input" required>
                                    </div>
                                </div>
                            </div>
                            <!--Password-->
                            <div class="col-lg-12">
                                <label>Password</label>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input type="password" placeholder="Enter your Password" name="password" class="input" required>
                                    </div>
                                </div>
                            </div>
                            <!--Comfirm Password-->
                            <div class="col-lg-12">
                                <label>Confirm Password</label>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input placeholder="Enter Comfirm Password" type="password" class="input" name="password_confirmation" required >
                                    </div>
                                </div>
                            </div>
                            <p>
                                By clicking Sign up, you agree to our Terms & Conditions
                            </p>
                            <!--Password-->
                            <div class="col-md-12 mb-3">
                                <button value="LogIn"> <a href="#"> Sign up</a></button>
                            </div>
                        </div>
                        <p class="fine">You have an account? <a href="{{route('login')}}">Login</a> </p>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
@endsection