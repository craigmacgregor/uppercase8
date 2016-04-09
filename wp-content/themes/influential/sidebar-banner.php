<?php
/**
 * For displaying banners and sliders
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Morphology
 */

if ( ! is_active_sidebar( 'banner' ) ) {
	return;
}
?>

<div id="banner" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'banner' ); ?>
</div><!-- #secondary -->
