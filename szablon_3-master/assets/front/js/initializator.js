$(document).ready(function () {
lightbox.option({
    'albumLabel': 'Zdjęcie %1 z %2',
})
});

new WOW().init();

$(window).on('load', function () {
    $("#preloader").fadeOut()
});