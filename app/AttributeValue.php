<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
	protected $table = "attribute_values";
	protected $fillable = ['value', 'price', 'attribute_id'];
	
	
    public function attribute() 
	{
        return $this->belongsTo('App\Attribute');
    }
}
