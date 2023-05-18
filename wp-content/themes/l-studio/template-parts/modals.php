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
	'menu'            => 16,
	'container'       => false,
	'menu_class'      => 'menu',
	'echo'            => false,
	'fallback_cb'     => 'wp_page_menu',
	'items_wrap'      => '%3$s',
	'depth'           => 1,
];

$full_title = get_field('product_page_full_name');
?>

<!-- Else -->
<div class="theme-overlay" data-modal-close></div>

<div class="form-notification">
  <p class="form-notification__text">Ваша заявка успешно отправлена!</p>
  <p class="form-notification__text --error-text">Форма не отправлена. Поля заполненны некорректно.</p>
</div>

<!-- Modal: Mobile nav -->
<div class="theme-modal" data-modal="nav">
  <div class="theme-modal__head">
    <span class="theme-modal__heading">Меню</span>
    <button type="button" class="theme-modal__close" data-modal-close>
      <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" fill="none" viewBox="0 0 17 18">
        <path stroke="#1B6143" stroke-linecap="round" d="m.707 1.021 15.314 16.272m-15.042 0L16.293 1.021"/>
      </svg>
    </button>
  </div>
  <nav class="theme-modal__nav">
    <?php echo strip_tags(wp_nav_menu( $nav_args ), '<a>' ); ?>
    <a <?php if ('/promos/' == $_SERVER['REQUEST_URI']) { echo 'aria-current="page"'; } ?> href="/promos/" class="modal-nav__item">Акции</a>
    <a href="#contacts" class="modal-nav__item">Контакты</a>
  </nav>

  <button class="theme-button theme-modal__button" data-modal-toggle="callback">
    <span class="theme-button__text">Заказать звонок</span>
  </button>
</div>

<!-- Modal: Callback -->
<div class="theme-modal" data-modal="callback">
  <div class="theme-modal__head">
    <span class="theme-modal__heading">Обратный звонок</span>
    <button type="button" class="theme-modal__close" data-modal-close>
      <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" fill="none" viewBox="0 0 17 18">
        <path stroke="#1B6143" stroke-linecap="round" d="m.707 1.021 15.314 16.272m-15.042 0L16.293 1.021"/>
      </svg>
    </button>
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

<!-- Modal: Promo -->
<div class="theme-modal promo-modal" data-modal="promo">
  <div class="theme-modal__head">
    <span class="theme-modal__heading">Акция</span>
    <button type="button" class="theme-modal__close" data-modal-close>
      <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" fill="none" viewBox="0 0 17 18">
        <path stroke="#1B6143" stroke-linecap="round" d="m.707 1.021 15.314 16.272m-15.042 0L16.293 1.021"/>
      </svg>
    </button>
  </div>
  <div class="theme-modal__info">
    <img src="" alt="" id="modal_promo_image" class="modal-info__image">
    <div class="modal-info__title">
      <span id="modal_promo_name"></span>
      <span id="modal_promo_text"></span>
    </div>
  </div>
  <form class="theme-modal__form ajax_form">
    <input type="hidden" name="source_page" value="<?php the_title(); ?>"/>
    <input type="hidden" name="modal_promo_type" id="modal_promo_type" value=""/>
    <input required type="tel" class="theme-input" name="callback_phone" placeholder="Номер телефона">
    <button type="submit" class="theme-button theme-modal__submit">
      <span class="theme-button__text">Записаться</span>
    </button>
  </form>
</div>

<!-- Modal: Service -->
<div class="theme-modal service-modal" data-modal="service">
  <div class="theme-modal__head">
    <span class="theme-modal__heading">Записаться</span>
    <button type="button" class="theme-modal__close" data-modal-close>
      <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" fill="none" viewBox="0 0 17 18">
        <path stroke="#1B6143" stroke-linecap="round" d="m.707 1.021 15.314 16.272m-15.042 0L16.293 1.021"/>
      </svg>
    </button>
  </div>
  <p class="theme-modal__text">Укажите свой номер телефона и наши менеджеры свяжутся с Вами в ближайшее время.</p>
  <form class="theme-modal__form ajax_form">
    <input type="hidden" name="source_page" value="<?php the_title(); ?>"/>

    <?php if (strpos($_SERVER['REQUEST_URI'], '/uslugi/') !== false && !is_page(16)) { ?>
      <input required readonly type="text" class="theme-input" name="service_type" value="<?php the_title(); ?>">
    <?php } else { ?>
      <select required name="service_type" id="service_type" class="theme-input">
        <option value="0">Выберите процедуру</option>
        <option value="Парикмахерские услуги">Парикмахерские услуги</option>
        <option value="Брови, ресницы">Брови, ресницы</option>
        <option value="Маникюр и педикюр">Маникюр и педикюр</option>
        <option value="Косметология">Косметология</option>
        <option value="Эпиляция и депиляция">Эпиляция и депиляция</option>
        <option value="Макияж">Макияж</option>
      </select>
    <?php } ?>

    <input required type="tel" class="theme-input" name="callback_phone" placeholder="Номер телефона">

    <button type="submit" class="theme-button theme-modal__submit">
      <span class="theme-button__text">Отправить</span>
    </button>
  </form>
</div>
