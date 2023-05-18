<?php
/**
 ** WebT - Прайс блоки. (block.php)
 ** @author webtitov.ru
 **/

$webt_price_blocks = $attributes['bloki-s-prajsom'];
?>

<!-- Price list -->
<section class="pricelist">
  <div class="theme-wrapper pricelist-wrapper">
    <h2 class="theme-headline pricelist-wrapper__headline">Прайс</h2>
    <div class="pricelist-wrapper__grid">
      <?php echo $webt_price_blocks; ?>
    </div>
    <button class="theme-button pricelist-wrapper__button" data-modal-toggle="service">
      <span class="theme-button__text">Записаться на процедуру</span>
    </button>
  </div>
</section>