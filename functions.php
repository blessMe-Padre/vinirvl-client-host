<?php
$version = '0.0.2';

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

function theme_add_scripts()
{
    global $version;

    // подключаем основной файл стилей темы
    wp_enqueue_style('style', get_stylesheet_uri(), '', $version);

    // подключаем js файл swiper-bundle.min.js
    wp_enqueue_script('swiper', get_template_directory_uri() .
        '/js/swiper-bundle.min.js', false, null, 'footer');
}