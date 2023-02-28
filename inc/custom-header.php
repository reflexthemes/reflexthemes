<?php

global $reflex_options;

// Sample implementation of the Custom Header feature
if ( ! function_exists( 'reflex_header_style' ) ) :

	function reflex_header_style() {
		
		?>
		<style type="text/css">
		<?php

		echo $reflex_options ['custom_css'];
	}
endif;



