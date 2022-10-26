@extends('layouts.frontend')

@section('page-content')
@include('sweetalert::alert')
<section class="logIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="sign">
                    <form class="sign-div" method="POST" action="{{ route('password.email')}}">
                        @csrf
                        <a href="/">
                            <img src="{{URL::asset('assets/images/logo.png')}}" draggable="false" alt="">
                        </a>

                        @includeIf('layouts.error_template')

                        <div class="mt-4">
                            <h4 class="mb-0 mt-2">Forgot Password?</h4>
                            <p class="pt-1 opacity-50">Please type in the email address linked to your {{config('app.name')}} account to reset your password.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Email</label>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input type="text" placeholder="Enter Email" name="email" class="input" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit">Reset</button>
                            </div>
                        </div>
                        <p class="fine">Remebered Password? <a href="{{route('login')}}">Login</a> </p>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
@endsection
