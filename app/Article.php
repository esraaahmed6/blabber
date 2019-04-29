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

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function category()
    {
        return $this->belongsTo('App\category');
    }

}
