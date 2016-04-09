<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Influential
 */

$singlestyle = esc_attr(get_theme_mod( 'single_style', 'single1' ));
get_header(); ?>

<div id="primary" class="container content-area">
	<div class="row">
		<main id="main" class="site-main col-md-12  <?php echo $singlestyle ?>" role="main" itemprop="mainContentOfPage">

					<?php
						$single_style = esc_attr(get_theme_mod( 'single_style', 'single1' ) );                          
						switch ($single_style) {

							// Single with a right sidebar column
							case "single1" : 
								echo '<div class="row"><div class="col-md-8">';   
								while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content', 'single' );									
										if ( comments_open() || get_comments_number() ) {
										comments_template();
										}
									endwhile;
								echo '</div><div class="col-md-4">';
									get_sidebar( 'right' );
								echo '</div></div>';					
							break;

							// Single with leftt sidebar column
							case "single2" : 
								echo '<div class="row"><div class="col-md-8 col-md-push-4">';   
								while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content', 'single' );
										if ( comments_open() || get_comments_number() ) {
										comments_template();
										}
									endwhile;
								echo '</div><div class="col-md-4 col-md-pull-8">';
									get_sidebar( 'left' );
								echo '</div></div>';					
							break;
							
							// Single without a left or right sidebar
							case "single3" : 
								while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content', 'single' );
										if ( comments_open() || get_comments_number() ) {
										comments_template();
										}
									endwhile;
							break;
							
						}	
					?>		

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
