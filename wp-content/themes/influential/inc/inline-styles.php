<?php
/**
 * Add inline styles to the head area
 * These styles represents options from the customizer
 * @package Influential
 */
 
 // Dynamic styles
function influential_inline_styles($custom) {
	
// BEGIN CUSTOM CSS


	// body and content
		$body_bg = get_theme_mod( 'body_bg', '#304c6f' );
		$content_bg = get_theme_mod( 'content_bg', '#fff' );
		$content_text = get_theme_mod( 'content_text', '#535455' );
		$content_links = get_theme_mod( 'content_links', '#e2b009' );
		$content_hover_links = get_theme_mod( 'content_hover_links', '#b2995d' );
		$entry_title = get_theme_mod( 'entry_title', '#4f6e94' );		
		$sidebar_list_lines = get_theme_mod( 'sidebar_list_lines', '#e6e6e6' );
		$sidebar_tag_border = get_theme_mod( 'sidebar_tag_border', '#d9d9d9' );
		$sidebar_tag_bghover = get_theme_mod( 'sidebar_tag_bghover', '#304c6f' );
		$sidebar_tag_texthover = get_theme_mod( 'sidebar_tag_texthover', '#fff' );
		$custom .= "body {background-color:" . esc_attr($body_bg) . "; }
		#content, .entry-meta span.line {background-color:" . esc_attr($content_bg) . "; color:" . esc_attr($content_text) . "; }
		a, a:visited {color:" . esc_attr($content_links) . "; }
		.entry-title, .entry-title a {color:" . esc_attr($entry_title) . "; }
		a:hover, .entry-title a:hover {color:" . esc_attr($content_hover_links) . "; }		
		.widget li, .widget_categories .children, .widget_nav_menu .sub-menu, .widget_pages .children {border-color:" . esc_attr($sidebar_list_lines) . "; }
		.widget .tagcloud a {border-color:" . esc_attr($sidebar_tag_border) . "; }
		.widget .tagcloud a:hover {background-color:" . esc_attr($sidebar_tag_bghover) . "; color:" . esc_attr($sidebar_tag_texthover) . "; }"."\n";
		
	if( esc_attr(get_theme_mod( 'enable_typography', 0 ) ) ) :		
	  //body font size
		$body_font_size = get_theme_mod( 'body_font_size', '100' );
		$main_content_font_size = get_theme_mod( 'main_content_font_size', '81' );
		$h1_font_size = get_theme_mod( 'h1_font_size', '210' );
		$h2_font_size = get_theme_mod( 'h2_font_size', '180' );
		$h3_font_size = get_theme_mod( 'h3_font_size', '160' );
		$h4_font_size = get_theme_mod( 'h4_font_size', '150' );
		$h5_font_size = get_theme_mod( 'h5_font_size', '140' );
		$h6_font_size = get_theme_mod( 'h6_font_size', '130' );
		$post_title_font_size = get_theme_mod( 'post_title_font_size', '170' );
		$widgettitle_font_size = get_theme_mod( 'widgettitle_font_size', '120' );
		$custom .= "html { font-size:" . intval($body_font_size) . "%; }
		#content { font-size:" . intval($main_content_font_size) . "%; }
		h1 { font-size:" . intval($h1_font_size) . "%; }
		h2 { font-size:" . intval($h2_font_size) . "%; }
		h3 { font-size:" . intval($h3_font_size) . "%; }
		h4 { font-size:" . intval($h4_font_size) . "%; }
		h5 { font-size:" . intval($h5_font_size) . "%; }
		h6 { font-size:" . intval($h6_font_size) . "%; }
		.blog1 .entry-title, .blog2 .entry-title, .blog3 .entry-title, .blog4 .entry-title { font-size:" . intval($post_title_font_size) . "%; }
		.widget-title { font-size:" . intval($widgettitle_font_size) . "%; }"."\n";
    endif;	
		
	// top background colour
		$top_bg = get_theme_mod( 'top_bg', '#464646' );
		$top_text = get_theme_mod( 'top_text', '#aeaeae' );
		$custom .= "#top-wrapper {background-color:" . esc_attr($top_bg) . "; color:" . esc_attr($top_text) . "; }"."\n";

	// masthead background colour
		$header_bg = get_theme_mod( 'header_bg', '#fff' );
		$custom .= "#masthead {background-color:" . esc_attr($header_bg) . ";}"."\n";

	// header sidebar
		$header_sidebar = get_theme_mod( 'header_sidebar', '#5d5d5d' );
		$custom .= "#sidebar-header {color:" . esc_attr($header_sidebar) . ";}"."\n";
				
	// social icon style
		$social_icon = get_theme_mod( 'social_icon', '#fff' );
		$social_hicon = get_theme_mod( 'social_hicon', '#ccc' );
		$custom .= ".social-navigation a {color:" . esc_attr($social_icon) . ";}
		.social-navigation a:hover {color:" . esc_attr($social_hicon) . ";}"."\n";

	// site title and tagline colour
		$site_title_colour = get_theme_mod( 'site_title_colour', '#000' );
		$tagline_colour = get_theme_mod( 'tagline_colour', '#676767' );
		$custom .= "#site-title a, #site-title a:visited, #site-title a:hover {color:" . esc_attr($site_title_colour) . ";}
		#site-tagline {color:" . esc_attr($tagline_colour) . ";}"."\n";
				
	// logo spacing
		$logo_spacing = get_theme_mod( 'logo_spacing', '0 6px 0 0' );
		$custom .= "#logo {margin:" . esc_attr($logo_spacing) . ";}"."\n";

	// header menu styles
		$menu_bg = get_theme_mod( 'menu_bg', '#304C6F' );
		$menu_link = get_theme_mod( 'menu_link', '#fff' );
		$header3_menu_link = get_theme_mod( 'header3_menu_link', '#000' );
		$header3_submenu_link = get_theme_mod( 'header3_submenu_link', '#fff' );
		$header3_menu_hover = get_theme_mod( 'header3_menu_hover', '#3e89c6' );
		$header3_submenu_hover = get_theme_mod( 'header3_submenu_hover', '#91b5d4' );
		
		$menu_hover = get_theme_mod( 'menu_hover', '#91b5d4' );
		$submenu_borders = get_theme_mod( 'submenu_borders', '#2c3f57' );
		$custom .= "#menu-wrapper.header1, #menu-wrapper.header2, .main-navigation ul ul li {background-color:" . esc_attr($menu_bg) . ";}
		#menu-wrapper.header1 .main-navigation a, #menu-wrapper.header1 .main-navigation li.home a, #menu-wrapper.header2 .main-navigation a, #menu-wrapper.header2 .main-navigation li.home a {color:" . esc_attr($menu_link) . ";}
		.site-header.header3 .main-navigation a, .site-header.header3 .main-navigation li.home a {color:" . esc_attr($header3_menu_link) . ";}
		.site-header.header3 .main-navigation .sub-menu a {color:" . esc_attr($header3_submenu_link) . ";}
		#menu-wrapper.header1 .main-navigation li.home a:hover, #menu-wrapper.header1 .main-navigation a:hover,.main-navigation a:focus, #menu-wrapper.header1 .main-navigation .current-menu-item > a, #menu-wrapper.header1 .main-navigation .current-menu-ancestor > a, #menu-wrapper.header2 .main-navigation li.home a:hover, #menu-wrapper.header2 .main-navigation a:hover,.main-navigation a:focus, #menu-wrapper.header2 .main-navigation .current-menu-item > a, #menu-wrapper.header2 .main-navigation .current-menu-ancestor > a {color:" . esc_attr($menu_hover) . ";}
		.site-header.header3 .main-navigation li.home a:hover, .site-header.header3 .main-navigation a:hover,.main-navigation a:focus, .site-header.header3 .main-navigation .sub-menu .current-menu-item > a, .site-header.header3 .main-navigation .current-menu-ancestor > a {color:" . esc_attr($header3_menu_hover) . ";}
		.site-header.header3 .main-navigation .sub-menu .current-menu-item > a, .site-header.header3 .main-navigation .sub-menu .current-menu-ancestor > a, .site-header.header3 .main-navigation .sub-menu a:hover {color:" . esc_attr($header3_submenu_hover) . ";}
		.main-navigation ul ul, .main-navigation ul ul li {border-color:" . esc_attr($submenu_borders) . ";}
		.main-navigation ul ul:before {border-color:" . esc_attr($submenu_borders) . " transparent;}"."\n";

	// header style 3 and mobile menu
		$header3_mobile_bg = get_theme_mod( 'header3_mobile_bg', '#304c6f' );
		$header3_mobile_borders = get_theme_mod( 'header3_mobile_borders', '#2c3f57' );
		$header3_mobile_submenu_toggle = get_theme_mod( 'header3_mobile_submenu_toggle', '#2c3f57' );
		$custom .= ".site-header.header3 .site-header-menu.toggled-on a {color:" . esc_attr($header3_submenu_link) . ";}
		.site-header.header3 .site-header-menu.toggled-on .current-menu-item > a, .site-header.header3 .site-header-menu.toggled-on .current-menu-ancestor > a, .site-header.header3 .site-header-menu.toggled-on a:hover, .site-header.header3 .site-header-menu.toggled-on a:hover {color:" . esc_attr($header3_submenu_hover) . ";}		
		.site-header.header3 .site-header-menu .main-navigation ul ul > li, .site-header.header3 .site-header-menu.toggled-on, .site-header.header3 .site-header-menu.toggled-on .main-navigation ul ul > li {background-color:" . esc_attr($header3_mobile_bg) . ";}
		.site-header.header3 .dropdown-toggle {background-color:" . esc_attr($header3_mobile_submenu_toggle) . ";}
		.site-header.header3 .main-navigation ul ul, .site-header.header3 .main-navigation .primary-menu, .site-header.header3 .site-header-menu .main-navigation li, .site-header.header3 .site-header-menu.toggled-on li {border-color:" . esc_attr($header3_mobile_borders) . ";}		
		.site-header.header3 .main-navigation ul ul:before {border-color:" . esc_attr($header3_mobile_borders) . " transparent;}	"."\n";
	
	// banner
		$banner_bg = get_theme_mod( 'banner_bg', '#fff' );
		$custom .= "#banner-wrapper {background-color:" . esc_attr($banner_bg) . ";}"."\n";
		
	// cta
		$cta_bg = get_theme_mod( 'cta_bg', '#e0a132' );
		$cta_text = get_theme_mod( 'cta_text', '#fff' );		
		$cta_button_bg = get_theme_mod( 'cta_button_bg', '#2c3f57' );
		$cta_button_hover = get_theme_mod( 'cta_button_hover', '#1e5080' );
		$cta_button_text = get_theme_mod( 'cta_button_text', '#fff' );
		$cta_button_hover_text = get_theme_mod( 'cta_button_hover_text', '#fff' );		
		$custom .= "#cta-wrapper {background-color:" . esc_attr($cta_bg) . "; color:" . esc_attr($cta_text) . ";}		
		#cta-button {background-color:" . esc_attr($cta_button_bg) . "; color:" . esc_attr($cta_button_text) . ";}
		#cta-button:hover {background-color:" . esc_attr($cta_button_hover) . "; color:" . esc_attr($cta_button_hover_text) . ";}"."\n";
			
	// breadcrumbs
		$breadcrumbs_bg = get_theme_mod( 'breadcrumbs_bg', '#f2f2f2' );
		$breadcrumbs_text = get_theme_mod( 'breadcrumbs_text', '#9a9a9a' );
		$breadcrumbs_hover = get_theme_mod( 'breadcrumbs_hover', '#333' );
		$custom .= "#breadcrumb-wrapper {background-color:" . esc_attr($breadcrumbs_bg) . ";}
		#breadcrumbs, #breadcrumbs a {color:" . esc_attr($breadcrumbs_text) . ";}
		#breadcrumbs a:hover {color:" . esc_attr($breadcrumbs_hover) . ";}"."\n";
				
	// bottom
		$bottom_bg = get_theme_mod( 'bottom_bg', '#403f3f' );
		$bottom_text = get_theme_mod( 'bottom_text', '#b5b5b5' );
		$bottom_links = get_theme_mod( 'bottom_links', '#b5b5b5' );
		$bottom_hover = get_theme_mod( 'bottom_hover', '#ccc' );
		$bottom_list_lines = get_theme_mod( 'bottom_list_lines', '#525252' );	
		$bottom_tag_borders = get_theme_mod( 'bottom_tag_borders', '#b5b5b5' );
		$bottom_tag_hover = get_theme_mod( 'bottom_tag_hover', '#e0a132' );
		$bottom_tag_texthover = get_theme_mod( 'bottom_tag_texthover', '#fff' );
		$custom .= "#bottom-wrapper {background-color:" . esc_attr($bottom_bg) . "; color:" . esc_attr($bottom_text) . ";}
		#bottom-wrapper li, #sidebar-bottom .widget_categories .children, #bottom-wrapper .widget_nav_menu .sub-menu, #bottom-wrapper .widget_pages .children {border-color:" . esc_attr($bottom_list_lines) . ";}		
		#bottom-wrapper a {color:" . esc_attr($bottom_links) . ";}
		#bottom-wrapper .widget-title {color:" . esc_attr($bottom_text) . ";}
		#bottom-wrapper a:hover {color:" . esc_attr($bottom_hover) . ";}
		#bottom-wrapper .tagcloud a {border-color:" . esc_attr($bottom_tag_borders) . ";}
		#bottom-wrapper .tagcloud a:hover {background-color:" . esc_attr($bottom_tag_hover) . "; color:" . esc_attr($bottom_tag_texthover) . ";}"."\n";

	// showcase
		$showcase_top_bg = get_theme_mod( 'showcase_top_bg', '#dedede' );
		$showcase_top_text = get_theme_mod( 'showcase_top_text', '#373a3c' );	
		$showcase_bottom_bg = get_theme_mod( 'showcase_bottom_bg', '#dedede' );
		$showcase_bottom_text = get_theme_mod( 'showcase_bottom_text', '#373a3c' );
		$custom .= "#showcase-top-wrapper {background-color:" . esc_attr($showcase_top_bg) . "; color:" . esc_attr($showcase_top_text) . "; }
		#showcase-bottom-wrapper {background-color:" . esc_attr($showcase_bottom_bg) . "; color:" . esc_attr($showcase_bottom_text) . "; }"."\n";
	
	// footer
		$footer_bg = get_theme_mod( 'footer_bg', '#232323' );
		$footer_text = get_theme_mod( 'footer_text', '#b5b5b5' );
		$footer_links = get_theme_mod( 'footer_links', '#b5b5b5' );
		$footer_hover = get_theme_mod( 'footer_hover', '#ccc' );
		$custom .= "#footer-wrapper {background-color:" . esc_attr($footer_bg) . "; color:" . esc_attr($footer_text) . ";}
		#footer-wrapper a {color:" . esc_attr($footer_links) . ";}
		#footer-wrapper .widget-title {color:" . esc_attr($footer_text) . ";}
		#footer-wrapper a:hover {color:" . esc_attr($footer_hover) . ";}	"."\n";
	
	// sticky post 
		$featured_bg = get_theme_mod( 'featured_bg', '#304c6f' );
		$featured_text = get_theme_mod( 'meta_text', '#fff' );
		$custom .= ".featured, .bypostauthor, .comment-reply-link {background-color:" . esc_attr($featured_bg) . "; color:" . esc_attr($featured_text) . ";}"."\n";
		
	// meta info 
		$meta_text = get_theme_mod( 'meta_text', '#48678d' );
		$meta_line = get_theme_mod( 'meta_line', '#dfe2e5' );
		$custom .= ".entry-meta-wrapper, .single .entry-footer {border-color:" . esc_attr($meta_line) . ";}
		.entry-meta, .entry-meta a, .entry-meta a:hover, .comment-date a,.comment-edit a {color:" . esc_attr($meta_text) . ";}"."\n";
		
	// more link 
		$more_link = get_theme_mod( 'more_link', '#48678d' );
		$more_hover = get_theme_mod( 'more_hover', '#698ab2' );
		$custom .= ".more-link {color:" . esc_attr($more_link) . ";}
		.more-link:hover {color:" . esc_attr($more_hover) . ";}"."\n";		
		
	// full post navigation
		$post_nav_bg = get_theme_mod( 'post_nav_bg', '#304c6f' );
		$post_nav_text = get_theme_mod( 'post_nav_text', '#fff' );
		$post_nav_hover = get_theme_mod( 'post_nav_hover', '#c4d1de' );
		$custom .= ".post-navigation, .posts-navigation, .woocommerce nav.woocommerce-pagination   {background-color:" . esc_attr($post_nav_bg) . "; color:" . esc_attr($post_nav_text) . ";}
		.post-navigation .meta-nav, .post-navigation .post-title, .posts-navigation a, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span { color:" . esc_attr($post_nav_text) . ";}
		.post-navigation .post-title:hover, .posts-navigation a:hover,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current {color:" . esc_attr($post_nav_hover) . ";}"."\n";		
			
	// custom line style
		$custom_linestyle_line = get_theme_mod( 'custom_linestyle_line', '#979a9e' );
		$custom_barstyle_border = get_theme_mod( 'custom_barstyle_border', '#979a9e' );
		$custom_boxstyle_bg = get_theme_mod( 'custom_boxstyle_bg', '#979a9e' );
		$custom_boxstyle_text = get_theme_mod( 'custom_boxstyle_text', '#fff' );
		$custom_boxstyle_line = get_theme_mod( 'custom_boxstyle_line', '#b9b9b9' );
		$custom_boxstyle_list_lines = get_theme_mod( 'custom_boxstyle_list_lines', '#b9b9b9' );
		$custom_boxstyle_hover = get_theme_mod( 'custom_boxstyle_hover', '#e8e8e8' );
		$custom .= ".widget.line.custom .widget-title:after {background-color:" . esc_attr($custom_linestyle_line) . ";}
		.widget.bar.custom .widget-title {border-color:" . esc_attr($custom_barstyle_border) . ";}
		.widget.box.custom, .widget.box.custom .widget-title, .widget.box.custom a, .widget.box.custom a:visited {background-color:" . esc_attr($custom_boxstyle_bg) . "; color:" . esc_attr($custom_boxstyle_text) . ";}
		.widget.box.custom .widget-title:after {background-color:" . esc_attr($custom_boxstyle_line) . ";}
		.widget.box.custom li {border-color:" . esc_attr($custom_boxstyle_list_lines) . ";}
		.widget.box.custom a:hover {color:" . esc_attr($custom_boxstyle_hover) . ";}"."\n";	
	
	// buttons and forms
		$button_bg = get_theme_mod( 'button_bg', '#e6e6e6' );
		$button_text = get_theme_mod( 'button_text', '#303030' );
		$button_hoverbg = get_theme_mod( 'button_hoverbg', '#304c6f' );
		$button_hovertext = get_theme_mod( 'button_hovertext', '#f2f2f2' );
		$input_info = get_theme_mod( 'input_info', '#daaa6c' );
		$icon_button_border = get_theme_mod( 'icon_button_border', '#f7c51d' );
		$icon_button_text = get_theme_mod( 'icon_button_text', '#535455' );
		$icon_button_icon_bg = get_theme_mod( 'icon_button_icon_bg', '#f7c51d' );
		$icon_button_icon = get_theme_mod( 'icon_button_icon', '#202020' );
		$custom .= ".btn, button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"], .widget .button-search {background-color:" . esc_attr($button_bg) . "; color:" . esc_attr($button_text) . ";}
		.btn:hover, button:hover, input[type=\"button\"]:hover, input[type=\"reset\"]:hover, input[type=\"submit\"]:hover, .widget .button-search:hover {background-color:" . esc_attr($button_hoverbg) . ";color:" . esc_attr($button_hovertext) . ";}
		.input-info {color:" . esc_attr($input_info) . ";}
		.icon-button {border-color:" . esc_attr($icon_button_border) . "; color:" . esc_attr($icon_button_text) . ";}
		.icon-button i,.icon-button span {background-color:" . esc_attr($icon_button_icon_bg) . "; color:" . esc_attr($icon_button_icon) . ";}"."\n";	

	// widget menu active colour
		$widgetmenu_active_colour = get_theme_mod( 'widgetmenu_active_colour', '#e2b009' );
		$custom .= ".widget_nav_menu li.current-menu-item a {color:" . esc_attr($widgetmenu_active_colour) . ";}"."\n";

		
	// WooCommerce		
	if( esc_attr(get_theme_mod( 'add_woocommerce', 0 ) ) ) :
		$woo_button = get_theme_mod( 'woo_button', '#304c6f' );
		$woo_button_text = get_theme_mod( 'woo_button_text', '#f2f2f2' );
		$woo_button_hover = get_theme_mod( 'woo_button_hover', '#e6e6e6' );
		$woo_button_texthover = get_theme_mod( 'woo_button_texthover', '#303030' );
		$woo_product_meta_bg = get_theme_mod( 'woo_product_meta_bg', '#f9f9f9' );
		$woo_product_meta_text = get_theme_mod( 'woo_product_meta_text', '#181818' );
		$woo_product_meta_links = get_theme_mod( 'woo_product_meta_links', '#aaa' );
		$woo_price_colour = get_theme_mod( 'woo_price_colour', '#be9a4d' );
		$woo_tabs_border = get_theme_mod( 'woo_tabs_border', '#e0e0e0' );
		$woo_header_footer_bg = get_theme_mod( 'woo_header_footer_bg', '#f2f2f2' );
		$custom .= ".woocommerce #respond input#submit,  .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, 
.woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {background-color:" . esc_attr($woo_button) . "; color: " . esc_attr($woo_button_text) . "; }
		.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {background-color:" . esc_attr($woo_button_hover) . ";color:" . esc_attr($woo_button_texthover) . ";}
		.product_meta {background-color:" . esc_attr($woo_product_meta_bg) . "; color:" . esc_attr($woo_product_meta_text) . ";}
		.product_meta span.sku, .product_meta a, .product_meta .posted_in a, .product_meta a:hover, .product_meta .posted_in a:hover {color:" . esc_attr($woo_product_meta_links) . "; }
		.woocommerce div.product p.price, .woocommerce div.product span.price,.woocommerce ul.products li.product .price {color:" . esc_attr($woo_price_colour) . ";}
		.woocommerce-tabs .tabs li.active a {border-color:" . esc_attr($woo_tabs_border) . ";}
		.woocommerce .cart thead tr,.woocommerce .cart td.actions,.woocommerce tr.cart-subtotal,.woocommerce tr.order-total {background-color:" . esc_attr($woo_header_footer_bg) . ";}"."\n";		
	endif;		
			
	// back to top 
		$back_top = get_theme_mod( 'back_top', '#000' );
		$back_top_icon = get_theme_mod( 'back_top_icon', '#fff' );
		$back_top_hover = get_theme_mod( 'back_top_hover', '#304c6f' );
		$custom .= ".back-to-top {background-color:" . esc_attr($back_top) . "; color:" . esc_attr($back_top_icon) . ";}
		.back-to-top:hover {background-color:" . esc_attr($back_top_hover) . ";}"."\n";		
				
	// author bio
		$author_bio_bg = get_theme_mod( 'author_bio_bg', '#f7f7f7' );
		$author_bio_text = get_theme_mod( 'author_bio_text', '#535455' );
		$custom .= "#author-info-box, #author-info-box a, author-info-box a:hover {background-color:" . esc_attr($author_bio_bg) . "; color:" . esc_attr($author_bio_text) . "; }"."\n";

	// section 1 		
	if( esc_attr(get_theme_mod( 'enable_section1_sidebars', 0 ) ) ) :
		$section1_bg = get_theme_mod( 'section1_bg', '#fff' );
		$section1_padding = get_theme_mod( 'section1_padding', '20px 0' );
		$section1_text = get_theme_mod( 'section1_text', '#535455' );
		$section1_links = get_theme_mod( 'section1_links', '#e2b009' );
		$section1_links_hover = get_theme_mod( 'section1_links_hover', '#e2b009' );
		$section1_headings = get_theme_mod( 'section1_headings', '#223246' );		
		$custom .= "#section1 {background-color:" . esc_attr($section1_bg) . "; color:" . esc_attr($section1_text) . ";padding:" . esc_attr($section1_padding) . "; }		
		#section1 a, #section1 a:visited {color:" . esc_attr($section1_links) . "; }
		#section1 a:hover {color:" . esc_attr($section1_links_hover) . "; }
		#section1 .widget-title, #section1 h1, #section1 h2, #section1 h3, #section1 h4, #section1 h5, #section1 h6 {color:" . esc_attr($section1_headings) . "; }"."\n";
	endif;		
		
	// section 2 		
	if( esc_attr(get_theme_mod( 'enable_section2_sidebars', 0 ) ) ) :
		$section2_bg = get_theme_mod( 'section2_bg', '#fff' );
		$section2_padding = get_theme_mod( 'section2_padding', '20px 0' );
		$section2_text = get_theme_mod( 'section2_text', '#535455' );
		$section2_links = get_theme_mod( 'section2_links', '#e2b009' );
		$section2_links_hover = get_theme_mod( 'section2_links_hover', '#e2b009' );
		$section2_headings = get_theme_mod( 'section2_headings', '#223246' );
		$custom .= "#section2 {background-color:" . esc_attr($section2_bg) . "; color:" . esc_attr($section2_text) . ";padding:" . esc_attr($section2_padding) . "; }
		#section2 a, #section2 a:visited {color:" . esc_attr($section2_links) . "; }
		#section2 a:hover {color:" . esc_attr($section2_links_hover) . "; }
		#section2 .widget-title, #section2 h1, #section2 h2, #section2 h3, #section2 h4, #section2 h5, #section2 h6 {color:" . esc_attr($section2_headings) . "; }"."\n";
	endif;		
		
	// section 3 		
	if( esc_attr(get_theme_mod( 'enable_section3_sidebars', 0 ) ) ) :
		$section3_bg = get_theme_mod( 'section3_bg', '#fff' );
		$section3_padding = get_theme_mod( 'section3_padding', '20px 0' );
		$section3_text = get_theme_mod( 'section3_text', '#535455' );
		$section3_links = get_theme_mod( 'section3_links', '#e2b009' );
		$section3_links_hover = get_theme_mod( 'section3_links_hover', '#e2b009' );
		$section3_headings = get_theme_mod( 'section3_headings', '#223246' );
		$custom .= "#section3 {background-color:" . esc_attr($section3_bg) . "; color:" . esc_attr($section3_text) . ";padding:" . esc_attr($section3_padding) . "; }
		#section3 a, #section3 a:visited {color:" . esc_attr($section3_links) . "; }
		#section3 a:hover {color:" . esc_attr($section3_links_hover) . "; }
		#section3 .widget-title, #section3 h1, #section3 h2, #section3 h3, #section3 h4, #section3 h5, #section3 h6 {color:" . esc_attr($section3_headings) . "; }"."\n";
	endif;

	// section 4 		
	if( esc_attr(get_theme_mod( 'enable_section4_sidebars', 0 ) ) ) :
		$section4_bg = get_theme_mod( 'section4_bg', '#fff' );
		$section4_padding = get_theme_mod( 'section4_padding', '20px 0' );
		$section4_text = get_theme_mod( 'section4_text', '#535455' );
		$section4_links = get_theme_mod( 'section4_links', '#e2b009' );
		$section4_links_hover = get_theme_mod( 'section4_links_hover', '#e2b009' );
		$section4_headings = get_theme_mod( 'section4_headings', '#223246' );
		$custom .= "#section4 {background-color:" . esc_attr($section4_bg) . "; color:" . esc_attr($section4_text) . "; padding:" . esc_attr($section4_padding) . ";}
		#section4 a, #section4 a:visited {color:" . esc_attr($section4_links) . "; }
		#section4 a:hover {color:" . esc_attr($section4_links_hover) . "; }
		#section4 .widget-title,#section4 h1, #section4 h2, #section4 h3, #section4 h4, #section4 h5, #section4 h6 {color:" . esc_attr($section4_headings) . "; }"."\n";
	endif;	
		
	// section 5 		
	if( esc_attr(get_theme_mod( 'enable_section5_sidebars', 0 ) ) ) :
		$section5_bg = get_theme_mod( 'section5_bg', '#fff' );
		$section5_padding = get_theme_mod( 'section5_padding', '20px 0' );
		$section5_text = get_theme_mod( 'section5_text', '#535455' );
		$section5_links = get_theme_mod( 'section5_links', '#e2b009' );
		$section5_links_hover = get_theme_mod( 'section5_links_hover', '#e2b009' );
		$section5_headings = get_theme_mod( 'section5_headings', '#223246' );
		$custom .= "#section5 {background-color:" . esc_attr($section5_bg) . "; color:" . esc_attr($section5_text) . ";padding:" . esc_attr($section5_padding) . "; }
		#section5 a, #section5 a:visited {color:" . esc_attr($section5_links) . "; }
		#section5 a:hover {color:" . esc_attr($section5_links_hover) . "; }
		#section5 .widget-title, #section5 h1, #section5 h2, #section5 h3, #section5 h4, #section5 h5, #section5 h6 {color:" . esc_attr($section5_headings) . "; }"."\n";
	endif;		
		
	// section 6 		
	if( esc_attr(get_theme_mod( 'enable_section6_sidebars', 0 ) ) ) :
		$section6_bg = get_theme_mod( 'section6_bg', '#fff' );
		$section6_padding = get_theme_mod( 'section6_padding', '20px 0' );
		$section6_text = get_theme_mod( 'section6_text', '#535455' );
		$section6_links = get_theme_mod( 'section6_links', '#e2b009' );
		$section6_links_hover = get_theme_mod( 'section6_links_hover', '#e2b009' );
		$section6_headings = get_theme_mod( 'section6_headings', '#223246' );
		$custom .= "#section6 {background-color:" . esc_attr($section6_bg) . "; color:" . esc_attr($section6_text) . ";padding:" . esc_attr($section6_padding) . "; }
		#section6 a, #section6 a:visited {color:" . esc_attr($section6_links) . "; }
		#section6 a:hover {color:" . esc_attr($section6_links_hover) . "; }
		#section6 .widget-title, #section6 h1, #section6 h2, #section6 h3, #section6 h4, #section6 h5, #section6 h6 {color:" . esc_attr($section6_headings) . "; }"."\n";
	endif;		

	// portfolio
		$portfolio_caption_bg = get_theme_mod( 'portfolio_caption_bg', '#e0a132' );
		$portfolio_caption_button = get_theme_mod( 'portfolio_caption_button', '#2c3f57' );
		$portfolio_caption_hbutton = get_theme_mod( 'portfolio_caption_hbutton', '#1e5080' );
		$custom .= ".influential-portfolio-item-overlay:before {background-color:" . esc_attr($portfolio_caption_bg) . "; }
		.influential-portfolio-button {background-color:" . esc_attr($portfolio_caption_button) . "; }
		.influential-portfolio-button:hover {background-color:" . esc_attr($portfolio_caption_hbutton) . "; }"."\n";

	// image captions
		$caption_bg = get_theme_mod( 'caption_bg', '#304c6f' );
		$caption_text = get_theme_mod( 'caption_text', '#fff' );
		$gallery_caption_bg = get_theme_mod( 'gallery_caption_bg', '#304c6f' );
		$gallery_caption_text = get_theme_mod( 'gallery_caption_text', '#fff' );		
		$custom .= ".wp-caption .wp-caption-text {background-color:" . esc_attr($caption_bg) . "; color:" . esc_attr($caption_text) . ";}
		.gallery-caption {background-color:" . esc_attr($gallery_caption_bg) . "; color:" . esc_attr($gallery_caption_text) . ";}"."\n";
	
	// attachment page
		$attachment_page_bg = get_theme_mod( 'attachment_page_bg', '#212121' );
		$attachment_page_nav = get_theme_mod( 'attachment_page_nav', '#B7AC9C' );
		$custom .= ".attachment .featured-image-wrapper {background-color:" . esc_attr($attachment_page_bg) . ";}
		#image-navigation a,#image-navigation a:visited {color:" . esc_attr($attachment_page_nav) . ";}"."\n";
	
	
	//Output all the styles
	wp_add_inline_style( 'influential-style', $custom );	
}
add_action( 'wp_enqueue_scripts', 'influential_inline_styles' );	