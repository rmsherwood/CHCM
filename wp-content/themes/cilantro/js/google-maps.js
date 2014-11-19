/*Initialize Google Map after page has loaded, variables, etc */


function initialize() {
  var myLatlng = new google.maps.LatLng(38.9302600, -77.0323006);
  var markerLocation = new google.maps.LatLng(38.9301900,-77.0324900);
  var mapOptions = {
    zoom: 18,
    center: myLatlng,
    disableDefaultUI: true,
	scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: markerLocation,
      map: map,
      title: 'Columbia Heights Market Place'
  });

google.maps.event.addListener(map, 'center_changed', function() {
    // 3 seconds after the center of the map has changed, pan back to the
    // marker.
    window.setTimeout(function() {
      map.panTo(marker.getPosition());
    }, 3000);
  });
var infowindow = new google.maps.InfoWindow({
  content:"<a href=\"https://www.google.com/maps/place/Columbia+Heights+Civic+Plaza/@38.9298636,-77.0323024,19z/data=!4m2!3m1!1s0x0000000000000000:0x81c266bb35892a4d\" target=\"_blank\">Get Directions</a>"
  });

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}


google.maps.event.addDomListener(window, 'resize', initialize);
google.maps.event.addDomListener(window, 'load', initialize)