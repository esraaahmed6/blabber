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


     public function getAll()
    {
        return static::all();
    }


    public function findUser($id)
    {
        return static::find($id);
    }


    public function deleteUser($id)
    {
        return static::find($id)->delete();
    }


    public $table="users";
    public function articles()
    {
        return $this->hasMany('App\Article');
    }
    public function comment()
{
    return $this->hasMany('App\comment', 'user_id');
}
}
