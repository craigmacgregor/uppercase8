<?php
/**
 * Landing Bottom Group  
 * @package Influential
 */

if (   ! is_active_sidebar( 'section4-a'  )
	&& ! is_active_sidebar( 'section4-b' )
	&& ! is_active_sidebar( 'section4-c'  )
	&& ! is_active_sidebar( 'section4-d'  )	

	&& ! is_active_sidebar( 'section5-d'  )		
	&& ! is_active_sidebar( 'section5-d'  )		
	&& ! is_active_sidebar( 'section5-d'  )		
	&& ! is_active_sidebar( 'section5-d'  )		

	&& ! is_active_sidebar( 'section6-d'  )		
	&& ! is_active_sidebar( 'section6-d'  )		
	&& ! is_active_sidebar( 'section6-d'  )		
	&& ! is_active_sidebar( 'section6-d'  )			
		
	)
		return;
	// If we get this far, we have widgets. Let do this.
	
?>



<?php if( esc_attr(get_theme_mod( 'enable_section4_sidebars', 0 ) ) ) : ?>
<div id="section4" class="section widget-area clearfix <?php echo esc_attr(get_theme_mod( 'section4_spacing', 'spacing' )); ?>" role="complementary">
		<?php 
		if( esc_attr(get_theme_mod( 'section4_fluid', 0 ) ) ) : 
				echo '<div class="container-fluid">';
			else : 
				echo '<div class="container">';
		endif;
		?>
		<div class="row">
			  
			  <?php if ( is_active_sidebar( 'section4-a' ) ) : ?>
			  <div id="section4-a" <?php influential_section1(); ?>>
				<?php dynamic_sidebar( 'section4-a' ); ?>
				</div>
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section4-b' ) ) : ?>           
			  <div id="section4-b" <?php influential_section1(); ?>>
				<?php dynamic_sidebar( 'section4-b' ); ?>
				</div>          
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section4-c' ) ) : ?>            
			  <div id="section4-c" <?php influential_section1(); ?>>
				<?php dynamic_sidebar( 'section4-c' ); ?>
				</div>
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section4-d' ) ) : ?>        
			  <div id="section4-d" <?php influential_section1(); ?>>
				<?php dynamic_sidebar( 'section4-d' ); ?>
				</div>
			  <?php endif; ?>
		  
		</div>
	</div>
</div>
<?php endif; ?>

<?php if( esc_attr(get_theme_mod( 'enable_section5_sidebars', 0 ) ) ) : ?>
<div id="section5" class="section widget-area clearfix <?php echo esc_attr(get_theme_mod( 'section5_spacing', 'spacing' )); ?>" role="complementary">
		<?php 
		if( esc_attr(get_theme_mod( 'section5_fluid', 0 ) ) ) : 
				echo '<div class="container-fluid">';
			else : 
				echo '<div class="container">';
		endif;
		?>
		<div class="row">
			  
			  <?php if ( is_active_sidebar( 'section5-a' ) ) : ?>
			  <div id="section5-a" <?php influential_section5(); ?>>
				<?php dynamic_sidebar( 'section5-a' ); ?>
				</div>
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section5-b' ) ) : ?>           
			  <div id="section5-b" <?php influential_section5(); ?>>
				<?php dynamic_sidebar( 'section5-b' ); ?>
				</div>          
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section5-c' ) ) : ?>            
			  <div id="section5-c" <?php influential_section5(); ?>>
				<?php dynamic_sidebar( 'section5-c' ); ?>
				</div>
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section5-d' ) ) : ?>        
			  <div id="section5-d" <?php influential_section5(); ?>>
				<?php dynamic_sidebar( 'section5-d' ); ?>
				</div>
			  <?php endif; ?>
		  
		</div>
	</div>
</div>
<?php endif; ?>

<?php if( esc_attr(get_theme_mod( 'enable_section6_sidebars', 0 ) ) ) : ?>
<div id="section6" class="section widget-area clearfix <?php echo esc_attr(get_theme_mod( 'section6_spacing', 'spacing' )); ?>" role="complementary">
		<?php 
		if( esc_attr(get_theme_mod( 'section6_fluid', 0 ) ) ) : 
				echo '<div class="container-fluid">';
			else : 
				echo '<div class="container">';
		endif;
		?>
		<div class="row">
			  
			  <?php if ( is_active_sidebar( 'section6-a' ) ) : ?>
			  <div id="section6-a" <?php influential_section6(); ?>>
				<?php dynamic_sidebar( 'section6-a' ); ?>
				</div>
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section6-b' ) ) : ?>           
			  <div id="section6-b" <?php influential_section6(); ?>>
				<?php dynamic_sidebar( 'section6-b' ); ?>
				</div>          
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section6-c' ) ) : ?>            
			  <div id="section6-c" <?php influential_section6(); ?>>
				<?php dynamic_sidebar( 'section6-c' ); ?>
				</div>
			  <?php endif; ?>
			  
			  <?php if ( is_active_sidebar( 'section6-d' ) ) : ?>        
			  <div id="section6-d" <?php influential_section6(); ?>>
				<?php dynamic_sidebar( 'section6-d' ); ?>
				</div>
			  <?php endif; ?>
		  
		</div>
	</div>
</div>
<?php endif; ?>