<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = "products";
	protected $fillable = ['name', 'description', 'price', 'reference', 'featured', 'published', 'brand_id'];
    
    protected $with = [ 'skus' ];

    protected $appends = [ 'quantity' ];

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

    public function getQuantityAttribute() {
        return $this->skus->count();
    }
}
