<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function movies() {
    	return $this->belongsToMany('App\Movie');
	}
}
