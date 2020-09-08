@if(count(\Cart::getContent()) > 0)
    @foreach(\Cart::getContent() as $item)
		<li id="{{ $item->id }}">
			<div class="cart-img">
				<a href="{{ route('front.product.show', [$item->id, $item->model->slug]) }}"><img src="{{ $item->model->getFirstMediaUrl('product') }}" alt="{{ $item->name }}"></a>
			</div>
			<div class="cart-info">
				<h4><a href="#">{{ $item->name }}</a></h4>
				<span>${{ \Cart::get($item->id)->getPriceSum() }}</span>
				<small>Qty: <div class="qty">{{$item->quantity}}</div></small>
			</div>
			<div class="del-icon">
				<form action="{{ route('cart.remove') }}" method="POST">
					{{ csrf_field() }}
					<input type="hidden" value="{{ $item->id }}" name="id">
					<button class="remove_item" data-id="{{ $item->id }}" type="submit"><i class="fa fa-times"></i></button>
				</form>
			</div>
		</li>
    @endforeach
    <br>
	<li class="mini-cart-price">
		<span class="subtotal">Total : </span>
		<span class="subtotal-price ml-auto">${{ \Cart::getTotal() }}</span>
	</li>
	<li class="checkout-btn">
		<a class="mb-10" href="{{ route('cart.index') }}">cart</a>
		<a href="{{ route('checkout.index') }}">checkout</a>
	</li>
@else
    <li class="list-group-item cart-empty">Your Cart is Empty</li>
@endif
