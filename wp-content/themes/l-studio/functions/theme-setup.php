<?php
/**
 * Настройка темы (theme-setup.php)
 * @author webtitov.ru
 */

function webt_theme_setup() {
    load_theme_textdomain('lstudio');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'header' => 'Меню в шапке'
    ));
}
add_action('after_setup_theme', 'webt_theme_setup');