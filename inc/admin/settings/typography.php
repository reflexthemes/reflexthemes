<?php 
if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );
}

$section = array(
	'title'     => esc_html__( 'Typography', 'reflex' ),
	'desc'      => esc_html__( '', 'reflex' ),
    'id'        => 'typography_section',
	'icon'      => 'dashicons dashicons-editor-textcolor',
	'fields'    => array(
        array(
			'id'                => 'navigation-font',
			'title'             => esc_html__( 'Header font', 'reflex' ),
			'subtitle'          => esc_html__( 'This option will change typography for your header text elements.', 'reflex' ),
			'type'              => 'typography',
            'google'            => true,
            // 'word-spacing'      => true,
            // 'letter-spacing'    => true,
            // 'text-align'        => true,
            // 'line-height'       => true,
            // 'subsets'           => true,
            'font_family_clear' => false,
            'default'           => array(
                'color'             => '#dddddd',
                'font-size'         => '14px',
                'font-family'       => 'Lato',
                'font-weight'       => '700',
                'text-transform'    => 'uppercase',
            ),
            'output'            => array( 'h2.site-description, h2.entry-title, .site-description' ),
            'preview'           => array(
                'always_display'    => true,
            ),
		),
        array(
			'id'                => 'text-font',
			'title'             => esc_html__( 'Text font', 'reflex' ),
			'subtitle'          => esc_html__( 'Set you typography options for body, paragraphs.', 'reflex' ),
			'type'              => 'typography',
            'google'            => true,
            'font_family_clear' => false,
            'default'           => array(
                'font-family'       => 'Lato',
                'color'             => '#777777',
                'font-size'         => '14px',
                'font-weight'       => '400',
            ),
            'output'            => array( 'p' ),
            'preview'           => array(
                'always_display'    => true,
            ),
		),
        array(
			'id'                => 'primary-font',
			'title'             => esc_html__( 'Title font', 'reflex' ),
			'subtitle'          => esc_html__( 'Set you typography options for titles, post names.', 'reflex' ),
			'type'              => 'typography',
            'google'            => true,
            'font_family_clear' => false,
            'default'           => array(
                'color'             => '#242424',
                'font-family'       => 'Poppins',
                'font-weight'       => '600',
            ),
            'output'            => array( 'p' ),
            'preview'           => array(
                'always_display'    => true,
            ),
		),
        array(
			'id'                => 'post-titles-font',
			'title'             => esc_html__( 'Entities names font', 'reflex' ),
			'subtitle'          => esc_html__( 'Titles for posts, products, categories and pages', 'reflex' ),
			'type'              => 'typography',
            'google'            => true,
            'font_family_clear' => false,
            'default'           => array(
                'font-family'       => 'Poppins',
                'color'             => '#333333',
                'font-weight'       => '500',
            ),
            'output'            => array( 'p' ),
            'preview'           => array(
                'always_display'    => true,
            ),
		),
        array(
			'id'                => 'secondary-font',
			'title'             => esc_html__( 'Secondary font', 'reflex' ),
			'subtitle'          => esc_html__( 'Use for secondary titles (use CSS class "font-alt" or "title-alt")', 'reflex' ),
			'type'              => 'typography',
            'google'            => true,
            'font_family_clear' => false,
            'default'           => array(
                'font-family'       => 'Lato',
                'font-weight'       => '400',
            ),
            'output'            => array( 'p' ),
            'preview'           => array(
                'always_display'    => true,
            ),
		),
        array(
			'id'                => 'widget-titles-font',
			'title'             => esc_html__( 'Widget titles font', 'reflex' ),
			'subtitle'          => esc_html__( 'Typography options for titles for widgets in your sidebars.', 'reflex' ),
			'type'              => 'typography',
            'google'            => true,
            'font_family_clear' => false,
            'default'           => array(
                'font-family'       => 'Poppins',
                'font-weight'       => '600',
                'font-size'         => '16px',
				'color'             => '#333333',
				'text-transform'    => 'uppercase',
            ),
            'output'            => array( 'p' ),
            'preview'           => array(
                'always_display'    => true,
            ),
		),
	),
);
Redux::set_section( $opt_name, $section );

$section = array(
	'title'      => esc_html__( 'Advanced typography', 'reflex' ),
	'desc'       => esc_html__( '', 'reflex' ),
    'id'         => 'advanced_typography_section',
    'subsection' => true, 
	'fields'     => array(
        array(
			'id'                => 'advanced_typography',
			'title'             => esc_html__( 'Advanced typography', 'reflex' ),
			'subtitle'          => esc_html__( 'This option will change typography for your header text elements.', 'reflex' ),
			'type'              => 'typography',
            'google'            => true,
            'font_family_clear' => false,
            'default'           => array(
                'color'             => '#dddddd',
                'font-size'         => '14px',
                'font-family'       => 'Lato',
                'font-weight'       => '700',
                'text-transform'    => 'uppercase',
            ),
            'output'            => array( 'h2.site-description, h2.entry-title, .site-description' ),
            'preview'           => array(
                'always_display'    => true,
            ),
            'select2' => array(
                '1' => 'font',
                '2' => 'dddd',
            ),
		),

	),
);
Redux::set_section( $opt_name, $section );