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
									<li class="breadcrumb-item"><a href="{{route('products.index')}}">Products</a></li>
									<li class="breadcrumb-item active">Create Product</li>
								</ol>
							</div>
							<h4 class="page-title">Add / Edit Real Estate</h4>
						</div>
					</div>
				</div>     
				<div class="row">
					<div class="col-12">
					@if($errors->all())
						<div class="alert alert-danger">
							<ul>
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>			
							@endforeach
							</ul> 
						</div>
					@endif
					<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-lg-6">
								<div class="card-box">
									<h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Product Info</h5>
									<div class="form-group mb-3">
										<label for="categories">Categories</label>							
										<select class="form-control" name="categories[]" multiple>
											@foreach($categories as $category)
											<option value="{{$category->id}}"
													@if(!empty($product) && in_array($category->id, $product->categories->pluck('id')->toArray())) selected @endif>
												{{$category->name}}
											</option>
										   @endforeach
										</select>
									</div>
									
									<div class="form-group mb-3">
										<label for="brand_id">Brands</label>
										<select class="form-control" name="brand_id">
												<option disabled selected hidden>Select Brand</option>
											@foreach($brands as $brand)
												<option value="{{$brand->id}}">{{$brand->name}}</option>
											@endforeach
										</select>
									</div>
									
									<div class="form-group mb-3">
										<label for="name">Product Name</label>
										<input type="text" id="name" name="name" class="form-control" placeholder="Product Name">
									</div>
									
									<div class="form-group mb-3">
										<label for="name">Price</label>
										<input type="text" id="price" name="price" class="form-control" placeholder="Price">
									</div>
									
									<div class="form-group mb-3">
										<label for="name">Reference</label>
										<input type="number" id="reference" name="reference" class="form-control" placeholder="Reference">
									</div>
									
									<div class="form-group mb-3">
										<label for="description">Description</label>
										<textarea class="form-control" name="description" id="summernote-editor" rows="5" placeholder="Please enter description"></textarea>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card-box">
									<h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Featured & Publishing</h5>
									<div class="row">
										<div class="form-group mb-3 col-md-12">
											<label for="featured">Featured</label>
											<input class="tgl tgl-light" id="featured" name="featured" type="checkbox" value="1">
											<label class="tgl-btn" for="featured"></label>
										</div>
									
										<div class="form-group mb-3 col-md-12">
											<label for="published">Published</label>
											<input class="tgl tgl-light" id="published" name="published" type="checkbox" value="1">
											<label class="tgl-btn" for="published"></label>
										</div>
									</div>
									
								</div> 
								<div class="card-box">
									<h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Image & Photo Gallery</h5>
									<div class="form-group mb-3">
										<label for="image">Image</label>
										<input type="file" id="image" name="image" class="form-control">
									</div>

									<div class="form-group mb-3">
										<label for="product-meta-keywords">Photo Gallery</label>
										<div class="needsclick dropzone" id="gallery-dropzone"></div>
									</div>
								</div>
							</div> 
						</div>	
						<div class="row">
							<div class="col-12">
								<div class="card-box">
									<h5 class="text-uppercase mt-0 mb-3 bg-light p-2">SKU</h5>
									<div class="panel panel-footer">
										<table class="table table-borderd">
											<thead>
												<tr>
													<th>Color</th>
													<th>Size</th>
													<th>Item Number</th>
													<th>Product Code</th>
													<th><span class="btn btn-success addRow">+</span></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><input type="text" name="addmore[0][color]" class="form-control"></td>
													<td><input type="text" name="addmore[0][size]" class="form-control"></td>
													<td><input type="text" name="addmore[0][item_number]" class="form-control"></td>
													<td><input type="text" name="addmore[0][product_code]" class="form-control"></td>
													<td><span class="btn btn-danger remove">X</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="text-center mb-3">
									<button type="submit" class="btn w-sm btn-success waves-effect waves-light">Save</button>
									<a href="{{route('products.index')}}" class="btn w-sm btn-light waves-effect">Cancel</a>
								</div>
							</div>
						</div>	 
					</div>
					</form>	
				</div>
			</div>
		</div>					
@endsection
@section('scripts')
	<script>
		$(function() {
			// For select 2
			$(".select2").select2();
			$('.selectpicker').selectpicker();
		});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		var i = 0;
		$('.addRow').on('click', function() {
			addRow();
		});

		function addRow() {
			
			++i;
			var tr = '<tr>' +
				'<td><input type="text" name="addmore['+i+'][color]" class="form-control"></td>' +
				'<td><input type="text" name="addmore['+i+'][size]" class="form-control"></td>' +
				'<td><input type="text" name="addmore['+i+'][item_number]" class="form-control"></td>'+
				'<td><input type="text" name="addmore['+i+'][product_code]" class="form-control"></td>'+
				'<td><span class="btn btn-danger remove">X</span></td>' +
				'</tr>';
			$('tbody').append(tr);
		}; 
	 
	 });

	$(document).on('click', '.remove', function() {
		var last = $('tbody tr').length;
		if (last == 1) {
			alert("Last row cannot Delete");
		} else {
			$(this).parents('tr').remove();
		}
	});
</script>
@endsection