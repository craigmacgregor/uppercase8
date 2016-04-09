<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Influential
 */
 
$blogstyle = esc_attr(get_theme_mod( 'blog_style', 'blog1' ));

get_header(); ?>

	
<?php if ( $blogstyle == 'blog5' || $blogstyle == 'blog6')  : ?>

<div id="primary" class="container-fluid content-area">
	<div class="row">
		<main id="main" class="site-main col-md-12 <?php echo $blogstyle ?>" role="main" itemprop="mainContentOfPage">

			<?php get_template_part( 'layouts/'. $blogstyle );	?>
				
		</main>
	</div>
	
</div>

<?php else : ?>

<div id="primary" class="container content-area">
	<div class="row">
		<main id="main" class="site-main col-md-12 <?php echo $blogstyle ?>" role="main" itemprop="mainContentOfPage">

			<?php get_template_part( 'layouts/'. $blogstyle );	?>
			
		</main>
	</div>
	
</div>

<?php endif; ?>

<?php get_footer(); ?>