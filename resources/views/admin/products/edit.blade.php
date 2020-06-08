@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product</div>
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
                <div class="card-body">
                    <form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
						@method('put')
						@csrf
						<div class="form-group row">
						<label for="categories">Categories</label>
						<select name="categories[]" multiple>
								@foreach($categories as $category)
								<option value="{{$category->id}}"
										@if(!empty($product) && in_array($category->id, $product->categories->pluck('id')->toArray())) selected @endif>
									{{$category->name}}
								</option>
							   @endforeach
							</select>
						</div>
						<div class="form-group row">
							<label for="brand_id">Brand</label>
							<select class="form-control" name="brand_id">
							 <option disabled selected hidden>-- Select Brand --</option>
								@foreach($brands as $brand)
									<option value="{{$brand->id}}"	
									@if($brand->id == $product->brand_id)
									selected
									@endif
									>{{ $brand->name }}</option>
								@endforeach
							</select>
						</div>
 
						<div class="form-group row">
							<label for="name">Product Name</label>
							<input type="text" id="name" name="name" value="{{$product->name}}" class="form-control" placeholder="Product Name">
						</div>
						
						<div class="form-group row">
							<label for="name">Price</label>
							<input type="text" id="price" name="price" value="{{$product->price}}" class="form-control" placeholder="Price">
						</div>
						
						<div class="form-group row">
							<label for="name">Reference</label>
							<input type="number" id="reference" name="reference" value="{{$product->reference}}" class="form-control" placeholder="Reference">
						</div>
						<div class="form-group row">
							<label for="description">Description</label>
							<textarea id="description" name="description" rows="4" cols="50">{!! $product->description !!}</textarea>
						</div>

						<div class="form-group row">
							<label for="featured">Featured</label>
							<input id="featured" name="featured" type="checkbox" value="1" {{ ($product->featured=="1")? "checked" : "" }}>
							<label for="featured"></label>
						</div>
						
						<div class="form-group row">
							<label for="published">Published</label>
							<input id="published" name="published" type="checkbox" value="1" {{ ($product->published=="1")? "checked" : "" }}>
							<label for="published"></label>
						</div>
						<div class="panel panel-footer">
							<table class="table table-borderd">
								<thead>
									<tr>
										<th>Color</th>
										<th>Size</th>
										<th>Item Number</th>
										<th>Product Code</th>
										<th><a href="#" class="btn btn-success addRow">+</a></th>
									</tr>
								</thead>
								<tbody>
								@foreach($skus as $key => $sku)
									<tr>
										<td><input type="text" name="addmore[{{$key}}][color]" value="{{$sku->color}}" class="form-control"></td>
										<td><input type="text" name="addmore[{{$key}}][size]" value="{{$sku->size}}" class="form-control"></td>
										<td><input type="text" name="addmore[{{$key}}][item_number]" value="{{$sku->item_number}}" class="form-control"></td>
										<td><input type="text" name="addmore[{{$key}}][product_code]" value="{{$sku->product_code}}" class="form-control"></td>
										<td><a href="#" class="btn btn-danger remove">X</a></td>
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
						<br>
						<div class="form-group row">
							<button type="submit" class="btn btn-success">UPDATE</button>
							<a href="{{route('products.create')}}" class="btn btn-secondary">ADD NEW</a>
							<a href="{{route('products.index')}}" class="btn btn-secondary">BACK</a>
						</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection