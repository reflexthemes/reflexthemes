<?php 
global $reflex_options;

function get_custom_css() {
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


