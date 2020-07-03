<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;

class Category extends Model implements HasMedia
{
	
	use HasMediaTrait;
	
    protected $table = 'categories';
    protected $fillable = ['name', 'parent_id', 'description', 'order'];


	public function children()
	{
		return $this->hasMany('App\Category', 'parent_id');
	}
	
	public function products()
	{
		return $this->belongsToMany('App\Product');
	}
	
	public function registerMediaConversions(Media $media = null)
    {
		$this->addMediaConversion('thumb-medium')
            ->width(250)
            ->height(176);
			
        $this->addMediaConversion('thumb')
            ->width(50)
            ->height(50);
    }
}
