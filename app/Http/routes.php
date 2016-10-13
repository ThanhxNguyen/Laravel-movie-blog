<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function() {
	Route::get('/', 'PagesController@home');

	Route::get('/search', 'PagesController@showSearchPage');

	//handle search
	Route::post('/search', 'PagesController@search');

	//pre-define route for authentication bone by laravel when use make:auth
	Route::auth();

	//get single movie
	Route::get('/movie/{movie}', 'MoviesController@show');
	//show booking movie page
	Route::get('/movie/{movie}/book', 'MoviesController@showBookingForm');
	//show cart
	Route::get('/cart', 'CartsController@displayCart');
	//add to cart is clicked
	Route::post('/cart', 'CartsController@addToCart');

	//remove item from cart
	Route::get('/cart/{index}/remove', 'CartsController@removeItemFromCart');
	//update quantity
	Route::post('/cart/{index}/update', 'CartsController@updateCart');

	Route::get('/checkout', 'CartsController@displayCheckout');

	Route::post('/checkout', 'CartsController@checkout');

	Route::get('/receipt', 'CartsController@displayReceipt');

	//user
	Route::get('/account', 'UsersController@index');

	Route::resource('/wishlist', 'WishlistsController');

	Route::get('destroy/session', function() {
		session()->flush();
	});
});


