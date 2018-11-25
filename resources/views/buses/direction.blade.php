@extends('layouts.app')

@section('content')


    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Buses Direction</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <input type="button" id="routebtn" value="route" />
                    <div id="map-canvas" style="width:100%;height:400px"></div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>


    <script type="text/javascript">

        window.onload = function() {

            var directionsDisplay;
            var directionsService = new google.maps.DirectionsService();
            var map;

            directionsDisplay = new google.maps.DirectionsRenderer();
            var chicago = new google.maps.LatLng(30.043489, 31.235291);
            var mapOptions = {
                zoom: 12,
                center: chicago
            };
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            directionsDisplay.setMap(map);
            google.maps.event.addDomListener(document.getElementById('routebtn'), 'click', calcRoute);


            function calcRoute() {
                var from1= '{{$test_form[0]}}';
                var from2= '{{$test_form[1]}}';

                var to1= '{{$test_to[0]}}';
                var to2= '{{$test_to[1]}}';

               var start = new google.maps.LatLng(from1,from2);
                var end = new google.maps.LatLng(to1,to2);

                  //      var start = new google.maps.LatLng(37.334818, -121.884886);
                    //    var end = new google.maps.LatLng(37.441883, -122.143019);

                var request = {
                    origin: start,
                    destination: end,
                    travelMode: google.maps.TravelMode.DRIVING
                };

                directionsService.route(request, function (response, status) {
                    console.log(status);
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                        directionsDisplay.setMap(map);
                    } else {
                        console.log("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
                    }
                });
            }


        }




    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvt4xYX0QycPedzqGKJ7_1sg6KH_iztDA" async defer></script>



@endsection









