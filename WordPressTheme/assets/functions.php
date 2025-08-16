<?php
function my_theme_enqueue_assets() {
  // Google Fontsのpreconnect（高速化のための接続準備）
  echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";

  // Google Fontsの読み込み
  wp_enqueue_style('google-font-gotu', 'https://fonts.googleapis.com/css2?family=Gotu&display=swap', array(), null);
  wp_enqueue_style('google-font-noto', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap', array(), null);
  wp_enqueue_style('google-font-lato', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', array(), null);

  // SwiperのCSS（外部CDN）
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);

  // テーマのメインCSS
  wp_enqueue_style('theme-style', get_theme_file_uri('/css/style.css'), array(), filemtime(get_theme_file_path('/css/style.css')));

  // jQuery（CDN） defer対応 → wp_enqueue_scriptではdefer不可のため add_filter 対応も検討
  wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);

  // SwiperのJS（CDN）
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

  // jQuery.inview（ローカルファイル）
  wp_enqueue_script('jquery-inview', get_theme_file_uri('/js/jquery.inview.min.js'), array('jquery'), filemtime(get_theme_file_path('/js/jquery.inview.min.js')), true);

  // メインのJS
  wp_enqueue_script('theme-script', get_theme_file_uri('/js/script.js'), array('jquery'), filemtime(get_theme_file_path('/js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');

// wp_head内でpreconnectを出力する
function add_font_preconnect_links() {
  echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action('wp_head', 'add_font_preconnect_links');

function my_enqueue_styles() {
  // 共通CSSの読み込み
  wp_enqueue_style(
      'main-style',
      get_template_directory_uri() . '/assets/css/style.css',
      array(),
      '1.0.0'
  );

  // 404ページ以外で top-footer.css を読み込む
  if ( !is_404() ) {
      wp_enqueue_style(
          'top-footer',
          get_template_directory_uri() . '/assets/css/top-footer.css',
          array(),
          '1.0.0'
      );
  }
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

function custom_post_type_campaign() {
  register_post_type('campaign', [
    'label' => 'キャンペーン',
    'public' => true,
    'has_archive' => true, // ←アーカイブページ有効！
    'menu_position' => 5,
    'supports' => ['title', 'editor', 'thumbnail'],
    'rewrite' => ['slug' => 'campaign'],
    'show_in_rest' => true,
  ]);
}
add_action('init', 'custom_post_type_campaign');

// function custom_wp_pagenavi_arrow($html) {
//   // SVG：前へ（←）
//   $prev_svg = '<span class="pagenavi__arrow -prev">
//     <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38">
//       <rect x="0.5" y="0.5" width="37" height="37" stroke="#408F95" fill="none"/>
//       <path d="M23 11L15 19L23 27" stroke="#408F95" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
//     </svg>
//   </span>';

//   // SVG：次へ（→）
//   $next_svg = '<span class="pagenavi__arrow -next">
//     <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38">
//       <rect x="0.5" y="0.5" width="37" height="37" stroke="#408F95" fill="none"/>
//       <path d="M15 11L23 19L15 27" stroke="#408F95" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
//     </svg>
//   </span>';

//   // HTML置換：aタグ内に差し込まれるように注意
//   $html = str_replace('«', $prev_svg, $html);
//   $html = str_replace('»', $next_svg, $html);

//   return $html;
// }
// add_filter('wp_pagenavi', 'custom_wp_pagenavi_arrow');

// 投稿メニューを「ブログ」に変更
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'ブログ'; // 左メニューの「投稿」を「ブログ」に変更
    $submenu['edit.php'][5][0] = 'ブログ一覧'; // 投稿一覧 → ブログ一覧
    $submenu['edit.php'][10][0] = '新しいブログ'; // 新規追加 → 新しいブログ
}
add_action( 'admin_menu', 'change_post_menu_label' );

// 投稿の各種ラベルを変更
function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'ブログ';
    $labels->singular_name = 'ブログ';
    $labels->add_new = '新規追加';
    $labels->add_new_item = '新しいブログを追加';
    $labels->edit_item = 'ブログを編集';
    $labels->new_item = '新しいブログ';
    $labels->view_item = 'ブログを表示';
    $labels->search_items = 'ブログを検索';
    $labels->not_found = 'ブログが見つかりません';
    $labels->not_found_in_trash = 'ゴミ箱にブログはありません';
}
add_action( 'init', 'change_post_object_label' );

// アイキャッチ画像を有効化
add_theme_support('post-thumbnails');

// 投稿一覧画面にもアイキャッチを表示（管理画面で便利）
add_filter('manage_posts_columns', 'add_thumbnail_column');
add_action('manage_posts_custom_column', 'add_thumbnail_column_content', 10, 2);

function add_thumbnail_column($columns) {
    $columns['thumbnail'] = 'アイキャッチ';
    return $columns;
}

function add_thumbnail_column_content($column_name, $post_id) {
    if ($column_name == 'thumbnail') {
        $thumb = get_the_post_thumbnail($post_id, array(50,50));
        echo $thumb ? $thumb : 'なし';
    }
}

//サイドバーのアイコン設定

function codeups_customize_register($wp_customize) {
    // セクションを追加
    $wp_customize->add_section('codeups_aside_icon_section', array(
        'title'       => 'アイコン設定',
        'description' => 'aside-title の共通アイコンを設定できます。',
        'priority'    => 30,
    ));

    // 設定を追加
    $wp_customize->add_setting('codeups_aside_icon', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw', // URLを安全にする
    ));

    // コントロール（画像アップローダー）
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'codeups_aside_icon',
        array(
            'label'    => 'aside-title アイコン',
            'section'  => 'codeups_aside_icon_section',
            'settings' => 'codeups_aside_icon',
        )
    ));
}
add_action('customize_register', 'codeups_customize_register');



function my_dynamic_blog_detail_icon() {
    $icon_url = get_template_directory_uri() . '/images/common/blog-detail.png';
    ?>
    <style>
        ul li::before {
            background-image: url('<?php echo esc_url($icon_url); ?>');
        }
    </style>
    <?php
}
add_action('wp_head', 'my_dynamic_blog_detail_icon');

// Breadcrumb NavXT から「Uncategorized」を除外
add_filter( 'bcn_after_fill', function( $trail ) {
  foreach ( $trail->breadcrumbs as $key => $breadcrumb ) {
      if ( strtolower( $breadcrumb->get_title() ) === 'uncategorized' ) {
          unset( $trail->breadcrumbs[$key] );
      }
  }
  return $trail;
});

// 管理画面用のCSSを追加
function add_admin_custom_css() {
  echo '
  <style>
  .smart-cf-upload-image  img {
      background-color: #f0f0f0 !important; /* 薄いグレー背景 */
      border: 1px solid #ccc;   /* 輪郭を追加 */
      padding: 5px;
      border-radius: 4px;
  }
  </style>
  ';
}
add_action('admin_head', 'add_admin_custom_css');

add_filter( 'wpcf7_autop_or_not', '__return_false' );

function my_cf7_thanks_script() {
  wp_enqueue_script(
      'cf7-thanks',
      get_stylesheet_directory_uri() . '/js/cf7-thanks.js',
      array('jquery'),
      null,
      true
  );
}
add_action('wp_enqueue_scripts', 'my_cf7_thanks_script');

/**
 * 自動 meta 生成（タイトル / ディスクリプション / OGPの一部）
 * - ページ個別で未設定のときの “保険” 用
 * - 文字数は日本語向けにざっくり 70 / 120 を目安
 */
add_action('wp_head', function () {
  if (is_admin()) return;

  // 既に他のSEOプラグインが meta を出しているなら何もしない（簡易判定）
  // ※必要なら調整：Yoast, AIOSEO などのアクティブ検出も可
  if (defined('SEO_SIMPLE_PACK_VERSION')) {
      // Simple Pack 併用時：ページ側で未入力なら本関数が出す、の運用にしてください
  }

  $title = my_auto_meta_title();
  $desc  = my_auto_meta_description();
  $ogimg = my_auto_og_image();

  if ($title) {
      echo '<title>' . esc_html($title) . "</title>\n";
      echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
      echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
  }
  if ($desc) {
      echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
      echo '<meta property="og:description" content="' . esc_attr($desc) . '">' . "\n";
      echo '<meta name="twitter:description" content="' . esc_attr($desc) . '">' . "\n";
  }
  if ($ogimg) {
      echo '<meta property="og:image" content="' . esc_url($ogimg) . '">' . "\n";
      echo '<meta name="twitter:image" content="' . esc_url($ogimg) . '">' . "\n";
  }
}, 1);

/**
* タイトル自動生成
*/
function my_auto_meta_title(): string {
  // フロントページ
  if (is_front_page()) {
      $site  = get_bloginfo('name');
      $tag   = get_bloginfo('description'); // キャッチフレーズ
      return trim($site . '｜' . $tag, '｜');
  }
  // 投稿・固定・CPT
  if (is_singular()) {
      return get_the_title() . '｜' . get_bloginfo('name');
  }
  // アーカイブ（カテゴリ・タグ・検索など）
  if (is_category() || is_tag() || is_tax()) {
      return single_term_title('', false) . ' の記事一覧｜' . get_bloginfo('name');
  }
  if (is_search()) {
      return '「' . get_search_query() . '」の検索結果｜' . get_bloginfo('name');
  }
  if (is_404()) {
      return 'ページが見つかりませんでした｜' . get_bloginfo('name');
  }
  return get_bloginfo('name');
}

/**
* ディスクリプション自動生成
* 優先: 抜粋 > 本文先頭
*/
function my_auto_meta_description(int $limit = 120): string {
  $text = '';

  if (is_front_page()) {
      $text = get_bloginfo('description');
  } elseif (is_singular()) {
      global $post;
      if (has_excerpt($post)) {
          $text = get_the_excerpt($post);
      } else {
          $text = $post->post_content ?? '';
      }
  } elseif (is_category() || is_tag() || is_tax()) {
      $term = get_queried_object();
      $text = isset($term->description) ? $term->description : single_term_title('', false) . 'の一覧ページです。';
  } elseif (is_search()) {
      $text = '「' . get_search_query() . '」の検索結果ページです。';
  } elseif (is_404()) {
      $text = 'お探しのページは見つかりませんでした。トップページよりお探しください。';
  }

  // 整形：ショートコード/HTML除去・改行/空白整理・文字数制限
  $text = strip_shortcodes($text);
  $text = wp_strip_all_tags($text);
  $text = preg_replace('/\s+/u', ' ', $text);
  $text = trim($text);

  // 文字数制限（マルチバイト対応）
  if (function_exists('mb_strlen') && function_exists('mb_substr')) {
      if (mb_strlen($text) > $limit) {
          $text = mb_substr($text, 0, $limit) . '…';
      }
  } else {
      if (strlen($text) > $limit) {
          $text = substr($text, 0, $limit) . '…';
      }
  }
  return $text;
}

/**
* OGP画像 自動選定（アイキャッチ > テーマの共通画像）
*/
function my_auto_og_image(): string {
  if (is_singular() && has_post_thumbnail()) {
      $id  = get_post_thumbnail_id();
      $src = wp_get_attachment_image_src($id, 'full');
      if (!empty($src[0])) return $src[0];
  }
  // テーマ内のデフォルト画像（なければ空文字に）
  $fallback = get_theme_file_uri('/images/common/ogp-default.jpg');
  return $fallback ?: '';
}

// Priceページ用：ナビに使うカテゴリ配列を返す
function my_price_nav_items(): array {
  $price_page = get_page_by_path('price');
  if ( ! $price_page ) return [];

  // ACF 繰り返しフィールド名は実データに合わせてください（例: price_category）
  $rows = get_field('price_category', $price_page->ID);
  $items = [];

  if ( is_array($rows) ) {
    foreach ($rows as $row) {
      $name = $row['category_name'] ?? '';
      if ($name === '') continue;
      $slug = $row['category_slug'] ?? ''; // 例: 英数字・ハイフン推奨
      if ($slug === '') $slug = sanitize_title($name); // フォールバック
      $items[] = ['name' => $name, 'slug' => $slug];
    }
  }
  return $items;
}

// カスタム画像サイズの登録
add_action('after_setup_theme', function() {
  add_image_size('mv-sp', 375, 667, true);  // SP用サイズ
  add_image_size('mv-pc', 1920, 1080, true); // PC用サイズ
});












