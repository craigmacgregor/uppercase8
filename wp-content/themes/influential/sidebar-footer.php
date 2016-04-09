<?php

/**
 * Footer sidebar at the bottom of the page 
 * @package Morphology
 * 
 */

if (   ! is_active_sidebar( 'footer'  )	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

<div class="container">
	<div class="row">
		<aside id="footer-group" class="col-md-12 widget-area">
			 <?php dynamic_sidebar( 'footer' ); ?>
		</aside>
	</div>
</div>
