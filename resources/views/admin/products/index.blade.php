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
								<li class="breadcrumb-item">Products</li>
							</ol>
						</div>
						<h4 class="page-title">Products</h4>
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
										<a href="{{route('products.create')}}" class="btn btn-blue waves-effect waves-light"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="row">
							@foreach($products as $product)
								<div class="col-md-6 col-xl-3">
									<div class="card-box prod product-box">
										<div class="product-action">
											<a href="{{route('products.edit', $product->id)}}" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
											<form onsubmit="return confirm('Are you sure you want to delete?');" class="d-inline-block" method="post" action="{{route('products.destroy', $product->id)}}">
											@csrf
												@method('delete')
												<button type="submit" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></button>
											</form>
										</div>
										<div>
											<img src="{{$product->getFirstMediaUrl('product', 'thumb-medium')}}" width="100%" class="img-fluid" />
										</div>
										<div class="product-info">
											<div class="row align-items-center">
												<div class="col-12">
													<h5 class="font-16 mt-0 sp-line-1"><a href="#" class="text-dark">{{$product->name}}</a></h5>
												</div>
												<div class="col">
													<div class="text-warning mb-2 font-13">
														@foreach($product->categories as $category)
														<span>{{ $category->name }}</span> &nbsp; 
														@endforeach
													</div>
													<h5 class="m-0"><span class="stock-font text-muted"> Stocks: 98pcs</span></h5>
												</div>
												<div class="col-auto">
													<div class="product-price-tag">
														${{$product->price}}
													</div>
												</div>
											</div> 
										</div> 
									</div>
								</div>
							@endforeach
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>						
@endsection