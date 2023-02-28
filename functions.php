<?php

require get_template_directory() . '/inc/style.php';
require get_template_directory() . '/inc/classes/class-theme-assets.php';

//fopen("styles.css", "a+");
//fopen("../wp-content/uploads/reflex-custom-styles.css", "a+", 1);
//fopen("../wp-content/uploads/reflex-custom-stylesd.css", "a+", 1);

/**
 *
 * The framework's functions and definitions
 */

/**
 * ------------------------------------------------------------------------------------------------
 * Define constants.
 * ------------------------------------------------------------------------------------------------
 */

use Elementor\Utils;

define( 'WOODMART_THEME_DIR', get_template_directory_uri() );
define( 'WOODMART_THEMEROOT', get_template_directory() );
define( 'WOODMART_IMAGES', WOODMART_THEME_DIR . '/images' );
define( 'WOODMART_SCRIPTS', WOODMART_THEME_DIR . '/js' );
define( 'WOODMART_STYLES', WOODMART_THEME_DIR . '/css' );
define( 'WOODMART_FRAMEWORK', '/inc' );
// define( 'WOODMART_DUMMY', WOODMART_THEME_DIR . '/inc/dummy-content' );
define( 'WOODMART_CLASSES', WOODMART_THEMEROOT . '/inc/classes' );
define( 'WOODMART_CONFIGS', WOODMART_THEMEROOT . '/inc/configs' );
// define( 'WOODMART_HEADER_BUILDER', WOODMART_THEME_DIR . '/inc/header-builder' );
define( 'WOODMART_ASSETS', WOODMART_THEME_DIR . '/inc/admin/assets' );
define( 'WOODMART_ASSETS_IMAGES', WOODMART_ASSETS . '/images' );
// define( 'WOODMART_API_URL', 'https://xtemos.com/licenses/api/' );
define( 'WOODMART_DEMO_URL', 'https://woodmart.xtemos.com/' );
define( 'WOODMART_PLUGINS_URL', WOODMART_DEMO_URL . 'plugins/' );
// define( 'WOODMART_DUMMY_URL', WOODMART_DEMO_URL . 'dummy-content/' );
define( 'WOODMART_SLUG', 'woodmart' );
define( 'WOODMART_CORE_VERSION', '1.0.29' );
define( 'WOODMART_WPB_CSS_VERSION', '1.0.2' );


/**
 * ------------------------------------------------------------------------------------------------
 * Load all CORE Classes and files
 * ------------------------------------------------------------------------------------------------
 */


if ( ! function_exists( 'reflex_main_files_include' ) ) {

	function reflex_main_files_include() {
		$files = array(
			'theme',
		);

		foreach ( $files as $file ) {
			$path = get_parent_theme_file_path( WOODMART_FRAMEWORK . '/' . $file . '.php' );
			
			if ( file_exists( $path ) ) {
				require_once $path;
			}
		}
	}
}
reflex_main_files_include();

function reflex_get_opt( $key, $default = '' ) {
	if ( class_exists( 'Redux' ) ) {
		return Redux::get_option( 'reflex_options', $key, $default );
	}else{
		return $default;
	}
}

new REFLEX_Theme();


