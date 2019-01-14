$(document).ready(function(){
   $('a#nav-hour-tab').click(function() {
      $('script#significant-script').remove();
      
   });
});

$(document).ready(function(){
   $('a#nav-refresh-tab').click(function(){
      $('#map-hour-container').load(location.href + ' #map-hour-container');
   });
});