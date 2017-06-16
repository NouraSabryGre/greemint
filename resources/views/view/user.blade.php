

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
            @foreach($reports as $report)
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$report->id}}" aria-expanded="true" aria-controls="collapse{{$report->id}}"  class="list-group-item list-group-item-action justify-content-between">
                {{ $report->title }} <span class="badge badge-default badge-pill"> by {{ $report->getDoctorName() }} </span>
                <span class="badge badge-info badge-pill">{{ $report->created_at }}</span>
              </a>


              <div id="collapse{{$report->id}}"  class="collapse  px-2 py-2" role="tabpanel" aria-labelledby="headingOne">

                  {{ $report->body }}

              </div>
            @endforeach

          </ul>

        </div>


      </div>
    </div>




<div class="row mx-2 mt-2">
  <div class="card" style="width:100%;">
    <div class="card-block">
      <h4 class="card-title">{{$user['Name']}}'s Schedule</h4>
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

            @foreach($schedule as $item)
              <tr>
                <th scope="row">{{ $item->id }}</th>
                @if ($item->type == 'drug')
                  <td><span class="badge badge-pill badge-default">Drug</span></td>
                @else
                  <td><span class="badge badge-pill badge-primary">Appointment</span></td>
                @endif
                <td>{{$item->title}}</td>
                <td>@ {{ $item->date }}</td>
              </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>

</div>
@endsection
