<?php 
if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );
}

$section = array(
    'id'        => 'styles_colors_section',
	'title'     => esc_html__( 'Styles and colors', 'reflex' ),
	'icon'      => 'dashicons dashicons-admin-customizer',
	'fields'    => array(
        array(
			'id'            => 'primary-color',
			'title'         => esc_html__( 'Primary color', 'reflex' ),
			'subtitle'      => esc_html__( 'Pick a background color for the theme buttons and other colored elements.', 'reflex' ),
			'type'          => 'color',
            'output_variables' => true,
            'output'        => '--wd-primary-color',
            'default'       => '#83b735',
            'validate'      => 'color',
		),
        array(
			'id'            => 'secondary-color',
			'title'         => esc_html__( 'Secondary color', 'reflex' ),
			'subtitle'      => esc_html__( 'Color for secondary elements on the website.', 'reflex' ),
			'type'          => 'color',
            'default'       => '#fbbc34',
            'validate'      => 'color',
		),

        // Start New Subsection title.
        array(
            'id'            => 'subsection-link-color-start',
            'subtitle'      => esc_html__( 'WEBSITE LINKS COLOR', 'reflex' ),
            'type'          => 'subsection',
        ),
        array(
            'id'            => 'link-color',
            'title'         => esc_html__('Links color', 'reflex'),
            'subtitle'      => esc_html__( 'Set the color for links on your pages, posts and products content.' , 'reflex' ),
            'type'          => 'link_color',
            'default'  => array(
                'regular'  => '#1e73be', 
                'hover'    => '#dd3333',
                'active'   => '#8224e3',  
                'visited'  => '#8224e3',
            ),
        ),
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
    'id'         => 'pages_bg_section',
    'title'      => esc_html__( 'Background', 'reflex' ),
	'subsection' => true,
	'fields'     => array(
		array(
			'id' 			=> 'body-background',
			'title' 		=> __( 'Site background' , 'reflex' ),
			'subtitle' 		=> __( 'Set background image or color for body. Only for BOXED layout.' , 'reflex' ),
			'type' 			=> 'background',
			'preview_height'=> '100px',
			'output' 		=> 'body',
			'default'  		=> array(
				'background-color' 	=> '#ffffff',
			),
            'class'       => 'xts-tab-field',
		),
        array(
			'id' 			=> 'pages-background',
			'title' 		=> __( 'Wrapper background for ALL pages' , 'reflex' ),
			'subtitle' 		=> __( 'Set background image or color for body. Only for BOXED layout.' , 'reflex' ),
			'type' 			=> 'background',
			'preview_height'=> '100px',
			'output' 		=> '.page .main-page-wrapper',
			'default'  		=> array(
				'background-color' 	=> '#ffffff',
			),
            'class'    => 'xts-last-tab-field',
		),

        // Start New Subsection title.
        array(
            'id'            => 'subsection-shop-page-bg-start',
            'subtitle'      => esc_html__( 'Shop Background', 'reflex' ),
            'type'          => 'subsection',
        ),

        array(
			'id' 			=> 'shop-background',
			'title' 		=> __( 'Background for SHOP pages' , 'reflex' ),
			'subtitle' 		=> __( 'Set background image or color for shop. Only for BOXED layout.' , 'reflex' ),
			'type' 			=> 'background',
			'preview_height'=> '100px',
			'output' 		=> '.reflex-archive-shop .main-page-wrapper',
			'default'  		=> array(
				'background-color' 	=> '#ffffff',
			),
            'class'       => 'xts-tab-field',
		),
        array(
			'id' 			=> 'product-background',
			'title' 		=> __( 'Single product background' , 'reflex' ),
			'subtitle' 		=> __( 'Set background for your products page. You can also specify different background for particular products while editing it.' , 'reflex' ),
			'type' 			=> 'background',
			'preview_height'=> '100px',
			'output' 		=> 'pages_bg_section',
			'default'  		=> array(
				'background-color' 	=> '#ffffff',
			),
            'class'    => 'xts-last-tab-field',
		),

        // Start New Subsection title.
        array(
            'id'            => 'subsection-blog-page-bg-start',
            'subtitle'      => esc_html__( 'Blog Background', 'reflex' ),
            'type'          => 'subsection',
        ),

        array(
			'id' 			=> 'blog-background',
			'title' 		=> __( 'Background for BLOG' , 'reflex' ),
			'subtitle' 		=> __( 'Set background image or color for blog. Only for BOXED layout.' , 'reflex' ),
			'type' 			=> 'background',
			'preview_height'=> '100px',
			'output' 		=> '.reflex-archive-blog .main-page-wrapper',
			'default'  		=> array(
				'background-color' 	=> '#ffffff',
			),
            'class'    => 'xts-tab-field',
		),
        array(
			'id' 			=> 'blog-post-background',
			'title' 		=> __( 'Background for BLOG single post' , 'reflex' ),
			'subtitle' 		=> __( 'Set background for your singe post page. You can also specify different background for particular post while editing it.' , 'reflex' ),
			'type' 			=> 'background',
			'preview_height'=> '100px',
			'output' 		=> '.single-post .main-page-wrapper',
			'default'  		=> array(
				'background-color' 	=> '#ffffff',
			),
            'class'    => 'xts-last-tab-field',
		),

        // Start New Subsection title.
        array(
            'id'            => 'subsection-portfolio-page-bg-start',
            'subtitle'      => esc_html__( 'Portfolio Background', 'reflex' ),
            'type'          => 'subsection',
        ),

        array(
			'id' 			=> 'portfolio-background',
			'title' 		=> __( 'Background for PORTFOLIO' , 'reflex' ),
			'subtitle' 		=> __( 'Set background image or color for portfolio. Only for BOXED layout.' , 'reflex' ),
			'type' 			=> 'background',
			'preview_height'=> '100px',
			'output' 		=> '.reflex-archive-portfolio .main-page-wrapper',
			'default'  		=> array(
				'background-color' 	=> '#ffffff',
			),
            'class'    => 'xts-tab-field',
		),
        array(
			'id' 			=> 'portfolio-project-background',
			'title' 		=> __( 'Background for PORTFOLIO project' , 'reflex' ),
			'subtitle' 		=> __( 'Set background for your portfolio project page. You can also specify different background for particular portfolio project while editing it.' , 'reflex' ),
			'type' 			=> 'background',
			'preview_height'=> '100px',
			'output' 		=> '.single-portfolio .main-page-wrapper',
			'default'  		=> array(
				'background-color' 	=> '#ffffff',
			),
            'class'    => 'xts-last-tab-field',
		),

	),
);
Redux::set_section( $opt_name, $section );

$section = array(
    'id'         => 'buttons_section',
    'title'      => esc_html__( 'Buttons', 'reflex' ),
	'subsection' => true,
	'fields'     => array(
		array(
            'id'            => 'btns_default_style',
            'title'         => esc_html__('Default buttons styles', 'reflex'), 
            'subtitle'      => esc_html__('Almost all standard buttons through the site', 'reflex'),
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
            'id'            => 'btns_default_bg',
            'title'         => esc_html__('[Default] Background for buttons', 'reflex'),
            'type'          => 'color',
            'transparent'   => false,
            'default'       => '#f7f7f7',
            'validate'      => 'color',
        ),
        array(
            'id'            => 'btns_default_bg_hover',
            'title'         => esc_html__('[Default hover] Background for buttons', 'reflex'),
            'type'          => 'color',
            'transparent'   => false,
            'default'       => '#efefef',
            'validate'      => 'color',
        ),
        array(
            'id'            => 'btns_default_color_scheme',
            'title'         => esc_html__('[Default] Text color scheme', 'reflex'),
            'type'          => 'button_set',
            'options'       => array(
                'dark'          => esc_html__('DARK', 'reflex'),
                'light'          => esc_html__('LIGHT', 'reflex'),
            ),
            'default'       => 'dark',
        ),
        array(
            'id'            => 'btns_default_color_scheme_hover',
            'title'         => esc_html__('[Default hover] Text color scheme', 'reflex'),
            'type'          => 'button_set',
            'options'       => array(
                'dark'          => esc_html__('DARK', 'reflex'),
                'light'          => esc_html__('LIGHT', 'reflex'),
            ),
            'default'       => 'dark',
        ),

        // Start New Subsection title.
        array(
            'id'            => 'subsection-shop-buttons-start',
            'subtitle'      => esc_html__( 'Shop Buttons', 'reflex' ),
            'type'          => 'subsection',
        ),
        array(
            'id'            => 'btns_shop_style',
            'title'         => esc_html__('WooCommerce buttons styles', 'reflex'), 
            'subtitle'      => esc_html__('Shopping buttons like "Add to cart", "Checkout", "Login", "Register" etc.', 'reflex'),
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
            'id'            => 'btns_shop_bg',
            'title'         => esc_html__('[Shop] Background for buttons', 'reflex'),
            'type'          => 'color',
            'transparent'   => false,
            'default'       => '#83b735',
            'validate'      => 'color',
        ),
        array(
            'id'            => 'btns_shop_bg_hover',
            'title'         => esc_html__('[Shop hover] Background for buttons', 'reflex'),
            'type'          => 'color',
            'transparent'   => false,
            'default'       => '#74a32f',
            'validate'      => 'color',
        ),
        array(
            'id'            => 'btns_shop_color_scheme',
            'title'         => esc_html__('[Shop] Text color scheme', 'reflex'),
            'type'          => 'button_set',
            'options'       => array(
                'dark'          => esc_html__('DARK', 'reflex'),
                'light'          => esc_html__('LIGHT', 'reflex'),
            ),
            'default'       => 'light',
        ),
        array(
            'id'            => 'btns_shop_color_scheme_hover',
            'title'         => esc_html__('[Shop hover] Text color scheme', 'reflex'),
            'type'          => 'button_set',
            'options'       => array(
                'dark'          => esc_html__('DARK', 'reflex'),
                'light'          => esc_html__('LIGHT', 'reflex'),
            ),
            'default'       => 'light',
        ),

        // Start New Subsection title.
        array(
            'id'            => 'subsection-accent-buttons-style-start',
            'subtitle'      => esc_html__( 'Accent Buttons', 'reflex' ),
            'type'          => 'subsection',
        ),
        array(
            'id'            => 'btns_accent_style',
            'title'         => esc_html__('Accent buttons styles', 'reflex'), 
            'subtitle'      => esc_html__('"Call to action" buttons', 'reflex'),
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
            'id'            => 'btns_accent_bg',
            'title'         => esc_html__('[Accent] Background for buttons', 'reflex'),
            'type'          => 'color',
            'transparent'   => false,
            'default'       => '#83b735',
            'validate'      => 'color',
        ),
        array(
            'id'            => 'btns_accent_bg_hover',
            'title'         => esc_html__('[Accent hover] Background for buttons', 'reflex'),
            'type'          => 'color',
            'transparent'   => false,
            'default'       => '#74a32f',
            'validate'      => 'color',
        ),
        array(
            'id'            => 'btns_accent_color_scheme',
            'title'         => esc_html__('[Accent] Text color scheme', 'reflex'),
            'type'          => 'button_set',
            'options'       => array(
                'dark'          => esc_html__('DARK', 'reflex'),
                'light'          => esc_html__('LIGHT', 'reflex'),
            ),
            'default'       => 'light',
        ),
        array(
            'id'            => 'btns_accent_color_scheme_hover',
            'title'         => esc_html__('[Accent hover] Text color scheme', 'reflex'),
            'type'          => 'button_set',
            'options'       => array(
                'dark'          => esc_html__('DARK', 'reflex'),
                'light'          => esc_html__('LIGHT', 'reflex'),
            ),
            'default'       => 'light',
        ),
	),
);
Redux::set_section( $opt_name, $section );

/**
 * Forms.
 */
$section = array(
    'id'         => 'forms_section',
    'title'      => esc_html__( 'Forms style', 'reflex' ),
	'subsection' => true,
	'fields'     => array(
		array(
            'id'            => 'form_fields_style',
            'title'         => esc_html__('Form fields style', 'reflex'), 
            'subtitle'      => esc_html__('Choose your form style', 'reflex'),
            'type'          => 'image_select',
            'mode'          => 'background-image',
            'options'       => array(
                'rounded' => array(
                    'alt'       => esc_html__( 'Circle', 'reflex' ),
                    'title'     => esc_html__( 'Circle', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/form-style/circle.jpg',
                    
                ),
				'semi-rounded' => array(
                    'alt'       => esc_html__( 'Round', 'reflex' ),
                    'title'     => esc_html__( 'Round', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/form-style/semi-rounded.jpg',
                    
                ),
				'square' => array(
                    'alt'       => esc_html__( 'Square', 'reflex' ),
                    'title'     => esc_html__( 'Square', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/form-style/square.jpg',
                    
                ),
				'underlined' => array(
                    'alt'       => esc_html__( 'Underlined', 'reflex' ),
                    'title'     => esc_html__( 'Underlined', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/form-style/underlined.jpg',
                    
                ),
            ),
            'default' => 'square'
        ),
		array(
            'id'            => 'form_border_width',
            'title'         => esc_html__('Form border width', 'reflex'),
            'subtitle'      => esc_html__('Choose your form border width', 'reflex'),
            'type'          => 'border',
            'output'        => array('.site-header'),
            'default'  => array(
                'border-color'  => '#81818133', 
                'border-style'  => 'solid', 
                'border-width'    => '2px', 
            ),
        ), 
	),
);
Redux::set_section( $opt_name, $section );


/**
 * Notices.
 */
$section = array(
    'id'         => 'notices_section',
    'title'      => esc_html__( 'Notices', 'reflex' ),
	'subsection' => true,
	'fields'     => array(
		array(
            'id'            => 'success_notice_bg_color',
            'title'         => esc_html__('Success notice background color', 'reflex'),
            'type'          => 'color',
            'transparent'   => false,
            'default'       => '#459647',
            'validate'      => 'color',
        ),
        array(
            'id'            => 'success_notice_test_color',
            'title'         => esc_html__('Success notice text color', 'reflex'),
            'type'          => 'color',
            'transparent'   => false,
            'default'       => '#ffffff',
            'validate'      => 'color',
        ),

        // Start New Subsection title.
        array(
            'id'            => 'subsection-warning-notice-bg-color-start',
            'subtitle'      => esc_html__( 'Warning', 'reflex' ),
            'type'          => 'subsection',
        ),
		array(
            'id'            => 'warning_notice_bg_color',
            'title'         => esc_html__('Warning notice background color', 'reflex'),
            'type'          => 'color',
            'transparent'   => false,
            'default'       => '#E0B252',
            'validate'      => 'color',
        ),
        array(
            'id'            => 'warning_notice_test_color',
            'title'         => esc_html__('Warning notice text color', 'reflex'),
            'type'          => 'color',
            'transparent'   => false,
            'default'       => '#ffffff',
            'validate'      => 'color',
        ),
	),
);
Redux::set_section( $opt_name, $section );