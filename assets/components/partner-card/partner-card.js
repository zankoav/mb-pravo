import './partner-card.scss';
import $ from 'jquery';

$(window).on('resize', paddingResize).trigger('resize');

function paddingResize() {
    let pt = $('.header').outerHeight();

    $('.partner-card').css({
        'padding-top': pt
    });
}