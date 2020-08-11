jQuery.noConflict();
(function ($) {
    $(function () {
		// code jquery ready
      var dist = ($(window).width() > 767) ? 130 : 115;
      console.log(dist);

      $('.burger-menu').on("click", function(){
        $('body').toggleClass('pos-fixed');
        $(this).toggleClass('change');
        $('.header-menu').toggleClass('menu-show');
      })


      $('#contact-me').on("click", function(e){
        e.preventDefault();
        var page = $(this).attr('href'); 
        var speed = 1000; 
        $('html, body').animate({ scrollTop: $(page).offset().top - dist}, speed ); 
        return false;
      });

    });

    $(window).on('load resize orientationchange', function () {
      //code jquery onload, resize, orientationchange
      var dist = ($(window).width() > 767) ? 130 : 115;
      if($(window).width() > 767){
        $(".menu-pple > li").hover(function(){
          if($(this).children('.submenu').length > 0){
            $(this).children('.submenu').toggle();
          }
        });
        $('.menu-pple > li > a[href^="#"]').on("click", function(e){
          e.preventDefault();
          var page = $(this).attr('href'); 
          var speed = 1000; 
          //$('.burger-menu').trigger('click');
          $('html, body').animate({ scrollTop: $(page).offset().top - dist}, speed ); 
          return false;
        });
      }else{
        $('.menu-pple > li > a[href^="#"]').on("click", function(e){
          e.preventDefault();
          var page = $(this).attr('href'); 
          var speed = 1000; 
          $('.burger-menu').trigger('click');
          $('html, body').animate({ scrollTop: $(page).offset().top - dist}, speed ); 
          return false;
        });
      }
    });
})(jQuery);









