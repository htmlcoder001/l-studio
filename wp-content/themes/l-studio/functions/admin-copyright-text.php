<?php
/**
 * Копирайт текст в админке (admin-copyright-text.php)
 * @author webtitov.ru
 */

add_filter( 'admin_footer_text', 'admin_footer_copyright' );

function admin_footer_copyright() {
return '<span class="footer-copyright">&copy; 2022, Made by <a href="https://webtitov.ru/" target="_blank">Webtitov</a></span>';
}