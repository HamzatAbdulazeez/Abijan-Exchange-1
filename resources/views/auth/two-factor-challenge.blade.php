@extends('layouts.frontend')

@section('page-content')
@include('sweetalert::alert')
<section class="logIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="sign">
                    <form class="sign-div" method="POST" action="{{url('/two-factor-challenge')}}">
                        @csrf
                        <a href="/">
                            <img src="{{URL::asset('assets/images/logo.png')}}" draggable="false" alt="">
                        </a>

                        @includeIf('layouts.error_template')

                        <div class="mt-4">
                            <p class="pt-1 opacity-50">Before proceeding, please enter your authentication code to login.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Authentication Code</label>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input type="text" placeholder="Enter Auth Code" name="code" class="input" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit">Submit</button>
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
