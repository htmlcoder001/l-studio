<?php
/**
 * Главная страница (index.php)
 * @author webtitov.ru
 */

$webt_contacts = get_option('webt_contacts_option');
$email = $webt_contacts['webt_email_all'];
$address = $webt_contacts['webt_address'];
$phone = $webt_contacts['webt_phone'];
$phone_2 = $webt_contacts['webt_phone_2'];
$phone_link = 'tel:+' . preg_replace("/[^0-9]/", "", $phone);
$phone_2_link = 'tel:+' . preg_replace("/[^0-9]/", "", $phone_2);

get_header();
?>


<?php get_footer(); ?>