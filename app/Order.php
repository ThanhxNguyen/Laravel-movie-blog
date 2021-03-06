<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function summaries() {
		return $this->hasMany('App\Summary');
	}
}
