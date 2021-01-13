<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catagory extends Model
{
    use SoftDeletes;

    public function subcats(){
    	return $this->hasMany('App\Subcatagory');
    }

   
}
