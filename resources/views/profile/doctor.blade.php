@extends('layouts.starter')

@section('title', 'Home')


@section('navigation')
   @include('layouts.nav')
@endsection


@section('sidebar')
  @include('sidebars.doctorprofile')
@endsection


@section('content')
@section('content')
  <div class="col">
    <div class="row mx-2 " >
      <div class="card mt-2 text-right" style="width:100%">
        <h3 class="card-header">
          <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal">
            Add
          </button>
        </h3>


        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enter User's ID</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">@</span>
                  <input type="text" id="userIDInput" class="form-control" placeholder="User's ID" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="viewUser" type="button" class="btn btn-primary">View</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @foreach($portfolios as $portfolio)
      <div class="row mx-2 " >
        <!-- A Feed -->

        <div class="card mt-2" style="width:100%">
          <h3 class="card-header">{{ $portfolio->user->name }}</h3>
          <div class="d-inline-block text-right text-info mr-1 mt-1">
            {{ $portfolio->report->created_at }}
          </div>
          <div class="card-block">
            <h4 class="card-title">{{ $portfolio->report->title }}</h4>
            <p class="card-text">{{ $portfolio->report->body }}</p>
            <div class="text-right">

              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comments{{ $portfolio->report->id }}" aria-expanded="false" aria-controls="comments{{ $portfolio->report->id }}">
                Comments
              </button>
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#prescription{{ $portfolio->prescription->id }}">Prescription</a>
            </div>
          </div>
        </div>


        <!-- The comments collapse  -->

        <div class="collapse" id="comments{{ $portfolio->report->id }}" style="width:100%;border-top: 0px;">
          <div class="card ">
            <ul class="list-group list-group-flush">
              @foreach ($portfolio->comments as $comment)
                <li class="list-group-item">{{ $comment->body }}</li>
              @endforeach
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
        <div class="modal fade" id="prescription{{ $portfolio->prescription->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <div class="modal-title " id="exampleModalLabel" style="width:100%;">
                  <h5 > Prescreption From {{ $portfolio->doctor->user->name }} </h5>
                  <h6 class="text-right text-info  mr-0"> {{$portfolio->prescription->created_at}} </h6>
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

                    @foreach($portfolio->prescription->drugs as $drug)
                      <tr>
                        <th scope="row">1</th>
                        <td>{{ $drug->name }}</td>
                        <td>{{ $drug->pivot->repeat }}</td>
                        <td>@ {{ $drug->pivot->end_date }}</td>
                      </tr>
                    @endforeach


                  </tbody>
                </table>
              </div>
              <!-- <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Add to Schedule</button>
                <button type="button" class="btn btn-primary">Order Drugs</button>
              </div> -->
            </div>
          </div>
        </div>


      </div>
    @endforeach

    <!-- End Of Feed -->
  </div>

@endsection

@section('customjs')
  <script type="text/javascript">
    $(function() {

    });

    $('#viewUser').on('click', function() {
      var baseURL = window.location.protocol + "//" + window.location.host + "/";
      var id = $('#userIDInput').val();
      if (id != "" ) {
        // send to doctor/view/user

        window.location.href = baseURL + "doctor/view/user/" + id;
      }else {
        // error
      }
    });

  </script>
@endsection
