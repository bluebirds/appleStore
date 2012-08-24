$(document).ready(function() { 
	$('ul.menu').superfish({ 
		delay:       600,                            // one second delay on mouseout 
		animation:   {height:'show'},  // fade-in and slide-down animation 
		speed:       'normal',                          // faster animation speed 
		autoArrows:  false,                           // disable generation of arrow mark-up 
		dropShadows: false                            // disable drop shadows 
	});
	
	$(".img-border").hover(
		function(){$(this).append('<span></span>').find('span').stop().animate({opacity:'0.7'}, 400);},
		function(){
			$(this).find('span').stop().animate({opacity:'0'},{duration:400, complete: function(){$(this).remove()}});
		}
	);
	
	if ($('nav').width() > '420') {
	
		var n = $('.active').parent('li').index();	
		
		if ($('nav').width() > 650) {
				firstWidth = 140; 
				Width = 160;
			}
			else if ($('nav').width() == 650) {
				firstWidth = 130;
				Width = 130;
			}
		
		if (n>0) { SpanLeft = 11 + firstWidth + Width*(n-1);SpanWidth = Width; } 
			else if (n == 0) {SpanLeft = 11;SpanWidth = firstWidth;}
				else {SpanLeft = 11;SpanWidth = '0';}
				
		$('nav').find('span').css({'width': SpanWidth, 'left': SpanLeft+'px'}); 
		
		$('.menu > li > a').hover(
				function(){
						$(this).not('.active').stop().animate({backgroundPosition:'0 0'}, 200);
						var m = $(this).parent('li').index();
						if (m>0) { NewSpanLeft = 11 + firstWidth + Width*(m-1);NewSpanWidth = Width; } 
							else if (m == 0) {NewSpanLeft = 11;NewSpanWidth = firstWidth;} 
						$('.menu > li > a').parents('nav').find('span').stop().animate({width: NewSpanWidth, left: NewSpanLeft}, 400);
				},
				function(){
					$(this).parents('nav').find('span').stop().animate({width: SpanWidth, left: SpanLeft}, 400);
					$(this).parents('li').not('.sfHover').find('a').not('.active').stop().animate({backgroundPosition:'0 -68px'}, 200)
				}
		)
	}
}); 


$(window).resize(function(){
	if ($('nav').width() > '420') {
	
		var n = $('.active').parent('li').index();	
		
		if ($('nav').width() > 650) {
				firstWidth = 140; 
				Width = 160;
			}
			else if ($('nav').width() == 650) {
				firstWidth = 130;
				Width = 130;
			}
		
		if (n>0) { SpanLeft = 11 + firstWidth + Width*(n-1);SpanWidth = Width; } 
			else if (n == 0) {SpanLeft = 11;SpanWidth = firstWidth;}
				else {SpanLeft = 11;SpanWidth = '0';}
				
		$('nav').find('span').css({'width': SpanWidth, 'left': SpanLeft+'px'}); 
	}
});


$(function(){
// IPad/IPhone
	var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
    ua = navigator.userAgent,
 
    gestureStart = function () {
        viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
    },
 
    scaleFix = function () {
      if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
        viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
        document.addEventListener("gesturestart", gestureStart, false);
      }
    };
scaleFix();
// Menu Android
	var userag = navigator.userAgent.toLowerCase();
	var isAndroid = userag.indexOf("android") > -1; 
	if(isAndroid) {
		$('.menu').responsiveMenu({autoArrows:true});
	}
// Slider
	$('#slides').slides({
		effect: 'fade',
		fadeSpeed:700,
		preload: true,
		play: 7000,
		pause: 4000,
		generateNextPrev: true,
		generatePagination: false,
		crossfade: true,
		hoverPause: true,
		animationStart: function(current){
			$('.caption').animate({opacity:0});
			if (window.console && console.log) {
				console.log('animationStart on slide: ', current);
			};
		},
		animationComplete: function(current){
			$('.caption').animate({opacity:1});
			if (window.console && console.log) {
				console.log('animationComplete on slide: ', current);
			};
		},
		slidesLoaded: function() {
			$('.caption').animate({opacity:1});
		}
	});
});
