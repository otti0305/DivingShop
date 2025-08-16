<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <div class="sub-mv__title">Blog</div>
    <div class="sub-mv__img">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/sub-blog-pc.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/sub-blog-sp.jpg" alt="海中を泳ぐ魚の群れ">
      </picture>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="sub-blog sub-blog-layout sub-illustration">
    <div class="sub-blog__inner inner">
      <div class="sub-blog__contents sub-blog__contents--gap">
        <div class="sub-blog__detail">
          <div class="sub-blog__date">
            <time datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
          </div>
          <h1 class="sub-blog__title"><?php the_title(); ?></h1>
          <div class="sub-blog__img">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
            <?php endif; ?>
          </div>
          <div class="sub-blog__detail-content">
            <?php the_content(); ?>
          </div>
          <div class="sub-blog__detail-pagination">
            <ul class="pagination pagination--gap">
              <li class="pagination__item"><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">
                  <path d="M9 1L1 9L9 17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
              </li>
              <li class="pagination__item"><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">
                  <path d="M1 1L9 9L1 17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
              </li>
            </ul>
            </div>
        </div>
       <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

  <section class="contact sub-contact contact-illustration">
    <div class="contact__inner inner">
      <div class="contact__body">
        <div class="contact__info">
          <div class="contact__logo">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/contact-logo.png" alt="contactのロゴ">
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