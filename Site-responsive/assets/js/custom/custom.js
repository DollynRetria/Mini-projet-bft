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

      $(".menu-pple > li > a").hover(function(){
        //alert("ato");
        $(this).siblings('.submenu').toggle();
      });
    });

    $(window).on('load resize orientationchange', function () {
		//code jquery onload, resize, orientationchange
    });
})(jQuery);









