<?php
/**
 * The template for displaying search forms 
 * @package Influential
 */
?>


<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="screen-reader-text"><?php _x( 'Search for:', 'Screen reader text', 'influential' ); ?></span>
		
      	<input type="text" class="form-control" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php _x( 'Enter search words', 'Search field placeholder','influential' ) ; ?>">
        <input class="button-search" type="submit" value="<?php echo _x( 'Search', 'submit button', 'influential' ); ?>">   

</form> 
