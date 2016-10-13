<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(Request $request) {
		$orders = User::find($request->user()->id)->orders()->orderBy('updated_at', 'desc')->paginate(5);
		return view('pages.users.index', compact('orders'));
	}
}
