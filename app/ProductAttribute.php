<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table = "product_attributes";
	protected $fillable = ['value', 'quantity', 'price','attribute_id', 'product_id'];
	
	
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function attribute()
    {
        return $this->belongsTo('App\Attribute');
    }
}
