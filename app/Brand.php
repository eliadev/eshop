<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;

class Brand extends Model implements HasMedia
{
	use HasMediaTrait;
	
    protected $table = "brands";
	protected $fillable = ['name', 'description', 'link', 'order'];
	
	public function products()
    {
        return $this->hasMany('App\Product');
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
