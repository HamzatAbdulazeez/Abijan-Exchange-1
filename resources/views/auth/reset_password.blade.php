@extends('layouts.frontend')

@section('page-content')
<section class="logIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="sign">
                    <form class="sign-div" method="POST" action="{{ route('user.update.password')}}">
                        @csrf
                        <a href="/">
                            <img src="{{URL::asset('assets/images/logo.png')}}" draggable="false" alt="">
                        </a>

                        @includeIf('layouts.error_template')

                        <div class="mt-4">
                            <h4 class="mb-0 mt-2">Reset Password</h4>
                            <p class="pt-1 opacity-50">Before proceeding, please check your email and phone number for a reset password code.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Code</label>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input type="text" placeholder="Enter Code" name="code" class="input" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>New Password</label>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input type="password" placeholder="Enter New Password" name="password" class="input" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>Re-Enter New Password</label>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input type="password" placeholder="Enter Password Comfirmation" name="password_confirmation" class="input" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
@endsection