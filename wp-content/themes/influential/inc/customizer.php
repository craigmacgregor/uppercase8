<?php
/**
 * Morphology Theme Customizer.
 * @package Morphology
 * Add postMessage support for site title and description for the Theme Customizer.
 */
function influential_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_section( 'background_image' )->title = __( 'Body Background Image', 'influential' );
  	$wp_customize->get_control( 'background_color' )->label = __( 'Body Background Colour without Background Image)', 'influential' );
	
	// lets remove the default background color setting to move it in the Background Image section
	$wp_customize->remove_control('background_color');	
	$wp_customize->remove_control('header_textcolor');
	$wp_customize->remove_control('display_header_text');	
	

/*
 * Begin theme options
 *
 * Add more options to the Site Identity section
 * Name: Site Identity
 */ 
	// Setting group to show the site title  
  	$wp_customize->add_setting( 'show_site_title',  array(
		'default' => 1,
		'sanitize_callback' => 'influential_sanitize_checkbox'
   	 ) );  
 	 $wp_customize->add_control( 'show_site_title', array(
		'type'     => 'checkbox',
		'priority' => 1,
		'label'    => __( 'Show Site Title', 'influential' ),
		'section'  => 'title_tagline',
 	 ) );

	// Setting group to show the tagline  
	 $wp_customize->add_setting( 'show_tagline', array(
		'default' => 1,
		'sanitize_callback' => 'influential_sanitize_checkbox'
	  ) );  
	$wp_customize->add_control( 'show_tagline', array(
		'type'     => 'checkbox',
		'priority' => 2,
		'label'    => __( 'Show Tagline', 'influential' ),
		'section'  => 'title_tagline',
	) );
	
	$wp_customize->add_setting( 'site_logo', array( 
	'default' => '',	
	'sanitize_callback' => 'esc_url_raw',
	) );	
		
	$wp_customize->add_control( new WP_Customize_Image_Control( 	$wp_customize,	'site_logo',	array(
		'settings'		=> 'site_logo',
		'section'		=> 'title_tagline',
		'label'    => __('Your Logo', 'influential'),
		'description'	=> __( 'Select the image to be used for the site logo.', 'influential' ),
		'priority' => 3,
	) ) );
	
	// Setting group to show the tagline  
	 $wp_customize->add_setting( 'logo_spacing', array(
		'default' => '0 6px 0 0',
		'sanitize_callback' => 'influential_sanitize_text'
	  ) );  
	$wp_customize->add_control( 'logo_spacing', array(
		'type'     => 'text',
		'priority' => 4,
		'label'    => __( 'Logo Spacing', 'influential' ),
		'description' => __( 'When using just a logo, you can adjust the positioning (spacing) for your logo.', 'influential' ),
		'section'  => 'title_tagline',
	) );
	
/*
 * Create a new customizer section
 * Name: Site Options
 */    
	$wp_customize->add_section( 'site_options', array(
		'title' => __( 'Site Options', 'influential' ),
		'priority'       => 30,
	) ); 

	// Setting group for header style  
	$wp_customize->add_setting( 'header_style', array(
		'default' => 'header1',
		'sanitize_callback' => 'influential_sanitize_headerstyle',
	) );  
	$wp_customize->add_control( 'header_style', array(
		  'type' => 'radio',
		  'label' => __( 'Header Style', 'influential' ),
		  'section' => 'site_options',
		  'priority' => 1,
		  'choices' => array(	
				'header1' => __( 'Header Style 1', 'influential' ),	 
				'header2' => __( 'Header Style 2', 'influential' ), 
				'header3' => __( 'Header Style 3', 'influential' ),
		) ) );	

	// Setting group to enable font awesome 
	$wp_customize->add_setting( 'load_fontawesome',	array(
 		'default' => 1,
		'sanitize_callback' => 'influential_sanitize_checkbox',
	) );  
	$wp_customize->add_control( 'load_fontawesome', array(
		'type'     => 'checkbox',
		'priority' => 2,
		'label'    => __( 'Load Font Awesome', 'influential' ),
		'description' => __( 'Load Font Awesome if not you are not using a plugin for it.', 'influential' ),
		'section'  => 'site_options',
  	) );	
	
	// Setting group to enable bootstrap
	$wp_customize->add_setting( 'load_bootstrap',	array(
		'default' => 1,
		'sanitize_callback' => 'influential_sanitize_checkbox',
	) );  
	$wp_customize->add_control( 'load_bootstrap', array(
		'type'     => 'checkbox',
		'priority' => 3,
		'label'    => __( 'Load Bootstrap CSS', 'influential' ),
		'description' => __( 'Load the Bootstrap grid layout and some limited CSS elements if nothing else is loading it for you.', 'influential' ),
		'section'  => 'site_options',
	) );

// Setting group to enable WooCommerce styles 
  $wp_customize->add_setting( 'add_woocommerce',	array(
 		'default' => 0,
		'sanitize_callback' => 'influential_sanitize_checkbox',
	) );  
  $wp_customize->add_control( 'add_woocommerce', array(
		'type'     => 'checkbox',
		'priority' => 4,
		'label'    => __( 'Turn on WooCommerce Elements', 'influential' ),
		'description' => __( 'Load WooCommerce styling and sidebars if you plan to setup WooCommerce.', 'influential' ),
		'section'  => 'site_options',
  	) );
	
// Setting group to enable bbPress styles 
  $wp_customize->add_setting( 'add_bbpress',	array(
 		'default' => 0,
		'sanitize_callback' => 'influential_sanitize_checkbox',
	) );  
  $wp_customize->add_control( 'add_bbpress', array(
		'type'     => 'checkbox',
		'priority' => 5,
		'label'    => __( 'Turn on bbPress Elements', 'influential' ),
		'description' => __( 'Load bbPress styling and sidebars if you plan to install and use bbPress.', 'influential' ),
		'section'  => 'site_options',
  	) );	

	
	 // Setting group to show the edit links 
	  $wp_customize->add_setting( 'show_edit',  array(
		  'default' => 0,
		  'sanitize_callback' => 'influential_sanitize_checkbox',
		) );  
	  $wp_customize->add_control( 'show_edit', array(
		'type'     => 'checkbox',
		'priority' => 8,
		'label'    => __( 'Show Edit Link', 'influential' ),
		'description' => __( 'Show the Edit Link on posts and pages.', 'influential' ),
		'section'  => 'site_options',
	  ) );	

	// Setting group for a Copyright
	$wp_customize->add_setting( 'copyright', array(
		'default'        => esc_html__( 'Your Name', 'influential' ),
		'sanitize_callback' => 'influential_sanitize_text',
	) );
	$wp_customize->add_control( 'copyright', array(
		'settings' => 'copyright',
		'label'    => esc_html__( 'Your Copyright Name', 'influential' ),
		'section'  => 'site_options',		
		'type'     => 'text',
		'priority' => 9,
	) );  
	
 /*
 * Create a new customizer section
 * Name: Blog Options
 */    
	$wp_customize->add_section( 'blog_options', array(
		'title' => __( 'Blog Options', 'influential' ),
		'priority'       => 35,
	) ); 

	// Setting group for blog layout  
	$wp_customize->add_setting( 'blog_style', array(
		'default' => 'blog1',
		'sanitize_callback' => 'influential_sanitize_blogstyle',
	) );  
	$wp_customize->add_control( 'blog_style', array(
		  'type' => 'radio',
		  'label' => __( 'Blog Style', 'influential' ),
		  'section' => 'blog_options',
		  'priority' => 1,
		  'choices' => array(	
				'blog1' => __( 'Top Featured Image &amp; Right Sidebar', 'influential' ),	 
				'blog2' => __( 'Top Featured Image &amp; Left Sidebar', 'influential' ), 
				'blog3' => __( 'Top Featured Image &amp; No Sidebars', 'influential' ),
				'blog4' => __( 'Left Featured Image &amp; No Sidebars', 'influential' ),
				'blog5' => __( 'Grid Style', 'influential' ),
				'blog6' => __( 'Masonry Style', 'influential' ),
		) ) );

	// Setting group for single layout  
	$wp_customize->add_setting( 'single_style', array(
		'default' => 'single1',
		'sanitize_callback' => 'influential_sanitize_singlestyle',
	) );  
	$wp_customize->add_control( 'single_style', array(
		  'type' => 'radio',
		  'label' => __( 'Single Full Post Style', 'influential' ),
		  'section' => 'blog_options',
		  'priority' => 2,
		  'choices' => array(	
				'single1' => __( 'Single with Right Sidebar', 'influential' ),	 
				'single2' => __( 'Single with Left Sidebar', 'influential' ), 
				'single3' => __( 'Single without Sidebars', 'influential' ),
		) ) );

	// Setting group for a excerpt
	$wp_customize->add_setting( 'excerpt_length', array(
		'default'        => '50',
		'sanitize_callback' => 'influential_sanitize_integer',
	) );
	$wp_customize->add_control( 'excerpt_length', array(
		'settings' => 'excerpt_length',
		'label'    => __( 'Excerpt Length', 'influential' ),
		'section'  => 'blog_options',
		'type'     => 'text',
		'priority'   => 8,
	) );
	
	 // Use excerpt 
	  $wp_customize->add_setting( 'use_excerpt',  array(
		  'default' => 0,
		  'sanitize_callback' => 'influential_sanitize_checkbox',
		) );  
	  $wp_customize->add_control( 'use_excerpt', array(
		'type'     => 'checkbox',
		'priority' => 9,
		'label'    => __( 'Use Blog Excerpts', 'influential' ),
		'description' => __( 'This lets you switch to using excerpts for your blog summaries when using one of the first two blog styles.', 'influential' ),
		'section'  => 'blog_options',
	  ) );

	 // Show the post summary meta info 
	  $wp_customize->add_setting( 'show_summary_meta',  array(
		  'default' => 1,
		  'sanitize_callback' => 'influential_sanitize_checkbox',
		) );  
	  $wp_customize->add_control( 'show_summary_meta', array(
		'type'     => 'checkbox',
		'priority' => 10,
		'label'    => __( 'Show Summary Meta Info', 'influential' ),
		'description' => __( 'Show the post summary meta info like the date, author, etc.', 'influential' ),
		'section'  => 'blog_options',
	  ) );	

	 // Show the post date 
	  $wp_customize->add_setting( 'show_postdate',  array(
		  'default' => 1,
		  'sanitize_callback' => 'influential_sanitize_checkbox',
		) );  
	  $wp_customize->add_control( 'show_postdate', array(
		'type'     => 'checkbox',
		'priority' => 11,
		'label'    => __( 'Show Post Date', 'influential' ),
		'description' => __( 'Show the post date on all blog articles.', 'influential' ),
		'section'  => 'blog_options',
	  ) );	  
	 // Show the post author 
	  $wp_customize->add_setting( 'show_postauthor',  array(
		  'default' => 1,
		  'sanitize_callback' => 'influential_sanitize_checkbox',
		) );  
	  $wp_customize->add_control( 'show_postauthor', array(
		'type'     => 'checkbox',
		'priority' => 13,
		'label'    => __( 'Show Post Author', 'influential' ),
		'description' => __( 'Show the post author on all blog articles.', 'influential' ),
		'section'  => 'blog_options',
	  ) );

	 // Show the post comments count on the summary 
	  $wp_customize->add_setting( 'show_commentslink',  array(
		  'default' => 1,
		  'sanitize_callback' => 'influential_sanitize_checkbox',
		) );  
	  $wp_customize->add_control( 'show_commentslink', array(
		'type'     => 'checkbox',
		'priority' => 14,
		'label'    => __( 'Show Comments Link', 'influential' ),
		'description' => __( 'Show the comments link on the post summaries.', 'influential' ),
		'section'  => 'blog_options',
	  ) );


	 // Show the single categories list
	  $wp_customize->add_setting( 'show_categories',  array(
		  'default' => 1,
		  'sanitize_callback' => 'influential_sanitize_checkbox',
		) );  
	  $wp_customize->add_control( 'show_categories', array(
		'type'     => 'checkbox',
		'priority' => 15,
		'label'    => __( 'Show Categories', 'influential' ),
		'description' => __( 'Show the categories list on the full post view.', 'influential' ),
		'section'  => 'blog_options',
	  ) );

	 // Show the single tags list
	  $wp_customize->add_setting( 'show_tags',  array(
		  'default' => 1,
		  'sanitize_callback' => 'influential_sanitize_checkbox',
		) );  
	  $wp_customize->add_control( 'show_tags', array(
		'type'     => 'checkbox',
		'priority' => 16,
		'label'    => __( 'Show Tags', 'influential' ),
		'description' => __( 'Show the tags list on the full post view.', 'influential' ),
		'section'  => 'blog_options',
	  ) );

	  // Show the single post nav
	  $wp_customize->add_setting( 'show_postnav',  array(
		  'default' => 1,
		  'sanitize_callback' => 'influential_sanitize_checkbox',
		) );  
	  $wp_customize->add_control( 'show_postnav', array(
		'type'     => 'checkbox',
		'priority' => 17,
		'label'    => __( 'Show Post Navigation', 'influential' ),
		'description' => __( 'Show the next previous navigation on the full post view.', 'influential' ),
		'section'  => 'blog_options',
	  ) );
	  
	 // Show the single author bio
	  $wp_customize->add_setting( 'show_authorbio',  array(
		  'default' => 1,
		  'sanitize_callback' => 'influential_sanitize_checkbox',
		) );  
	  $wp_customize->add_control( 'show_authorbio', array(
		'type'     => 'checkbox',
		'priority' => 18,
		'label'    => __( 'Show Author Bio', 'influential' ),
		'description' => __( 'Show the author bio information at the bottom of the full post view.', 'influential' ),
		'section'  => 'blog_options',
	  ) );

	// Setting group to show footer info on single
	  $wp_customize->add_setting( 'show_single_footer',   array(
		  'default' => 1,
		  'sanitize_callback' => 'influential_sanitize_checkbox',
		)
	  );  
	  $wp_customize->add_control( 'show_single_footer', array(
		'type'     => 'checkbox',
		'priority' => 19,
		'label'    => __( 'Show Full Post Footer Information', 'influential' ),
		'description' => __( 'Show the footer information such as tags, categories, and anything else all at once.', 'influential' ),
		'section'  => 'blog_options',
	  ) );	
	  
	// Setting group to show featured image on single
	  $wp_customize->add_setting( 'show_single_featured',   array(
		  'default' => 1,
		  'sanitize_callback' => 'influential_sanitize_checkbox',
		)
	  );  
	  $wp_customize->add_control( 'show_single_featured', array(
		'type'     => 'checkbox',
		'priority' => 20,
		'label'    => __( 'Show Full Post Featured Image', 'influential' ),
		'description' => __( 'Show the Featured Image on the full post view.', 'influential' ),
		'section'  => 'blog_options',
	  ) );	









		
/*
 * Lets add to the Colour section
 * Name: Colors
 */ 
 
 // body background
 	$wp_customize->add_setting( 'body_bg', array(
		'default'        => '#304c6f',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_bg', array(
		'label'   => __( 'Body Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'body_bg',
		'priority' => 1,			
	) ) );
 
 
// top area background
 	$wp_customize->add_setting( 'top_bg', array(
		'default'        => '#464646',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bg', array(
		'label'   => __( 'Top Area Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'top_bg',
		'priority' => 1,			
	) ) );

// top area text colour
 	$wp_customize->add_setting( 'top_text', array(
		'default'        => '#eaeaea',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_text', array(
		'label'   => __( 'Top Area Text Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'top_text',
		'priority' => 2,			
	) ) );	
	
// header background
 	$wp_customize->add_setting( 'header_bg', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg', array(
		'label'   => __( 'Header Background Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'header_bg',
		'priority' => 3,			
	) ) );		

// social icon
 	$wp_customize->add_setting( 'social_icon', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_icon', array(
		'label'   => __( 'Social Icon Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'social_icon',
		'priority' => 4,			
	) ) );		

// social icon hover
 	$wp_customize->add_setting( 'social_hicon', array(
		'default'        => '#ccc',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_hicon', array(
		'label'   => __( 'Social Icon Colour on Hover', 'influential' ),
		'section' => 'colors',
		'settings'   => 'social_hicon',
		'priority' => 5,			
	) ) );
	
//  site title colour
 	$wp_customize->add_setting( 'site_title_colour', array(
		'default'        => '#000',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_title_colour', array(
		'label'   => __( 'Site Title Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'site_title_colour',
		'priority' => 6,			
	) ) );	
	
// site tagline colour
 	$wp_customize->add_setting( 'tagline_colour', array(
		'default'        => '#676767',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tagline_colour', array(
		'label'   => __( 'Site Tagline Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'tagline_colour',
		'priority' => 6,			
	) ) );		

// header sidebar text
 	$wp_customize->add_setting( 'header_sidebar', array(
		'default'        => '#5d5d5d',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_sidebar', array(
		'label'   => __( 'Header Sidebar Text Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'header_sidebar',
		'priority' => 7,			
	) ) );	
	
// header style background
 	$wp_customize->add_setting( 'menu_bg', array(
		'default'        => '#304C6F',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_bg', array(
		'label'   => __( 'Menu Background Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'menu_bg',
		'priority' => 7,			
	) ) );		
	
// header style links
 	$wp_customize->add_setting( 'menu_link', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_link', array(
		'label'   => __( 'Menu Link Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'menu_link',
		'priority' => 8,			
	) ) );		

// header style active and hover
 	$wp_customize->add_setting( 'menu_hover', array(
		'default'        => '#91B5D4',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hover', array(
		'label'   => __( 'Menu Hover &amp; Active Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'menu_hover',
		'priority' => 9,			
	) ) );		
// header style submenu borders
 	$wp_customize->add_setting( 'submenu_borders', array(
		'default'        => '#2c3f57',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_borders', array(
		'label'   => __( 'Submenu Border Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'submenu_borders',
		'priority' => 10,			
	) ) );	
	
// header style links
 	$wp_customize->add_setting( 'header3_menu_link', array(
		'default'        => '#000',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header3_menu_link', array(
		'label'   => __( 'Header Style 3 Menu Link Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'header3_menu_link',
		'priority' => 11,			
	) ) );	

// header3 style submenu links
 	$wp_customize->add_setting( 'header3_submenu_link', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header3_submenu_link', array(
		'label'   => __( 'Header Style 3 SubMenu Links', 'influential' ),
		'section' => 'colors',
		'settings'   => 'header3_submenu_link',
		'priority' => 12,			
	) ) );
	
// header3 style menu hover links
 	$wp_customize->add_setting( 'header3_menu_hover', array(
		'default'        => '#3e89c6',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header3_menu_hover', array(
		'label'   => __( 'Header Style 3 Menu Hover &amp; Active Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'header3_menu_hover',
		'priority' => 13,			
	) ) );	
	
// header3 style submenu hover links
 	$wp_customize->add_setting( 'header3_submenu_hover', array(
		'default'        => '#91b5d4',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header3_submenu_hover', array(
		'label'   => __( 'Header Style 3 SubMenu Hover &amp; Active Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'header3_submenu_hover',
		'priority' => 14,			
	) ) );	
	
// header3 style mobile menu bg
 	$wp_customize->add_setting( 'header3_mobile_bg', array(
		'default'        => '#304c6f',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header3_mobile_bg', array(
		'label'   => __( 'Header Style 3 Mobile Menu Background Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'header3_mobile_bg',
		'priority' => 16,			
	) ) );		
	
// header3 style mobile menu borders
 	$wp_customize->add_setting( 'header3_mobile_borders', array(
		'default'        => '#2c3f57',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header3_mobile_borders', array(
		'label'   => __( 'Header Style 3 Mobile Menu Border Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'header3_mobile_borders',
		'priority' => 17,			
	) ) );	

// header3 style mobile submenu toggle
 	$wp_customize->add_setting( 'header3_mobile_submenu_toggle', array(
		'default'        => '#2c3f57',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header3_mobile_submenu_toggle', array(
		'label'   => __( 'Header Style 3 Mobile Menu Submenu Toggle', 'influential' ),
		'section' => 'colors',
		'settings'   => 'header3_mobile_submenu_toggle',
		'priority' => 18,			
	) ) );

// banner background
 	$wp_customize->add_setting( 'banner_bg', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'banner_bg', array(
		'label'   => __( 'Banner Background Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'banner_bg',
		'priority' => 20,			
	) ) );		
		
// cta background
 	$wp_customize->add_setting( 'cta_bg', array(
		'default'        => '#e0a132',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_bg', array(
		'label'   => __( 'CTA Background Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'cta_bg',
		'priority' => 21,			
	) ) );	
	
// cta text
 	$wp_customize->add_setting( 'cta_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_text', array(
		'label'   => __( 'CTA Text Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'cta_text',
		'priority' => 22,			
	) ) );			
	
// cta button bg
 	$wp_customize->add_setting( 'cta_button_bg', array(
		'default'        => '#2c3f57',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_button_bg', array(
		'label'   => __( 'CTA Button Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'cta_button_bg',
		'priority' => 23,			
	) ) );	

// cta button bg
 	$wp_customize->add_setting( 'cta_button_hover', array(
		'default'        => '#1e5080',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_button_hover', array(
		'label'   => __( 'CTA Button Hover Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'cta_button_hover',
		'priority' => 24,			
	) ) );


// cta button text
 	$wp_customize->add_setting( 'cta_button_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_button_text', array(
		'label'   => __( 'CTA Button Text Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'cta_button_text',
		'priority' => 25,			
	) ) );

// cta button hover text
 	$wp_customize->add_setting( 'cta_button_hover_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_button_hover_text', array(
		'label'   => __( 'CTA Button Text Hover Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'cta_button_hover_text',
		'priority' => 26,			
	) ) );	
	
// breadcrumbs background
 	$wp_customize->add_setting( 'breadcrumbs_bg', array(
		'default'        => '#f2f2f2',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumbs_bg', array(
		'label'   => __( 'Breadcrumbs Background Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'breadcrumbs_bg',
		'priority' => 27,			
	) ) );	
	
// breadcrumbs text
 	$wp_customize->add_setting( 'breadcrumbs_text', array(
		'default'        => '#9a9a9a',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumbs_text', array(
		'label'   => __( 'Breadcrumbs Text Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'breadcrumbs_text',
		'priority' => 28,			
	) ) );		
	
// breadcrumbs hover
 	$wp_customize->add_setting( 'breadcrumbs_hover', array(
		'default'        => '#333',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumbs_hover', array(
		'label'   => __( 'Breadcrumbs Hover Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'breadcrumbs_hover',
		'priority' => 29,			
	) ) );		
	
// bottom background
 	$wp_customize->add_setting( 'bottom_bg', array(
		'default'        => '#403f3f',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_bg', array(
		'label'   => __( 'Bottom Background Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'bottom_bg',
		'priority' => 30,			
	) ) );		
	
// bottom text
 	$wp_customize->add_setting( 'bottom_text', array(
		'default'        => '#b5b5b5',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_text', array(
		'label'   => __( 'Bottom Text Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'bottom_text',
		'priority' => 31,			
	) ) );	
	
// bottom links
 	$wp_customize->add_setting( 'bottom_links', array(
		'default'        => '#b5b5b5',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_links', array(
		'label'   => __( 'Bottom Link Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'bottom_links',
		'priority' => 32,			
	) ) );	
		
// bottom links on hover
 	$wp_customize->add_setting( 'bottom_hover', array(
		'default'        => '#ccc',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_hover', array(
		'label'   => __( 'Bottom Link Hover Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'bottom_hover',
		'priority' => 33,			
	) ) );	

// bottom list lines
 	$wp_customize->add_setting( 'bottom_list_lines', array(
		'default'        => '#525252',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_list_lines', array(
		'label'   => __( 'Bottom List Lines', 'influential' ),
		'section' => 'colors',
		'settings'   => 'bottom_list_lines',
		'priority' => 33,			
	) ) );

// bottom tags
 	$wp_customize->add_setting( 'bottom_tag_borders', array(
		'default'        => '#b5b5b5',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_tag_borders', array(
		'label'   => __( 'Bottom Tag Borders', 'influential' ),
		'section' => 'colors',
		'settings'   => 'bottom_tag_borders',
		'priority' => 33,			
	) ) );

// bottom tag hover background
 	$wp_customize->add_setting( 'bottom_tag_hover', array(
		'default'        => '#e0a132',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_tag_hover', array(
		'label'   => __( 'Bottom Tag Background on Hover', 'influential' ),
		'section' => 'colors',
		'settings'   => 'bottom_tag_hover',
		'priority' => 33,			
	) ) );

// bottom tag hover text
 	$wp_customize->add_setting( 'bottom_tag_texthover', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_tag_texthover', array(
		'label'   => __( 'Bottom Tag Text on Hover', 'influential' ),
		'section' => 'colors',
		'settings'   => 'bottom_tag_texthover',
		'priority' => 33,			
	) ) );

	
// footer background
 	$wp_customize->add_setting( 'footer_bg', array(
		'default'        => '#232323',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg', array(
		'label'   => __( 'Footer Background Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'footer_bg',
		'priority' => 34,			
	) ) );		
	
// footer text
 	$wp_customize->add_setting( 'footer_text', array(
		'default'        => '#b5b5b5',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text', array(
		'label'   => __( 'Footer Text Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'footer_text',
		'priority' => 35,			
	) ) );	
	
// footer links
 	$wp_customize->add_setting( 'footer_links', array(
		'default'        => '#b5b5b5',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_links', array(
		'label'   => __( 'Footer Link Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'footer_links',
		'priority' => 36,			
	) ) );	
		
// footer links on hover
 	$wp_customize->add_setting( 'footer_hover', array(
		'default'        => '#ccc',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_hover', array(
		'label'   => __( 'Footer Link Hover Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'footer_hover',
		'priority' => 37,			
	) ) );		

 // content background
 	$wp_customize->add_setting( 'content_bg', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_bg', array(
		'label'   => __( 'Content Area Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'content_bg',
		'priority' => 38,			
	) ) );	
	
 // content text
 	$wp_customize->add_setting( 'content_text', array(
		'default'        => '#535455',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_text', array(
		'label'   => __( 'Content Text Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'content_text',
		'priority' => 39,			
	) ) );		

 // showcase top background
 	$wp_customize->add_setting( 'showcase_top_bg', array(
		'default'        => '#dedede',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'showcase_top_bg', array(
		'label'   => __( 'Showcase Top Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'showcase_top_bg',
		'priority' => 40,			
	) ) );

 // showcase top text
 	$wp_customize->add_setting( 'showcase_top_text', array(
		'default'        => '#373a3c',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'showcase_top_text', array(
		'label'   => __( 'Showcase Top Text', 'influential' ),
		'section' => 'colors',
		'settings'   => 'showcase_top_text',
		'priority' => 41,			
	) ) );	
	
 // showcase bottom background
 	$wp_customize->add_setting( 'showcase_bottom_bg', array(
		'default'        => '#dedede',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'showcase_bottom_bg', array(
		'label'   => __( 'Showcase Bottom Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'showcase_bottom_bg',
		'priority' => 44,			
	) ) );		
	
 // showcase bottom background
 	$wp_customize->add_setting( 'showcase_bottom_text', array(
		'default'        => '#373a3c',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'showcase_bottom_text', array(
		'label'   => __( 'Showcase Bottom Text', 'influential' ),
		'section' => 'colors',
		'settings'   => 'showcase_bottom_text',
		'priority' => 45,			
	) ) );	
	
 // featured label background
 	$wp_customize->add_setting( 'featured_bg', array(
		'default'        => '#304c6f',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_bg', array(
		'label'   => __( 'Featured Label Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'featured_bg',
		'priority' => 46,			
	) ) );		
	
 // featured label text
 	$wp_customize->add_setting( 'featured_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_text', array(
		'label'   => __( 'Featured Label Text', 'influential' ),
		'section' => 'colors',
		'settings'   => 'featured_text',
		'priority' => 47,			
	) ) );		

 // blog meta info text
 	$wp_customize->add_setting( 'meta_text', array(
		'default'        => '#48678d',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'meta_text', array(
		'label'   => __( 'Meta Information Text Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'meta_text',
		'priority' => 48,			
	) ) );	
	
 // blog meta info line
 	$wp_customize->add_setting( 'meta_line', array(
		'default'        => '#dfe2e5',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'meta_line', array(
		'label'   => __( 'Meta Information Line Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'meta_line',
		'priority' => 49,			
	) ) );		
	
 // blog more link
 	$wp_customize->add_setting( 'more_link', array(
		'default'        => '#48678d',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'more_link', array(
		'label'   => __( 'Blog More Link Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'more_link',
		'priority' => 50,			
	) ) );	
	
 // blog more link on hover
 	$wp_customize->add_setting( 'more_hover', array(
		'default'        => '#698ab2',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'more_hover', array(
		'label'   => __( 'Blog More Link Hover Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'more_hover',
		'priority' => 51,			
	) ) );		
	
 // post nav background
 	$wp_customize->add_setting( 'post_nav_bg', array(
		'default'        => '#304c6f',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_nav_bg', array(
		'label'   => __( 'Full Post Navigation Background Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'post_nav_bg',
		'priority' => 52,			
	) ) );	
	
 // post nav text
 	$wp_customize->add_setting( 'post_nav_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_nav_text', array(
		'label'   => __( 'Full Post Navigation Text Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'post_nav_text',
		'priority' => 53,			
	) ) );		
	
 // post nav hover
 	$wp_customize->add_setting( 'post_nav_hover', array(
		'default'        => '#c4d1de',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_nav_hover', array(
		'label'   => __( 'Full Post Navigation Hover Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'post_nav_hover',
		'priority' => 54,			
	) ) );		
	
 // sidebar list borders
 	$wp_customize->add_setting( 'sidebar_list_lines', array(
		'default'        => '#e6e6e6',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_list_lines', array(
		'label'   => __( 'Sidebar List Lines', 'influential' ),
		'section' => 'colors',
		'settings'   => 'sidebar_list_lines',
		'priority' => 55,			
	) ) );		
	
 // sidebar tag borders
 	$wp_customize->add_setting( 'sidebar_tag_border', array(
		'default'        => '#d9d9d9',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_tag_border', array(
		'label'   => __( 'Sidebar Tag Border', 'influential' ),
		'section' => 'colors',
		'settings'   => 'sidebar_tag_border',
		'priority' => 55,			
	) ) );		
	
 // sidebar tag background on hover
 	$wp_customize->add_setting( 'sidebar_tag_bghover', array(
		'default'        => '#304c6f',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_tag_bghover', array(
		'label'   => __( 'Sidebar Tag Background Hover', 'influential' ),
		'section' => 'colors',
		'settings'   => 'sidebar_tag_bghover',
		'priority' => 56,			
	) ) );		
	
 // sidebar tag text on hover
 	$wp_customize->add_setting( 'sidebar_tag_texthover', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_tag_texthover', array(
		'label'   => __( 'Sidebar Tag Text Hover', 'influential' ),
		'section' => 'colors',
		'settings'   => 'sidebar_tag_texthover',
		'priority' => 57,			
	) ) );	
	
 // button background
 	$wp_customize->add_setting( 'button_bg', array(
		'default'        => '#e6e6e6',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_bg', array(
		'label'   => __( 'Button Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'button_bg',
		'priority' => 58,			
	) ) );

 // button text
 	$wp_customize->add_setting( 'button_text', array(
		'default'        => '#303030',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_text', array(
		'label'   => __( 'Button Text', 'influential' ),
		'section' => 'colors',
		'settings'   => 'button_text',
		'priority' => 59,			
	) ) );

 // button background hover
 	$wp_customize->add_setting( 'button_hoverbg', array(
		'default'        => '#304c6f',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_hoverbg', array(
		'label'   => __( 'Button Background Hover Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'button_hoverbg',
		'priority' => 60,			
	) ) );

 // button text hover
 	$wp_customize->add_setting( 'button_hovertext', array(
		'default'        => '#f2f2f2',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_hovertext', array(
		'label'   => __( 'Button Text Hover Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'button_hovertext',
		'priority' => 61,			
	) ) );

 // form field info text
 	$wp_customize->add_setting( 'input_info', array(
		'default'        => '#daaa6c',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'input_info', array(
		'label'   => __( 'Form Input Info Text Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'input_info',
		'priority' => 62,			
	) ) );

 // back to top background
 	$wp_customize->add_setting( 'back_top', array(
		'default'        => '#000',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'back_top', array(
		'label'   => __( 'Back To Top Icon Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'back_top',
		'priority' => 63,			
	) ) );

 // back to top icon
 	$wp_customize->add_setting( 'back_top_icon', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'back_top_icon', array(
		'label'   => __( 'Back To Top Icon', 'influential' ),
		'section' => 'colors',
		'settings'   => 'back_top_icon',
		'priority' => 64,			
	) ) );

 // back to top icon
 	$wp_customize->add_setting( 'back_top_hover', array(
		'default'        => '#304c6f',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'back_top_hover', array(
		'label'   => __( 'Back To Top Background on Hover', 'influential' ),
		'section' => 'colors',
		'settings'   => 'back_top_hover',
		'priority' => 64,			
	) ) );

 // author bio background
 	$wp_customize->add_setting( 'author_bio_bg', array(
		'default'        => '#f7f7f7',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'author_bio_bg', array(
		'label'   => __( 'Author Bio Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'author_bio_bg',
		'priority' => 65,			
	) ) );

 // author bio text
 	$wp_customize->add_setting( 'author_bio_text', array(
		'default'        => '#535455',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'author_bio_text', array(
		'label'   => __( 'Author Bio Text', 'influential' ),
		'section' => 'colors',
		'settings'   => 'author_bio_text',
		'priority' => 66,			
	) ) );

 // content links
 	$wp_customize->add_setting( 'content_links', array(
		'default'        => '#e2b009',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_links', array(
		'label'   => __( 'Main Content Link Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'content_links',
		'priority' => 67,			
	) ) );

 // content links on hover
 	$wp_customize->add_setting( 'content_hover_links', array(
		'default'        => '#b2995d',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_hover_links', array(
		'label'   => __( 'Main Content Link Hover Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'content_hover_links',
		'priority' => 68,			
	) ) );

 // entry title
 	$wp_customize->add_setting( 'entry_title', array(
		'default'        => '#4f6e94',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'entry_title', array(
		'label'   => __( 'Blog Post Entry Title Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'entry_title',
		'priority' => 69,			
	) ) );

 // portfolio caption box bg
 	$wp_customize->add_setting( 'portfolio_caption_bg', array(
		'default'        => '#e0a132',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_caption_bg', array(
		'label'   => __( 'Portfolio Caption Hover Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'portfolio_caption_bg',
		'priority' => 70,			
	) ) );

 // portfolio caption text
 	$wp_customize->add_setting( 'portfolio_caption_button', array(
		'default'        => '#2c3f57',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_caption_button', array(
		'label'   => __( 'Portfolio Caption Button Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'portfolio_caption_button',
		'priority' => 71,			
	) ) );	

 // portfolio caption title
 	$wp_customize->add_setting( 'portfolio_caption_hbutton', array(
		'default'        => '#1e5080',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_caption_hbutton', array(
		'label'   => __( 'Portfolio Caption Button on Hover', 'influential' ),
		'section' => 'colors',
		'settings'   => 'portfolio_caption_hbutton',
		'priority' => 72,			
	) ) );

	
// image attachment page background
 	$wp_customize->add_setting( 'attachment_page_bg', array(
		'default'        => '#212121',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'attachment_page_bg', array(
		'label'   => esc_html__( 'Attachment Page Image Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'attachment_page_bg',
		'priority' => 73,			
	) ) );	
	
// image attachment page navigation
 	$wp_customize->add_setting( 'attachment_page_nav', array(
		'default'        => '#b7ac9c',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'attachment_page_nav', array(
		'label'   => esc_html__( 'Attachment Page Image Navigation', 'influential' ),
		'section' => 'colors',
		'settings'   => 'attachment_page_nav',
		'priority' => 74,			
	) ) );	

// image caption background
 	$wp_customize->add_setting( 'caption_bg', array(
		'default'        => '#304c6f',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'caption_bg', array(
		'label'   => esc_html__( 'Image Caption Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'caption_bg',
		'priority' => 75,			
	) ) );	

// image caption
 	$wp_customize->add_setting( 'caption_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'caption_text', array(
		'label'   => esc_html__( 'Image Caption Text', 'influential' ),
		'section' => 'colors',
		'settings'   => 'caption_text',
		'priority' => 76,			
	) ) );	
	
// gallery caption background
 	$wp_customize->add_setting( 'gallery_caption_bg', array(
		'default'        => '#304c6f',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gallery_caption_bg', array(
		'label'   => esc_html__( 'Gallery Caption Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'gallery_caption_bg',
		'priority' => 77,			
	) ) );	

// gallery caption
 	$wp_customize->add_setting( 'gallery_caption_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gallery_caption_text', array(
		'label'   => esc_html__( 'Gallery Caption Text', 'influential' ),
		'section' => 'colors',
		'settings'   => 'gallery_caption_text',
		'priority' => 78,			
	) ) );	
	
// icon button border
 	$wp_customize->add_setting( 'icon_button_border', array(
		'default'        => '#f7c51d',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_button_border', array(
		'label'   => esc_html__( 'Icon Button Border', 'influential' ),
		'section' => 'colors',
		'settings'   => 'icon_button_border',
		'priority' => 79,			
	) ) );		
	
// icon button text
 	$wp_customize->add_setting( 'icon_button_text', array(
		'default'        => '#535455',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_button_text', array(
		'label'   => esc_html__( 'Icon Button Text', 'influential' ),
		'section' => 'colors',
		'settings'   => 'icon_button_text',
		'priority' => 80,			
	) ) );		
	
// icon button icon background
 	$wp_customize->add_setting( 'icon_button_icon_bg', array(
		'default'        => '#f7c51d',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_button_icon_bg', array(
		'label'   => esc_html__( 'Icon Button Icon Background', 'influential' ),
		'section' => 'colors',
		'settings'   => 'icon_button_icon_bg',
		'priority' => 81,			
	) ) );		
	
// icon button icon 
 	$wp_customize->add_setting( 'icon_button_icon', array(
		'default'        => '#202020',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'icon_button_icon', array(
		'label'   => esc_html__( 'Icon Button Icon', 'influential' ),
		'section' => 'colors',
		'settings'   => 'icon_button_icon',
		'priority' => 82,			
	) ) );	
	
// active widget menu link 
 	$wp_customize->add_setting( 'widgetmenu_active_colour', array(
		'default'        => '#e2b009',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'widgetmenu_active_colour', array(
		'label'   => esc_html__( 'Widget Menu Active Colour', 'influential' ),
		'section' => 'colors',
		'settings'   => 'widgetmenu_active_colour',
		'priority' => 83,			
	) ) );		
	
	
 /*
 * Widget Style Options
 */  
  $wp_customize->add_section( 'custom_widget_options', array(
      'title' => __( 'Widget Custom Style Options', 'influential' ),
	  'description' => __( 'This section is for adding your own custom colour for widgets. Use the plugin Widget CSS Classes for this.', 'influential' ),
	  'priority' => 82,
    )  );	
	
	
 // widget line and bar border style
 	$wp_customize->add_setting( 'custom_linestyle_line', array(
		'default'        => '#979a9e',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_linestyle_line', array(
		'label'   => __( 'Line Style Line Colour', 'influential' ),
		'description' => __( 'This is for the Line Style to change the line colour.', 'influential' ),
		'section' => 'custom_widget_options',
		'settings'   => 'custom_linestyle_line',
		'priority' => 1,			
	) ) );		

 // widget bar style border colour
 	$wp_customize->add_setting( 'custom_barstyle_border', array(
		'default'        => '#979a9e',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_barstyle_border', array(
		'label'   => __( 'Bar Style Border Colour', 'influential' ),
		'description' => __( 'This is for the widget Bar Style border colour.', 'influential' ),
		'section' => 'custom_widget_options',
		'settings'   => 'custom_barstyle_border',
		'priority' => 2,			
	) ) );	
		
 // widget box style background
 	$wp_customize->add_setting( 'custom_boxstyle_bg', array(
		'default'        => '#979a9e',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_boxstyle_bg', array(
		'label'   => __( 'Box Style Background Colour', 'influential' ),
		'description' => __( 'This is for the widget Box Style background colour.', 'influential' ),
		'section' => 'custom_widget_options',
		'settings'   => 'custom_boxstyle_bg',
		'priority' => 3,			
	) ) );	
	
 // widget box style text
 	$wp_customize->add_setting( 'custom_boxstyle_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_boxstyle_text', array(
		'label'   => __( 'Box Style Text & Link Colour', 'influential' ),
		'description' => __( 'This is for the Box Style text and link colour.', 'influential' ),
		'section' => 'custom_widget_options',
		'settings'   => 'custom_boxstyle_text',
		'priority' => 4,			
	) ) );	
	
 // widget box title line colour
 	$wp_customize->add_setting( 'custom_boxstyle_line', array(
		'default'        => '#b9b9b9',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_boxstyle_line', array(
		'label'   => __( 'Box Style Title Line', 'influential' ),
		'description' => __( 'This is for the Box Style title line colour.', 'influential' ),
		'section' => 'custom_widget_options',
		'settings'   => 'custom_boxstyle_line',
		'priority' => 5,			
	) ) );		

 // widget box style list line colour
 	$wp_customize->add_setting( 'custom_boxstyle_list_lines', array(
		'default'        => '#b9b9b9',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_boxstyle_list_lines', array(
		'label'   => __( 'Box Style List Borders', 'influential' ),
		'description' => __( 'This is for the Box Style line (borders) colour for lists.', 'influential' ),
		'section' => 'custom_widget_options',
		'settings'   => 'custom_boxstyle_list_lines',
		'priority' => 6,			
	) ) );		
	
 // widget box style link hover
 	$wp_customize->add_setting( 'custom_boxstyle_hover', array(
		'default'        => '#e8e8e8',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_boxstyle_hover', array(
		'label'   => __( 'Box Style Link Hover Colour', 'influential' ),
		'description' => __( 'This is for the Box Style link colour when hovering over.', 'influential' ),
		'section' => 'custom_widget_options',
		'settings'   => 'custom_boxstyle_hover',
		'priority' => 7,			
	) ) );	
	

/*
 * Typography Options
 */  
  $wp_customize->add_section( 'typography_options', array(
      'title' => __( 'Typography Options', 'influential' ),
	  'description' => __('This theme is setup to use Google Fonts and the Open Sans font is the default font being used. You can use these typography settings or use a font plugin for more flexibility.', 'influential'),
	  'priority' => 83,
    )  ); 

// Setting group to enable typography 
  $wp_customize->add_setting( 'enable_typography',	array(
 		'default' => 0,
		'sanitize_callback' => 'influential_sanitize_checkbox',
	) );  
  $wp_customize->add_control( 'enable_typography', array(
		'type'     => 'checkbox',
		'priority' => 1,
		'label'    => __( 'Turn on all Typography', 'influential' ),
		'description' => __( 'If you want to manage your own typography without a plugin, then check this box to enable the rest of the settings here, click Save and refresh this window.', 'influential' ),
		'section'  => 'typography_options',
  	) );
	
// Setting group to show the site title  
  	$wp_customize->add_setting( 'load_cyrillic_subset',  array(
		'default' => 0,
		'sanitize_callback' => 'influential_sanitize_checkbox'
   	 ) );  
 	 $wp_customize->add_control( 'load_cyrillic_subset', array(
		'type'     => 'checkbox',
		'section'  => 'typography_options',
		'priority' => 1,
		'label'    => __( 'Load Cyrillic Font Subsets', 'influential' ),
		'description' => __( 'If you need the Cyrillic font subsets loaded for the included Google Fonts of Open Sans and your custom fonts, then check this box.', 'influential' ),
 	 ) );	
 
// Setting group for the main body font
	$wp_customize->add_setting( 'second_google_font', array(
		'default' => '',
		'sanitize_callback' => 'influential_sanitize_text',
	) );
	$wp_customize->add_control( 'second_google_font', array(
		'settings' => 'second_google_font',
		'label'    => __( 'Add a Second Google Font', 'influential' ),
		'description' => __( 'This will add a second Google font to your website.', 'influential' ),
		'section'  => 'typography_options',		
		'type'     => 'text',
		'priority' => 3,
	) );

// Setting group for the heading font
	$wp_customize->add_setting( 'third_google_font', array(
		'default' => '',
		'sanitize_callback' => 'influential_sanitize_text',
	) );
	$wp_customize->add_control( 'third_google_font', array(
		'settings' => 'third_google_font',
		'label'    => __( 'Add a Third Google Font', 'influential' ),
		'description' => __( 'This will add a third Google Font to your website.', 'influential' ),
		'section'  => 'typography_options',		
		'type'     => 'text',
		'priority' => 4,
	) );
	
if( esc_attr(get_theme_mod( 'enable_typography', 0 ) ) ) :
    // main body content size
    $wp_customize->add_setting( 'body_font_size',  array(
            'sanitize_callback' => 'absint',
            'default'           => '100',
        ) );
    $wp_customize->add_control( 'body_font_size', array(
        'type'        => 'number',
        'priority'    => 6,
        'section'     => 'typography_options',
        'label'       => __('Body Font Size', 'influential'),
		'description' => __( 'This will change all fonts in your page by changing the main body font size using percent. Default is 100%', 'influential' ),
        'input_attrs' => array(
            'min'   => 100,
            'max'   => 200,
            'step'  => 1,
        ),
	) );
	
    // main content size
    $wp_customize->add_setting( 'main_content_font_size',  array(
            'sanitize_callback' => 'absint',
            'default'           => '81',
        ) );
    $wp_customize->add_control( 'main_content_font_size', array(
        'type'        => 'number',
        'priority'    => 7,
        'section'     => 'typography_options',
        'label'       => __('Main Content Font Size', 'influential'),
		'description' => __( 'This will change the main content font size only. Default is 81%', 'influential' ),
        'input_attrs' => array(
            'min'   => 81,
            'max'   => 200,
            'step'  => 1,
        ),
	) );

    // h1 size
    $wp_customize->add_setting( 'h1_font_size',  array(
            'sanitize_callback' => 'absint',
            'default'           => '210',
        ) );
    $wp_customize->add_control( 'h1_font_size', array(
        'type'        => 'number',
        'priority'    => 8,
        'section'     => 'typography_options',
        'label'       => __('H1 Font Size', 'influential'),
		'description' => __( 'This will change the H1 font size only. Default is 210%', 'influential' ),
        'input_attrs' => array(
            'min'   => 100,
            'max'   => 300,
            'step'  => 1,
        ),
	) );

    // h2 size
    $wp_customize->add_setting( 'h2_font_size',  array(
            'sanitize_callback' => 'absint',
            'default'           => '180',
        ) );
    $wp_customize->add_control( 'h2_font_size', array(
        'type'        => 'number',
        'priority'    => 9,
        'section'     => 'typography_options',
        'label'       => __('H2 Font Size', 'influential'),
		'description' => __( 'This will change the H2 font size only. Default is 180%', 'influential' ),
        'input_attrs' => array(
            'min'   => 100,
            'max'   => 300,
            'step'  => 1,
        ),
	) );

    // h3 size
    $wp_customize->add_setting( 'h3_font_size',  array(
            'sanitize_callback' => 'absint',
            'default'           => '160',
        ) );
    $wp_customize->add_control( 'h3_font_size', array(
        'type'        => 'number',
        'priority'    => 10,
        'section'     => 'typography_options',
        'label'       => __('H3 Font Size', 'influential'),
		'description' => __( 'This will change the H3 font size only. Default is 160%', 'influential' ),
        'input_attrs' => array(
            'min'   => 100,
            'max'   => 300,
            'step'  => 1,
        ),
	) );

    // h4 size
    $wp_customize->add_setting( 'h4_font_size',  array(
            'sanitize_callback' => 'absint',
            'default'           => '150',
        ) );
    $wp_customize->add_control( 'h4_font_size', array(
        'type'        => 'number',
        'priority'    => 11,
        'section'     => 'typography_options',
        'label'       => __('H4 Font Size', 'influential'),
		'description' => __( 'This will change the H4 font size only. Default is 150%', 'influential' ),
        'input_attrs' => array(
            'min'   => 100,
            'max'   => 300,
            'step'  => 1,
        ),
	) );

    // h5 size
    $wp_customize->add_setting( 'h5_font_size',  array(
            'sanitize_callback' => 'absint',
            'default'           => '140',
        ) );
    $wp_customize->add_control( 'h5_font_size', array(
        'type'        => 'number',
        'priority'    => 12,
        'section'     => 'typography_options',
        'label'       => __('H5 Font Size', 'influential'),
		'description' => __( 'This will change the H5 font size only. Default is 140%', 'influential' ),
        'input_attrs' => array(
            'min'   => 100,
            'max'   => 300,
            'step'  => 1,
        ),
	) );

    // h6 size
    $wp_customize->add_setting( 'h6_font_size',  array(
            'sanitize_callback' => 'absint',
            'default'           => '130',
        ) );
    $wp_customize->add_control( 'h6_font_size', array(
        'type'        => 'number',
        'priority'    => 13,
        'section'     => 'typography_options',
        'label'       => __('H6 Font Size', 'influential'),
		'description' => __( 'This will change the H6 font size only. Default is 130%', 'influential' ),
        'input_attrs' => array(
            'min'   => 100,
            'max'   => 300,
            'step'  => 1,
        ),
	) );
    // post summary title size
    $wp_customize->add_setting( 'post_title_font_size',  array(
            'sanitize_callback' => 'absint',
            'default'           => '170',
        ) );
    $wp_customize->add_control( 'post_title_font_size', array(
        'type'        => 'number',
        'priority'    => 14,
        'section'     => 'typography_options',
        'label'       => __('Blog Post Title Font Size', 'influential'),
		'description' => __( 'This will change the blog summary post title font size only. Default is 170%', 'influential' ),
        'input_attrs' => array(
            'min'   => 100,
            'max'   => 300,
            'step'  => 1,
        ),
	) );
	
    // widget title size
    $wp_customize->add_setting( 'widgettitle_font_size',  array(
            'sanitize_callback' => 'absint',
            'default'           => '120',
        ) );
    $wp_customize->add_control( 'widgettitle_font_size', array(
        'type'        => 'number',
        'priority'    => 14,
        'section'     => 'typography_options',
        'label'       => __('Widget Title Font Size', 'influential'),
		'description' => __( 'This will change the widget title font size only. Default is 120%', 'influential' ),
        'input_attrs' => array(
            'min'   => 100,
            'max'   => 300,
            'step'  => 1,
        ),
	) );
endif;

	 
 /*
 * wooCommerce Options
 */  
  $wp_customize->add_section( 'woo_options',    array(
      		'title' => __( 'WooCommerce Options', 'influential' ),
	 	 'priority' => 86,
    )  ); 
 
 // Setting group for page width 
  $wp_customize->add_setting( 'shop_layout', array(
      'default' => 'fullwidth',
      'sanitize_callback' => 'influential_sanitize_shop_layout',
    ) );  

$wp_customize->add_control( 'shop_layout', array(
		  'type' => 'radio',
		  'label' => __( 'Shop Layout', 'influential' ),
		  'section' => 'woo_options',
		  'priority' => 2,
		  'choices' => array(
			  'fullwidth'	 	=> __( 'Full Width', 'influential' ),
			  'fluidfullwidth'	 	=> __( 'Fluid Full Width', 'influential' ),
			  'leftsidebar' 	=> __( 'Left Column', 'influential' ),
			  'fluidleftsidebar' 	=> __( 'Fluid Left Column', 'influential' ),
			  'rightsidebar' 	=> __( 'Right Column', 'influential' ),
			  'fluidrightsidebar' 	=> __( 'Fluid Right Column', 'influential' ),
	) ) );
 
 // Setting group for page width 
  $wp_customize->add_setting( 'product_layout', array(
      'default' => 'fullwidth',
      'sanitize_callback' => 'influential_sanitize_product_layout',
    ) );  

$wp_customize->add_control( 'product_layout', array(
		  'type' => 'radio',
		  'label' => __( 'Single Product Layout', 'influential' ),
		  'section' => 'woo_options',
		  'priority' => 3,
		  'choices' => array(
			  'fullwidth'	 	=> __( 'Full Width', 'influential' ),
			  'leftsidebar' 	=> __( 'Left Column', 'influential' ),
			  'rightsidebar' 	=> __( 'Right Column', 'influential' ),
	) ) ); 		

 // wooCommerce button background
 	$wp_customize->add_setting( 'woo_button', array(
		'default'        => '#304c6f',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_button', array(
		'label'   => __( 'WooCommerce Button Colour', 'influential' ),
		'description' => __( 'This is the background colour for your WooCommerce buttons.', 'influential' ),
		'section' => 'woo_options',
		'settings'   => 'woo_button',
		'priority' => 4,			
	) ) );

 // wooCommerce button text
 	$wp_customize->add_setting( 'woo_button_text', array(
		'default'        => '#f2f2f2',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_button_text', array(
		'label'   => __( 'WooCommerce Button Text Colour', 'influential' ),
		'description' => __( 'This is the text label colour for your WooCommerce buttons.', 'influential' ),
		'section' => 'woo_options',
		'settings'   => 'woo_button_text',
		'priority' => 5,			
	) ) );		

 // wooCommerce button background hover
 	$wp_customize->add_setting( 'woo_button_hover', array(
		'default'        => '#e6e6e6',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_button_hover', array(
		'label'   => __( 'WooCommerce Button Hover Colour', 'influential' ),
		'description' => __( 'This is the button hover background colour for your WooCommerce buttons.', 'influential' ),
		'section' => 'woo_options',
		'settings'   => 'woo_button_hover',
		'priority' => 6,			
	) ) );

 // wooCommerce button text hover
 	$wp_customize->add_setting( 'woo_button_texthover', array(
		'default'        => '#303030',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_button_texthover', array(
		'label'   => __( 'WooCommerce Button Hover Text Colour', 'influential' ),
		'description' => __( 'This is the button hover text colour for your WooCommerce buttons.', 'influential' ),
		'section' => 'woo_options',
		'settings'   => 'woo_button_texthover',
		'priority' => 7,			
	) ) );

 // wooCommerce meta box background
 	$wp_customize->add_setting( 'woo_product_meta_bg', array(
		'default'        => '#f9f9f9',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_product_meta_bg', array(
		'label'   => __( 'WooCommerce Product Meta Background', 'influential' ),
		'description' => __( 'This is the background colour for your single product meta box background.', 'influential' ),
		'section' => 'woo_options',
		'settings'   => 'woo_product_meta_bg',
		'priority' => 8,			
	) ) );

 // wooCommerce meta box text
 	$wp_customize->add_setting( 'woo_product_meta_text', array(
		'default'        => '#181818',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_product_meta_text', array(
		'label'   => __( 'WooCommerce Product Meta Text', 'influential' ),
		'description' => __( 'This is the colour for your single product meta box text.', 'influential' ),
		'section' => 'woo_options',
		'settings'   => 'woo_product_meta_text',
		'priority' => 9,			
	) ) );

 // wooCommerce meta box links
 	$wp_customize->add_setting( 'woo_product_meta_links', array(
		'default'        => '#aaa',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_product_meta_links', array(
		'label'   => __( 'WooCommerce Product Meta Links', 'influential' ),
		'description' => __( 'This is the colour for your single product meta box links.', 'influential' ),
		'section' => 'woo_options',
		'settings'   => 'woo_product_meta_links',
		'priority' => 10,			
	) ) );

 // wooCommerce prices
 	$wp_customize->add_setting( 'woo_price_colour', array(
		'default'        => '#be9a4d',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_price_colour', array(
		'label'   => __( 'WooCommerce Price Colour', 'influential' ),
		'description' => __( 'This is the colour for your product prices.', 'influential' ),
		'section' => 'woo_options',
		'settings'   => 'woo_price_colour',
		'priority' => 11,			
	) ) );

 // wooCommerce tabs border 
 	$wp_customize->add_setting( 'woo_tabs_border', array(
		'default'        => '#e0e0e0',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_tabs_border', array(
		'label'   => __( 'WooCommerce Tab Border Colour', 'influential' ),
		'description' => __( 'This is the colour for the tabs bottom borders.', 'influential' ),
		'section' => 'woo_options',
		'settings'   => 'woo_tabs_border',
		'priority' => 12,			
	) ) );

 // wooCommerce cart header footer backgrounds
 	$wp_customize->add_setting( 'woo_header_footer_bg', array(
		'default'        => '#f2f2f2',
		'sanitize_callback' => 'influential_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'woo_header_footer_bg', array(
		'label'   => __( 'WooCommerce Cart Header &amp; Footer', 'influential' ),
		'description' => __( 'This is the colour for the cart header and footer background colours.', 'influential' ),
		'section' => 'woo_options',
		'settings'   => 'woo_header_footer_bg',
		'priority' => 13,			
	) ) );

	
 /*
 * bbPress Options
 */ 
if( esc_attr(get_theme_mod( 'add_bbpress', 0 ) ) ) : 
  $wp_customize->add_section( 'bbpress_options',    array(
      	'title' => __( 'bbPress Options', 'influential' ),
	 	'priority' => 87,
    )  ); 

// Setting for forum layout
	$wp_customize->add_setting( 'forum_layout', array(
		'default' => 'forumfull',
		'sanitize_callback' => 'influential_sanitize_forum_layout',
	) );
// Control for blog layout	
	$wp_customize->add_control( 'forum_layout', array(
	'label'   => __( 'Forum Layout', 'influential' ),
	'section' => 'bbpress_options',
	'priority' => 1,
	'type'    => 'radio',
		'choices' => array(			
			'forumfull' => __( 'Full Width Forum', 'influential' ),
			'forumfluidfull' => __( 'Fluid Full Width Forum', 'influential' ),
			'forumright' => __( 'Forum with a Right Sidebar', 'influential' ),
			'fluidforumright' => __( 'Fluid Forum with a Right Sidebar', 'influential' ),
			'forumleft' => __( 'Forum with a Left Sidebar', 'influential' ),
			'forumfluidleft' => __( 'Fluid Forum with a Left Sidebar', 'influential' ),
		),
	));
endif;

 /*
 * Landing Page Options
 */  
 
 $wp_customize->add_panel( 'landing_options', array(
 'priority'       => 88,
  'capability'     => 'edit_theme_options',
  'theme_supports' => '',
  'title'          => __('Landing Page Options', 'influential'),
  'description'    => __('Landing page options for each section.', 'influential'),
) );
	 
	 
	/*
	 * Add a sub panel for landing main content
	 * Includes all settings for the main content area
	 */
		 $wp_customize->add_section( 'landing_content', array(
			'priority'       => 10,
			'title'          => __('Landing Page Content', 'influential'),
			'description'    =>  __('Everything relating to the main content area of your landing page outside of the sections.', 'influential'),
			'panel'  => 'landing_options',
		) );	 
	 
	// Setting group to enable fluid main content 
		$wp_customize->add_setting( 'landing_content_fluid',  array(
			'default' => 0,
			'sanitize_callback' => 'influential_sanitize_checkbox'
		 ) );  
		 $wp_customize->add_control( 'landing_content_fluid', array(
			'type'     => 'checkbox',
			'section'  => 'landing_content',
			'priority' => 1,
			'label'    => __( 'Enable Fluid Width Content', 'influential' ),
			'description' => __( 'This enables the landing page main content area to be fluid (full width) instead of boxed.', 'influential' ),
		 ) );	 
			  
	/*
	 * Add a sub panel for section 1
	 * Includes all settings for section 1
	 */
		 $wp_customize->add_section( 'section_1', array(
			'priority'       => 11,
			'title'          => __('Section 1', 'influential'),
			'description'    =>  __('Options for section 1', 'influential'),
			'panel'  => 'landing_options',
		) );

	// Setting group to enable section 1  
		$wp_customize->add_setting( 'enable_section1_sidebars',  array(
			'default' => 0,
			'sanitize_callback' => 'influential_sanitize_checkbox'
		 ) );  
		 $wp_customize->add_control( 'enable_section1_sidebars', array(
			'type'     => 'checkbox',
			'section'  => 'section_1',
			'priority' => 1,
			'label'    => __( 'Enable Section 1', 'influential' ),
			'description' => __( 'This enables the landing page section 1 for sidebars', 'influential' ),
		 ) );
		
	// Setting group to enable fluid section 1  
		$wp_customize->add_setting( 'section1_fluid',  array(
			'default' => 0,
			'sanitize_callback' => 'influential_sanitize_checkbox'
		 ) );  
		 $wp_customize->add_control( 'section1_fluid', array(
			'type'     => 'checkbox',
			'section'  => 'section_1',
			'priority' => 2,
			'label'    => __( 'Make Section 1 Fluid', 'influential' ),
			'description' => __( 'This enables the landing page section 1 to be fluid in width.', 'influential' ),
		 ) );	

	// Setting group for section sidebar spacing
	$wp_customize->add_setting( 'section1_spacing', array(
		'default' => 'spacing',
		'sanitize_callback' => 'influential_sanitize_section1_spacing',
	) );  
	$wp_customize->add_control( 'section1_spacing', array(
		  'type' => 'radio',
		  'label' => __( 'Section 1 Spacing', 'influential' ),
		  'section' => 'section_1',
		  'priority' => 3,
		  'choices' => array(	
				'spacing' => __( 'Sidebar Spacing', 'influential' ),	 
				'no-spacing' => __( 'Sidebars without Spacing', 'influential' ), 
		) ) );	
		
	 // section 1 background
		$wp_customize->add_setting( 'section1_bg', array(
			'default'        => '#fff',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section1_bg', array(
			'label'   => __( 'Section 1 Background Colour', 'influential' ),
			'description' => __( 'This is the colour for the section 1 background.', 'influential' ),
			'section' => 'section_1',
			'settings'   => 'section1_bg',
			'priority' => 3,			
		) ) );	

	// section 1 padding
	$wp_customize->add_setting( 'section1_padding', array(
		'default'        => esc_html__( '20px 0', 'influential' ),
		'sanitize_callback' => 'influential_sanitize_text',
	) );
	$wp_customize->add_control( 'section1_padding', array(
		'settings' => 'section1_padding',
		'label'    => esc_html__( 'Section 1 Padding', 'influential' ),
		'description' => __( 'Adjust the padding space for this section. Default is 20px 0 where this represents 20px top and bottom and 0 left and right.', 'influential' ),
		'section'  => 'section_1',		
		'type'     => 'text',
		'priority' => 3,
	) ); 
	
	 // section 1 text
		$wp_customize->add_setting( 'section1_text', array(
			'default'        => '#535455',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section1_text', array(
			'label'   => __( 'Section 1 Text Colour', 'influential' ),
			'description' => __( 'This is the text colour for section 1.', 'influential' ),
			'section' => 'section_1',
			'settings'   => 'section1_text',
			'priority' => 4,			
		) ) );	
	
	 // section 1 links
		$wp_customize->add_setting( 'section1_links', array(
			'default'        => '#e2b009',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section1_links', array(
			'label'   => __( 'Section 1 Link Colour', 'influential' ),
			'description' => __( 'This is the link colour for section 1.', 'influential' ),
			'section' => 'section_1',
			'settings'   => 'section1_links',
			'priority' => 5,			
		) ) );	

	 // section 1 links
		$wp_customize->add_setting( 'section1_links_hover', array(
			'default'        => '#e2b009',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section1_links_hover', array(
			'label'   => __( 'Section 1 Link Hover Colour', 'influential' ),
			'description' => __( 'This is the link hover colour for section 1.', 'influential' ),
			'section' => 'section_1',
			'settings'   => 'section1_links_hover',
			'priority' => 5,			
		) ) );	
		
	 // section 1 headings
		$wp_customize->add_setting( 'section1_headings', array(
			'default'        => '#223246',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section1_headings', array(
			'label'   => __( 'Section 1 Widget Heading Colour', 'influential' ),
			'description' => __( 'This is the heading colour for section 1.', 'influential' ),
			'section' => 'section_1',
			'settings'   => 'section1_headings',
			'priority' => 6,			
		) ) );		
	
	
	/*
	 * Add a sub panel for section 2
	 * Includes all settings for section 2
	 */
		 $wp_customize->add_section( 'section_2', array(
			'priority'       => 12,
			'title'          => __('Section 2', 'influential'),
			'description'    =>  __('Options for section 2', 'influential'),
			'panel'  => 'landing_options',
		) );

	// Setting group to enable section 1  
		$wp_customize->add_setting( 'enable_section2_sidebars',  array(
			'default' => 0,
			'sanitize_callback' => 'influential_sanitize_checkbox'
		 ) );  
		 $wp_customize->add_control( 'enable_section2_sidebars', array(
			'type'     => 'checkbox',
			'section'  => 'section_2',
			'priority' => 1,
			'label'    => __( 'Enable Section 2', 'influential' ),
			'description' => __( 'This enables the landing page section 2 for sidebars', 'influential' ),
		 ) );
		
	// Setting group to enable fluid section 2  
		$wp_customize->add_setting( 'section2_fluid',  array(
			'default' => 0,
			'sanitize_callback' => 'influential_sanitize_checkbox'
		 ) );  
		 $wp_customize->add_control( 'section2_fluid', array(
			'type'     => 'checkbox',
			'section'  => 'section_2',
			'priority' => 2,
			'label'    => __( 'Make Section 2 Fluid', 'influential' ),
			'description' => __( 'This enables the landing page section 2 to be fluid in width.', 'influential' ),
		 ) );	

	// Setting group for section sidebar spacing
	$wp_customize->add_setting( 'section2_spacing', array(
		'default' => 'spacing',
		'sanitize_callback' => 'influential_sanitize_section2_spacing',
	) );  
	$wp_customize->add_control( 'section2_spacing', array(
		  'type' => 'radio',
		  'label' => __( 'Section 2 Spacing', 'influential' ),
		  'section' => 'section_2',
		  'priority' => 3,
		  'choices' => array(	
				'spacing' => __( 'Sidebar Spacing', 'influential' ),	 
				'no-spacing' => __( 'Sidebars without Spacing', 'influential' ), 
		) ) );
		
	 // section 2 background
		$wp_customize->add_setting( 'section2_bg', array(
			'default'        => '#fff',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section2_bg', array(
			'label'   => __( 'Section 2 Background Colour', 'influential' ),
			'description' => __( 'This is the colour for the section 2 background.', 'influential' ),
			'section' => 'section_2',
			'settings'   => 'section2_bg',
			'priority' => 3,			
		) ) );	

	// section 2 padding
	$wp_customize->add_setting( 'section2_padding', array(
		'default'        => esc_html__( '20px 0', 'influential' ),
		'sanitize_callback' => 'influential_sanitize_text',
	) );
	$wp_customize->add_control( 'section2_padding', array(
		'settings' => 'section2_padding',
		'label'    => esc_html__( 'Section 2 Padding', 'influential' ),
		'description' => __( 'Adjust the padding space for this section. Default is 20px 0 where this represents 20px top and bottom and 0 left and right.', 'influential' ),
		'section'  => 'section_2',		
		'type'     => 'text',
		'priority' => 3,
	) ); 
	
	 // section 2 text
		$wp_customize->add_setting( 'section2_text', array(
			'default'        => '#535455',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section2_text', array(
			'label'   => __( 'Section 2 Text Colour', 'influential' ),
			'description' => __( 'This is the text colour for section 2.', 'influential' ),
			'section' => 'section_2',
			'settings'   => 'section2_text',
			'priority' => 4,			
		) ) );	
	
	 // section 2 links
		$wp_customize->add_setting( 'section2_links', array(
			'default'        => '#e2b009',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section2_links', array(
			'label'   => __( 'Section 2 Link Colour', 'influential' ),
			'description' => __( 'This is the link colour for section 2.', 'influential' ),
			'section' => 'section_2',
			'settings'   => 'section2_links',
			'priority' => 5,			
		) ) );	

	 // section 2 links
		$wp_customize->add_setting( 'section2_links_hover', array(
			'default'        => '#e2b009',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section2_links_hover', array(
			'label'   => __( 'Section 2 Link Hover Colour', 'influential' ),
			'description' => __( 'This is the link hover colour for section 2.', 'influential' ),
			'section' => 'section_2',
			'settings'   => 'section2_links_hover',
			'priority' => 5,			
		) ) );	
		
	 // section 2 headings
		$wp_customize->add_setting( 'section2_headings', array(
			'default'        => '#223246',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section2_headings', array(
			'label'   => __( 'Section 2 Widget Heading Colour', 'influential' ),
			'description' => __( 'This is the heading colour for section 2.', 'influential' ),
			'section' => 'section_2',
			'settings'   => 'section2_headings',
			'priority' => 6,			
		) ) );		
	
	/*
	 * Add a sub panel for section 3
	 * Includes all settings for section 3
	 */
		 $wp_customize->add_section( 'section_3', array(
			'priority'       => 13,
			'title'          => __('Section 3', 'influential'),
			'description'    =>  __('Options for section 3', 'influential'),
			'panel'  => 'landing_options',
		) );

	// Setting group to enable section 3  
		$wp_customize->add_setting( 'enable_section3_sidebars',  array(
			'default' => 0,
			'sanitize_callback' => 'influential_sanitize_checkbox'
		 ) );  
		 $wp_customize->add_control( 'enable_section3_sidebars', array(
			'type'     => 'checkbox',
			'section'  => 'section_3',
			'priority' => 1,
			'label'    => __( 'Enable Section 3', 'influential' ),
			'description' => __( 'This enables the landing page section 3 for sidebars', 'influential' ),
		 ) );
		
	// Setting group to enable fluid section 3  
		$wp_customize->add_setting( 'section3_fluid',  array(
			'default' => 0,
			'sanitize_callback' => 'influential_sanitize_checkbox'
		 ) );  
		 $wp_customize->add_control( 'section3_fluid', array(
			'type'     => 'checkbox',
			'section'  => 'section_3',
			'priority' => 2,
			'label'    => __( 'Make Section 3 Fluid', 'influential' ),
			'description' => __( 'This enables the landing page section 3 to be fluid in width.', 'influential' ),
		 ) );	

	// Setting group for section sidebar spacing
	$wp_customize->add_setting( 'section3_spacing', array(
		'default' => 'spacing',
		'sanitize_callback' => 'influential_sanitize_section3_spacing',
	) );  
	$wp_customize->add_control( 'section3_spacing', array(
		  'type' => 'radio',
		  'label' => __( 'Section 3 Spacing', 'influential' ),
		  'section' => 'section_3',
		  'priority' => 3,
		  'choices' => array(	
				'spacing' => __( 'Sidebar Spacing', 'influential' ),	 
				'no-spacing' => __( 'Sidebars without Spacing', 'influential' ), 
		) ) );
		
	 // section 3 background
		$wp_customize->add_setting( 'section3_bg', array(
			'default'        => '#fff',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section3_bg', array(
			'label'   => __( 'Section 3 Background Colour', 'influential' ),
			'description' => __( 'This is the colour for the section 3 background.', 'influential' ),
			'section' => 'section_3',
			'settings'   => 'section3_bg',
			'priority' => 3,			
		) ) );	

	// section 3 padding
	$wp_customize->add_setting( 'section3_padding', array(
		'default'        => esc_html__( '20px 0', 'influential' ),
		'sanitize_callback' => 'influential_sanitize_text',
	) );
	$wp_customize->add_control( 'section3_padding', array(
		'settings' => 'section3_padding',
		'label'    => esc_html__( 'Section 3 Padding', 'influential' ),
		'description' => __( 'Adjust the padding space for this section. Default is 20px 0 where this represents 20px top and bottom and 0 left and right.', 'influential' ),
		'section'  => 'section_3',		
		'type'     => 'text',
		'priority' => 3,
	) ); 
	
	 // section 3 text
		$wp_customize->add_setting( 'section3_text', array(
			'default'        => '#535455',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section3_text', array(
			'label'   => __( 'Section 3 Text Colour', 'influential' ),
			'description' => __( 'This is the text colour for section 3.', 'influential' ),
			'section' => 'section_3',
			'settings'   => 'section3_text',
			'priority' => 4,			
		) ) );	
	
	 // section 3 links
		$wp_customize->add_setting( 'section3_links', array(
			'default'        => '#e2b009',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section3_links', array(
			'label'   => __( 'Section 3 Link Colour', 'influential' ),
			'description' => __( 'This is the link colour for section 3.', 'influential' ),
			'section' => 'section_3',
			'settings'   => 'section3_links',
			'priority' => 5,			
		) ) );	

	 // section 3 links
		$wp_customize->add_setting( 'section3_links_hover', array(
			'default'        => '#e2b009',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section3_links_hover', array(
			'label'   => __( 'Section 3 Link Hover Colour', 'influential' ),
			'description' => __( 'This is the link hover colour for section 3.', 'influential' ),
			'section' => 'section_3',
			'settings'   => 'section3_links_hover',
			'priority' => 5,			
		) ) );	
		
	 // section 3 headings
		$wp_customize->add_setting( 'section3_headings', array(
			'default'        => '#223246',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section3_headings', array(
			'label'   => __( 'Section 3 Widget Heading Colour', 'influential' ),
			'description' => __( 'This is the heading colour for section 3.', 'influential' ),
			'section' => 'section_3',
			'settings'   => 'section3_headings',
			'priority' => 6,			
		) ) );		
	
	/*
	 * Add a sub panel for section 4
	 * Includes all settings for section 4
	 */
		 $wp_customize->add_section( 'section_4', array(
			'priority'       => 14,
			'title'          => __('Section 4', 'influential'),
			'description'    =>  __('Options for section 4', 'influential'),
			'panel'  => 'landing_options',
		) );

	// Setting group to enable section 4  
		$wp_customize->add_setting( 'enable_section4_sidebars',  array(
			'default' => 0,
			'sanitize_callback' => 'influential_sanitize_checkbox'
		 ) );  
		 $wp_customize->add_control( 'enable_section4_sidebars', array(
			'type'     => 'checkbox',
			'section'  => 'section_4',
			'priority' => 1,
			'label'    => __( 'Enable Section 4', 'influential' ),
			'description' => __( 'This enables the landing page section 4 for sidebars', 'influential' ),
		 ) );
		
	// Setting group to enable fluid section 4  
		$wp_customize->add_setting( 'section4_fluid',  array(
			'default' => 0,
			'sanitize_callback' => 'influential_sanitize_checkbox'
		 ) );  
		 $wp_customize->add_control( 'section4_fluid', array(
			'type'     => 'checkbox',
			'section'  => 'section_4',
			'priority' => 2,
			'label'    => __( 'Make Section 4 Fluid', 'influential' ),
			'description' => __( 'This enables the landing page section 4 to be fluid in width.', 'influential' ),
		 ) );	

	// Setting group for section sidebar spacing
	$wp_customize->add_setting( 'section4_spacing', array(
		'default' => 'spacing',
		'sanitize_callback' => 'influential_sanitize_section4_spacing',
	) );  
	$wp_customize->add_control( 'section4_spacing', array(
		  'type' => 'radio',
		  'label' => __( 'Section 4 Spacing', 'influential' ),
		  'section' => 'section_4',
		  'priority' => 3,
		  'choices' => array(	
				'spacing' => __( 'Sidebar Spacing', 'influential' ),	 
				'no-spacing' => __( 'Sidebars without Spacing', 'influential' ), 
		) ) );
		
	 // section 4 background
		$wp_customize->add_setting( 'section4_bg', array(
			'default'        => '#fff',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section4_bg', array(
			'label'   => __( 'Section 4 Background Colour', 'influential' ),
			'description' => __( 'This is the colour for the section 4 background.', 'influential' ),
			'section' => 'section_4',
			'settings'   => 'section4_bg',
			'priority' => 3,			
		) ) );	

	// section 4 padding
	$wp_customize->add_setting( 'section4_padding', array(
		'default'        => esc_html__( '20px 0', 'influential' ),
		'sanitize_callback' => 'influential_sanitize_text',
	) );
	$wp_customize->add_control( 'section4_padding', array(
		'settings' => 'section4_padding',
		'label'    => esc_html__( 'Section 4 Padding', 'influential' ),
		'description' => __( 'Adjust the padding space for this section. Default is 20px 0 where this represents 20px top and bottom and 0 left and right.', 'influential' ),
		'section'  => 'section_4',		
		'type'     => 'text',
		'priority' => 3,
	) ); 
	
	 // section 4 text
		$wp_customize->add_setting( 'section4_text', array(
			'default'        => '#535455',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section4_text', array(
			'label'   => __( 'Section 4 Text Colour', 'influential' ),
			'description' => __( 'This is the text colour for section 4.', 'influential' ),
			'section' => 'section_4',
			'settings'   => 'section4_text',
			'priority' => 4,			
		) ) );	
	
	 // section 4 links
		$wp_customize->add_setting( 'section4_links', array(
			'default'        => '#e2b009',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section4_links', array(
			'label'   => __( 'Section 4 Link Colour', 'influential' ),
			'description' => __( 'This is the link colour for section 4.', 'influential' ),
			'section' => 'section_4',
			'settings'   => 'section4_links',
			'priority' => 5,			
		) ) );	

	 // section 4 links
		$wp_customize->add_setting( 'section4_links_hover', array(
			'default'        => '#e2b009',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section4_links_hover', array(
			'label'   => __( 'Section 4 Link Hover Colour', 'influential' ),
			'description' => __( 'This is the link hover colour for section 4.', 'influential' ),
			'section' => 'section_4',
			'settings'   => 'section4_links_hover',
			'priority' => 5,			
		) ) );	
		
	 // section 4 headings
		$wp_customize->add_setting( 'section4_headings', array(
			'default'        => '#223246',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section4_headings', array(
			'label'   => __( 'Section 4 Widget Heading Colour', 'influential' ),
			'description' => __( 'This is the heading colour for section 4.', 'influential' ),
			'section' => 'section_4',
			'settings'   => 'section4_headings',
			'priority' => 6,			
		) ) );		
	
	/*
	 * Add a sub panel for section 5
	 * Includes all settings for section 5
	 */
		 $wp_customize->add_section( 'section_5', array(
			'priority'       => 15,
			'title'          => __('Section 5', 'influential'),
			'description'    =>  __('Options for section 5', 'influential'),
			'panel'  => 'landing_options',
		) );

	// Setting group to enable section 5  
		$wp_customize->add_setting( 'enable_section5_sidebars',  array(
			'default' => 0,
			'sanitize_callback' => 'influential_sanitize_checkbox'
		 ) );  
		 $wp_customize->add_control( 'enable_section5_sidebars', array(
			'type'     => 'checkbox',
			'section'  => 'section_5',
			'priority' => 1,
			'label'    => __( 'Enable Section 5', 'influential' ),
			'description' => __( 'This enables the landing page section 5 for sidebars', 'influential' ),
		 ) );
		
	// Setting group to enable fluid section 5  
		$wp_customize->add_setting( 'section5_fluid',  array(
			'default' => 0,
			'sanitize_callback' => 'influential_sanitize_checkbox'
		 ) );  
		 $wp_customize->add_control( 'section5_fluid', array(
			'type'     => 'checkbox',
			'section'  => 'section_5',
			'priority' => 2,
			'label'    => __( 'Make Section 5 Fluid', 'influential' ),
			'description' => __( 'This enables the landing page section 5 to be fluid in width.', 'influential' ),
		 ) );	

	// Setting group for section sidebar spacing
	$wp_customize->add_setting( 'section5_spacing', array(
		'default' => 'spacing',
		'sanitize_callback' => 'influential_sanitize_section5_spacing',
	) );  
	$wp_customize->add_control( 'section5_spacing', array(
		  'type' => 'radio',
		  'label' => __( 'Section 5 Spacing', 'influential' ),
		  'section' => 'section_5',
		  'priority' => 3,
		  'choices' => array(	
				'spacing' => __( 'Sidebar Spacing', 'influential' ),	 
				'no-spacing' => __( 'Sidebars without Spacing', 'influential' ), 
		) ) );
	
	 // section 5 background
		$wp_customize->add_setting( 'section5_bg', array(
			'default'        => '#fff',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section5_bg', array(
			'label'   => __( 'Section 5 Background Colour', 'influential' ),
			'description' => __( 'This is the colour for the section 5 background.', 'influential' ),
			'section' => 'section_5',
			'settings'   => 'section5_bg',
			'priority' => 3,			
		) ) );	

	// section 5 padding
	$wp_customize->add_setting( 'section5_padding', array(
		'default'        => esc_html__( '20px 0', 'influential' ),
		'sanitize_callback' => 'influential_sanitize_text',
	) );
	$wp_customize->add_control( 'section5_padding', array(
		'settings' => 'section5_padding',
		'label'    => esc_html__( 'Section 5 Padding', 'influential' ),
		'description' => __( 'Adjust the padding space for this section. Default is 20px 0 where this represents 20px top and bottom and 0 left and right.', 'influential' ),
		'section'  => 'section_5',		
		'type'     => 'text',
		'priority' => 3,
	) ); 	
	
	 // section 5 text
		$wp_customize->add_setting( 'section5_text', array(
			'default'        => '#535455',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section5_text', array(
			'label'   => __( 'Section 5 Text Colour', 'influential' ),
			'description' => __( 'This is the text colour for section 5.', 'influential' ),
			'section' => 'section_5',
			'settings'   => 'section5_text',
			'priority' => 4,			
		) ) );	
	
	 // section 5 links
		$wp_customize->add_setting( 'section5_links', array(
			'default'        => '#e2b009',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section5_links', array(
			'label'   => __( 'Section 5 Link Colour', 'influential' ),
			'description' => __( 'This is the link colour for section 5.', 'influential' ),
			'section' => 'section_5',
			'settings'   => 'section5_links',
			'priority' => 5,			
		) ) );	

	 // section 5 links
		$wp_customize->add_setting( 'section5_links_hover', array(
			'default'        => '#e2b009',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section5_links_hover', array(
			'label'   => __( 'Section 5 Link Hover Colour', 'influential' ),
			'description' => __( 'This is the link hover colour for section 5.', 'influential' ),
			'section' => 'section_5',
			'settings'   => 'section5_links_hover',
			'priority' => 5,			
		) ) );	
		
	 // section 5 headings
		$wp_customize->add_setting( 'section5_headings', array(
			'default'        => '#223246',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section5_headings', array(
			'label'   => __( 'Section 5 Widget Heading Colour', 'influential' ),
			'description' => __( 'This is the heading colour for section 5.', 'influential' ),
			'section' => 'section_5',
			'settings'   => 'section5_headings',
			'priority' => 6,			
		) ) );		
	
	/*
	 * Add a sub panel for section 6
	 * Includes all settings for section 6
	 */
		 $wp_customize->add_section( 'section_6', array(
			'priority'       => 16,
			'title'          => __('Section 6', 'influential'),
			'description'    =>  __('Options for section 6', 'influential'),
			'panel'  => 'landing_options',
		) );

	// Setting group to enable section 6  
		$wp_customize->add_setting( 'enable_section6_sidebars',  array(
			'default' => 0,
			'sanitize_callback' => 'influential_sanitize_checkbox'
		 ) );  
		 $wp_customize->add_control( 'enable_section6_sidebars', array(
			'type'     => 'checkbox',
			'section'  => 'section_6',
			'priority' => 1,
			'label'    => __( 'Enable Section 6', 'influential' ),
			'description' => __( 'This enables the landing page section 6 for sidebars', 'influential' ),
		 ) );
		
	// Setting group to enable fluid section 6  
		$wp_customize->add_setting( 'section6_fluid',  array(
			'default' => 0,
			'sanitize_callback' => 'influential_sanitize_checkbox'
		 ) );  
		 $wp_customize->add_control( 'section6_fluid', array(
			'type'     => 'checkbox',
			'section'  => 'section_6',
			'priority' => 2,
			'label'    => __( 'Make Section 6 Fluid', 'influential' ),
			'description' => __( 'This enables the landing page section 6 to be fluid in width.', 'influential' ),
		 ) );	

	// Setting group for section sidebar spacing
	$wp_customize->add_setting( 'section6_spacing', array(
		'default' => 'spacing',
		'sanitize_callback' => 'influential_sanitize_section6_spacing',
	) );  
	$wp_customize->add_control( 'section6_spacing', array(
		  'type' => 'radio',
		  'label' => __( 'Section 6 Spacing', 'influential' ),
		  'section' => 'section_6',
		  'priority' => 3,
		  'choices' => array(	
				'spacing' => __( 'Sidebar Spacing', 'influential' ),	 
				'no-spacing' => __( 'Sidebars without Spacing', 'influential' ), 
		) ) );
		
	 // section 6 background
		$wp_customize->add_setting( 'section6_bg', array(
			'default'        => '#fff',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section6_bg', array(
			'label'   => __( 'Section 6 Background Colour', 'influential' ),
			'description' => __( 'This is the colour for the section 6 background.', 'influential' ),
			'section' => 'section_6',
			'settings'   => 'section6_bg',
			'priority' => 3,			
		) ) );	

	// section 6 padding
	$wp_customize->add_setting( 'section6_padding', array(
		'default'        => esc_html__( '20px 0', 'influential' ),
		'sanitize_callback' => 'influential_sanitize_text',
	) );
	$wp_customize->add_control( 'section6_padding', array(
		'settings' => 'section6_padding',
		'label'    => esc_html__( 'Section 6 Padding', 'influential' ),
		'description' => __( 'Adjust the padding space for this section. Default is 20px 0 where this represents 20px top and bottom and 0 left and right.', 'influential' ),
		'section'  => 'section_6',		
		'type'     => 'text',
		'priority' => 3,
	) ); 
	
	 // section 6 text
		$wp_customize->add_setting( 'section6_text', array(
			'default'        => '#535455',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section6_text', array(
			'label'   => __( 'Section 6 Text Colour', 'influential' ),
			'description' => __( 'This is the text colour for section 6.', 'influential' ),
			'section' => 'section_6',
			'settings'   => 'section6_text',
			'priority' => 4,			
		) ) );	
	
	 // section 6 links
		$wp_customize->add_setting( 'section6_links', array(
			'default'        => '#e2b009',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section6_links', array(
			'label'   => __( 'Section 6 Link Colour', 'influential' ),
			'description' => __( 'This is the link colour for section 6.', 'influential' ),
			'section' => 'section_6',
			'settings'   => 'section6_links',
			'priority' => 5,			
		) ) );	

	 // section 6 links
		$wp_customize->add_setting( 'section6_links_hover', array(
			'default'        => '#e2b009',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section6_links_hover', array(
			'label'   => __( 'Section 6 Link Hover Colour', 'influential' ),
			'description' => __( 'This is the link hover colour for section 6.', 'influential' ),
			'section' => 'section_6',
			'settings'   => 'section6_links_hover',
			'priority' => 5,			
		) ) );	
		
	 // section 6 headings
		$wp_customize->add_setting( 'section6_headings', array(
			'default'        => '#223246',
			'sanitize_callback' => 'influential_sanitize_hex_colour',
		) );	
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section6_headings', array(
			'label'   => __( 'Section 6 Widget Heading Colour', 'influential' ),
			'description' => __( 'This is the heading colour for section 6.', 'influential' ),
			'section' => 'section_6',
			'settings'   => 'section6_headings',
			'priority' => 6,			
		) ) );		
	


	
	
}
add_action( 'customize_register', 'influential_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function influential_customize_preview_js() {
	wp_enqueue_script( 'influential_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'influential_customize_preview_js' );




/******************************* SANITIZATION ********************************
Remember to sanitize any additional theme settings you add to the customizer.
*********************************************************************************/
 
// adds sanitization callback function : checkbox
if ( ! function_exists( 'influential_sanitize_checkbox' ) ) :
	function influential_sanitize_checkbox( $input ) {
		if ( $input == 1 ) {
			return 1;
		} else {
			return '';
		}
	}	 
endif;

// adds sanitization callback function : text 
if ( ! function_exists( 'influential_sanitize_text' ) ) :
	function influential_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
	}
endif;

// adds sanitization callback function : colours
if ( ! function_exists( 'influential_sanitize_hex_colour' ) ) :
	function influential_sanitize_hex_colour( $color ) {
		if ( $unhashed = sanitize_hex_color_no_hash( $color ) )
			return '#' . $unhashed;
	
		return $color;
	}
endif;

// adds sanitization callback function : absolute integer
if ( ! function_exists( 'influential_sanitize_integer' ) ) :
function influential_sanitize_integer( $input ) {
	return absint( $input );
}
endif;

// adds sanitization callback function for header style
if ( ! function_exists( 'influential_sanitize_headerstyle' ) ) :
  function influential_sanitize_headerstyle( $value ) {
    $header_style = array( 'header1', 'header2', 'header3' );
    if ( ! in_array( $value, $header_style ) ) {
      $value = 'header1';
    }
    return $value;
  }
endif;

// adds sanitization callback function for blog style
if ( ! function_exists( 'influential_sanitize_blogstyle' ) ) :
  function influential_sanitize_blogstyle( $value ) {
    $blog_style = array( 'blog1', 'blog2', 'blog3','blog4','blog5','blog6' );
    if ( ! in_array( $value, $blog_style ) ) {
      $value = 'blog1';
    }
    return $value;
  }
endif;

// adds sanitization callback function for single style
if ( ! function_exists( 'influential_sanitize_singlestyle' ) ) :
  function influential_sanitize_singlestyle( $value ) {
    $single_style = array( 'single1', 'single2', 'single3' );
    if ( ! in_array( $value, $single_style ) ) {
      $value = 'single1';
    }
    return $value;
  }
endif;

// adds sanitization callback function for background size
if ( ! function_exists( 'influential_sanitize_background_size' ) ) :
  function influential_sanitize_background_size( $value ) {
    $background_sizes = array( 'auto', 'cover', 'contain' );
    if ( ! in_array( $value, $background_sizes ) ) {
      $value = 'cover';
    }

    return $value;
  }
endif;



// adds sanitization callback function for shop layout
if ( ! function_exists( 'influential_sanitize_shop_layout' ) ) :
  function influential_sanitize_shop_layout( $value ) {
    $shop_layout = array( 'fullwidth', 'fluidfullwidth','leftsidebar','fluidleftsidebar', 'rightsidebar','fluidrightsidebar' );
    if ( ! in_array( $value, $shop_layout ) ) {
      $value = 'fullwidth';
    }
    return $value;
  }
endif;

// adds sanitization callback function for product layout
if ( ! function_exists( 'influential_sanitize_product_layout' ) ) :
  function influential_sanitize_product_layout( $value ) {
    $product_layout = array( 'fullwidth', 'leftsidebar', 'rightsidebar' );
    if ( ! in_array( $value, $product_layout ) ) {
      $value = 'fullwidth';
    }
    return $value;
  }
endif;

// adds sanitization callback function for forum layout
if ( ! function_exists( 'influential_sanitize_forum_layout' ) ) :
  function influential_sanitize_forum_layout( $value ) {
    $forum_layout = array( 'forumfull', 'forumfluidfull', 'forumright','fluidforumright','forumleft','forumfluidleft' );
    if ( ! in_array( $value, $forum_layout ) ) {
      $value = 'forumfull';
    }
    return $value;
  }
endif;


// adds sanitization callback function for section 1 spacing
if ( ! function_exists( 'influential_sanitize_section1_spacing' ) ) :
  function influential_sanitize_section1_spacing( $value ) {
    $single_style = array( 'spacing', 'no-spacing' );
    if ( ! in_array( $value, $single_style ) ) {
      $value = 'spacing';
    }
    return $value;
  }
endif;

// adds sanitization callback function for section 2 spacing
if ( ! function_exists( 'influential_sanitize_section2_spacing' ) ) :
  function influential_sanitize_section2_spacing( $value ) {
    $spacing = array( 'spacing', 'no-spacing' );
    if ( ! in_array( $value, $spacing ) ) {
      $value = 'spacing';
    }
    return $value;
  }
endif;

// adds sanitization callback function for section 3 spacing
if ( ! function_exists( 'influential_sanitize_section3_spacing' ) ) :
  function influential_sanitize_section3_spacing( $value ) {
    $spacing = array( 'spacing', 'no-spacing' );
    if ( ! in_array( $value, $spacing ) ) {
      $value = 'spacing';
    }
    return $value;
  }
endif;

// adds sanitization callback function for section 4 spacing
if ( ! function_exists( 'influential_sanitize_section4_spacing' ) ) :
  function influential_sanitize_section4_spacing( $value ) {
    $spacing = array( 'spacing', 'no-spacing' );
    if ( ! in_array( $value, $spacing ) ) {
      $value = 'spacing';
    }
    return $value;
  }
endif;

// adds sanitization callback function for section 5 spacing
if ( ! function_exists( 'influential_sanitize_section5_spacing' ) ) :
  function influential_sanitize_section5_spacing( $value ) {
    $spacing = array( 'spacing', 'no-spacing' );
    if ( ! in_array( $value, $spacing ) ) {
      $value = 'spacing';
    }
    return $value;
  }
endif;

// adds sanitization callback function for section 6 spacing
if ( ! function_exists( 'influential_sanitize_section6_spacing' ) ) :
  function influential_sanitize_section6_spacing( $value ) {
    $spacing = array( 'spacing', 'no-spacing' );
    if ( ! in_array( $value, $spacing ) ) {
      $value = 'spacing';
    }
    return $value;
  }
endif;