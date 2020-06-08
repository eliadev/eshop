@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Country</div>
                <div class="card-body">
                    <form action="{{route('countries.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
						<div class="form-group row">
							<label for="name">Name</label>
							<input type="text" id="name" name="name" class="form-control" placeholder="Name">
						</div>
						<div class="form-group row">
							<label for="sortname">Sort Name</label>
							<input type="text" id="sortname" name="sortname" class="form-control" placeholder="Sort Name">
						</div>
						<div class="form-group row">
							<label for="phonecode">Phone Code</label>
							<input type="text" id="phonecode" name="phonecode" class="form-control" placeholder="Phone Code">
						</div>
						<div class="form-group row">
							<input type="submit" class="btn btn-block btn-md btn-success" value="SAVE">
							<a href="{{route('countries.index')}}" class="btn btn-secondary">BACK</a>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



