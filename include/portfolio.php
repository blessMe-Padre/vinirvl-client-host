<section class="portfolio">
    <div class="container">
        <div class="portfolio__wrapper">
            <p class="visually-hidden">портфолио</p>
            <div class="portfolio__title popup-link">
                портфолио
                <img class="portfolio__title-img-1" src="<?php echo get_template_directory_uri() ?>/src/img/small/1.webp" width="149" height="140" alt="portfolio">
                <img class="portfolio__title-img-2" src="<?php echo get_template_directory_uri() ?>/src/img/small/2.webp" width="149" height="140" alt="portfolio">
            </div>
            <ul class="portfolio__list">
                <li><a href="#portfolio-popup" class="portfolio__item portfolio__item--light portfolio__item--1 popup-link">Имплантация</a></li>
                <li><a href="#portfolio-popup" class="portfolio__item portfolio__item--light portfolio__item--2 popup-link">Лечение</a></li>
                <li><a href="#portfolio-popup" class="portfolio__item portfolio__item--light portfolio__item--3 popup-link">Виниры</a></li>
                <li><a href="#portfolio-popup" class="portfolio__item portfolio__item--light portfolio__item--4 popup-link">Гигиена</a></li>
                <li><a href="#portfolio-popup" class="portfolio__item portfolio__item--dark portfolio__item--5 popup-link">Брекеты</a></li>
                <li><a href="#portfolio-popup" class="portfolio__item portfolio__item--dark portfolio__item--6 popup-link">Элайнеры</a></li>
                <li><a href="#portfolio-popup" class="portfolio__item portfolio__item--dark portfolio__item--7 popup-link">Отбеливание</a></li>
            </ul>
        </div>
    </div>

    <div id="portfolio-popup" class="popup">
        <div class="popup__body portfolio-popup-body">
            <div class="popup__content relative">
                <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                        <path d="M4 1.45508L19.9099 17.365" stroke="#ffffff" />
                        <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#ffffff" />
                    </svg>
                </button>
                <p class="popup__title">Имплантация</p>
                <div class="w-0 min-w-[100%] relative">
                    <div class="portfolio-swiper swiper">
                        <ul class="card-list swiper-wrapper justify-stretch portfolio-swiper-list"></ul>
                    </div>
                </div>
                <div class="swiper-button-wrapper-portfolio">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>


</section>