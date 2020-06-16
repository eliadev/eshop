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
								<li class="breadcrumb-item"><a href="{{route('brands.index')}}">Brands</a></li>
								<li class="breadcrumb-item active">Edit Brand</li>
							</ol>
						</div>
						<h4 class="page-title">Add / Edit Brand</h4>
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
					<form action="{{route('brands.update', $brand->id)}}" method="POST" enctype="multipart/form-data">
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
													<label for="name">Name</label>
													<input type="text" id="name" name="name" value="{{$brand->name}}" class="form-control" placeholder="Name">
												</div>
												<div class="form-group mb-3">
													<label for="link">Link</label>
													<input type="text" id="link" name="link" value="{{$brand->link}}" class="form-control" placeholder="link">
												</div>
												<div class="form-group mb-3">
													<label for="order">Order</label>
													<input type="number" id="order" name="order" value="{{$brand->order}}" class="form-control" placeholder="Order">
												</div>
												<div class="form-group mb-3">
													<label for="description">Description</label>
													<textarea class="form-control" name="description" id="summernote-editor" rows="5" placeholder="Please enter description">{!! $brand->description !!}</textarea>
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
											<a href="{{route('brands.create')}}" class="btn btn-secondary btn-rounded w-md waves-effect waves-light mb-5" style="width:100%;">ADD NEW</a>
											<a href="{{route('brands.index')}}" class="btn btn-blue btn-rounded w-md waves-effect waves-light mb-5" style="width:100%;">BACK</a>
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