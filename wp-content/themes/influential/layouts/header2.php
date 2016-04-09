<?php
/**
 * Header Style: Header1
 * @package Morphology
 */ 
 ?>
 
 	<header id="masthead" class="site-header <?php echo esc_attr(get_theme_mod( 'header_style', 'header1' )); ?>" role="banner">
	<div id="site-header-inner">
		<div class="container-fluid">
		<div class="row">

			<div class="col-md-12">
				<div id="site-branding" class="clearfix">
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
			</div>

					</div>
		</div>
		</div>
	</header>

	
	<div id="menu-wrapper" class="<?php echo esc_attr(get_theme_mod( 'header_style', 'header1' )); ?>">
				<div class="container-fluid"><div class="row"><div class="col-md-12">
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<div id="menu-toggle-wrapper"><button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'influential' ); ?></button></div>
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
						</div>
				<?php endif; ?>
				</div>
				</div>
				</div>
				</div>