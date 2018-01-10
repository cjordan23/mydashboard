function initMaps(){
    var defaultView = { lat: 0.7893, lng: 113.9213 };
    var mapRegis = new google.maps.Map(document.getElementById('regis-map'),{
        center: defaultView,
        zoom:4    
    })
}
