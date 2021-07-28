$(document).ready(function () {
	lightbox.option({
	    'albumLabel': 'Zdjęcie %1 z %2',
	})
});

$(window).on('load', function () {
    $("#preloader").fadeOut()
});

new WOW().init();

$(document).ready(function(){
	var owl = $('.owl-carousel');
	owl.owlCarousel({
	    items:3,
	    loop:true,
	    margin:10,
	    autoplay:true,
	    autoplayTimeout:2000,
	    autoplayHoverPause:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        700:{
	            items:2
	        },
	        1200:{
	            items:3
	        }
	    }

	});
	$('.play').on('click',function(){
	    owl.trigger('play.owl.autoplay',[1000])
	})
	$('.stop').on('click',function(){
	    owl.trigger('stop.owl.autoplay')
	})
});
