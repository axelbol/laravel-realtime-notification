@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
			<div class="card-header">Order Tracker</div>

			<div class="card-body">
				@if(session('message'))
				<div class="alert alert-success">
					{{session('message')}}
				</div>
				@endif

				<order-progress status="{{ $order->status->name}}" initial="{{ $order->status->percent }}" order_id="{{ $order->id }}" ></order-progress>
			<hr>

			<div class="order-details">
				<strong>Order ID: </strong> {{$order->id}} <br>
				<strong>Size: </strong>{{$order->size}} <br>
				<strong>Toppings: </strong>{{$order->toppings}} <br>
				@if($order->instructions != '')
				<strong>Instructions: </strong>{{$order->instructions}}
				@endif
			</div>

			<br>
			<a class="btn btn-primary" href="{{route('user.order')}}">Back to orders</a>

		</div>
		</div>
		</div>
	</div>
</div>
@endsection