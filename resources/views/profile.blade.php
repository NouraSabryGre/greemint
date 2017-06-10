

@extends('layouts.starter')

@section('title', 'Home')


@section('customcss')
    <style media="screen">
      .circle {
        border-radius: 100%;
        display: inline-block;
        vertical-align: middle;
      }
    </style>
@endsection


@section('navigation')
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
      <img src="images/logo.png" width="100" height="75" class="d-inline-block align-top py-1" alt="">
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <!-- <div class="justify-content-center"> -->

      <!-- </div> -->
      <!-- <div class="justify-content-end"> -->
        <ul class="navbar-nav ">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="schedule.html">Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Donations</a>
          </li>

        </ul>
      <!-- </div> -->
      <button type="button" class="btn btn-outline-warning example-popover " data-toggle="popover"
      data-placement="bottom"
      data-html="true"
      title="Recent"
      data-content='
        <div class="list-group"">

          <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in Dapibus ac facilisis in</a>
          <a href="#" class="list-group-item list-group-item-action">Morbi leo risus Morbi leo risus</a>
          <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac Porta ac consectetur ac</a>

        </div>

        <div class="text-center mt-1">
         <a href="#" class="btn-link">View All</a>
       </div">
      '>
        Notification
      </button>

      <form action="search.html" class="form-inline my-2 my-lg-0 justify-content-center">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>


    </div>
  </nav>

@endsection


@section('sidebar')
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="row">
          <div class="card" style="width: 20rem;">
            <img class="card-img-top mx-auto mt-2 d-block rounded " style="max-width:50%;" src="images/profilepicture.jpg" alt="Card image cap">
            <div class="card-block" id="profileImage">
              <h4 class="card-title text-center">Mostafa Akram</h4>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="card-block text-center">
              <a href="#" class="card-link btn btn-outline-primary">Edit</a><br>
              <a href="#" class="card-link btn btn-outline-primary mt-2">Account Settings</a>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="card" style="width: 20rem;">
          <h3 class="card-header">Family Members</h3>
          <div class="card-block text-center">
            <img class="circle" style="max-width:30%;" src="images/profilepicture.jpg" alt="">
            <img class="circle" style="max-width:30%;" src="images/profilepicture.jpg" alt="">
            <img class="circle" style="max-width:30%;" src="images/profilepicture.jpg" alt="">
          </div>
          <div class="card-block text-center">
            <a href="viewfamily.html" class="card-link">View All</a>

          </div>
        </div>
        </div>
      </div>

@endsection

@section('content')
  <div class="col">
    <div class="row mx-2 mt-2" >
      <!-- A Feed -->
      <div class="card" style="width:100%">
        <h3 class="card-header">Doctor Ahmed Maghraby</h3>
        <div class="d-inline-block text-right text-info mr-1 mt-1">
          29/2/2013
        </div>
        <div class="card-block">
          <h4 class="card-title">Special title treatment</h4>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="text-right">
            <!-- <a href="#" class="btn btn-link btn-sm" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Comments</a> -->

            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Comments
            </button>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Prescription</a>
          </div>
        </div>
      </div>

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
  </div>
  </div>
@endsection







@section('customjs')
  <script type="text/javascript">
    $(function () {
      $('.example-popover').popover({
        container: 'body'
      })
      })
  </script>
@endsection
