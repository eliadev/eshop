@component('mail::message')
# Order Received

We are processing your order right at this moment.

**Order ID:** {{ $order->order_number }}

**Order Email:** {{ $order->status }}

**Order Name:** {{ $order->item_count }}

**Order Total:** ${{ round($order->grand_total / 100, 2) }}

**Items Ordered**


You can get further details about your order by logging into our website.

@foreach ($order->items as $item)

	Name: {{ $item->product->name }}
	Price: ${{ round($item->product->price / 100, 2)}} 
	Quantity: {{ $item->quantity }}

@endforeach

@component('mail::button', ['url' => config('app.url'), 'color' => 'green'])
Go to Website
@endcomponent

Thank you again for choosing us.

Regards,<br>
{{ config('app.name') }}
@endcomponent