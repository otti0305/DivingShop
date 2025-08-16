<aside class="sub-blog__aside aside">
  <article class="aside__article">
    <div class="aside__title">
      <h2 class="aside-title">人気記事</h2>
    </div>
    <?php
    if ( function_exists('wpp_get_mostpopular') ) {
        wpp_get_mostpopular(array(
          'limit' => 3,
          'range' => 'last24hours',
          'thumbnail_width' => 121,
          'thumbnail_height' => 90,
          'stats_views' => 0,
          'wpp_start' => '<div class="aside__cards aside-cards">',
          'wpp_end' => '</div>',
          'post_html' =>
            '<div class="aside-cards__item">
               <a href="{url}" class="aside-card">
                  <div class="aside-card__content">
                      <div class="aside-card__img">{thumb_img}</div>
                      <div class="aside-card__body">
                          <div class="aside-card__date">{date}</div>
                          <h3 class="aside-card__title">{text_title}</h3>
                      </div>
                  </div>
               </a>
            </div>'
        ));
    }
    ?>
    <!-- <div class="aside__cards aside-cards">
      <div class="aside-cards__item">
        <a href="#" class="aside-card">
          <div class="aside-card__content">
            <div class="aside-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/images/common/article-img1.jpg" alt="ライセンス取得">
            </div>
            <div class="aside-card__body">
              <div class="aside-card__date">
                <time datetime="2024-10-27T19:00">2023/11/17</time>
              </div>
              <h3 class="aside-card__title">ライセンス取得</h3>
            </div>
          </div>
        </a>
      </div>
      <div class="aside-cards__item">
        <a href="#" class="aside-card">
          <div class="aside-card__content">
            <div class="aside-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/images/common/article-img2.jpg" alt="ライセンス取得">
            </div>
            <div class="aside-card__body">
              <div class="aside-card__date">
                <time datetime="2024-10-27T19:00">2023/11/17</time>
              </div>
              <h3 class="aside-card__title">ウミガメと泳ぐ</h3>
            </div>
          </div>
        </a>
      </div>
      <div class="aside-cards__item">
        <a href="#" class="aside-card">
          <div class="aside-card__content">
            <div class="aside-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/images/common/article-img3.jpg" alt="ライセンス取得">
            </div>
            <div class="aside-card__body">
              <div class="aside-card__date">
                <time datetime="2024-10-27T19:00">2023/11/17</time>
              </div>
              <h3 class="aside-card__title">カクレクマノミ</h3>
            </div>
          </div>
        </a>
      </div>
    </div> -->
  </article>
  <article class="aside__article">
    <div class="aside__title">
      <h2 class="aside-title">口コミ</h2>
    </div>

    <?php
      $args = array(
        'post_type' => 'review',
        'posts_per_page' =>  1,
      );
      $reviews = new WP_Query($args);
      if($reviews->have_posts()) :
        while($reviews->have_posts()) :
          $reviews->the_post();
    ?>

    <div class="aside__review">
      <div class="aside-review">
        <div class="aside-review__img">
          <?php
            $photo = get_field('phot');
            if( $photo ): ?>
              <img src="<?php echo esc_url($photo['url']); ?>"
                  alt="<?php echo esc_attr($photo['alt'] ? $photo['alt'] : get_the_title()); ?>">
          <?php endif; ?>
        </div>
        <div class="aside-review__body">
          <div class="aside-review__age"><?php the_field('age'); ?></div>
          <div class="aside-review__title"><?php the_field('comment'); ?></div>
        </div>
      </div>
      <div class="aside__review-link">
        <a href="<?php the_permalink(); ?>" class="view-link">
          <div class="view-link__content">
            <div class="view-link__title">View more</div>
            <div class="view-link__icon"></div>
          </div>
        </a>
      </div>
    </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </article>
  <article class="aside__article">
    <div class="aside__title">
      <h2 class="aside-title">キャンペーン</h2>
    </div>
    <div class="aside__campaign-cards aside-campaign-cards">
    <?php
      $args = array(
        'post_type' => 'campaign',
        'posts_per_page' => 2,
      );
      $sidebar_campaigns = new WP_Query($args);
    ?>

    <?php if($sidebar_campaigns->have_posts()): ?>
      <div class="aside-campaign">
        <?php while($sidebar_campaigns->have_posts()): $sidebar_campaigns->the_post(); ?>
        <div class="aside-campaign-cards__item">
        <div class="aside-campaign-card">
          <div class="aside-campaign-card__img">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
            <?php else : ?>
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimg.png" alt="">
            <?php endif; ?>
          </div>
          <div class="aside-campaign-card__body">
            <div class="aside-campaign-card__head">
              <h3 class="aside-campaign-card__title"><?php the_title(); ?></h3>
            </div>
            <div class="aside-campaign-card__price">
              <p class="aside-campaign-card__catch">全部コミコミ(お一人様)</p>
              <div class="aside-campaign-card__content">
              <?php if( get_field('price_old') ): ?>
                <div class="aside-campaign-card__old-price">
                  <s>¥<?php echo esc_html( number_format( get_field('price_old') ) ); ?></s>
                </div>
                <?php endif; ?>
              <?php if( get_field('price_new') ): ?>
                <div class="aside-campaign-card__new-price">
                  ¥<?php echo esc_html( number_format( get_field('price_new') ) ); ?>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php endwhile; ?>
      </div>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    </div>
    <div class="aside__campaign-link">
      <a href="<?= esc_url(get_post_type_archive_link('campaign')); ?>" class="view-link">
        <div class="view-link__content">
          <div class="view-link__title">View more</div>
          <div class="view-link__icon"></div>
        </div>
      </a>
    </div>
  </article>
  <article class="aside__article">
    <div class="aside__title">
      <h2 class="aside-title">アーカイブ</h2>
    </div>
    <div class="aside__archive archive">
      <div class="archive__year is-open">2023</div>
      <ul class="archive__months">
        <li class="archive__month"><a href="#">3月</a></li>
        <li class="archive__month"><a href="#">2月</a></li>
        <li class="archive__month"><a href="#">1月</a></li>
      </ul>
      <div class="archive__year">2022</div>
    </div>
  </article>
</aside>