<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <h1 class="sub-mv__title">Campaign</h1>
    <div class="sub-mv__img">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/sub-campaign-pc.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/sub-campaign-sp.jpg" alt="海中を泳ぐ魚の群れ">
      </picture>
    </div>
  </div>

  <?php get_template_part('template-parts/breadcrumb') ?>

  <div class="sub-campaign sub-campaign-layout sub-illustration">
    <div class="sub-campaign__inner inner">
      <div class="sub-campaign__tab">

      <ul class="tab">
        <!-- 「ALL」タブ -->
        <li class="tab__list <?php if(is_post_type_archive('campaign')) echo 'is-active'; ?>">
          <a href="<?php echo get_post_type_archive_link('campaign'); ?>">ALL</a>
        </li>

        <!-- 各ジャンルタブ -->
        <?php
        $current_term = get_queried_object(); // 現在表示しているジャンル情報
        $genre_terms = get_terms('genre', array('hide_empty' => false));

        foreach($genre_terms as $genre_term) :
          $active_class = '';
          if ( isset($current_term->term_id) && $current_term->term_id == $genre_term->term_id ) {
            $active_class = 'is-active';
          }
        ?>
          <li class="tab__list <?php echo $active_class; ?>">
            <a href="<?php echo get_term_link($genre_term, 'genre'); ?>">
              <?php echo $genre_term->name; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>


      </div>
      <div class="sub-campaign__cards sub-campaign-cards">
      <?php if(have_posts()) :
        while(have_posts()) :
          the_post(); ?>
           <div class="sub-campaign-cards__item">
            <div class="sub-campaign-card">
              <div class="sub-campaign-card__img">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
                <?php else : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimg.png" alt="">
                <?php endif; ?>
              </div>
              <div class="sub-campaign-card__body">
                <div class="sub-campaign-card__head">
                <?php
                $terms = get_the_terms(get_the_ID(), 'genre');
                if (!empty($terms) && !is_wp_error($terms)) : ?>
                  <div class="sub-campaign-card__category">
                    <?php echo esc_html($terms[0]->name); ?>
                  </div>
                <?php endif; ?>
                  <h3 class="sub-campaign-card__title"><?php the_title(); ?></h3>
                </div>
                <div class="sub-campaign-card__price">
                  <p class="sub-campaign-card__catch">全部コミコミ（お一人様）</p>
                  <div class="sub-campaign-card__content">
                    <?php if( get_field('price_old') ): ?>
                      <div class="sub-campaign-card__old-price">
                        <s>¥<?php echo esc_html( number_format( get_field('price_old') ) ); ?></s>
                      </div>
                    <?php endif; ?>

                    <?php if( get_field('price_new') ): ?>
                      <div class="sub-campaign-card__new-price">
                        ¥<?php echo esc_html( number_format( get_field('price_new') ) ); ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="sub-campaign-card__text-body">
                  <p class="sub-campaign-card__text"><?php the_field('overview'); ?></p>
                  <div class="sub-campaign-card__date"><time datetime="<?php the_modified_time('c'); ?>"><?php the_modified_time('Y/n/j'); ?></time></div>
                  <div class="sub-campaign-card__contact">ご予約・お問い合わせはコチラ</div>
                  <div class="sub-campaign-card__link">
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
           </div>
      <?php endwhile; endif; ?>

      </div>
      <div class="sub-campaign__pagination">
        <?php if (function_exists('wp_pagenavi')) : ?>
          <div class="pagination">
            <?php wp_pagenavi(); ?>
          </div>
        <?php endif; ?>
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