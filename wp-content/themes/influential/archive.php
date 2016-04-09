<?php
/**
 * The template for displaying archive pages.
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