<?php

/*
Plugin Name: UpFront Beispielblock
Plugin URI: https://n3rds.work
Description: Beispiel-Plugin, mit dem Du Deine eigenen Plugins für UpFront erstellen kannst
Version: 1.0.3
Author: WMS N@W
Author URI: https://n3rds.work
License: GNU GPL v2
*/

add_action('after_setup_theme', 'register_example_block');
function register_example_block() {

    if ( !class_exists('UpFront') )
		return;

	require_once 'block-options.php';

	if (!class_exists('UpFrontBlockAPI') )
		return false;

	$class = 'UpFrontExampleBlock';
	$block_type_url = substr(WP_PLUGIN_URL . '/' . str_replace(basename(__FILE__), '', plugin_basename(__FILE__)), 0, -1);		
	$class_file = __DIR__ . '/block.php';
	$icons = array(
			'path' => __DIR__,
			'url' => $block_type_url
		);

	upfront_register_block(
		$class,
		$block_type_url,
		$class_file,
		$icons
	);

	/**
	 *
	 * Überprüft ob der UpFront Loader vorhanden ist
	 *
	 */		
	if ( version_compare(PADMA_VERSION, '1.1.70', '<=') ){			
		include_once $class_file;
	}

}