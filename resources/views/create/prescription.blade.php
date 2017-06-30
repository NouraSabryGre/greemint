@extends('layouts.starter')

@section('title', 'Write Report')


@section('navigation')
   @include('layouts.nav')
@endsection


@section('sidebar')
  @include('sidebars.doctorprofile')
@endsection


@section('content')
  <div class="col-8 mt-2">
    <div class="row mx-2 " >
      <div class="card mt-2" style="width:100%">
        <h3 class="card-header">{{ $report->title }}</h3>

        <div class="card-block">
          <p class="card-text">{{ $report->body }}</p>

        </div>
      </div>
    </div>
    <div class="row mx-2 mt-3" >
      <div class="card" style="width:100%;">
        <h3 class="card-header">Write Prescription</h3>

        <form id="prescription" action="/portfolio/{{ $portfolioID }}/prescription/new" method="post" class="px-3 py-2">
          {{ csrf_field() }}
          <div class="input-group">
            <input list="drugs" type="text" id="searchDrugs" class="form-control" placeholder="Search for drug...">
            <datalist id="drugs" class="">

            </datalist>
            <!-- <span class="input-group-btn">

            </span> -->

          </div>

          <button id="formSubmit" type="submit" class=" mt-3 btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('customjs')
  <script type="text/javascript">
    var numberOfDrugs = 0;
    var theDrugs = [];
    var token = null;
    $('#searchDrugs').on('input',function() {
      var value = $(this).val();

      if($('#drugs option').filter(function(){
          return this.value === value;
      }).length) {
          chooseDrug(this.value);
          $('#drugs').html("");
          $('#searchDrugs').val('');
          $('#searchDrugs').on('input');
          return;
      }
      $('#drugs').html("");
      if (value == "") {
        return;
      }

      $.getJSON( "/drug/search/" + value, function( data ) {
        data.forEach(function(item) {
          $('#drugs').append($('<option value="' + item.name + '">'));
        });
      });
    });



    function chooseDrug( drug ) {
      numberOfDrugs += 1;
      theDrugs.push(drug);
      $('#formSubmit').remove();
      $('#prescription').append($('<div class="mt-2 form-group"><h5>'+ drug + '</h5><input name="drug'+numberOfDrugs+'" type="text" value="'+drug+'" readonly style="display:none" ><br><label for="'+'drug' + numberOfDrugs+'">Number/Day</label><select name="select'+numberOfDrugs+'" class="form-control" id="'+'drug' + numberOfDrugs+'"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select><br><label for="'+'drug' + numberOfDrugs+'-date-input" class="col-form-label">Untill Date</label><input class="form-control" name="'+'drug' + numberOfDrugs+'-date-input" type="date" value="2011-08-19" id="'+'drug' + numberOfDrugs+'-date-input"></div><hr>'));
      $('#prescription').append($('<button id="formSubmit" type="submit" class="mt-3 btn btn-primary">Submit</button>'));
    }

    $('#prescription').submit(function( event ) {
      $('form').append('<input type="hidden"  name="numberOfDrugs" value="'+ numberOfDrugs +'"/>');
      return true;
      event.preventDefault();
      var formData = $(this).serializeArray();
      // console.log(formData);
      var drugs = [];
      for (i = 1; i <= numberOfDrugs; i++ ) {
        var select = false;
        var date = false;
        var drug = {};
        drug.name = theDrugs[i - 1 ];
        formData.forEach(function (object) {
          if (token == null ) {
            if (object.name == "_token") {
              token = object.value;
            }
          }
          if (select == false ) {
            if (object.name == 'select' + i ) {
              select = true ;
              drug.select = object.value;
            }
          }
          if (date == false ) {
            if (object.name == 'drug' + i + '-date-input' ) {
              date = true ;
              drug.date = object.value;
            }
          }
        });
        drugs.push(drug);
      }
      var data = [];
      data['drugs'] = drugs ;
      data['_token'] = token;
      // $.post( "/portfolio/20/prescription/new", data)
      // .done(function( data ) {
      //   console.log( "Data Loaded: " + data );
      // });
    });


  </script>
@endsection
