document.addEventListener('DOMContentLoaded', function () {
    let swiperCards = new Swiper(".inti2", {
        loop: true,
        spaceBetween: 32,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        slidesPerView: 3,
    });
});
