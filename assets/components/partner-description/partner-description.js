import './partner-description.scss';
import $ from 'jquery';

$('.partner-description__tab').click(function () {
    if (!$(this).hasClass('partner-description__tab_active')) {
        $('.partner-description__tab').removeClass('partner-description__tab_active')
        $(this).addClass('partner-description__tab_active');
        let index = $('.partner-description__tab').index(this);
        $('.partner-description__experience-wrapper').removeClass('partner-description__experience-wrapper_active');
        $($('.partner-description__experience-wrapper')[index]).addClass('partner-description__experience-wrapper_active');
    }
});
