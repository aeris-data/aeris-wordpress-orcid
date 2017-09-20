<?php
/**
 * webcomponents load scripts
 */

// Path
define('AERISWEBCOMP_BASENAME', plugin_dir_path(dirname(__FILE__)).'/webcomponents2');
define('AERISWEBCOMP_DIR_URL', plugins_url('webcomponents2', AERISWEBCOMP_BASENAME));

set_time_limit(0);


function aeris_load_scripts_orcid() {
	
		add_action('wp_enqueue_scripts','aeris_orcid_load_polyfill');
		
		add_action('wp_enqueue_style','aeris_orcid_AerisWebComp_color_style');
		add_action('wp_head', 'aeris_orcid_import_components');
	
	
}

add_action( 'init', 'aeris_load_scripts_orcid' );

//Load webcomponents-js polyfill
function aeris_orcid_load_polyfill() {
	if(!is_customize_preview() && !is_admin()) {
		wp_register_script('webcomponentsjs', AERISWEBCOMP_DIR_URL.'/bower_components/webcomponentsjs/webcomponents.js', '', true);
		wp_enqueue_script('webcomponentsjs');
		
	}
}

function aeris_orcid_import_components() {
	if(!is_customize_preview() && !is_admin() ) {
		

			echo '<link rel="import" href="'.AERISWEBCOMP_DIR_URL.'/bower_components/paper-input/paper-input.html" />';
			echo '<link rel="stylesheet" href="https://rawgit.com/aeris-data/aeris-metadata-components-vjs/develop/src/style/aeris-metadata-shared-style.css">';
			echo '<script type="text/javascript" component="aeris-data/aeris-commons-components-vjs@latest" src="https://rawgit.com/aeris-data/aeris-component-loader/master/aerisComponentLoader.js" ></script>';
		
		
	}
}

// CSS colors theme Aeris
function aeris_orcid_AerisWebComp_color_style() {
	if(!is_customize_preview()  && !is_admin()) {
		wp_enqueue_style('style_webcomponents', plugin_dir_path(__FILE__). '/assets/css/components_style.css');
	}
}



?>