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

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<h2>WP Rest API Test Bed</h2>

<p>Use the controls below to choose request parameters and display the output.</p>
<div class="rest-request-string-container">
	<input id="rest-request-string">
	<!-- <a id="viewRequestEndpoint" target="_blank" href="#">View Actual Request From Endpoint</a> -->
</div>
<a class="load-rest-content button" href="pages">Pages</a>

<a class="load-rest-content button" href="posts">Posts</a>

<!-- <a class="load-rest-content button" href="comments">Comments</a> -->

<!-- <a class="load-rest-content button" href="#">Custom Post Types</a> -->

<div id="js-data-formated"></div>

<p>Below is the JSON output by the request (note that HTML in the rendered content is being stripped out by the plugin):</p>

<div id="js-data-json"></div>