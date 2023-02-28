<?php 

function gget_custom_css() {
    $output          = '';
    $custom_css      = reflex_get_opt( 'custom_css' );
    $css_desktop     = reflex_get_opt( 'css_desktop' );
    $css_tablet      = reflex_get_opt( 'css_tablet' );
    $css_wide_mobile = reflex_get_opt( 'css_wide_mobile' );
    $css_mobile      = reflex_get_opt( 'css_mobile' );

    if ( $custom_css ) {
        $output .= $custom_css;
    }

    if ( $css_desktop ) {
        $output .= '@media (min-width: 1025px) {' . "\n";
        $output .= "\t" . $css_desktop . "\n";
        $output .= '}' . "\n\n";
    }

    if ( $css_tablet ) {
        $output .= '@media (min-width: 768px) and (max-width: 1024px) {' . "\n";
        $output .= "\t" . $css_tablet . "\n";
        $output .= '}' . "\n\n";
    }

    if ( $css_wide_mobile ) {
        $output .= '@media (min-width: 577px) and (max-width: 767px) {' . "\n";
        $output .= "\t" . $css_wide_mobile . "\n";
        $output .= '}' . "\n\n";
    }

    if ( $css_mobile ) {
        $output .= '@media (max-width: 576px) {' . "\n";
        $output .= "\t" . $css_mobile . "\n";
        $output .= '}' . "\n\n";
    }

    return $output;
}



    function reflex_custom_css() {
        $upload_dir = wp_upload_dir(); 
        $base_dir = wp_get_upload_dir(); 
        $styles = gget_custom_css();
        if ( $styles || is_customize_preview() ) :
            $type_attr = current_theme_supports( 'html5', 'style' ) ? '' : ' type="text/css"';
    
            $file = file_put_contents($upload_dir['basedir']."/new-style-function.css", strip_tags( $styles ) );
            move_uploaded_file($file, $upload_dir['baseurl']);
    
        endif;
    }
    add_action( 'save_post', 'reflex_custom_css' );
    remove_action('wp_head', 'wp_custom_css_cb', 101);
    
    
    
    function reflex_script1s() {
    
        
        $current_theme_version = woodmart_get_theme_info( 'Version' );
        // wp_enqueue_style( 'style-customize2', get_template_directory_uri() . '/inc/style.php',false,'1.1','all');
        $upload_path = wp_upload_dir(); 
        wp_enqueue_style ('style-customization', $upload_path['baseurl'] .'/new-style-function.css', false, $current_theme_version, );
        
    }
    add_action( 'wp_enqueue_scripts', 'reflex_script1s' );
    