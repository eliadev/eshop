<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
	protected $table = "skus";
	protected $fillable = ['color', 'size', 'item_number', 'product_code', 'product_id'];
	
    public function product() {
        return $this->belongsTo('App\Product');
    }
}
