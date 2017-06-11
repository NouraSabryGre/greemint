

@extends('layouts.starter')

@section('title', 'User Info')





@section('navigation')
   @include('layouts.nav')
@endsection


@section('sidebar')
  @include('sidebars.userinfo')

@endsection

@section('content')
<div class="col">

  <div class="row mx-2 mt-2">
    <div class="card" style="width:100%;">
      <div class="card-block">
        <h4 class="card-title">Doctors Reports</h4>










        </div>
        <div id="accordion" role="tablist" aria-multiselectable="true">

          <ul class="list-group list-group-flush">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  class="list-group-item list-group-item-action justify-content-between">
              Report Collapse #1
              <span class="badge badge-info badge-pill">14/8/2003</span>

            </a>

            <div id="collapseOne"  class="collapse  px-2 py-2" role="tabpanel" aria-labelledby="headingOne">

                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

            </div>

            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"  class="list-group-item list-group-item-action justify-content-between">
              Report Collapse #2
              <span class="badge badge-info badge-pill">14/8/2003</span>

            </a>


            <div id="collapseTwo" class="collapse px-2 py-2" role="tabpanel" aria-labelledby="headingTwo">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>

          </ul>

        </div>


      </div>
    </div>




<div class="row mx-2 mt-2">
  <div class="card" style="width:100%;">
    <div class="card-block">
      <h4 class="card-title">Hossam's Schedule</h4>
      <div class="">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Type</th>
              <th>What</th>
              <th>When</th>
            </tr>
          </thead>
          <tbody>

              <tr>
                <th scope="row">1</th>
                <td><span class="badge badge-pill badge-default">Drug</span></td>
                <td>Otto</td>
                <td>@Today, 2:30PM</td>
              </tr>

            <tr>
              <th scope="row">2</th>
              <td><a href="#"><span class="badge badge-pill badge-primary">Appointment</span></a></td>
              <td>Dr Ahmed Maghraby</td>
              <td>@January 17, 8:00AM</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><span class="badge badge-pill badge-default">Drug</span></td>
              <td>the Bird</td>
              <td>@Tomorrow, 3:30PM</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>

</div>
@endsection
