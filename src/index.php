<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />
  <!-- フォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <!-- JavaScript -->
  <script defer src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script defer src="./assets/js/jquery.inview.min.js"></script>
  <script defer src="./assets/js/script.js"></script>
</head>
<body>
  <header class="header js-header">
    <div class="header__inner">
      <div class="header__content">
        <h1 class="header__logo">
          <a href="index.html"><img src="/assets/images/common/logo.png" alt="ロゴ画像"></a>
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
              <a href="campaign.html">
                <div class="pc-nav__en">Campaign</div>
                <div class="pc-nav__ja">キャンペーン</div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="about.html">
                <div class="pc-nav__en">About us</div>
                <div class="pc-nav__ja">私たちについて</div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="information.html">
                <div class="pc-nav__en">Information</div>
                <div class="pc-nav__ja">ダイビング情報</div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="blog.html">
                <div class="pc-nav__en">Blog</div>
                <div class="pc-nav__ja">ブログ</div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="voice.html">
                <div class="pc-nav__en">Voice</div>
                <div class="pc-nav__ja">お客様の声</div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="price.html">
                <div class="pc-nav__en">Price</div>
                <div class="pc-nav__ja">料金一覧</div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="faq.html">
                <div class="pc-nav__en">FAQ</div>
                <div class="pc-nav__ja">よくある質問</div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="contact.html">
                <div class="pc-nav__en">Contact</div>
                <div class="pc-nav__ja">お問合せ</div>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main>
    <section class="mv">
      <div class="mv__header">
        <h2 class="mv__title">diving</h2>
        <div class="mv__subtitle">into the ocean</div>
      </div>
      <div class="swiper js-mv-swiper mv__swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide mv__slide">
            <picture>
              <source media="(min-width: 768px)" srcset="/assets/images/common/mv-pc1.png">
              <img src="/assets/images/common/mv-sp1.png" alt="海亀の画像">
            </picture>
          </div>
          <div class="swiper-slide mv__slide">
            <picture>
              <source media="(min-width: 768px)" srcset="/assets/images/common/mv-pc2.png">
              <img src="/assets/images/common/mv-sp2.png" alt="海中の画像">
            </picture>
          </div>
          <div class="swiper-slide mv__slide">
            <picture>
              <source media="(min-width: 768px)" srcset="/assets/images/common/mv-pc3.png">
              <img src="/assets/images/common/mv-sp3.png" alt="海辺の画像">
            </picture>
          </div>
          <div class="swiper-slide mv__slide">
            <picture>
              <source media="(min-width: 768px)" srcset="/assets/images/common/mv-pc4.png">
              <img src="/assets/images/common/mv-sp4.png" alt="砂浜の画像">
            </picture>
          </div>
        </div>
      </div>
    </section>

    <section class="campaign top-campaign">
      <div class="campaign__inner inner">
        <div class="campaign__header section-header">
          <div class="section-header__en">Campaign</div>
          <h2 class="section-header__ja">キャンペーン</h2>
        </div>
        <div class="campaign__contents">
          <div class="swiper campaign__swiper js-campaign-swiper">
            <div class="swiper-wrapper campaign-cards">
              <div class="swiper-slide campaign-cards__item">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__img">
                    <img src="/assets/images/common/campaign1.png" alt="campaignのイメージ写真">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__head">
                      <div class="campaign-card__category">ライセンス講習</div>
                      <h3 class="campaign-card__title">ライセンス取得</h3>
                    </div>
                    <div class="campaign-card__price">
                      <p class="campaign-card__catch">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__content">
                        <div class="campaign-card__old-price">¥56,000</div>
                        <div class="campaign-card__new-price">¥46,000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide campaign-cards__item">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__img">
                    <img src="/assets/images/common/campaign2.png" alt="campaignのイメージ写真">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__head">
                      <div class="campaign-card__category">体験ダイビング</div>
                      <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                    </div>
                    <div class="campaign-card__price">
                      <p class="campaign-card__catch">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__content">
                        <div class="campaign-card__old-price">¥24,000</div>
                        <div class="campaign-card__new-price">¥18,000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide campaign-cards__item">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__img">
                    <img src="/assets/images/common/campaign3.png" alt="campaignのイメージ写真">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__head">
                      <div class="campaign-card__category">体験ダイビング</div>
                      <h3 class="campaign-card__title">ナイトダイビング</h3>
                    </div>
                    <div class="campaign-card__price">
                      <p class="campaign-card__catch">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__content">
                        <div class="campaign-card__old-price">¥10,000</div>
                        <div class="campaign-card__new-price">¥8,000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide campaign-cards__item">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__img">
                    <img src="/assets/images/common/campaign4.png" alt="campaignのイメージ写真">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__head">
                      <div class="campaign-card__category">ファンダイビング</div>
                      <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                    </div>
                    <div class="campaign-card__price">
                        <p class="campaign-card__catch">全部コミコミ(お一人様)</p>
                        <div class="campaign-card__content">
                          <div class="campaign-card__old-price">¥20,000</div>
                          <div class="campaign-card__new-price">¥16,000</div>
                        </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide campaign-cards__item">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__img">
                    <img src="/assets/images/common/campaign1.png" alt="campaignのイメージ写真">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__head">
                      <div class="campaign-card__category">ライセンス講習</div>
                      <h3 class="campaign-card__title">ライセンス取得</h3>
                    </div>
                    <div class="campaign-card__price">
                      <p class="campaign-card__catch">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__content">
                        <div class="campaign-card__old-price">¥56,000</div>
                        <div class="campaign-card__new-price">¥46,000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide campaign-cards__item">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__img">
                    <img src="/assets/images/common/campaign2.png" alt="campaignのイメージ写真">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__head">
                      <div class="campaign-card__category">体験ダイビング</div>
                      <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                    </div>
                    <div class="campaign-card__price">
                      <p class="campaign-card__catch">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__content">
                        <div class="campaign-card__old-price">¥24,000</div>
                        <div class="campaign-card__new-price">¥18,000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide campaign-cards__item">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__img">
                    <img src="/assets/images/common/campaign3.png" alt="campaignのイメージ写真">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__head">
                      <div class="campaign-card__category">体験ダイビング</div>
                      <h3 class="campaign-card__title">ナイトダイビング</h3>
                    </div>
                    <div class="campaign-card__price">
                      <p class="campaign-card__catch">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__content">
                        <div class="campaign-card__old-price">¥10,000</div>
                        <div class="campaign-card__new-price">¥8,000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide campaign-cards__item">
                <a href="#" class="campaign-card">
                  <div class="campaign-card__img">
                    <img src="/assets/images/common/campaign4.png" alt="campaignのイメージ写真">
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__head">
                      <div class="campaign-card__category">ファンダイビング</div>
                      <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                    </div>
                    <div class="campaign-card__price">
                      <p class="campaign-card__catch">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__content">
                        <div class="campaign-card__old-price">¥20,000</div>
                        <div class="campaign-card__new-price">¥16,000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-button-prev campaign__swiper-button-prev u-desktop"></div>
          <div class="swiper-button-next campaign__swiper-button-next u-desktop"></div>
        </div>
        <div class="campaign__link">
          <a href="#" class="view-link">
            <div class="view-link__content">
              <div class="view-link__title">View more</div>
              <div class="view-link__icon"></div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section class="about top-about about-illustration">
      <div class="about__inner inner">
        <div class="about__header section-header">
          <div class="section-header__en">About us</div>
          <h2 class="section-header__ja">私たちについて</h2>
        </div>
        <div class="about__content">
          <div class="about__img-left">
            <img src="/assets/images/common/about-img1.png" alt="シーサーの画像">
          </div>
          <div class="about__img-right">
            <img src="/assets/images/common/about-img2.png" alt="魚の画像">
          </div>
          <div class="about__text-area">
            <h3 class="about__title">Dive into<br>
              the Ocean</h3>
            <div class="about__body">
              <p class="about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
              <div class="about__link">
                <a href="#" class="view-link">
                  <div class="view-link__content">
                    <div class="view-link__title">View more</div>
                    <div class="view-link__icon"></div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="information top-information">
      <div class="information__inner inner">
        <div class="information__header section-header">
          <div class="section-header__en">Information</div>
          <h2 class="section-header__ja">ダイビング情報</h2>
        </div>
        <div class="information__content">
          <div class="information__img box">
            <img src="/assets/images/common/information.png" alt="informationのイメージ写真">
          </div>
          <div class="information__body">
            <h3 class="information__title">ライセンス講習</h3>
            <p class="information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
              正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
            <div class="information__link">
              <a href="#" class="view-link">
                <div class="view-link__content">
                  <div class="view-link__title">View more</div>
                  <div class="view-link__icon"></div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="blog top-blog blog-illustration">
      <div class="blog__inner inner">
        <div class="blog__header section-header">
          <div class="section-header__en">Blog</div>
          <h2 class="section-header__ja">ブログ</h2>
        </div>
        <div class="blog__cards blog-cards">
          <div class="blog-cards__item">
            <a href="#" class="blog-card">
              <div class="blog-card__img">
                <img src="/assets/images/common/blog-img1.jpg" alt="ライセンス取得">
              </div>
              <div class="blog-card__body">
                <div class="blog-card__date">
                  <time datetime="2024-10-27T19:00">2023/11/17</time>
                </div>
                <h3 class="blog-card__title">ライセンス取得</h3>
              </div>
              <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </a>
          </div>
          <div class="blog-cards__item">
            <a href="#" class="blog-card">
              <div class="blog-card__img">
                <img src="/assets/images/common/blog-img2.jpg" alt="ライセンス取得">
              </div>
              <div class="blog-card__body">
                <div class="blog-card__date">
                  <time datetime="2024-10-27T19:00">2023/11/17</time>
                </div>
                <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
              </div>
              <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </a>
          </div>
          <div class="blog-cards__item">
            <a href="#" class="blog-card">
              <div class="blog-card__img">
                <img src="/assets/images/common/blog-img3.jpg" alt="ライセンス取得">
              </div>
              <div class="blog-card__body">
                <div class="blog-card__date">
                  <time datetime="2024-10-27T19:00">2023/11/17</time>
                </div>
                <h3 class="blog-card__title">カクレクマノミ</h3>
              </div>
              <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </a>
          </div>
        </div>
        <div class="blog__link">
          <a href="#" class="view-link">
            <div class="view-link__content">
              <div class="view-link__title">View more</div>
              <div class="view-link__icon"></div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section class="voice top-voice voice-illustration">
      <div class="voice__inner inner">
        <div class="voice__header section-header">
          <div class="section-header__en">Voice</div>
          <h2 class="section-header__ja">お客様の声</h2>
        </div>
        <div class="voice__cards voice-cards">
          <div class="voice-cards__item">
            <a href="#" class="voice-card">
              <div class="voice-card__head">
                <div class="voice-card__info">
                  <div class="voice-card__meta">
                    <div class="voice-card__gender">20代(女性)</div>
                    <div class="voice-card__category">ライセンス講習</div>
                  </div>
                  <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <div class="voice-card__img box">
                  <img src="/assets/images/common/voice-img1.jpg" alt="女性の写真">
                </div>
              </div>
              <div class="voice-card__body">
                <div class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。</div>
              </div>
            </a>
          </div>
          <div class="voice-cards__item">
            <a href="#" class="voice-card">
              <div class="voice-card__head">
                <div class="voice-card__info">
                  <div class="voice-card__meta">
                    <div class="voice-card__gender">30代(男性)</div>
                    <div class="voice-card__category">ファンダイビング</div>
                  </div>
                  <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <div class="voice-card__img box">
                  <img src="/assets/images/common/voice-img2.jpg" alt="男性の写真">
                </div>
              </div>
              <div class="voice-card__body">
                <div class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。</div>
              </div>
            </a>
          </div>
        </div>
        <div class="voice__link">
          <a href="#" class="view-link">
            <div class="view-link__content">
              <div class="view-link__title">View more</div>
              <div class="view-link__icon"></div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section class="price top-price price-illustration">
      <div class="price__inner inner">
        <div class="price__header section-header">
          <div class="section-header__en">Price</div>
          <h2 class="section-header__ja">料金一覧</h2>
        </div>
        <div class="price__wrapper">
          <div class="price__img box">
            <picture>
              <source media="(min-width: 768px)" srcset="/assets/images/common/price-pc.png">
              <img src="/assets/images/common/price-sp.png" alt="海亀の画像">
            </picture>
          </div>
          <div class="price__contents price-contents">
            <div class="price-contents__item">
              <div class="price-content">
                <h3 class="price-content__title">ライセンス講習</h3>
                <dl class="price-content__lists">
                  <div class="price-content__list">
                    <dt>オープンウォーターダイバーコース</dt>
                    <dd>¥50,000</dd>
                  </div>
                  <div class="price-content__list">
                    <dt>アドバンスドオープンウォーターコース</dt>
                    <dd>¥60,000</dd>
                  </div>
                  <div class="price-content__list">
                    <dt>レスキュー＋EFRコース</dt>
                    <dd>¥70,000</dd>
                  </div>
                </dl>
              </div>
            </div>
            <div class="price-contents__item">
              <div class="price-content">
                <h3 class="price-content__title">体験ダイビング</h3>
                <dl class="price-content__lists">
                  <div class="price-content__list">
                    <dt>ビーチ体験ダイビング(半日)</dt>
                    <dd>¥7,000</dd>
                  </div>
                  <div class="price-content__list">
                    <dt>ビーチ体験ダイビング(1日)</dt>
                    <dd>¥14,000</dd>
                  </div>
                  <div class="price-content__list">
                    <dt>ボート体験ダイビング(半日)</dt>
                    <dd>¥10,000</dd>
                  </div>
                  <div class="price-content__list">
                    <dt>ボート体験ダイビング(1日)</dt>
                    <dd>¥18,000</dd>
                  </div>
                </dl>
              </div>
            </div>
            <div class="price-contents__item">
              <div class="price-content">
                <h3 class="price-content__title">ファンダイビング</h3>
                <dl class="price-content__lists">
                  <div class="price-content__list">
                    <dt>ビーチダイビング(2ダイブ)</dt>
                    <dd>¥14,000</dd>
                  </div>
                  <div class="price-content__list">
                    <dt>ボートダイビング(2ダイブ)</dt>
                    <dd>¥18,000</dd>
                  </div>
                  <div class="price-content__list">
                    <dt>スペシャルダイビング(2ダイブ)</dt>
                    <dd>¥24,000</dd>
                  </div>
                  <div class="price-content__list">
                    <dt>ナイトダイビング(1ダイブ)</dt>
                    <dd>¥10,000</dd>
                  </div>
                </dl>
              </div>
            </div>
            <div class="price-contents__item">
              <div class="price-content">
                <h3 class="price-content__title">スペシャルダイビング</h3>
                <dl class="price-content__lists">
                  <div class="price-content__list">
                    <dt>貸切ダイビング(2ダイブ)</dt>
                    <dd>¥24,000</dd>
                  </div>
                  <div class="price-content__list">
                    <dt>1日ダイビング(3ダイブ)</dt>
                    <dd>¥32,000</dd>
                  </div>
                </dl>
              </div>
            </div>
          </div>
        </div>
        <div class="price__link">
          <a href="#" class="view-link">
            <div class="view-link__content">
              <div class="view-link__title">View more</div>
              <div class="view-link__icon"></div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section class="contact top-contact contact-illustration">
      <div class="contact__inner inner">
        <div class="contact__body">
          <div class="contact__info">
            <div class="contact__logo">
              <img src="/assets/images/common/contact-logo.png" alt="contactのロゴ">
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

  <footer class="footer top-footer">
    <div class="footer__inner inner">
      <div class="footer__content">
        <div class="footer__logo">
          <a href="#">
            <img src="/assets/images/common/logo.png" alt="ロゴ画像">
          </a>
        </div>
        <div class="footer__sns">
          <a href="#" class="footer__sns-icon">
            <img src="/assets/images/common/facebook.png" alt="facebookのアイコン">
          </a>
          <a href="#" class="footer__sns-icon">
            <img src="/assets/images/common/instagram.png" alt="Instagramのアイコン">
          </a>
        </div>
      </div>
      <nav class="footer__nav nav">
        <div class="nav__items">
          <ul class="nav__item">
            <li class="nav__list nav__list--active" ><a href="campaign.html">キャンペーン</a></li>
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
      <p class="footer__copyright">Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</p>
    </div>
  </footer>

  <div class="page-top">
    <a href="#"></a>
  </div>
</body>
</html>
