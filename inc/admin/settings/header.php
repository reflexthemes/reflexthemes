<?php 
if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );
}

$section = array(
	'title'  => esc_html__( 'Header', 'reflex' ),
	'desc'   => esc_html__( '', 'reflex' ),
    'id'     => 'header_section',
	'icon'   => 'dashicons dashicons-editor-insertmore',
	'fields' => array(
        array(
            'id'            => 'default_header',
            'title'         => esc_html__('Header', 'redux-framework-demo'), 
            'subtitle'      => esc_html__('Set your default header for all pages from the list of all headers created with our Header Builder.', 'redux-framework-demo'),
            'placeholder'   => esc_html__( 'Select' , 'redux_docs_generator' ),
            'width'         => '50%',
            'type'          => 'select',
            'data'          => 'pages',
            'args'          => array(
                'posts_per_page'    => 30,
            ),
        ),
        array(
            'id'            => 'sticky_header',
            'title'         => esc_html__('Sticky header', 'redux-framework-demo'),
            'subtitle'      => esc_html__( 'The header will be displayed behind the content of the page and will be visible when user scrolls to the top on the page.' , 'redux_docs_generator' ),
            'type'          => 'switch',
            'on'            => 'YES',
            'off'           => 'NO',
            'default'       => true,
        ),
	),
);
Redux::set_section( $opt_name, $section );