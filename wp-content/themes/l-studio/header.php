<?php
/**
 * Шапка сайта (header.php)
 * Используется для всех шаблонов главной страницы.
 * @author webtitov.ru
 */

  $webt_contacts = get_option('webt_contacts_option');
  $phone = $webt_contacts['webt_phone'];
  $phone_link = 'tel:+' . preg_replace("/[^0-9]/", "", $phone);

  $nav_args = [
    'menu'            => 16,
    'container'       => false,
    'menu_class'      => 'menu',
    'echo'            => false,
    'fallback_cb'     => 'wp_page_menu',
    'items_wrap'      => '%3$s',
    'depth'           => 1,
  ];
  // echo strip_tags(wp_nav_menu( $nav_args ), '<a>' );
  global $post;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="webtitov.ru">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=0, viewport-fit=cover">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no"/>
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>

  <!-- FAVICON -->
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Forum&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="theme-wrapper header-wrapper">
    <a href="/" class="header-wrapper__logo">
      <img src="<?php put_image('logo-l-studio.png'); ?>" alt="L-STUDIO - Логотип" class="header-logo__img">
    </a>
    <nav class="header-wrapper__nav">
      <?php echo strip_tags(wp_nav_menu( $nav_args ), '<a>' ); ?>
      <a <?php if ('/promos/' == $_SERVER['REQUEST_URI']) { echo 'aria-current="page"'; } ?> href="/promos/" class="header-nav__item">Акции</a>
      <a href="#contacts" class="header-nav__item">Контакты</a>
    </nav>
    <div class="header-wrapper__actions">
      <div class="nav-toggle" data-modal-toggle="nav">
        <span class="nav-toggle__line"></span>
        <span class="nav-toggle__line"></span>
      </div>
      <a href="<?php echo $phone_link; ?>" class="header-actions__whatsapp">
        <span class="header-whatsapp__phone"><?php echo $phone; ?></span>
        <span class="header-whatsapp__text">Номер для записи</span>
      </a>
      <button class="theme-button header-actions__button" data-modal-toggle="callback">
        <span class="theme-button__text">Заказать звонок</span>
      </button>
    </div>
  </div>
</header>

<!-- Page content { -->
<main>