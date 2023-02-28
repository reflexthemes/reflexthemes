<?php 
if ( ! defined( 'WOODMART_THEME_DIR' ) ) {
	exit( 'No direct script access allowed' );
}

$section = array(
    'id'        => 'portfolio_section',
	'title'     => esc_html__( 'Portfolio', 'reflex' ),
	'icon'      => 'dashicons dashicons-grid-view',
	'fields'    => array(
        array(
            'id'            => 'portfolio',
            'title'         => esc_html__( 'Portfolio' , 'reflex' ),
            'subtitle'      => esc_html__( 'Enable/disable portfolio on your website.' , 'reflex' ),
            'type'          => 'switch',
            'on'            => 'ON',
            'off'           => 'OFF',
            'default'       => true,
        ),
        array(
            'id'            => 'portfolio_item_slug',
            'title'         => esc_html__('Portfolio project URL slug', 'reflex'),
            'subtitle'      => esc_html__( 'IMPORTANT: You need to go to WordPress Settings -> Permalinks and resave them to apply these settings.' , 'reflex' ),
            'type'          => 'text',
            'placeholder'   => esc_html__( 'portfolio' , 'redux_docs_generator' )
        ),
        array(
            'id'            => 'portfolio_cat_slug',
            'title'         => esc_html__('Portfolio category URL slug', 'reflex'),
            'subtitle'      => esc_html__( 'IMPORTANT: You need to go to WordPress Settings -> Permalinks and resave them to apply these settings.' , 'reflex' ),
            'type'          => 'text',
            'placeholder'   => esc_html__( 'portfolio-cat' , 'reflex' )
        ),
    ),
);
Redux::set_section( $opt_name, $section );

/**
 * Portfolio archive.
 */
$section = array(
    'id'            => 'portfolio_archive_section',
	'title'         => esc_html__( 'Portfolio archive', 'reflex' ),
    'subsection'    => true,
	'fields'        => array(

        array(
            'id'            => 'portoflio_filters',
            'title'         => esc_html__( 'Show categories filters' , 'reflex' ),
            'subtitle'      => esc_html__( 'Display categories list that allows you to filter your portfolio projects.' , 'reflex' ),
            'type'          => 'switch',
            'default'       => true,
        ),

        array(
            'id'            => 'portfolio_filters_type',
            'title'         => esc_html__( 'Categories filters' , 'reflex' ),
            'subtitle'      => esc_html__( 'You can switch between links that will lead to project categories and masonry filters within one page only. Or turn off the filters completely.' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                'links'          => esc_html__( 'Links', 'reflex' ),
                'masonry'        => esc_html__( 'Masonry', 'reflex' ),
            ),
            'default'       => 'links',
            'required' => array(
                array(
                    'portoflio_filters',
                    'equals',
                    true,
                )
            ),
        ),

        array(
            'id'            => 'ajax_portfolio',
            'title'         => esc_html__( 'AJAX portfolio' , 'reflex' ),
            'subtitle'      => esc_html__( 'Use AJAX functionality for portfolio categories links.' , 'reflex' ),
            'type'          => 'switch',
            'required' => array(
                array(
                    'portfolio_filters_type',
                    'equals',
                    'links',
                ),
                array(
                    'portoflio_filters',
                    'equals',
                    true,
                )
            ),
            'default'       => true,
        ),

        array(
            'id'            => 'portfolio_full_width',
            'title'         => esc_html__( 'Full Width portfolio' , 'reflex' ),
            'subtitle'      => esc_html__( 'Makes the container 100% width of the page.' , 'reflex' ),
            'type'          => 'switch',
            'default'       => false,
        ),

        array(
            'id'            => 'projects_columns',
            'title'         => esc_html__( 'Projects columns' , 'reflex' ),
            'subtitle'      => esc_html__( 'How many projects you want to show per row.' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                '2'             => esc_html__( '2', 'reflex' ),
                '3'             => esc_html__( '3', 'reflex' ),
                '4'             => esc_html__( '4', 'reflex' ),
                '5'             => esc_html__( '5', 'reflex' ),
                '6'             => esc_html__( '6', 'reflex' ),
            ),
            'default'       => '3',
        ),

        array(
            'id'            => 'portfolio_spacing',
            'title'         => esc_html__( 'Space between projects' , 'reflex' ),
            'subtitle'      => esc_html__( 'You can set different spacing between blocks on portfolio page.' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                '0'             => esc_html__( '0', 'reflex' ),
                '2'             => esc_html__( '2', 'reflex' ),
                '5'             => esc_html__( '5', 'reflex' ),
                '10'            => esc_html__( '10', 'reflex' ),
                '20'            => esc_html__( '20', 'reflex' ),
                '30'            => esc_html__( '30', 'reflex' ),
            ),
            'default'       => '30',
        ),

        array(
            'id'            => 'portoflio_per_page',
            'title'         => esc_html__( 'Items per page' , 'reflex' ),
            'subtitle'      => esc_html__( 'Number of portfolio projects that will be displayed on one page.' , 'reflex' ),
            'type'          => 'text',
            'default'       => '12',
        ),

        array(
            'id'            => 'portfolio_pagination',
            'title'         => esc_html__( 'Portfolio pagination' , 'reflex' ),
            'subtitle'      => esc_html__( 'Choose a type for the pagination on your portfolio page.' , 'reflex' ),
            'type'          => 'button_set',
            'options'       => array(
                'pagination'    => esc_html__( 'Pagination links', 'reflex' ),
                'load_more'     => esc_html__( '"Load more" button', 'reflex' ),
                'infinit'       => esc_html__( 'Infinit scrolling', 'reflex' ),
            ),
            'default'       => 'pagination',
        ),

        array(
            'id'            => 'portoflio_orderby',
            'title'         => esc_html__( 'Portfolio order by' , 'reflex' ),
            'subtitle'      => esc_html__( 'Select a parameter for projects order.' , 'reflex' ),
            'type'          => 'select',
            'options'       => array(
                'date'          => esc_html__( 'Date', 'reflex' ),
                'ID'            => esc_html__( 'ID', 'reflex' ),
                'title'         => esc_html__( 'Title', 'reflex' ),
                'modified'      => esc_html__( 'Modified', 'reflex' ),
                'menu_order'    => esc_html__( 'Menu order', 'reflex' ),
            ),
            'default'       => 'date',
        ),

        array(
            'id'            => 'portoflio_order',
            'title'         => esc_html__( 'Portfolio order' , 'reflex' ),
            'subtitle'      => esc_html__( 'Choose ascending or descending order.' , 'reflex' ),
            'type'          => 'select',
            'options'       => array(
                'DESC'          => esc_html__( 'DESC', 'reflex' ),
                'ASC'           => esc_html__( 'ASC', 'reflex' ),
            ),
            'default'       => 'DESC',
        ),

        // Start New Subsection title.
        array(
            'id'            => 'subsection-portfolio-options-start',
            'subtitle'      => esc_html__( 'Project options', 'reflex' ),
            'type'          => 'subsection',
        ),

        array(
            'id'            => 'portoflio_style',
            'title'         => esc_html__('Portfolio Style', 'reflex'), 
            'subtitle'      => esc_html__('You can use different styles for your projects.', 'reflex'),
            'type'          => 'image_select',
            'options'       => array(
                'hover'    => array(
                    'alt'       => esc_html__( 'Show text on mouse over', 'reflex' ), 
                    'title'     => esc_html__( 'Show text on mouse over', 'reflex' ), 
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/sidebar-layout/none.png',
                ),
                'hover-inverse'  => array(
                    'alt'       => esc_html__( 'Alternative', 'reflex' ), 
                    'title'     => esc_html__( 'Alternative', 'reflex' ), 
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/sidebar-layout/left.png',
                ),
                'text-shown' => array(
                    'alt'       => esc_html__( 'Text under image', 'reflex' ),
                    'title'     => esc_html__( 'Text under image', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/sidebar-layout/right.png',
                ),
                'parallax' => array(
                    'alt'       => esc_html__( 'Mouse move parallax', 'reflex' ),
                    'title'     => esc_html__( 'Mouse move parallax', 'reflex' ),
                    'img'       => WOODMART_ASSETS_IMAGES . '/settings/sidebar-layout/right.png',
                ),
            ),
            'default' => 'hover',
        ),

        array(
            'id'            => 'portoflio_image_size',
            'title'         => esc_html__( 'Images size' , 'reflex' ),
            'subtitle'      => esc_html__( 'Select a image size for project images.' , 'reflex' ),
            'type'          => 'select',
            'options'       => array(
                'default'       => esc_html__( 'Default', 'reflex' ),
                'thumbnail'     => esc_html__( 'Thumbnail', 'reflex' ),
                'medium'        => esc_html__( 'Medium', 'reflex' ),
                'large'         => esc_html__( 'Large', 'reflex' ),
                'full'          => esc_html__( 'Full', 'reflex' ),
            ),
            'default'       => 'default',
        ),
    ),
);
Redux::set_section( $opt_name, $section );

/**
 * Single post.
 */
$section = array(
    'id'            => 'portfolio_singe_project_section',
	'title'         => esc_html__( 'Single project', 'reflex' ),
    'subsection'    => true,
	'fields'        => array(

        array(
			'id'            => 'single_portfolio_header',
			'title'         => esc_html__( 'Single portfolio header', 'reflex' ),
			'subtitle'      => esc_html__( 'You can use different header for your single portfolio page.', 'reflex' ),
            'placeholder'   => esc_html__( 'Select' , 'reflex' ),
            'width'         => '50%',
			'type'          => 'select',
            'data' 			=> 'page',
		),

        array(
            'id'            => 'single_portfolio_title_in_page_title',
            'title'         => esc_html__( 'Project title in page heading' , 'reflex' ),
            'subtitle'      => esc_html__( 'Display project title instead of portfolio page title in page heading.' , 'reflex' ),
            'type'          => 'switch',
            'default'       => false,
        ),

        array(
            'id'            => 'portfolio_navigation',
            'title'         => esc_html__( 'Projects navigation' , 'reflex' ),
            'subtitle'      => esc_html__( 'Next and previous projects links on single project page.' , 'reflex' ),
            'type'          => 'switch',
            'default'       => true,
        ),

        array(
            'id'            => 'portfolio_related',
            'title'         => esc_html__( 'Related Projects' , 'reflex' ),
            'subtitle'      => esc_html__( 'Show related projects carousel.' , 'reflex' ),
            'type'          => 'switch',
            'default'       => true,
        ),
        
    ),
);
Redux::set_section( $opt_name, $section );