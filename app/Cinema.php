<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    public function movies() {
    	return $this->belongsToMany('App\Movie');
	}
}
