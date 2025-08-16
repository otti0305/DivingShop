<?php get_header(); ?>

 <main>
    <!-- メインビュー -->
    <div class="sub-mv">
      <h1 class="sub-mv__title">About us</h1>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/sub-about-pc.jpg">
          <img img src="<?php echo get_theme_file_uri(); ?>/images/common/sub-about-sp.jpg" alt="海中を泳ぐ魚の群れ">
        </picture>
      </div>
    </div>

    <?php get_template_part('template-parts/breadcrumb') ?>

    <section class="sub-about sub-about-layout sub-illustration">
      <div class="about__inner inner">
        <div class="sub-about__content">
          <div class="sub-about__img-left u-desktop">
            <img img src="<?php echo get_theme_file_uri(); ?>/images/common/about-img1.png" alt="シーサーの画像">
          </div>
          <div class="sub-about__img-right">
            <img img src="<?php echo get_theme_file_uri(); ?>/images/common/about-img2.png" alt="魚の画像">
          </div>
          <div class="sub-about__text-area">
            <h2 class="sub-about__title">Dive into<br>
              the Ocean</h2>
            <div class="sub-about__body">
            <?php
                $about = get_page_by_path('about-us');
                if ($about) :
                  echo '<div class="sub-about__text">';
                  echo apply_filters('the_content', $about->post_content);
                  echo '</div>';
                endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sub-gallery sub-gallery-layout">
      <div class="sub-gallery__inner inner">
        <div class="sub-gallery__header section-header">
          <div class="section-header__en">Gallery</div>
          <h2 class="section-header__ja">フォト</h2>
        </div>
        <?php
          $gallery = SCF::get('gallery');
          if (!empty($gallery)) : ?>
            <div class="sub-gallery__imgs">
              <?php foreach ($gallery as $item) :
                $image = wp_get_attachment_image_src($item['image'], 'large');
                if ($image) : ?>
                  <div class="sub-gallery__img">
                    <img src="<?= esc_url($image[0]); ?>" alt="<?= esc_attr($item['alt'] ?? ''); ?>">
                  </div>
                <?php endif;
              endforeach; ?>
            </div>
         <?php endif; ?>
      </div>
      <div class="sub-gallery__modal modal"></div>
    </section>

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
              <a href="<?= esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="view-link">
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