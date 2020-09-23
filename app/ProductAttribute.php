<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table = "product_attributes";
	protected $fillable = ['value_id', 'quantity', 'price','attribute_id', 'product_id'];


    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function attribute()
    {
        return $this->belongsTo('App\Attribute');
    }

    public function value()
    {
        return $this->belongsTo('App\AttributeValue');
    }
}
