<?php 
if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );
}

$section = array(
    'id'        => 'custom_js',
	'title'     => esc_html__( 'Custom JS', 'reflex' ),
	'icon'      => 'dashicons dashicons-media-text',
	'fields'    => array(
        array(
            'id'            => 'custom_js',
            'title'         => esc_html__('Global Custom JS', 'reflex'),
            'subtitle'      => esc_html__( 'If enabled you need to create maintenance page in Dashboard - Pages - Add new. Choose "Template" to be "Maintenance" in "Page attributes". Or you can import the page from our demo in Dashboard - Woodmart - Base import' , 'reflex' ),
            'type'          => 'ace_editor',
            'mode'          => 'javascript',
            'theme'         => 'chrome',
            'default'       => 'alart("This is our reflex theme");',
        ),
    ),
);
Redux::set_section( $opt_name, $section );