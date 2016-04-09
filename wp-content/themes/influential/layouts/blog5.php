<?php
/*
 * Blog style 5 - Grid style without sidebars
 * @package Influential
 */
 ?>
 

<div class="row">

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
	
<ul id="grid-list" class="clearfix">	
	<?php 	/* Start the Loop */
	while ( have_posts() ) : the_post(); ?>	
	
<li class="grid-article col-sm-12 col-md-6 col-lg-4 col-xl-3">	

		<?php // Check for featured image
		if ( has_post_thumbnail() ) {        
			echo '<a class="featured-image-link" href="' . esc_url( get_permalink() ) . '" aria-hidden="true">';
			the_post_thumbnail( 'grid-thumbnail', array( 'alt' => get_the_title(), 'itemprop' => "image"));
			echo '</a>';
		}
		?>	
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	
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
		
		<?php // lets use an excerpt for blog summaries
			echo '<p>' . the_excerpt() . '</p>' ;			
		?>
			<?php	influential_multipage_nav();	?>
		</div>
	</article>	


</li>


	
<?php 	endwhile;
echo '</ul>';
	the_posts_navigation();
else :
	get_template_part( 'template-parts/content', 'none' );
endif; ?>

</div>