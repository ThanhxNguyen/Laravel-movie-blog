<?php

namespace App\Http\Controllers;

use App\Cinema;
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

	public function showSearchPage() {
		$results = [];
		return view('pages.search', compact('results'));
	}

	public function search(Request $request) {
		$val = $request->searchVal;
		$movieNameSearchResults = Movie::where('title', 'LIKE', '%'.$val.'%')->get();

		$cinemaNameSearchResult = Cinema::Where('name', 'LIKE', '%'.$val.'%')->first();

		$results = null;
		if($cinemaNameSearchResult != null) {
			$results = $movieNameSearchResults->merge($cinemaNameSearchResult->movies);
		} else {
			$results = $movieNameSearchResults;
		}

//		dd($cinemaNameSearchResult);
		return view('pages.search', compact('results'));
	}
}
