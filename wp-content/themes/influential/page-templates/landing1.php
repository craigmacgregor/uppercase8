<?php
/**
 * Template Name: Landing Page 1
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package Influential
 */

get_header();
 
?>

<div id="primary" class="content-area">

<?php get_sidebar( 'landing-top' ); ?>

		<?php 
		if( esc_attr(get_theme_mod( 'landing_content_fluid', 0 ) ) ) : 
				echo '<div class="container-fluid">';
			else : 
				echo '<div class="container">';
		endif;
		?>	
	<div class="row">
		<main id="main" class="site-main" role="main">		
			<div class="col-md-12" itemprop="mainContentOfPage">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; ?>
			</div>					
		</main>
	</div>
</div>
	
<?php get_sidebar( 'landing-bottom' ); ?>
	
</div>

<?php get_footer(); ?>