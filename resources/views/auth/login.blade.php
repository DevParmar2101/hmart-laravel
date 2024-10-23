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
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="Email"/>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif

                                            <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Password"/>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif

                                            <div class="button-box">

                                                <div class="login-toggle-btn">
                                                    <input id="remember_me" name="remember" type="checkbox"/>
                                                    <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                                                </div>

                                                <button type="submit">
                                                    <span>Login</span>
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
