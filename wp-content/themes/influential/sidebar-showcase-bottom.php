<?php
/**
 * Showcase Bottom sidebar 
 * @package Influential
 * 
 */

if (   ! is_active_sidebar( 'showcase-bottom'  )	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

<div id="showcase-bottom-wrapper">
		<aside class="widget-area">
			 <?php dynamic_sidebar( 'showcase-bottom' ); ?>
		</aside>
</div>