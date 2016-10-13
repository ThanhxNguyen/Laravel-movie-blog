<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Movie;
use App\Order;

class CartsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function displayCart()
	{
		return view('pages.movies.cart');
	}

	public function addToCart(Request $request)
	{
		//		session()->forget('cart');
		session_start();
		$cartSession = null;
		$data = [
			'movie_id' => (int) $request->movie_id,
			'cinema_id' => (int) $request->cinema,
			'session_id' => (int) $request->movieSession,
			'ticketType' => (int) $request->ticketType,
			'quantity' => (int) $request->quantity
		];
		//				session_destroy();
//		if(isset($_SESSION['cart'])) {
////			echo 'has cart';
//			$sessionArr = $_SESSION['cart'];
//			//			dd($sessionArr);
//			//append new ticket to cart
//			array_push($_SESSION['cart'], $data);
//		} else {
////			echo 'no cart';
//			//brand new session cart, save ticket info to session
//			$_SESSION['cart'] = [ $data ];
//		}

		if(session('cart')) {
//			$item = []
			session()->push('cart', $data);
//			echo 'has session';
//			var_dump(session()->all());
		} else {
			$cart = [
				$data
			];
			session(['cart' => $cart]);
//			echo 'no session';
//			var_dump(session()->all());
		}

		//		dd($_SESSION['cart']);

		return view('pages.movies.cart');
	}

	public function removeItemFromCart($index)
	{
//		session_start();
//		if(isset($_SESSION['cart'])) {
////			echo 'has session';
//			$removedItem = array_splice($_SESSION['cart'], (int)$id, 1);
//			return redirect('/cart');
////			return back();
////			return view('pages.movies.cart');
//		}

		if(session()->has('cart')) {
			$cart = session('cart');
			array_splice($cart, $index, 1);
			session(['cart' => $cart]);
			return redirect('/cart');
		}

		return 'Could not remove item from cart';
	}

	public function updateCart(Request $request, $index)
	{
		if(session()->has('cart')) {
			$carts = session('cart');
			$carts[(int)$index]['quantity'] = (int) $request->quantity;
			session(['cart' => $carts]);
			return redirect('/cart');
		}

		return 'Could not remove item from cart';
	}

	public function displayCheckout()
	{
		return view('pages.cart.checkout');
	}

	public function checkout(Request $request)
	{
		if(session()->has('cart')) {
			$carts = session('cart');
			foreach ($carts as $k=>$cart) {
				$order = new Order();
				$order->user_id = $request->user()->id;
				$order->movie_id = $cart['movie_id'];
				$order->cinema_id = $cart['cinema_id'];
				$order->session_id = $cart['session_id'];
				$order->ticket_type_id = $cart['ticketType'];
				$order->archived = false;
				$order->quantity = $cart['quantity'];
				$order->save();
			}
			//destroy session
			session()->forget('cart');

			//redirect
			return redirect('/receipt');
		}

		return 'Could not check out!';
	}

	public function displayReceipt()
	{
		return view('pages.cart.receipt');
	}

}//end class
