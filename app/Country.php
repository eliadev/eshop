<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    public $timestamps = false;

    protected $fillable = [
        'name',
		'sortname',
		'phonecode'
    ];

    public function states()
    {
        return $this->hasMany('App\State');
    }
}
