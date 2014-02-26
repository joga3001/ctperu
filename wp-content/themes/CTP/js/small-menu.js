/**

 * Handles toggling the main navigation menu for small screens.

 */

jQuery( document ).ready( function( $ ) {

	var $masthead = $( '#masthead' ),

	    timeout = false;



	$.fn.smallMenu = function() {

		$masthead.find( '.site-navigation' ).removeClass( 'main-navigation' ).addClass( 'main-small-navigation' );

		$masthead.find( '.site-navigation h1' ).removeClass( 'assistive-text' ).addClass( 'menu-toggle' );


		$( '.menu-toggle' ).unbind( 'click' ).click( function() {

			$masthead.find( '.menu' ).toggle();

			$( this ).toggleClass( 'toggled-on' );

		} );

	};



	// Check viewport width on first load.

	if ( $( window ).width() < 600 )

		$.fn.smallMenu();



	// Check viewport width when user resizes the browser window.

	$( window ).resize( function() {

		var browserWidth = $( window ).width();



		if ( false !== timeout )

			clearTimeout( timeout );



		timeout = setTimeout( function() {

			if ( browserWidth < 600 ) {

				$.fn.smallMenu();

			} else {

				$masthead.find( '.site-navigation' ).removeClass( 'main-small-navigation' ).addClass( 'main-navigation' );

				$masthead.find( '.site-navigation h1' ).removeClass( 'menu-toggle' ).addClass( 'assistive-text' );

				$masthead.find( '.menu' ).removeAttr( 'style' );

			}

		}, 200 );

	} );
	
	// register form
	$(".tab_content_login").hide();
		$("ul.tabs_login li:first").addClass("active_login").show();
		$(".tab_content_login:first").show();
		$("ul.tabs_login li").click(function() {
			$("ul.tabs_login li").removeClass("active_login");
			$(this).addClass("active_login");
			$(".tab_content_login").hide();
			var activeTab = $(this).find("a").attr("href");
			if ($.browser.msie) {$(activeTab).show();}
			else {$(activeTab).show();}
			return false;
		});	
		
		/////////
		
		// tabs
		
		$(function(){
		// start jQ //////////////////////////////
		
			// show the first tab
			$("#info div").hide().eq(0).show();

			// setup tab clicks
			$("#info-nav li").click(function(){
				// hide all the content
				$("#info div").hide();
				// clear the current look from all tabs
				$("#info-nav .current").removeClass("current");
				// make the clicked tab the current one
				$(this).addClass("current");

				$("#info-nav .current1").removeClass("current1");
				
				// find the href="" from the clicked tab
				var clicked = $(this).find("a:first").attr("href");
				// find the content with the same id as the href and fade it in
				$("#info " + clicked).fadeIn("slow");
				// keep the click from navigating on the link!
				e.preventDefault();
			});

		//end jQ /////////////////////////////////////
		});
} );