

@extends('layouts.starter')

@section('title', 'User Info')





@section('navigation')
   @include('layouts.nav')
@endsection


@section('sidebar')
  @include('sidebars.placeinfo')

@endsection

@section('content')
<div class="col">
  <div class="row mx-2 mt-2">
    <div class="card" style="width:100%;">
      <div class="card-block">
        <div class="text-right">
          <a href="viewdoctor.html"  class="btn btn-link text-right">View Profile</a>
        </div>
        <h4 class="card-title">Doctor Ahmed Maghraby's Schedule</h4>
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
                <td><a href="#" class="btn-link">El Nozha</a></td>
                <td>Wednesday</td>
                <td>10:00AM</td>
                <td>01:00PM</td>

              </tr>
              <tr>
                <th scope="row">*</th>
                <td><a href="#" class="btn-link">El Nozha</a></td>
                <td>Thursday</td>
                <td>10:00AM</td>
                <td>01:00PM</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="text-right">
          <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal">Request Appointment</a>
        </div>


        <!-- appointment form Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Request An Appointment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="viewplace.html">
                <div class="modal-body">

                  <div class="form-group">
                    <label for="exampleSelect1">Select Doctor</label>
                    <select class="form-control" id="exampleSelect1">
                      <option>Dr. Ahmed Maghraby</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleSelect1">Select Day</label>
                    <select class="form-control" id="exampleSelect1">
                      <option>Monday</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="example-time-input" >Prefered Time</label>
                      <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                  </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Send Request</button>
                </div>
              </form>
            </div>
          </div>
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
            Report Title
            <span class="badge badge-info badge-pill">14/12/2010</span>

          </a>
          <a href="#" class="list-group-item list-group-item-action justify-content-between">
            Report Title
            <span class="badge badge-info badge-pill">14/8/2003</span>

          </a>
          <a href="#" class="list-group-item list-group-item-action justify-content-between">
            Report Title
            <span class="badge badge-info badge-pill">14/9/2014</span>

          </a>


        </ul>


      </div>
    </div>


</div>
</div>
@endsection
