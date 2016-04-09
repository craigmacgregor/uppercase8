<?php
/**
 * Top sidebar group  
 * @package Influential
 */

if (   ! is_active_sidebar( 'top1'  )
	&& ! is_active_sidebar( 'top2' )
	&& ! is_active_sidebar( 'top3'  )
	&& ! is_active_sidebar( 'top4'  )		
		
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>


  <div class="row">
    
    <aside id="top-group" class="widget-area clearfix" role="complementary">			
      
      <?php if ( is_active_sidebar( 'top1' ) ) : ?>
      <div id="top1" <?php influential_top(); ?>>
        <?php dynamic_sidebar( 'top1' ); ?>
        </div>
      <?php endif; ?>
      
      <?php if ( is_active_sidebar( 'top2' ) ) : ?>           
      <div id="top2" <?php influential_top(); ?>>
        <?php dynamic_sidebar( 'top2' ); ?>
        </div>          
      <?php endif; ?>
      
      <?php if ( is_active_sidebar( 'top3' ) ) : ?>            
      <div id="top3" <?php influential_top(); ?>>
        <?php dynamic_sidebar( 'top3' ); ?>
        </div>
      <?php endif; ?>
      
      <?php if ( is_active_sidebar( 'top4' ) ) : ?>        
      <div id="top4" <?php influential_top(); ?>>
        <?php dynamic_sidebar( 'top4' ); ?>
        </div>
      <?php endif; ?>
      
      </aside>
    
</div>