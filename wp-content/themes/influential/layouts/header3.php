<?php
/**
 * Header Style: Header2
 * @package Morphology
 */
 
 ?>
 
 	<header id="masthead" class="site-header <?php echo esc_attr(get_theme_mod( 'header_style', 'header1' )); ?>" role="banner">
	<div class="container-fluid"><div class="row">
	
		<div  class="col-md-6">
			
				<div id="site-branding">
					<?php if ( get_theme_mod( 'site_logo')) : ?>               
						<div id="logo-wrapper" itemscope itemtype="http://schema.org/Organization">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">
								<img id="logo" src="<?php echo esc_url( get_theme_mod( 'site_logo') ); ?>"  alt="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>" itemprop="logo">
							</a>    
						</div>                
					<?php  endif;  ?>			
		<div id="title-group">
					 <?php  if( esc_attr(get_theme_mod( 'show_site_title', 1 ) ) ) :  ?>                    
							<div id="site-title" itemprop="headline"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>                      
					 <?php endif; ?>
						
					<?php  if ( esc_attr(get_theme_mod( 'show_tagline', 1 ) ) ) : ?>				
						<?php	$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
							<div id="site-tagline" itemprop="description"><?php echo $description; /* WPCS: xss ok. */ ?></div>
						<?php	endif; ?>
					<?php endif;  ?> 					
		</div>			
			</div> 					
			
		</div><!-- .site-branding -->
		
		<div class="col-md-6 mobile-menu-wrapper">
		<div id="menu-wrapper" class="<?php echo esc_attr(get_theme_mod( 'header_style', 'header1' )); ?>">
				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'influential' ); ?></button>
				<div id="site-header-menu-wrap">
					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'influential' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav>
							
						<?php endif; ?>

					</div><!-- .site-header-menu -->
					</div>
				<?php endif; ?>
				</div>
				</div>
				</div>
				</div>
	</header><!-- #masthead -->