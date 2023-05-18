<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();

$promos_args = array(
  'post_type' => 'webt-promos',
  'order' => 'DESC',
  'posts_per_page' => '',
  'nopaging' => false,
  'paged' => false
);
$the_query = new WP_Query($promos_args);
?>

  <!-- Intro -->
  <section class="intro" style="--intro-bg-image: url(/wp-content/themes/l-studio/img/intro.jpg);">
    <div class="theme-wrapper intro-wrapper">
      <img src="/wp-content/themes/l-studio/img/intro.jpg" alt="" class="intro-wrapper__image">
      <div class="intro-wrapper__content">
        <h1 class="intro-content__title">Центр косметологии<br/> от <span>L-STUDIO</span></h1>
        <p class="intro-content__text">Красота и молодость - желание каждой женщины. <br/>Мы предлагаем широки спектр услуг высокого <br/>качества, связанных с красотой</p>
        <a href="#" class="intro-content__button theme-button">
          <span class="theme-button__text">Записаться на процедуру</span>
        </a>
      </div>
    </div>
  </section>

  <!-- Promo page -->
  <section class="promo-page">
    <div class="theme-wrapper promo-page__wrapper">
      <h2 class="theme-headline promo-wrapper__headline"><span>Наши акции</span></h2>
      <div class="promo-wrapper__grid">
<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post();
    $promo_image = parse_url(get_field('banner_dlya_akczii'))['path'];
    $promo_name = get_field('nazvanie_akczii');
    $promo_text = get_field('tekst_predlozheniya');

    ?>
        <button class="promo-grid__item" data-promo-name="<?php echo $promo_name; ?>" data-promo-text="<?php echo $promo_text; ?>" data-promo-image="<?php echo $promo_image; ?>" data-modal-toggle="promo">
          <img src="<?php echo $promo_image; ?>" alt="L-STUDIO - Акция - <?php echo $promo_name; ?>" class="promo-item__cover">
        </button>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta" style="--cta-bg-image: url(/wp-content/themes/l-studio/img/cta.png);">
    <div class="theme-wrapper cta-wrapper">
      <div class="cta-wrapper__content">
        <h2 class="cta-content__headline">Не знаете какая процедура <br/>подойдёт вам?</h2>
        <p class="cta-content__text">Заполните форму для бесплатной консультации и <br/>наш сотрудник свяжется с вами в ближайшее время</p>
        <form class="cta-content__form ajax-form" method="post">
          <input type="text" class="cta-form__input" name="form_name" id="cta_name" placeholder="Введите имя">
          <input required type="tel" class="cta-form__input" name="form_phone" id="cta_phone" placeholder="Введите номер телефона">
          <button type="submit" class="theme-button cta-form__submit">
            <span class="theme-button__text">Оставить заявку</span>
          </button>
        </form>
      </div>
    </div>
  </section>

<?php
get_footer();