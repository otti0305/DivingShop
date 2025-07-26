<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <h1 class="sub-mv__title">Contact</h1>
    <div class="sub-mv__img">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/contact-pc.jpg">
        <img img src="<?php echo get_theme_file_uri(); ?>/images/common/contact-sp.jpg" alt="海中を泳ぐ魚の群れ">
      </picture>
    </div>
  </div>

  <!-- パンくず -->
  <nav class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
      <ul class="breadcrumb__lists">
        <li class="breadcrumb__list"><a href="index.html">TOP</a></li>
        <li class="breadcrumb__list"><img img src="<?php echo get_theme_file_uri(); ?>/images/common/breadcrumb-arrow.png" alt=""></li>
        <li class="breadcrumb__list">お問い合わせ</li>
      </ul>
    </div>
  </nav>

  <div class="page-contact page-contact-layout sub-illustration">
    <div class="page-contact__inner inner">
      <div class="page-contact__content">
        <form name="myForm" action="thanks.html" method="get" id="myForm" class="form">
          <div class="form__alert">
            <p class="form__alert-text">※必須項目が入力されていません。<br class="u-mobile">
              <span>入力してください。</span></p>
          </div>
          <div class="form__items">
            <dl class="form__item">
              <dt>お名前<span>必須</span></dt>
              <dd>
                <input type="text" name="company" value="" class="" placeholder="沖縄 太郎" required/>
              </dd>
            </dl>
            <dl class="form__item">
              <dt>メールアドレス<span>必須</span></dt>
              <dd>
                <input type="email" name="mail_address" value="" placeholder="aaa000@ggmail.com" required/>
              </dd>
            </dl>
            <dl class="form__item">
              <dt>電話番号<span>必須</span></dt>
              <dd>
                <input type="tel" name="number" value="" placeholder="000-0000-0000" required/>
              </dd>
            </dl>
            <dl class="form__item">
              <dt >お問合せ項目<span>必須</span></dt>
              <dd class="form__item-checkbox">
                <label><input type="checkbox" name="check" value="チェックボックス1" checked required/><span>ダイビング講習について</span></label>
                <label><input type="checkbox" name="check" value="チェックボックス2" /><span>ファンデイビングについて</span></label>
                <label><input type="checkbox" name="check" value="チェックボックス3" /><span>体験ダイビングについて</span></label>
              </dd>
            </dl>
            <dl class="form__item">
              <dt>キャンペーン</dt>
              <dd class="form__item-select">
                <select name="select">
                  <option value="">キャンペーン内容を選択</option>
                  <option value="セレクト1">セレクト1</option>
                  <option value="セレクト2">セレクト2</option>
                </select>
              </dd>
            </dl>
            <dl class="form__item">
              <dt>お問合せ内容<span>必須</span></dt>
              <dd>
                <textarea name="contents" required></textarea>
              </dd>
            </dl>
          </div>
          <div class="form__checkbox">
            <label><input type="checkbox" name="check" value="チェックボックス1" required/><span>個人情報の取り扱いについて同意のうえ送信します。</span></label>
          </div>
          <div class="form__button">
            <button type="submit"  class="form-button js-submit"><span>Send</span></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>