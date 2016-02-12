<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://lukepettway.name
 * @since      1.0.0
 *
 * @package    Wp_Rest_Api_Test_Bed
 * @subpackage Wp_Rest_Api_Test_Bed/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Rest_Api_Test_Bed
 * @subpackage Wp_Rest_Api_Test_Bed/admin
 * @author     Luke Pettway <luke.pettway@gmail.com>
 */
class Wp_Rest_Api_Test_Bed_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Rest_Api_Test_Bed_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Rest_Api_Test_Bed_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-rest-api-test-bed-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Rest_Api_Test_Bed_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Rest_Api_Test_Bed_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-rest-api-test-bed-admin.js', array( 'jquery' , 'underscore'), $this->version, true );

	}

	/**
	 * Add an options page under the Tools submenu
	 *
	 * @since  1.0.0
	 */

	public function add_management_page(){
		$this->plugin_screen_hook_suffix = add_management_page(
			__( 'WP Rest API Test Bed Settings', 'wp-rest-api-test-bed' ),
			__( 'WP Rest API Test Bed', 'wp-rest-api-test-bed' ),
			'manage_options',
			$this->plugin_name,
			array( $this, 'display_management_page' )
		);
	}

	/**
	 * Render the options page for plugin
	 *
	 * @since  1.0.0
	 */
	public function display_management_page() {
		include_once 'partials/wp-rest-api-test-bed-admin-display.php';
	}

}
