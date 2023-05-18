<?php
/**
 ** WebT - Призыв к действию. (block.php)
 ** @author webtitov.ru
 **/

$webt_cta = array(
  'cover' => parse_url($attributes['fonovoe-izobrazhenie']['url'])['path'],
  'heading' => $attributes['zagolovok'],
  'text' => $attributes['tekst'],
  'button_text' => $attributes['tekst-v-knopke'],
);
?>

<!-- CTA -->
<section class="cta" style="--cta-bg-image: url(<?php echo $webt_cta['cover']; ?>);">
  <div class="theme-wrapper cta-wrapper">
    <div class="cta-wrapper__content">
      <h2 class="cta-content__headline"><?php echo $webt_cta['heading']; ?></h2>
      <p class="cta-content__text"><?php echo $webt_cta['text']; ?></p>
      <form class="cta-content__form ajax-form" method="post">
        <input type="text" class="cta-form__input" name="form_name" id="cta_name" placeholder="Введите имя">
        <input required type="tel" class="cta-form__input" name="form_phone" id="cta_phone" placeholder="Введите номер телефона">
        <button type="submit" class="theme-button cta-form__submit">
          <span class="theme-button__text"><?php echo $webt_cta['button_text']; ?></span>
        </button>
      </form>
    </div>
  </div>
</section>
