<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <h1 class="sub-mv__title">Site MAP</h1>
    <div class="sub-mv__img">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/sitemap-pc.jpg">
        <img img src="<?php echo get_theme_file_uri(); ?>/images/common/sitemap-sp.jpg" alt="海水から潜水服の頭が出た画像">
      </picture>
    </div>
  </div>

  <!-- パンくず -->
  <nav class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
      <ul class="breadcrumb__lists">
        <li class="breadcrumb__list"><a href="index.html">TOP</a></li>
        <li class="breadcrumb__list"><img img src="<?php echo get_theme_file_uri(); ?>/images/common/breadcrumb-arrow.png" alt=""></li>
        <li class="breadcrumb__list">サイトマップ</li>
      </ul>
    </div>
  </nav>

  <div class="site-map site-map-layout site-map-illustration">
    <div class="site-map__inner inner">
      <div class="site-map__nav">
        <nav class="site-map__nav nav">
          <div class="nav__items nav__items--gap">
            <ul class="nav__item">
              <li class="nav__list nav__list--active"><a href="campaign.html">キャンペーン</a></li>
              <li class="nav__list"><a href="#">ライセンス取得</a></li>
              <li class="nav__list"><a href="#">貸切体験ダイビング</a></li>
              <li class="nav__list"><a href="#">ナイトダイビング</a></li>
              <li class="nav__list nav__list--active"><a href="about.html">私たちについて</a></li>
            </ul>
            <ul class="nav__item">
              <li class="nav__list nav__list--active"><a href="information.html">ダイビング情報</a></li>
              <li class="nav__list"><a href="#">ライセンス講習</a></li>
              <li class="nav__list"><a href="#">体験ダイビング</a></li>
              <li class="nav__list"><a href="#">ファンダイビング</a></li>
              <li class="nav__list nav__list--active"><a href="blog.html">ブログ</a></li>
            </ul>
          </div>
          <div class="nav__items nav__items--gap">
            <ul class="nav__item">
              <li class="nav__list nav__list--active"><a href="voice.html">お客様の声</a></li>
              <li class="nav__list nav__list--active"><a href="price.html">料金一覧</a></li>
              <li class="nav__list"><a href="#">ライセンス講習</a></li>
              <li class="nav__list"><a href="#">体験ダイビング</a></li>
              <li class="nav__list"><a href="#">ファンダイビング</a></li>
            </ul>
            <ul class="nav__item">
              <li class="nav__list nav__list--active"><a href="faq.html">よくある質問</a></li>
              <li class="nav__list nav__list--active"><a href="privacy-policy.html">プライバシー<br class="u-mobile">
                ポリシー</a></li>
              <li class="nav__list nav__list--active"><a href="terms-of-service.html">利用規約</a></li>
              <li class="nav__list nav__list--active"><a href="contact.html">お問い合わせ</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <section class="contact sub-contact contact-illustration">
    <div class="contact__inner inner">
      <div class="contact__body">
        <div class="contact__info">
          <div class="contact__logo">
            <img img src="<?php echo get_theme_file_uri(); ?>/images/common/contact-logo.png" alt="contactのロゴ">
          </div>
          <div class="contact__info-body">
            <ul class="contact__list">
              <li>沖縄県那覇市1-1</li>
              <li>TEL:0120-000-0000</li>
              <li>営業時間:8:30-19:00</li>
              <li>定休日:毎週火曜日</li>
            </ul>
            <div class="contact__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2490.294718476348!2d127.67823376699887!3d26.21442949883825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5699dfe77fd89%3A0xe69ceb9c28817b01!2z5rKW57iE55yM5bqB!5e0!3m2!1sja!2sjp!4v1730508644032!5m2!1sja!2sjp"
              style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="contact__form">
          <div class="contact__header section-header">
            <div class="section-header__en">Contact</div>
            <h2 class="section-header__ja">お問い合わせ</h2>
          </div>
          <p class="contact__form-text">ご予約・お問い合わせはコチラ</p>
          <div class="contact__link">
            <a href="#" class="view-link">
              <div class="view-link__content">
                <div class="view-link__title">Contact us</div>
                <div class="view-link__icon"></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>