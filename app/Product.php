<?php

namespace App;

use App;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;

class Product extends Model implements HasMedia
{
	use HasMediaTrait;
	
	protected $table = "products";
	protected $fillable = ['name', 'description', 'price', 'reference', 'featured', 'published', 'brand_id'];
    
    //protected $with = ['skus'];
    protected $appends = ['slug'];

    public function brand() {
        return $this->belongsTo('App\Brand');
    }
	
	public function categories() {
        return $this->belongsToMany('App\Category');
    }
	
	public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
	
	public function productAttributes()
    {
        return $this->hasMany('App\ProductAttribute');
    }
	
	public function getTagListAttribute()
    {
        $tags = $this->tags->pluck('name')->toArray();
        return implode("," , $tags);
    }

    /*public function getQuantityAttribute() 
	{
        return $this->skus->count();
    }*/
	
	public function registerMediaConversions(Media $media = null)
    {
		$this->addMediaConversion('thumb-medium')
            ->width(200)
            ->height(200);
			
        $this->addMediaConversion('thumb')
            ->width(50)
            ->height(50);
    }
	
	/**
     * Slug Attribute
     * @return [type] [description]
     */
    public function getSlugAttribute()
    {
		return Str::slug($this->name);
    }
}
