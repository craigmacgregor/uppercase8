<?php

/**
 * Header sidebar in the top header area 
 * @package Infuential
 * 
 */


if (   ! is_active_sidebar( 'header'  )	)

		return;
	// If we get this far, we have widgets. Let do this.
?>


    <aside id="sidebar-header" class="widget-area">

         <?php dynamic_sidebar( 'header' ); ?>

    </aside>
