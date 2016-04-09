<?php
/**
 * The template for displaying Author bios
 * @package Influential
*/
?>

	<div id="author-info-box" itemscope="" itemtype="http://schema.org/Person">

            <div id="author-avatar" itemprop="image"><?php $author_bio_avatar_size = apply_filters( 'influential_author_bio_avatar_size', 60 );
		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );	?></div>
            <div id="author-info">
                <h5 id="author-name" itemprop="name"><?php esc_html_e( 'Published by', 'influential' ); ?> <span id="author-name"> <?php echo esc_html(get_the_author() ); ?></span></h5>
				
                <div id="author-bio"><?php the_author_meta( 'description' ); ?></div>
				<div id="author-website"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author" itemprop="url"><?php printf( esc_html__( 'View articles written by %s', 'influential' ), esc_html(get_the_author() ) ); ?></a></div>
             </div>
 
    </div>	
	