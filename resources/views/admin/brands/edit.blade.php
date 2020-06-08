@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Brand</div>
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
                    <form action="{{route('brands.update', $brand->id)}}" method="POST" enctype="multipart/form-data">
						@method('put')
						@csrf
						<div class="form-group row">
							<label for="name">Name</label>
							<input type="text" id="name" name="name" value="{{$brand->name}}" class="form-control" placeholder="Name">
						</div>
						<div class="form-group row">
							<label for="link">Link</label>
							<input type="text" id="link" name="link" value="{{$brand->link}}" class="form-control" placeholder="link">
						</div>
						<div class="form-group row">
							<label for="order">Order</label>
							<input type="number" id="order" name="order" value="{{$brand->order}}" class="form-control" placeholder="Order">
						</div>
						<div class="form-group row">
							<label for="description">Description</label>
							<textarea id="description" name="description" rows="4" cols="50">{!! $brand->description !!}</textarea>
						</div>
						<div class="form-group row">
							<button type="submit" class="btn btn-success">UPDATE</button>
							<a href="{{route('brands.create')}}" class="btn btn-secondary">ADD NEW</a>
							<a href="{{route('brands.index')}}" class="btn btn-secondary">BACK</a>
						</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection