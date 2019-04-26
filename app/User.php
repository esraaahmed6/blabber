<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public $table="users";
    public function articles()
    {
        return $this->hasMany('App\Article');
    }
    public function comment()
{
    return $this->hasMany('App\comment', 'user_id');
}
 public function likes()
    {
        return $this->hasMany('App\likes');
    }

}
