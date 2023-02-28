<?php 
if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );
}

$section = array(
    'id'        => 'others_section',
	'title'     => esc_html__( 'Others', 'reflex' ),
	'icon'      => 'dashicons dashicons-admin-settings',
	'fields'    => array(
        array(
            'id'            => 'negative_gap',
            'title'         => esc_html__( 'Elementor sections negative margin', 'reflex' ),
            'subtitle'      => esc_html__( 'Add a negative margin to each Elementor section to align the content with your website container.', 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                'enabled'       => esc_html__( 'Enabled', 'reflex' ),
                'disabled'      => esc_html__( 'Disabled', 'reflex' ),
                'Large'         => esc_html__( 'Large', 'reflex' ),
            ),
            'default'       => 'enabled',
        ),
        array(
            'id'            => 'sticky_notifications',
            'title'         => esc_html__('Sticky notifications', 'reflex'),
            'subtitle'      => esc_html__( '' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'YES',
            'off'           => 'NO',
            'default'       => false,
        ),
        array(
            'id'            => 'reflex_slider',
            'title'         => esc_html__('Enable custom slider', 'reflex'),
            'subtitle'      => esc_html__( 'If you enable this option, a new post type for sliders will be added to your Dashboard menu. You will be able to create sliders with page builder and place them on any page on your website.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'YES',
            'off'           => 'NO',
            'default'       => true,
        ),
        array(
            'id'            => 'allow_upload_svg',
            'title'         => esc_html__('Allow SVG upload', 'reflex'),
            'subtitle'      => esc_html__( 'Allow SVG uploads as well as SVG format for custom fonts. We suggest you to use <a href="https://wordpress.org/plugins/safe-svg/">this plugin</a> to be sure that all uploaded content is safe. If you will install this plugin, you can disable this option.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'YES',
            'off'           => 'NO',
            'default'       => true,
        ),
        array(
            'id'            => 'rev_slider_inherit_theme_font',
            'title'         => esc_html__('Slider Revolution inherit theme font', 'reflex'),
            'type'          => 'switch',
            'on'            => 'YES',
            'off'           => 'NO',
            'default'       => false,
        ),
        array(
			'id'            => 'enable_page_builder',
			'title'         => esc_html__( 'Enable page builder', 'reflex' ),
			'subtitle'      => esc_html__( 'You need to select "Auto" value here. It will detect which one is currently installed. If both builders are installed, the WPBakery will be used.', 'reflex' ),
			'type'          => 'button_set',
            'options'       => array(
                'wpb'            => esc_html__( 'WPB', 'reflex' ),
                'elementor'      => esc_html__( 'Elementor', 'reflex' ),
                'auto'           => esc_html__( 'Auto', 'reflex' ),
            ),
            'default' => 'elementor',
		),
	),
);
Redux::set_section( $opt_name, $section );
