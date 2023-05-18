<?php
/**
 ** WebT - Блок с текстом. (block.php)
 ** @author webtitov.ru
 **/

$webt_text_block = array(
  'blocks' => $attributes['abzacy-teksta'],
);
?>

<!-- Text block -->
<section class="text-block">
  <div class="theme-wrapper text-block-wrapper">
	  <?php foreach ($webt_text_block['blocks'] as $inner_content) { ?>
      <p class="about-wrapper__text"><?php echo $inner_content['tekst']; ?></p>
	  <?php } ?>
  </div>
</section>