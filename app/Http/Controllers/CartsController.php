<?php

namespace App\Http\Controllers;

use App\Summary;
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
		return view('pages.cart.index');
	}

	public function addToCart(Request $request)
	{
		//		session()->forget('cart');
//		session_start();
		$cartSession = null;
		$data = [
			'movie_id' => (int) $request->movie_id,
			'cinema_id' => (int) $request->cinema,
			'session_id' => (int) $request->movieSession,
			'ticketType' => (int) $request->ticketType,
			'quantity' => (int) $request->quantity
		];

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

		return view('pages.cart.index');
	}

	public function removeItemFromCart($index)
	{
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
		//validation rules
		$this->validate($request, [
			'fullName' => 'required|min:2|max:255|string',
			'address' => ['required', 'min:2', 'max:255', 'regex:/^[0-9a-zA-Z ]+$/'],
			'creditCardNumber' => ['required', 'regex:/^([0-9]{4}(\s|-)?[0-9]{4}(\s|-)?[0-9]{4}(\s|-)?[0-9]{4})$/'],
			'monthExpired' => ['required', 'regex:/^[0-9][0-2]$/'],
			'yearExpired' => ['required', 'regex:/^[1-9][6-9]$/'],
			'cvs' => ['required', 'regex:/^\d{3}$/']
		]);

//		$validator = Validator::make($request->all(), );


		if(session()->has('cart')) {
			//create new order
			$order = new Order();
			$order->user_id = $request->user()->id;
			$order->save();

			$carts = session('cart');
			foreach ($carts as $k=>$cart) {
				$summary = new Summary();
				$summary->movie_id = $cart['movie_id'];
				$summary->cinema_id = $cart['cinema_id'];
				$summary->session_id = $cart['session_id'];
				$summary->ticket_type_id = $cart['ticketType'];
				$summary->order_id = $order->id;
				$summary->quantity = $cart['quantity'];
				$summary->save();
			}
			//destroy session
			session()->forget('cart');

			//redirect
			return view('pages.cart.receipt', compact('order'));
		}


		return 'Could not check out!';
	}

	public function displayReceipt()
	{
		$order = null;
		return view('pages.cart.receipt', compact('order'));
	}

}//end class
