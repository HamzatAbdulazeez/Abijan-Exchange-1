@extends('layouts.frontend')

@section('page-content')
@include('sweetalert::alert')
<section class="logIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="sign">
                    <form class="sign-div" method="POST" action="{{url('user/confirm-password')}}">
                        @csrf
                        <a href="/">
                            <img src="{{URL::asset('assets/images/logo.png')}}" draggable="false" alt="">
                        </a>

                        @includeIf('layouts.error_template')

                        <div class="mt-4">
                            <p class="pt-1 opacity-50">Before proceeding, please enter your correct password.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Confirm Password</label>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input type="password" placeholder="Enter New Password" name="password" class="input" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit">Confirm Password</button>
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
