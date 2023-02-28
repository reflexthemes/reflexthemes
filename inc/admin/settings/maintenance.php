<?php 
if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );
}

$section = array(
    'id'        => 'maintenance',
	'title'     => esc_html__( 'Maintenance', 'reflex' ),
	'icon'      => 'dashicons dashicons-hammer',
	'fields'    => array(
        array(
            'id'            => 'maintenance_mode',
            'title'         => esc_html__('Enable maintenance mode', 'reflex'),
            'subtitle'      => esc_html__( 'If enabled you need to create maintenance page in Dashboard - Pages - Add new. Choose "Template" to be "Maintenance" in "Page attributes". Or you can import the page from our demo in Dashboard - Woodmart - Base import' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'ON',
            'off'           => 'OFF',
            'default'       => false,
        ),
        array(
			'id'          	=> 'maintenance_page',
			'title'        	=> esc_html__( 'Maintenance page', 'reflex' ),
			'subtitle' 		=> esc_html__( 'Select a page that will be shown as your default maintenance page.', 'reflex' ),
			'placeholder'   => esc_html__( 'Select' , 'reflex' ),
			'width'         => '50%',
            'type'          => 'select',
			'data' 			=> 'page',
		),
    ),
);
Redux::set_section( $opt_name, $section );