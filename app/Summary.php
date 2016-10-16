<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'movie_id', 'cinema_id', 'session_id', 'ticket_type_id'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function movie()
	{
		return $this->belongsTo('App\Movie');
	}

	public function cinema()
	{
		return $this->belongsTo('App\Cinema');
	}

	public function session()
	{
		return $this->belongsTo('App\Session');
	}

	public function tickettype()
	{
		return $this->belongsTo('App\TicketType');
	}
}
