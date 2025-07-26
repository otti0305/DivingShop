<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <h1 class="sub-mv__title">Price</h1>
    <div class="sub-mv__img">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/sub-price-pc.png">
        <img img src="<?php echo get_theme_file_uri(); ?>/images/common/sub-price-sp.png" alt="海水から潜水服の頭が出た画像">
      </picture>
    </div>
  </div>

  <!-- パンくず -->
  <nav class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
      <ul class="breadcrumb__lists">
        <li class="breadcrumb__list"><a href="index.html">TOP</a></li>
        <li class="breadcrumb__list"><img img src="<?php echo get_theme_file_uri(); ?>/images/common/breadcrumb-arrow.png" alt=""></li>
        <li class="breadcrumb__list">料金一覧</li>
      </ul>
    </div>
  </nav>

  <div class="sub-price sub-illustration">
    <div class="sub-price__inner inner">
      <div class="sub-price__tables price-tables">
        <div class="price-tables__content">
          <table class="price-table">
            <thead class="thead">
              <tr>
                <th colspan="2"><span>ライセンス講習</span></th>
              </tr>
            </thead>
            <tbody class="tbody">
              <tr>
                <th class="display-pc" rowspan="3"><span>ライセンス講習</span></th>
                <td>オープンウォーター<br class="u-mobile">
                  ダイバーコース</td>
                <td>¥50,000</td>
              </tr>
              <tr>
                <td>アドバンスド<br class="u-mobile">
                  オープンウォーターコース</td>
                <td>¥60,000</td>
              </tr>
              <tr>
                <td>レスキュー＋EFRコース</td>
                <td>¥70,000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="price-tables__content">
          <table class="price-table">
            <thead class="thead">
              <tr>
                <th colspan="2"><span>体験ダイビング</span></th>
              </tr>
            </thead>
            <tbody class="tbody">
              <tr>
                <th class="display-pc" rowspan="4"><span>体験ダイビング</span></th>
                <td>ビーチ体験ダイビング<br class="u-mobile">
                  (半日)</td>
                <td>¥7,000</td>
              </tr>
              <tr>
                <td>ビーチ体験ダイビング<br class="u-mobile">
                  (1日)</td>
                <td>¥14,000</td>
              </tr>
              <tr>
                <td>ボート体験ダイビング<br class="u-mobile">
                  (半日)</td>
                <td>¥10,000</td>
              </tr>
              <tr>
                <td>ボート体験ダイビング<br class="u-mobile">
                  (1日)</td>
                <td>¥18,000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="price-tables__content">
          <table class="price-table">
            <thead class="thead">
              <tr>
                <th colspan="2"><span>ファンダイビング</span></th>
              </tr>
            </thead>
            <tbody class="tbody">
              <tr>
                <th class="display-pc" rowspan="4"><span>ファンダイビング</span></th>
                <td>ビーチダイビング<br class="u-mobile">
                  (2ダイブ)</td>
                <td>¥14,000</td>
              </tr>
              <tr>
                <td>ボートダイビング<br class="u-mobile">
                  (2ダイブ)</td>
                <td>¥18,000</td>
              </tr>
              <tr>
                <td>スペシャルダイビング<br class="u-mobile">
                  (2ダイブ)</td>
                <td>¥24,000</td>
              </tr>
              <tr>
                <td>ナイトダイビング<br class="u-mobile">
                  (1ダイブ)</td>
                <td>¥10,000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="price-tables__content">
          <table class="price-table">
            <thead class="thead">
              <tr>
                <th colspan="2"><span>スペシャルダイビング</span></th>
              </tr>
            </thead>
            <tbody class="tbody">
              <tr>
                <th class="display-pc" rowspan="3"><span>スペシャルダイビング</span></th>
                <td>貸切ダイビング<br class="u-mobile">
                  (2ダイブ)</td>
                <td>¥24,000</td>
              </tr>
              <tr>
                <td>1日ダイビング<br class="u-mobile">
                  (3ダイブ)</td>
                <td>¥32,000</td>
              </tr>
              <tr>
                <td>ナイトダイビング<br class="u-mobile">
                  (2ダイブ)</td>
                <td>¥14,000</td>
              </tr>
            </tbody>
          </table>
        </div>
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