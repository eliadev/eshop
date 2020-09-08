<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'order_number', 
		'user_id', 
		'order_status',
		'status', 
		'grand_total', 
		'item_count', 
		'payment_status', 
		'payment_method'
    ];
	
	public function user()
    {
        return $this->belongsTo('App\User');
    }
	
	public function items()
    {
        return $this->hasMany('App\OrderItem');
    }
	
}
