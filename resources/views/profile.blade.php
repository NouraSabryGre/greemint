

@extends('layouts.starter')

@section('title', 'Home')





@section('navigation')
   @include('layouts.nav')
@endsection


@section('sidebar')
  @include('sidebars.userprofile')
@endsection


@section('content')
  <div class="col">
    @foreach($portfolios as $portfolio)
      @include('components.portfolio')
    @endforeach

<!-- End Of Feed -->
</div>
@endsection


@section('customjs')
  <script type="text/javascript">
    $('#generateCode').on('click', function() {

      var baseURL = window.location.protocol + "//" + window.location.host + "/";

      $.get( "/code/{{kebab_case($user['Name'])}}", function( data ) {
        data = jQuery.parseJSON(data) ;
        var code = data.code;

        $('#codeModal .modal-content').text(code);

      });


    });


    var crsf = '{{ csrf_field() }}';


  </script>


  <script src="/js/order.js" charset="utf-8"></script>
@endsection
