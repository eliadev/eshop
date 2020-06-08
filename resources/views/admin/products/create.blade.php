@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Product</div>
                <div class="card-body">
                    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
						<div class="form-group row">
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
						<div class="form-group row">
							<label for="brand_id">Brands</label>
							<select class="form-control" name="brand_id">
									<option disabled selected hidden>Select Brand</option>
								@foreach($brands as $brand)
									<option value="{{$brand->id}}">{{$brand->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group row">
							<label for="name">Product Name</label>
							<input type="text" id="name" name="name" class="form-control" placeholder="Product Name">
						</div>
						
						<div class="form-group row">
							<label for="name">Price</label>
							<input type="text" id="price" name="price" class="form-control" placeholder="Price">
						</div>
						
						<div class="form-group row">
							<label for="name">Reference</label>
							<input type="number" id="reference" name="reference" class="form-control" placeholder="Reference">
						</div>
						<div class="form-group row">
							<label for="description">Description</label>
							<textarea id="description" name="description" rows="4" cols="50"></textarea>
						</div>

						<div class="form-group row">
							<label for="featured">Featured</label>
							<input id="featured" name="featured" type="checkbox" value="1">
							<label for="featured"></label>
						</div>
						
						<div class="form-group row">
							<label for="published">Published</label>
							<input id="published" name="published" type="checkbox" value="1">
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
										<th><span class="btn btn-success addRow">+</span></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="addmore[0][color]" class="form-control"></td>
										<td><input type="text" name="addmore[0][size]" class="form-control"></td>
										<td><input type="text" name="addmore[0][item_number]" class="form-control"></td>
										<td><input type="text" name="addmore[0][product_code]" class="form-control"></td>
										<td><a href="#" class="btn btn-danger remove">X</a></td>
									</tr>
								</tbody>
							</table>
						</div>
						<br>
						<div class="form-group row">
							<input type="submit" class="btn btn-block btn-md btn-success" value="SAVE">
							<a href="{{route('products.index')}}" class="btn btn-secondary">BACK</a>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



