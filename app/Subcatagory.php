<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Subcatagory extends Model
{
    use SoftDeletes;

    public function cat(){
    	return $this->belongsTo('App\Catagory','catagory_id');
    }
}
