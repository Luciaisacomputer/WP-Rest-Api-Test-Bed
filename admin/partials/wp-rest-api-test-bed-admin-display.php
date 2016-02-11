<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://lukepettway.name
 * @since      1.0.0
 *
 * @package    Wp_Rest_Api_Test_Bed
 * @subpackage Wp_Rest_Api_Test_Bed/admin/partials
 */
?>

<h2>WP Rest API Test Bed</h2>

<?php if( is_plugin_active( 'rest-api/plugin.php' ) || class_exists( 'WP_REST_Controller' ) ): ?>

<p>Use the controls below to choose request parameters and display the output.</p>
<div class="rest-request-string-container">
	<input id="rest-request-string" value="/wp-json/wp/v2/">
	<a id="viewRequestEndpoint" target="_blank" href="/wp-json/wp/v2/">View Route Page</a>
</div>
<a class="load-rest-content button" href="pages">Pages</a>

<a class="load-rest-content button" href="posts">Posts</a>

<!-- <a class="load-rest-content button" href="comments">Comments</a> -->
<a id="media-rest-content" class="button" href="media">Media</a>

<!-- <a class="load-rest-content button" href="#">Custom Post Types</a> -->
<p>Rendered content from request:</p>

<div id="js-data-formated"></div>

<p>Below is the JSON output by the request:</p>

<div id="js-data-json-container">
	<div id="js-data-json"></div>
</div>

<?php else: ?>	

<p>Hmmm.... It looks like you don't have the WP REST API Installed or 
it isn't active. Make sure you download the latest version of it <a href="https://wordpress.org/plugins/rest-api/" target="_blank">here</a>.</p>

<?php endif; ?>