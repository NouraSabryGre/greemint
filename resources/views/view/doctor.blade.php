

@extends('layouts.starter')

@section('title', 'User Info')





@section('navigation')
   @include('layouts.nav')
@endsection


@section('sidebar')
  @include('sidebars.doctorinfo')

@endsection

@section('content')
<div class="col">
  <div class="row mx-2 mt-2">
    <div class="card" style="width:100%;">
      <div class="card-block">
        <h4 class="card-title">Doctor's Schedule</h4>
        <div class="">
          <table class="table table-striped">
            <thead>
              <tr>
                <th></th>
                <th>Clinic</th>
                <th>Day</th>
                <th>From</th>
                <th>To</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">*</th>
                <td><a href="/view/place/2" class="btn-link">Cleopatra Hospital</a></td>
                <td>Monday</td>
                <td>10:00AM</td>
                <td>01:00PM</td>
              </tr>
              <tr>
                <th scope="row">*</th>
                <td><a href="viewplace.html" class="btn-link">El Nozha</a></td>
                <td>Wednesday</td>
                <td>10:00AM</td>
                <td>01:00PM</td>

              </tr>
              <tr>
                <th scope="row">*</th>
                <td><a href="viewplace.html" class="btn-link">El Nozha</a></td>
                <td>Thursday</td>
                <td>10:00AM</td>
                <td>01:00PM</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
  <div class="row mx-2 mt-2">
    <div class="card" style="width:100%;">
      <div class="card-block">
        <h4 class="card-title">Your Portfolios</h4>

        <ul class="list-group list-group-flush">

          <a href="#" class="list-group-item list-group-item-action justify-content-between">
            Cras justo odio
            <span class="badge badge-info badge-pill">14/12/2010</span>

          </a>
          <a href="#" class="list-group-item list-group-item-action justify-content-between">
            Cras justo odio
            <span class="badge badge-info badge-pill">14/8/2003</span>

          </a>
          <a href="#" class="list-group-item list-group-item-action justify-content-between">
            Cras justo odio
            <span class="badge badge-info badge-pill">14/9/2014</span>

          </a>


        </ul>


      </div>
    </div>


  </div>
</div>
@endsection
