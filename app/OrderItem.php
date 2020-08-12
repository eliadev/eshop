<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';
    public $timestamps = false;

    protected $fillable = ['order_id', 'product_id', 'quantity', 'price'];
	
	
	public function product()
    {
        return $this->belongsTo('App\Product');
    }
 
}
