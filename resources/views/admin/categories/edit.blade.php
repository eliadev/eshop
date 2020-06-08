@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Country</div>
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
                    <form action="{{route('categories.update', $category->id)}}" method="POST" enctype="multipart/form-data">
						@method('put')
						@csrf
						<div class="form-group row">
							<label for="name">Category Name</label>
							<input type="text" id="name" name="name" value="{{$category->name}}" class="form-control" placeholder="Category Name">
						</div>
						<div class="form-group row">
							<label for="order">Order</label>
							<input type="number" id="order" name="order" value="{{$category->order}}" class="form-control" placeholder="Order">
						</div>
						
						<div class="form-group row">
							<button type="submit" class="btn btn-success">UPDATE</button>
							<a href="{{route('categories.create')}}" class="btn btn-secondary">ADD NEW</a>
							<a href="{{route('categories.index')}}" class="btn btn-secondary">BACK</a>
						</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection