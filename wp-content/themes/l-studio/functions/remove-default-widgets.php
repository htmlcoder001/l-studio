<?php
/**
 * Отключение стандартных виджетов (remove-default-widgets.php)
 * @author webtitov.ru
 */

function remove_default_widget() {
    unregister_widget('WP_Widget_Archives'); // Архивы
    unregister_widget('WP_Widget_Calendar'); // Календарь
    unregister_widget('WP_Widget_Categories'); // Рубрики
    unregister_widget('WP_Widget_Meta'); // Мета
    unregister_widget('WP_Widget_Pages'); // Страницы
    unregister_widget('WP_Widget_Recent_Comments'); // Свежие комментарии
    unregister_widget('WP_Widget_Recent_Posts'); // Свежие записи
    unregister_widget('WP_Widget_RSS'); // RSS
    unregister_widget('WP_Widget_Search'); // Поиск
    unregister_widget('WP_Widget_Tag_Cloud'); // Облако меток
    unregister_widget('WP_Widget_Media_Gallery'); // Отключение стандартной галереи
    unregister_widget('WP_Widget_Media_Image'); // Отключение стандартного изображения
    unregister_widget('WP_Widget_Custom_HTML'); // HTML код
    unregister_widget('WP_Widget_Media_Audio'); // Аудио
    unregister_widget('WP_Widget_Media_Video'); // Видео
    unregister_widget('WP_Widget_Text'); // Текст
    unregister_widget('WP_Nav_Menu_Widget'); // Произвольное меню
}

add_action( 'widgets_init', 'remove_default_widget', 20 );