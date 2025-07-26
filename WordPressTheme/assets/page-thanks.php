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
        <li class="breadcrumb__list"><a href="contact.html">お問い合わせ</a></li>
        <li class="breadcrumb__list"><img img src="<?php echo get_theme_file_uri(); ?>/images/common/breadcrumb-arrow.png" alt=""></li>
        <li class="breadcrumb__list">送信完了</li>
      </ul>
    </div>
  </nav>

  <div class="thanks thanks-layout sub-illustration">
    <div class="thanks__inner inner">
      <p class="thanks__title">お問い合わせ内容を送信完了しました。</p>
      <p class="thanks__text">このたびは、お問い合わせ頂き<br class="u-mobile">
        誠にありがとうございます。<br>
        お送り頂きました内容を確認の上、<br class="u-mobile">
        3営業日以内に折り返しご連絡させて頂きます。<br>
        また、ご記入頂いたメールアドレスへ、<br class="u-mobile">
        自動返信の確認メールをお送りしております。</p>
    </div>
  </div>
</main>

<?php get_footer(); ?>