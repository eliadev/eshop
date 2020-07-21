<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table="tags";
	protected $fillable = ['name'];

    public $timestamps = false;
 
	public function product()
    {
        return $this->belongsToMany('App\Product');
    }
}
  