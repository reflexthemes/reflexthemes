<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Reflex
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function reflex_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'reflex_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function reflex_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'reflex_pingback_header' );


// **********************************************************************//
// ! Function to get HTML block content
// **********************************************************************//

if( ! function_exists( 'woodmart_get_html_block' ) ) {
	function woodmart_get_html_block($id) {
		$id = apply_filters( 'wpml_object_id', $id, 'cms_block', true );
		$post = get_post( $id );
		$content = '';
		if ( ! $post || $post->post_type != 'cms_block' ) return;

		if ( woodmart_is_elementor_installed() && Plugin::$instance->documents->get( $id )->is_built_with_elementor() ) {
			$content .= woodmart_elementor_get_content( $id );
		} else {
			$content .= do_shortcode( $post->post_content );

			$shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
			$woodmart_shortcodes_custom_css = get_post_meta( $id, 'woodmart_shortcodes_custom_css', true );

			$content .= '<style data-type="vc_shortcodes-custom-css">';
			if ( ! empty( $shortcodes_custom_css ) ) {
				$content .= $shortcodes_custom_css;
			}

			if ( ! empty( $woodmart_shortcodes_custom_css ) ) {
				$content .= $woodmart_shortcodes_custom_css;
			}
			$content .= '</style>';
		}

		return $content;
	}

}

if( ! function_exists( 'woodmart_get_static_blocks_array' ) ) {
	function woodmart_get_static_blocks_array( $new = false ) {
		$args = array( 'posts_per_page' => 500, 'post_type' => 'cms_block' );
		$blocks_posts = get_posts( $args );
		$array = array();
		foreach ( $blocks_posts as $post ) :
			if ( $new ) {
				$array[ $post->ID ] = array(
					'name' => $post->post_title . ' (ID:' . $post->ID . ')',
					'value' => $post->ID,
				);
			} else {
				$array[ $post->post_title . ' (ID:' . $post->ID . ')' ] = $post->ID;
			}
		endforeach;
		return $array;
	}
}

if ( ! function_exists( 'woodmart_get_theme_settings_html_blocks_array' ) ) {
	/**
	 * Function to get array of HTML Blocks in theme settings array style.
	 *
	 * @return array
	 */
	function woodmart_get_theme_settings_html_blocks_array() {
		return woodmart_get_static_blocks_array( true );
	}
}

if ( ! function_exists( 'woodmart_get_elementor_html_blocks_array' ) ) {
	/**
	 * Function to get array of HTML Blocks.
	 *
	 * @return array
	 */
	function woodmart_get_elementor_html_blocks_array() {
		$output = array();

		$posts = get_posts(
			array(
				'posts_per_page' => 500, // phpcs:ignore
				'post_type'      => 'cms_block',
			)
		);

		$output['0'] = esc_html__( 'Select', 'woodmart' );

		foreach ( $posts as $post ) {
			$output[ $post->ID ] = $post->post_title;
		}

		return $output;
	}
}