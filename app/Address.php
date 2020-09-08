<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'fname',
        'lname',
        'phone',
        'address1',
        'address2',
        'user_id',
    ];
	
	public function user() {
        return $this->belongsTo('App\User');
    }
}
