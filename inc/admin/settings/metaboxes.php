<?php
/**
 * Redux Framework Sample Metabox Config File
 * For full documentation, please visit: http:https://devs.redux.io/
 * Metabox Lite support the following fields only:  checkbox, radio, text, textarea, media, & color
 * Post Format and Post Template options are not avaialble in Metabox Lite.
 * These advanced options are available in Redux Pro.
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux_Metaboxes' ) ) {
	return;
}

$opt_name = 'reflex_metaboxes';
Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'reflex_page_metaboxes',
		'title'      => esc_html__( 'Page Settings (Custom Metabox From Theme)', 'your-textdomain-here' ),
		'post_types' => array( 'page', 'post', 'portfolio' ),
		'position'   => 'normal', // normal, advanced, side.
		'priority'   => 'high', // high, core, default, low.
		'sections'   => array(
			array(
				'title'  => esc_html__( 'Header Options', 'reflex' ),
				'id'     => 'reflex_header_options',
				'desc'   => esc_html__( '', 'reflex'),
				'icon'   => 'dashicons dashicons-editor-insertmore',
				'fields' => array(
					array(
						'id'            => 'reflex_header',
						'title'         => esc_html__('Custom header for this page', 'reflex'), 
						'desc'      => esc_html__('If you are using our header builder for your header configuration you can select different layout from the list for this particular page.', 'reflex'),
						'placeholder'   => esc_html__( 'Select' , 'reflex' ),
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
						'desc'      => esc_html__( 'The header will be displayed behind the content of the page and will be visible when user scrolls to the top on the page.' , 'redux_docs_generator' ),
						'type'          => 'switch',
						'on'            => 'ON',
						'off'           => 'OFF',
						'default'       => true,
					),
				),
			),

			array(
				'title'  => esc_html__( 'Page Title Options', 'reflex' ),
				'id'     => 'reflex_page_title_options',
				'desc'   => esc_html__( '', 'reflex'),
				'icon'   => 'dashicons dashicons-schedule',
				'fields' => array(
					array(
						'id'       => 'reflex_page_title_off',
						'type'     => 'checkbox',
						'title'    => esc_html__( 'Checkbox', 'reflex' ),
						'desc' => esc_html__( 'You can hide page heading for this page', 'reflex' ),
						'default'  => true,
					),
					array(
						'id' 			=> 'reflex_page_title_bg',
						'title' 		=> __( 'Pages title background' , 'reflex' ),
						'desc' 		=> __( 'Set background image or color, that will be used as a default for all page titles, shop page and blog.' , 'reflex' ),
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
						'id'            => 'reflex_page_title_color',
						'title'         => esc_html__( 'Text color for title' , 'reflex' ),
						'desc'      => esc_html__( '' , 'reflex' ),
						'type'          => 'button_set',
						'options'       => array(
							'inherit'          => 'Inherit',
							'light'            => 'Light',
							'dark'             => 'Dark',
						),
						'default'       => 'inherit',
					),
					array(
						'id'            => 'reflex_page_title_size',
						'title'         => esc_html__( 'Page title size' , 'reflex' ),
						'desc'      => esc_html__( 'You can set different sizes for your page titles.' , 'reflex' ),
						'type'          => 'button_set',
						'options'       => array(
							'inherit'          => 'Inherit',
							'small'            => 'Small',
							'medium'           => 'Medium',
							'large'            => 'Large',
						),
						'default'       => 'inherit',
					),
				),
			),

			array(
				'title'  => esc_html__( 'Sidebar Options', 'reflex' ),
				'id'     => 'reflex_sidebar_options',
				'desc'   => esc_html__( '', 'reflex'),
				'icon'   => 'dashicons dashicons-schedule',
				'fields' => array(
					array(
						'id'            => 'reflex_page_title_color',
						'title'         => esc_html__( 'Text color for title' , 'reflex' ),
						'type'          => 'button_set',
						'options'       => array(
							'inherit'          => 'Inherit',
							'light'            => 'Light',
							'dark'             => 'Dark',
						),
						'default'       => 'inherit',
					),
					array(
						'id'            => 'reflex_page_title_size',
						'title'         => esc_html__( 'Page title size' , 'reflex' ),
						//'subtitle'      => esc_html__( 'You can set different sizes for your page titles.' , 'reflex' ),
						'desc'    		=> esc_html__( 'You can set different sizes for your page titles.', 'reflex' ),
						'type'          => 'button_set',
						'options'       => array(
							'inherit'          => 'Inherit',
							'small'            => 'Small',
							'medium'           => 'Medium',
							'large'            => 'Large',
						),
						'default'       => 'inherit',
					),
					
					array(
						'id'      		=> 'reflex_custom_sidebar',
						'title'   		=> esc_html__( 'Custom sidebar for this page', 'reflex' ),
						'desc'    		=> esc_html__( 'Please select the sidebar you would like to display on this page. Note: You must first create the sidebar under Appearance > Widgets.', 'reflex' ),
						'type'    		=> 'select',
						'placeholder'   => esc_html__( 'Select' , 'reflex' ),
						'width'         => '50%',
						'data'    		=> 'sidebars',
						'default' 		=> 'None',
					),
				),
			),

			array(
				'title'  => esc_html__( 'Footer Options', 'reflex' ),
				'id'     => 'reflex_footer_options',
				'desc'   => esc_html__( '', 'reflex'),
				'icon'   => 'dashicons dashicons-schedule',
				'fields' => array(
					array(
						'id'       => 'reflex_page_footer_disable',
						'type'     => 'checkbox',
						'title'    => esc_html__( 'Disable footer', 'reflex' ),
						'desc' => esc_html__( 'You can disable footer for this page', 'reflex' ),
						'default'  => false,
					),
					array(
						'id'       => 'reflex_page_prefooter_disable',
						'type'     => 'checkbox',
						'title'    => esc_html__( 'Disable prefooter', 'reflex' ),
						'desc' => esc_html__( 'You can disable prefooter for this page', 'reflex' ),
						'default'  => false,
					),
					array(
						'id'       => 'reflex_page_copyrights_disable',
						'type'     => 'checkbox',
						'title'    => esc_html__( 'Disable copyrights', 'reflex' ),
						'desc' => esc_html__( 'You can disable copyrights for this page', 'reflex' ),
						'default'  => false,
					),
				),
			),
		),
	)
);

$section = array(
    'title'      => esc_html__( 'Layout', 'reflex' ),
	'id'         => 'meta_general_layout_section',
	'fields'     => array(
		array(
			'id'            => 'meta_site_width',
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
            'id'            => 'meta_site_custom_width',
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
            'id'            => 'meta_main_layout',
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
            'id'            => 'meta_sidebar_width',
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
            'id'            => 'meta_hide_main_sidebar_mobile',
            'title'         => esc_html__( 'Off canvas sidebar for mobile' , 'reflex' ),
            'subtitle'      => esc_html__( 'You can hide the sidebar on mobile devices and show it nicely with a button click.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'ON',
            'off'           => 'OFF',
            'default'       => true,
        ),
	),
);
Redux_Metaboxes::set_box( $opt_name, $section );


Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'opt-metaboxes-2',
		'post_types' => array( 'page', 'post' ),
		'position'   => 'side', // normal, advanced, side.
		'priority'   => 'high', // high, core, default, low.
		'sections'   => array(
			array(
				'icon_class' => 'icon-large',
				'icon'       => 'el-icon-home',
				'fields'     => array(
					array(
						'title'   => esc_html__( 'Cross Box Required', 'your-textdomain-here' ),
						'desc'    => esc_html__( 'Required arguments work across metaboxes! Click on Color Field under Metabox Options then adjust this field to see the fields within show or hide.', 'your-textdomain-here' ),
						'id'      => 'opt-layout',
						'type'    => 'radio',
						'options' => array(
							'on'  => esc_html__( 'On', 'your-textdomain-here' ),
							'off' => esc_html__( 'Off', 'your-textdomain-here' ),
						),
						'default' => 'on',
					),
				),
			),
		),
	)
);

Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'opt-metaboxes-3',
		'post_types' => array( 'page', 'post' ),
		'position'   => 'side', // normal, advanced, side.
		'priority'   => 'high', // high, core, default, low.
		'sections'   => array(
			array(
				'icon_class' => 'icon-large',
				'icon'       => 'el-icon-home',
				'fields'     => array(
					array(
						'id'      => 'sidebar',
						'title'   => esc_html__( 'Sidebar', 'your-textdomain-here' ),
						'desc'    => esc_html__( 'Please select the sidebar you would like to display on this page. Note: You must first create the sidebar under Appearance > Widgets.', 'your-textdomain-here' ),
						'type'    => 'select',
						'data'    => 'sidebars',
						'default' => 'None',
					),
				),
			),
		),
	)
);