<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public fuction articles()
    {
    	return $this->hasMany('App\articles');


    }


    protected $table='category';

   
    category::create([
       'name'-> 'Genral'
    ]);
    category::create([
       'name'-> 'Technology'
    ]);
    category::create([
       'name'-> 'Sciences'
    ]);
    category::create([
       'name'-> 'Entertainment'
    ]);
     category::create([
       'name'-> 'Art'
    ]);

}
