import './page404.scss';

import $ from 'jquery';

$(window).on('resize', paddingResize).trigger('resize');

function paddingResize() {
    let pt = $('.header').outerHeight();

    $('.page404').css({
        'padding-top': pt
    });
}