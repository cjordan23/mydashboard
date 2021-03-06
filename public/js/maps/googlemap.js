var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map-container'), {
      zoom: 2,
      center: {lat: -33.865427, lng: 151.196123},
      mapTypeId: 'terrain'
    });

    // Create a <script> tag and set the USGS URL as the source.
    var script = document.createElement('script');

    // This example uses a local copy of the GeoJSON stored at
    // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
    // https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js
    //https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojson
    script.src = 'https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojsonp';
    document.getElementsByTagName('head')[0].appendChild(script);

    map.data.setStyle(function(feature) {
      var magnitude = feature.getProperty('mag');
      return {
        icon: getCircle(magnitude)
      };

      var infoWindow = new google.maps.InfoWindow({
        
      });

      map.data.addListener('click',function(event){
       
      });
    });

    
}

function getCircle(magnitude) {
  return {
    path: google.maps.SymbolPath.CIRCLE,
    fillColor: 'red',
    fillOpacity: .2,
    scale: Math.pow(2, magnitude) / 2,
    strokeColor: 'white',
    strokeWeight: .5
  };
}

function eqfeed_callback(response) {
  map.data.addGeoJson(response);
}

