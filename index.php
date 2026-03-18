<?php
/*
Template Name: Главная страница
*/
get_header();
?>

<div class="bg-wrapper overflow-hidden">
    <img src="<?php echo get_template_directory_uri() ?>/src/img/bg-for-page.webp">
</div>

<div class="container">
    <section class="hero-1">
        <h1 class="hero-title-1">винир <span>VS</span> коронка</h1>

        <div class="hero_wrapper">
            <div class="hero_item action-bg-1">
                <h3 class="hero_1_title">ВИНИР</h3>
                <ul class="hero_1_list">
                    <li>Требует минимальной обточки зуба или вообще не требует</li>
                    <li>Закрывает все эстетические потребности, позволяя достичь идеальной формы и цвета</li>
                    <li>Достаточно сложен в изготовлении</li>
                    <li>Не подходит для неживых зубов с большими пломбами</li>
                    <li>Соответствует всем требованиям</li>
                </ul>
            </div>
            <div class="hero_item action-bg-2">
                <h3 class="hero_1_title">коронка</h3>
                <ul class="hero_1_list">
                    <li>Устанавливается в том числе на большие пломбы</li>
                    <li>Обточка более агрессивная</li>
                    <li>Восстанавливает и функционал и эстетику зуба</li>
                    <li>Соответствует всем требованиям по качеству и срокам службы 10-15 лет</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="special-conditions">
        <div>
            <h2>Специальные условия для вас:</h2>
            <p class="special-conditions_desc">7000 рублей, <span>которыми вы можете оплатить</span></p>
            <p class="special-conditions_desc">до&nbsp;100% стоимости <span>реставрации винирами</span></p>
        </div>
        <div class="special-conditions_button">
            <a class="info-link popup-link" href="#popup">
                <span>Записаться</span>
                <svg width="29" height="16" viewBox="0 0 29 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 7H0V9H1V7ZM28.2071 8.70711C28.5976 8.31658 28.5976 7.68342 28.2071 7.29289L21.8431 0.928932C21.4526 0.538408 20.8195 0.538408 20.4289 0.928932C20.0384 1.31946 20.0384 1.95262 20.4289 2.34315L26.0858 8L20.4289 13.6569C20.0384 14.0474 20.0384 14.6805 20.4289 15.0711C20.8195 15.4616 21.4526 15.4616 21.8431 15.0711L28.2071 8.70711ZM1 9H27.5V7H1V9Z" />
                </svg>
            </a>
        </div>
        <div class="special-conditions_wrapper">
            <p class="special-conditions_text">Предложение действует до 31.08.2025. Не подлежит обмену на денежные
                средства.</p>
        </div>
    </section>

    <section class="quote-section">
        <div class="quote-section_wrapper">
            <div class="quote-section_image">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/image-12.webp" width="588" height="633"
                    alt="Константин Викторович Дында">
            </div>

            <div class="quote-section_description">
                <h2 class="quote-section_title">Константин Викторович Дында</h2>
                <p class="quote-section_text">Главный врач, врач — врач стоматолог-хирург, стоматолог-имплантолог,
                    стоматолог-ортопед, специалист по комплексной, тотальной реабилитации</p>

                <div class="quote_block">
                    <div class="quote_block-left">
                        <svg width="107" height="114" viewBox="0 0 107 114" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 67.3636V46.3315L40.0486 0L45.8571 28.3476L22.6229 56.6952L45.8571 85.6524L40.0486 114L0 67.3636ZM60.8372 67.3636V46.3315L100.886 0L107 28.3476L83.7657 56.6952L107 85.6524L100.886 114L60.8372 67.3636Z"
                                fill="#596476" />
                        </svg>
                    </div>
                    <p class="quote_block_text">Я рекомендую виниры своим пациентам, потому что они предлагают идеальное
                        сочетание эстетики и минимальной инвазивности. Виниры обеспечивают потрясающий визуальный эффект
                        — они выглядят очень естественно и могут корректировать форму, цвет и даже прикус зубов. Они
                        идеально подходят для улучшения улыбки, при этом обеспечивая высокий уровень комфорта и
                        долговечности. Это отличный выбор для тех, кто хочет достичь красивого результата, сохранив
                        здоровье своих зубов</p>

                    <div class="quote_block-right">
                        <svg width="107" height="114" viewBox="0 0 107 114" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M107 67.3636V46.3315L66.9514 0L61.1429 28.3476L84.3771 56.6952L61.1429 85.6524L66.9514 114L107 67.3636ZM46.1628 67.3636V46.3315L6.11427 0L-7.62939e-06 28.3476L23.2343 56.6952L-7.62939e-06 85.6524L6.11427 114L46.1628 67.3636Z"
                                fill="#596476" />
                        </svg>
                        </dv>
                    </div>
                </div>
            </div>
    </section>

    <section class="before-after">
        <div class="before-after__wrapper">
            <div class="before-after__item relative">
                <h2 class="before-after__title">до|после</h2>
                <div class="swiper-button-wrapper swiper-button-wrapper-before-after">
                    <div class="swiper-button-prev-hero" tabindex="0" role="button" aria-label="Previous slide">
                    </div>
                    <div class="swiper-button-next-hero" tabindex="0" role="button" aria-label="Next slide"></div>
                </div>
            </div>

            <div class="w-0 min-w-[100%] relative">
                <div class="before-after-slider swiper">
                    <ul class="swiper-wrapper justify-stretch">
                        <li class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/before/image-1.webp"
                                width="867" height="482" alt="before">
                        </li>
                        <li class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/before/image-1.webp"
                                width="867" height="482" alt="before">
                        </li>
                        <li class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/before/image-1.webp"
                                width="867" height="482" alt="before">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="new-solutions">
        <h2 class="new-solutions_title"><span>«ГЕЛИОДЕНТ» — ВСЕГДА ПРОФЕССИОНАЛЬНОЕ</span> РЕШЕНИЕ СЛОЖНЫХ
            СТОМАТОЛОГИЧЕСКИХ ЗАДАЧ</h2>

        <ul class="new-solutions_list">
            <li class="new-solutions_item">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/action/icon.png" width="38" height="25"
                    alt="icon">
                <h3 class="new-solutions_item-title">Фиксация стоимости лечения при подписании договора</h3>
            </li>
            <li class="new-solutions_item">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/action/icon.png" width="38" height="25"
                    alt="icon">
                <h3 class="new-solutions_item-title">Рассрочка на терапевтическое, хирургическое, ортодонтическое
                    лечение и протезирование</h3>
            </li>
            <li class="new-solutions_item">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/action/icon.png" width="38" height="25"
                    alt="icon">
                <h3 class="new-solutions_item-title">Прием пациентов по полисам добровольного медицинского страхования
                    (ДМС) «СОГАЗ»
                    и «Альфатрахование»</h3>
            </li>
            <li class="new-solutions_item">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/action/icon.png" width="38" height="25"
                    alt="icon">
                <h3 class="new-solutions_item-title">Гарантии на все виды стоматологического лечения</h3>
            </li>
            <li class="new-solutions_item">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/action/icon.png" width="38" height="25"
                    alt="icon">
                <h3 class="new-solutions_item-title">Сопровождение процесса лечения куратором. Индивидуальное
                    оперативное решение всех вопросов лечения</h3>
            </li>
            <li class="new-solutions_item">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/action/icon.png" width="38" height="25"
                    alt="icon">
                <h3 class="new-solutions_item-title">Полное современное техническое оснащение: 3D сканер, КЛКТ,
                    микроскоп, наркоз и т.д.</h3>
            </li>
        </ul>
    </section>

    <?php load_template(get_stylesheet_directory() . '/include/our-partners.php'); ?>
</div>

<?php get_footer(); ?>