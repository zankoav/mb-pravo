import './header.scss';
import $ from "jquery";

$('.header__burger').click(function (event) {
    event.preventDefault();
    $(this).toggleClass('header__burger_active');
    $('.header__list').toggleClass('header__list_active');
});

$('.header__item-submenu').click(function (event) {
    event.preventDefault();
    $('.header__submenu').toggleClass('header__submenu_active');

    if ($('.header__submenu').hasClass('header__submenu_active')) {
        $('.header__submenu').slideDown("slow");
        $('.header__submenu-item').addClass('header__submenu-item_open');
        $('.header__submenu-item').removeClass('header__submenu-item_close');

    } else {
        $('.header__submenu').delay(700).slideUp("slow");
        $('.header__submenu-item').addClass('header__submenu-item_close');
        $('.header__submenu-item').removeClass('header__submenu-item_open');
    }


    $('.header__submenu-list').toggleClass('header__submenu-list_active');
    if ($('.header__submenu-list').hasClass('header__submenu-list_active')) {
        $('.header__submenu-list').append('<style>.header__submenu-list:before{transform: rotate(0deg); top: 8px;}</style>');

    } else {
        $('.header__submenu-list').append('<style>.header__submenu-list:before{transform: rotate(-90deg); top: 5px;}</style>');
    }
});
