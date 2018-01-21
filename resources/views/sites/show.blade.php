@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="col-xs-12 col-sm-8">
            <h2>
                
                <td> {{ $sitios->address }}</td>
                
            </h2>
            <hr>

            <p></p>
            <p></p>
        </div>
        
    </div>
        <div class="col-xs-12 col-sm-4">
        <a href="{{ route('home')}}" class="btn btn-default pull-right">Regresar</a>
                
            </div>

               
        </div>

<div class="col-md-8 col-md-offset-2">
 <h3>My Google Maps Demo</h3>
    <div id="map" style=" height: 400px;
        width: 100%;
"></div>

    <script>
      function initMap() {
        var uluru = {lat: {{ $sitios->latitude }}, lng: {{ $sitios->longitude }}};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgZ2T6TNOmE_02a7acJu-C9IWz0hNDQeo&callback=initMap"
  async defer>
</script>


</div>

    </div>
</div>
@endsection
