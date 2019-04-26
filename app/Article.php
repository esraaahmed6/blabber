<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Article extends Model
{
    //
    public $table="articles";
    
    protected $dates = ['deleted_at'];
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
     public function likes()
    {
        return $this->hasMany('App\likes');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
