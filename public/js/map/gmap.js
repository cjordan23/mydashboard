function initMap(){
    var defaultView = { lat: 0.7893, lng: 113.9213 };
    var map = new google.maps.Map(document.getElementById('map-container'),{
        center: defaultView,
        zoom:4    
    });


    var mapMarker = new google.maps.Marker({
        position: latlng,
        map:map,
        draggable:true
    });

    google.maps.event.addListener(map, 'click', function(event) {
        mapMarker = new google.maps.Marker({
          position: event.latLng,
          map: map
        });
    
               
        google.maps.event.addListener(mapMarker, 'click', function() {
          infowindow.open(map, mapMarker);
        });
    });

    google.maps.event.addListener(marker,'dragend',function(event){
        document.getElementById("latPlaceholder").value = this.getPosition().lat();
        document.getElementById("longPlaceholder").value = this.getPosition().lng();
    });
    
    
}
 