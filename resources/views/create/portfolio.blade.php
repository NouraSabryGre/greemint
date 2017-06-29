@extends('layouts.starter')

@section('title', 'Write Report')


@section('navigation')
   @include('layouts.nav')
@endsection


@section('sidebar')
  @include('sidebars.doctorprofile')
@endsection


@section('content')
  <div class="col-8 mt-2">
    <div class="row mx-2 " >
      <div class="card" style="width:100%;">
        <h3 class="card-header">Write Report</h3>

        <form action="/portfolio/new" method="post" class="px-3 py-2">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="formGroupExampleInput">Report Title</label>
            <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Report Title">
          </div>
          <div class="form-group">
            <label for="exampleTextarea">Your Report</label>
            <textarea name="body" class="form-control" id="exampleTextarea" rows="5"></textarea>
          </div>
          <div class="form-group">
            <input style="display:none" readonly type="text" name="user" class="form-control" value="{{ kebab_case($forUser) }}" >
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('customjs')

@endsection
