const mobBtn = document.querySelector('.mobile-navigation__burger');
const mobMenu =  document.querySelector('.mobile-menu');
const body = document.body;

mobBtn.addEventListener('click', function () {
   mobBtn.classList.toggle('active');
   mobMenu.classList.toggle('not-visible');
   body.classList.toggle('lock');
});

document.querySelector('.menu-body').addEventListener('click', (event) => {
    mobMenu.classList.toggle('not-visible');
    mobBtn.classList.toggle('active');
    body.classList.toggle('lock');
});


new Swiper('.swiper', {
    speed: 400,
    spaceBetween: 100,
    autoHeight: true,
    autoWidth: true,
    loop: true,

    navigation: {
        nextEl: '.nav-right',
        prevEl: '.nav-left'
    }
});

new Swiper('.swiper-reviews', {
    speed: 400,
    spaceBetween: 190,
    autoHeight: true,
    autoWidth: true,
    // loop: true,
    slidesPerView: 3,
    loopedSlides: 1,
    slidesPerColumn: 3,

    breakpoints: {
        // mobile + tablet - 320-990
        320: {
            slidesPerView: 1
        },
        // desktop >= 991
        991: {
            slidesPerView: 3
        }
    },

    navigation: {
        nextEl: '.nav-right__rev',
        prevEl: '.nav-left__rev'
    }
});

new Swiper('.webinar-cards-swiper', {
    speed: 400,
    spaceBetween: 22,
    slidesPerView: "auto",
    loop: true,
});

new Swiper('.swiper__reviews-cards', {
    autoHeight: true,
    autoWidth: true,
    slidesPerView: "auto",
    spaceBetween: 52,
})