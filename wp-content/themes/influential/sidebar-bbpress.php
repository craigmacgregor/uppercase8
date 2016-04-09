<?php
/**
 * sidebar column for bbpress. 
 * @package Influential
 * 
 */


if (   ! is_active_sidebar( 'influential'  )
)
	return;

?>
	
	<aside id="bbpress-sidebar" class="widget-area">
		<?php dynamic_sidebar( 'influential' ); ?>	
	</aside>
		

