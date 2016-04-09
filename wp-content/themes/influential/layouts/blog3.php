<?php
/*
 * Blog style 3 - Top featured image without sidebars
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
	<?php 	/* Start the Loop */
	while ( have_posts() ) : the_post(); ?>			
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
				
			<?php	
				if( is_sticky() && is_home() )  :
					 $sticky = esc_attr__( 'Featured', 'influential' );
					 the_title( '<h2 class="entry-title"><span class="featured">' . $sticky . '</span>' . '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );				
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );	
				endif; ?>
		
			<?php  if( esc_attr(get_theme_mod( 'show_summary_meta', 1 ) ) ) :  ?>
							<div class="entry-meta">
								<span class="line"><?php influential_posted_on(); ?></span>
							</div>
			<?php endif; ?>
				
		</header>

		<?php // Check for featured image
		if ( has_post_thumbnail() ) {        
			echo '<a class="featured-image-link" href="' . esc_url( get_permalink() ) . '" aria-hidden="true">';
			the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title(), 'itemprop' => "image"));
			echo '</a>';
		}
		?>
		
		<div class="entry-content">
		
		<?php // lets use an excerpt for blog summaries
			echo '<p>' . the_excerpt() . '</p>' ;			
		?>
			<?php	influential_multipage_nav();	?>
		</div>
	</article>	
			
<?php 	endwhile;
	the_posts_navigation();
else :
	get_template_part( 'template-parts/content', 'none' );
endif; ?>
