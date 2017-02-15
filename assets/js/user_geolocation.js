var mapViewer;
var marker;
var user_location;
var geocoder;
var map;

var UserLocation = function(latitud,longitud){
  this.latitud = latitud || 0.0 ;
  this.longitud = longitud || 0.0 ;
  this.print = function(){
  	console.log("position has changed");
  	console.log("lat ",this.latitud);
	  console.log("lng ",this.longitud);
  }
}

function getPosition(){
	return user_location;
}

function showCurrentPosition(position){
	var lat = position.coords.latitude;
	var lng = position.coords.longitude;

	var locationLngLat = new google.maps.LatLng(lat,lng);
    
	user_location = new UserLocation(lat,lng);
	user_location.print();
	
	var mapOptions = { zoom:17, center: locationLngLat }
	mapViewer = new google.maps.Map(document.getElementById("map"),mapOptions);
				
	marker = new google.maps.Marker({
		position: locationLngLat,
		map: mapViewer
	});
  mapViewer.setCenter(locationLngLat);
	google.maps.event.addListener(mapViewer,'click',changeLocation);
}

function changeLocation(event){//Cuando el usuario hace click en el mapa se marca ese punto en el mapa
  var lat = event.latLng.lat();;
	var lng = event.latLng.lng(); 

  user_location = new UserLocation(lat,lng);
	user_location.print();

  marker.setMap(null);
  marker = new google.maps.Marker({
    position: event.latLng,
    map: mapViewer
  });
}

function searchLocation(){
	var address = document.getElementById('address').value;
  alert("bienvenido!")
	console.log(address);
	geocoder.geocode({'address': address}, function(results, status) {
  if (status === google.maps.GeocoderStatus.OK) {
    var lat = results[0].geometry.location.lat();
    var lng = results[0].geometry.location.lng(); 

    user_location = new UserLocation(lat,lng);
    user_location.print();
  	
  	mapViewer.setCenter(results[0].geometry.location);
  	marker.setMap(null);
  	marker = new google.maps.Marker({
    	map: mapViewer,
    	position: results[0].geometry.location
  	});
  } else {
  	alert('Geocode was not successful for the following reason: ' + status);
  }
  });
}

function initAutocomplete() {
  autocomplete = new google.maps.places.Autocomplete(( document.getElementById('address') ),{ types: ['geocode'] });
  autocomplete.addListener('place_changed', searchLocation);
}

function init() {
  
	navigator.geolocation.getCurrentPosition(showCurrentPosition);
	initAutocomplete();
	//geocoder = new google.maps.Geocoder();
  $("#modal_map").on("shown.bs.modal", function () {
    google.maps.event.trigger(mapViewer, "resize");
    var locationLngLat = new google.maps.LatLng(user_location.latitud,user_location.longitud);
    mapViewer.setCenter(locationLngLat);
  });

  $("#btn_show_location").click(function(){
     $('#modal_map').modal('show');
  });

  $("#btn_save_location").click(function(){
    $('#modal_map').modal('hide');
  });

  $("#btn_show_message").click(function(){
     $('#modal_message').modal('show');
  });

  $("#btn_send_message").click(function(){
     $('#modal_message').modal('hide');
  });

}

google.maps.event.addDomListener(window,'load',init);