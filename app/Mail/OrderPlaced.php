<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;
	
	public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		//$this->order->billing_email, $this->order->billing_name
		return $this->to('elias_elia@live.com')
					->from('support@lapointe.com')
                    ->bcc('elias_elia@live.com')
                    ->subject('Order from La Pointe Supermache')
                    ->markdown('emails.orderPlaced');
    }
}
