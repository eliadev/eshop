<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
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
}
