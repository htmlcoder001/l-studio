<?php
/**
 * Функции для более упрощенного вывода данных.
 * @author webtitov.ru
 *
 * Вывод изображений из папки img темы.
 * @param $image
 * @type string
 * usage: put_image('icons/icon-test.svg');
 */
function put_image($image) {
  echo(get_template_directory_uri() . '/img/' . $image);
}

/**
 * Вывод ссылки на страницу по айди.
 * @param $id
 * @type integer
 * usage: put_link(123);
 */
function put_link($id) {
  echo('/' . get_page_uri($id) . '/');
}