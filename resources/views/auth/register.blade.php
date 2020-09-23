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
							<div class="login-reg-form-wrap mt-md-100 mt-sm-58">
								<h2>Sign up Form</h2>
								@if($errors->all())
									<div class="alert alert-danger">
										<ul>
										@foreach($errors->all() as $error)
											<li>{{$error}}</li>
										@endforeach
										</ul>
									</div>
								@endif
								@if (session('alert-danger'))
									<div class="alert alert-danger">
									  {{ session('alert-danger') }}
									</div>
								@endif
								<div class="flash-message">
									@foreach (['danger', 'warning', 'success', 'info'] as $msg)
										@if(Session::has('alert-' . $msg))
											<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
										@endif
									@endforeach
								</div>
								<form method="POST" action="{{ route('register') }}">
									@csrf
									<div class="single-input-item">
										<input id="first_name" type="text" class="@error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required>
										@error('first_name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="single-input-item">
										<input id="last_name" type="text" class="@error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required>
										@error('last_name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="single-input-item">
										<input id="date_of_birth" type="date" class="@error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" placeholder="Date of Birth" required>
										@error('date_of_birth')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="single-input-item">
										<input id="phone" type="text" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="phone" required>
										@error('phone')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<div class="single-input-item">
										<input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your Email" required>
										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="single-input-item">
										<input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="password" required>
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="single-input-item">
										<input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" required>
									</div>

									<div class="single-input-item">
                                        <button type="submit" class="sqr-btn">{{ __('Register') }}</button>
										<a href="{!! route('front.login') !!}" class="text-center">&nbsp;  I already have a membership</a>
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
