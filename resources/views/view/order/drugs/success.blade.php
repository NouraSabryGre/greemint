

@extends('layouts.starter')

@section('title', 'Drugs Order')





@section('navigation')
   @include('layouts.nav')
@endsection


@section('content')
<div class="col-12">
  @if($status == 1)
  <div class="alert alert-success" role="alert">
    <strong>Bank Responded!</strong> {{ $bankMessage }}
  </div>
  @endif
  <div class="row mx-2 mt-2">
    <div class="card" style="width:100%;">
      <div class="card-block">
          <h4 class="card-title">Order Info</h4>
          <div class="container">
            <div class="row mx-auto"  style="width:70%;">
              <ul class="list-group  mt-2" style="width:100%;">
                <li class="list-group-item">Pharmacy: {{ $theOrder->pharmacy->place->name }}</li>
                <li class="list-group-item">Location: {{ $theOrder->pharmacy->place->address }}</li>
                <li class="list-group-item list-group-item-info">Your order in on the way to you</li>
                <li class="list-group-item list-group-item-success">Successfully paid</li>
                <li class="list-group-item ">Total Amount: {{ $theOrder->order->amount }}</li>
              </ul>

            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
