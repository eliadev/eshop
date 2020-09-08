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
								<li class="breadcrumb-item">Orders</li>
							</ol>
						</div>
						<h4 class="page-title">Orders</h4>
					</div>
				</div>
			</div>
			@if(session()->has('message'))
				<div class="alert alert-success">
					{{session()->get('message')}}
				</div>
			@endif						
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<form class="form-inline">
										<div class="form-group">
											<label for="inputPassword2" class="sr-only">Search</label>
											<input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
										</div>
									</form>                            
								</div>
								<div class="col-md-6">
									<div class="text-sm-right">
										<a href="#" class="btn btn-blue waves-effect waves-light"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-centered table-striped" id="editable">
									<thead>
										<tr>
											<th style="width: 20px;">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">&nbsp;</label>
												</div>
											</th>
											<th>Order ID</th>
											<th>Products</th>
											<th>Date</th>
											<th>Payment Status</th>
											<th>Total</th>
											<th>Payment Method</th>
											<th>Order Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									@foreach($orders as $order)
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">&nbsp;</label>
												</div>
											</td>
											<td><a href="#" class="text-body font-weight-bold">{{ $order->order_number }}</a></td>
											<td>
											@foreach($order->items as $item)
												<a href="#"><img src="{{$item->product->getFirstMediaUrl('product', 'thumb')}}" title="{{$item->product->name}}" height="32" /></a>
											@endforeach
											</td>
											<td>{{ Carbon\Carbon::parse($order->created_at)->format('M d, Y') }} <small class="text-muted">{{ Carbon\Carbon::parse($order->created_at)->format('g:i A') }}</small></td>
											<td>
											@if($order->payment_status =='pending')
												<h5><span class="badge bg-soft-warning text-warning"><i class="mdi mdi-timer-sand"></i> Pending</span></h5>
											@elseif($order->payment_status =='paid')
												<h5><span class="badge bg-soft-success text-success"><i class="mdi mdi-coin"></i> Paid</span></h5>
											@else
												<h5><span class="badge bg-soft-danger text-danger"><i class="mdi mdi-cancel"></i> Failed</span></h5>
											@endif
											</td>
											<td>${{ number_format($order->grand_total) }}</td>
											<td>{{ $order->payment_method }}</td>
											<td>
											@if($order->order_status =='pending')
												<h5><span class="badge badge-warning">Pending</span></h5>
											@elseif($order->order_status =='processing')
												<h5><span class="badge badge-primary">Processing</span></h5>
											@elseif($order->order_status =='preparing')
												<h5><span class="badge badge-info">Preparing</span></h5>
											@elseif($order->order_status =='delivery')
												<h5><span class="badge badge-secondary">Out for Delivery</span></h5>
											@elseif($order->order_status =='delivered')
												<h5><span class="badge badge-success">Delivered</span></h5>
											@else
												<h5><span class="badge badge-danger">Cancelled</span></h5>
											@endif
											</td>
											<td><a href="{{route('orders.show', $order->id)}}" class="btn btn-info btn-xs waves-effect waves-light"><i class=" mdi mdi-file-outline"></i></a>
												<a href="{{route('orders.edit', $order->id)}}" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
												<form onsubmit="return confirm('Are you sure you want to delete?');" class="d-inline-block" method="post" action="{{route('orders.destroy', $order->id)}}">
												@csrf
													<button type="submit" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></button>
												</form>
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
@endsection