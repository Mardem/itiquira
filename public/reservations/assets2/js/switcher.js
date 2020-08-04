

var owlReinit = function() {
    var owlSlider = $('#owl-carousel-slider');
    var owl = $('#owl-carousel');
    if (owlSlider.length) {
        owlSlider.owlCarousel();
        var owlSliderInst = owlSlider.data('owlCarousel');
        owlSliderInst.reinit();
    }
    if (owl.length) {
        owl.owlCarousel();
        var owlInst = owl.data('owlCarousel');
        owlInst.reinit();
    }
}

var btnWide = $('#demo_changer #btn-wide');
var btnBoxed = $('#demo_changer #btn-boxed');

if ($('body').hasClass('boxed')) {
    btnBoxed.addClass('btn-primary');
} else {
    btnWide.addClass('btn-primary');
}

btnWide.click(function(event) {
    event.preventDefault();
    $('body').removeClass('boxed');
    $(this).addClass('btn-primary');
    btnBoxed.removeClass('btn-primary');
    owlReinit();
});

btnBoxed.click(function(event) {
    event.preventDefault();
    $('body').addClass('boxed');
    $(this).addClass('btn-primary');
    btnWide.removeClass('btn-primary');
    $('body').removeClass('bg-cover');
    $('body').css('background-image', 'url("img/patterns/binding_light.png")');
    owlReinit();
});


$('#patternswitch_area .patternswitch').click(function(event) {
    $('body').removeClass('bg-cover');
    btnBoxed.trigger('click');
    $('body').css('background-image', $(this).css('background-image'));
});

$('#bgimageswitch_area .bgimageswitch').click(function(event) {
    btnBoxed.trigger('click');
    $('body').addClass('bg-cover');
    $('body').css('background-image', 'url("' + $(this).attr('data-src') + '")');
});
