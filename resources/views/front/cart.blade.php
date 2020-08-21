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
                                <li class="breadcrumb-item"><a href="{{ route('front.products') }}">Products</a></li>
                                <li class="breadcrumb-item active" aria-current="page">cart</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="cart-main-wrapper pt-100 pb-100 pt-sm-58 pb-sm-58">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
					@if(session()->has('success_msg'))
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							{{ session()->get('success_msg') }}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
					@endif
					@if(session()->has('alert_msg'))
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							{{ session()->get('alert_msg') }}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
					@endif
					@if(count($errors) > 0)
						@foreach($errors0>all() as $error)
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								{{ $error }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
						@endforeach
					@endif
					</div>
                    <div class="col-lg-12">
						@if(\Cart::getTotalQuantity()>0)
							<h5 class="no-cart-msg">{{ \Cart::getTotalQuantity()}} Product(s) In Your Cart</h5>
						@else
							<h5 class="no-cart-msg">No Products in your Cart<a href="{!! route('front.products') !!}"> Continue Shopping</a></h5>
						@endif
						@if(count($cartCollection)>0)
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
									<tr>
										<th class="pro-thumbnail">Image</th>
										<th class="pro-title">Product</th>
										<th class="pro-price">Price</th>
										<th class="pro-quantity">Quantity</th>
										<th class="pro-subtotal">Total</th>
										<th class="pro-remove">Remove</th>
									</tr>
								</thead>
								<tbody>
								@foreach($cartCollection as $item)
									<tr>
										<td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-1.jpg" alt="{{ $item->name }}"/></a></td>
										<td class="pro-title"><a href="#">{{ $item->name }}</a></td>
										<td class="pro-price"><span>${{ $item->price }}</span></td>
										<td class="pro-quantity">{{ $item->quantity }}<!--<div class="pro-qty"><input type="text" value="1"></div>--></td>
										<td class="pro-subtotal"><span>${{ \Cart::get($item->id)->getPriceSum() }}</span></td>
										<td class="pro-remove">
											<form action="{{ route('cart.update') }}" method="POST">
												{{ csrf_field() }}
												<div class="form-group row">
													<input type="hidden" value="{{ $item->id}}" id="id" name="id">
													<div class="pro-qty"><input type="text" value="{{ $item->quantity }}" id="quantity" name="quantity"></div>
													<button><i class="fa fa-pencil"></i></button>
												</div>
											</form>&nbsp;
											<form action="{{ route('cart.remove') }}" method="POST">
												{{ csrf_field() }}
												<input type="hidden" value="{{ $item->id }}" id="id" name="id">
												<button><i class="fa fa-trash-o"></i></button>
											</form>
										</td>
									</tr>
								@endforeach
                                </tbody>
                            </table>
                        </div>
						@endif
						@if(count($cartCollection)>0)
                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                            <div class="apply-coupon-wrapper">
                                <form action="#" method="post" class=" d-block d-md-flex">
                                    <input type="text" placeholder="Enter Your Coupon Code" required />
                                    <button class="sqr-btn">Apply Coupon</button>
                                </form>
                            </div>							
                            <div class="cart-update mt-sm-16">
								<form action="{{ route('cart.clear') }}" method="POST">
									{{ csrf_field() }}
									<button class="sqr-btn">Clear Cart</button>
								</form>
                            </div>
                        </div>
						@endif
                    </div>
                </div>
				@if(count($cartCollection)>0)
                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h3>Cart Totals</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total-amount">${{ \Cart::getTotal() }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="{{ route('checkout.index') }}" class="sqr-btn d-block">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
				@endif
            </div>
        </div>
    </main>
@endsection