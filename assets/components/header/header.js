import './header.scss';
import $ from "jquery";

$('.header__burger').click(function (event) {
    event.preventDefault();
    $(this).toggleClass('header__burger_active');
    $('.header__list').toggleClass('header__list_active');
});

let headerSubmenu = $('.header__submenu');
let headerSubmenuItem =$('.header__submenu-item');

$('.header__item-submenu').click(function (event) {
    event.preventDefault();
    headerSubmenu.toggleClass('header__submenu_active');

    if (headerSubmenu.hasClass('header__submenu_active')) {
        headerSubmenu.slideDown("slow");
        headerSubmenuItem.addClass('header__submenu-item_open');
        headerSubmenuItem.removeClass('header__submenu-item_close');

    } else {
        headerSubmenu.delay(700).slideUp("slow");
        headerSubmenuItem.addClass('header__submenu-item_close');
        headerSubmenuItem.removeClass('header__submenu-item_open');
    }

    $('.header__submenu-list').toggleClass('header__submenu-list_active');
    if ($('.header__submenu-list').hasClass('header__submenu-list_active')) {
        $('.header__submenu-list').append('<style>.header__submenu-list:before{transform: rotate(0deg); top: 8px;}</style>');

    } else {
        $('.header__submenu-list').append('<style>.header__submenu-list:before{transform: rotate(-90deg); top: 5px;}</style>');
    }
});
