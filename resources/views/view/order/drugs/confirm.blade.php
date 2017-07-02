

@extends('layouts.starter')

@section('title', 'Drugs Order')





@section('navigation')
   @include('layouts.nav')
@endsection


@section('content')
<div class="col-12">
  <div class="row mx-2 mt-2">
    <div class="card" style="width:100%;">
      <div class="card-block">
          <h4 class="card-title">Order Confirmation</h4>
          <div class="container">
            <div class="row mx-auto"  style="width:70%;">
              <ul class="list-group  mt-2" style="width:100%;">
                <li class="list-group-item">Pharmacy: {{ $theOrder->pharmacy->place->name }}</li>
                <li class="list-group-item">Location: {{ $theOrder->pharmacy->place->address }}</li>
                <li class="list-group-item list-group-item-info">Your order will arrive in an hour maximum</li>
                <li class="list-group-item list-group-item-success">Total Amount: {{ $theOrder->order->amount }}</li>
              </ul>
              <form class="mt-2" action="/order/drugs/{{$theOrder->id}}/checkout" method="post">
                <div class="form-group">
                  {{ csrf_field() }}
                  <label for="paymentMethod">Pay by: </label>
                  <select name="method" class="form-control" id="paymentMethod">
                    <option value="cash">Cash</option>
                    <option value="credit">Credit</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Checkout</button>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
