<div class="col-4" style="width:100%">
  <div class="row">
    <div class="card" style="">

      <img class="card-img-top mx-auto mt-2 d-block rounded " style="max-width:50%;" src="/images/{{$user['profilepic']}}" alt="Card image cap">
      <div class="card-block" id="profileImage">
        <h4 class="card-title text-center">{{ $user['Name'] }}<br><span class="badge badge-info">2nd</span></h4>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
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
        <h4 class="card-title">Taking Drugs</h4>
      </div>
      <ul class="list-group list-group-flush">
        @foreach($drugs as $drug)
          <a href="/view/drug/{{$drug->id}}" class="list-group-item list-group-item-action">{{$drug->name}}</a>
        @endforeach
      </ul>
    </div>
  </div>
</div>
