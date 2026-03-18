import { initNav } from "./module/nav.js";
import { initSlider } from "./module/sliders.js";
import { initCurrentYear } from "./module/current-year.js";

import { initScroll } from "./module/scroll.js";
import { initPreloader } from "./module/preloader.js";
import { initSectionScroll } from "./module/section-scroll.js";
import { initNewScroll } from "./module/new-scroll.js";
import { initAnimation } from "./module/animations.js";
import { initPopup } from "./module/popup.js";
import { initVideo } from "./module/video.js";
import { initAccordions } from "./module/accordions.js";
import { initObservers } from "./module/observers.js";
import { initAnimateText } from "./module/animate-text.js";
import { initCounter } from "./module/counters.js";
import { initPhoneMask } from "./module/phone-mask.js";
import { initPersonalPopup } from "./module/personal-popup.js";

function show_label_errors_in_form(form, errors) {

    let errorText = [];

    for (const [error_key, error_val] of Object.entries(errors)) {
        const this_label = form.find('[name="' + error_key + '"]').parents('label').eq(0);

        this_label.addClass('error');
        this_label.find('.label__error').text(error_val).show();

        errorText.push(error_val);
    }

    const accessModal = document.querySelector('.access-modal');
    const accessModalText = document.querySelector('.access-modal-text');


    accessModal.style.background = 'red';
    accessModalText.innerHTML = errorText.join('<br>');
    const accessModalProgress = document.querySelector('.access-modal-progress');
    accessModal.classList.add('is-active');
    accessModalProgress.classList.add('is-active');

    setTimeout(() => {
        accessModal.classList.remove('is-active');
    }, 5000);
}

window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');
    initNav();
    initSlider();
    initCurrentYear();
    initPopup();
    initPhoneMask();

    // initScroll();
    // baguetteBox.run('.gallery-wrapper');
    // initNewScroll();

    initPreloader();
    initSectionScroll();
    // initAnimation();
    initVideo();
    initAccordions();
    initObservers();
    initAnimateText();
    initCounter();
    initPersonalPopup();


    // const beautyItems = document.querySelectorAll('.beauty-item');
    // if (beautyItems) {
    //     beautyItems.forEach((item) => {
    //         const input = item.querySelector('input');
    //         input.addEventListener('change', () => {
    //             item.querySelector('label').classList.toggle('is-checked');
    //         });
    //     });
    // }
    const beautyItemsRadio = document.querySelectorAll('.beauty-item-radio');
    if (beautyItemsRadio) {
        beautyItemsRadio.forEach((item) => {
            const input = item.querySelector('input');
            if (input.checked) {
                item.querySelector('span').classList.add('is-checked');
            } else {
                item.querySelector('span').classList.remove('is-checked');
            }

            input.addEventListener('change', () => {
                // удаляет is-checked у остальных item
                beautyItemsRadio.forEach((item) => {
                    item.querySelector('span').classList.remove('is-checked');
                });
                // добавляет is-checked к текущему item
                item.querySelector('span').classList.add('is-checked');
            });
        });
    }


    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        let scrollTop = window.scrollY;
        if (scrollTop >= 50) {
            header.classList.add('shadow-filter-1');
        } else {
            header.classList.remove('shadow-filter-1');
        }
    });

    // праздничный баннер
    // const banner = document.querySelector('.banner');
    // window.addEventListener('scroll', () => {
    //     let scrollTop = window.scrollY;
    //     if (scrollTop >= 100) {
    //         banner.style.display = "none";
    //     }
    // });

    // новые попапы
    const popupCounter = document.querySelector('.form-counter span');
    function getRandomArbitrary(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }
    if (popupCounter) {
        popupCounter.innerHTML = getRandomArbitrary(2, 9);
    }

    const popupNew = document.querySelector('#popup-new');
    // setTimeout(() => {
    //     popupNew.classList.add('open');
    // }, 30000)



    // Попап с рассрочкой
    // const salePopup = document.querySelector('#popup-sale');
    // let isPopupOpened = false;

    // const handleScroll = () => {
    //     let scrollTop = window.scrollY;
    //     if (scrollTop >= 300 && !isPopupOpened) {
    //         salePopup.classList.add('open');
    //         isPopupOpened = true;
    //         window.removeEventListener('scroll', handleScroll);
    //     }
    // };

    // window.addEventListener('scroll', handleScroll);

    const scrollButtonDown = document.querySelector('.three-scroll-button');

    if (scrollButtonDown) {
        const threeSection = document.querySelector('.three');
        const threeSectionHeight = threeSection.offsetHeight;

        window.addEventListener('scroll', () => {
            if (window.scrollY > threeSectionHeight) {
                scrollButtonDown.style.display = 'none';
            } else {
                scrollButtonDown.style.display = 'block';
            }
        });
    }

    // jQuery('body').off('change').on('change', '[data-chain]', function (e) {
    //     const current_item = jQuery(e.currentTarget);
    //     const not_current_items = jQuery('[data-chain="' + current_item.data('chain') + '"]').not(current_item);
    //     current_item.prop('checked', true);
    //     not_current_items.prop('checked', false);
    //     const label = current_item.parents('.label').eq(0);

    //     not_current_items.each(function (index, item) {
    //         jQuery(item).parents('.label').eq(0).removeClass('is-checked');
    //     });
    //     label.addClass('is-checked');
    //     console.log(label);

    //     // const all_checked_items = jQuery('[data-chain="' + current_item.data('chain') + '"]:checked');
    //     // const all_non_checked_items = jQuery('[data-chain="' + current_item.data('chain') + '"]').not(all_checked_items);

    //     // if (all_checked_items.length >= 1) {
    //     //     all_non_checked_items.prop('checked', false);
    //     // }
    //     // else {
    //     //     all_non_checked_items.prop('disabled', true);
    //     // }

    // });

    // jQuery('body').on('click', 'form[data-form] button[type="submit"]', function (e) {
    //     e.preventDefault();
    //     const this_submit = jQuery(e.currentTarget);
    //     const this_form = this_submit.parents('form').eq(0);
    //     console.log(this_form);

    //     let form_errors = {};
    //     let form_data = new FormData();
    //     let checked_prizes = 0;

    //     form_data.set('__form_name', this_form.attr('data-form'));
    //     form_data.set('action', 'form_validation');

    //     let form_elements = this_form.find('input:not([type="submit"]), textarea, select');
    //     if (this_form.attr('id') !== undefined && this_form.attr('id') !== '') {
    //         form_elements = form_elements.add(jQuery('[form="' + this_form.attr('id') + '"]'));
    //     }

    //     form_elements.each(function (i, form_element) {
    //         const current_form_element = jQuery(form_element);

    //         switch (current_form_element.attr('type')) {

    //             case 'checkbox':
    //                 if (current_form_element.is(':checked')) {
    //                     form_data.set(current_form_element.attr('name'), true);

    //                     if (['health', 'shine', 'confidence'].indexOf(current_form_element.attr('name')) !== -1) {
    //                         checked_prizes++;
    //                     }
    //                 }
    //                 else {
    //                     if (current_form_element.attr('required') !== undefined) {
    //                         form_errors[current_form_element.attr('name')] = 'Необходимо выделить пункт';
    //                     }
    //                     form_data.set(current_form_element.attr('name'), false);
    //                 }

    //                 break;
    //             case 'radio':
    //                 if (!form_data.has(current_form_element.attr('name'))) {
    //                     if (current_form_element.attr('required') !== undefined) {
    //                         form_errors[current_form_element.attr('name')] = 'Необходимо выбрать один из пунктов';
    //                     }
    //                     form_data.set(current_form_element.attr('name'), false);
    //                 }

    //                 if (current_form_element.is(':checked')) {
    //                     delete form_errors[current_form_element.attr('name')];
    //                     form_data.set(current_form_element.attr('name'), current_form_element.val());
    //                 }

    //                 break;
    //             default:
    //                 if (current_form_element.attr('required') !== undefined && current_form_element.val() === '') {
    //                     form_errors[current_form_element.attr('name')] = 'Поле обязательно для заполнения';
    //                 }

    //                 form_data.set(current_form_element.attr('name'), current_form_element.val());
    //                 break;
    //         }
    //     });

    //     if (!this_form.find('.business-submit-button').length && checked_prizes < 1) {
    //         form_errors['prize'] = 'Необходимо выбрать 1 подарок';
    //     }

    //     this_form.find('label').removeClass('error');
    //     this_form.find('.label__error').text('').hide();

    //     if (Object.keys(form_errors).length) {
    //         show_label_errors_in_form(this_form, form_errors);
    //     }
    //     else {
    //         jQuery.ajax({
    //             url: '/wp-admin/admin-ajax.php',
    //             type: 'POST',
    //             contentType: false,
    //             processData: false,
    //             data: form_data,
    //             beforeSend: function () {

    //             },
    //             success: function (query_result) {
    //                 const result = JSON.parse(query_result);
    //                 console.log(result);
    //                 const code = result.post.code;
    //                 const name = result.post.name;
    //                 const phone = result.post.phone;
    //                 const feedback = result.feedback;
    //                 const prize = [];

    //                 if (result.post.confidence == "true") {
    //                     prize.push('Уверенность');
    //                 }
    //                 if (result.post.health == "true") {
    //                     prize.push('Здоровье');
    //                 }
    //                 if (result.post.shine == "true") {
    //                     prize.push('Сияние');
    //                 }

    //                 if (Object.keys(result.errors).length) {
    //                     show_label_errors_in_form(this_form, result.errors);
    //                 }
    //                 else {

    //                     // Определяем ID формы Contact Form 7 в зависимости от data-form
    //                     let cf7FormId;
    //                     if (this_form.attr('data-form') === 'business-card') {
    //                         cf7FormId = '59449'; // ID для формы business-card
    //                         console.log('ID для формы business-card');
    //                     } else {
    //                         cf7FormId = '278';
    //                         console.log('cf7FormId = 278');
    //                     }



    //                     // const cf7FormId = '278';
    //                     const cf7Url = `https://vladstom.ru/wp-json/contact-form-7/v1/contact-forms/${cf7FormId}/feedback`;

    //                     const formData = new FormData();
    //                     formData.append("_wpcf7_unit_tag", "form_id");
    //                     formData.append('text-670', code);
    //                     formData.append('text-635', name);
    //                     formData.append('tel-872', phone);
    //                     formData.append('text-645', feedback);
    //                     formData.append('text-31', prize.join(', '));

    //                     fetch(cf7Url, {
    //                         method: 'POST',
    //                         body: formData,
    //                         headers: {
    //                             'X-Requested-With': 'XMLHttpRequest',
    //                         },
    //                     })
    //                         .then(response => response.json())
    //                         .then(data => {
    //                             if (data.status === 'mail_sent') {
    //                                 console.log('Contact Form 7 успешно отправлена!');

    //                                 const accessModal = document.querySelector('.access-modal');
    //                                 const accessModalProgress = document.querySelector('.access-modal-progress');
    //                                 const accessModalText = document.querySelector('.access-modal-text');

    //                                 accessModal.style.background = 'green';
    //                                 accessModalText.innerHTML = "Ваше сообщение успешно зарегистрировано";

    //                                 accessModal.classList.add('is-active');
    //                                 accessModalProgress.classList.add('is-active');

    //                                 setTimeout(() => {
    //                                     accessModal.classList.remove('is-active');
    //                                 }, 5000);

    //                                 const popupBox = document.querySelector('#popup_box');
    //                                 popupBox.classList.add('open');
    //                                 document.body.classList.add('lock');

    //                                 const successMessage = document.querySelector('.beauty-submit-asses');
    //                                 successMessage.style.display = 'block';

    //                             } else {
    //                                 console.error('Ошибка отправки:', data);
    //                             }
    //                         })
    //                         .catch(error => {
    //                             console.error('Ошибка сети:', error);
    //                         });
    //                 }
    //             },
    //             error: function (text) {
    //                 console.log(text);
    //             }
    //         });
    //     }
    // });

    // DOMContentLoaded
});
