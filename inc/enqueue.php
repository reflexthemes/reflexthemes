<?php
/**
 * Enqueue functions.
 *
 * @package woodmart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

/**
 * Enqueue scripts and styles.
 */

if ( ! function_exists( 'reflex_register_scripts' ) ) {

    function reflex_register_scripts() {

        $version  = woodmart_get_theme_info( 'Version' );

        wp_enqueue_style( 'reflex-style', get_stylesheet_uri(), array(), $version );
        wp_style_add_data( 'reflex-style', 'rtl', 'replace' );
    
        wp_enqueue_script( 'reflex-navigation', get_template_directory_uri() . '/js/navigation.js', array(), $version, true );
    
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'reflex_register_scripts' );

}

$stylefile = fopen("mainstyle.txt","a+");
rewind($stylefile);

while(!feof($stylefile))
{
    $line = fgets($stylefile);
}

if(function_exists('get_custom_css'))
{
    fwrite($stylefile, "\r\nget_custom_css()");
}

fclose($stylefile);
