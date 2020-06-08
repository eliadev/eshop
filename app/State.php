<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'country_id',
    ];

    /**
     * Country relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
	
	public function cities()
    {
        return $this->hasMany('App\City');
    }

}
