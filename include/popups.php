<?php
// Получаем номер текущей недели
$weekNumber = (int) date('W');

// Определяем индекс попапа (0, 1 или 2)
$popupIndex = $weekNumber % 3;

ob_start();

switch ($popupIndex) {
    case 0:
        ?>
                        <section id="popup-new" class="popup new-popup">
                            <div class="popup__body">
                                <div class="popup__content relative">
                                    <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                                            <path d="M4 1.45508L19.9099 17.365" stroke="#ffffff" />
                                            <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#ffffff" />
                                        </svg>
                                    </button>
                                    <p class="popup__title">Запишись сегодня, <span>получишь полное 3D исследование</span> БЕСПЛАТНО</p>
    
                                    <img class="form-image" src="<?php echo get_template_directory_uri(); ?>/src/img/menu-string.webp" alt="">
                                    <?php echo do_shortcode('[contact-form-7 id="40c96de" title="Контактная форма"]'); ?>
                                    <p class="policy-inner">
                                        Нажимая кнопку “Отправить” я даю согласие на&nbsp;
                                        <a class="underline" href="/privacy-policy/" target="_blank" rel="noopener noreferrer">обработку персональных данных</a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <?php
                        break;
    case 1:
        ?>
                        <section id="popup-new" class="popup new-popup">
                            <div class="popup__body">
                                <div class="popup__content relative">
                                    <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                                            <path d="M4 1.45508L19.9099 17.365" stroke="#ffffff" />
                                            <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#ffffff" />
                                        </svg>
                                    </button>
                                    <p class="popup__title">Позвони сегодня, <span>и получи консультацию-консилиум</span> БЕСПЛАТНО</p>
    
                                    <img class="form-image" src="<?php echo get_template_directory_uri(); ?>/src/img/menu-string.webp" alt="">
                                    <?php echo do_shortcode('[contact-form-7 id="40c96de" title="Контактная форма"]'); ?>
                                    <p class="policy-inner">
                                        Нажимая кнопку “Отправить” я даю согласие на&nbsp;
                                        <a class="underline" href="/privacy-policy/" target="_blank" rel="noopener noreferrer">обработку персональных данных</a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <?php
                        break;
    case 2:
        ?>
                        <section id="popup-new" class="popup new-popup">
                            <div class="popup__body">
                                <div class="popup__content relative">
                                    <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                                            <path d="M4 1.45508L19.9099 17.365" stroke="#ffffff" />
                                            <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#ffffff" />
                                        </svg>
                                    </button>
                                    <p class="popup__title">Позвони <span>прямо</span> сейчас, получи 50% скидку <span>на профессиональную гигиену зубов</span></p>
    
                                    <img class="form-image" src="<?php echo get_template_directory_uri(); ?>/src/img/menu-string.webp" alt="">
                                    <?php echo do_shortcode('[contact-form-7 id="40c96de" title="Контактная форма"]'); ?>
                                    <p class="policy-inner">
                                        Нажимая кнопку “Отправить” я даю согласие на&nbsp;
                                        <a class="underline" href="/privacy-policy/" target="_blank" rel="noopener noreferrer">обработку персональных данных</a>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <?php
                        break;
}

$content = ob_get_clean();
echo $content;
?>
