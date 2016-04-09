<?php
/**
 * Template Name: Search
 * @package Influential
*/

get_header(); ?>


    
<div id="primary" class="container content-area">
	<div class="row">
		<div class="col-md-12">
			<main id="main" class="site-main" role="main">                
    
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
				
				// Include the page content template.
				get_template_part( 'template-parts/content', 'page' );
				
				get_search_form(); 
				
				// End the loop.
				endwhile;
				?>       
  
			</main>
		</div>
	</div>
</div>


    
<?php get_footer(); ?>    