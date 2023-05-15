<?php
/**
 * Страница входа. (login-page.php)
 * @author webtitov.ru
 */

/* Logotype */
function webt_login_logo() { ?>
    <style type="text/css">
      #login h1 a, .login h1 a {
        background-image: url(/wp-content/themes/l-studio/img/logo-l-studio.png);
        height:60px;
        width:300px;
        -webkit-background-size: contain;
        background-size: contain;
        background-repeat: no-repeat;
        padding-bottom: 10px;
      }

      body.login {
        background-color: #f8f8f8;
      }

      #loginform #wp-submit {
        background: #1B6143;
        border-color: #1B6143;
      }

      #loginform #wp-submit:hover {
        background: #437e5b;
        border-color: #437e5b;
      }

      #loginform #user_login:focus,
      #loginform #rememberme:focus,
      #loginform #rememberme:active,
      #loginform #user_login:active,
      #loginform #user_pass:focus,
      #loginform #user_pass:active {
        border-color: #1B6143;
        box-shadow: 0 0 0 1px #3C465A;
      }

      p.forgetmenot {
        margin-top: 4px;
      }

      #loginform {
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
      }

      .login .button.wp-hide-pw {
        color: #3C465A;
        opacity: 0.65;
      }

      .login .button.wp-hide-pw:hover {
        color: #3C465A;
        opacity: 1;
      }

    </style>
<?php }
add_action( 'login_enqueue_scripts', 'webt_login_logo' );

/* Logotype URL */
function webt_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'webt_login_logo_url' );

/* Logotype title */
function webt_login_logo_url_title() {
    return 'karavan-stroi.ru';
}
add_filter( 'login_headertitle', 'webt_login_logo_url_title' );