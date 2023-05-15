<?php
/**
 * Created by PhpStorm.
 * Author: webtitov.ru
 */

function webt_custom_posts() {
  /* Акции */
  register_post_type( 'webt-promos',
    array(
      'labels' => array(
        'name' => __( 'Акции' ),
        'singular_name' => __( 'Акции' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'promos'),
      'show_in_rest' => true,

    )
  );

  /* Сотрудники */
  register_post_type( 'webt-team',
    array(
      'labels' => array(
        'name' => __( 'Сотрудники' ),
        'singular_name' => __( 'Сотрудники' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'team'),
      'show_in_rest' => true,

    )
  );

  /* Отзывы */
  register_post_type( 'webt-reviews',
    array(
      'labels' => array(
        'name' => __( 'Отзывы' ),
        'singular_name' => __( 'Отзывы' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'reviews'),
      'show_in_rest' => true,

    )
  );


  /*
   * Функция для обновления ссылок к записям.
   * Раскомментировать строку, обновить страницу и закомментировать.
   */
  //flush_rewrite_rules();
}

add_action( 'init', 'webt_custom_posts' );