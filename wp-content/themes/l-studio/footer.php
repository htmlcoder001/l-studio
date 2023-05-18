<?php
/**
 * Подвал сайта (footer.php)
 * @author webtitov.ru
 */

$webt_contacts = get_option('webt_contacts_option');
$email = $webt_contacts['webt_email_all'];
$address = $webt_contacts['webt_address'];
$phone = $webt_contacts['webt_phone'];
$phone_2 = $webt_contacts['webt_phone_2'];
$worktime = $webt_contacts['webt_worktime'];
$social_vk = $webt_contacts['webt_social_vk'];
$social_yt = $webt_contacts['webt_social_yt'];
$phone_link = 'tel:+' . preg_replace("/[^0-9]/", "", $phone);
$phone_2_link = 'tel:+' . preg_replace("/[^0-9]/", "", $phone_2);
 ?>

<!-- Contacts -->
<section id="contacts" class="contacts">
  <div class="theme-wrapper contacts-wrapper">
    <div class="contacts-wrapper__content">
      <div class="contacts-content__info">
        <h2 class="contacts-info__headline">Контакты</h2>
        <p class="contacts-info__item --info-item-address"><?php echo $address; ?></p>
        <p class="contacts-info__item --info-item-phone"><span><?php echo $phone; ?></span><span><?php echo $phone_2; ?></span></p>
        <p class="contacts-info__item --info-item-mail"><?php echo $email; ?></p>
        <p class="contacts-info__item --info-item-time"><?php echo $worktime; ?></p>
        <div class="contacts-info__socials">
          <span class="contacts-socials__title">Подписывайся на наши соц сети:</span>
          <div class="contacts-socials__box">
            <a href="<?php echo $social_vk; ?>" class="contacts-socials__item --socials-vk" target="_blank"></a>
            <a href="<?php echo $social_yt; ?>" class="contacts-socials__item --socials-yt" target="_blank"></a>
          </div>
        </div>
      </div>
    </div>
    <img src="<?php put_image('map-placeholder.jpg'); ?>" alt="" class="contacts-wrapper__map">
  </div>
</section>

</main>
<!-- } Page content -->

<footer>
  <div class="theme-wrapper footer-wrapper">
    <p class="footer-wrapper__copyright">&copy; 2016 - <?php echo date('Y'); ?>. Студия красоты Beauty bar "L-studio". Все права защищены</p>
  </div>
</footer>

<?php
get_template_part('template-parts/modals');

wp_footer();
?>
</body>
</html>
