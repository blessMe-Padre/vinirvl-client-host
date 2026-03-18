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
                </div>
                <div class="footer__list-item">
                    <p class="footer__list-title">ПАЦИЕНТАМ</p>
                    <ul class="footer__list">
                        <li><a href="https://vladstom.ru/about/">О компании</a></li>
                        <li><a href="https://vladstom.ru/nashi-raboti/">Наши работы</a></li>
                        <li><a href="https://vladstom.ru/vopros/">Вопросы и ответы</a></li>
                        <li><a href="https://vladstom.ru/pacientam/">Пациентам</a></li>
                        <li><a href="https://vladstom.ru/information/">Информация</a></li>
                        <li><a href="https://vladstom.ru/contacts/">Контакты</a></li>
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