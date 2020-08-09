jQuery.noConflict();
(function ($) {
    $(function () {
		// code jquery ready
      //   $('.slider-wrapper').slick({
      //     dots : false,
      //     arrows : false,
      //     slidesToShow: 1,
      //     autoplay:true,
      //     variableWidth: true ,
      //     slidesToScroll: 1,
      //     speed:500,
      //     centerPadding: '15px',
      // });
      //alert("ato");

      $(".menu-pple > li").hover(function(){
        if($(this).children('.submenu').length > 0){
          $(this).children('.submenu').toggle();
        }
        //alert("ato");
      });

      $('.burger-menu').on("click", function(){
        $('body').toggleClass('pos-fixed');
        $(this).toggleClass('change');
        $('.header-menu').toggleClass('menu-show');
      })
    });

    $(window).on('load resize orientationchange', function () {
		//code jquery onload, resize, orientationchange
    });
})(jQuery);









