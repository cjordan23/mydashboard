$(document).ready(function(){
      $('img[alt="show-map"]').on('click',function(){
            $('div#map-container').show();
      });
      
      $('img[alt="hide-map"]').on('click',function(){
            $('div#map-container').hide();
      });
      $('#timeline-btn').on('click',function(){
            window.location = '/workflows';
      });
      $('#mypost-btn').on('click',function(){
            window.location = '/workflows/show';
      });
      $('#createpost-btn').on('click',function(){
            window.location = '/workflows/create';
      });

      $('.nav-item').on('click',function(){
            ('.nav-item').addClass('.active');
      });
      
});
