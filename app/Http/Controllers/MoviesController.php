<?php

namespace App\Http\Controllers;

use App\Session;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use App\Movie;
use App\TicketType;

class MoviesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth', ['only' => ['showBookingForm'] ]);
	}

	public function show(Movie $movie)
	{
		return view('pages.movies.index', compact('movie'));
	}

	public function showBookingForm(Movie $movie)
	{
//		dd(session()->all());
		$ticketType = new TicketType();
		$types = $ticketType->all();
		return view('pages.movies.book', compact('movie', 'types'));
	}
}
