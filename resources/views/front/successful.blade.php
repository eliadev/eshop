@extends('layouts.header')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Order Placed</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
		<div class="order-complete-wrap-inner">
		   <div class="order-complete">
			  <h2>Order Placed Successfully!</h2>
			  <span>Your order has been placed. Your order ID is: <b>{{ $order->order_number }}</b></span>
		   </div>
		</div>
    </main>
@endsection