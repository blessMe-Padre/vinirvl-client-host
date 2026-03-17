<?php
$version = '0.0.0';

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

function theme_add_scripts()
{
    global $version;
    // подключаем файл baguetteBox.css
    // wp_enqueue_style('baguetteBox-css', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // подключаем файл animate.css
    // wp_enqueue_style('baguetteBox-css', get_template_directory_uri() . '/css/animate.min.css');

    // подключаем основной файл стилей темы
    wp_enqueue_style('style', get_stylesheet_uri(), '', $version);

    //---------------------------------------------------------------------------------------------------------------------------------------------

    // Подключаем библиотеку jQuery
    // wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.7.1.min.js');

    // подключаем js файл baguetteBox
    // wp_enqueue_script('baguetteBox', get_template_directory_uri() .
    //     '/js/baguettebox.js', false, null, 'footer');

    // подключаем js файл swiper-bundle.min.js
    // wp_enqueue_script('swiper', get_template_directory_uri() .
    //     '/js/swiper-bundle.min.js', false, null, 'footer');
}
