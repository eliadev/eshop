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
								<li class="breadcrumb-item active">Edit Order</li>
							</ol>
						</div>
						<h4 class="page-title">Add / Edit Order</h4>
					</div>
				</div>
			</div>     
			<div class="row">
				<div class="col-12">
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
					<form action="{{route('orders.update', $order->id)}}" method="POST">
						@method('put')
						@csrf
						<div class="row">
							<div class="col-xl-8">
								<h4 class="header-title bg-header">Edit Content</h4>
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group mb-3">
													<label for="order_status">Order Status</label>
													<select class="form-control" name="order_status">
														<option disabled selected hidden>-- Select Order Status --</option>
														<option value="pending" {{ old("order_status", $order->order_status) == "pending" ? "selected" : "" }}>Pending</option>
														<option value="processing" {{ old("order_status", $order->order_status) == "processing" ? "selected" : "" }}>Processing</option>
														<option value="preparing" {{ old("order_status", $order->order_status) == "preparing" ? "selected" : "" }}>Preparing</option>
														<option value="delivery" {{ old("order_status", $order->order_status) == "delivery" ? "selected" : "" }}>Delivery</option>
														<option value="delivered" {{ old("order_status", $order->order_status) == "delivered" ? "selected" : "" }}>Delivered</option>
														<option value="cancelled" {{ old("order_status", $order->order_status) == "cancelled" ? "selected" : "" }}>Cancelled</option>
													</select>
												</div>
												<div class="form-group mb-3">
													<label for="payment_status">Payment Status</label>
													<select class="form-control" name="payment_status">
														<option disabled selected hidden>-- Select Payment Status --</option>
														<option value="pending" {{ old("payment_status", $order->payment_status) == "pending" ? "selected" : "" }}>Pending</option>
														<option value="paid" {{ old("payment_status", $order->payment_status) == "paid" ? "selected" : "" }}>Paid</option>
														<option value="failed" {{ old("payment_status", $order->payment_status) == "failed" ? "selected" : "" }}>Failed</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4">
							<h4 class="header-title bg-header">Action</h4>
								<div class="card">
									<div class="card-body">
										<div class="form-actions">
											<button type="submit" class="btn btn-success btn-rounded w-md waves-effect waves-light mb-5" style="width:100%;">UPDATE</button>
											<a href="{{route('orders.index')}}" class="btn btn-blue btn-rounded w-md waves-effect waves-light mb-5" style="width:100%;">BACK</a>
										</div>
									</div>	  
								</div>
							</div>	    
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>				
@endsection