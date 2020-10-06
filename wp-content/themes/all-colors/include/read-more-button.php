<?php if( ! defined( 'ABSPATH' ) ) exit;
	
/**
 * Read More Button
 */

	function all_colors_excerpt_more( $more ) {
		if ( is_admin() ) {
			return $more;
		}
        return '<p class="link-more"><a class="myButt " href="'. esc_url(get_permalink( get_the_ID() ) ) . '">' . all_colors_return_read_more_text (). '</a></p>';
	}
	add_filter( 'excerpt_more', 'all_colors_excerpt_more' );	
	
	function all_colors_excerpt_length( $length ) {
			if ( is_admin() ) {
					return $length;
			}
			return 22;
	}
	add_filter( 'excerpt_length', 'all_colors_excerpt_length', 999 );
	
	function all_colors_return_read_more_text () {
		return __( 'Read More','all-colors');
	}