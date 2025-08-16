<?php get_header(); ?>
  <main>
    <!-- メインビュー -->
    <div class="sub-mv">
      <h1 class="sub-mv__title">Voice</h1>
      <div class="sub-mv__img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/sub-voice-pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/images/common/sub-voice-sp.jpg" alt="海中を泳ぐ魚の群れ">
        </picture>
      </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('template-parts/breadcrumb') ?>

    <div class="sub-voice sub-voice-layout sub-illustration">
      <div class="sub-voice__inner inner">
        <div class="sub-voice__tab">
          <ul class="tab">
            <li class="tab__list is-active"><a href="<?php echo get_post_type_archive_link('voice') ?>">all</a></li>
            <?php $genre_terms = get_terms('voice-genre' , array('hide_empty' =>false)); ?>
            <?php foreach($genre_terms as $genre_term) : ?>
            <li class="tab__list"><a href="<?php echo get_term_link($genre_term, 'voice-genre'); ?>"><?php echo $genre_term->name; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="sub-voice__cards voice-cards">
        <?php if(have_posts()) :
          while(have_posts()) :
            the_post(); ?>
            <div class="voice__cards__item">
              <div class="voice-card">
                <div class="voice-card__head">
                  <div class="voice-card__info">
                    <div class="voice-card__meta">
                      <?php if ( get_field('age') || get_field('gender') ) : ?>
                      <div class="voice-card__gender">
                          <?php echo esc_html(get_field('age')); ?>
                          <?php if ( get_field('gender') ) : ?>
                              （<?php echo esc_html(get_field('gender')); ?>）
                          <?php endif; ?>
                      </div>
                      <?php endif; ?>
                      <?php
                      $terms = get_the_terms(get_the_ID(), 'voice-genre');
                      if( !empty($terms) && !is_wp_error($terms)) : ?>
                      <div class="voice-card__category"><?php echo esc_html($terms[0]->name); ?></div>
                      <?php endif; ?>
                    </div>
                    <h3 class="voice-card__title"><?php the_title(); ?></h3>
                  </div>
                  <div class="voice-card__img box">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimg.png" alt="">
                    <?php endif; ?>
                  </div>
                </div>
                <div class="voice-card__body">
                  <div class="voice-card__text"><?php the_content(); ?></div>
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
        <div class="sub-voice__pagination">
         <div class="pagination">
           <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
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