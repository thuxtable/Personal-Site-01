    function initialize() {
		
		// Style array
		var styles = [
		  {
			"featureType": "landscape",
			"stylers": [
			  { "gamma": 0.65 },
			  { "lightness": -50 },
			  { "hue": "#0033ff" },
			  { "saturation": -92 }
			]
		  },{
			"featureType": "road.highway",
			"stylers": [
			  { "lightness": -39 },
			  { "visibility": "on" }
			]
		  },{
			"featureType": "road.highway",
			"elementType": "geometry.fill",
			"stylers": [
			  { "visibility": "simplified" }
			]
		  },{
			"featureType": "poi.medical",
			"stylers": [
			  { "visibility": "simplified" }
			]
		  },{
			"featureType": "poi.school",
			"stylers": [
			  { "lightness": 37}
			]
		  },{
			"featureType": "poi.school",
			"elementType": "labels.text.fill",
			"stylers": [
			  { "lightness": -63 }
			]
		  },{
			"featureType": "poi",
			"stylers": [
			  { "saturation": -100 }
			]
		  },{
			"featureType": "road",
			"stylers": [
			  { "saturation": -100 }
			]
		 },{
			"featureType": "road.arterial",
			"elementType": "geometry",
			"stylers": [
			  { "lightness": -68 }
			]
		  },{
			"featureType": "water",
			"stylers": [
			  { "saturation": -60 }
			]
		  }
		];

		// Create new StyledMapType object
		var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

        var mapOptions = {
			center: new google.maps.LatLng(34.070623, -118.446253),
			zoom: 14,
			scrollwheel: false,
			mapTypeControl: false,
			mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
			}
        };
		
		// Create map object
        var map = new google.maps.Map(document.getElementById("uclamap"),
            mapOptions);
			
		map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');
	}
		
    google.maps.event.addDomListener(window, 'load', initialize);