(function($) {
	"use strict";
	
	$(document).ready(function() {
		
	
		/*-----------------------------------------------------------------------------------*/
		/*  Masonry & ImagesLoaded
		/*-----------------------------------------------------------------------------------*/ 	
		if ( $( '#influential-masonry' ).length ) {
			var $container = $('#influential-masonry').masonry();
			$container.imagesLoaded(function(){
				$container.masonry({
				  columnWidth: '.grid-sizer',
				  itemSelector: '.hentry',
				  transitionDuration: '0.3s'
				});
			});
		}
	
	});
	
})(jQuery);