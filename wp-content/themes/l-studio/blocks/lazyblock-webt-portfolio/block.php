<?php
/**
 ** WebT - Портфолио. (block.php)
 ** @author webtitov.ru
 **/

$webt_portfolio = array(
  'heading' => $attributes['zagolovok'],
  'text' => $attributes['tekst-opisanie'],
  'category' => $attributes['kategoriya-foto'],
  'is_mini' => $attributes['mini-blok'],
  'link' => $attributes['ssylka-na-galereyu'],
);

if ($webt_portfolio['is_mini']) {
  $photos_per_page = 9;
} else {
	$photos_per_page = '';
}

$portfolio_args = array(
	'post_type' => 'webt-portfolio',
	'order' => 'DESC',
	'posts_per_page' => $photos_per_page,
	'nopaging' => false,
	'paged' => false,
  'meta_query' => array(
	  array(
		  'key' => 'kategoriya',
		  'value' => $webt_portfolio['category'],
	  ),
  ),
);
$the_query = new WP_Query($portfolio_args);

?>

<!-- Portfolio block -->
<section class="portfolio">
  <div class="theme-wrapper portfolio-wrapper">
    <h2 class="theme-headline portfolio-wrapper__headline"><?php echo $webt_portfolio['heading']; ?></h2>
    <?php if (!empty($webt_portfolio['text'])) { ?>
      <p class="portfolio-wrapper__text"><?php echo $webt_portfolio['text']; ?></p>
    <?php } ?>
    <div class="portfolio-wrapper__grid">
	    <?php if ( $the_query->have_posts() ) : ?>
		    <?php while ( $the_query->have_posts() ) : $the_query->the_post();
			    $portfolio_item_image = parse_url( get_field( 'izobrazhenie' ) )['path'];
			    $portfolio_item_text  = get_field( 'opisanie' );
			    $portfolio_item_cat  = get_field( 'kategoriya' );
			    ?>
            <a href="<?php echo $portfolio_item_image; ?>" class="portfolio-grid__item" data-fancybox="portfolio_<?php echo $portfolio_item_cat; ?>">
              <img src="<?php echo $portfolio_item_image; ?>" alt="<?php echo $portfolio_item_text; ?>" class="portfolio-item__image">
            </a>
		    <?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>
	    <?php endif; ?>
    </div>
	  <?php if ($webt_portfolio['is_mini']) { ?>
      <a href="<?php echo $webt_portfolio['link']; ?>" class="theme-button portfolio-wrapper__button">
        <span class="theme-button__text">Посмотреть все</span>
      </a>
    <?php } ?>
  </div>
</section>