
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}

var viewport = updateViewportDimensions();

var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

var timeToWaitForLast = 100;

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



jQuery(document).ready(function($) {
	
	$(window).load(function(){
		$('.preloader').fadeOut('fast',function(){
			$(this).remove();
		});
	});
	
	// ==== Home ==== //
	if ($('body').hasClass('home')) {
		
		$('#home').fullpage({
			anchors: ['portfolio', 'services', 'team', 'contact'],
			menu: '.nav',
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
			paddingTop: 0,
			paddingBottom: 0,
			responsiveWidth: 0,
			responsiveHeight: 0,
			sectionSelector: '.section',
			slideSelector: '.slide',
		});
	
		//SVG Arrows
		$('.fp-controlArrow.fp-next').html('<svg width="20" height="60" xmlns="http://www.w3.org/2000/svg"><path class="arrow-right" fill="rgb(35,21,32)" stroke="black" stroke-width="1" d="m19.973758,29.958522l-18.425238,-29.304412l-1.494917,0.938956l17.847211,28.384871l-17.874572,28.428114l1.49315,0.93984l18.426116,-29.304412l-0.052067,-0.032652l0.080306,-0.0503l0.00001,-0.000005z" clip-rule="evenodd" fill-rule="evenodd"  /></svg>');
		$('.fp-controlArrow.fp-prev').html('<svg width="20" height="60" xmlns="http://www.w3.org/2000/svg"><path class="arrow-left" fill="rgb(35,21,32)" transform="rotate(180 10,30) " stroke="black" stroke-width="1" d="m19.973758,29.958522l-18.425238,-29.304412l-1.494917,0.938956l17.847211,28.384871l-17.874572,28.428114l1.49315,0.93984l18.426116,-29.304412l-0.052067,-0.032652l0.080306,-0.0503l0.00001,-0.000005z" clip-rule="evenodd" fill-rule="evenodd" /></svg>');
	
		// Services events
		$('.card.service.pr .content').on('mouseover', function() {
					$('.item.pr').addClass('action');
		}).on('mouseout', function() {
					$('.item.pr').removeClass('action');
		});
		
		$('.card.service.brand  .content').on('mouseover', function() {
					$('.item.brand').addClass('action');
		}).on('mouseout', function() {
					$('.item.brand').removeClass('action');
		});
		
		$('.card.service.adv .content').on('mouseover', function() {
					$('.item.adv').addClass('action');
		}).on('mouseout', function() {
					$('.item.adv').removeClass('action');
		});
		
		$('.card.service.digital  .content').on('mouseover', function() {
					$('.item.digital').addClass('action');
		}).on('mouseout', function() {
					$('.item.digital').removeClass('action');
		});

		// Team Bg
		var team_bg = $('.section.team').data('bs');
		$('.section.team').backstretch(team_bg);
	}
	
	
	// ==== Case ==== //
	if ($('body').hasClass('single')) {
		
		$('#case').fullpage({
			anchors:['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
		});
		
		$('.button.show').click(function(){
			$('.case.info').addClass('action');
		});
		$('.button.hide').click(function(){
			$('.case.info').removeClass('action');
		});
		
	}
		
	// Navigation
	$('.nav .browse').on('click', function() {
  	$(this).toggleClass('action');
		$('.nav .menu').toggleClass('action');
		$('.fp-verticalArrow.fp-up').toggleClass('hidden');
	});

	// Arrows
	$('.fp-verticalArrow.fp-up').click(function(e){
		e.preventDefault();
		$.fn.fullpage.moveSectionUp();
	});

	$('.fp-verticalArrow.fp-down').click(function(e){
		e.preventDefault();
		$.fn.fullpage.moveSectionDown();
	});

	$('.fp-verticalArrow.fp-top').click(function(e){
		e.preventDefault();
		$.fn.fullpage.moveTo(0);
	});

	// 404 Bg
	if ($('body').hasClass('error404')) {
		$('#error404').backstretch('http://ka.skrdv.com/wp-content/uploads/404-1600x900.jpg');
	}

});

