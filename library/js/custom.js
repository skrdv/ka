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
}

function homeBg() {

	jQuery('.slide').each(function(){
		var slide_bg = jQuery(this).data('bs');
		var slide_bg_800 = slide_bg.replace('.jpg','-800x450.jpg');
		var slide_bg_1280 = slide_bg.replace('.jpg','-1280x720.jpg');
		var slide_bg_1600 = slide_bg.replace('.jpg','-1600x900.jpg');
		var slide_bg_1920 = slide_bg.replace('.jpg','-1920x1080.jpg');
		var width = jQuery(window).width();
		if (width < 768) {
			jQuery(this).backstretch(slide_bg_800);
		} else if (width < 1280) {
			jQuery(this).backstretch(slide_bg_1280);
		}  else if (width < 1600) {
			jQuery(this).backstretch(slide_bg_1600);
		} else if (width >= 1600) {
			jQuery(this).backstretch(slide_bg);
		}
	});

}

function portfolioBg() {

	jQuery('.section').each(function(){
		var slide_bg = jQuery(this).data('bs');
		var img_alt = jQuery(this).data('alt');

		var slide_bg_800 = slide_bg.replace('.jpg','-800x450.jpg');
		var slide_bg_1280 = slide_bg.replace('.jpg','-1280x720.jpg');
		var slide_bg_1600 = slide_bg.replace('.jpg','-1600x900.jpg');
		var slide_bg_1920 = slide_bg.replace('.jpg','-1920x1080.jpg');
		var width = jQuery(window).width();
		if (width < 768) {
			jQuery(this).backstretch(slide_bg_800);
		} else if (width < 1280) {
			jQuery(this).backstretch(slide_bg_1280);
		}  else if (width < 1600) {
			jQuery(this).backstretch(slide_bg_1600);
		} else if (width >= 1600) {
			jQuery(this).backstretch(slide_bg);
		}


		jQuery(this).find('.backstretch img').attr('alt', img_alt);

	});

}



jQuery(document).ready(function($) {

  loadGravatars();

	$(window).load(function(){
		$('#preloader').fadeOut('fast',function(){
			$(this).remove();
		});
	});

	// Home
	if ($('body').hasClass('home')) {

		$('#home').fullpage({
			anchors: ['portfolio', 'services', 'team', 'contact'],
			menu: '#nav',
			scrollingSpeed: 1000,
			keyboardScrolling: true,
			animateAnchor: true,
			recordHistory: true,
			controlArrows: true,
			verticalCentered: true,
			loopBottom: false,
      loopTop: false,
      loopHorizontal: true,
      continuousVertical: false,
      continuousHorizontal: false,
			paddingTop: '0',
			paddingBottom: '0',
			responsiveWidth: 0,
			responsiveHeight: 0,
			sectionSelector: '.section',
			slideSelector: '.slide',

		});


		//SVG Arrows
		$('.fp-controlArrow.fp-next').html('<svg width="20" height="60" xmlns="http://www.w3.org/2000/svg"><path class="arrow-right" fill="rgb(35,21,32)" stroke="black" stroke-width="1" d="m19.973758,29.958522l-18.425238,-29.304412l-1.494917,0.938956l17.847211,28.384871l-17.874572,28.428114l1.49315,0.93984l18.426116,-29.304412l-0.052067,-0.032652l0.080306,-0.0503l0.00001,-0.000005z" clip-rule="evenodd" fill-rule="evenodd"  /></svg>');
		$('.fp-controlArrow.fp-prev').html('<svg width="20" height="60" xmlns="http://www.w3.org/2000/svg"><path class="arrow-left" fill="rgb(35,21,32)" transform="rotate(180 10,30) " stroke="black" stroke-width="1" d="m19.973758,29.958522l-18.425238,-29.304412l-1.494917,0.938956l17.847211,28.384871l-17.874572,28.428114l1.49315,0.93984l18.426116,-29.304412l-0.052067,-0.032652l0.080306,-0.0503l0.00001,-0.000005z" clip-rule="evenodd" fill-rule="evenodd" /></svg>');

		// Portfolio
		homeBg();

		// Services
		$('.ui.card.pr').on('hover', function() {
			// $('.ui.card.big').find('.pr').transition('fade');
		});

		$('.ui.card.brand').on('hover', function() {
			// $('.ui.card.big').find('.brand').transition('fade');
		});

		$('.ui.card.adv').on('hover', function() {
			// $('.ui.card.big').find('.adv').transition('fade');
		});

		$('.ui.card.digital').on('hover', function() {
			// $('.ui.card.big').find('.digital').transition('fade');
		});

		// Team
		var team_bg = $('.section.team').data('bs');
		$('.section.team').backstretch(team_bg);


	}

	// Case
	if ($('body').hasClass('single')) {

		$('#case').fullpage({
			anchors:['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
		});

		$('.case-info .button.toogle').on('click', function() {
			$('.case-info .ui.card').transition('fade right');
			if ($(this).text() == 'Скрыть описание') {
				$(this).text('Показать описание').removeClass('white').addClass('black');
			} else {
				$(this).text('Скрыть описание').removeClass('black').addClass('white');
			}
		});

		portfolioBg();

	}

	// Navigation
	$('.nav .browse').on('click', function() {
  	$(this).toggleClass('action');
		$('.nav .menu').toggleClass('action');
		$('.fp-verticalArrow.fp-up').toggleClass('hidden');
	});


	// Vertacal Arrows
	$('.fp-verticalArrow.fp-up').click(function(e){
		e.preventDefault();
		$.fn.fullpage.moveSectionUp();
	});

	$('.fp-verticalArrow.fp-down').click(function(e){
		e.preventDefault();
		$.fn.fullpage.moveSectionDown();
	});

	// 404 page
	if ($('body').hasClass('error404')) {
		$('#error404').backstretch('http://ka.skrdv.com/wp-content/uploads/404-1600x900.jpg');
	}


});

jQuery(window).resize(function($) {

	viewport = updateViewportDimensions();
	// console.log(viewport);

	if (jQuery('body').hasClass('home')) {
		homeBg();
	}

	if (jQuery('body').hasClass('single')) {
		portfolioBg();
	}

});
