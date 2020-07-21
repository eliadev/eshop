@extends('layouts.header')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">my account</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="my-account-wrapper pt-100 pb-100 pt-sm-58 pb-sm-58">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="myaccount-page-wrapper">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i> Dashboard</a>
                                        <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> My Orders</a>
                                        <a href="#download" data-toggle="tab"><i class="fa fa-cloud-download"></i> My Store Receipts</a>
                                        <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> My Shopping Lists</a>
                                        <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> My Addresses</a>
                                        <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
                                    </div>
                                </div>

                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">
                                        <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Dashboard</h3>
                                                <div class="welcome">
                                                    <p>Hello, <strong>{{ Auth::user()->FullName }} </strong> (If Not <strong>{{ Auth::user()->first_name }} !</strong> Logout)</p>
                                                </div>
                                                <p class="mb-0">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade" id="orders" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Orders</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Order</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Aug 22, 2018</td>
                                                                <td>Pending</td>
                                                                <td>$3000</td>
                                                                <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>July 22, 2018</td>
                                                                <td>Approved</td>
                                                                <td>$200</td>
                                                                <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>June 12, 2017</td>
                                                                <td>On Hold</td>
                                                                <td>$990</td>
                                                                <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="download" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>My Store Receipts</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Date</th>
                                                            <th>Expire</th>
                                                            <th>Download</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Haven - Free Real Estate PSD Template</td>
                                                                <td>Aug 22, 2018</td>
                                                                <td>Yes</td>
                                                                <td><a href="#" class="check-btn sqr-btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>HasTech - Profolio Business Template</td>
                                                                <td>Sep 12, 2018</td>
                                                                <td>Never</td>
                                                                <td><a href="#" class="check-btn sqr-btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>My Shopping Lists</h3>
                                                <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Billing Address</h3>
                                                <address>
                                                    <p><strong>Alex Tuntuni</strong></p>
                                                    <p>1355 Market St, Suite 900 <br>
                                                        San Francisco, CA 94103</p>
                                                    <p>Mobile: (123) 456-7890</p>
                                                </address>
                                                <a href="#" class="check-btn sqr-btn "><i class="fa fa-edit"></i> Edit Address</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h3>Account Details</h3>
												@if(session()->has('message'))
													<div class="alert alert-success">
														{{session()->get('message')}}
													</div>
												@endif
												@if($errors->all())
													<div class="alert alert-danger">
														<ul>
														@foreach($errors->all() as $error)
															<li>{{$error}}</li>			
														@endforeach
														</ul>
													</div>
												@endif
                                                <div class="account-details-form">
                                                    <form method="PSOT" action="{{route('front.profile.update', $user->id)}}">
													@csrf
													@method('PUT')
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="first_name" class="required">First Name</label>
                                                                    <input type="text" id="first_name" value="{{ Auth::user()->first_name }}" placeholder="First Name" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="last_name" class="required">Last Name</label>
                                                                    <input type="text" id="last_name" value="{{ Auth::user()->last_name }}" placeholder="Last Name" />
                                                                </div>
                                                            </div>
                                                        </div>
														
														<div class="row">
															<div class="col-lg-6">
																<div class="single-input-item">
																	<label for="phone" class="required">Phone</label>
																	<input type="text" id="phone" value="{{ Auth::user()->phone }}" placeholder="Phone" />
																</div>
															</div>
															<div class="col-lg-6">
																<div class="single-input-item">
																	<label for="date_of_birth" class="required">Date of Birth</label>
																	<input type="date" id="date_of_birth" value="{{ Auth::user()->date_of_birth }}" placeholder="Date of Birth" />
																</div>
															</div>
                                                        </div>
														<div class="row">
															<div class="col-lg-12">
																<div class="single-input-item">
																	<label for="email" class="required">Email Addres</label>
																	<input type="email" id="email" value="{{ Auth::user()->email }}" placeholder="Email Address" />
																</div>
															</div>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <button type="submit" class="check-btn sqr-btn">Save Changes</button>
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
            </div>
        </div>
    </main>
@endsection