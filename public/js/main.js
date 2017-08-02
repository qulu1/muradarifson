jQuery(document).ready(function($) {
		// preloader
		$(window).on('load', function() { 
  			$('#status').fadeOut(5000);
 			$('#preloader').delay(1500).fadeOut("slow");
 			$('body').delay(1500).css({
 				height: 'auto',
 				overflow: 'visible'
 			});
		});

		// nice scroll
		$(document).ready(
			function() {
				$("html").niceScroll();
			}
		);

		// navigation color
		$(window).ready(function(event) {
			for (var i = 0; i < $('.color_nav').length; i++) {	
				var obj = $('.color_nav').eq(i).attr('id');
      			$('.scroll').removeClass('color');
				$('li[data-section$='+obj+']').addClass('color');
			};
		});


		// mobile burger
		$(".burger").click(function(event) {
			if(!$(".header_main ul").hasClass('black')){
				$(this).children('img').css('transform', 'rotate(360deg)').attr('src','/images/close.png');
				$(".header_main ul").css('background', 'black').slideDown().addClass('black');
			}else{
				$(this).children('img').css('transform', 'rotate(-360deg)').attr('src','/images/burger.png');
				$(".header_main ul").slideUp().css('background', 'black').removeClass('black');
			}
		});


		// scale
		$('.gallery_images').hover(function() {
			$(this).children('a').children('img').css('transform','scale(1.11)');
		}, function() {
			$(this).children('a').children('img').css('transform','scale(1)');
		});
		// scrollTop
		$('.up').click(function(event) {
			$('body').animate({"scrollTop": "0"}, 350);
		});

});		
		
