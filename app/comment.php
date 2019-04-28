<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class comment extends Model
{
 
    public $table="comments";
    
    public function article()
    {
        return $this->belongsTo('App\Article');
    }

        public function user()
{
    return $this->belongsTo('App\User', 'user_id'); 
}
 

}
