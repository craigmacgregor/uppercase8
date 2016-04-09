<?php
/**
 * Custom template tags for this theme.
 * @package Influential
 */

 
 /**
 * Prints HTML with meta information for the current post-date/time and author.
 */
if ( ! function_exists( 'influential_posted_on' ) ) :

function influential_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Posted %s', 'post date', 'influential' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);
	
	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'influential' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	if ( esc_attr(get_theme_mod( 'show_postdate', 1 )) ) :
		echo '<span class="posted-on">' . $posted_on . '</span>';
	endif;
	
	if ( esc_attr(get_theme_mod( 'show_postauthor', 1 )) ) :
		echo '<span class="byline">' . $byline . '</span>';
	endif;
	
	if ( esc_attr(get_theme_mod( 'show_commentslink', 1 )) ) :
		if ( ! is_singular() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'influential' ), get_the_title() ) );
			echo '</span>';
		}
	endif;		
}
endif;

if ( ! function_exists( 'influential_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function influential_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */		
		$categories_list = get_the_category_list( esc_html__( ', ', 'influential' ) );
		if ( esc_attr(get_theme_mod( 'show_categories', 1 )) ) :
		if ( $categories_list && influential_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'influential' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}
		endif;
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'influential' ) );
		if ( esc_attr(get_theme_mod( 'show_tags', 1 )) ) :
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'influential' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
		endif;
	}
	
	
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'influential' ), esc_html__( '1 Comment', 'influential' ), esc_html__( '% Comments', 'influential' ) );
		echo '</span>';
	}

	if ( esc_attr(get_theme_mod( 'show_edit', 0 )) ) :
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'influential' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
	endif;
}
endif;


/**
 * Multi-page navigation.
 */
if ( ! function_exists( 'influential_multipage_nav' ) ) :
function influential_multipage_nav() {
	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'influential' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'influential' ) . ' </span>%',
		'separator'   => ', ',
	) );
}
endif;

/**
 * Blog pagination when more than one page of post summaries.
 * Add classes to next_posts_link and previous_posts_link
 */
add_filter('next_posts_link_attributes', 'influential_posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'influential_posts_link_attributes_2');

function influential_posts_link_attributes_1() {
    return 'class="post-nav-older"';
}
function influential_posts_link_attributes_2() {
    return 'class="post-nav-newer"';
}

// Output the pagination navigation
if ( ! function_exists( 'influential_blog_pagination' ) ) :
function influential_blog_pagination() {	
		echo '<div class="pagination clearfix">';
		echo get_next_posts_link( __('Older Posts', 'influential'));		
		echo get_previous_posts_link( __('Newer Posts', 'influential'));
		echo '</div>';	
}
endif;


// Output the format gallery pagination 
if ( ! function_exists( 'influential_gallery_pagination' ) ) :
function influential_gallery_pagination() {	
		echo '<div class="gallery-pagination clearfix">';
		echo get_next_posts_link( __('Older Posts', 'influential'));		
		echo get_previous_posts_link( __('Newer Posts', 'influential'));
		echo '</div>';	
}
endif;


/**
 * Single Post previous or next navigation.
 */
if ( ! function_exists( 'influential_post_pagination' ) ) :

function influential_post_pagination() {
	the_post_navigation( array(	
		'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'influential' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Next Post:', 'influential' ) . '</span> ' .
			'<span class="post-title">%title</span>',
			
		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'influential' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Previous Post:', 'influential' ) . '</span> ' .
			'<span class="post-title">%title</span>',
	) );
}
endif;

/**
 * Shim for `the_archive_title()`.
 * Display the archive title based on the queried object.
 * Custom filter for changing the default archive title labels.
 */
 
if ( ! function_exists( 'influential_archive_title' ) ) :

function influential_archive_title( $before = '', $after = '' ) {
	if ( is_category() ) {
		$title = sprintf( ( '%s' ), single_cat_title( '', false ) );
	} elseif ( is_tag() ) {
		$title = sprintf( __( 'Posts Tagged with %s', 'influential' ), single_tag_title( '', false ) );
	} elseif ( is_author() ) {
		$title = sprintf( __( 'Posts by %s', 'influential' ), '<span class="vcard">' . get_the_author() . '</span>' );
	} elseif ( is_year() ) {
		$title = sprintf( __( 'Posts from: %s', 'influential' ), get_the_date( _x( 'Y', 'yearly archives date format', 'influential' ) ) );
	} elseif ( is_month() ) {
		$title = sprintf( __( 'Posts from %s', 'influential' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'influential' ) ) );
	} elseif ( is_day() ) {
		$title = sprintf( __( 'Posts from %s', 'influential' ), get_the_date( _x( 'F j, Y', 'daily archives date format', 'influential' ) ) );
	} else {
		$title = __( 'Archives', 'influential' );
	}
	/**
	 * Filter the archive title.
	 * @param string $title Archive title to be displayed.
	 */
	$title = apply_filters( 'get_the_archive_title', $title );

	if ( ! empty( $title ) ) {
		echo $before . $title . $after;  // WPCS: XSS OK.
	}
}
endif;


/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function influential_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'influential_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'influential_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so influential_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so influential_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in influential_categorized_blog.
 */
function influential_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'influential_categories' );
}
add_action( 'edit_category', 'influential_category_transient_flusher' );
add_action( 'save_post',     'influential_category_transient_flusher' );
