<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Influential
 */

?>

	</div><!-- #content -->

	<?php get_sidebar( 'showcase-bottom' ); ?>
	
	<div id="bottom-wrapper">
	
	<?php
		if (is_page_template( 'page-templates/template-full-width-fluid.php' ) || is_page_template( 'page-templates/template-left-fluid.php' ) || is_page_template( 'page-templates/template-right-fluid.php' )  || is_page_template( 'page-templates/template-left-right-fluid.php' )) :
		echo '<div class="container-fluid">';
			get_sidebar( 'bottom' );
		echo '</div>';
		else :
		echo '<div class="container">';
			get_sidebar( 'bottom' );
		echo '</div>';
		endif; 
	?>

	</div>
	
	<?php // Back to top icon ?>
	<a class="back-to-top"><span class="fa fa-angle-up"></span></a>
	
	<footer id="footer-wrapper" class="site-footer" role="contentinfo">
	
		<?php get_sidebar( 'footer' ); ?>
		
 			<nav id="footer-nav">
				<?php wp_nav_menu( array( 
						'theme_location' => 'footer', 
						'fallback_cb' => false, 
						'depth' => 1,
						'container' => false, 
						'menu_id' => 'footer-menu', 
					) ); 
				?>
			</nav>
			
		<div class="site-info">        
		<?php esc_html_e('Copyright &copy;', 'influential'); ?> 
        <?php echo date('Y'); ?> <?php echo esc_html(get_theme_mod( 'copyright', 'Your Name' )); ?>. <?php esc_html_e('All rights reserved.', 'influential'); ?>			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
