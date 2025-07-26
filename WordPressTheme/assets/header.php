<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>
<body>
  <header class="header js-header">
    <div class="header__inner">
      <div class="header__content">
        <h1 class="header__logo">
          <a href="index.html"><img src="<?php echo get_theme_file_uri(); ?>/images/common/logo.png" alt="ロゴ画像"></a>
        </h1>
        <button class="header__hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="header__sp-nav js-sp-nav">
          <nav class="header__nav nav">
            <div class="nav__items">
              <ul class="nav__item">
                <li class="nav__list nav__list--active"><a href="campaign.html">キャンペーン</a></li>
                <li class="nav__list"><a href="#">ライセンス取得</a></li>
                <li class="nav__list"><a href="#">貸切体験ダイビング</a></li>
                <li class="nav__list"><a href="#">ナイトダイビング</a></li>
                <li class="nav__list nav__list--active"><a href="about.html">私たちについて</a></li>
              </ul>
              <ul class="nav__item">
                <li class="nav__list nav__list--active"><a href="information.html">ダイビング情報</a></li>
                <li class="nav__list"><a href="information.html?tab=tab1" >ライセンス講習</a></li>
                <li class="nav__list"><a href="information.html?tab=tab3">体験ダイビング</a></li>
                <li class="nav__list"><a href="information.html?tab=tab2">ファンダイビング</a></li>
                <li class="nav__list nav__list--active"><a href="blog.html">ブログ</a></li>
              </ul>
            </div>
            <div class="nav__items">
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
        <nav class="header__pc-nav pc-nav">
          <ul class="pc-nav__items">
            <li class="pc-nav__item">
              <a href="<?= esc_url(get_post_type_archive_link('campaign')); ?>">
                <div class="pc-nav__en">Campaign</div>
                <div class="pc-nav__ja">キャンペーン</div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?= esc_url(get_permalink(get_page_by_path( 'about us' ))); ?>">
                <div class="pc-nav__en">About us</div>
                <div class="pc-nav__ja">私たちについて</div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?= esc_url(get_permalink(get_page_by_path('information'))); ?>">
                <div class="pc-nav__en">Information</div>
                <div class="pc-nav__ja">ダイビング情報</div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?= esc_url(get_permalink(get_option('page_for_posts'))); ?>">
                <div class="pc-nav__en">Blog</div>
                <div class="pc-nav__ja">ブログ</div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?= esc_url(get_permalink(get_page_by_path('voice'))); ?>">
                <div class="pc-nav__en">Voice</div>
                <div class="pc-nav__ja">お客様の声</div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?= esc_url(get_permalink(get_page_by_path('price'))); ?>">
                <div class="pc-nav__en">Price</div>
                <div class="pc-nav__ja">料金一覧</div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?= esc_url(get_permalink(get_page_by_path('faq'))); ?>">
                <div class="pc-nav__en">FAQ</div>
                <div class="pc-nav__ja">よくある質問</div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?= esc_url(get_permalink(get_page_by_path('contact'))); ?>">
                <div class="pc-nav__en">Contact</div>
                <div class="pc-nav__ja">お問合せ</div>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>