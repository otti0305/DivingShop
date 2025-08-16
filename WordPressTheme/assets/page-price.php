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
  <?php get_template_part('template-parts/breadcrumb') ?>

  <div class="sub-price sub-illustration">
    <div class="sub-price__inner inner">
    <div class="sub-price__tables price-tables">
      <?php
        // 1回だけ取得
        $categories = SCF::get('price_category');

        // 価格フォーマッタは最初に定義
        if ( !function_exists('format_price') ) {
          function format_price($price) {
            $price = preg_replace('/[^\d]/u', '', (string)$price);
            if ($price === '') return '';
            return '¥' . number_format((int)$price);
          }
        }

        if ( !empty($categories) && is_array($categories) ) :
          foreach ( $categories as $category ) :

            // 名称とスラッグ
            $name = isset($category['category_name']) ? trim($category['category_name']) : '';
            if ( $name === '' ) continue;
            $slug = !empty($category['category_slug']) ? $category['category_slug'] : sanitize_title($name);
       ?>
        <section id="price-<?php echo esc_attr($slug); ?>" class="price-tables__content">
          <div class="display-pc">
            <p><?php echo esc_html($name); ?></p>
            <?php if ( !empty($category['category_icon']) ) : ?>
              <div class="display-pc__img">
                <img src="<?php echo esc_url( wp_get_attachment_url($category['category_icon']) ); ?>"
                    alt="<?php echo esc_attr($name); ?>">
              </div>
            <?php endif; ?>
          </div>

          <table class="price-table">
            <thead class="thead">
              <tr><th colspan="2"><span><?php echo esc_html($name); ?></span></th></tr>
            </thead>
            <tbody class="tbody">
              <?php
                // 文字列1行から「コース名」「価格数値」を取り出す
                if ( !function_exists('my_parse_course_row') ) {
                  function my_parse_course_row(string $row): array {
                    $row = trim($row);
                    if ($row === '') return ['', ''];

                    // 全角 → 半角の簡易正規化
                    $map = ['０'=>'0','１'=>'1','２'=>'2','３'=>'3','４'=>'4','５'=>'5','６'=>'6','７'=>'7','８'=>'8','９'=>'9','，'=>',','　'=>' '];
                    $row = strtr($row, $map);

                    // 「区切り(空白/カンマ/全角カンマ/コロン/縦棒) + 数字」で終わるパターンを優先
                    if (preg_match('/^(.*?)[\s,、|：:]+(\d[\d,]*)\s*$/u', $row, $m)) {
                      return [trim($m[1]), $m[2]];
                    }
                    // 後方にある連続数字(カンマ含む)を価格として拾うフォールバック
                    if (preg_match('/(\d[\d,]*)\s*$/u', $row, $m)) {
                      $name = trim(substr($row, 0, -strlen($m[1])));
                      return [$name, $m[1]];
                    }
                    return [$row, ''];
                  }
                }

                // 価格整形
                if ( !function_exists('format_price') ) {
                  function format_price($price) {
                    // 数字だけに
                    $num = preg_replace('/[^\d]/u', '', (string)$price);
                    if ($num === '') return '';
                    return '¥' . number_format((int)$num);
                  }
                }

                $list_raw = isset($category['course_list']) ? (string)$category['course_list'] : '';
                $rows = preg_split("/\r\n|\n|\r/", $list_raw);

                foreach ($rows as $row):
                  if (trim($row) === '') continue;
                  list($course_name, $price_raw) = my_parse_course_row($row);
              ?>
                <tr>
                  <td><?php echo esc_html($course_name); ?></td>
                  <td class="price-cell"><?php echo esc_html( format_price($price_raw) ); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>

          </table>
        </section>
        <?php
            endforeach;
          endif;
        ?>
      </div>

    </div>
  </div>
  <!-- </div> -->

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