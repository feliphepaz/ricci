<?php 

function ricci_add_woocommerce_support() {
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'ricci_add_woocommerce_support');

function ricci_css() {
	wp_register_style('ricci-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', false);
	wp_enqueue_style('ricci-style');
}
add_action('wp_enqueue_scripts', 'ricci_css');

function ricci_custom_images() {
	update_option('medium_crop', 1);
}
add_action('after_setup_theme', 'ricci_custom_images');

?>
