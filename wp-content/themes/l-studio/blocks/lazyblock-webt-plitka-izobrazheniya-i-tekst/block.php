<?php
/**
 ** WebT - Плитка: изображения и текст. (block.php)
 ** @author webtitov.ru
 **/

$webt_grid = array(
  'heading' => $attributes['zagolovok'],
  'subheading' => $attributes['podzagolovok'],
  'text_1' => $attributes['abzac-1'],
  'text_2' => $attributes['abzac-2'],
  'images' => $attributes['izobrazheniya'],
  'button' => $attributes['knopka-posle-teksta'],
  'button_text' => $attributes['tekst-v-knopke'],
  'button_link' => $attributes['ssylka-v-knopke'],
);
?>

<!-- Media grid -->
<section class="about">
  <div class="theme-wrapper about-wrapper">
    <h2 class="theme-headline about-wrapper__headline"><?php echo $webt_grid['heading']; ?></h2>
    <div class="about-wrapper__grid">
      <div class="about-grid__item">
        <img src="<?php echo $webt_grid['images'][0]['url']; ?>" alt="L-STUDIO - <?php echo $webt_grid['heading']; ?> - Фото 1" class="about-item__img">
        <div class="about-item__content">
          <h3 class="about-content__heading"><?php echo $webt_grid['subheading']; ?></h3>
          <p class="about-content__text theme-text"><?php echo $webt_grid['text_1']; ?></p>
        </div>
      </div>
      <div class="about-grid__item --about-item-bottom">
        <div class="about-item__content">
          <p class="about-content__text theme-text"><?php echo $webt_grid['text_2']; ?></p>
          <img src="<?php echo $webt_grid['images'][1]['url']; ?>" alt="L-STUDIO - <?php echo $webt_grid['heading']; ?> - Фото 2" class="about-content__img">
        </div>
        <img src="<?php echo $webt_grid['images'][2]['url']; ?>" alt="L-STUDIO - <?php echo $webt_grid['heading']; ?> - Фото 3" class="about-item__img">
      </div>
    </div>
    <?php if (!empty($webt_grid['button'])) { ?>
      <a href="<?php echo $webt_grid['button_link']; ?>" class="about-wrapper__button theme-button">
        <span class="theme-button__text"><?php echo $webt_grid['button_text']; ?></span>
      </a>
    <?php } ?>
  </div>
</section>
