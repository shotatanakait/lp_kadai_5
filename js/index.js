$(function() {
    // SWIPER
    const swiper = new Swiper('.swiper', {
        loop: true,
        slidesPerView: 1.2,
        centeredSlides: true,
        spaceBetween: 8,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});
