<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Influential
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="google-site-verification" content="sHzKJSduaB8KVHOD_hNfeU0AYTs5N1TCUi6k1PLEjos" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<link rel="stylesheet" href="/wp-content/themes/influential/css/custom.css" type="text/css" />

</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'influential' ); ?></a>
	<div id="top-wrapper">
		<div class="container-fluid"><div class="row">
			<div class="col-lg-8"><div id="announcement-wrapper"><?php get_sidebar( 'announcement' ); ?></div></div>
			<div class="col-lg-4">

				<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'influential' ); ?>">
										<div class="search-toggle">
						<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php _e( 'Search', 'influential' ); ?></a>
					</div>
					<?php if ( has_nav_menu( 'social' ) ) :
						wp_nav_menu( array(
							'theme_location' => 'social',
							'depth' => 1,
							'container' => false,
							'menu_class' => 'social-icons',
							'link_before' => '<span class="screen-reader-text">',
							'link_after' => '</span>',
						) );
					endif; ?>

					<div id="search-container" class="search-box-wrapper hide">
						<div class="search-box clearfix">
							<?php get_search_form(); ?>
						</div>
					</div>
				</nav>

			</div>
			</div>
		</div>

	</div>

	<?php // lets load our header style
	$header_style = esc_attr(get_theme_mod( 'header_style', 'header1' ) ) ;
	get_template_part( 'layouts/'. $header_style );
	?>



	<div id="banner-wrapper"><?php get_sidebar( 'banner' ); ?></div>

	<div id="cta-wrapper"><?php get_sidebar( 'cta' ); ?></div>

	<?php get_sidebar( 'showcase-top' ); ?>

	<div id="breadcrumb-wrapper"><?php get_sidebar( 'breadcrumbs' ); ?></div>

	<div id="content" class="site-content">
