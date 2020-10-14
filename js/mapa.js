var map;

initMap();

function initMap() {

	var pos = {lat: 4.685494, lng: -74.055843};
	// var pos2 = {lat: 4.683317, lng: -74.094686};
	// var pos3 = {lat: 4.658395, lng: -74.066039};
	map = new google.maps.Map(document.getElementById('contacts_map'), {
		center: pos,
		zoom: 11,
		scaleControl: false,
		// zoomControl: false,
		scrollwheel:  false,
		styles: [
		  {
		    "featureType": "administrative.land_parcel",
		    "elementType": "labels",
		    "stylers": [
		      {
		        "visibility": "off"
		      }
		    ]
		  },
		  {
		    "featureType": "poi",
		    "elementType": "labels.text",
		    "stylers": [
		      {
		        "visibility": "off"
		      }
		    ]
		  },
		  {
		    "featureType": "poi.business",
		    "stylers": [
		      {
		        "visibility": "off"
		      }
		    ]
		  },
		  {
		    "featureType": "poi.park",
		    "elementType": "labels.text",
		    "stylers": [
		      {
		        "visibility": "off"
		      }
		    ]
		  },
		  {
		    "featureType": "road.local",
		    "elementType": "labels",
		    "stylers": [
		      {
		        "visibility": "off"
		      }
		    ]
		  }
		]
	});
}