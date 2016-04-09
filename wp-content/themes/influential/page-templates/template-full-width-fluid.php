<?php
/**
 * Template Name: Fluid Full Width Template
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package Influential
 */

get_header(); ?>

<div id="primary" class="container-fluid content-area">

	<?php get_sidebar( 'top' ); ?>
	<?php get_sidebar( 'content-top' ); ?>
	
	<div class="row">
		<main id="main" class="site-main col-md-12" role="main">

			<?php get_sidebar( 'inset-top' ); ?>
		
			<div class="col-md-12" itemprop="mainContentOfPage">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
				comments_template();
				endif;
				?>
				<?php endwhile; // End of the loop. ?>
			</div>
			
			<?php get_sidebar( 'inset-bottom' ); ?>
			
		</main>
	</div>
	
	<?php get_sidebar( 'content-bottom' ); ?>
	
</div>

<?php get_footer(); ?>