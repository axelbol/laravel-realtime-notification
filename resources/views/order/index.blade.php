@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">My orders</div>

				<div class="card-body">
					@if(session('message'))
					<div class="alert alert-success">
						{{ session('message') }}
					</div>
					@endif

					@if($orders->count() == 0)
					<p>No orders yet.</p>
					<a href="{{route('user.order.create')}}" class="btn btn-success">Order Pizza</a>
					@else

					<order-alert user_id="{{ auth()->user()->id }}"></order-alert>

					<div class="table table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>Address</th>
									<th>Size</th>
									<th>Toppings</th>
									<th>Instructions</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($orders as $order)
									<tr>
										<td> {{$order->id}} </td>
										<td> {{$order->address}} </td>
										<td> {{$order->size}} </td>
										<td> {{$order->toppings}} </td>
										<td> {{$order->instructions}} </td>
										<td><a href="{{route('user.order.show', $order)}}">{{$order->status->name}}</a></td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection