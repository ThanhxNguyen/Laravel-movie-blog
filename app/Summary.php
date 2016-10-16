<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    protected $fillable = ['quantity', 'movie_id', 'cinema_id', 'session_id', 'ticket_type_id', 'order_id'];

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

	public function order() {
		return $this->belongsTo('App\Order');
	}
}
