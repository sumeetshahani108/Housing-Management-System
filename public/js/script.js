var map;
var myLatLng;
$(document).ready(function(){

    geoLocationInit();
    function geoLocationInit(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(success, fail)
        }else{
            alert("Browser not supported");
        }
    }

    function success(position){

        var latval = position.coords.latitude;
        var lngval = position.coords.longitude;
        console.log(latval, lngval);
        myLatLng = new google.maps.LatLng(latval, lngval);
        createMap(myLatLng);
        //nearbySearch(myLatLng,"school");
        searchApartment(latval, lngval);
    }

    function fail() {
        alert("it fails");
    }

    //var myLatLng = new google.maps.LatLng(-33.866, 151.1956);

    function createMap(myLatLng){
        map = new google.maps.Map(document.getElementById('map'),{
            center : myLatLng,
            zoom : 12
        });

        var marker = new google.maps.Marker({
            position : myLatLng,
            map : map
        });
    }

    //we can specify the types as to whatever we want to
    //Marker Code
    function createMarker(latlng){
        var marker = new google.maps.Marker({
            position : latlng,
            map : map
        });
    }
    function searchApartment(lat, lng){
        $.post('http://localhost/viewApts',{lat:lat, lng : lng},function(match){
            //console.log(match);
            //$.each is the for-each loop to loop through all the values
            $.each(match,function(i, val){
                alatval = val.lat ;
                alngval = val.lng ;
                aLatLng = new google.maps.LatLng(alatval, alngval);
                createMarker(aLatLng);
            });
        });
    }
    //function nearbySearch(myLatLng,type){
    //    var request = {
    //        location: myLatLng,
    //        radius: '1500',
    //        types: [type]
    //    };

    //    service = new google.maps.places.PlacesService(map);
    //    service.nearbySearch(request, callback);

    //    function callback(results, status) {
    //        if (status == google.maps.places.PlacesServiceStatus.OK) {
    //            for (var i = 0; i < results.length; i++) {
    //                var place = results[i];
    //                console.log(place);
    //                latlng = place.geometry.location;
    //                name = place.name;
    //                createMarker(latlng, name);
    //            }
    //        }
    //    }
    //}

});
