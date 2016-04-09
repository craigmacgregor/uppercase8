<?php

/**
 * Search 
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
  <form role="search" method="get" action="<?php bbp_search_url(); ?>">
    <div class="input-group">
      <label class="screen-reader-text hidden" for="bbp_search"><?php esc_html_e( 'Search for:', 'influential' ); ?></label>
      <input type="hidden" name="action" value="bbp-search-request" />
      <input tabindex="<?php bbp_tab_index(); ?>" type="text" value="<?php echo esc_attr( bbp_get_search_terms() ); ?>" name="bbp_search" />
      <span class="bbpress-inline-btn">
      <button class="btn" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'influential' ); ?>"><span class="fa fa-search"></span></button>
      </span>
      </div>
  </form>

