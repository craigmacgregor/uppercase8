<?php
/**
 * Template Name: WooCommerce Right Column
 * @package Influential
*/


get_header(); ?>

<div id="primary" class="container content-area">	
	<div class="row">
		<main id="main" class="site-main col-md-12" role="main">
			<div class="row">
			
				<div class="col-md-8" itemprop="mainContentOfPage">

						<?php
                        // Start the loop.
                        while ( have_posts() ) : the_post();
                        
                        // Include the page content template.
                        get_template_part( 'template-parts/content', 'page' );
                        
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        
                        // End the loop.
                        endwhile;
                        ?>   

				</div>

				<div class="col-md-4">        
					<?php get_sidebar( 'shop-right' ); ?>       
				</div>
			
			</div>
		</main>
	</div>
	
</div>


<?php get_footer(); ?>
