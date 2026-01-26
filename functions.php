<?php
function my_enqueue_assets() {
  // リセットCSS
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), null, 'all');

  // テーマのメインスタイル（トップ含む共通）
  wp_enqueue_style('theme-style', get_stylesheet_uri(), array('ress'), null, 'all');

  // Swiper（必要なページでscript.jsが使用）
  wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css', array(), '12', 'all');
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', array(), '12', true);

  // 各固定ページでのみ読み込む個別CSS（リーク防止）
  if (is_page('about')) {
    wp_enqueue_style('about-css', get_stylesheet_directory_uri() . '/css/about.css', array('theme-style'), null, 'all');
  }
  if (is_page('company')) {
    wp_enqueue_style('company-css', get_stylesheet_directory_uri() . '/css/company.css', array('theme-style'), null, 'all');
  }
  if (is_page('contact')) {
    wp_enqueue_style('contact-css', get_stylesheet_directory_uri() . '/css/contact.css', array('theme-style'), null, 'all');
  }
  if (is_page('news')) {
    wp_enqueue_style('news-css', get_stylesheet_directory_uri() . '/css/news.css', array('theme-style'), null, 'all');
  }
  if (is_page('news-detail') || is_singular('news')) {
    wp_enqueue_style('news-detail-css', get_stylesheet_directory_uri() . '/css/news-detail.css', array('theme-style'), null, 'all');
  }
  if (is_page('recruit')) {
    wp_enqueue_style('recruit-css', get_stylesheet_directory_uri() . '/css/recruit.css', array('theme-style'), null, 'all');
  }
  if (is_page('service')) {
    wp_enqueue_style('service-css', get_stylesheet_directory_uri() . '/css/service.css', array('theme-style'), null, 'all');
  }

  // JavaScript（共通）
  wp_enqueue_script('theme-script', get_stylesheet_directory_uri() . '/js/script.js', array('swiper'), null, true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_assets');



// カスタム投稿タイプNewsを追加
function create_news_post_type() {
    register_post_type('news', array(
        'labels' => array(
            'name'          => 'News',
            'singular_name' => 'News'
        ),
        'public'       => true,
        'has_archive'  => true,
    'rewrite'      => array(
      'slug'       => 'news-item',
      'with_front' => false
    ),
        'supports'     => array('title','editor','thumbnail'),
        'taxonomies'   => array('category'), // ← これを追加
        'menu_position'=> 5,
        'menu_icon'    => 'dashicons-images-alt2'
    ));
}
add_action('init', 'create_news_post_type');

// カスタム投稿タイプRecruitを追加
function create_recruit_post_type() {
    register_post_type('recruit', array(
        'labels' => array(
            'name'          => 'Recruit',
            'singular_name' => 'Recruit'
        ),
        'public'       => true,
        'has_archive'  => true,
    'rewrite'      => array(
      'slug'       => 'recruit-item',
      'with_front' => false
    ),
        'supports'     => array('title','editor','thumbnail'),
        'taxonomies'   => array('category'), // ← これを追加
        'menu_position'=> 5,
        'menu_icon'    => 'dashicons-images-alt2'
    ));
}
add_action('init', 'create_recruit_post_type');

// Contact Form 7のHTMLをカスタマイズ
add_filter('wpcf7_form_class_attr', 'custom_wpcf7_form_class');
function custom_wpcf7_form_class($class) {
    $class .= ' contact-form';
    return $class;
}


// タイトルタグを自動生成
add_theme_support('title-tag');