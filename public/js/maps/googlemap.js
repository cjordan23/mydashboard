var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map-day-container'), {
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
    }
  });

  //Load the GeoJSOn so i can try to pull the data to show it in the DOM element
  map.data.loadGeoJson('https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojson');
  
  // Set the DOM Element with id showData to be the view container
  var informationBox = document.getElementById('showData');
  var infowindow = new google.maps.InfoWindow({
    content: informationBox
  });

  // Set the corsair as it hover to the location/circle to show the location information to the showData container
  map.data.addListener('mouseover', function(event){
    document.getElementById('showLocation').textContent = 
      event.feature.getProperty('place');
  });
  map.data.addListener('mouseover', function(event){
    document.getElementById('showMag').textContent = 
      event.feature.getProperty('mag');
  });
  map.data.addListener('mouseover', function (event) {
    document.getElementById('showMagType').textContent =
      event.feature.getProperty('magType');
  });

  
 // map.data.loadGeoJson('https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojson');
    // // //Set Variable InfoWindow
    // var infoWindow = new google.maps.InfoWindow();

    // // Set mouseover event for each feature.
    // map.data.addListener('click', function(event) {
    //     var infoHtml = event.feature.getProperty('mag');
    //     infoWindow.setContent("<div id='showData' class='card-body'>" +  + "</div>");
    //     infoWindow.open(map,data);
    // });

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

// function showData(event){
//     map.data.loadGeoJson('https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojson');

//     var $showdataelement = $('#showData');
//     infoWindow.setContent($showdataelement[0]);
//     infoWindow.open(map);
//     infoWindow.$showdataelement = $showdataelement;
//     return infoWindow;
// }
// infoWindow.$showdataelement.live('click','a', function(){
//     alert('You´re not going anywhere!');
//     return false;
//   }); 



// function mapMarkData(){
//   $.getJSON('https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojson', function(data){
//     $.each(data.getCircle), function(i, obj){
//       var latLng = new google.maps.LatLng(obj.lat, obj.lng);
//       var content = obj.id + ':' + obj.lat + ',' + obj.lng;

//       mapPoint(latLng, content);
//     };
//   });
// }

function eqfeed_callback(response) {
  map.data.addGeoJson(response);
}
