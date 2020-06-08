<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = "products";
	protected $fillable = ['name', 'description', 'price', 'reference', 'featured', 'published', 'brand_id'];
    
    public function brand() {
        return $this->belongsTo('App\Brand');
    }
	
	public function categories() {
        return $this->belongsToMany('App\Category');
    }
	
	public function skus()
    {
        return $this->hasMany('App\Sku');
    }
}
