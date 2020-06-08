@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Category</div>
                <div class="card-body">
                    <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
						<div class="form-group row">
							<label for="parent_id">Parent id</label>
							<select class="form-control" name="parent_id">
									<option disabled selected hidden>Select</option>
								@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group row">
							<label for="name">Category Name</label>
							<input type="text" id="name" name="name" class="form-control" placeholder="Category Name">
						</div>
						<div class="form-group row">
							<label for="order">Order</label>
							<input type="number" id="order" name="order" class="form-control" placeholder="Order">
						</div>
						<div class="form-group row">
							<input type="submit" class="btn btn-block btn-md btn-success" value="SAVE">
							<a href="{{route('categories.index')}}" class="btn btn-secondary">BACK</a>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



