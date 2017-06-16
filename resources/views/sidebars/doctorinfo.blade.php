<div class="col-4">
  <div class="row">
    <div class="card" style="width: 20rem;">

      <div class="card-block">
        <h4 class="card-title text-center">{{ $user['Name'] }}</h4>
      </div>
      <ul class="list-group list-group-flush">
        @foreach($user as $key => $value)
          @if ($key != "Name" && $key != "profilepic")
            <li class="list-group-item">{{$key}}: {{$value}}</li>
          @endif
        @endforeach
      </ul>

    </div>
  </div>
  <div class="row mt-3">
    <div class="card" style="width:100%">
      <div class="card-block">
        <h4 class="card-title">Working Places</h4>
      </div>
      <ul class="list-group list-group-flush">
        @foreach($places as $place)
          <a href="#" class="list-group-item list-group-item-action">{{ $place->place->name }}</a>
        @endforeach
      </ul>
    </div>
  </div>
</div>
