<?php
/**
 * Template Name: Fluid Left &amp; Right Column Template
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package Influential
*/

get_header(); ?>

<div id="primary" class="container-fluid content-area">

	<?php get_sidebar( 'top' ); ?>
	<?php get_sidebar( 'content-top' ); ?>
	
	<div class="row">
		<main id="main" class="site-main col-md-12" role="main">
			<div class="row">
	
				<div class="col-lg-6 col-lg-push-3">
				
					<?php get_sidebar( 'inset-top' ); ?>
					
					<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;
					?>
					<?php endwhile; // End of the loop. ?>
					
					<?php get_sidebar( 'inset-bottom' ); ?>
					
				</div>
				
				<div class="col-lg-3 col-lg-pull-6">
					<?php get_sidebar( 'left' ); ?>
				</div>
				
				<div class="col-lg-3">
					<?php get_sidebar( 'right' ); ?>
				</div>	

			</div>				
		</main>
	</div>
	
	<?php get_sidebar( 'content-bottom' ); ?>
		
</div>

<?php get_footer(); ?>