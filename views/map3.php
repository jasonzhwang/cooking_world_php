<!DOCTYPE html>
<html>
<head>
    <?php include "user_nav_bar.php"?>
    <?php include "logo_banner.php" ?>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height:30em;
            width: 65%;
            margin: 5%;
            padding:0;
        }
    </style>
</head>
<body onload="getLocation()">
</div>
<!--<button onclick="getLocation()">Current position</button>-->
<div class="container-fluid text-center">
    <div>
        <div class="col-xs-12 col-md-8 activity-map">
        <div id="map" onload="initCoords()"></div>
        </div>
    </div>
</div><br>
<div class="container-fluid">
    <!--<div id="map" onload="getlocation()" class="off-canvas-wrap" data-offcanvas>-->
    <div class="row1">
        <div class="col-xs-12 col-md-8">
            <ul class="nav nav-tabs text-center">
                <li class="active">
                    <a href="xw1" data-toggle='tab'>Activities</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="xw1">
                    <p><a>Pre</a><span class="pull-right">Next</span></p>
                    <p><input class="search_input"></input><button class="pull-right">GO!</button></p>
                    <p><a>Jeremy's house Saturday Chinese food workshop</a><span class="pull-right">2017-5-14</span></p>
                    <p><a>Linda's house special homemade cup</a><span class="pull-right">2017-5-14</span></p>
                    <p><a>Talks to steak in Jack's house</a><span class="pull-right">2016-5-14</span></p>
                    <p><a>Australia Anzac biscuits recepit workshop</a><span class="pull-right">2016-5-14</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
<div class="row2">
    <div class="col-xs-12 col-md-8">
        <ul class="nav nav-tabs text-center">
            <li class="active">
                <a href="xw2" data-toggle='tab'>ADD</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="xw2">
                <p><label>ACTIVITY NAME</label><input class="pull-right"></input></p>
                <p><label>NAME</label><input class="pull-right"></input></p>
                <p><label>ADDRESS</label><input class="pull-right"></input></p>
                <p><label>PHONE NO.</label><input class="pull-right"></input></p>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script text="html/javascript">
    //user locations
    var locations = [
        ['Bondi Beach', -33.890542, 151.274856, 4],
        ['Coogee Beach', -33.923036, 151.259052, 5],
        ['Cronulla Beach', -34.028249, 151.157507, 3],
        ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
        ['Maroubra Beach', -33.950198, 151.259302, 1],
        ['60 Tribune St, South Brisbane QLD 4101',-27.481572 ,153.021205, 6]
    ];
////    $ajax({
////        method:'GET',
////        url:'../locations/locations.xml',
////        data:{
////             latitude:$('latitude').val(),
////             longtitude:$('longtitude').val(),
////             isRem:isRem
////        }
//    })
//    locations.append([latitude,longtitude]);
    var map;
    <!--obtain_the_current_position-->
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
//                addMarker(position,map);
                initMap(position);
                console.log(position);
            });
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }
    <!--initial the map-->
    function initMap(position) {
        var myLatLng = {lat: position.coords.latitude, lng:position.coords.longitude};
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom:11
        });
        addMarker(myLatLng,map);
        showMarker(locations,map);
    }
    // Adds a marker to the map.
    function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        var marker = new google.maps.Marker({
            position: location,
//            label: labels[labelIndex++ % labels.length],
            map: map
        });
    }
    //show all users' location
    function showMarker(locations,map) {
        var infowindow = new google.maps.InfoWindow();
        var marker, i;
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHfFPsmx6MXr2JmH4Kio_lwo2xv7c_ev8&callback=initMap"
        async defer></script>
</html>