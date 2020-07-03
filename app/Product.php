<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;

class Product extends Model implements HasMedia
{
	use HasMediaTrait;
	
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
	
	public function registerMediaConversions(Media $media = null)
    {
		$this->addMediaConversion('thumb-medium')
            ->width(200)
            ->height(200);
			
        $this->addMediaConversion('thumb')
            ->width(50)
            ->height(50);
    }
}
