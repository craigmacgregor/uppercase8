<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Influential
 */

get_header(); ?>

<div id="primary" class="container content-area">

	<?php get_sidebar( 'top' ); ?>
	<?php get_sidebar( 'content-top' ); ?>
	
	<div class="row">
		<div class="col-md-12">
			<main id="main" class="site-main" role="main">

			<?php get_sidebar( 'inset-top' ); ?>
			
				<?php
				while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
				comments_template();
				endif;

				endwhile; // End of the loop.
				?>
				
			<?php get_sidebar( 'inset-bottom' ); ?>

			</main><!-- #main -->
		</div>
	</div>
	
	<?php get_sidebar( 'content-bottom' ); ?>
	
</div><!-- #primary -->

<?php
get_footer();
