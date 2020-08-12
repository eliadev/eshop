<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = "attributes";
	protected $fillable = ['code', 'name', 'frontend_type'];
	
	
    public function values()
    {
        return $this->hasMany('App\AttributeValue');
	}
}
