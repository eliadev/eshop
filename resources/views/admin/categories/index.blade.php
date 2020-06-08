@extends('layouts.app')
	@section('content')
		<div class="container">
			@if(session()->has('message'))
				<div class="alert alert-success">
					{{session()->get('message')}}
				</div>
			@endif						
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-md-12">
							<div class="text-sm-right">
								<a href="{{route('categories.create')}}" class="btn btn-info btn-xs"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
							</div>
						</div>
					</div>
					<ul class="list-group">
                    @foreach ($categories as $category)
                      <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                          {{ $category->name }}
						  <div>
						  <a href="{{route('categories.edit', $category->id)}}" class="btn btn-info btn-xs">Edit</a>
							<form onsubmit="return confirm('Are you sure you want to delete?');" class="d-inline-block" method="post" action="{{route('categories.destroy', $category->id)}}">
								@csrf
								@method('delete')
								<button type="submit" class="btn btn-danger btn-xs webtn">Delete</button>
							</form>
						  </div>
                        </div>
                        @if ($category->children)
                          <ul class="list-group mt-2">
                            @foreach ($category->children as $child)
                              <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                  {{ $child->name }}
								  <div>
										<a href="{{route('categories.edit', $child->id)}}" class="btn btn-info btn-xs">Edit</a>
										<form onsubmit="return confirm('Are you sure you want to delete?');" class="d-inline-block" method="post" action="{{route('categories.destroy', $child->id)}}">
											@csrf
											@method('delete')
											<button type="submit" class="btn btn-danger btn-xs webtn">Delete</button>
										</form>
								  </div>
                                </div>
                              </li>
                            @endforeach
                          </ul>
                        @endif
                      </li>
                    @endforeach
                  </ul>
					
					
				</div>
			</div>
		</div>
@endsection