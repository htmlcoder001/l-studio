<?php
/**
 * Отключение пунктов меню в админке (remove-admin-menus.php)
 * @author webtitov.ru
 */


add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
    remove_menu_page( 'edit.php' );                                        // Записи
    remove_menu_page( 'edit.php?post_type=lazyblocks' );                   // Записи
    remove_menu_page( 'edit.php?post_type=webt-reviews' );                 // Записи
    remove_menu_page( 'edit.php?post_type=webt-portfolio' );                 // Записи
    remove_menu_page( 'edit.php?post_type=webt-team' );                 // Записи
    remove_menu_page( 'edit.php?post_type=blog' );                         // Записи
    remove_menu_page( 'edit.php?post_type=webt-faq' );                     // Записи
    remove_menu_page( 'edit.php?post_type=webt-services' );                // Записи
    remove_menu_page( 'edit.php?post_type=webt-banners' );                 // Записи
    remove_menu_page( 'edit.php?post_type=webt-promos' );                 // Записи
    remove_menu_page( 'edit.php?post_type=page' );                         // Записи
    remove_menu_page( 'edit.php?post_type=acf-field-group' );              // Записи
    remove_submenu_page( 'index.php', 'update-core.php' );     // Обновления
    remove_menu_page( 'upload.php' );                                      // Медиафайлы
    remove_menu_page( 'edit-comments.php' );                              // Комментарии
    remove_menu_page( 'themes.php' );                                     // Внешний вид
    remove_menu_page( 'plugins.php' );                                    // Плагины
    remove_menu_page( 'users.php' );                                      // Пользователи
    remove_menu_page( 'tools.php' );                                      // Инструменты
    remove_menu_page( 'options-general.php' );                                      // Инструменты

    remove_submenu_page( 'options-general.php', 'options-privacy.php' );   // Настройки -> Приватность
    remove_submenu_page( 'options-general.php', 'options-discussion.php' );   // Настройки -> Обсуждение
    remove_submenu_page( 'options-general.php', 'options-permalink.php' );   // Настройки -> Постоянные ссылки
    remove_submenu_page( 'options-general.php', 'options-media.php' );   // Настройки -> Медиафайлы
    remove_submenu_page( 'options-general.php', 'options-reading.php' );   // Настройки -> Чтение
    remove_submenu_page( 'options-general.php', 'options-writing.php' );   // Настройки -> Написание
}