<?php
/**
 * Всплывающие окна. (modals.php)
 * @author webtitov.ru
 **/

$webt_contacts = get_option('webt_contacts_option');
$phone = $webt_contacts['webt_phone'];
$phone_2 = $webt_contacts['webt_phone_2'];
$email = $webt_contacts['webt_email_all'];
$phone_link = 'tel:+' . preg_replace("/[^0-9]/", "", $phone);
$phone_2_link = 'tel:+' . preg_replace("/[^0-9]/", "", $phone_2);

$nav_args = [
	'menu'            => 2,
	'container'       => false,
	'menu_class'      => 'menu',
	'echo'            => false,
	'fallback_cb'     => 'wp_page_menu',
	'items_wrap'      => '%3$s',
	'depth'           => 0,
];

$full_title = get_field('product_page_full_name');
?>

<!-- Else -->
<div class="theme-overlay" data-modal-close></div>

<div class="form-notification">
  <p class="form-notification__text">Ваша заявка успешно отправлена!</p>
  <p class="form-notification__text --error-text">Форма не отправлена. Поля заполненны некорректно.</p>
</div>

<div class="theme-modal" data-modal="nav">
  <div class="theme-modal__head">
    <span class="theme-modal__heading">Меню</span>
    <button type="button" class="theme-modal__close" data-modal-close></button>
  </div>
  <nav class="theme-modal__nav">
    <?php echo strip_tags(wp_nav_menu( $nav_args ), '<a>' ); ?>
  </nav>
  <a href="<?php echo $phone_link; ?>" class="theme-modal__phone" title="Позвоните нам"><?php echo $phone; ?></a>
  <button class="theme-modal__callback theme-button" data-modal-toggle="callback">
    <span class="theme-button__text">Заказать звонок</span>
  </button>
</div>

<div class="theme-modal" data-modal="callback">
  <div class="theme-modal__head">
    <span class="theme-modal__heading">Обратный звонок</span>
    <button type="button" class="theme-modal__close" data-modal-close></button>
  </div>
  <p class="theme-modal__text">Укажите свой номер телефона и наши менеджеры свяжутся с Вами в ближайшее время.</p>
  <form class="theme-modal__form ajax_form">
    <input type="hidden" name="source_page" value="<?php the_title(); ?>"/>
    <input required type="tel" class="theme-input" name="callback_phone" placeholder="Номер телефона">
    <button type="submit" class="theme-button theme-modal__submit">
      <span class="theme-button__text">Отправить</span>
    </button>
  </form>
</div>

<div class="theme-modal promo-modal" data-modal="promo">
  <div class="theme-modal__head">
    <span class="theme-modal__heading">Специальное предложение</span>
    <button type="button" class="theme-modal__close" data-modal-close></button>
  </div>
  <div class="theme-modal__info">
    <img src="" alt="" id="modal_promo_image" class="modal-info__image">
    <div class="modal-info__title">
      <span id="modal_promo_name"></span>
      <span id="modal_promo_price"></span>
    </div>
  </div>
  <form class="theme-modal__form ajax_form">
    <input type="hidden" name="modal_promo_type" id="modal_promo_type" value=""/>
    <input required type="tel" class="theme-input" name="callback_phone" placeholder="Номер телефона">
    <button type="submit" class="theme-button theme-modal__submit">
      <span class="theme-button__text">Заказать со скидкой</span>
    </button>
  </form>
</div>

<div class="theme-modal" data-modal="product">
  <div class="theme-modal__head">
    <span class="theme-modal__heading">Оформление заказа</span>
    <button type="button" class="theme-modal__close" data-modal-close></button>
  </div>
  <div class="theme-modal__info">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="Караван Строй - <?php if ($full_title == '') { the_title(); } else { echo $full_title; } ?>" class="modal-info__image">
    <div>
      <span class="modal-info__title"><?php if ($full_title == '') { the_title(); } else { echo $full_title; } ?></span>
      <span class="modal-info__price"><?php if (!empty(get_field('product_price'))) { echo get_field('product_price'); } ?></span>
    </div>
  </div>
  <form class="theme-modal__form ajax_form">
    <input type="hidden" name="modal_product_name" value="<?php if ($full_title == '') { the_title(); } else { echo $full_title; } ?>"/>
    <input required type="tel" class="theme-input" name="callback_phone" placeholder="Номер телефона">
    <button type="submit" class="theme-button theme-modal__submit">
      <span class="theme-button__text">Заказать</span>
    </button>
  </form>
</div>