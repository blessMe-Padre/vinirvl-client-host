<section id="popup" class="popup">
    <div class="popup__body">
        <div class="popup__content relative">
            <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                    <path d="M4 1.45508L19.9099 17.365" stroke="#ffffff" />
                    <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#ffffff" />
                </svg>
            </button>
            <p class="popup__title">оставьте свои контакты и наш</p>
            <p class="popup__sub-title">администратор свяжется с вами</p>

            <img class="form-image" src="<?php echo get_template_directory_uri() ?>/src/img/menu-string.webp" alt="">
            <?php echo do_shortcode('[contact-form-7 id="40c96de" title="Контактная форма"]'); ?>
            <p class="policy-inner">Нажимая кнопку “Отправить” я даю согласие на&nbsp;<a class="underline"
                    href="<?php echo get_template_directory_uri() ?>/o_zaschite.pdf" target="_blank"
                    rel="noopener noreferrer">обработку персональных данных</a>
            </p>
        </div>
    </div>
</section>

<section id="popup-sale" class="popup popup--sale">
    <div class="popup__body">
        <div class="popup__content relative">
            <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                    <path d="M4 1.45508L19.9099 17.365" stroke="#ffffff" />
                    <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#ffffff" />
                </svg>
            </button>
            <p class="popup__title">Уважаемые пациенты!</p>
            <p class="popup__descriptions">Обращаем ваше внимание, действует рассрочка
                платежа на терапевтическое, хирургическое, ортодонтическое лечение и протезирование зубов!</p>

            <div>
                <a class="info-link popup-link" href="#popup">
                    <span>Оставить заявку</span>
                    <svg width="29" height="16" viewBox="0 0 29 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 7H0V9H1V7ZM28.2071 8.70711C28.5976 8.31658 28.5976 7.68342 28.2071 7.29289L21.8431 0.928932C21.4526 0.538408 20.8195 0.538408 20.4289 0.928932C20.0384 1.31946 20.0384 1.95262 20.4289 2.34315L26.0858 8L20.4289 13.6569C20.0384 14.0474 20.0384 14.6805 20.4289 15.0711C20.8195 15.4616 21.4526 15.4616 21.8431 15.0711L28.2071 8.70711ZM1 9H27.5V7H1V9Z">
                        </path>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<section id="popup-antikaries" class="popup popup--ad">
    <div class="popup__body">
        <div class="popup__content relative">
            <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                    <path d="M4 1.45508L19.9099 17.365" stroke="#ffffff" />
                    <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#ffffff" />
                </svg>
            </button>

            <br><br>
            <p>Программа АНТИКАРИЕС</p>

            Комплексный чекап - диагностика стоматологического здоровья и профессиональная гигиена зубов 9890₽ вместо 13
            890₽
            <br><br>

            <p>Что входит:</p>
            <ul>
                <li>осмотр врачом,</li>
                <li>КЛКТ (компьютерная томография),</li>
                <li>фотопротокол,</li>
                <li>при необходимости 3D сканирование,</li>
                <li>профессиональная гигиена зубов и полости рта (+фторирование по показанием),</li>
                <li>консультация по результатам,</li>
                <li>детальный план лечения и рекомендаций.</li>
            </ul>

            <!-- <br><br>
            Успейте, предложение ограничено! Специальная стоимость только до 31.11.2025. -->
            <br><br>
            Записывайтесь прямо сейчас!
        </div>
    </div>
</section>

<section id="popup-protez" class="popup popup--ad">
    <div class="popup__body">
        <div class="popup__content relative">
            <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                    <path d="M4 1.45508L19.9099 17.365" stroke="#ffffff" />
                    <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#ffffff" />
                </svg>
            </button>

            Используете неудобные съемные протезы? Терпите боль и дискомфорт?
            <p>Изготовим для вас съемный протез<br>наивысшего качества и подарим 15 000₽</p>

            Открыта запись на одновременную консультацию ведущими врачами: стоматолог хирург, стоматолог имплантолог,
            стоматолог ортопед.
            <br><br>
            Узнайте подробную информацию и запишитесь прямо сейчас.
            <br><br>
            Не упустите возможность улучшить стоматологическое здоровье и повысить качество жизни!
            <br><br>
            <p>«Гелиодент» - всегда профессиональное решение сложных стоматологических задач!</p>
        </div>
    </div>
</section>

<?php load_template(get_stylesheet_directory() . '/include/popups.php'); ?>


<footer class="footer">
    <div class="container">
        <div class="direct-link-wrapper">
            <a href="#popup" class="popup-link direct-link">Записаться</a>
        </div>
        <div class="footer__wrapper">

            <div class="footer__block">
                <div class="footer__header">
                    <img class="footer__logo" src="<?php echo get_template_directory_uri() ?>/src/img/footer-logo1.png"
                        width="345" height="70" alt="logo">
                    <a class="footer-button footer-button--mobile" target="_blank"
                        href="https://www.instagram.com/geliodentvl">читать
                        новости</a>
                </div>
                <div class="footer__text">
                    <p>Общество с ограниченной ответственностью "Гелиодент"</p>
                    <p>ИНН 2538046581</p>
                    <p>ОГРН 1022501902830</p>
                    <p>Лицензия: Л041-01023-25/00364199</p>
                    <p>Юр. адрес 690091, Приморский край, г. Владивосток, ул. Адмирала Фокина, дом № 1, корпус А</p>
                </div>
                <a class="footer-button" target="_blank" href="https://www.instagram.com/geliodentvl">читать
                    новости</a>
            </div>

            <div class="footer__list-wrapper">
                <div class="footer__list-item max-w-[185px] md:max-w-[292px]">
                    <p class="footer__list-title">УСЛУГИ</p>
                    <ul class="footer__list">
                        <li><a href="#">Лечение зубов</a></li>
                        <li><a href="#">Зубы за день, за 8 часов</a></li>
                        <li><a href="#">Имплантация, протезирование и перепротезирование</a></li>
                        <li><a href="#">Имплантация без костной пластики</a></li>
                        <li><a href="#">Виниры, Брекеты и элайнеры</a></li>
                        <li><a href="#">Лечение под наркозом</a></li>
                        <li><a href="#">Гигиена зубов и отбеливание</a></li>
                        <li><a href="#">Лечение зуба</a></li>
                    </ul>
                </div>
                <div class="footer__list-item">
                    <p class="footer__list-title">ПАЦИЕНТАМ</p>
                    <ul class="footer__list">
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Наши работы</a></li>
                        <li><a href="#">Вопросы и ответы</a></li>
                        <li><a href="#">Пациентам</a></li>
                        <li><a href="#">Информация</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Цены на услуги</a></li>
                    </ul>

                </div>
                <div class="footer__list-item footer__list-item--social">
                    <div class="mb-5">
                        <p class="footer__list-title">КОНТАКТЫ</p>
                        <ul class="footer__list">
                            <li>г. Владивосток,</li>
                            <li>ул. Адмирала Фокина, 1а</li>
                            <li><a href="tel:+74232300330">+7 (423) 2-300-330</a></li>
                            <li><a href="tel:+74232260557">+7 (423) 226-05-570</a></li>
                            <li><a href="tel:+79242563246">+7 (924) 256-32-46</a></li>
                            <li><a href="mailto:info@vladstom.ru">info@vladstom.ru</a></li>
                        </ul>
                    </div>
                    <div class="footer__social">
                        <p>Мы в соц сетях</p>
                        <ul>
                            <li><a class="text-white underline" target="_blank"
                                    href="https://vk.com/geliodentvl">Вконтакте</a></li>
                            <li><a class="text-white underline" target="_blank"
                                    href="https://t.me/geliodentvl">Telegram</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer__text footer__text--mobile">
            <p>Общество с ограниченной ответственностью "Гелиодент"</p>
            <p>ИНН 2538046581</p>
            <p>ОГРН 1022501902830</p>
            <p>Юр. адрес 690091, Приморский край, г. Владивосток, ул. Адмирала Фокина, дом № 1, корпус А</p>
        </div>

        <div class="footer__footer">
            <p>© <span class="data-span">0000</span> Стоматологический центр «Гелиодент» Политика конфиденциальности
            </p>
            <a href="<?php echo get_template_directory_uri() ?>/src/img/o_zaschite.pdf" target="_blank">Политика
                конфиденциальности</a>

        </div>

    </div>
    <?php global $version; ?>
</footer>

<?php wp_footer(); ?>
<script type="module" src="<?php echo get_template_directory_uri() ?>/js/main.js?ver=<?php echo $version; ?>"></script>
</body>

</html>