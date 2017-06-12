

@extends('layouts.starter')

@section('title', 'Home')





@section('navigation')
   @include('layouts.nav')
@endsection


@section('sidebar')
  @include('sidebars.userprofile')
@endsection


@section('content')
  <div class="col">
    <div class="row mx-2 " >
      <!-- A Feed -->
      @foreach($portfolios as $portfolio)
        <div class="card mt-2" style="width:100%">
          <h3 class="card-header">{{ $portfolio->doctor->user->name }}</h3>
          <div class="d-inline-block text-right text-info mr-1 mt-1">
            {{ $portfolio->report->created_at }}
          </div>
          <div class="card-block">
            <h4 class="card-title">{{ $portfolio->report->title }}</h4>
            <p class="card-text">{{ $portfolio->report->body }}</p>
            <div class="text-right">
              
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Comments
              </button>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Prescription</a>
            </div>
          </div>
        </div>
        @endforeach

      <!-- The comments collapse  -->

      <div class="collapse" id="collapseExample" style="width:100%;border-top: 0px;">
        <div class="card ">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
              <li class="list-group-item">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Write Your Comment">
                  <span class="input-group-btn">
                    <button class="btn btn-outline-primary" type="button">Send</button>
                  </span>
                </div>
              </li>

            </ul>

        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div class="modal-title " id="exampleModalLabel" style="width:100%;">
                <h5 > Prescreption From Dr. Ahmed </h5>
                <h6 class="text-right text-info  mr-0"> 29/2/2013 </h6>
              </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Drug</th>
                    <th>Frequency</th>
                    <th>Untill</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Add to Schedule</button>
              <button type="button" class="btn btn-primary">Order Drugs</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Of Feed -->
  </div>


@endsection
