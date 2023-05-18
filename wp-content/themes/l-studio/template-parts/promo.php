<?php
/**
 ** Вывод карусели с акциями. (promo.php)
 ** @author webtitov.ru
 **/

$promos_args = array(
	'post_type' => 'webt-promos',
	'order' => 'DESC',
	'posts_per_page' => '',
	'nopaging' => false,
	'paged' => false
);
$the_query = new WP_Query($promos_args);
?>

<!-- Promos carousel -->
<section class="promo">
  <div class="theme-wrapper promo-wrapper">
    <h2 class="theme-headline promo-wrapper__headline"><span>Наши акции</span></h2>
    <div class="swiper promo-wrapper__box" id="promo_carousel">
      <div class="swiper-wrapper">
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
          $promo_image = parse_url(get_field('banner_dlya_akczii'))['path'];
          $promo_name = get_field('nazvanie_akczii');
          $promo_text = get_field('tekst_predlozheniya');

        ?>

        <!-- Promo item -->
        <button class="swiper-slide promo-box__item" data-promo-name="<?php echo $promo_name; ?>" data-promo-text="<?php echo $promo_text; ?>" data-promo-image="<?php echo $promo_image; ?>" data-modal-toggle="promo">
          <img src="<?php echo $promo_image; ?>" alt="L-STUDIO - Акция - <?php echo $promo_name; ?>" class="promo-item__cover">
        </button>

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>

      </div>
      <div class="swiper-pagination promo-box__pagination"></div>
    </div>
    <div class="swiper-button-prev promo-arrow__button promo-arrows__prev"></div>
    <div class="swiper-button-next promo-arrow__button promo-arrows__next"></div>

    <a href="/promos/" class="promo-wrapper__button theme-button">
      <span class="theme-button__text">Посмотреть все акции</span>
    </a>
  </div>
</section>