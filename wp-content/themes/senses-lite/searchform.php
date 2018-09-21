<?php
/**
 * The template for displaying search forms 
 * @package Senses Lite 
 */
?>



<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'senses-lite' ); ?></span>
	<div class="form-group">		
      		<input type="text" class="form-control" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php esc_html_e( 'Search', 'senses-lite' ) ; ?>">
   </div>           
   <div class="form-group">
        <input class="button-search" type="submit" value="<?php echo esc_html_e( 'Search',  'senses-lite' ); ?>">   
    </div>
</form>   

