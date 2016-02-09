<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://lukepettway.name
 * @since      1.0.0
 *
 * @package    Wp_Rest_Api_Test_Bed
 * @subpackage Wp_Rest_Api_Test_Bed/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Rest_Api_Test_Bed
 * @subpackage Wp_Rest_Api_Test_Bed/includes
 * @author     Luke Pettway <luke.pettway@gmail.com>
 */
class Wp_Rest_Api_Test_Bed_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-rest-api-test-bed',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
