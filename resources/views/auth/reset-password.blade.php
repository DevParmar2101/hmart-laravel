@extends('layouts.guest')
@section('content')
    <div class="login-register-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" href="#">
                                <h4>reset password</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="POST" action="{{ route('password.store') }}">
                                            @csrf

                                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                            <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email"/>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif

                                            <input id="password" class="block mt-1 w-full" type="password" name="password" value="{{ old('password') }}" required autocomplete="new-password" placeholder="Password"/>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif

                                            <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" required autocomplete="new-password" placeholder="Confirm Password"/>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                            @endif

                                            <div class="button-box">
                                                <button type="submit">
                                                    <span>Reset Password</span>
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
