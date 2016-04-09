<?php
/**
 * Sidebar
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/*
 * Theme Custom code
 */
$shop_layout = esc_attr(get_theme_mod( 'shop_layout', 'fullwidth' ) );
	switch ($shop_layout) {

	case "fullwidth" : 
	break;		  

	case "fluidfullwidth" : 
	break;	
	
	case "leftsidebar" : 
		get_sidebar( 'shop-left' );
	break;
	
	case "fluidleftsidebar" : 
		get_sidebar( 'shop-left' );
	break;	

	case "rightsidebar" : 
		get_sidebar( 'shop-right' );
	break;

	case "fluidrightsidebar" : 
		get_sidebar( 'shop-right' );
	break;
	
	}
	
	
$product_layout = esc_attr(get_theme_mod( 'product_layout', 'fullwidth' ) );
	switch ($product_layout) {
	
	// Blog with large featured image and a right sidebar
	case "fullwidth" : 
	break;		        
	
	// Blog with large featured image and a right sidebar
	case "leftsidebar" : 
		get_sidebar( 'shop-left' );
	break;

	case "rightsidebar" : 
		get_sidebar( 'shop-right' );
	break;
	
	}	