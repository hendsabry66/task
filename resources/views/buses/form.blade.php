

    {!! Form::open(['route'=>'post-bus' ,'class'=>'form-horizontal ', 'method' => 'post']) !!}



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Buses</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <div class="form-group">
                            <label for="exampleInputEmail1">number</label>
                            <input type="text" class="form-control" name="number"  id="name" aria-describedby="emailHelp" placeholder="Enter Number">
                        </div>

                        {{--<input type="button" id="routebtn" value="route" />--}}
                        {{--<div id="map-canvas" style="height: 100%;width: 100%;margin: 0px;padding: 0px"></div>--}}
                        <label for="exampleInputEmail1">from</label>
                        <input type="text" class="form-control" name="from" id="from">


                        <label for="exampleInputEmail1">to</label>
                        <input type="text" class="form-control" name="to" id="to">

<br>
                        <section>
                            <div id='map_canvas' style="width:100%;height:400px"></div>
                            <div id="current">Nothing yet...</div>
                        </section>

                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>


@section('script')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>



    <script type="text/javascript">

        window.onload = function() {

            var map = new google.maps.Map(document.getElementById('map_canvas'), {
                zoom: 7,
                center: new google.maps.LatLng(30.043489, 31.235291),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var myMarker = new google.maps.Marker({
                position: new google.maps.LatLng(30.043489, 31.235291),
                draggable: true
            });

            var myMarker2 = new google.maps.Marker({
                position: new google.maps.LatLng(30.030284, 31.193760),
                draggable: true
            });

            google.maps.event.addListener(myMarker, 'dragend', function (evt) {
                document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
                document.getElementById('from').value = evt.latLng.lat().toFixed(3) + ','+ evt.latLng.lng().toFixed(3) ;
            });

            google.maps.event.addListener(myMarker, 'dragstart', function (evt) {
                document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
            });

            map.setCenter(myMarker.position);
            myMarker.setMap(map);





            google.maps.event.addListener(myMarker2, 'dragend', function (evt) {
                document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
                document.getElementById('to').value = evt.latLng.lat().toFixed(3) + ','+ evt.latLng.lng().toFixed(3) ;
            });

            google.maps.event.addListener(myMarker2, 'dragstart', function (evt) {
                document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
            });

            map.setCenter(myMarker2.position);
            myMarker2.setMap(map);

        }
        // function mapLocation() {
        //     var directionsDisplay;
        //     var directionsService = new google.maps.DirectionsService();
        //     var map;
        //
        //     function initialize() {
        //         directionsDisplay = new google.maps.DirectionsRenderer();
        //         var chicago = new google.maps.LatLng(37.334818, -121.884886);
        //         var mapOptions = {
        //             zoom: 7,
        //             center: chicago
        //         };
        //         map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        //         directionsDisplay.setMap(map);
        //         google.maps.event.addDomListener(document.getElementById('routebtn'), 'click', calcRoute);
        //     }
        //
        //     function calcRoute() {
        //         var start = new google.maps.LatLng(37.334818, -121.884886);
        //         //var end = new google.maps.LatLng(38.334818, -181.884886);
        //         var end = new google.maps.LatLng(37.441883, -122.143019);
        //         var request = {
        //             origin: start,
        //             destination: end,
        //             travelMode: google.maps.TravelMode.DRIVING
        //         };
        //         directionsService.route(request, function(response, status) {
        //             if (status == google.maps.DirectionsStatus.OK) {
        //                 directionsDisplay.setDirections(response);
        //                 directionsDisplay.setMap(map);
        //             } else {
        //                 alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
        //             }
        //         });
        //     }
        //
        //     google.maps.event.addDomListener(window, 'load', initialize);
        // }
        // mapLocation();


    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvt4xYX0QycPedzqGKJ7_1sg6KH_iztDA" async defer></script>



 @endsection


{!! Form::close() !!}







