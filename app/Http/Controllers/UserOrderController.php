<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class UserOrderController extends Controller {
	public function index() {
		$user = auth()->user();
		$orders = Order::with('status')->where('user_id', $user->id)->get();
		// $orders = Order::has('status')->where('user_id', $user->id)->get();
		return view('order.index', compact('user', 'orders'));
	}

	public function create() {
		return view('order.create');
	}

	public function store(Request $request) {
		$request->validate([
			'address' => 'required',
			'size' => 'required',
		]);

		$order = Order::create([
			'user_id' => auth()->user()->id,
			'address' => $request->address,
			'size' => $request->size,
			'toppings' => implode(', ', $request->toppings),
			'instructions' => $request->instructions,
		]);

		return redirect()->route('user.order.show', $order)->with('message', 'Order received');
	}
	/**
	 * Display the specific resource
	 * @param  Order  $order [description]
	 * @return [type]        [description]
	 */
	public function show(Order $order) {
		return view('order.show', compact('order'));
	}
}