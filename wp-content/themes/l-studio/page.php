<?php
/**
 * Шаблон внутренней страницы (page.php)
 * @author webtitov.ru
 */

get_header();

if (have_posts()):
  while (have_posts()) : the_post();
     the_content();
   endwhile;
else:
  echo '<p>Страница в разработке</p>';
endif;

get_footer();