var mapViewer;
var marker;
var studentPosition;
var geocoder;

var StudentPosition = function(latitud,longitud){
  this.latitud = latitud || 0.0 ;
  this.longitud = longitud || 0.0 ;
  this.print = function(){
  	console.log("position has changed");
  	console.log("lat ",this.latitud);
	console.log("lng ",this.longitud);
  }
}

function getPosition(){
	return studentPosition;
}

function showCurrentPosition(position){
	var lat = position.coords.latitude;
	var lng = position.coords.longitude;

	var locationLngLat = new google.maps.LatLng(lat,lng);
    
	studentPosition = new StudentPosition(lat,lng);
	studentPosition.print();
	
	var mapOptions = { zoom:15, center: locationLngLat }
	mapViewer = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);
				
	marker = new google.maps.Marker({
		position: locationLngLat,
		map: mapViewer
	});

	google.maps.event.addListener(mapViewer,'click',changeLocation);
}

function changeLocation(event){//Cuando el usuario hace click en el mapa se marca ese punto en el mapa
    var lat = event.latLng.lat();;
	var lng = event.latLng.lng(); 

    studentPosition = new StudentPosition(lat,lng);
	studentPosition.print();

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
    	
    	studentPosition = new StudentPosition(lat,lng);
    	studentPosition.print();
      	
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
	//navigator.geolocation.getCurrentPosition(showCurrentPosition);
	initAutocomplete();
	//geocoder = new google.maps.Geocoder();
}

google.maps.event.addDomListener(window,'load',init);