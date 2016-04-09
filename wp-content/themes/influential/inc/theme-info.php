<?php
/**
 * Theme information page
 * @package Influential
 */

//Add the theme page
add_action('admin_menu', 'influential_add_theme_info');
function influential_add_theme_info(){
	$theme_info = add_theme_page( esc_html__('Influential Info','influential'), esc_html__('Influential Info','influential'), 'manage_options', 'influential-info.php', 'influential_info_page' );
    add_action( 'load-' . $theme_info, 'influential_info_hook_styles' );
}

//Callback
function influential_info_page() {
?>
	<div class="info-container">
		<h2 class="info-title"><?php esc_html_e('Influential Info','influential'); ?></h2>
		<div class="info-block"><div class="dashicons dashicons-book-alt info-icon"></div>
        	<p class="info-text"><a href="http://www.shapedpixels.com/setup-influential/" target="_blank"><?php esc_html_e('Setup Tutorials','influential'); ?></a></p></div>
		<div class="info-block"><div class="dashicons dashicons-sos info-icon"></div>
        	<p class="info-text"><a href="http://www.shapedpixels.com/support" target="_blank"><?php esc_html_e('Support','influential'); ?></a></p></div>
 		<div class="info-block"><div class="dashicons dashicons-testimonial info-icon"></div>
 			<p class="info-text"><a href="http://www.shapedpixels.com/submit-testimonial" target="_blank"><?php esc_html_e('Submit a Testimonial','influential'); ?></a></p></div>	       
		<div class="info-block"><div class="dashicons dashicons-desktop info-icon"></div>
        	<p class="info-text"><a href="http://demos.shapedpixels.com/influential" target="_blank"><?php esc_html_e('Theme demo','influential'); ?></a></p></div>       
	</div>
<?php
}

//Styles
function influential_info_hook_styles(){
   	add_action( 'admin_enqueue_scripts', 'influential_info_page_styles' );
}
function influential_info_page_styles() {
	wp_enqueue_style( 'influential-info-style', get_template_directory_uri() . '/css/info-page.css', array(), true );
}