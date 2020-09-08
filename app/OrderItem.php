<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $fillable = ['order_id', 'product_id', 'quantity', 'price'];
	
	
	public function product()
    {
        return $this->belongsTo('App\Product');
    }
	
	public function order()
    {
        return $this->belongsTo('App\Order');
    }
	
	public function getTotalPriceAttribute()
    {
       $price = $this->price;
       $quantity = $this->quantity;
       return number_format($price * $quantity);
    }
 
}
