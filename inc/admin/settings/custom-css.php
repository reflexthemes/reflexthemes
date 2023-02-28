<?php 
if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );
}

$section = array(
    'id'        => 'custom_css',
	'title'     => esc_html__( 'Custom CSS', 'reflex' ),
	'icon'      => 'dashicons dashicons-buddicons-topics',
	'fields'    => array(
        array(
            'id'            => 'custom_css',
            'title'         => esc_html__('Global Custom CSS', 'reflex'),
            'subtitle'      => esc_html__( 'If you need to customize any style then you can write any kind of css here.' , 'reflex' ),
            'type'          => 'ace_editor',
            'mode'          => 'css',
            'theme'         => 'chrome',
            'default'       => 'body{ background-color: #ffffff; }',
        ),
        array(
            'id'            => 'css_desktop',
            'title'         => esc_html__('Custom CSS for desktop', 'reflex'),
            'subtitle'      => esc_html__( 'If you need to customize any style then you can write any kind of css here.' , 'reflex' ),
            'type'          => 'ace_editor',
            'mode'          => 'css',
            'theme'         => 'chrome',
            'default'       => 'body{ background-color: #ffffff; }',
        ),
        array(
            'id'            => 'css_tablet',
            'title'         => esc_html__('Custom CSS for tablet', 'reflex'),
            'subtitle'      => esc_html__( 'If you need to customize any style then you can write any kind of css here.' , 'reflex' ),
            'type'          => 'ace_editor',
            'mode'          => 'css',
            'theme'         => 'chrome',
            'default'       => 'body{ background-color: #ffffff; }',
        ),
        array(
            'id'            => 'css_wide_mobile',
            'title'         => esc_html__('Custom CSS for mobile landscape', 'reflex'),
            'subtitle'      => esc_html__( 'If you need to customize any style then you can write any kind of css here.' , 'reflex' ),
            'type'          => 'ace_editor',
            'mode'          => 'css',
            'theme'         => 'chrome',
            'default'       => 'body{ background-color: #ffffff; }',
        ),
        array(
            'id'            => 'css_mobile',
            'title'         => esc_html__('Custom CSS for mobile', 'reflex'),
            'subtitle'      => esc_html__( 'If you need to customize any style then you can write any kind of css here.' , 'reflex' ),
            'type'          => 'ace_editor',
            'mode'          => 'css',
            'theme'         => 'chrome',
            'default'       => 'body{ background-color: #ffffff; }',
        ),
    ),
);
Redux::set_section( $opt_name, $section );