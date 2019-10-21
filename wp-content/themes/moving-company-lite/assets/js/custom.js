jQuery(function($){
 "use strict";
   jQuery('.main-menu > ul').superfish({
     delay:       500,                            
     animation:   {opacity:'show',height:'show'},  
     speed:       'fast'                        
   });

});

function menu_openNav() {
	document.getElementById("mySidenav").style.width = "250px";
}
function menu_closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

(function( $ ) {

	/**** Hidden search box ***/
	jQuery('document').ready(function($){
		$('.search-box span i').click(function(){
	        $(".serach_outer").slideDown(1000);
	    });

	    $('.closepop i').click(function(){
	        $(".serach_outer").slideUp(1000);
	    });
	});

	$(document).ready(function () {

		$(window).scroll(function () {
		    if ($(this).scrollTop() > 100) {
		        $('.scrollup i').fadeIn();
		    } else {
		        $('.scrollup i').fadeOut();
		    }
		});

		$('.scrollup i').click(function () {
		    $("html, body").animate({
		        scrollTop: 0
		    }, 600);
		    return false;
		});

	});

})( jQuery );