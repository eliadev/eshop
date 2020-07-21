@extends('layouts.header')
@section('content')
<div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login - Register</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="login-register-wrapper pt-100 pb-100 pt-sm-58 pb-sm-58">
            <div class="container">
                <div class="member-area-from-wrap">
                    <div class="row">
						<div class="col-lg-3"></div>
                        <div class="col-lg-6"> 
                            <div class="login-reg-form-wrap  pr-lg-50">
                                <h2>Sign In</h2>
								@if (session('status'))
									<div class="alert alert-danger">
									  {{ session('status') }}
									</div>
								@endif 
								<form class="c-form" method="POST" action="{{ route('front.doLogin') }}">
								@csrf
                                    <div class="single-input-item">
                                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your Email" >
										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
                                    </div>
                                    <div class="single-input-item">
                                       <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Enter your Password" >
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                    <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                                </div>
                                            </div>
                                            <a href="#" class="forget-pwd">Forget Password?</a>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button type="submit" class="sqr-btn">{{ __('Login') }}</button>
										<a href="{!! route('register') !!}" class="text-center">&nbsp; Register a new membership</a>
                                    </div>
                                </form>
                            </div>
                        </div>
						<div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection