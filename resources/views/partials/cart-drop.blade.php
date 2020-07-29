@if(count(\Cart::getContent()) > 0)
    @foreach(\Cart::getContent() as $item)
		<li>
			<div class="cart-img">
				<a href="#"><img src="{{asset('assets/img/cart/cart-2.jpg')}}" alt="{{ $item->name }}"></a>
			</div>
			<div class="cart-info">
				<h4><a href="#">{{ $item->name }}</a></h4>
				<span>${{ \Cart::get($item->id)->getPriceSum() }}</span>
				<small>Qty: {{$item->quantity}}</small>
			</div>
			<div class="del-icon">
				<form action="{{ route('cart.remove') }}" method="POST">
					{{ csrf_field() }}
					<input type="hidden" value="{{ $item->id }}" id="id" name="id">
					<button><i class="fa fa-times"></i></button>
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
		<a href="#">checkout</a>
	</li>
@else
    <li class="list-group-item">Your Cart is Empty</li>
@endif