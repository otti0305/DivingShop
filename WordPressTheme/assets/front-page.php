<?php get_header(); ?>

  <main>
    <?php
      // フロントページID（front-page.phpなら下でもOK：$front_id = get_the_ID();）
      $front_id = get_option('page_on_front');

      // ACFからIDを配列化（未設定はnull）
      $sp_ids = [
        get_field('sp_1', $front_id),
        get_field('sp_2', $front_id),
        get_field('sp_3', $front_id),
        get_field('sp_4', $front_id),
      ];
      $pc_ids = [
        get_field('pc_1', $front_id),
        get_field('pc_2', $front_id),
        get_field('pc_3', $front_id),
        get_field('pc_4', $front_id),
      ];

      // プレースホルダー（未設定時の保険：任意のパスに変更）
      $ph_sp = get_theme_file_uri('/images/common/mv-sp1.png');
      $ph_pc = get_theme_file_uri('/images/common/mv-pc1.png');
    ?>

    <section class="mv">
      <div class="mv__header">
        <h2 class="mv__title">diving</h2>
        <div class="mv__subtitle">into the ocean</div>
      </div>
      <div class="swiper js-mv-swiper mv__swiper">
        <div class="swiper-wrapper">
          <?php
            // 1〜4枚をインデックスで対応付け（i番目のSPとPCを1スライドに）
            for ($i = 0; $i < 4; $i++) {
              $sp_id = $sp_ids[$i] ?? null;
              $pc_id = $pc_ids[$i] ?? null;

              // 両方未設定ならスキップ
              if (empty($sp_id) && empty($pc_id)) continue;

              // 画像URL化（未設定はプレースホルダー）
              $sp_src = $sp_id ? wp_get_attachment_image_url($sp_id, 'full') : $ph_sp;
              $pc_src = $pc_id ? wp_get_attachment_image_url($pc_id, 'full')  : $ph_pc;

              // altはSP優先→PC→空ならタイトル
              $alt_id = $sp_id ?: $pc_id;
              $alt = $alt_id ? get_post_meta($alt_id, '_wp_attachment_image_alt', true) : '';
              if ($alt === '' && $alt_id) $alt = get_the_title($alt_id);
          ?>
          <div class="swiper-slide mv__slide">
            <picture>
              <!-- 768px以上はPC画像 -->
              <source media="(min-width: 768px)" srcset="<?php echo esc_url($pc_src); ?>">
              <!-- それ以外はSP画像 -->
              <img src="<?php echo esc_url($sp_src); ?>"
                  alt="<?php echo esc_attr($alt); ?>"
                  loading="eager" decoding="async">
            </picture>
          </div>
          <?php } ?>
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
              <?php
              $campaign_query = new WP_Query(
                array(
                  'post_type'           => 'campaign',
                  'post_per_page'       => -1,
                  'orderby'             => 'date',
                  'order'               => 'DESC',
                  'ignore_sticky_posts' => true,
                )
              )
               ?>
              <?php if($campaign_query->have_posts()) :
                while($campaign_query->have_posts()) :
                  $campaign_query->the_post(); ?>
                <div class="swiper-slide campaign-cards__item">
                  <div class="campaign-card">
                    <div class="campaign-card__img">
                      <?php if(has_post_thumbnail()):?>
                      <?php the_post_thumbnail(); ?>
                      <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimg.png" alt="">
                      <?php endif; ?>
                    </div>
                    <div class="campaign-card__body">
                      <div class="campaign-card__head">
                        <div class="campaign-card__category">
                          <?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->name ); ?>
                        </div>
                        <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                      </div>
                      <div class="campaign-card__price">
                        <?php if ( $catch = get_field('catch') ) : ?>
                          <p class="campaign-card__catch"><?php echo esc_html($catch); ?></p>
                        <?php endif; ?>
                        <div class="campaign-card__content">
                          <div class="campaign-card__old-price">
                            <s>¥<?php echo esc_html( number_format( get_field('price_old') ) ); ?></s>
                          </div>
                          <div class="campaign-card__new-price">
                            ¥<?php echo esc_html( number_format( get_field('price_new') ) ); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>
          </div>
          <div class="swiper-button-prev campaign__swiper-button-prev u-desktop"></div>
          <div class="swiper-button-next campaign__swiper-button-next u-desktop"></div>
        </div>
        <div class="campaign__link">
          <a href="<?= esc_url(get_post_type_archive_link('campaign')); ?>" class="view-link">
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
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-img1.png" alt="シーサーの画像">
          </div>
          <div class="about__img-right">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/about-img2.png" alt="魚の画像">
          </div>
          <div class="about__text-area">
            <h3 class="about__title">Dive into<br>
              the Ocean</h3>
            <div class="about__body">
              <?php
                $about = get_page_by_path('about-us');
                if ($about) :
                  echo '<div class="about__text">';
                  echo apply_filters('the_content', $about->post_content);
                  echo '</div>';
                endif;
              ?>
              <div class="about__link">
                <a href="<?= esc_url(get_permalink(get_page_by_path( 'about us' ))); ?>" class="view-link">
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

    <?php
      $front_id = get_option('page_on_front'); // フロントページID

      // ACF 取得（null許容＋フォールバック）
      $title  = get_field('info_top_title', $front_id) ?: 'Information';
      $text   = get_field('info_top_text',  $front_id) ?: '';
      $img_id = get_field('info_top_image', $front_id);
      $link   = get_field('info_top_link',  $front_id); // Link型 or Page Link型

      // 画像URLとalt
      $img_src = $img_id ? wp_get_attachment_image_url($img_id, 'large') : get_theme_file_uri('/images/common/information.png');
      $alt     = $img_id ? (get_post_meta($img_id, '_wp_attachment_image_alt', true) ?: get_the_title($img_id)) : '';

      // リンクURL/ラベル
      $info_page = get_permalink( get_page_by_path('information') );
      if (is_array($link)) {           // Link型
        $url   = $link['url']   ?: $info_page;
        $label = $link['title'] ?: 'View more';
      } else {                         // Page Link型 or 未設定
        $url   = $link ?: $info_page;
        $label = 'View more';
      }
    ?>
    <section class="information top-information">
      <div class="information__inner inner">
        <div class="information__header section-header">
          <div class="section-header__en">Information</div>
          <h2 class="section-header__ja">ダイビング情報</h2>
        </div>
        <div class="information__content">
          <div class="information__img box">
            <img src="<?php echo esc_url($img_src); ?>" alt="<?php echo esc_attr($alt); ?>" loading="eager" decoding="async">
          </div>
          <div class="information__body">
            <h3 class="information__title"><?php echo esc_html($title); ?></h3>
            <p class="information__text"> <?php echo is_string($text) ? wp_kses_post($text) : ''; ?></p>
            <div class="information__link">
              <a href="<?= esc_url(get_permalink(get_page_by_path('information'))); ?>" class="view-link">
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
          <?php $blog = new WP_Query(
            array(
              'post_type'      => 'post',
              'posts_per_page' => 3
            )
          ); ?>
          <?php if ($blog->have_posts()) : ?>
            <?php while($blog->have_posts()) : ?>
              <?php $blog->the_post(); ?>
                <div class="blog-cards__item">
                  <a href="<?php the_permalink(); ?>" class="blog-card">
                    <div class="blog-card__img">
                      <?php if(has_post_thumbnail()):?>
                      <?php the_post_thumbnail(); ?>
                      <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                      <?php endif; ?>
                    </div>
                    <div class="blog-card__body">
                      <div class="blog-card__date">
                        <time datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                      </div>
                      <h3 class="blog-card__title"><?php the_title(); ?></h3>
                    </div>
                    <p class="blog-card__text"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 80, '…' ) ); ?></p>
                  </a>
                </div>
            <?php endwhile; ?>
           <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
        <div class="blog__link">
          <a href="<?= esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="view-link">
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
          <?php
            $voice = new WP_Query([
              'post_type'      => 'voice',
              'posts_per_page' => 2,
              'orderby'        => 'date',
              'order'          => 'DESC',
            ]);

            if ( $voice->have_posts() ):
              while ( $voice->have_posts() ): $voice->the_post();

                // ACF
                $age    = trim( (string) get_field('age') );      // 例: "20代" / "30代"
                $gender = trim( (string) get_field('gender') );   // 例: "男性" / "女性"
                $meta   = trim( $age . ( $gender ? '（'.$gender.'）' : '' ) );

                // タクソノミー（voice-genre → 無ければ genre）
                $terms = get_the_terms( get_the_ID(), 'voice-genre' );
                if ( ! $terms || is_wp_error($terms) ) {
                  $terms = get_the_terms( get_the_ID(), 'genre' );
                }
                $cat = ( $terms && ! is_wp_error($terms) ) ? $terms[0]->name : '';

                // 画像（アイキャッチ or プレースホルダ）
                $img_id  = get_post_thumbnail_id();
                $img_src = $img_id ? wp_get_attachment_image_url($img_id, 'medium_large')
                                  : get_theme_file_uri('/images/common/voice-img1.jpg');
                $alt     = $img_id ? ( get_post_meta($img_id, '_wp_attachment_image_alt', true) ?: get_the_title() )
                                  : get_the_title();

                // 基本情報
                $link    = get_permalink();
                $title   = get_the_title();
                $excerpt = get_the_excerpt(); // 無ければ自動生成
          ?>
          <div class="voice-cards__item">
            <a href="#" class="voice-card">
              <div class="voice-card__head">
                <div class="voice-card__info">
                  <div class="voice-card__meta">
                    <?php if ($meta): ?><div class="voice-card__gender"><?php echo esc_html($meta); ?></div><?php endif; ?>
                    <?php if ($cat):  ?><div class="voice-card__category"><?php echo esc_html($cat);  ?></div><?php endif; ?>
                  </div>
                  <h3 class="voice-card__title"><?php the_title(); ?></h3>
                </div>
                <div class="voice-card__img box">
                  <img src="<?php echo esc_url($img_src); ?>"
                  alt="<?php echo esc_attr($alt); ?>" loading="lazy" decoding="async">
                </div>
              </div>
              <div class="voice-card__body">
                <div class="voice-card__text"><?php echo esc_html($excerpt); ?></div>
              </div>
            </a>
          </div>
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
        <div class="voice__link">
          <a href="<?= esc_url(get_permalink(get_page_by_path('voice'))); ?>" class="view-link">
            <div class="view-link__content">
              <div class="view-link__title">View more</div>
              <div class="view-link__icon"></div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <?php
    $price_page_id = 20; // 固定ページ「Price」の投稿ID
    $categories = SCF::get('price_category', $price_page_id);

    if (!empty($categories)) :
    ?>
    <section class="price top-price price-illustration">
      <div class="price__inner inner">
        <div class="price__header section-header">
          <div class="section-header__en">Price</div>
          <h2 class="section-header__ja">料金一覧</h2>
        </div>
        <div class="price__wrapper">
          <div class="price__img box">
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/price-pc.png">
              <img src="<?php echo get_theme_file_uri(); ?>/images/common/price-sp.png" alt="海亀の画像">
            </picture>
          </div>

          <div class="price__contents price-contents">
          <?php foreach ($categories as $category) : ?>
            <div class="price-contents__item">
              <div class="price-content">
                <h3 class="price-content__title"><?php echo esc_html($category['category_name']); ?></h3>
                <dl class="price-content__lists">
                  <?php
                    if (!function_exists('format_price')) {
                      function format_price($price) {
                        $price = preg_replace('/[^0-9]/', '', $price);
                        return $price === '' ? '' : '¥' . number_format($price);
                      }
                    }
                   ?>
                  <?php
                    // 改行コードを統一してから分割
                    $course_text = str_replace(["\r\n", "\r"], "\n", $category['course_list']);
                    $course_list = explode("\n", $course_text);

                    foreach ($course_list as $course) :
                      if (empty(trim($course))) continue;

                      // 「|」で区切られていれば分割、なければそのまま
                      if (strpos($course, '|') !== false) {
                        list($course_name, $price) = explode('|', $course);
                      } else {
                        $course_name = $course;
                        $price = '';
                      }
                  ?>
                    <div class="price-content__list">
                      <dt><?php echo esc_html(trim($course_name)); ?></dt>
                      <dd><?php echo esc_html(format_price($price)); ?></dd>
                    </div>
                  </dl>
                  <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
        <div class="price__link">
          <a href="<?= esc_url(get_permalink(get_page_by_path('price'))); ?>" class="view-link">
            <div class="view-link__content">
              <div class="view-link__title">View more</div>
              <div class="view-link__icon"></div>
            </div>
          </a>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <section class="contact top-contact contact-illustration">
      <div class="contact__inner inner">
        <div class="contact__body">
          <div class="contact__info">
            <div class="contact__logo">
              <img src="<?php echo get_theme_file_uri(); ?>/images/common/contact-logo.png" alt="contactのロゴ">
            </div>
            <div class="contact__info-body">
            <?php
              // フロントページID
              $front_id = get_option('page_on_front');

              // 値取得（未入力時のフォールバック付き）
              $address = get_field('contact_address', $front_id) ?: '沖縄県那覇市1-1';
              $tel     = get_field('contact_tel',     $front_id) ?: '0120-000-0000';
              $hours   = get_field('contact_hours',   $front_id) ?: '8:30–19:00';
              $closed  = get_field('contact_holiday', $front_id) ?: '毎週火曜日';

              // telリンク用に数字だけにする
              $tel_href = preg_replace('/\D+/', '', $tel);
            ?>
              <ul class="contact__list">
                <li><?php echo esc_html($address); ?></li>
                <li><a href="tel:<?php echo esc_attr($tel_href); ?>"><?php echo esc_html($tel); ?></a></li>
                <li><?php echo esc_html($hours); ?></li>
                <li><?php echo esc_html($closed); ?></li>
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