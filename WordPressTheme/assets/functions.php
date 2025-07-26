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

function add_custom_inline_styles() {
  $image_url = get_theme_file_uri('images/common/page-top.png');
  $custom_css = "
    .page-top a::after {
      background-image: url('{$image_url}');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      content: '';
      height: 1.75rem;
      left: 44%;
      position: absolute;
      top:30%;
      width: 0.4375rem;
    }
  ";
  wp_add_inline_style('theme-style', $custom_css); // 'my' は style.css を enqueue したハンドル名に合わせてください
}
add_action('wp_enqueue_scripts', 'add_custom_inline_styles');

function add_swiper_nav_images() {
  // 画像のパスを取得（WordPressのテーマディレクトリから）
  $prev_image = get_theme_file_uri('images/common/prev.png');
  $next_image = get_theme_file_uri('images/common/next.png');

  // 出力するカスタムCSSを変数に格納
  $custom_css = "
    @media (min-width: 768px) {
      .swiper-button-prev::after {
        background-image: url('{$prev_image}');
      }
      .swiper-button-next::after {
        background-image: url('{$next_image}');
      }
    }
  ";

  // 'theme-style' は style.css を enqueue したときのハンドル名に変更してください
  wp_add_inline_style('theme-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'add_swiper_nav_images');

function add_sub_illustration_css() {
  $img_url = get_theme_file_uri('images/common/fish-img2.png'); // 動的に画像取得

  $custom_css = "
    .sub-illustration::after {
      background-image: url('{$img_url}');
    }
  ";

  wp_add_inline_style('theme-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'add_sub_illustration_css');

function add_about_illustration_style() {
  // 画像のURLをWordPressから動的に取得
  $coral_image_url = get_theme_file_uri('images/common/coral.png');

  // カスタムCSSをPHPで書く（メディアクエリ含む）
  $custom_css = "
    @media (min-width: 768px) {
      .about-illustration::after {
        background-image: url('{$coral_image_url}');
      }
    }
  ";

  wp_add_inline_style('theme-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'add_about_illustration_style');

function add_blog_illustration_style() {
  // 画像URLを動的に取得
  $blog_fish_image = get_theme_file_uri('images/common/blog-fish.png');

  // カスタムCSS（768px以上で表示）
  $custom_css = "
    @media (min-width: 768px) {
      .blog-illustration::before {
        background-image: url('{$blog_fish_image}');
      }
    }
  ";

  wp_add_inline_style('theme-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'add_blog_illustration_style');

function add_blog_bg_style() {
  // 画像のURLを取得（テーマ内のファイル）
  $blog_bg_image = get_theme_file_uri('images/common/blog-bg.png');

  // CSS出力（768px以上のみ）
  $custom_css = "
    @media (min-width: 768px) {
      .blog::after {
        background-image: url('{$blog_bg_image}');
      }
    }
  ";

  wp_add_inline_style('theme-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'add_blog_bg_style');

function add_voice_illustration_style() {
  // 画像URLを取得（テーマ内の画像）
  $fish_img_url = get_theme_file_uri('images/common/fish-img2.png');
  $seahorse_img_url = get_theme_file_uri('images/common/shehorse.png');

  // カスタムCSSをPHPで出力
  $custom_css = "
    @media (min-width: 768px) {
      .voice-illustration::before {
        background-image: url('{$fish_img_url}');
      }

      .voice-illustration::after {
        background-image: url('{$seahorse_img_url}');
      }
    }
  ";

  wp_add_inline_style('theme-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'add_voice_illustration_style');

function add_price_illustration_style() {
  // 画像URLを取得（テーマフォルダから）
  $fish_img1_url = get_theme_file_uri('images/common/fish-img1.png');

  // カスタムCSS出力（768px以上のとき）
  $custom_css = "
    @media (min-width: 768px) {
      .price-illustration::after {
        background-image: url('{$fish_img1_url}');
      }
    }
  ";

  wp_add_inline_style('theme-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'add_price_illustration_style');

function add_contact_illustration_style() {
  // 背景画像のURLを取得
  $fish_img1_url = get_theme_file_uri('images/common/fish-img1.png');

  // カスタムCSSを定義
  $custom_css = "
    .contact-illustration::after {
      background-image: url('{$fish_img1_url}');
    }
  ";

  wp_add_inline_style('theme-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'add_contact_illustration_style');

function add_not_found_illustration_style() {
  // 画像のURLを取得
  $not_found_image_url = get_theme_file_uri('images/common/404-bg.png');

  $custom_css = "
    .not-found::after {
      background-image: url('{$not_found_image_url}');
    }
  ";

  wp_add_inline_style('theme-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'add_not_found_illustration_style');

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
