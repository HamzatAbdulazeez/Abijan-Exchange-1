@extends('layouts.frontend')

@section('page-content')
<section class="logIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="sign">
                    <form class="sign-div" method="POST" action="{{ route('email.confirmation', Crypt::encrypt($user->id))}}">
                        @csrf
                        <a href="/">
                            <img src="{{URL::asset('assets/images/logo.png')}}" draggable="false" alt="">
                        </a>

                        @includeIf('layouts.error_template')

                        <div class="mt-3">
                            <h4 class="mb-0 mt-2">Verify Your Account</h4>
                            <p class="pt-1 opacity-50">Before proceeding, please check your email for a verification code.</p>
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
                            <div class="col-md-12 mb-3">
                                <button type="submit">Verify Account</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">
                        <form class="form-div" method="POST" action="{{ route('email.verify.resend', Crypt::encrypt($user->email)) }}">
                            @csrf
                            <div class="login-input continue">
                                {{ __('If you did not receive the email') }},
                                <button style="border: none; background: transparent; color: #EA5B0C;"type="submit">{{ __('Click here to request another') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
@endsection