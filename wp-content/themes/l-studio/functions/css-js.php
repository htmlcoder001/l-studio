<?php
/**
 * Подключение стилей и скриптов (css-js.php)
 * @author webtitov.ru
 */

function webt_sources()
{
  $main_css_version = '1.6.5';
  $theme_css_version = '1.2.5';
  $main_js_version = '1.3.5';
  $responsive_css_version = '1.2.6';

  /* CSS */
  wp_enqueue_style('webt-common', get_template_directory_uri() . '/css/common.css');
  wp_enqueue_style('theme', get_template_directory_uri() . '/css/theme.css', array(), $theme_css_version);
  wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css');
  wp_enqueue_style('fancybox-style', get_template_directory_uri() . '/css/fancybox.min.css');
  wp_enqueue_style('swiper-style', get_template_directory_uri() . '/css/swiper.min.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), $main_css_version);
  wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), $responsive_css_version);

  /* JS */
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), $main_js_version, true);
  wp_enqueue_script('fancybox-script', get_template_directory_uri() . '/js/fancybox.umd.js', array('jquery'), '', true);
  wp_enqueue_script('jq-mask', get_template_directory_uri() . '/js/jquery.mask.min.js', array('jquery'), '', true);
  wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'webt_sources');