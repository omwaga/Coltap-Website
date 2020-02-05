/*
Author       :Syed Ekram       
Theme Name:  :Bahubali - Responsive Business Template
Version      :1.0
*/

(function($) {
	"use strict";
	
$(document).ready(function(){

		/*preloader*/
		$(window).load(function() { 
			$('.status').fadeOut();
			$('.preloader').delay(350).fadeOut('slow'); 
		}); 
		/*End preloader*/

		/*Menu js*/
			$('a[href*=#]').on("click", function(e){
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top - 50
				}, 1500);
				e.preventDefault();
			});

			$(window).scroll(function() {
			  if ($(this).scrollTop() > 100) {
				$('.menu-top').addClass('menu-shrink');
			  } else {
				$('.menu-top').removeClass('menu-shrink');
			  }
			});
			
			$(document).on('click','.navbar-collapse.in',function(e) {
			if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
				$(this).collapse('hide');
			}
			});
			
		/*End Menu js*/
	
	    /*wow animation*/
	    	new WOW().init();	
	   /*End wow animation*/	
		
		/*testimonial carousel*/
		$('.carousel').carousel({
			interval:5000,
			pause:"false",
		});
		/*testimonial carousel*/
		
		
		/*Contact Map*/
		var contact = {"lat":"40.7127837", "lon":"-74.00594130000002"}; //Change a map coordinate here!

		try {
			$('.map').gmap3({
				action: 'addMarker',
				latLng: [contact.lat, contact.lon],
				map:{
					center: [contact.lat, contact.lon],
					zoom: 5
					},
				},
				{action: 'setOptions', args:[{scrollwheel:false}]}
			);
		} catch(err) {

		}
	   /*End Contact Map*/
  
  
  
		/*  Textrotator */
		if ($('.rotate').length > 0) {
			$(".rotate").textrotator({
				animation: "dissolve", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
				separator: "|", //  You can define a new separator (|, &, * etc.) by yourself using this field.
				speed: 3000 // How many milliseconds until the next word show.
			});
		}
		/* End Textrotator */
});

})(jQuery);

