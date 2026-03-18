export const initSlider = () => {

    // слайдер "Portfolio свайпер новый"
    const sliderPortfolio = document.querySelector('.portfolio-swiper');
    if (sliderPortfolio) {
        const slider = new Swiper('.portfolio-swiper', {
            loop: false,
            spaceBetween: 30,
            breakpoints: {
                374: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                650: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }

    // Новый слайдер "до|после"
    const sliderBeforeAfter = document.querySelector('.before-after-slider');
    if (sliderBeforeAfter) {
        const slider = new Swiper('.before-after-slider', {
            loop: true,
            spaceBetween: 30,
            slidesPerView: 1,


            navigation: {
                nextEl: '.swiper-button-next-hero',
                prevEl: '.swiper-button-prev-hero',
            },
        });
    }


}