<?php

/**
 * Call to Action Sidebar 
 *
 * @package Influential
 */


if ( ! is_active_sidebar( 'cta' ) ) {
	return;
}
?>
<div id="cta-sidebar" class="container">            
<div class="row">
    <aside class="widget-area col-md-12" role="complementary">
	
        <?php dynamic_sidebar( 'cta' ); ?> 	
    </aside>
	</div>
</div>

