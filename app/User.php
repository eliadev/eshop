<?php

namespace App;

use App;
use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;

class User extends Authenticatable implements HasMedia
{
    use Notifiable, HasMediaTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'position', 'phone', 'date_of_birth', 'address', 'password', 'is_superadmin', 'is_active', 
        'is_verified', 'verification_code'
    ];
	
	protected $appends = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	/**
     * Permission relation.
     *
     * @return type
     */
    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }
	
	public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    /**
     * Check for a given permission
     *
     * @param  [type]  $permission [description]
     * @return boolean             [description]
     */
    public function hasPermission($permission)
    {
        if($this->is_superadmin)
            return true;

        $userPermissions = $this->permissions->pluck('identifier')->toArray();

       return in_array($permission, $userPermissions);
    }

	 /**
     * Has admin access accessor
     *
     * @return [type] [description]
     */
    public function getHasAdminAccessAttribute()
    {
        return $this->is_superadmin || $this->permissions->count();
    }
	
	public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(50)
            ->height(50);
    }
	
	public function getShortNameAttribute()
    {
        $string = $this->last_name;
        return $this->first_name.' '.Str::limit($string, 1, '.');
    }
	
	public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }
}
