@php
    use Illuminate\Support\Facades\Route;
@endphp
@extends('layouts.guest')
@section('content')
<div class="login-register-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="{{ Route::is('login') ? 'active' :'' }}" href="{{ route('login') }}">
                            <h4>login</h4>
                        </a>
                        <a class="{{ Route::is('register') ? 'active' : '' }}" href="{{ route('register') }}">
                            <h4>register</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full Name"/>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif

                                        <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="Email"/>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif

                                        <input id="password" class="block mt-1 w-full" type="password" name="password" required  placeholder="Password"/>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif

                                        <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="current-password" placeholder="Confirm Password"/>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif

                                        <div class="button-box">

                                            <div class="login-toggle-btn">
                                                <input id="remember_me" name="remember" type="checkbox"/>
                                                <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                <a href="{{ route('login') }}">Already registered?</a>
                                            </div>

                                            <button type="submit">
                                                <span>Register</span>
                                            </button>
                                        </div>

                                    </form>
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
