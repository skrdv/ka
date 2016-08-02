/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *	// update the viewport, in case the window size has changed
 *	viewport = updateViewportDimensions();
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
	}
} // end function

function homeBg() {
	jQuery('.slide.sokolniki').backstretch('/wp-content/uploads/case_sokolniki_head.jpg');
	jQuery('.slide.2t-gallery').backstretch('/wp-content/uploads/case_2t_head.jpg');
	jQuery('.slide.flight').backstretch('/wp-content/uploads/case_kite_head.jpg');
	jQuery('.slide.fazer').backstretch('/wp-content/uploads/case_fazer_head.jpg');

	jQuery('.slide.team-1').backstretch('/wp-content/uploads/team_bw.jpg');
	jQuery('.slide.team-2').backstretch('/wp-content/uploads/team_bw.jpg');
}

function portfolioBg() {
	jQuery('.sokolniki.case-head').backstretch('/wp-content/uploads/case_sokolniki_head.jpg');
	jQuery('.sokolniki.case-info').backstretch('/wp-content/uploads/case_sokolniki_info.jpg');
	for ($i=1; $i < 11; $i++) {
		jQuery('.sokolniki.case-'+$i).backstretch('/wp-content/uploads/case_sokolniki_'+$i+'.jpg');
	}

	jQuery('.2t-gallery.case-head').backstretch('/wp-content/uploads/case_2t_head.jpg');
	jQuery('.2t-gallery.case-info').backstretch('/wp-content/uploads/case_2t_info.jpg');
	for ($i=1; $i < 11; $i++) {
		jQuery('.2t-gallery.case-'+$i).backstretch('/wp-content/uploads/case_2t_'+$i+'.jpg');
	}

	jQuery('.flight.case-head').backstretch('/wp-content/uploads/case_kite_head.jpg');
	jQuery('.flight.case-info').backstretch('/wp-content/uploads/case_kite_info.jpg');
	for ($i=1; $i < 11; $i++) {
		jQuery('.flight.case-'+$i).backstretch('/wp-content/uploads/case_kite_'+$i+'.jpg');
	}

	jQuery('.fazer.case-head').backstretch('/wp-content/uploads/case_fazer_head.jpg');
	jQuery('.fazer.case-info').backstretch('/wp-content/uploads/case_fazer_info.jpg');
	for ($i=1; $i < 11; $i++) {
		jQuery('.fazer.case-'+$i).backstretch('/wp-content/uploads/case_fazer_'+$i+'.jpg');
	}
}



/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

  /*
   * Let's fire off the gravatar function
   * You can remove this if you don't need it
  */
  loadGravatars();

	// Home
	if ($('body').hasClass('home')) {

		// FullPage
		$('#home').fullpage({
			verticalCentered: false,
			anchors: ['portfolio', 'services', 'team', 'contact'],
			menu: '#nav',
			scrollingSpeed: 1000,
			fixedElements: '.footer',
		});

		// Backstretch
		homeBg();

		// Slider Arrows
		$('.fp-controlArrow').clone().addClass('right').appendTo('.section.portfolio');
		$('.fp-controlArrow').clone().addClass('right').appendTo('.section.team');
		$('.fp-controlArrow').clone().addClass('right').appendTo('.section.contact');

		// services
		$('.ui.card.pr').on('hover', function() {
			$('.ui.card.big').find('.pr').transition('fade');
		});

		$('.ui.card.brand').on('hover', function() {
			$('.ui.card.big').find('.brand').transition('fade');
		});

		$('.ui.card.adv').on('hover', function() {
			$('.ui.card.big').find('.adv').transition('fade');
		});

		$('.ui.card.digital').on('hover', function() {
			$('.ui.card.big').find('.digital').transition('fade');
		});


	}

	// Portfolio
	if ($('body').hasClass('single')) {

		// FullPage
		$('#fullpost').fullpage({
			navigation: true,
			navigationPosition: 'right'
		});

		$('.button.toogle').on('click', function() {
			$('.ui.card').transition('fade right');
			if ($(this).text() == 'Скрыть описание') {
				$(this).text('Показать описание');
			} else {
				$(this).text('Скрыть описание');
			}

		});

		portfolioBg();


	}

	// Navigation
	$('.item.browse').on('click', function() {
		$(this).find('.close').transition('fade');
		$(this).find('.square').transition('fade');
		$(this).find('.text').transition('fade');
		$('.ui.menu').find('.menu').transition('fade');
	});





	// window.addEventListener("orientationchange", function() {
  //   alert(window.orientation);
	// }, false);



}); /* end of as page load scripts */

jQuery(window).resize(function($) {

	console.log('resize');

	// Home
	if (jQuery('body').hasClass('home')) {

		// Backstretch
		homeBg();

	}

	// Portfolio
	if (jQuery('body').hasClass('single')) {

		portfolioBg();

	}

});
