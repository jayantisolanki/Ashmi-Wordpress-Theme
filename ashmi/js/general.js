/*---------------------------------------------------------------------*/
var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
;(function($){

$(document).ready( function(){
	ww = document.body.clientWidth;
	$('body').removeClass('noJS').addClass("hasJS");
	/*Navigation */
	if( $("#nav").length) {
		$(".toggleMenu").click(function(e) {
			e.preventDefault();
			$(this).toggleClass("active");
			$("#nav").slideToggle();
			$("#nav li").removeClass("resHover")
			$(".resIcon").removeClass("active")
			return false;
		});
		$("#nav li a").each(function() {
			if ($(this).next().length) {
				$(this).parent().addClass("parent");
			};
		})
		$("#nav li.parent").each(function () {
            if ($(this).has(".menuIcon").length <= 0) $(this).append('<i class="menuIcon">&nbsp;</i>')
        });
		dropdown('nav', 'hover', 1);
		adjustMenu();
	}	
	if( $(".btnClose").length) {
		$(".btnClose").click(function(e) {
			e.preventDefault();
			$(this).parent().fadeOut('slow');
			return false;
		});
	}	
	// BX Slider Script
	if( $(".owlCarousel").length) {
		$('.owlCarousel').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})
	}	
	
	// Content Tabing Script
	if( $(".tabbing").length) {
		$('.tabbing').responsiveTabs({
			startCollapsed: 'accordion', //accordion
			collapsible: 'accordion' //accordion

		});
	}	
	// Accordian List Script
	if( $(".accordion").length){
		   $('.accordion .accordDetail').hide();
		   $('.accordion h4 a').click(function(){
			  if ($(this).hasClass('active')) {
				   $(this).removeClass('active');
				   $(this).parent().next().slideUp();
			  } else {
				   $('.accordion h4 a').removeClass('active');
				   $(this).addClass('active');
				   $('.accordion .accordDetail').slideUp();
				   $(this).parent().next().slideDown();
			  }
			  return false;
		   });
	};
	
	$('.ticker').each(function(i){
		$(this).addClass('tickerDiv'+i).attr('id', 'ticker'+i);
		$('#ticker'+i).find('.tickerDivBlock').first().addClass('newsTikker'+i).attr('id', 'newsTikker'+i);
		$('#ticker'+i).find('a').first().attr('id', 'stopNews'+i)
		$('#newsTikker'+i).vTicker({ speed: 1E3, pause: 4E3, animation: "fade", mousePause: false, showItems: 3, height: 138, direction: 'up' })
		$("#stopNews"+i).attr("href", "#").toggle(function () {
			$(this).removeClass("stop").addClass("play").text("Play").attr('title', 'Play');
			}, function () {
			$(this).removeClass("play").addClass("stop").text("Pause").attr('title', 'pause');
		}); 
	});
	
	if( $(".marqueeScrolling li").length > 1){
		var $mq = $('.marquee').marquee({
			speed: 25000,
			gap: 0,
			duplicated: true,
			pauseOnHover: true
			});
		$(".btnMPause").toggle(function(){
			$(this).addClass('play');
			$(this).text('Play');
			$mq.marquee('pause');
		},function(){
			$(this).removeClass('play');
			$(this).text('Pause');
			$mq.marquee('resume');
			return false;
		});
	}
	

	// Back to Top function
	if( $("#backtotop").length){
		$(window).scroll(function(){
			if ($(window).scrollTop()>120){
			$('#backtotop').fadeIn('250').css('display','block');}
			else {
			$('#backtotop').fadeOut('250');}
		});
		$('#backtotop').click(function(){
			$('html, body').animate({scrollTop:0}, '200');
			return false;
		});
	};
	
	
// Responsive Table
	if( $(".tableData").length){
		$(".tableData").each(function(){
		$(this).wrap('<div class="tableOut"></div>');
		$(this).find('td').removeAttr('width');$(this).find('td').removeAttr('align');
		var head_col_count =  $(this).find('tr th').size();
		// loop which replaces td
		for ( i=0; i <= head_col_count; i++ )  {
			// head column label extraction
			var head_col_label = $(this).find('tr th:nth-child('+ i +')').text();
			// replaces td with <div class="column" data-label="label">
			$(this).find('tr td:nth-child('+ i +')').attr("data-label", head_col_label);
		}
		});
	}
// 	prettyPhoto
	if( $("*[rel^='prettyPhoto']").length > 0){
		$("*[rel^='prettyPhoto']").prettyPhoto({autoplay_slideshow: false, social_tools: false, deeplinking:false});;
		$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: false, deeplinking:false});
		$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true, social_tools: false, deeplinking:false});
	};
	
// Video JS
		if( $("#player_a").length){
		projekktor('#player_a', {
        poster: 'media/intro.png',
        title: 'this is projekktor',
        playerFlashMP4: 'swf/StrobeMediaPlayback/StrobeMediaPlayback.swf',
        playerFlashMP3: 'swf/StrobeMediaPlayback/StrobeMediaPlayback.swf',
        width: 640,
        height: 385,
		fullscreen:true,
        playlist: [
            {0: {src: "images/intro.mp4", type: "video/mp4"}}
        ]    
        }, function(player) {} // on ready 
        );
		}

	// For device checking
	if (isMobile == false) {
	
	}
	
});

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
	if (ww <= 800) {
		$('.tabbing').responsiveTabs({
			startCollapsed: 'tab', //accordion
			collapsible: 'tab' //accordion

		});	
	}
});
})(jQuery);

