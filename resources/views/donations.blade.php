

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



    <!-- Main Content -->
    <div class="mx-auto" style="width=:80%;">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" id="requestslink" href="#">Donate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="dontationformlink" href="#">Find Donation</a>
        </li>
      </ul>
    </div>


    <!-- List of Requests -->
    <div style="width:100%" id="requests">
      <div class="card">
        <div class="list-group">

          <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
          <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
          <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>

        </div>
      </div>
    </div>


    <!-- Donation Form  -->
    <div style="width:100%" id="donationform">
      <div class="card px-2 py-2">
        <form>
          <fieldset class="form-group">
            <legend>Donation Type</legend>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="blood" checked>
                Blood
              </label>
            </div>
            <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="organ">
                Organ
              </label>
            </div>
          </fieldset>

          <div class="form-group">
            <label for="exampleSelect1">Select</label>
            <select class="form-control" id="exampleSelect1">
              <option>A+</option>
              <option>A-</option>
              <option>B+</option>
              <option>B-</option>
              <option>O+</option>
              <option>O-</option>
              <option>AB+</option>
              <option>AB-</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleTextarea">Write Your Message</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
          </div>



          <div class="text-right">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                Show my info to donors
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>

        </form>
      </div>

    </div>



</div>
</div>

@endsection


@section('customjs')
<script type="text/javascript">
  $(function() {
      $('#donationform').hide();
  });

  function toggleFromNav(x) {
    if (x == true) {
      $('#donationform').show();
      $('#dontationformlink').addClass('active')
      $('#requests').hide();
      $('#requestslink').removeClass('active')

    }else {
      $('#donationform').hide();
      $('#dontationformlink').removeClass('active');
      $('#requests').show();
      $('#requestslink').addClass('active');
    }
  }

  $( "#requestslink" ).on('click',function( event ) {
    console.log("hello");
    event.preventDefault();
    toggleFromNav(0);
  });

  $( "#dontationformlink" ).on('click', function( event ) {
    event.preventDefault();
    toggleFromNav(1);
  });
</script>

@endsection
