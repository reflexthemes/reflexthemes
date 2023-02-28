<?php 
if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );
}

$section = array(
	'title'     => esc_html__( 'General', 'reflex' ),
    'id'        => 'general_sections',
	'icon'      => 'dashicons dashicons-admin-home',
	'fields'    => array(
        array(
			'id'            => 'page_builder',
			'title'         => esc_html__( 'Page builder', 'reflex' ),
			'subtitle'      => esc_html__( 'You need to select "Auto" value here. It will detect which one is currently installed. If both builders are installed, the WPBakery will be used.', 'reflex' ),
			'type'          => 'button_set',
            'options'       => array(
                'wpb'            => esc_html__( 'WPB', 'reflex' ),
                'elementor'      => esc_html__( 'Elementor', 'reflex' ),
                'auto'           => esc_html__( 'Auto', 'reflex' ),
            ),
            'default' => 'elementor',
		),
        array(
            'id'            => 'page_comments',
            'title'         => esc_html__('Show comments on pages', 'reflex'),
            'subtitle'      => esc_html__( '' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'YES',
            'off'           => 'NO',
            'default'       => true,
        ),
        array(
            'id'            => 'custom_404_page',
            'title'         => esc_html__('Custom 404 page', 'reflex'), 
            'subtitle'      => esc_html__('Select a page that will be shown as your default 404 error page.', 'reflex'),
            'placeholder'   => esc_html__( 'Select' , 'reflex' ),
            'width'         => '50%',
            'type'          => 'select',
            'data'          => 'pages',
            'args'          => array(
                'posts_per_page'    => 30,
            ),
        ),
		array(
			'id'            => 'widget_title_tag',
			'title'         => esc_html__( 'Widget title tag', 'reflex' ),
			'subtitle'      => esc_html__( 'Choose which HTML tag to use in widget title.', 'reflex' ),
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
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
    'title'      => esc_html__( 'Layout', 'reflex' ),
	'id'         => 'general_layout_section',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'            => 'site_width',
			'type'          => 'text',
			'title'         => esc_html__( 'Site width', 'reflex' ),
			'subtitle'      => esc_html__( 'You can make your content wrapper boxed, full width or set your custom width in pixels.', 'reflex' ),
			'placeholder'   => esc_html__( 'Select' , 'reflex' ),
            'width'         => '50%',
			'type'          => 'select',
            'options'       => array(
                'full-width'        => esc_html__( 'Full width', 'reflex' ),
                'boxed'             => esc_html__( 'Boxed (with hidden overflow)', 'reflex' ),
                'boxed-2'           => esc_html__( 'Boxed', 'reflex' ),
                'full-width-content'=> esc_html__( 'Content full width', 'reflex' ),
                'wide'              => esc_html__( 'Wide (1600 px)', 'reflex' ),
                'custom'            => esc_html__( 'Custom', 'reflex' ),
            ),
		),
        array(
            'id'            => 'site_custom_width',
            'title'         => esc_html__( 'Custom width in pixels' , 'reflex' ),
            'subtitle'      => esc_html__( 'Specify your custom website container width in pixels.' , 'reflex' ),
            'type'          => 'slider',
            'min'           => 1025,
            'max'           => 1920,
            'required'      => array(
                array(
                    'site_width',
                    'equals',
                    'custom'
                )
            ),
        ),
        array(
            'id'            => 'main_layout',
            'title'         => esc_html__('Sidebar position', 'reflex'), 
            'subtitle'      => esc_html__('Select main content and sidebar alignment.', 'reflex'),
            'type'          => 'image_select',
            'options'       => array(
                'full-width'    => array(
                    'alt'       => esc_html__( 'Without', 'reflex' ), 
                    'title'     => esc_html__( 'Without', 'reflex' ), 
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/sidebar-layout/none.png',
                ),
                'sidebar-left'  => array(
                    'alt'       => esc_html__( 'Left', 'reflex' ), 
                    'title'     => esc_html__( 'Left', 'reflex' ), 
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/sidebar-layout/left.png',
                ),
                'sidebar-right' => array(
                    'alt'       => esc_html__( 'Right', 'reflex' ),
                    'title'     => esc_html__( 'Right', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/sidebar-layout/right.png',
                ),
            ),
            'default' => 'sidebar-right'
        ),
        array(
            'id'            => 'sidebar_width',
            'title'         => esc_html__( 'Sidebar size' , 'reflex' ),
            'subtitle'      => esc_html__( 'You can set different sizes for your pages sidebar' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                '2'             => 'SMALL',
                '3'             => 'MEDIUM',
                '4'             => 'LARGE',
            ),
            'default'       => '3',
        ),
        array(
            'id'            => 'hide_main_sidebar_mobile',
            'title'         => esc_html__( 'Off canvas sidebar for mobile' , 'reflex' ),
            'subtitle'      => esc_html__( 'You can hide the sidebar on mobile devices and show it nicely with a button click.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'ON',
            'off'           => 'OFF',
            'default'       => true,
        ),
	),
);
Redux::set_section( $opt_name, $section );