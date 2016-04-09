<?php
/*
 * Blog style 6 - Masonry style without sidebars
 * @package Influential
 */
 ?>
 

<?php
if ( have_posts() ) :
	if ( is_home() && ! is_front_page() ) : ?>
		<header>
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		</header>
			<?php elseif (is_archive()): ?>
				<header class="page-header">
					<?php
						influential_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header>		
	<?php	endif; ?>
	
	<div id="influential-masonry" class="" itemprop="mainContentOfPage"><div class="grid-sizer"></div>
	
	<?php 	/* Start the Loop */
	while ( have_posts() ) : the_post(); ?>	
		

	
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
		
		<?php // Check for featured image
		if ( has_post_thumbnail() ) {        
			echo '<a class="featured-image-link" href="' . esc_url( get_permalink() ) . '" aria-hidden="true">';
			the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title(), 'itemprop' => "image"));
			echo '</a>';
		}
		?>	
			<header class="entry-header">
				
				<?php	
					if( is_sticky() && is_home() )  :
						 $sticky = esc_attr__( 'Featured', 'influential' );
						echo '<span class="featured">' . $sticky . '</span>';				
					endif; ?>
			
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			
			
				<?php  if( esc_attr(get_theme_mod( 'show_summary_meta', 1 ) ) ) :  ?>
							<div class="entry-meta">
								<span class="line"><?php influential_posted_on(); ?></span>
							</div>
				<?php endif; ?>
				
			</header>

		<div class="entry-content">	
		
		<?php 
		if (has_post_format( 'aside' )) :
			the_content();
		else :
			echo '<p>' . the_excerpt() . '</p>' ;			
		endif; 
		?>
		
		<?php	influential_multipage_nav();	?>

		</div>
	</article>	





	
<?php 	endwhile;
echo '</div>';
	the_posts_navigation();
else :
	get_template_part( 'template-parts/content', 'none' );
endif; ?>

