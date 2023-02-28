<?php 
if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );
}

$section = array(
    'id'        => 'page_title_section',
	'title'     => esc_html__( 'Page title', 'reflex' ),
	'icon'      => 'dashicons dashicons-schedule',
	'fields'    => array(
        array(
            'id'            => 'page_title_design',
            'title'         => esc_html__('Page title design', 'reflex'),
            'subtitle'      => esc_html__('Select page title section design or disable it completely on all pages.', 'reflex'),
            'type'          => 'image_select',
            'mode'          => 'background-image',
            'options'       => array(
                'flat' => array(
                    'alt'       => esc_html__( 'Flat', 'reflex' ),
                    'title'     => esc_html__( 'Flat', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/buttons/flat.jpg',
                    
                ),
				'3d' => array(
                    'alt'       => esc_html__( '3D', 'reflex' ),
                    'title'     => esc_html__( '3D', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/buttons/3d.jpg',
                    
                ),
				'rounded' => array(
                    'alt'       => esc_html__( 'Circle', 'reflex' ),
                    'title'     => esc_html__( 'Circle', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/buttons/circle.jpg',
                    
                ),
				'semi-rounded' => array(
                    'alt'       => esc_html__( 'Rounded', 'reflex' ),
                    'title'     => esc_html__( 'Rounded', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/buttons/semi-rounded.jpg',
                    
                ),
            ),
            'default' => 'flat'
        ),
        array(
            'id' => 'page_title_size',
            'title' => esc_html__( 'Page title size', 'reflex' ),
            'subtitle' => esc_html__( 'You can set different sizes for your page titles.', 'reflex' ),
            'type' => 'button_set',
            'options' => array(
                'default' => esc_html__( 'Default', 'reflex' ),
                'small' => esc_html__( 'Small', 'reflex' ),
                'Large' => esc_html__( 'Large', 'reflex' ),
            ),
        ),

        // Start New Subsection title.
        array(
            'id' => 'subsection-page-title-color-bg-start',
            'subtitle'=> esc_html__( 'Color & Background', 'reflex' ),
            'type' => 'subsection',
        ),
		array(
			'id' 			=> 'title_background',
			'title' 		=> __( 'Pages title background' , 'reflex' ),
			'subtitle' 		=> __( 'Set background image or color, that will be used as a default for all page titles, shop page and blog.' , 'reflex' ),
			'type' 			=> 'background',
			'preview_height'=> '100px',
			'output' 		=> '.footer-container',
			'default'  		=> array(
				'background-color' 	=> '#0a0a0a',
                'position'          => 'center center',
			    'size'              => 'cover',
			),
            'output' 		=> '.page-title-default',
		),
        array(
			'id'            => 'page_title_color',
			'title'         => esc_html__( 'Text color for page title', 'reflex' ),
			'subtitle'      => esc_html__( 'You can set text different color depending on its background. It can be light or dark.', 'reflex' ),
			'type'          => 'button_set',
            'options'       => array(
                'default'        => esc_html__( 'Default', 'reflex' ),
                'light'          => esc_html__( 'LIGHT', 'reflex' ),
                'dark'           => esc_html__( 'Dark', 'reflex' ),
            ),
            'default' => 'light',
		),

        // Start New Subsection title.
        array(
            'id' => 'subsection-page-title-breadcrumbs-start',
            'subtitle'=> esc_html__( 'Breadcrumbs Options', 'reflex' ),
            'type' => 'subsection',
        ),
        array(
			'id'            => 'page_title_tag',
			'title'         => esc_html__( 'Page title tag', 'reflex' ),
			'subtitle'      => esc_html__( 'Choose which HTML tag to use for the page title.', 'reflex' ),
            'placeholder'   => esc_html__( 'Select' , 'reflex' ),
            'width'         => '50%',
			'type'          => 'select',
            'options'       => array(
                'h1'            => 'h1',
                'h2'            => 'h2',
                'h3'            => 'h3',
                'h4'            => 'h4',
                'h5'            => 'h5',
                'h6'            => 'h6',
                'p'             => 'p',
                'div'           => 'div',
                'span'          => 'span',
            ),
            'default'  => 'h2',
		),
        array(
            'id'            => 'show_breadcrumbs',
            'title'         => esc_html__('Show breadcrumbs', 'reflex'),
            'subtitle'      => esc_html__( 'Displays a full chain of links to the current page.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'YES',
            'off'           => 'NO',
            'default'       => true,
        ),
        array(
			'id'            => 'breadcrumbs_separator',
			'title'         => esc_html__( 'Separator', 'reflex' ),
			'subtitle'      => esc_html__( 'Chose your breadcrumbs separator for page, shop page, portfolio page and blog page.', 'reflex' ),
			'type'          => 'icon',
            'default' => 'elementor',
		),
	),
);
Redux::set_section( $opt_name, $section );
