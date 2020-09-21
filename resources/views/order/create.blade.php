@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Order Pizza</div>

				<div class="card-body">
					@if(session('status'))
					<div class="alert alert-success">
						{{session('status')}}
					</div>
					@endif

					<div class="row">
						<div class="col-lg-12">
							<form method="POST" action=" {{route('user.order.store')}} " class="form-horizontal">
								{{csrf_field()}}

								<div class="form-group">
									<label class="col-sm-8 control-label"><strong>Address</strong></label>
									<div class="col-sm-10">
										<input type="text" name="address" placeholder="Your address" class="form-control" autofocus>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-8 control-label"><strong>Size</strong></label>
									<div class="col-sm-10">
										<div>
											<label><input type="radio" checked="" name="size" value="medium" id="medium"> Medium </label>
										</div>
										<div>
											<label><input type="radio" name="size" value="large" id="large"> Large </label>
										</div>
										<div>
											<label><input type="radio" name="size" value="extra-large" id="extra-large"> Extra Large </label>
										</div>
									</div>
								</div>

								<div class="hr-line-dashed"></div>

								<div class="form-group">
									<label class="col-sm-8 control-label"><strong>Toppings</strong></label>
									<div class="col-sm-10">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppings[]" value="pepperoni" id="pepperoni"> Pepperoni
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" name="toppings[]" value="extra-cheese" id="extra-cheese"> Extra Cheese
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" name="toppings[]" value="mushrooms" id="mushrooms"> Mushrooms
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" name="toppings[]" value="ground-beef" id="ground-beef"> Ground Beef
										</label>
										<label class="checkbox-inline">
											<input type="checkbox" name="toppings[]" value="pineapple" id="pineapple"> Pineapple
										</label>
									</div>
								</div>

								<div class="hr-line-dashed"></div>
								<div class="hr-line-dashed"></div>

								<div class="form-group">
									<label class="col-sm-8 control-label"><strong>Instructions</strong></label>
									<div class="col-sm-10">
										<input type="text" name="instructions" placeholder="Special instructions here" class="form-control">
									</div>
								</div>

								<div class="hr-line-dashed"></div>

								<div class="form-group">
									<div class="col-sm-4 col-sm-offset-2">
										<button class="btn btn-success" type="submit">Order now</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection