

@extends('layouts.starter')

@section('title', 'Donations')





@section('navigation')
   @include('layouts.nav')
@endsection


@section('sidebar')
  @include('sidebars.userprofile')

@endsection

@section('content')
<div class="col">
  <div class="row mx-2 mt-2" >



    <!--  Main Content -->

    <div class="card" style="width:100%">
      <div class="card-block">
        <h4 class="card-title">Search for...</h4>
        <div>


          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <div class="input-group-btn">
              <button type="button" class="btn btn-secondary">All</button>
              <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">All</a>
                <div role="separator" class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Doctores</a>
                <div role="separator" class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Hospitals</a>
                <a class="dropdown-item" href="#">Pharmacies</a>
              </div>
            </div>
          </div>

          <hr>

          <div class="list-group">

            <a href="/view/doctor/2" class="list-group-item list-group-item-action">Dr Ahmed Maghraby</a>
            <a href="/view/place/2" class="list-group-item list-group-item-action">El Nozha Hospital</a>
            <a href="#" class="list-group-item list-group-item-action">El Ezaby Pharmacy</a>

          </div>


          <hr>


          <div >
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
</div>
@endsection
