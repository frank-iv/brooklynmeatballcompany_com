
;(function($) {
  
  var BMC = {};

  BMC.init = function() {
    BMC.maptoggle();
  };

  ///////////////////////////////////////////////////
  
  BMC['maptoggle'] = function() {
    $('div.home iframe').addClass('hidden').hide();
    $('div.home header').prepend('<a href="#showmap" class="showmap" title="Yes, the idea here is that business cards should bear graphene film covers with Google Maps overlays. How sweet would that be?">Show on map</a>');
    $('div.home header a.showmap').on('click', function(e) {
      e.preventDefault();
      $('div.home iframe').prop('class', 
        (!$('div.home iframe').hasClass('hidden')) ? 
          (function() { 
            $('div.home')
              .animate({
                'height': '223px'
              }, 300);

            $('div.home iframe')
              .animate({
                'height': '223px'
              }, 300)
              .fadeOut(); 

            $('div.home .page, div.home header h2').fadeIn();

            $('div.home a.showmap').text('Show on map');

            return 'hidden'; 
          })() : 
          (function() { 
            $('div.home')
              .animate({
                'height': '500px'
              }, 300);
            $('div.home iframe')
              .animate({
                'height': '500px'
              }, 300)
              .fadeIn(); 

            $('div.home .page, div.home header h2').fadeOut();

            $('div.home a.showmap').text('Hide map');

            return ''; 
          })()
        )
    });
  };

  ///////////////////////////////////////////////////

  BMC.init();

})(jQuery);
