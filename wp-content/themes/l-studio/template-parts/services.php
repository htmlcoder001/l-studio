<?php
/**
 ** Вывод блока с услугами. (services.php)
 ** @author webtitov.ru
 **/

$services_args = array(
	'post_type' => 'page',
	'order' => 'DESC',
	'posts_per_page' => '',
	'nopaging' => false,
	'paged' => false,
  'post_parent' => 16
);
$the_query = new WP_Query($services_args);
?>

<!-- Services -->
<section class="services">
	<div class="theme-wrapper services-wrapper">
    <h2 class="theme-headline services-wrapper__headline"><span>Наши услуги в</span> L-STUDIO</h2>
		<div class="services-wrapper__grid">
			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <a href="<?php echo get_permalink(); ?>" class="services-grid__item">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="L-STUDIO - <?php the_title(); ?>" class="services-item__cover">
            <h2 class="services-item__title"><?php the_title(); ?></h2>
          </a>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	  <?php if ('/uslugi/' !== $_SERVER['REQUEST_URI']) : ?>
    <a href="<?php put_link($services_args['post_parent']); ?>" class="services-wrapper__button theme-button">
      <span class="theme-button__text">Посмотреть все услуги</span>
    </a>
    <?php endif; ?>
	</div>
</section>