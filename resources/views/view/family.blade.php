

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
  <div class="row mx-2 mt-2">
    <div class="card" style="width:100%;">
      <div class="card-block">
        <h4 class="card-title">Your Family Members</h4>

        <ul class="list-group list-group-flush">
          @foreach ($family as $member)
            <li class="list-group-item">
              <div class="d-inline-block mr-2" style="width:30%;">
                <img src="/images/{{ $member['profilepic'] }}" alt="..." class="img-thumbnail rounded" style="max-width:80%;">
              </div>
              <div class="d-inline-block">
                  <a href="/view/user/{{$member['id']}}" class="btn btn-link">
                    <h5 > {{ $member['name']}} <span class="badge badge-info">{{$member['degree']}}nd</span> </h5>
                  </a>

              </div>
            </li>
          @endforeach

        </ul>

        <br>
        <div class="text-right">
          <a href="#" class="card-link">Edit</a>
          <a href="#" class="card-link" data-toggle="modal" data-target="#myModal">Add</a>
        </div>
      </div>
    </div>
    <!--Add Member Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="input-group mx-autp" style="max-width:80%" >

              <span class="input-group-addon" id="basic-addon1">#</span>
              <input type="text" class="form-control" placeholder="UserID" aria-describedby="basic-addon1">
            </div>


            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
              <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
              <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Add</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
