import './welcome.scss';
import Swiper from 'swiper';


new Swiper('.welcome__container', {
    pagination: {
        el: '.welcome__pagination',
        clickable: true,
        bulletClass: 'welcome__pagination_bullet',
        bulletActiveClass: 'welcome__pagination_bullet-active',
    },
});