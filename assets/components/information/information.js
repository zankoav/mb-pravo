import './information.scss';

import $ from 'jquery';

$(window).on('resize', paddingResize).trigger('resize');

function paddingResize() {
    let pt = $('.header').outerHeight();

    $('.information').css({
        'padding-top': pt
    });
}