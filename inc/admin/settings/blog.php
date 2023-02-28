<?php 
if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );
}

$section = array(
    'id'        => 'blog_section',
	'title'     => esc_html__( 'Blog', 'reflex' ),
	'icon'      => 'dashicons dashicons-welcome-write-blog',
	'fields'    => array(
        array(
            'id'            => 'blog_layout',
            'title'         => esc_html__('Blog Layout', 'reflex'), 
            'subtitle'      => esc_html__('Select main content and sidebar alignment for blog pages.', 'reflex'),
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
            'id'            => 'blog_sidebar_width',
            'title'         => esc_html__( 'Blog Sidebar size' , 'reflex' ),
            'subtitle'      => esc_html__( 'You can set different sizes for your blog pages sidebar' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                '2'             => 'SMALL',
                '3'             => 'MEDIUM',
                '4'             => 'LARGE',
            ),
            'default'       => '3',
        ),
        array(
            'id'            => 'single_post_justified_gallery',
            'title'         => esc_html__('Justify gallery', 'reflex'),
            'subtitle'      => esc_html__( 'This option will replace standard WordPress gallery with "Justified gallery" JS library.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'ON',
            'off'           => 'OFF',
            'default'       => false,
        ),
    ),
);
Redux::set_section( $opt_name, $section );

/**
 * Blog archive.
 */
$section = array(
    'id'            => 'blog_archive_section',
	'title'         => esc_html__( 'Blog archive', 'reflex' ),
    'subsection'    => true,
	'fields'        => array(
        array(
			'id'            => 'blog_design',
			'title'         => esc_html__( 'Blog Design', 'reflex' ),
			'subtitle'      => esc_html__( 'Choose one of the blog designs available in the theme.', 'reflex' ),
            'placeholder'   => esc_html__( 'Select' , 'reflex' ),
            'width'         => '50%',
			'type'          => 'select',
            'options'       => array(
                'default'            => 'Default',
                'default-alt'        => 'Default alternative',
                'small-images'       => 'Small images',
                'masonry'            => 'Masonry grid',
                'mask'               => 'Mask',
            ),
            'default'  => 'default',
		),
        array(
            'id'            => 'blog_style',
            'title'         => esc_html__( 'Blog Style' , 'reflex' ),
            'subtitle'      => esc_html__( 'You can use flat style or add a shadow to your blog posts.' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                'flat'          => esc_html__( 'Flat', 'reflex' ),
                'shadow'        => esc_html__( 'With shadow', 'reflex' ),
            ),
            'default'       => 'shadow',
        ),
        array(
            'id'            => 'blog_columns',
            'title'         => esc_html__( 'Blog items columns' , 'reflex' ),
            'subtitle'      => esc_html__( 'Number of columns for the blog grid.' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                '2'             => '2',
                '3'             => '3',
                '4'             => '4',
            ),
            'default'       => '3',
            'required' => array(
                array(
                    'blog_design',
                    'equals',
                    array( 'masonry', 'mask', 'meta-image' ),
                )
            ),
        ),
        array(
            'id'            => 'blog_spacing',
            'title'         => esc_html__( 'Space between posts' , 'reflex' ),
            'subtitle'      => esc_html__( 'You can set the different spacing between posts on the blog page.' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                '0'             => '0',
                '2'             => '2',
                '5'             => '5',
                '10'            => '10',
                '20'            => '20',
                '30'            => '30',
            ),
            'default'       => '20',
        ),
        array(
            'id'            => 'blog_pagination',
            'title'         => esc_html__( 'Blog pagination' , 'reflex' ),
            'subtitle'      => esc_html__( 'Choose a type for the pagination on your blog page.' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                'pagination'    => esc_html__( 'Pagination links', 'reflex' ),
                'load_more'     => esc_html__( '"Load more" button', 'reflex' ),
                'infinit'       => esc_html__( 'Infinit scrolling', 'reflex' ),
            ),
            'default'       => 'pagination',
        ),
        // Start New Subsection title.
        array(
            'id' => 'subsection-blog-post-content-start',
            'subtitle'=> esc_html__( 'Post content', 'reflex' ),
            'type' => 'subsection',
        ),
        array(
            'id'            => 'blog_excerpt',
            'title'         => esc_html__( 'Posts excerpt' , 'reflex' ),
            'subtitle'      => esc_html__( 'If you set this option to "Excerpt" then you would be able to set a custom excerpt for each post or it will be cut from the post content. If you choose "Full content" then all content will be shown, or you can add the "Read more button" while editing the post and by doing this cut your excerpt length as you need.' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                'excerpt'       => esc_html__( 'Excerpt', 'reflex' ),
                'full'          => esc_html__( 'Full content', 'reflex' ),
            ),
            'default'       => 'full',
        ),
        array(
            'id'            => 'blog_words_or_letters',
            'title'         => esc_html__( 'Excerpt length by words or letters' , 'reflex' ),
            'subtitle'      => esc_html__( 'Limit your excerpt text for posts by words or letters.' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                'word'          => esc_html__( 'Word', 'reflex' ),
                'letter'        => esc_html__( 'Letters', 'reflex' ),
            ),
            'default'       => 'letter',
            'required' => array(
                array(
                    'blog_excerpt',
                    'equals',
                    array( 'excerpt' ),
                )
            ),
        ),
        array(
            'id'            => 'blog_excerpt_length',
            'title'         => esc_html__( 'Excerpt length' , 'reflex' ),
            'subtitle'      => esc_html__( 'Number of words or letters that will be displayed for each post if you use "Excerpt" mode and don\'t set custom excerpt for each post..' , 'reflex' ),
            'type'          => 'text',
            'default'       => 135,
            'required' => array(
                array(
                    'blog_excerpt',
                    'equals',
                    array( 'excerpt' ),
                )
            ),
        ),
    ),
);
Redux::set_section( $opt_name, $section );

/**
 * Single post.
 */
$section = array(
    'id'            => 'blog_singe_post_section',
	'title'         => esc_html__( 'Single post', 'reflex' ),
    'subsection'    => true,
	'fields'        => array(
        array(
			'id'            => 'single_post_header',
			'title'         => esc_html__( 'Single post header', 'reflex' ),
			'subtitle'      => esc_html__( 'You can use different header for your single post page.', 'reflex' ),
            'placeholder'   => esc_html__( 'Select' , 'reflex' ),
            'width'         => '50%',
			'type'          => 'select',
            'data' 			=> 'page',
		),
        array(
            'id'            => 'single_post_design',
            'title'         => esc_html__( 'Single post design' , 'reflex' ),
            'subtitle'      => esc_html__( 'You can use flat style or add a shadow to your blog posts.' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                'default'          => esc_html__( 'Default', 'reflex' ),
                'large_image'      => esc_html__( 'Large image', 'reflex' ),
            ),
            'default'       => 'default',
        ),

        // Start New Subsection title.
        array(
            'id' => 'subsection-single-post-elements-start',
            'subtitle'=> esc_html__( 'Elements', 'reflex' ),
            'type' => 'subsection',
        ),
        array(
            'id'            => 'blog_share',
            'title'         => esc_html__( 'Share buttons' , 'reflex' ),
            'subtitle'      => esc_html__( 'Display share icons on single post page.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'ON',
            'off'           => 'OFF',
            'default'       => true,
            'class'         => 'width-col-6',
        ),
        array(
            'id'            => 'blog_navigation',
            'title'         => esc_html__( 'Posts navigation' , 'reflex' ),
            'subtitle'      => esc_html__( 'Next and previous posts links on single post page.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'ON',
            'off'           => 'OFF',
            'default'       => true,
            'class'         => 'width-col-6',
        ),
        array(
            'id'            => 'blog_author_bio',
            'title'         => esc_html__( 'Author bio' , 'reflex' ),
            'subtitle'      => esc_html__( 'Display information about the post author.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'ON',
            'off'           => 'OFF',
            'default'       => true,
            'class'         => 'width-col-6',
        ),
        array(
            'id'            => 'blog_related_posts',
            'title'         => esc_html__( 'Related posts' , 'reflex' ),
            'subtitle'      => esc_html__( 'Show related posts on single post page (by tags).' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'ON',
            'off'           => 'OFF',
            'default'       => true,
            'class'         => 'width-col-6',
        ),
    ),
);
Redux::set_section( $opt_name, $section );