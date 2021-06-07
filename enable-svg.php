<?php

/**
 * The plugin bootstrap file
 *
 * @link              wprashed.com
 * @since             1.0.0
 * @package           safan_enable_svg
 *
 * @wordpress-plugin
 * Plugin Name:       Safan Enable SVG
 * Plugin URI:        wprashed.com/safan-enable-svg
 * Description:       This plugin will enable svg support on your website.
 * Version:           1.0.0
 * Author:            Md Rashed Hossain
 * Author URI:        wprashed.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       safan-enable-svg
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SAFAN_ENABLE_SVG_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-safan-enable-svg-activator.php
 */
function activate_safan_enable_svg() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-safan-enable-svg-activator.php';
	safan_enable_svg_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-safan-enable-svg-deactivator.php
 */
function deactivate_safan_enable_svg() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-safan-enable-svg-deactivator.php';
	safan_enable_svg_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_safan_enable_svg' );
register_deactivation_hook( __FILE__, 'deactivate_safan_enable_svg' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-safan-enable-svg.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_safan_enable_svg() {

	$plugin = new safan_enable_svg();
	
	$plugin->run();

	function add_file_types_to_uploads($file_types){
		$new_filetypes = array();
		$new_filetypes['svg'] = 'image/svg+xml';
		$file_types = array_merge($file_types, $new_filetypes );
		return $file_types;
	}
	add_filter('upload_mimes', 'add_file_types_to_uploads');

}
run_safan_enable_svg();
