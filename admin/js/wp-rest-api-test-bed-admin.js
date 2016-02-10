(function( $ , _ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	 var $restContentBtn = $( '.load-rest-content' );
	 var $restRequestStringInput = $( '#rest-request-string' );

	 $restContentBtn.on( 'click', function(){
 		 //Thanks Rachel Baker for giving me a starting point!
		var apiEndpointData = $(this).attr('href'), 

		$responseContainerFormated = $( '#js-data-formated' ),
		$responseContainerJSON =  $( '#js-data-json' ),
		tmpl = '<article id="post-<%= id %>"><h1><%= title %></h1><%= content %></article>';

	 	$.get( '/wp-json/wp/v2/' + apiEndpointData , function( data ) {
	 		for ( var key in data ) {
	 			var output = {
	 				id : data[ key ].id,
	 				title : data[ key ].title.rendered,
	 				content : data[ key ].content.rendered,
	 				},
	 				$template = $( _.template( tmpl , output ) );
 				$responseContainerFormated.empty();
 				$restRequestStringInput.empty();
 				$restRequestStringInput.val( '/wp-json/wp/v2/' + apiEndpointData ) ;
				$responseContainerFormated.append( $template );
				//$viewRequestEndpoint.attr(href,)
	 		}

	 		var dataString = JSON.stringify(data);

	 		//strip out html from rendered content until I have a better solution
	 		//dataString = dataString.replace(/<\/?([a-z][a-z0-9]*)\b[^>]*>/gi, '');

	 		$responseContainerJSON.text( dataString );
	 	});

	 	return false;
	 });

})( jQuery , _ );
