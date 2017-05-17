<!DOCTYPE html>
<html>
<head>
    <title>Activity map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "default_head_resource.html"?>
</head>
<?php include "user_nav_bar.php"?>
<?php include "logo_banner.php" ?>
<body onload="getLocation()">
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#view-activity-tab">Activities</a></li>
                <li><a data-toggle="tab" href="#menu1">Add Activity</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="view-activity-tab">
                    <div class="activty-btns">
                        <button class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span></button>
                        <button class="btn btn-default pull-right"><span class="glyphicon glyphicon-arrow-right"></span></button>
                    </div>
                    <div class="activity-keywords">
                        <div class="col-md-2">
                            <label for="activity-keyword">Keyword:</label>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" id="activity-keyword" type="text"/>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="activity-list">
                        <li><a href="#">activity 1</a><p>10-11 9:50</p></li>
                        <li><a href="#">activity 1</a><p>10-11 9:50</p></li>
                        <li><a href="#">activity 1</a><p>10-11 9:50</p></li>
                        <li><a href="#">activity 1</a><p>10-11 9:50</p></li>
                    </ul>
                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <label>Activity Name</label><input class="form-control"/>
                    <label>NAME</label><input class="form-control"/>
                    <label>ADDRESS</label><input class="form-control"/>
                    <label>Contact Phone</label><input class="form-control"/>
                    <br>
                    <button class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-8 activity-map">
            <div id="map" onload="initCoords()"></div>
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
    function initCoords() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(initialize, locationError);
        } else {
            showError("Your browser does not support Geolocation!");
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHfFPsmx6MXr2JmH4Kio_lwo2xv7c_ev8&callback=initMap"
        async defer></script>
</html>