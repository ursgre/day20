$("#carouselExampleControls").hover(function () {
    $('.carousel-control-next').addClass('carousel-control-show');
    $('.carousel-control-prev').addClass('carousel-control-show');
}, function () {
    $('.carousel-control-next').removeClass('carousel-control-show');
    $('.carousel-control-prev').removeClass('carousel-control-show');
});

function showIcon(param, bool) {
    if(bool == true) {
        $('#gallery_icon' + param).addClass('show_gallery_icon');
    } else {
        $('#gallery_icon' + param).removeClass('show_gallery_icon');
    }
}

$(document).ready(function() {
    var NavY = $('#navbar').offset().top; 
    var stickyNav = function() {
        var ScrollY = $(window).scrollTop();
        if (ScrollY > NavY) { 
            $('#navbar').addClass('sticky');
        } else {
			$('#navbar').removeClass('sticky'); 
        }
    };
    stickyNav();
    $(window).scroll(function() {
		stickyNav();
    });
});

$('.info').delay(3000).fadeOut(1000);