<?php if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );}

/**
 * ------------------------------------------------------------------------------------------------
 * Enqueue admin scripts
 * ------------------------------------------------------------------------------------------------
 */
// if ( ! function_exists( 'woodmart_admin_scripts' ) ) {
// 	function woodmart_admin_scripts() {
// 		$version = woodmart_get_theme_info( 'Version' );

// 		wp_enqueue_script( 'woodmart-admin-scripts', WOODMART_ASSETS . '/js/admin.js', array(), $version, true );
// 		wp_enqueue_script( 'woodmart-admin-options', WOODMART_ASSETS . '/js/options.js', array(), $version, true );

// 		$std_fonts         = woodmart_get_config( 'standard-fonts' );
// 		$custom_fonts_data = woodmart_get_opt( 'multi_custom_fonts' );
// 		$custom_fonts      = array();
// 		if ( isset( $custom_fonts_data['{{index}}'] ) ) {
// 			unset( $custom_fonts_data['{{index}}'] );
// 		}

// 		if ( is_array( $custom_fonts_data ) ) {
// 			foreach ( $custom_fonts_data as $font ) {
// 				if ( ! $font['font-name'] ) {
// 					continue;
// 				}

// 				$custom_fonts[ $font['font-name'] ] = $font['font-name'];
// 			}
// 		}

// 		$typekit_fonts = woodmart_get_opt( 'typekit_fonts' );

// 		if ( $typekit_fonts ) {
// 			$typekit = explode( ',', $typekit_fonts );
// 			foreach ( $typekit as $font ) {
// 				$custom_fonts[ ucfirst( trim( $font ) ) ] = trim( $font );
// 			}
// 		}

// 		wp_localize_script(
// 			'woodmart-admin-options',
// 			'xtsTypography',
// 			array(
// 				'stdfonts'    => $std_fonts,
// 				'googlefonts' => XTS\Google_Fonts::$all_google_fonts,
// 				'customFonts' => $custom_fonts,
// 			)
// 		);

// 		if ( apply_filters( 'woodmart_gradients_enabled', true ) ) {
// 			wp_enqueue_script( 'woodmart-colorpicker-scripts', WOODMART_ASSETS . '/js/colorpicker.min.js', array(), $version, true );
// 			wp_enqueue_script( 'woodmart-gradient-scripts', WOODMART_ASSETS . '/js/gradX.min.js', array(), $version, true );
// 		}

// 		if ( woodmart_get_opt( 'size_guides' ) ) {
// 			wp_enqueue_script( 'woodmart-edittable-scripts', WOODMART_ASSETS . '/js/jquery.edittable.min.js', array(), $version, true );
// 		}

// 		// Slider
// 		wp_enqueue_script( 'jquery-ui-slider' );

// 		// Datepicker
// 		if ( ! isset( $_GET['page'] ) || ( isset( $_GET['page'] ) && 'rp_wcdpd_settings' !== $_GET['page'] ) ) {
// 			wp_enqueue_script( 'jquery-ui-datepicker' );
// 			wp_enqueue_script( 'jquery-datetimepicker', WOODMART_ASSETS . '/js/datetimepicker.min.js', array(), $version, true );
// 		}

// 		// VC Fields
// 		if ( 'wpb' === woodmart_get_current_page_builder() ) {
// 			wp_enqueue_script( 'woodmart-image-hotspot', WOODMART_ASSETS . '/js/vc-fields/image-hotspot.js', array(), $version, true );
// 			wp_enqueue_script( 'woodmart-title-divider', WOODMART_ASSETS . '/js/vc-fields/title-divider.js', array(), $version, true );
// 			wp_enqueue_script( 'woodmart-slider', WOODMART_ASSETS . '/js/vc-fields/slider.js', array(), $version, true );
// 			wp_enqueue_script( 'woodmart-responsive-size', WOODMART_ASSETS . '/js/vc-fields/responsive-size.js', array(), $version, true );
// 			wp_enqueue_script( 'woodmart-vc-image-select', WOODMART_ASSETS . '/js/vc-fields/image-select.js', array(), $version, true );
// 			wp_enqueue_script( 'woodmart-vc-colorpicker', WOODMART_ASSETS . '/js/vc-fields/colorpicker.js', array(), $version, true );
// 			wp_enqueue_script( 'woodmart-vc-datepicker', WOODMART_ASSETS . '/js/vc-fields/datepicker.js', array(), $version, true );
// 			wp_enqueue_script( 'woodmart-vc-switch', WOODMART_ASSETS . '/js/vc-fields/switch.js', array(), $version, true );
// 			wp_enqueue_script( 'woodmart-vc-button-set', WOODMART_ASSETS . '/js/vc-fields/button-set.js', array(), $version, true );
// 			wp_enqueue_script( 'woodmart-vc-functions', WOODMART_ASSETS . '/js/vc-fields/vc-functions.js', array(), $version, true );
// 		}

// 		woodmart_admin_scripts_localize();
// 	}

// 	add_action( 'admin_init', 'woodmart_admin_scripts', 100 );
// }


/**
 * ------------------------------------------------------------------------------------------------
 * Enqueue admin styles
 * ------------------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'woodmart_enqueue_admin_styles' ) ) {
	function woodmart_enqueue_admin_styles() {
		$version = woodmart_get_theme_info( 'Version' );
		if ( is_admin() ) {
			// wp_enqueue_style( 'woodmart-admin-style', WOODMART_ASSETS . '/css/theme-admin.css', array(), $version );
			wp_enqueue_style( 'woodmart-settings-style', WOODMART_ASSETS . '/css/theme-settings.css', array(), $version );

			// if ( apply_filters( 'woodmart_gradients_enabled', true ) ) {
			// 	wp_enqueue_style( 'woodmart-colorpicker-style', WOODMART_ASSETS . '/css/colorpicker.css', array(), $version );
			// 	wp_enqueue_style( 'woodmart-gradient-style', WOODMART_ASSETS . '/css/gradX.css', array(), $version );
			// }
			// if ( woodmart_get_opt( 'size_guides' ) ) {
			// 	wp_enqueue_style( 'woodmart-edittable-style', WOODMART_ASSETS . '/css/jquery.edittable.min.css', array(), $version );
			// }

			// wp_enqueue_style( 'woodmart-jquery-ui', WOODMART_ASSETS . '/css/jquery-ui.css', array(), $version );
		}

	}

	add_action( 'admin_enqueue_scripts', 'woodmart_enqueue_admin_styles' );
}

