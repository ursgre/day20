$(".slider").hover(function () {
    $('.carousel-control-next').addClass('carousel-control-show');
    $('.carousel-control-prev').addClass('carousel-control-show');
}, function () {
    $('.carousel-control-next').removeClass('carousel-control-show');
    $('.carousel-control-prev').removeClass('carousel-control-show');
});

$(".bg_flex").hover(function () {
    $('i', this).addClass('icon_colorHover');
}, function () {
    $('i', this).removeClass('icon_colorHover');
});

function showIcon(param, bool) {
    if(bool == true) {
        $('#gallery_icon' + param).addClass('show_gallery_icon');
    } else {
        $('#gallery_icon' + param).removeClass('show_gallery_icon');
    }
}

$('.info').delay(3000).fadeOut(1000);