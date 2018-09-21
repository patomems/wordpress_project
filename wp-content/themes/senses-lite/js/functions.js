/**
 * Various functions for this theme
 * @package Senses
*/	


(function($) {

   'use strict';	
 
 // Lets make our mobile menu work
   
   		var nav = $( '#site-navigation' ), button, menu;
		if ( ! nav ) {
			return;
		}

		button = nav.find( '.menu-toggle' );
		if ( ! button ) {
			return;
		}

		// Hide button if menu is missing or empty.
		menu = nav.find( '.nav-menu' );
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		$( '.menu-toggle' ).on( 'click.opportune', function() {
			nav.toggleClass( 'toggled-on' );
		} );	
		
		
/* Go back to the top of the page
 * Special thanks to the Sydney WordPress theme for this awesome function.
 */
		var backTop = function() {
		$(window).scroll(function() {
			if ( $(this).scrollTop() > 800 ) {
				$('.back-to-top').addClass('show');
			} else {
				$('.back-to-top').removeClass('show');
			}
		}); 

		$('.back-to-top').on('click', function() {
			$("html, body").animate({ scrollTop: 0 }, 1000);
			return false;
		});
	};

/* shrink the header on scroll
 * Special thanks to the	Sydney WordPress theme for this awesome function.
 */
		var headerFixed = function() {
			var headerFix = $('.site-header').offset().top;
			$(window).on('load scroll', function() {
				var y = $(this).scrollTop();
				if ( y >= headerFix) {
					$('.site-header').addClass('fixed');
				} else {
					$('.site-header').removeClass('fixed');
				}
				if ( y >= 107 ) {
					$('.site-header').addClass('float-header');
				} else {
					$('.site-header').removeClass('float-header');
				}
			});
	};	



		
// Dom Ready
	$(function() {
		headerFixed();
		backTop();	
		
	   	});
		
})(jQuery);