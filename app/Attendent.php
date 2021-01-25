<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendent extends Model
{
    public function Course(){
    	return $this->belongTo('App\Course');
    }
}
