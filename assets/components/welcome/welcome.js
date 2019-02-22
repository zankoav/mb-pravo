import './welcome.scss';
import $ from "jquery";
import Swiper from 'swiper';


new Swiper('.swiper-container', {
    pagination: {
        el: '.swiper-pagination',
        bulletClass: 'welcome__pagination_bullet',
        bulletActiveClass: 'welcome__pagination_bullet-active',
    },
});