import './team-cards.scss';
import $ from 'jquery';

$(window).on('resize', paddingResize).trigger('resize');

function paddingResize() {
    let pt = $('.header').outerHeight();

    $('.team-cards').css({
        'padding-top': pt
    });
}

if ($(window).width() > 768) {
    $('.cards__item:eq( 0 )').addClass('cards__item-active');
    $('.cards__item:eq( 1 )').addClass('cards__item-active');
} else {
    $('.cards__item:eq( 0 )').addClass('cards__item-active');
}

$(window).scroll(function () {
    $('.cards__item').each(function () {
        let cardItem = $(this).position().top - $('.header').height() * 3;
        let scroll = $(window).scrollTop();
        if (scroll > cardItem) {
            $(this).addClass('cards__item-active')
        }

        if ($(window).scrollTop() + $(window).height() === $(document).height()) {
            $(this).addClass('cards__item-active')
        }
    })
});
