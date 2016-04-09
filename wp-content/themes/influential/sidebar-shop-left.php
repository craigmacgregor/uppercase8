<?php

/**
 * WooCommerce Sidebar  left
 * @package Influential
 * 
 */


if ( ! is_active_sidebar( 'shop-left' ) ) {
	return;
}
?>

<div id="shop-widget-wrapper">
  	<aside class="widget-area" role="complementary">		             
	    <?php dynamic_sidebar( 'shop-left' ); ?> 	
       </aside>  
  </div>

