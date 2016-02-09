<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://lukepettway.name
 * @since             1.0.0
 * @package           Wp_Rest_Api_Test_Bed
 *
 * @wordpress-plugin
 * Plugin Name:       WP Rest API Test Bed
 * Plugin URI:        https://github.com/LukePettway/WP-Rest-Api-Test-Bed
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Luke Pettway
 * Author URI:        http://lukepettway.name
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-rest-api-test-bed
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-rest-api-test-bed-activator.php
 */
function activate_wp_rest_api_test_bed() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-rest-api-test-bed-activator.php';
	Wp_Rest_Api_Test_Bed_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-rest-api-test-bed-deactivator.php
 */
function deactivate_wp_rest_api_test_bed() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-rest-api-test-bed-deactivator.php';
	Wp_Rest_Api_Test_Bed_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_rest_api_test_bed' );
register_deactivation_hook( __FILE__, 'deactivate_wp_rest_api_test_bed' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-rest-api-test-bed.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_rest_api_test_bed() {

	$plugin = new Wp_Rest_Api_Test_Bed();
	$plugin->run();

}
run_wp_rest_api_test_bed();
