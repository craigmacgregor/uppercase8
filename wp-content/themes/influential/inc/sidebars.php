<?php 

/**
 * Register theme sidebars
 * @package Influential 
 */

 
function influential_widgets_init() {

	register_sidebar( array(
		'name' => esc_html__( 'Blog Right Sidebar', 'influential' ),
		'id' => 'blogright',
		'description' => esc_html__( 'Right sidebar for the blog', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Blog Left Sidebar', 'influential' ),
		'id' => 'blogleft',
		'description' => esc_html__( 'Left sidebar for the blog', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Page Right Sidebar', 'influential' ),
		'id' => 'pageright',
		'description' => esc_html__( 'Right sidebar for pages', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Page Left Sidebar', 'influential' ),
		'id' => 'pageleft',
		'description' => esc_html__( 'Left sidebar for pages', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	

	register_sidebar( array(
		'name' => esc_html__( 'Banner', 'influential' ),
		'id' => 'banner',
		'description' => esc_html__( 'For Images and Sliders.', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Top 1', 'influential' ),
		'id' => 'top1',
		'description' => esc_html__( 'Top 1 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Top 2', 'influential' ),
		'id' => 'top2',
		'description' => esc_html__( 'Top 2 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Top 3', 'influential' ),
		'id' => 'top3',
		'description' => esc_html__( 'Top 3 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Top 4', 'influential' ),
		'id' => 'top4',
		'description' => esc_html__( 'Top 4 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	
	register_sidebar( array(
		'name' => esc_html__( 'Content Top 1', 'influential' ),
		'id' => 'ctop1',
		'description' => esc_html__( 'Content Top 1 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Top 2', 'influential' ),
		'id' => 'ctop2',
		'description' => esc_html__( 'Content Top 2 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Top 3', 'influential' ),
		'id' => 'ctop3',
		'description' => esc_html__( 'Content Top 3 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Top 4', 'influential' ),
		'id' => 'ctop4',
		'description' => esc_html__( 'Content Top 4 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );		
			
	register_sidebar( array(
		'name' => esc_html__( 'Content Bottom 1', 'influential' ),
		'id' => 'cbottom1',
		'description' => esc_html__( 'Content Bottom 1 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Bottom 2', 'influential' ),
		'id' => 'cbottom2',
		'description' => esc_html__( 'Content Bottom 2 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Bottom 3', 'influential' ),
		'id' => 'cbottom3',
		'description' => esc_html__( 'Content Bottom 3 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Bottom 4', 'influential' ),
		'id' => 'cbottom4',
		'description' => esc_html__( 'Content Bottom 4 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Inset Top', 'influential' ),
		'id' => 'inset-top',
		'description' => esc_html__( 'This is an Inset Top position just above the main content and between the left and right column sidebars', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Inset Bottom', 'influential' ),
		'id' => 'inset-bottom',
		'description' => esc_html__( 'This is an Inset Bottom position just below the main content and between the left and right column sidebars', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	
	register_sidebar( array(
		'name' => esc_html__( 'Bottom 1', 'influential' ),
		'id' => 'bottom1',
		'description' => esc_html__( 'Bottom 1 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Bottom 2', 'influential' ),
		'id' => 'bottom2',
		'description' => esc_html__( 'Bottom 2 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Bottom 3', 'influential' ),
		'id' => 'bottom3',
		'description' => esc_html__( 'Bottom 3 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Bottom 4', 'influential' ),
		'id' => 'bottom4',
		'description' => esc_html__( 'Bottom 4 position', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );		
	register_sidebar( array(
		'name' => esc_html__( 'Header', 'influential' ),
		'id' => 'header',
		'description' => esc_html__( 'Located in the top header area but limited to header styles 1 and 4', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Call to Action', 'influential' ),
		'id' => 'cta',
		'description' => esc_html__( 'For adding a Call to Action just below the banner sidebar.', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Announcement', 'influential' ),
		'id' => 'announcement',
		'description' => esc_html__( 'This is Announcement position but can be used for other things', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Breadcrumbs', 'influential' ),
		'id' => 'breadcrumbs',
		'description' => esc_html__( 'For adding breadcrumb navigation if using a plugin, or you can add content here.', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Showcase Top', 'influential' ),
		'id' => 'showcase-top',
		'description' => esc_html__( 'This is a sidebar position that sits just below the Banner and Call to Action, and is full width.', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Showcase Bottom', 'influential' ),
		'id' => 'showcase-bottom',
		'description' => esc_html__( 'This is a sidebar position that sits above the bottom sidebar group and is full width.', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Footer', 'influential' ),
		'id' => 'footer',
		'description' => esc_html__( 'This is a sidebar position that sits above the footer menu and copyright', 'influential' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
	
	// enable landing page section 1 sidebars
	if( esc_attr(get_theme_mod( 'enable_section1_sidebars', 0 ) ) ) :
	
		register_sidebar( array(
			'name' => esc_html__( 'Section 1a', 'influential' ),
			'id' => 'section1-a',
			'description' => esc_html__( 'Section 1 sidebar position 1', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );	
		register_sidebar( array(
			'name' => esc_html__( 'Section 1b', 'influential' ),
			'id' => 'section1-b',
			'description' => esc_html__( 'Section 1 sidebar position 2', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => esc_html__( 'Section 1c', 'influential' ),
			'id' => 'section1-c',
			'description' => esc_html__( 'Section 1 sidebar position 3', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => esc_html__( 'Section 1d', 'influential' ),
			'id' => 'section1-d',
			'description' => esc_html__( 'Section 1 sidebar position 4', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );		
	endif;	
	
	// enable landing page section 2 sidebars
	if( esc_attr(get_theme_mod( 'enable_section2_sidebars', 0 ) ) ) :	
		register_sidebar( array(
			'name' => esc_html__( 'Section 2a', 'influential' ),
			'id' => 'section2-a',
			'description' => esc_html__( 'Section 2 sidebar position 1', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );	
		register_sidebar( array(
			'name' => esc_html__( 'Section 2b', 'influential' ),
			'id' => 'section2-b',
			'description' => esc_html__( 'Section 2 sidebar position 2', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => esc_html__( 'Section 2c', 'influential' ),
			'id' => 'section2-c',
			'description' => esc_html__( 'Section 2 sidebar position 3', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => esc_html__( 'Section 2d', 'influential' ),
			'id' => 'section2-d',
			'description' => esc_html__( 'Section 2 sidebar position 4', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );		
	endif;	
	
	// enable landing page section 3 sidebars
	if( esc_attr(get_theme_mod( 'enable_section3_sidebars', 0 ) ) ) :	
		register_sidebar( array(
			'name' => esc_html__( 'Section 3a', 'influential' ),
			'id' => 'section3-a',
			'description' => esc_html__( 'Section 3 sidebar position 1', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );	
		register_sidebar( array(
			'name' => esc_html__( 'Section 3b', 'influential' ),
			'id' => 'section3-b',
			'description' => esc_html__( 'Section 3 sidebar position 2', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => esc_html__( 'Section 3c', 'influential' ),
			'id' => 'section3-c',
			'description' => esc_html__( 'Section 3 sidebar position 3', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => esc_html__( 'Section 3d', 'influential' ),
			'id' => 'section3-d',
			'description' => esc_html__( 'Section 3 sidebar position 4', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );		
	endif;		
	
	// enable landing page section 4 sidebars
	if( esc_attr(get_theme_mod( 'enable_section4_sidebars', 0 ) ) ) :	
		register_sidebar( array(
			'name' => esc_html__( 'Section 4a', 'influential' ),
			'id' => 'section4-a',
			'description' => esc_html__( 'Section 4 sidebar position 1', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );	
		register_sidebar( array(
			'name' => esc_html__( 'Section 4b', 'influential' ),
			'id' => 'section4-b',
			'description' => esc_html__( 'Section 4 sidebar position 2', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => esc_html__( 'Section 4c', 'influential' ),
			'id' => 'section4-c',
			'description' => esc_html__( 'Section 4 sidebar position 3', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => esc_html__( 'Section 4d', 'influential' ),
			'id' => 'section4-d',
			'description' => esc_html__( 'Section 4 sidebar position 4', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );		
	endif;	
	
	// enable landing page section 5 sidebars
	if( esc_attr(get_theme_mod( 'enable_section5_sidebars', 0 ) ) ) :	
		register_sidebar( array(
			'name' => esc_html__( 'Section 5a', 'influential' ),
			'id' => 'section5-a',
			'description' => esc_html__( 'Section 5 sidebar position 1', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );	
		register_sidebar( array(
			'name' => esc_html__( 'Section 5b', 'influential' ),
			'id' => 'section5-b',
			'description' => esc_html__( 'Section 5 sidebar position 2', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => esc_html__( 'Section 5c', 'influential' ),
			'id' => 'section5-c',
			'description' => esc_html__( 'Section 5 sidebar position 3', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => esc_html__( 'Section 5d', 'influential' ),
			'id' => 'section5-d',
			'description' => esc_html__( 'Section 5 sidebar position 4', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );		
	endif;	
	
	// enable landing page section 6 sidebars
	if( esc_attr(get_theme_mod( 'enable_section6_sidebars', 0 ) ) ) :	
		register_sidebar( array(
			'name' => esc_html__( 'Section 6a', 'influential' ),
			'id' => 'section6-a',
			'description' => esc_html__( 'Section 6 sidebar position 1', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );	
		register_sidebar( array(
			'name' => esc_html__( 'Section 6b', 'influential' ),
			'id' => 'section6-b',
			'description' => esc_html__( 'Section 6 sidebar position 2', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => esc_html__( 'Section 6c', 'influential' ),
			'id' => 'section6-c',
			'description' => esc_html__( 'Section 6 sidebar position 3', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => esc_html__( 'Section 6d', 'influential' ),
			'id' => 'section6-d',
			'description' => esc_html__( 'Section 6 sidebar position 4', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );		
	endif;		
	
	
	
	
	
	
	
	
	
	
	
	
	// enable or disable woocommerce sidebars
	if( esc_attr(get_theme_mod( 'add_woocommerce', 0 ) ) ) :
		register_sidebar( array(
			'name' =>  esc_html__( 'WooCommerce Left Sidebar', 'influential' ),
			'id' => 'shop-left',
			'description' => esc_html__( 'A special left sidebar if you have WooCommerce setup', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );	
		register_sidebar( array(
			'name' =>  esc_html__( 'WooCommerce Right Sidebar', 'influential' ),
			'id' => 'shop-right',
			'description' => esc_html__( 'A special right sidebar if you have WooCommerce setup', 'influential' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );	
	endif;
	// enable or disable bbpress sidebars
	if( esc_attr(get_theme_mod( 'add_bbpress', 0 ) ) ) :	
		register_sidebar( array(
			'name' => esc_html__( 'bbPress Sidebar', 'influential' ),
			'id' => 'influential',
			'description' => esc_html__( 'This is a special sidebar that is available if you use the bbPress forum plugin.', 'influential' ),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3 id="bbpress-heading">',
			'after_title' => '</h3>',
		) );		
	endif;
	
}
add_action( 'widgets_init', 'influential_widgets_init' );


/**
 * Count the number of widgets to enable resizable widgets
 * in the top group.
 */

function influential_top() {
	$count = 0;
	if ( is_active_sidebar( 'top1' ) )
		$count++;
	if ( is_active_sidebar( 'top2' ) )
		$count++;
	if ( is_active_sidebar( 'top3' ) )
		$count++;		
	if ( is_active_sidebar( 'top4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}

/**
 * Count the number of widgets to enable resizable widgets
 * in the content top group.
 */

function influential_ctop() {
	$count = 0;
	if ( is_active_sidebar( 'ctop1' ) )
		$count++;
	if ( is_active_sidebar( 'ctop2' ) )
		$count++;
	if ( is_active_sidebar( 'ctop3' ) )
		$count++;		
	if ( is_active_sidebar( 'ctop4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}

/**
 * Count the number of widgets to enable resizable widgets
 * in the content bottom group.
 */

function influential_cbottom() {
	$count = 0;
	if ( is_active_sidebar( 'cbottom1' ) )
		$count++;
	if ( is_active_sidebar( 'cbottom2' ) )
		$count++;
	if ( is_active_sidebar( 'cbottom3' ) )
		$count++;		
	if ( is_active_sidebar( 'cbottom4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}
/**
 * Count the number of widgets to enable resizable widgets
 * in the bottom group.
 */

function influential_bottom() {
	$count = 0;
	if ( is_active_sidebar( 'bottom1' ) )
		$count++;
	if ( is_active_sidebar( 'bottom2' ) )
		$count++;
	if ( is_active_sidebar( 'bottom3' ) )
		$count++;		
	if ( is_active_sidebar( 'bottom4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-lg-6';
			break;
		case '3':
			$class = 'col-lg-4';
			break;
		case '4':
			$class = 'col-lg-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}


/**
 * Count the number of widgets to enable resizable widgets section 1
 */

function influential_section1() {
	$count = 0;
	if ( is_active_sidebar( 'section1-a' ) )
		$count++;
	if ( is_active_sidebar( 'section1-b' ) )
		$count++;
	if ( is_active_sidebar( 'section1-c' ) )
		$count++;		
	if ( is_active_sidebar( 'section1-d' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}


/**
 * Count the number of widgets to enable resizable widgets section 2
 */

function influential_section2() {
	$count = 0;
	if ( is_active_sidebar( 'section2-a' ) )
		$count++;
	if ( is_active_sidebar( 'section2-b' ) )
		$count++;
	if ( is_active_sidebar( 'section2-c' ) )
		$count++;		
	if ( is_active_sidebar( 'section2-d' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}

/**
 * Count the number of widgets to enable resizable widgets section 3
 */

function influential_section3() {
	$count = 0;
	if ( is_active_sidebar( 'section3-a' ) )
		$count++;
	if ( is_active_sidebar( 'section3-b' ) )
		$count++;
	if ( is_active_sidebar( 'section3-c' ) )
		$count++;		
	if ( is_active_sidebar( 'section3-d' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}

/**
 * Count the number of widgets to enable resizable widgets section 4
 */

function influential_section4() {
	$count = 0;
	if ( is_active_sidebar( 'section4-a' ) )
		$count++;
	if ( is_active_sidebar( 'section4-b' ) )
		$count++;
	if ( is_active_sidebar( 'section4-c' ) )
		$count++;		
	if ( is_active_sidebar( 'section4-d' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}


/**
 * Count the number of widgets to enable resizable widgets section 5
 */

function influential_section5() {
	$count = 0;
	if ( is_active_sidebar( 'section5-a' ) )
		$count++;
	if ( is_active_sidebar( 'section5-b' ) )
		$count++;
	if ( is_active_sidebar( 'section5-c' ) )
		$count++;		
	if ( is_active_sidebar( 'section5-d' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}

/**
 * Count the number of widgets to enable resizable widgets section 6
 */

function influential_section6() {
	$count = 0;
	if ( is_active_sidebar( 'section6-a' ) )
		$count++;
	if ( is_active_sidebar( 'section6-b' ) )
		$count++;
	if ( is_active_sidebar( 'section6-c' ) )
		$count++;		
	if ( is_active_sidebar( 'section6-d' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}







