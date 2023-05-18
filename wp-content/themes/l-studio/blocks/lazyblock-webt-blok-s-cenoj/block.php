<?php
/**
 ** WebT - Блок с ценой. (block.php)
 ** @author webtitov.ru
 **/

$webt_price_block_content = [
	'heading' => $attributes['zagolovok-spiska'],
	'price_items' => $attributes['pozicii-v-spiske'],
];
?>

<!-- Price list block -->
  <div class="pricelist-grid__item">
    <h2 class="pricelist-item__title"><?php echo $webt_price_block_content['heading']; ?></h2>
    <ul class="pricelist-item__list">
	    <?php foreach ($webt_price_block_content['price_items'] as $inner_content) { ?>
        <li class="pricelist-list__li">
          <span class="pricelist-li__name"><?php echo $inner_content['nazvanie']; ?></span>
          <span class="pricelist-li__value"><?php echo $inner_content['stoimost']; ?></span>
        </li>
	    <?php } ?>
    </ul>
  </div>

