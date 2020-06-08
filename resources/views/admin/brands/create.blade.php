@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Brand</div>
                <div class="card-body">
                    <form action="{{route('brands.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
						<div class="form-group row">
							<label for="name">Name</label>
							<input type="text" id="name" name="name" class="form-control" placeholder="Name">
						</div>
						<div class="form-group row">
							<label for="link">Link</label>
							<input type="text" id="link" name="link" class="form-control" placeholder="link">
						</div>
						<div class="form-group row">
							<label for="order">Order</label>
							<input type="number" id="order" name="order" class="form-control" placeholder="Order">
						</div>
						<div class="form-group row">
							<label for="description">Description</label>
							<textarea id="description" name="description" rows="4" cols="50"></textarea>
						</div>
						<div class="form-group row">
							<input type="submit" class="btn btn-block btn-md btn-success" value="SAVE">
							<a href="{{route('users.index')}}" class="btn btn-secondary">BACK</a>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



