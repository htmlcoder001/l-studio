<?php
/**
 * Подсказки в админке. (admin-dashboard.php)
 * @author webtitov.ru
 */

function fast_links_widget()
{
  echo '
    <ul class="webt-dashboard-list">
      <li class="webt-dashboard-list__item">
        <span class="webt-dashboard-list__icon dashicons dashicons-admin-page"></span>
        <a href="/wp-admin/edit.php?post_type=page" class="webt-dashboard-list__link">Страницы (посмотреть/добавить)</a>
      </li>
      <li class="webt-dashboard-list__item">
        <span class="webt-dashboard-list__icon dashicons dashicons-welcome-widgets-menus"></span>
        <a href="/wp-admin/edit.php?post_type=webt-promos" class="webt-dashboard-list__link">Акции</a>
      </li>
      <li class="webt-dashboard-list__item">
        <span class="webt-dashboard-list__icon dashicons dashicons-groups"></span>
        <a href="/wp-admin/edit.php?post_type=webt-team" class="webt-dashboard-list__link">Сотрудники</a>
      </li>
      <li class="webt-dashboard-list__item">
        <span class="webt-dashboard-list__icon dashicons dashicons-format-image"></span>
        <a href="/wp-admin/edit.php?post_type=webt-portfolio" class="webt-dashboard-list__link">Портфолио</a>
      </li>
    </ul>
  ';
}

function dev_links_widget()
{
  echo '
    <ul class="webt-dashboard-list">
    <li class="webt-dashboard-list__item">
        <span class="webt-dashboard-list__icon dashicons dashicons-format-gallery"></span>
        <a href="/wp-admin/upload.php" class="webt-dashboard-list__link">Библиотека файлов и изображений</a>
      </li>
      <li class="webt-dashboard-list__item">
        <span class="webt-dashboard-list__icon dashicons dashicons-admin-plugins"></span>
        <a href="/wp-admin/plugins.php" class="webt-dashboard-list__link">Установка и настройка плагинов</a>
      </li>
      <li class="webt-dashboard-list__item">
        <span class="webt-dashboard-list__icon dashicons dashicons-list-view"></span>
        <a href="/wp-admin/edit.php?post_type=acf-field-group" class="webt-dashboard-list__link">Кастомные поля</a>
      </li>
      <li class="webt-dashboard-list__item">
        <span class="webt-dashboard-list__icon dashicons dashicons-welcome-widgets-menus"></span>
        <a href="/wp-admin/edit.php?post_type=lazyblocks" class="webt-dashboard-list__link">Кастомные блоки LB</a>
      </li> 
      <li class="webt-dashboard-list__item">
        <span class="webt-dashboard-list__icon dashicons dashicons-admin-users"></span>
        <a href="/wp-admin/users.php" class="webt-dashboard-list__link">Управление пользователями</a>
      </li>
    </ul>
  ';
}

function help_links_widget()
{
  echo '
    <ul class="webt-dashboard-list">
      <li class="webt-dashboard-list__item">
        <span class="webt-dashboard-list__icon dashicons dashicons-admin-generic"></span>
        <a href="/wp-admin/options-general.php?page=webt-edit-contacts" class="webt-dashboard-list__link">Изменить контакты компании (телефон, адрес, соц.сети)</a>
      </li>
    </ul>
  ';
}

function add_dashboard_widgets() {
  wp_add_dashboard_widget(
    'fast_links_dashboard_widget',
    'Управление контентом',
    'fast_links_widget'
  );

  wp_add_dashboard_widget(
    'dev_links_dashboard_widget',
    'Для разработки',
    'dev_links_widget'
  );

  wp_add_dashboard_widget(
    'help_links_dashboard_widget',
    'Прочее',
    'help_links_widget'
  );
}

add_action('wp_dashboard_setup', 'add_dashboard_widgets' );