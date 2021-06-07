<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       wprashed.com
 * @since      1.0.0
 *
 * @package    safan_enable_svg
 * @subpackage safan_enable_svg/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    safan_enable_svg
 * @subpackage safan_enable_svg/includes
 * @author     Md Rashed Hossain <rashedcse18@gmail.com>
 */
class safan_enable_svg_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'safan-enable-svg',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
