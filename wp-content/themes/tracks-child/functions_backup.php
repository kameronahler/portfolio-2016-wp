<?php
// child theme
// functions.php
?>

<?php
// add child stylesheet
function my_theme_enqueue_styles() {
    $parent_style = 'ct-tracks-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-style',	
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );  
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>

<?php

// remove readmore links
if ( ! function_exists( 'ct_tracks_filter_read_more_link' ) ) {
	function ct_tracks_filter_read_more_link() {
		global $post;
		$ismore             = strpos( $post->post_content, '<!--more-->' );
		$read_more_text     = get_theme_mod( 'read_more_text' );
		$new_excerpt_length = get_theme_mod( 'additional_options_excerpt_length_settings' );
		$excerpt_more       = ( $new_excerpt_length === 0 ) ? '' : '&#8230;';
		$output = '';

		// add ellipsis for automatic excerpts
		if ( empty( $ismore ) ) {
			$output .= $excerpt_more;
		}
		// Because i18n text cannot be stored in a variable
		// if ( empty( $read_more_text ) ) {
		// 	$output .= '<div class="more-link-wrapper"><a class="more-link" href="' . esc_url( get_permalink() ) . '">' . __( 'Read the post', 'tracks' ) . '<span class="screen-reader-text">' . esc_html( get_the_title() ) . '</span></a></div>';
		// } else {
		// 	$output .= '<div class="more-link-wrapper"><a class="more-link" href="' . esc_url( get_permalink() ) . '">' . esc_html( $read_more_text ) . '<span class="screen-reader-text">' . esc_html( get_the_title() ) . '</span></a></div>';
		// }
		return $output;
	}
}
?>