<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Influential
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if( esc_attr(get_theme_mod( 'show_single_featured', 1 ) ) ) :          
			the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title(), 'itemprop' => "image"));
         endif; ?>
		 
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>

					<?php  if( esc_attr(get_theme_mod( 'show_summary_meta', 1 ) ) ) :  ?>						
							<div class="entry-meta">
								<span class="line"><?php influential_posted_on(); ?></span>
							</div>
					<?php endif; ?>
					
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="text">
		<?php the_content(); ?>
		<?php	influential_multipage_nav();	?>
	</div><!-- .entry-content -->


			
	<?php if( esc_attr(get_theme_mod( 'show_single_footer', 1 ) ) ) : ?>
		<footer class="entry-footer" itemscope itemtype="http://schema.org/WPFooter">
			
			<?php 
			// get the post footer info
			influential_entry_footer(); 
			?>
		</footer>	
	<?php endif; ?>
	
		<?php	// show the author bio
			if( esc_attr(get_theme_mod( 'show_authorbio', 1 ) ) ) {
				if ( is_single() && get_the_author_meta( 'description' ) ) :
					get_template_part( 'author-bio' );
				endif;
			}	
			?>	
			
		<?php	// get the post next and previous post navigation
			if( esc_attr(get_theme_mod( 'show_postnav', 1 ) ) ) :			
				influential_post_pagination();	
			endif; 
			?>
	
</article><!-- #post-## -->
