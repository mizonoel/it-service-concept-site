<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Noto+Sans+JP:wght@100..900&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Noto+Sans+JP:wght@100..900&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <body>
    <header id="header">
      <div class="header">
        <?php if ( is_home() || is_front_page() ) : ?>
          <h1 class="img">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <img src="<?php echo esc_url( get_theme_file_uri( 'img/top/logo.png' ) ); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
          </h1>
          <?php else : ?>
          <div class="img">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <img src="<?php echo esc_url( get_theme_file_uri( 'img/top/logo.png' ) ); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
          </div>
        <?php endif; ?>
        <div class="navi">
          <ul>
            <li><a href="<?php echo esc_url(home_url('/about')); ?>">ABOUT</a></li>
            <li><a href="<?php echo esc_url(home_url('/service')); ?>">SERVICE</a></li>
            <li><a href="<?php echo esc_url(home_url('/company')); ?>">COMPANY</a></li>
            <li><a href="<?php echo esc_url(home_url('/news')); ?>">NEWS</a></li>
            <li><a href="<?php echo esc_url(home_url('/recruit')); ?>">RECRUIT</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">CONTACT</a></li>
          </ul>
        </div>
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      
      <?php if ( ! is_front_page() && ! is_home() ) : ?>
    </header>
      <?php endif; ?>