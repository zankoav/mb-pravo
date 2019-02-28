import './practice-content.scss';

import $ from 'jquery';

$(window).on('resize', paddingResize).trigger('resize');

function paddingResize() {
    let pt = $('.header').outerHeight();

    $('.practice-content').css({
        'padding-top': pt
    });
}