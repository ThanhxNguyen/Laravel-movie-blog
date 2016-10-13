<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Movie;

class PagesController extends Controller
{
    public function home() {
    	$nowShowingMovieId = 1;
    	$commingSoonMovieId = 2;
    	$showMovies = Category::find($nowShowingMovieId)->movies;
		$commingSoonMovies = Category::find($commingSoonMovieId)->movies;
		return view('pages.home', [
			'showingMovies' => $showMovies,
			'commingSoonMovies' => $commingSoonMovies
		]);
	}
}
