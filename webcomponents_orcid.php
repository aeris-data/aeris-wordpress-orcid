<?php
/**
 * webcomponents load scripts
 */

// Path

set_time_limit(0);


function aeris_load_scripts_orcid() {
	
	
		add_action('wp_head', 'aeris_orcid_import_components');
	
	
}

add_action( 'init', 'aeris_load_scripts_orcid' );


function aeris_orcid_import_components() {
	if(!is_customize_preview() && !is_admin() ) {
		

			echo '<link rel="stylesheet" href="https://rawgit.com/aeris-data/aeris-metadata-components-vjs/develop/src/style/aeris-metadata-shared-style.css">';
			echo '<script type="text/javascript" component="aeris-data/aeris-commons-components-vjs@latest" src="https://rawgit.com/aeris-data/aeris-component-loader/master/aerisComponentLoader.js" ></script>';
		
		
	}
}





?>