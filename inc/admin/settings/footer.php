<?php
if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );
}

$section = array(
	'title'  => esc_html__( 'Footer', 'reflex' ),
	'desc'   => esc_html__( '', 'reflex' ),
    'id'     => 'footer_section',
	'icon'   => 'dashicons dashicons-editor-kitchensink',
	'fields' => array(
        array(
            'id'            => 'disable_footer',
            'title'         => esc_html__('Footer', 'reflex'),
            'subtitle'      => esc_html__( 'Enable/disable the footer on your website.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'ON',
            'off'           => 'OFF',
            'default'       => true,
        ),
		array(
            'id'            => 'footer-layout',
            'title'         => esc_html__('Footer layout', 'reflex'), 
            'subtitle'      => esc_html__('Choose your footer layout. Depending on the number of the columns you will have a different number of widget areas for the footer in Appearance->Widgets.', 'reflex'),
            'type'          => 'image_select',
            'mode'          => 'background-image',
            'options'       => array(
                '1' => array(
                    'alt'       => esc_html__( 'Single Column', 'reflex' ),
                    'title'     => esc_html__( 'Single Column', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/footer-layout/footer-1.png',
                    
                ),
                '2' => array(
                    'alt'       => esc_html__( 'Two Columns', 'reflex' ),
                    'title'     => esc_html__( 'Two Columns', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/footer-layout/footer-2.png',
                ),
                '3' => array(
                    'alt'       => esc_html__( 'Three Columns', 'reflex' ),
                    'title'     => esc_html__( 'Three Columns', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/footer-layout/footer-3.png',
                ),
                '4' => array(
                    'alt'       => esc_html__( 'Four Columns', 'reflex' ),
                    'title'     => esc_html__( 'Four Columns', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/footer-layout/footer-4.png',
                ),
                '5' => array(
                    'alt'       => esc_html__( 'Five columns', 'reflex' ),
                    'title'     => esc_html__( 'Five columns', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/footer-layout/footer-5.png',
                ),
                '6' => array(
                    'alt'       => esc_html__( 'Six Columns', 'reflex' ),
                    'title'     => esc_html__( 'Six Columns', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/footer-layout/footer-6.png',
                ),
                '7' => array(
                    'alt'       => esc_html__( '1/2 + 1/4 + 1/4', 'reflex' ),
                    'title'     => esc_html__( '1/2 + 1/4 + 1/4', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/footer-layout/footer-7.png',
                ),
                '8' => array(
                    'alt'       => esc_html__( 'Two rows', 'reflex' ),
                    'title'     => esc_html__( 'Two rows', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/footer-layout/footer-8.png',
                ),
                '9' => array(
                    'alt'       => esc_html__( 'Two rows', 'reflex' ),
                    'title'     => esc_html__( 'Two rows', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/footer-layout/footer-9.png',
                ),
            ),
            'default' => '2'
        ),
        array(
            'id'            => 'sticky_footer',
            'title'         => esc_html__('Sticky footer', 'reflex'),
            'subtitle'      => esc_html__( 'The footer will be displayed behind the content of the page and will be visible when user scrolls to the bottom on the page.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'ON',
            'off'           => 'OFF',
            'default'       => false,
        ),
		array(
            'id'            => 'collapse_footer_widgets',
            'title'         => esc_html__('Collapse widgets on mobile', 'reflex'),
            'subtitle'      => esc_html__( 'Widgets added to the footer will be collapsed by default and opened when you click on their titles.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'ON',
            'off'           => 'OFF',
            'default'       => false,
        ),
		array(
            'id'            => 'scroll_top_btn',
            'title'         => esc_html__('Scroll to top button', 'reflex'),
            'subtitle'      => esc_html__( 'This button moves you to the top of the page when you click it.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'ON',
            'off'           => 'OFF',
            'default'       => true,
        ),

        // Start New Subsection title.
        array(
            'id'            => 'subsection-footer-color-scheme-start',
            'subtitle'      => esc_html__( 'COLOR SCHEME OPTIONS', 'reflex' ),
            'type'          => 'subsection',
        ),
		array(
			'id'            => 'footer-style',
			'title'         => esc_html__( 'Footer text color', 'reflex' ),
			'subtitle'      => esc_html__( 'Choose your footer color scheme', 'reflex' ),
			'type'          => 'button_set',
            'options'       => array(
                'dark'            => esc_html__( 'DARK', 'reflex' ),
                'light'           => esc_html__( 'LIGHT', 'reflex' ),
            ),
            'default' => 'dark',
		),
		array(
			'id' 			=> 'footer-bar-bg',
			'title' 		=> __( 'Footer background' , 'reflex' ),
			'subtitle' 		=> __( 'You can set your footer section background color or upload your image.' , 'reflex' ),
			'type' 			=> 'background',
			'preview_height'=> '100px',
			'output' 		=> '.footer-container',
			'default'  		=> array(
				'background-color' 	=> '#ffffff',
			),
		),

        // Start New Subsection title.
        array(
            'id'            => 'subsection-footer-copyright-start',
            'subtitle'      => esc_html__( 'Copyrights', 'reflex' ),
            'type'          => 'subsection',
        ),
		array(
            'id'            => 'disable_copyrights',
            'title'         => esc_html__('Copyrights', 'reflex'),
            'subtitle'      => esc_html__( 'Turn on/off a section with your copyrights under the footer.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'ON',
            'off'           => 'OFF',
            'default'       => true,
        ),
		array(
			'id'          	=> 'copyrights-layout',
			'title'        	=> esc_html__( 'Copyrights layout', 'reflex' ),
			'subtitle' 		=> esc_html__( 'Set different copyrights section layout.', 'reflex' ),
			'placeholder'   => esc_html__( 'Select' , 'reflex' ),
            'width'         => '50%',
			'type'        	=> 'select',
			'options'     	=> array(
				'two-columns' 	=> esc_html__( 'Two columns', 'reflex' ),
				'centered' 		=> esc_html__( 'centered', 'reflex' ),
			),
			'default'     	=> 'two-columns',
		),
		array(
			'id'          	=> 'copyrights',
			'title'        	=> esc_html__( 'Copyrights text', 'reflex' ),
			'subtitle' 		=> esc_html__( 'Place here text you want to see in the copyrights area. You can use shortocdes. Ex.: [social_buttons]', 'reflex' ),
			'type'        	=> 'textarea',
			'wysiwyg'     	=> false,
    		'autocomplete' 	=> 'off',
			'default'     	=> '<small><a href="http://reflexthemes.com"><strong>REFLEX</strong></a> <i class="fa fa-copyright"></i>  2021 CREATED BY <a href="http://reflexthemes.com"><strong>REFLEX THEMES</strong></a>. PREMIUM E-COMMERCE SOLUTIONS.</small>',
		),
		array(
			'id'          	=> 'copyrights2',
			'title'        	=> esc_html__( 'Text next to copyrights', 'reflex' ),
			'subtitle' 		=> esc_html__( 'You can use shortcodes. Ex.: [social_buttons] or place an HTML Block built with page builder there like [html_block id="258"]', 'reflex' ),
			'type'        	=> 'textarea',
			'wysiwyg'     	=> false,
    		'autocomplete' 	=> 'off',
			'default'     	=> '<img src="' . WOODMART_IMAGES . '/payments.png" alt="payments">',
		),

        // Start New Subsection title.
        array(
            'id'            => 'subsection-prefooter-option-start',
            'subtitle'      => esc_html__( 'Prefooter area', 'reflex' ),
            'type'          => 'subsection',
        ),
		array(
			'id'       		=> 'prefooter_content_type',
			'title'     	=> esc_html__( 'Prefooter content', 'reflex' ),
			'subtitle'    	=> esc_html__( 'Select type of prefooter content area', 'reflex' ),
			'type'          => 'button_set',
            'options'       => array(
                'text'            => esc_html__( 'TEXT', 'reflex' ),
                'html_block'      => esc_html__( 'HTML BLOCK', 'reflex' ),
            ),
            'default' 		=> 'text',
			'class'    		=> 'xts-html-block-switch',
		),
		array(
			'id'          	=> 'prefooter_area',
			'title'        	=> esc_html__( '', 'reflex' ),
			'subtitle' 		=> esc_html__( '', 'reflex' ),
			'type'        	=> 'textarea',
			'wysiwyg'     	=> false,
    		'autocomplete' 	=> 'off',
			'required' => array(
                array(
                    'prefooter_content_type',
                    'equals',
                    'text'
                )
            ),
			'default'     	=> '[html_block id="258"]',
		),
		array(
			'id'          	=> 'prefooter_html_block',
			'title'        	=> esc_html__( '', 'reflex' ),
			'subtitle' 		=> esc_html__( '', 'reflex' ),
			'placeholder'   => esc_html__( 'Select' , 'reflex' ),
			'width'         => '50%',
            'type'          => 'select',
			'data' 			=> 'post_types',
			'data' 			=> 'callback',
			'args' 			=> 'woodmart_get_elementor_html_blocks_array',
			'required' => array(
                array(
                    'prefooter_content_type',
                    'equals',
                    'html_block'
                )
            ),
		),
	),
);
Redux::set_section( $opt_name, $section );