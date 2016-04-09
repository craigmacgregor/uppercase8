<?php

/**
 * Inset bottom sidebar 
 * @package Influential
 * 
 */

if ( ! is_active_sidebar( 'inset-bottom' ) ) {
	return;
}
?>

<div class="row">
	<div class="col-md-12">
             
            <aside id="inset-bottom-group" class="widget-area" role="complementary">		             
            	<?php dynamic_sidebar( 'inset-bottom' ); ?> 	
            </aside> 

    </div>
</div>