<?php
/**
 * Landing Top Group
 * @package Influential
 */

if (   ! is_active_sidebar( 'section1-a'  )
	&& ! is_active_sidebar( 'section1-b' )
	&& ! is_active_sidebar( 'section1-c'  )
	&& ! is_active_sidebar( 'section1-d'  )		

	&& ! is_active_sidebar( 'section2-d'  )		
	&& ! is_active_sidebar( 'section2-d'  )		
	&& ! is_active_sidebar( 'section2-d'  )		
	&& ! is_active_sidebar( 'section2-d'  )		

	&& ! is_active_sidebar( 'section3-d'  )		
	&& ! is_active_sidebar( 'section3-d'  )		
	&& ! is_active_sidebar( 'section3-d'  )		
	&& ! is_active_sidebar( 'section3-d'  )	
	
	)
		return;
	// If we get this far, we have widgets. Let do this.
			 
?>



<?php if( esc_attr(get_theme_mod( 'enable_section1_sidebars', 0 ) ) ) : ?>
	<div id="section1" class="section widget-area clearfix <?php echo esc_attr(get_theme_mod( 'section1_spacing', 'spacing' )); ?>" role="complementary">

		<?php 
		if( esc_attr(get_theme_mod( 'section1_fluid', 0 ) ) ) : 
				echo '<div class="container-fluid">';
			else : 
				echo '<div class="container">';
		endif;
		?>
	
		<div class="row">
			  
			  <?php if ( is_active_sidebar( 'section1-a' ) ) : ?>
			  <div id="section1-a" <?php influential_section1(); ?>>
				<?php dynamic_sidebar( 'section1-a' ); ?>
				</div>
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section1-b' ) ) : ?>           
			  <div id="section1-b" <?php influential_section1(); ?>>
				<?php dynamic_sidebar( 'section1-b' ); ?>
				</div>          
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section1-c' ) ) : ?>            
			  <div id="section1-c" <?php influential_section1(); ?>>
				<?php dynamic_sidebar( 'section1-c' ); ?>
				</div>
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section1-d' ) ) : ?>        
			  <div id="section1-d" <?php influential_section1(); ?>>
				<?php dynamic_sidebar( 'section1-d' ); ?>
				</div>
			  <?php endif; ?>
		  
		</div>
	</div>
</div>
<?php endif; ?>

<?php if( esc_attr(get_theme_mod( 'enable_section2_sidebars', 0 ) ) ) : ?>
<div id="section2" class="section widget-area clearfix <?php echo esc_attr(get_theme_mod( 'section2_spacing', 'spacing' )); ?>" role="complementary">
		<?php 
		if( esc_attr(get_theme_mod( 'section2_fluid', 0 ) ) ) : 
				echo '<div class="container-fluid">';
			else : 
				echo '<div class="container">';
		endif;
		?>
		<div class="row">
			  
			  <?php if ( is_active_sidebar( 'section2-a' ) ) : ?>
			  <div id="section2-a" <?php influential_section2(); ?>>
				<?php dynamic_sidebar( 'section2-a' ); ?>
				</div>
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section2-b' ) ) : ?>           
			  <div id="section2-b" <?php influential_section2(); ?>>
				<?php dynamic_sidebar( 'section2-b' ); ?>
				</div>          
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section2-c' ) ) : ?>            
			  <div id="section2-c" <?php influential_section2(); ?>>
				<?php dynamic_sidebar( 'section2-c' ); ?>
				</div>
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section2-d' ) ) : ?>        
			  <div id="section2-d" <?php influential_section2(); ?>>
				<?php dynamic_sidebar( 'section2-d' ); ?>
				</div>
			  <?php endif; ?>
		  
		</div>
	</div>
</div>
<?php endif; ?>

<?php if( esc_attr(get_theme_mod( 'enable_section3_sidebars', 0 ) ) ) : ?>
<div id="section3" class="section widget-area clearfix <?php echo esc_attr(get_theme_mod( 'section3_spacing', 'spacing' )); ?>" role="complementary">
		<?php 
		if( esc_attr(get_theme_mod( 'section3_fluid', 0 ) ) ) : 
				echo '<div class="container-fluid">';
			else : 
				echo '<div class="container">';
		endif;
		?>
		<div class="row">
			  
			  <?php if ( is_active_sidebar( 'section3-a' ) ) : ?>
			  <div id="section3-a" <?php influential_section3(); ?>>
				<?php dynamic_sidebar( 'section3-a' ); ?>
				</div>
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section3-b' ) ) : ?>           
			  <div id="section3-b" <?php influential_section3(); ?>>
				<?php dynamic_sidebar( 'section3-b' ); ?>
				</div>          
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section3-c' ) ) : ?>            
			  <div id="section3-c" <?php influential_section3(); ?>>
				<?php dynamic_sidebar( 'section3-c' ); ?>
				</div>
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section3-d' ) ) : ?>        
			  <div id="section3-d" <?php influential_section3(); ?>>
				<?php dynamic_sidebar( 'section3-d' ); ?>
				</div>
			  <?php endif; ?>
		  
		</div>
	</div>
</div>
<?php endif; ?>