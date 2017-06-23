<?php add_action('wp_enqueue_scripts', 'footer_enqueue_scripts');
if ( ! function_exists( 'footer_enqueue_scripts' ) ) :
	/**
	 * Load all JavaScript to footer
	 *
	 * This function is attached to the 'wp_enqueue_scripts' action hook.
	 *
	 * @uses	remove_action()
	 * @uses	add_action()
	 *
	 * @since 1.0.0
	**/
	function footer_enqueue_scripts() {
		remove_action('wp_head', 'wp_print_scripts');
		remove_action('wp_head', 'wp_print_head_scripts', 9);
		remove_action('wp_head', 'wp_enqueue_scripts', 1);
		add_action('wp_footer', 'wp_print_scripts', 5);
		add_action('wp_footer', 'wp_enqueue_scripts', 5);
		add_action('wp_footer', 'wp_print_head_scripts', 5);
	}
endif;
?>