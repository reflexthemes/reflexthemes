<?php 
if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );
}

$section = array(
    'id'        => 'social_profiles',
	'title'     => esc_html__( 'Social profiles', 'reflex' ),
	'icon'      => 'dashicons dashicons-networking',
	'fields'    => array(

        array(
            'id'            => 'sticky_social',
            'title'         => esc_html__( 'Sticky social links' , 'reflex' ),
            'subtitle'      => esc_html__( 'Social buttons will be fixed on the screen when you scroll the page.' , 'reflex' ),
            'type'          => 'switch',
            'default'       => true,
        ),

        array(
            'id'            => 'sticky_social_position',
            'title'         => esc_html__( 'Sticky social links position' , 'reflex' ),
            'subtitle'      => esc_html__( '' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                'left'          => esc_html__( 'Left', 'reflex' ),
                'right'         => esc_html__( 'Right', 'reflex' ),
            ),
            'default'       => 'right',
            'required'      => array(
                array(
                    'sticky_social',
                    'equals',
                    true,
                )
            ),
        ),

        array(
            'id'            => 'sticky_social_type',
            'title'         => esc_html__( 'Sticky social links type' , 'reflex' ),
            'subtitle'      => esc_html__( '' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                'share'          => esc_html__( 'Share', 'reflex' ),
                'follow'        => esc_html__( 'Follow', 'reflex' ),
            ),
            'default'       => 'follow',
            'required' => array(
                array(
                    'sticky_social',
                    'equals',
                    true,
                )
            ),
        ),

    ),
);
Redux::set_section( $opt_name, $section );

/**
 * Portfolio archive.
 */
$section = array(
    'id'            => 'social_links',
	'title'         => esc_html__( 'Links to social profiles', 'reflex' ),
    'subsection'    => true,
	'fields'        => array(

        array(
            'id'   => 'social_follow_notice',
            'type' => 'info',
            'style' => 'info',
            'desc' => esc_html__( 'Configure your [social_buttons] shortcode. You can leave the field empty to remove a particular link. Note that there are two types of social buttons. First one is SHARE buttons [social_buttons type="share"]. It displays icons that share your page on social media. And the second one is FOLLOW buttons [social_buttons type="follow"]. Simply displays links to your social profiles. You can configure both types here.', 'reflex' ),
        ),

        array(
            'id'            => 'fb_link',
            'title'         => esc_html__( 'Facebook link' , 'reflex' ),
            'type'          => 'text',
            'default'       => '#',
            'class'         => 'width-50',
        ),

        array(
            'id'            => 'twitter_link',
            'title'         => esc_html__( 'Twitter link' , 'reflex' ),
            'type'          => 'text',
            'default'       => '#',
            'class'         => 'width-50',
        ),

        array(
            'id'            => 'isntagram_link',
            'title'         => esc_html__( 'Instagram' , 'reflex' ),
            'type'          => 'text',
            'default'       => '#',
            'class'         => 'width-50',
        ),

        array(
            'id'            => 'pinterest_link',
            'title'         => esc_html__( 'Pinterest link' , 'reflex' ),
            'type'          => 'text',
            'default'       => '#',
            'class'         => 'width-50',
        ),

        array(
            'id'            => 'youtube_link',
            'title'         => esc_html__( 'Youtube link' , 'reflex' ),
            'type'          => 'text',
            'default'       => '#',
        ),

        array(
            'id'            => 'tumblr_link',
            'title'         => esc_html__( 'Tumblr link' , 'reflex' ),
            'type'          => 'text',
            'default'       => '#',
        ),

        array(
            'id'            => 'linkedin_link',
            'title'         => esc_html__( 'LinkedIn link' , 'reflex' ),
            'type'          => 'text',
            'default'       => '#',
        ),

        array(
            'id'            => 'vimeo_link',
            'title'         => esc_html__( 'Vimeo link' , 'reflex' ),
            'type'          => 'text',
            'default'       => '#',
        ),

        array(
            'id'            => 'flickr_link',
            'title'         => esc_html__( 'Flickr link' , 'reflex' ),
            'type'          => 'text',
            'default'       => '#',
        ),

        array(
            'id'            => 'github_link',
            'title'         => esc_html__( 'Github link' , 'reflex' ),
            'type'          => 'text',
            'default'       => '#',
        ),

        array(
            'id'            => 'dribbble_link',
            'title'         => esc_html__( 'Dribbble link' , 'reflex' ),
            'type'          => 'text',
            'default'       => '#',
        ),

        array(
            'id'            => 'behance_link',
            'title'         => esc_html__( 'Behance link' , 'reflex' ),
            'type'          => 'text',
            'default'       => '#',
        ),

        array(
            'id'            => 'whatsapp_link',
            'title'         => esc_html__( 'WhatsApp link' , 'reflex' ),
            'type'          => 'text',
            'default'       => '#',
        ),

        array(
            'id'            => 'tg_link',
            'title'         => esc_html__( 'Telegram link' , 'reflex' ),
            'type'          => 'text',
            'default'       => '#',
        ),

    ),
);
Redux::set_section( $opt_name, $section );