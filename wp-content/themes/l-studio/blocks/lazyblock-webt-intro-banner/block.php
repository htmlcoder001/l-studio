<?php
/**
 ** WebT - Интро баннер. (block.php)
 ** @author webtitov.ru
 **/

$webt_intro_banner = array(
  'cover' => parse_url($attributes['izobrazhenie']['url'])['path'],
  'heading' => $attributes['zagolovok'],
  'text' => $attributes['tekst-v-bannere'],
  'button_text' => $attributes['tekst-v-knopke'],
  'sale_text' => $attributes['podpis'],
);
?>

<!-- Intro banner -->
<section class="intro" style="--intro-bg-image: url(<?php echo $webt_intro_banner['cover']; ?>);">
  <div class="theme-wrapper intro-wrapper">
    <img src="<?php echo $webt_intro_banner['cover']; ?>" alt="L-STUDIO - <?php echo strip_tags($webt_intro_banner['heading']); ?>" class="intro-wrapper__image">
    <div class="intro-wrapper__content">
      <h1 class="intro-content__title"><?php echo $webt_intro_banner['heading']; ?></h1>
      <p class="intro-content__text"><?php echo $webt_intro_banner['text']; ?></p>
      <div class="intro-content__actions">
        <button class="intro-content__button theme-button" data-modal-toggle="service">
          <span class="theme-button__text"><?php echo $webt_intro_banner['button_text']; ?></span>
        </button>
        <?php if (!empty($webt_intro_banner['sale_text'])) { ?>
        <span class="intro-actions__sale"><?php echo $webt_intro_banner['sale_text']; ?></span>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
