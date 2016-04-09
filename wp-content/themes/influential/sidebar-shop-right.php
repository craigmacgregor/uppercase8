<?php

/**
 * WooCommerce Sidebar  right
 * @package Influential
 * 
 */


if ( ! is_active_sidebar( 'shop-right' ) ) {
	return;
}
?>

<div id="shop-widget-wrapper">
  	<aside class="widget-area" role="complementary">		             
	    <?php dynamic_sidebar( 'shop-right' ); ?> 	
       </aside>  
  </div>

