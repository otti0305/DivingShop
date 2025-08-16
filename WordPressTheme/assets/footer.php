<?php
$footer_classes = ['footer'];
if ( ! is_404() ) $footer_classes[] = 'top-footer';
?>

<!-- <footer class="footer top-footer"> -->
<footer class="<?php echo esc_attr(implode(' ', $footer_classes)); ?>">
    <div class="footer__inner inner">
      <div class="footer__content">
        <div class="footer__logo">
          <a href="#">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/logo.png" alt="ロゴ画像">
          </a>
        </div>
        <div class="footer__sns">
          <a href="#" class="footer__sns-icon">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/facebook.png" alt="facebookのアイコン">
          </a>
          <a href="#" class="footer__sns-icon">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/instagram.png" alt="Instagramのアイコン">
          </a>
        </div>
      </div>
      <nav class="footer__nav nav">
        <div class="nav__items">
          <ul class="nav__item">
            <li class="nav__list nav__list--active" ><a href="<?= esc_url(get_post_type_archive_link('campaign')); ?>">キャンペーン</a></li>
             <?php $genre_terms = get_terms('genre' , array('hide_empty' =>false)); ?>
             <?php foreach($genre_terms as $genre_term) : ?>
              <li class="nav__list"><a href="<?php echo get_term_link($genre_term, 'genre'); ?>"><?php echo $genre_term->name; ?></a></li>
             <?php endforeach; ?>
            <li class="nav__list nav__list--active"><a href="<?= esc_url(get_permalink(get_page_by_path( 'about us' ))); ?>">私たちについて</a></li>
          </ul>
          <ul class="nav__item">
            <li class="nav__list nav__list--active"><a href="<?= esc_url(get_permalink(get_page_by_path('information'))); ?>">ダイビング情報</a></li>
            <li class="nav__list"><a href="<?php echo esc_url( add_query_arg( 'tab', 'tab1', get_permalink( get_page_by_path( 'information' ) ) ) ); ?>" >ライセンス講習</a></li>
            <li class="nav__list"><a href="<?php echo esc_url( add_query_arg( 'tab', 'tab3', get_permalink( get_page_by_path( 'information' ) ) ) ); ?>">体験ダイビング</a></li>
            <li class="nav__list"><a href="<?php echo esc_url( add_query_arg( 'tab', 'tab2', get_permalink( get_page_by_path( 'information' ) ) ) ); ?>">ファンダイビング</a></li>
            <li class="nav__list nav__list--active"><a href="<?= esc_url(get_permalink(get_option('page_for_posts'))); ?>">ブログ</a></li>
          </ul>
        </div>
        <div class="nav__items">
          <ul class="nav__item">
            <li class="nav__list nav__list--active"><a href="<?= esc_url(get_permalink(get_page_by_path('voice'))); ?>">お客様の声</a></li>
            <?php
              $price_page = get_page_by_path('price');
              $price_url  = $price_page ? get_permalink($price_page) : '';
            ?>
            <li class="nav__list nav__list--active"><a href="<?= esc_url(get_permalink(get_page_by_path('price'))); ?>">料金一覧</a></li>
            <li class="nav__list"><a href="<?php echo esc_url($price_url . '#price-licence'); ?>">ライセンス講習</a></li>
            <li class="nav__list"><a href="<?php echo esc_url($price_url . '#price-experience'); ?>">体験ダイビング</a></li>
            <li class="nav__list"><a href="<?php echo esc_url($price_url . '#price-fundiving'); ?>">ファンダイビング</a></li>
          </ul>
          <ul class="nav__item">
            <li class="nav__list nav__list--active"><a href="<?= esc_url(get_permalink(get_page_by_path('faq'))); ?>">よくある質問</a></li>
            <li class="nav__list nav__list--active"><a href="<?= esc_url(get_permalink(get_page_by_path('privacypolicy'))); ?>">プライバシー<br class="u-mobile">
              ポリシー</a></li>
            <li class="nav__list nav__list--active"><a href="<?= esc_url(get_permalink(get_page_by_path('terms-of-service'))); ?>">利用規約</a></li>
            <li class="nav__list nav__list--active"><a href="<?= esc_url(get_permalink(get_page_by_path('contact'))); ?>">お問い合わせ</a></li>
          </ul>
        </div>
      </nav>
      <p class="footer__copyright">Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</p>
    </div>
  </footer>

  <div class="page-top">
    <a href="#"></a>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
