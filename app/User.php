<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
 

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";
    
    public function motelroom()
    {
        return $this->hasMany('App\Motelroom','user_id','id');
    }
    public function hopdong()
    {
        return $this->hasMany('App\Hopdong', 'user_id', 'id');
    }
    public function numbereaw() 
    {
        return $this->hasMany('App\ThemsodiennuocModel', 'user_id','id');
    }
    public function billeaw()
    {
        return $this->hasMany('App\BilldiennuocModel', 'user_id','id');
    }
    public function request()
    {
        return $this->hasMany('App\RequestFromCustomerModel', 'user_id','id');
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
