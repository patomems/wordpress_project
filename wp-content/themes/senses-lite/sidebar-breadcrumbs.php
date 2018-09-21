<?php
/**
 * Breadcrumbs Sidebar 
 * @package  Senses Lite 
 */


if ( ! is_active_sidebar( 'breadcrumbs' ) ) {
	return;
}
?>
<div class="container">
  <div class="row">
    
    <div id="sidebar-breadcrumbs" class="col-lg-12">            
      <aside class="widget-area">		             
        <?php dynamic_sidebar( 'breadcrumbs' ); ?> 	
        </aside>
    </div>
    
  </div>
</div>
