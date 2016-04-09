<?php
/**
 * Custom functions that act independently of the theme templates.
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Influential
 */


/**
 * Making adjustments to use WooCommerce.
 * We need to first remove some stuff and then add 
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'influential_woo_start', 10);
add_action('woocommerce_after_main_content', 'influential_woo_end', 10);

function influential_woo_start() {
	echo '<main id="woo-main">';
}

function influential_woo_end() {
	echo '</woo-main>';
}

// Now lets add WooCommerce support to this theme
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
		add_theme_support( 'woocommerce' );
}

/*---Move Product meta*/
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_after_single_product_summary',
'woocommerce_template_single_meta', 12 );

/*--- remove shop stars*/
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

/* remove add to cart from shop front */
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );


/**
 * WooCommerce Search widget
 * Let's customize our search widget
*/
add_filter( 'get_product_search_form' , 'woo_custom_product_searchform' );
function woo_custom_product_searchform( $form ) {
	
	$form = '<form role="search" method="get" id="searchform" class="search-form" action="' . esc_url( home_url( '/'  ) ) . '">
		<div class="form-group">
			<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . esc_html__( 'My Search form', 'influential' ) . '" class="form-control" />
		</div>	
        <div class="form-group">
            <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search', 'influential' ) .'" class="button-search" /></span>
			<input type="hidden" name="post_type" value="product" />
		</div>
	</form>';
	
	return $form;
	
}


 
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function influential_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}
	
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'influential_body_classes' );


/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 * @since Influential 1.0
 * Special thanks to the TwentySixteen theme
 */
function influential_widget_tag_cloud_args( $args ) {
	$args['largest'] = 0.813;
	$args['smallest'] = 0.813;
	$args['unit'] = 'rem';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'influential_widget_tag_cloud_args' );


/**
 * Move the More Link outside from the contents last summary paragraph tag.
 * @since Influential 1.0
 */
if ( ! function_exists( 'influential_move_more_link' ) ) :
	function influential_move_more_link($link) {
			$link = '<p class="more-link-wrapper">'.$link.'</p>';
			return $link;
		}
	add_filter('the_content_more_link', 'influential_move_more_link');
endif;

/**
 * Filter the except length to the users option setting.
 * @since Influential 1.0
 */
function influential_custom_excerpt_length( $length ) {
	$excerpt_length = esc_attr(get_theme_mod( 'excerpt_length', '50' ));
    return $excerpt_length;
}
add_filter( 'excerpt_length', 'influential_custom_excerpt_length', 999 );

/**
 * Filter the "more link" excerpt string link to the post.
 * Add a more link to the excerpt.
 * @since Influential 1.0
 */
function influential_excerpt_more( $more ) {
    return sprintf( '&hellip;<p class="more-link-wrapper"><a class="more-link" href="%1$s">%2$s</a></p>',
        get_permalink( get_the_ID() ),
        esc_html__( 'Read More', 'influential' )
    );
}
add_filter( 'excerpt_more', 'influential_excerpt_more' );

/**
 * Prevent page scroll after clicking read more to load the full post.
 * @since Influential 1.0 
 */
if ( ! function_exists( 'influential_remove_more_link_scroll' ) ) : 
	function influential_remove_more_link_scroll( $link ) {
		$link = preg_replace( '|#more-[0-9]+|', '', $link );
		return $link;
		}
	add_filter( 'the_content_more_link', 'influential_remove_more_link_scroll' );
endif;
	
/**
 * Custom comments style
 * @since Influential 1.0
 */

if (!function_exists('influential_comment')) {
function influential_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>

<li>                        
	<div class="comment-wrapper">
		<?php echo get_avatar($comment, 80); ?>
			<div class="comment-info">	<?php if ( in_array( 'bypostauthor', get_comment_class() ) ) : ?><span class="bypostauthor"><?php esc_html_e('Post Author', 'influential'); ?></span><?php endif; ?>				                
				<cite class="fn"><?php echo get_comment_author_link(); ?></cite>                        		
				<div class="comment-meta"><span class="comment-date"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php echo get_comment_date() . ' at ' . get_comment_time() ?></a>	</span>
				<span class="comment-edit"><?php edit_comment_link( esc_html__( 'Edit Comment', 'influential' ), '', '' ); ?></span>	
				<span class="comment-reply"><?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']) ) ); ?></span></div>
			</div>
	
		<div id="comment-<?php echo comment_ID(); ?>" class="comment">
			<?php comment_text(); ?>
		</div>
	</div>

<?php if ($comment->comment_approved == '0') : ?>
<p><em><?php esc_html_e('Your comment is awaiting moderation.', 'influential'); ?></em></p>
<?php endif; ?>
<?php 
}
}	




