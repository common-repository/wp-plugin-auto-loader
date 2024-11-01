<?php

/*
Plugin Name: WP Plugin Auto-Loader
Plugin URI: http://www.alexking.org/software/wordpress/
Description: A plugin that auto-loads your other WordPress plugins. Enable this plugin and every .php file in the wp-content/plugins/ directory will be automatically loaded.
Author: Alex King
Author URI: http://www.alexking.org/
*/ 

$path = ABSPATH . 'wp-content/plugins/';
if ($handle = opendir($path)) {
	while (false !== ($file = readdir($handle))) {
		if ($file != 'wp-plugin-auto-loader.php' && substr($file, 0, 1) != '.' && 
		    is_file($path.$file) && strtolower(substr($file, -4, 4)) == ".php") { 
			include($path.$file);
		}
	}
}

?>