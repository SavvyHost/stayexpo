import './bootstrap';
import '../sass/app.scss';
import Swiper from 'swiper';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


const cardsImgs = new Swiper(".swiper-cards-imgs", {

    direction: "horizontal",
    spaceBetween: 10,
    autoplay: {
        delay: 6000,
        disableOnInteraction: true,
    },

    slidesPerView: 1.2,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
});
