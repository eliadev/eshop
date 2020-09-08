@extends('layouts.cmslayout')
	@section('content')
	<div class="content">
	   <div class="container-fluid">
		  <div class="row">
			 <div class="col-12">
				<div class="page-title-box">
				   <div class="page-title-right">
					  <ol class="breadcrumb m-0">
						 <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
						 <li class="breadcrumb-item"><a href="{{route('orders.index')}}">Orders</a></li>
						 <li class="breadcrumb-item active">Invoice</li>
					  </ol>
				   </div>
				   <h4 class="page-title">Invoice</h4>
				</div>
			 </div>
		  </div>
		  <div class="row">
			 <div class="col-12">
				<div class="card-box">
				   <div class="clearfix">
					  <div class="float-left">
						 <img src="assets/images/logo-dark.png" alt="" height="20">
					  </div>
					  <div class="float-right">
						 <h4 class="m-0 d-print-none">Invoice</h4>
					  </div>
				   </div>
				   <div class="row">
					  <div class="col-md-6">
						 <div class="mt-3">
							<p><b>Hello, {{ $order->user->FullName }}</b></p>
							<p class="text-muted">Thanks a lot because you keep purchasing our products. Our company
							   promises to provide high quality products for you as well as outstanding
							   customer service for every transaction. 
							</p>
						 </div>
					  </div>
					  <div class="col-md-4 offset-md-2">
						 <div class="mt-3 float-right">
							<p class="m-b-10"><strong>Order Date: </strong> <span class="float-right"> &nbsp;&nbsp;&nbsp;&nbsp; {{ Carbon\Carbon::parse($order->created_at)->format('M d, Y') }}</span></p>
							<p class="m-b-10"><strong>Order Status: </strong> <span class="float-right"><span class="badge badge-danger">{{ $order->order_status }}</span></span></p>
							<p class="m-b-10"><strong>Order No: </strong> <span class="float-right">&nbsp;{{ $order->order_number }}</span></p>
						 </div>
					  </div>
				   </div>
				   <div class="row mt-3">
					  <div class="col-sm-6">
						 <h6>Billing Address</h6>
						 <address>
							Stanley Jones<br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						 </address>
					  </div>
					  <div class="col-sm-6">
						 <h6>Shipping Address</h6>
						 <address>
							Stanley Jones<br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						 </address>
					  </div>
				   </div>
				   <div class="row">
					  <div class="col-12">
						 <div class="table-responsive">
							<table class="table mt-4 table-centered">
							   <thead>
								  <tr>
									 <th>#</th>
									 <th>Item</th>
									 <th style="width: 10%">Qty</th>
									 <th style="width: 10%">Price</th>
									 <th style="width: 10%" class="text-right">Total</th>
								  </tr>
							   </thead>
							   <tbody>
							   @foreach($order->items as $key=>$item)
								  <tr>
									 <td>{{ $key +1 }}</td>
									 <td>{{$item->product->name}}</td>
									 <td>{{$item->quantity}}</td>
									 <td>${{$item->price}}</td>
									 <td class="text-right">${{ $item->TotalPrice }}</td>
								  </tr>
								@endforeach
							   </tbody>
							</table>
						 </div>
					  </div>
				   </div>
				   <div class="row">
					  <div class="col-sm-6">
						 <div class="clearfix pt-5">
							<h6 class="text-muted">Notes:</h6>
							<small class="text-muted">
							All accounts are to be paid within 7 days from receipt of
							invoice. To be paid by cheque or credit card or direct payment
							online. If account is not paid within 7 days the credits details
							supplied as confirmation of work undertaken will be charged the
							agreed quoted fee noted above.
							</small>
						 </div>
					  </div>
					  <div class="col-sm-6">
						 <div class="float-right">
							<p><b>Sub-total:</b> <span class="float-right">${{ number_format($order->grand_total) }}</span></p>
							<!--<p><b>Discount (10%):</b> <span class="float-right"> &nbsp;&nbsp;&nbsp; $459.75</span></p>-->
							<h3>${{ number_format($order->grand_total) }}USD</h3>
						 </div>
						 <div class="clearfix"></div>
					  </div>
				   </div>
				   <div class="mt-4 mb-1">
					  <div class="text-right d-print-none">
						 <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-printer mr-1"></i> Print</a>
						 <a href="#" class="btn btn-info waves-effect waves-light">Submit</a>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
	@endsection