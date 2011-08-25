function initialize() {
	//set the maps latitude and longitute
    var lat_lng = new google.maps.LatLng(33.784645, -84.398518);

	/* create a Map options object to contain map initialization variables
	** set params for the map object
	** zoom can be between 1-18
	** center is required and must be a valid latitude/longitute
	** mapTypeId: valid identifiers include: ROADMAP, HYBRID, SATELLITE, TERRAIN
	** For more info see: http://code.google.com/apis/maps/documentation/javascript/reference.html
	*/
    var myOptions = {
      	zoom: 17,
      	center: lat_lng,
      	mapTypeId: google.maps.MapTypeId.ROADMAP
    };
  
    var map = new google.maps.Map(
		document.getElementById("map_canvas"),
      	myOptions
	);

	var infowindow = new google.maps.InfoWindow( { 
		content: 'Some info about Grace Midtown',
	    size: new google.maps.Size(50,50),
	    position: lat_lng
	});
	
	var marker = new google.maps.Marker({
    	position: lat_lng, 
    	map: map,
      	title:"Grace Midtown Church"
  	});

	var click_event = false;
	
	google.maps.event.addListener(marker, 'click', function() {
		if (!click_event) {
			infowindow.open(map);
			click_event = true;
		}
		else {
			infowindow.close();
			click_event = false;
		}

	});	
  }
