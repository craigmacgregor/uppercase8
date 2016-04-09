<?php
/**
 * The template for displaying the main bbPress forum.
 * Learn More: http://codex.bbpress.org/theme-compatibility/getting-started-in-modifying-the-main-bbpress-template/
 * @package Influential
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    
<?php $forum_layout = get_theme_mod( 'forum_layout', 'forumfull' );                                
	switch ($forum_layout) {

	// bbPress full width layout
	case "forumfull" : 
		echo '<div class="container"><div class="row"><div class="col-md-12">'; 				
    break;		        

	// bbPress fluid full width layout
	case "forumfluidfull" : 
		echo '<div class="container-fluid"><div class="row"><div class="col-md-12">'; 				
    break;
	
	// bbPress left sidebar layout
	case "forumleft" :        
		echo '<div class="container"><div class="row"><div class="col-md-3">';   
			get_sidebar( 'influential' );
		echo '</div>'; 	
		echo '<div class="col-md-9">';  		
	break;

	// bbPress fluid left sidebar layout
	case "forumfluidleft" :        
		echo '<div class="container-fluid"><div class="row"><div class="col-md-3">';   
			get_sidebar( 'influential' );
		echo '</div>'; 	
		echo '<div class="col-md-9">';  		
	break;
	
	// bbPress right sidebar layout
	case "forumright" : 
		echo '<div class="container"><div class="row"><div class="col-md-9">';				
     break;
	 
	// bbPress fluid right sidebar layout
	case "fluidforumright" : 
		echo '<div class="container-fluid"><div class="row"><div class="col-md-9">';				
     break;

	}
?>
<?php 
// start the loop	
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile;
// end the loop
?>

<?php

$forum_layout = esc_attr(get_theme_mod( 'forum_layout', 'forumfull' ) );
	switch ($forum_layout) {
	
	// bbPress full width layout
	case "forumfull" : 
		echo '</div></div></div>'; 				
    break;		        

	// bbPress fluid full width layout
	case "forumfluidfull" : 
		echo '</div></div></div>'; 				
    break;	
	
	// bbPress left sidebar layout
	case "forumleft" : 
		echo '</div></div></div>';                    						 		
	break;
	
	// bbPress fluid left sidebar layout
	case "forumfluidleft" : 
		echo '</div></div></div>';                    						 		
	break;	
		
	// bbPress right sidebar layout
	case "forumright" : 
		echo '</div><div class="col-md-3">';   
			get_sidebar( 'influential' );
		echo '</div></div></div>';                    									
     break;
	 
	// bbPress fluid right sidebar layout
	case "fluidforumright" : 
		echo '</div><div class="col-md-3">';   
			get_sidebar( 'influential' );
		echo '</div></div></div>';                    									
     break;
	 
	} 
	
 ?> 

         
    </main>
</div>
    
<?php get_footer(); ?>