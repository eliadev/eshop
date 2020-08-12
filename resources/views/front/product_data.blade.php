@foreach($products as $product)
	<div class="col-md-4 col-12">
		<div class="product-item mb-20">
			<div class="product-thumb">
				<a href="{{ route('front.product.show', [$product->id, $product->slug]) }}">
					<img src="{{ $product->getFirstMediaUrl('product') }}" alt="{{ $product->name }}">
				</a>
				<div class="box-label">
					<div class="product-label new">
						<span>new</span>
					</div>
				</div>
				<div class="product-action-link">
					<div class="product-action-link">
						<a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span></a>
						<a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="ion-ios-shuffle"></i></a>
					</div>
				</div>
			</div>
			<div class="product-description text-center">
				<div class="manufacturer">
					@foreach($product->categories as $category)
						<p><a href="#">{{ $category->name }}</a></p>
					@endforeach
				</div>
				<div class="product-name">
				   <h3><a href="{{ route('front.product.show', [$product->id, $product->slug]) }}">{{ $product->name }}</a></h3>
				</div>
				<div class="price-box">
					<span class="regular-price">$60.00</span>
					<span class="old-price"><del>${{ $product->price }}</del></span>
				</div>
				<form action="{{ route('cart.store') }}" method="POST">
					{{ csrf_field() }}
					<input type="hidden" value="{{ $product->id }}" id="id" name="id">
					<input type="hidden" value="{{ $product->name }}" id="name" name="name">
					<input type="hidden" value="{{ $product->price }}" id="price" name="price">
					<input type="hidden" value="1" id="quantity" name="quantity">
					<input type="hidden" value="{{ $product->slug }}" id="slug" name="slug" />
					<input type="hidden" value="{{ $product->getFirstMediaUrl('product') }}" id="image" name="image" />
					
					<div class="product-btn">
						<button class="buttons parallelogram addcart" data-id="{{ $product->id }}" id="add" type="submit">
							<i class="ion-bag"></i>Add to cart
						</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>
@endforeach