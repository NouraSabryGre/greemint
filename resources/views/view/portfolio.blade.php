

@extends('layouts.starter')

@section('title', 'Portfolio')





@section('navigation')
   @include('layouts.nav')
@endsection




@section('content')
  <div class="container">
    
    @include('components.portfolio')
  </div>
@endsection
