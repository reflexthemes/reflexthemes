<?php
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux' ) ) {
	return;
}

$opt_name = 'reflex_options';

$dir = dirname( __FILE__ ) . DIRECTORY_SEPARATOR;

$theme = wp_get_theme(); // For use with some settings. Not necessary.
$icon = get_template_directory_uri().'/images/logo/logo-favicon.png';
$theme_name = "<img class='redux-header-icon' src='$icon'>".$theme->get( 'Name' );

$args = array(
	'opt_name'                  => $opt_name,
	'display_name'              => $theme_name,
	'display_version'           => $theme->get( 'Version' ),
	'menu_title'                => esc_html__( 'Theme Settings', 'your-textdomain-here' ),
	'page_title'                => esc_html__( 'Theme Settings', 'your-textdomain-here' ),
	'menu_type'                 => 'menu',
	'allow_sub_menu'            => true,
	// Disable to create your own Google fonts loader.
	'disable_google_fonts_link' => false,
	'admin_bar'                 => true,
	'admin_bar_icon'            => 'dashicons-portfolio',
	'admin_bar_priority'        => 50,
	// Sets a different name for your global variable other than the opt_name.
	'global_variable'           => $opt_name,
	'dev_mode'                  => false,
	'customizer'                => false,
	// Disable the save warning when a user changes a field.
	'disable_save_warn'         => true,
	'page_priority'             => 50,
	'menu_icon'                 => '',
	'page_icon'                 => 'icon-themes',
	'page_slug'                 => $opt_name,
	'save_defaults'             => false,
	'default_show'              => false,
	'default_mark'              => '*',
	'show_import_export'        => true,
	'transient_time'            => 60 * MINUTE_IN_SECONDS,
	'output'                    => true,
	'output_tag'                => true,
	'flyout_submenus'           => true,
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = array(
	'url'   => '//github.com/reflexthemes',
	'title' => 'Visit us on GitHub',
	'icon'  => 'el el-github',
);
$args['share_icons'][] = array(
	'url'   => '//facebook.com/reflexthemes',
	'title' => 'Like us on Facebook',
	'icon'  => 'el el-facebook',
);
$args['share_icons'][] = array(
	'url'   => '//twitter.com/reflexthemes',
	'title' => 'Follow us on Twitter',
	'icon'  => 'el el-twitter',
);
$args['share_icons'][] = array(
	'url'   => '//www.linkedin.com/company/reflexthemes',
	'title' => 'Find us on LinkedIn',
	'icon'  => 'el el-linkedin',
);
Redux::set_args( $opt_name, $args );


// -> START SECTIONS
require_once get_template_directory() . '/inc/admin/settings/general.php';
require_once get_template_directory() . '/inc/admin/settings/header.php';
require_once get_template_directory() . '/inc/admin/settings/page-title.php';
require_once get_template_directory() . '/inc/admin/settings/footer.php';
require_once get_template_directory() . '/inc/admin/settings/typography.php';
require_once get_template_directory() . '/inc/admin/settings/styles-colors.php';
require_once get_template_directory() . '/inc/admin/settings/blog.php';
require_once get_template_directory() . '/inc/admin/settings/portfolio.php';
require_once get_template_directory() . '/inc/admin/settings/social.php';
require_once get_template_directory() . '/inc/admin/settings/custom-css.php';
require_once get_template_directory() . '/inc/admin/settings/custom-js.php';
require_once get_template_directory() . '/inc/admin/settings/maintenance.php';
require_once get_template_directory() . '/inc/admin/settings/other.php';