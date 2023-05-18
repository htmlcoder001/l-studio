<?php
/**
 ** WebT - Нумерованные блоки. (block.php)
 ** @author webtitov.ru
 **/

$webt_num_blocks = array(
  'blocks' => $attributes['bloki-s-tekstom'],
);
?>

<!-- Num blocks -->
<section class="features">
  <div class="theme-wrapper features-wrapper">
	  <?php foreach ($webt_num_blocks['blocks'] as $inner_content) { ?>
      <div class="features-wrapper__item">
        <span class="features-item__heading"><?php echo $inner_content['zagolovok']; ?></span>
        <p class="features-item__text"><?php echo $inner_content['tekst']; ?></p>
      </div>
	  <?php } ?>
  </div>
</section>