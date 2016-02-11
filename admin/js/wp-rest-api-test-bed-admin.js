(function( $ , _ ) {
	'use strict';
	//Thanks Rachel Baker for giving me a starting point!


	var dataString;
	//Dom caching
	var $restContentBtn = $( '.load-rest-content' ),
		$mediaRestContentBtn = $( '#media-rest-content' ),
		$restRequestStringInput = $( '#rest-request-string' ),
		$responseContainerFormated = $( '#js-data-formated' ),
		$responseContainerJSON =  $( '#js-data-json' ),
		$viewRequestEndpoint = $('#viewRequestEndpoint');

	function outputJsonData(data){
		dataString = JSON.stringify(data, undefined, 4);
		$responseContainerJSON.append( dataString );
	}


	$restContentBtn.on( 'click', function(){
		 
		var apiEndpointData = $(this).attr('href'), 
			tmpl = '<article id="post-<%= id %>"><h1><%= title %></h1><%= content %></article>';

		$.get( '/wp-json/wp/v2/' + apiEndpointData , function( data ) {

			$responseContainerFormated.empty();
			$restRequestStringInput.val( '/wp-json/wp/v2/' + apiEndpointData ) ;
			$viewRequestEndpoint.attr("href", '/wp-json/wp/v2/' + apiEndpointData )

			for ( var key in data ) {

				var output = {
						id : data[ key ].id,
						title : data[ key ].title.rendered,
						content : data[ key ].content.rendered,
					},
					$template = $( _.template( tmpl , output ) );

				$responseContainerFormated.append( $template );
			}

			outputJsonData(data);

		});

		return false;
	});


	$mediaRestContentBtn.on( 'click', function(){

		var apiEndpointData = $(this).attr('href'),
			tmpl = '<article id="post-<%= id %>" class="media">' +
				   '<% if (mediatype == "image") { %>' +
				   '<img src="<%= imgsrc %>">' +
				   '<% } else { %>' +
				   '<img src="/wp-includes/images/media/document.png">' +
				   '<% } %>' +
				   '<p><%= filename %></p>' +
				   '</article>';


		$.get( '/wp-json/wp/v2/' + apiEndpointData , function( data ) {

			$responseContainerFormated.empty();
			$restRequestStringInput.val( '/wp-json/wp/v2/' + apiEndpointData ) ;
			$viewRequestEndpoint.attr("href", '/wp-json/wp/v2/' + apiEndpointData )

			for ( var key in data ) {

				var output = {
						id : data[ key ].id,
						mediatype: data[ key ].media_type,
						imgsrc: data[ key ].source_url,
						filename: data[ key ].title.rendered
					},
					$template = $( _.template( tmpl , output ) );

				$responseContainerFormated.append( $template );
			}

			outputJsonData(data);

		});

		return false;
	});






})( jQuery , _ );
