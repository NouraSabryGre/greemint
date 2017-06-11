<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
    <img src="/images/logo.png" width="100" height="75" class="d-inline-block align-top py-1" alt="">
  </a>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <!-- <div class="justify-content-center"> -->

    <!-- </div> -->
    <!-- <div class="justify-content-end"> -->
      <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link" href="/user/2">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/schedule">Schedule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/donations">Donations</a>
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
       <a href="/notifications" class="btn-link">View All</a>
     </div">
    '>
      Notification
    </button>

    <form action="/find" method="get" class="form-inline my-2 my-lg-0 justify-content-center">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>


  </div>
</nav>
