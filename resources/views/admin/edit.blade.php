@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Edit Order Status</div>

            <div class="card-body">
              @if (session('message'))
                  <div class="alert alert-success">
                    {{ session('message') }}
                  </div>
              @endif

              <form action="{{ route('admin.order.update', $order) }}" class="form-horizontal" id="update-order-status-form" method="POST">
                @csrf
                @method('PATCH')

                <fieldset>
                  <div class="form-group m-b-lg">
                    <label for="" class="control-label col-lg-3"><strong>Order ID</strong></label>
                    <div class="col-lg-8">
                      <div class="line-up-form">{{ $order->id }}</div>
                    </div>
                  </div>

                  <div class="form-group m-b-lg">
                    <label for="" class="control-label col-lg-3"><strong>Customer</strong></label>
                    <div class="col-lg-8">
                      <div class="line-up-form">{{ $order->customer->name }}</div>
                    </div>
                  </div>

                  <div class="form-group m-b-lg">
                    <label for="" class="control-label col-lg-3"><strong>Size</strong></label>
                    <div class="col-lg-8">
                      <div class="line-up-form">{{ $order->size }}</div>
                    </div>
                  </div>

                  <div class="form-group m-b-lg">
                    <label for="" class="control-label col-lg-3"><strong>Toppings</strong></label>
                    <div class="col-lg-8">
                      <div class="line-up-form">{{ $order->toppings }}</div>
                    </div>
                  </div>

                  <div class="form-group m-b-lg">
                    <label for="" class="control-label col-lg-3"><strong>Instructions</strong></label>
                    <div class="col-lg-8">
                      <div class="line-up-form">{{ $order->instructions }}</div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="control-label col-lg-3"><strong>Status</strong></label>
                    <div class="controls col-md-8">
                      <select name="status_id" id="status_id" class="dropdown-style input-field input-normal">
                        @foreach ($statuses as $status)
                            <option value="{{ $status->id }}" {{ (old("status", $currentStatus) == $status->id ? "selected":"") }}>{{ $status->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-3"></div>
                    <div class="controls col-lg-8">
                      <div class="form-actions">
                        <button type="submit" id="update-order" class="btn btn-success">
                          Update Status
                        </button>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection