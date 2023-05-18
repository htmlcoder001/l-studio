<?php
/**
 ** WebT - Галерея фото. (block.php)
 ** @author webtitov.ru
 **/

$webt_gallery = array(
  'images' => $attributes['izobrazheniya'],
);
?>

<!-- Gallery -->
<section class="gallery">
  <div class="theme-wrapper gallery-wrapper">
    <div class="about-wrapper__gallery">
	    <?php foreach ($webt_gallery['images'] as $image) { ?>
          <a href="<?php echo $image['url']; ?>" class="about-gallery__item" data-fancybox>
            <img src="<?php echo $image['url']; ?>" alt="" class="about-item__image">
          </a>
	    <?php } ?>
    </div>
  </div>
</section>