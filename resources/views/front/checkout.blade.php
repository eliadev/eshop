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
                                <li class="breadcrumb-item"><a href="shop-grid-left-sidebar.html">shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">checkout</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="checkout-page-wrapper pt-100 pb-90 pt-sm-58 pb-sm-54">
            <div class="container">
				<div class="row">
                    <div class="col-12">
                        <div class="checkoutaccordion" id="checkOutAccordion">
                            <div class="card">
                                <h3>Have A Coupon? <span data-toggle="collapse" data-target="#couponaccordion">Click Here To Enter Your Code</span></h3>
                                <div id="couponaccordion" class="collapse" data-parent="#checkOutAccordion">
                                    <div class="card-body">
                                        <div class="cart-update-option">
                                            <div class="apply-coupon-wrapper">
												@if (!session()->has('coupon'))
													<form action="{{route('coupon.store')}}" method="post" class="d-block d-md-flex">
														{{ csrf_field() }}
														<input type="text" name="code" id="code" placeholder="Enter Your Coupon Code" required />
														<button class="sqr-btn">Apply Coupon</button>
													</form>
												@endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<form action="{{ route('order.index') }}" method="POST">
				 {{ csrf_field() }}
				<input type="hidden" name="grand_total" value="{{ $newTotal }}"/>
				<input type="hidden" name="item_count" value="{{ \Cart::getTotalQuantity() }}"/>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-billing-details-wrap">
                            <h2>Billing Information</h2>
                            <div class="billing-form-wrap">
								<p>Select a billing address from your address book or enter a new address.</p>
									<div class="row">
										<div class="col-md-6">
											<div class="single-input-item">
												<label for="f_name_2" class="required">First Name</label>
												<input type="text" name="fname" placeholder="First Name"  />
											</div>
										</div>

										<div class="col-md-6">
											<div class="single-input-item">
												<label for="l_name_2" class="required">Last Name</label>
												<input type="text" name="lname" placeholder="Last Name"  />
											</div>
										</div>
									</div>

									<div class="single-input-item">
										<label for="email" class="required">Email Address</label>
										<input type="email" name="email" placeholder="Email Address"  />
									</div>

									<div class="single-input-item">
										<label for="phone">Phone</label>
										<input type="text" name="phone" placeholder="Company Name" />
									</div>

									<div class="single-input-item">
										<label for="country" class="required">Country</label>
										<select name="country">
											<option value="Bangladesh">Bangladesh</option>
											<option value="India">India</option>
											<option value="Pakistan">Pakistan</option>
											<option value="England">England</option>
											<option value="London">London</option>
											<option value="London">London</option>
											<option value="Chaina">Chaina</option>
										</select>
									</div>

									<div class="single-input-item">
										<label for="city" class="required mt-20">City</label>
										<input type="text" name="city" placeholder="City"  />
									</div>

									<div class="single-input-item">
										<label for="state">State</label>
										<input type="text" name="state" placeholder="State" />
									</div>

									<div class="single-input-item">
										<label for="address2" class="required">Street address</label>
										<input type="text" name="address2" placeholder="Street address Line 1"  />
									</div>

									<div class="single-input-item">
										<input type="text"  placeholder="Street address Line 2 (Optional)" />
									</div>

									<div class="single-input-item">
										<label for="postcode_2" class="required">Postcode / ZIP</label>
										<input type="text" name="postcode" placeholder="Postcode / ZIP"  />
									</div>

									<div class="single-input-item">
										<label for="description">More Details</label>
										<textarea name="description" id="description" cols="30" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
									</div>

                                   <p>Select a shipping address from your address book or enter a new address.</p>
                                    <div class="checkout-box-wrap">
                                        <div class="single-input-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ship_to_different">
                                                <label class="custom-control-label" for="ship_to_different">Ship to a different address?</label>
                                            </div>
                                        </div>
                                        <div class="ship-to-different single-form-row">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="single-input-item">
                                                        <label for="f_name_2" class="required">First Name</label>
                                                        <input type="text" id="f_name_2" placeholder="First Name"  />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="single-input-item">
                                                        <label for="l_name_2" class="required">Last Name</label>
                                                        <input type="text" id="l_name_2" placeholder="Last Name"  />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="single-input-item">
                                                <label for="email_2" class="required">Email Address</label>
                                                <input type="email" id="email_2" placeholder="Email Address"  />
                                            </div>

                                            <div class="single-input-item">
                                                <label for="com-name_2">Company Name</label>
                                                <input type="text" id="com-name_2" placeholder="Company Name" />
                                            </div>

                                            <div class="single-input-item">
                                                <label for="country_2" class="required">Country</label>
                                                <select name="country" id="country_2">
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="India">India</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="England">England</option>
                                                    <option value="London">London</option>
                                                    <option value="London">London</option>
                                                    <option value="Chaina">Chaina</option>
                                                </select>
                                            </div>

                                            <div class="single-input-item">
                                                <label for="street-address_2" class="required mt-20">Street address</label>
                                                <input type="text" id="street-address_2" placeholder="Street address Line 1"  />
                                            </div>

                                            <div class="single-input-item">
                                                <input type="text"  placeholder="Street address Line 2 (Optional)" />
                                            </div>

                                            <div class="single-input-item">
                                                <label for="town_2" class="required">Town / City</label>
                                                <input type="text" id="town_2"  placeholder="Town / City"  />
                                            </div>

                                            <div class="single-input-item">
                                                <label for="state_2">State / Divition</label>
                                                <input type="text" id="state_2"  placeholder="State / Divition" />
                                            </div>

                                            <div class="single-input-item">
                                                <label for="postcode_2" class="required">Postcode / ZIP</label>
                                                <input type="text" id="postcode_2"  placeholder="Postcode / ZIP"  />
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="order-summary-details mt-md-26 mt-sm-26">
                            <h2>Your Order Summary</h2>
                            <div class="order-summary-content mb-sm-4">
                                <div class="order-summary-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Products</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										    @foreach(\Cart::getContent() as $item)
												<tr>
													<td><a href="{{ route('front.product.show', [$item->id, $item->model->slug]) }}">{{ $item->name }}<strong> × {{$item->quantity}}</strong></a></td>
													<td>${{ \Cart::get($item->id)->getPriceSum() }}</td>
												</tr>
											@endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Sub Total</td>
                                                <td><strong>${{ \Cart::getTotal() }}</strong></td>
                                            </tr>
											@if (session()->has('coupon'))
											<tr>
												<td>Discount ({{ session()->get('coupon')['name'] }})
													<a id='btnRemoveCoupon' ><b>Remove</b></a>
												</td>
												<td>${{ $discount }}</td>
											</tr>
											@endif
                                            <tr>
                                                <td>Shipping</td>
                                                <td class="d-flex justify-content-center">
                                                    <ul class="shipping-type">
                                                        <!--<li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="flatrate" name="shipping" class="custom-control-input" checked />
                                                                <label class="custom-control-label" for="flatrate">Flat Rate: $70.00</label>
                                                            </div>
                                                        </li>-->
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="freeshipping" checked name="shipping" class="custom-control-input" />
                                                                <label class="custom-control-label" for="freeshipping">Free Shipping</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total Amount</td>
                                                <td><strong>${{ $newTotal }}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- Order Payment Method -->
                                <div class="order-payment-method">
                                    <div class="single-payment-method show">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="cashon" name="payment_method" value="Cash On Delivery" class="custom-control-input" checked  />
                                                <label class="custom-control-label" for="cashon">Cash On Delivery</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="cash">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </div>
                                    <!--<div class="single-payment-method">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="directbank" name="paymentmethod" value="bank" class="custom-control-input" />
                                                <label class="custom-control-label" for="directbank">Direct Bank Transfer</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="bank">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account..</p>
                                        </div>
                                    </div>
                                    <div class="single-payment-method">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="checkpayment" name="paymentmethod" value="check" class="custom-control-input" />
                                                <label class="custom-control-label" for="checkpayment">Pay with Check</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="check">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>-->
                                    <div class="single-payment-method">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="paypalpayment" name="payment_method" value="Online Payment" class="custom-control-input" />
                                                <label class="custom-control-label" for="paypalpayment">Paypal <img src="assets/img/paypal-card.jpg" class="img-fluid paypal-card" alt="Paypal" /></label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="paypal">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                        </div>
                                    </div>
                                    <div class="summary-footer-area">
                                        <div class="custom-control custom-checkbox mb-14">
                                            <input type="checkbox" class="custom-control-input" id="terms" required />
                                            <label class="custom-control-label" for="terms">I have read and agree to the website <a
                                                href="index.html">terms and conditions.</a></label>
                                        </div>
                                        <button type="submit" class="check-btn sqr-btn">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</form>
            </div>
        </div>
    </main>
@endsection
