jQuery(document).ready(function() {

	/* Upsells in customizer (Documentation, Reviews and Support links */
	if( !jQuery( ".senses-info" ).length ) {
		
		jQuery('#customize-theme-controls > ul').prepend('<li class="accordion-section senses-info">');
	
		jQuery('.senses-info').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="https://www.shapedpixels.com/setup-senses-lite/" class="button" target="_blank">{setup}</a>'.replace('{setup}', sensesliteCustomizerObject.setup));
		
		jQuery('.senses-info').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="https://wordpress.org/support/view/theme-reviews/senses-lite" class="button" target="_blank">{review}</a>'.replace('{review}', sensesliteCustomizerObject.review));
		
		jQuery('.senses-info').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="https://wordpress.org/support/theme/senses-lite" class="button" target="_blank">{support}</a>'.replace('{support}', sensesliteCustomizerObject.support));
		
		jQuery('.senses-info').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="https://www.shapedpixels.com/premium-wordpress-themes/senses/" class="button" target="_blank">{pro}</a>'.replace('{pro}',sensesliteCustomizerObject.pro));

		jQuery('#customize-theme-controls > ul').prepend('</li>');
	}
	
});