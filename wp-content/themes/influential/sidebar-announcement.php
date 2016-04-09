<?php

/**
 * Announcement Sidebar 
 * @package Influential
 * 
 */

if ( ! is_active_sidebar( 'announcement' ) ) {
	return;
}
?>


  	<aside id="announcement" class="widget-area" role="complementary">		             
	    <?php dynamic_sidebar( 'announcement' ); ?> 	
    </aside>  


