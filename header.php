<!DOCTYPE html>
<html class="" lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/src/fonts/BebasNeueBold.woff2" as="font"
        type="font/woff2" crossorigin>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body class="wrapper">

    <header class="z-10 w-full py-7 fixed header">
        <div class="container gap-5 flex items-center justify-between">
            <div class="flex items-center gap-5 md:gap-10">
                <button class="btn-close-menu">
                    <div>
                        <span class="btn-decor-span btn-decor-span-1"></span>
                        <span class="btn-decor-span btn-decor-span-2"></span>
                        <span class="btn-decor-span btn-decor-span-3"></span>
                    </div>

                    <span class="text-white uppercase text-xl btn-close-menu__text-span">Меню</span>
                </button>
                <a class="flex" href="/">
                    <img class="header__logo" loading="lazy"
                        src="<?php echo get_template_directory_uri() ?>/src/img/logo.png" width="154" height="40"
                        alt="лого">
                </a>
            </div>
            <ul class="flex items-center gap-4 md:gap-8">
                <li class="header__li"><a class="header__link link" href="tel:+74232300330">+7 (423) 2-300-330</a>
                </li>
                <li class="header__li"><a class="header__link link" href="tel:+74232260557">+7 (423) 226-05-570</a>
                </li>
                <li class="header__li"><a class="header__link link" href="mailto:info@vladstom.ru">info@vladstom.ru</a>
                </li>
                <li><a class="header__link header__link--mobile underline link" href="https://wa.me/74232260557"
                        target="_blank">WhatsApp</a></li>
                <li><a class="header__link header__link--mobile underline link" target="_blank"
                        href="https://t.me/geliodentvl">Telegram</a></li>
                <li><a class="header__link header__link--mobile underline link" href="#">Новости</a></li>
                <li>
                    <a class="header__link header__link--mobile link header__link--phone" href="tel:+74232300330">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/beauty/phone-icon.png" width="35"
                            height="35" alt="позвонить">
                    </a>
                </li>
            </ul>
        </div>

        <div class="menu-window">
            <img class="menu-window__img-string"
                src="<?php echo get_template_directory_uri() ?>/src/img/menu-string.webp" width="1440" height="226"
                alt="img">
            <div class="container">
                <div class="menu-window__wrapper">
                    <nav class="menu-window__block">
                        <p>УСЛУГИ</p>
                        <ul class="menu-window__list menu-window__list--column">
                            <li><a href="https://vladstom.ru/lecheniezubov/">Лечение зубов</a></li>
                            <li><a href="https://vladstom.ru/zubzaden/">Зубы за день, за 8 часов</a></li>
                            <li><a href="https://vladstom.ru/region/">Имплантация, протезирование и
                                    перепротезирование</a></li>
                            <li><a href="https://vladstom.ru/implantation/">Имплантация без костной пластики</a></li>
                            <li><a href="https://vladstom.ru/flexligner/">Виниры, Брекеты и элайнеры</a></li>
                            <li><a href="https://vladstom.ru/lechenie-zubov-pod-narkokom/">Лечение под наркозом</a></li>
                            <li><a href="https://vladstom.ru/otbelivanie-i-gigiena/">Гигиена зубов и отбеливание</a>
                            </li>
                            <li><a href="https://vladstom.ru/lecheniezuba/">Лечение зуба</a></li>
                        </ul>
                    </nav>
                    <nav class="menu-window__block">
                        <p>ПАЦИЕНТАМ</p>
                        <ul class="menu-window__list">
                            <li><a href="https://vladstom.ru/about/">О компании</a></li>
                            <li><a href="https://vladstom.ru/nashi-raboti/">Наши работы</a></li>
                            <li><a href="https://vladstom.ru/vopros/">Вопросы и ответы</a></li>
                            <li><a href="https://vladstom.ru/pacientam/">Пациентам</a></li>
                            <li><a href="https://vladstom.ru/information/">Информация</a></li>
                            <li><a href="https://vladstom.ru/contacts/">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="menu-window__footer">
                    <ul>
                        <li><a href="tel:+74232300330">+7 (423) 2-300-330</a>
                        </li>
                        <li><a href="tel:+74232260557">+7 (423) 226-05-570</a>
                        </li>
                        <li><a href="mailto:info@vladstom.ru">info@vladstom.ru</a>
                        </li>
                        <li><a class="underline" target="_blank" href="https://wa.me/74232260557">WhatsApp</a></li>
                        <li><a class="underline" href="#">новости</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </header>