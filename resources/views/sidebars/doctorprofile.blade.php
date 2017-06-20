

    <div class="col-4">
      <div class="row">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top mx-auto mt-2 d-block rounded " style="max-width:50%;" src="/images/{{ $user['profilepic'] }}" alt="Card image cap">
          <div class="card-block" id="profileImage">
            <h4 class="card-title text-center"> {{ $user['name'] }} </h4>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          </div>
          <ul class="list-group list-group-flush">
            @foreach($user as $key => $value)
              @if ($key != "name" && $key != 'profilepic')
                <li class="list-group-item">{{title_case($key)}}: {{$value}}</li>
              @endif
            @endforeach
          </ul>
          <div class="card-block text-center">
            <a href="#" class="card-link btn btn-outline-primary">Edit</a><br>
            <a href="#" class="card-link btn btn-outline-primary mt-2">Account Settings</a>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="card" style="width: 20rem;">
        <h3 class="card-header">Your Patients</h3>
        <div class="card-block text-center">
          <div class="list-group">
            @foreach($patients  as $patient)
              <a href="/view/user/{{$patient->id}}" class="list-group-item list-group-item-action">{{ $patient->name }}</a>
            @endforeach
          </div>
        </div>
        <div class="card-block text-center">
          <a href="/view/doctor/users" class="card-link">View All</a>
        </div>
      </div>
      </div>
    </div>
