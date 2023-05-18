<?php
/**
 ** Вывод карусели с сотрудниками. (team.php)
 ** @author webtitov.ru
 **/

$team_args = array(
	'post_type' => 'webt-team',
	'order' => 'DESC',
	'posts_per_page' => '',
	'nopaging' => false,
	'paged' => false
);
$the_query = new WP_Query($team_args);
?>

<!-- Team carousel -->
<section class="team">
  <div class="theme-wrapper team-wrapper">
    <h2 class="theme-headline team-wrapper__headline"><span>Наши</span> специалисты</h2>
    <div class="swiper team-wrapper__box" id="team_carousel">
      <div class="swiper-wrapper">
	      <?php if ( $the_query->have_posts() ) : ?>
	      <?php while ( $the_query->have_posts() ) : $the_query->the_post();
	        $team_image = parse_url(get_field('foto_sotrudnika'))['path'];
	        $team_name = get_field('imya');
	        $team_lvl = get_field('dolzhnost');
	      ?>
        <!-- Team item -->
        <div class="swiper-slide team-box__item">
          <div class="team-item__photo">
            <img src="<?php echo $team_image; ?>" alt="L-STUDIO - Сотрудники - <?php echo $team_name; ?>" class="team-photo__img">
          </div>
          <span class="team-item__name"><?php echo $team_name; ?></span>
          <span class="team-item__lvl"><?php echo $team_lvl; ?></span>
        </div>
	        <?php endwhile; ?>
	        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="swiper-button-prev team-arrow__button team-arrows__prev"></div>
    <div class="swiper-button-next team-arrow__button team-arrows__next"></div>
  </div>
</section>