<?php
/**
 * Стили для админки (admin-css.php)
 * @author webtitov.ru
 */

function webt_admin_bar_css() {
  if ( is_admin_bar_showing() ) { ?>
<style type="text/css">
  #wp-admin-bar-wp-logo,
  #wp-admin-bar-comments,
  #wp-admin-bar-updates,
  #wp-admin-bar-new-user,
  #update-nag, .update-nag,
  #footer-upgrade,
  #screen-meta-links,
  #default_role,
  #WPLANG,
  #siteurl,
  #home,
  #home-description,
  #timezone_string,
  .timezone-info,
  #timezone-description,
  #start_of_week,
  #new-admin-email-description,
  label[for="default_role"],
  label[for="WPLANG"],
  label[for="home"],
  label[for="siteurl"],
  label[for="start_of_week"],
  label[for="timezone_string"],
  .options-general-php .form-table tr:nth-child(3),
  .options-general-php .form-table tr:nth-child(6),
  .options-general-php .form-table tr:nth-child(7),
  .options-general-php .form-table tr:nth-child(8),
  .options-general-php .form-table tr:nth-child(9),
  .options-general-php .form-table tr:nth-child(10),
  .options-general-php .form-table tr:nth-child(11),
  .options-general-php .form-table tr:nth-child(12),
  .options-general-php .form-table tr:nth-child(4),
  .index-php h1,
  #dashboard_right_now,
  #dashboard_activity,
  #dashboard_primary,
  #dashboard_php_nag,
  #dashboard_site_health,
  #dashboard_quick_press {
    display: none;
  }

  .wp-toolbar body {
    background: #F5F5FA;
  }

  #menu-dashboard .wp-menu-name {
    color: transparent;
  }
  #menu-dashboard {
    position: relative;
  }
  #menu-dashboard:before,
  #menu-dashboard:hover:before,
  #menu-dashboard:focus:before {
    content: 'Админ панель';
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.3;
    position: absolute;
    display: block;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 36px;
    pointer-events: none;
    z-index: 1;
  }

  .wp-admin #wpadminbar #wp-admin-bar-site-name>.ab-item:before,
  #wpadminbar #wp-admin-bar-site-name>.ab-item:before {
    content: '';
    background-image: url(/wp-content/themes/l-studio/favicon.png)!important;
    width: 20px;
    height: 20px;
    background-position: center;
    background-repeat: no-repeat;
    -webkit-background-size: contain;
    background-size: contain;
  }

  #adminmenu li.wp-menu-separator {
    height: 2px;
    margin: 8px 0;
  }

  #adminmenu div.separator {
    height: 2px;
    background-color: #588f70;
    max-width: calc(100% - 24px);
    margin-left: 12px;
    opacity: 0.6;
  }

  #collapse-button,
  #wpadminbar .quicklinks .menupop ul li .ab-item:hover,
  #adminmenu a, {
    color: #f8f8f8!important;
  }
  #collapse-button:hover {
    opacity: 0.8;
    color: #f8f8f8!important;
  }

  .acf-image-uploader .image-wrap img {
    max-height: 300px!important;
  }

  #wpadminbar {
    border-bottom: 1px solid #1B6143;
  }

  #wpadminbar,
  #adminmenu li.menu-top:hover, #adminmenu li.opensub>a.menu-top, #adminmenu li>a.menu-top:focus,
  #wpadminbar .ab-top-menu>li.hover>.ab-item, #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus, #wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item, #wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus,
  #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
    background-color: #f8f8f8;
  }

  #menu-dashboard.current:before, #menu-dashboard.current:hover:before, #menu-dashboard.current:focus:before,
  #adminmenu .current div.wp-menu-image:before,
  #adminmenu .current:hover div.wp-menu-image:before,
  #adminmenu a.current:hover div.wp-menu-image:before,
  #wpadminbar #wp-admin-bar-site-name a.ab-item:hover,
  #wpadminbar #wp-admin-bar-site-name.hover a.ab-item:hover,
  #wpadminbar #wp-admin-bar-site-name.hover:hover>a.ab-item,
  div#wpadminbar ul li:last-child a.ab-item:hover {
    color: #1B6143;
  }

  #wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .shortlink-input,
  #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap,
  #wpadminbar .quicklinks .menupop ul.ab-sub-secondary, #wpadminbar .quicklinks .menupop ul.ab-sub-secondary .ab-submenu {
    background-color: #1B6143;
  }

  #wpadminbar .ab-empty-item, #wpadminbar .ab-submenu .ab-item, #wpadminbar a.ab-item, #wpadminbar>#wp-toolbar span.ab-label, #wpadminbar>#wp-toolbar span.noticon
   {
    color: #343434;
  }

  #wpadminbar #adminbarsearch:before, #wpadminbar .ab-icon:before, #wpadminbar .ab-item:before {
    color: #1B6143;
  }

  #adminmenu .wp-submenu a:focus, #adminmenu .wp-submenu a:hover, #adminmenu a:hover, #adminmenu li.menu-top>a:focus,
  #adminmenu li.menu-top:hover, #adminmenu li.opensub>a.menu-top, #adminmenu li>a.menu-top:focus,
  #collapse-button:hover, #collapse-button:active, #collapse-button:focus,
  #wpadminbar .quicklinks .ab-sub-wrapper .menupop.hover>a, #wpadminbar .quicklinks .menupop ul li a:focus, #wpadminbar .quicklinks .menupop ul li a:focus strong, #wpadminbar .quicklinks .menupop ul li a:hover, #wpadminbar .quicklinks .menupop ul li a:hover strong, #wpadminbar .quicklinks .menupop.hover ul li a:focus, #wpadminbar .quicklinks .menupop.hover ul li a:hover, #wpadminbar .quicklinks .menupop.hover ul li div[tabindex]:focus, #wpadminbar .quicklinks .menupop.hover ul li div[tabindex]:hover, #wpadminbar li #adminbarsearch.adminbar-focused:before, #wpadminbar li .ab-item:focus .ab-icon:before, #wpadminbar li .ab-item:focus:before, #wpadminbar li a:focus .ab-icon:before, #wpadminbar li.hover .ab-icon:before, #wpadminbar li.hover .ab-item:before, #wpadminbar li:hover #adminbarsearch:before, #wpadminbar li:hover .ab-icon:before, #wpadminbar li:hover .ab-item:before, #wpadminbar.nojs .quicklinks .menupop:hover ul li a:focus, #wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover,
  #wpadminbar:not(.mobile)>#wp-toolbar a:focus span.ab-label, #wpadminbar:not(.mobile)>#wp-toolbar li:hover span.ab-label, #wpadminbar>#wp-toolbar li.hover span.ab-label,
  #adminmenu li a:focus div.wp-menu-image:before, #adminmenu li.opensub div.wp-menu-image:before, #adminmenu li:hover div.wp-menu-image:before {
    color: #1B6143;
  }

  #adminmenu a:focus, #adminmenu a:hover, .folded #adminmenu .wp-submenu-head:hover {
    box-shadow: inset 2px 0 0 0 #1B6143;
  }

  #adminmenu .awaiting-mod, #adminmenu .update-plugins {
    background-color: #1B6143;
  }

  p.submit input[type=submit] {
    background: #1B6143;
    border-color: #1B6143;
  }

  p.submit input[type=submit]:hover {
    background: #437e5b;
    border-color: #437e5b;
  }

  .webt-dashboard-list {
    margin: 0;
  }

  .webt-dashboard-list__item {
    padding: 0;
    border-top: 1px solid #e0e0e0;
    position: relative;
    margin: 0;
  }
  .webt-dashboard-list__item:first-child {
    border-top: none;
  }

  .webt-dashboard-list__icon {
    font-size: 24px;
    width: 24px;
    height: 24px;
    color: #8d97ad;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    -ms-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;


    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 24px;
  }

  .webt-dashboard-list__link {
    font-size: 18px;
    padding: 16px 24px 16px 58px;
    display: block;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    -ms-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
  }

  .webt-dashboard-list__item:hover .webt-dashboard-list__link {
    background-color: #eeeeee;
  }


  .blog-content__text,
  .page-content__text {
    font-family: 'Gilroy', sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 165%;
    color: #5F5F5F;
    margin-bottom: 24px;
    margin-top: 0;
  }
  .--text-strong {
    font-weight: 700;
    font-size: 26px;
    line-height: 130%;
    color: #000000;
    margin-top: 8px;
  }
  .blog-content__image {
    height: 488px;
    width: 100%;
    object-fit: fill;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    border-radius: 15px;
    margin-bottom: 32px;
  }
  .page-content__subheading {
    font-family: 'Gilroy', sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 26px;
    line-height: 165%;
    color: #000000;
    margin: 48px 0;
  }
  hr.page-content__divider {
    border-top:1px solid #D9D9D9;
    height: 1px;
    margin: 48px auto;
    width: 100%;
  }
  .page-content__list {
    display: grid;
    grid-template-columns: 1fr;
    justify-content: start;
    align-items: start;
    grid-gap: 16px;
    list-style: none;
    padding: 0;
  }
  .page-list__item {
    font-family: var(--theme-font);
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 165%;
    color: #5F5F5F;
    position: relative;
    padding-left: 16px;
  }
  .page-list__item:before {
    content: '';
    display: block;
    width: 6px;
    height: 6px;
    background-color: #5F5F5F;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    position: absolute;
    left: 0;
    top: 12px;
  }

  #dashboard-widgets .postbox .inside {
    margin: 0;
    padding: 0;
  }

  body.folded #menu-dashboard:before {
    display: none;
  }

  body.wp-admin {
    background-color: #f8f8f8;
  }
  ul#adminmenu a.wp-has-current-submenu:after, ul#adminmenu>li.current>a.current:after {
    display: none!important;
  }




  .components-base-control.ej5x27r4 {

  }
</style>

  <?php }
}

// Backend
add_action( 'admin_head', 'webt_admin_bar_css' );

// Frontend
add_action( 'wp_head', 'webt_admin_bar_css' );
