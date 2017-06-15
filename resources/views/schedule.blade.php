

@extends('layouts.starter')

@section('title', 'Your Schedule')





@section('navigation')
   @include('layouts.nav')
@endsection


@section('sidebar')
  @include('sidebars.userprofile')

@endsection

@section('content')
<div class="col">
  <div class="row mx-2 mt-2">

    <div class="card" style="width:100%">
      <div class="card-block">
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


        <div style="width:100%">
          <nav aria-label="Page navigation example" >
            <ul class="pagination justify-content-center">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>

  </div>
</div>

@endsection
