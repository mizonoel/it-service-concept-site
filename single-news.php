<?php get_header(); ?>

    <main>
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <section class="news-detail">
            <div class="title">
                <h2 class="section-title head-trigger">NEWS</h2>
            </div>
            <div class="inner">
              <div class="wrapper">
                <div class="info">
                  <p class="tag"><?php echo esc_html(get_field('tag')); ?></p>
                  <time><?php echo esc_html(get_field('time')); ?></time>
                </div>
                <?php $custom_title = get_field('title'); ?>
                <h3 class="section-text"><?php echo esc_html($custom_title ? $custom_title : get_the_title()); ?></h3>
              </div>
            </div>
        </section>

        <section class="detail">
          <div class="wrapper">
            <div class="img">
              <img src="<?php echo esc_url(get_field('img')); ?>" alt="">
            </div>
            <div class="text-area">
              <div class="inner">
                <p class="title"><?php echo esc_html(get_field('title1')); ?></p>
                <p class="text"><?php echo esc_html(get_field('detail1')); ?></p>
              </div>
              <div class="inner">
                <p class="title"><?php echo esc_html(get_field('title2')); ?></p>
                <p class="text"><?php echo esc_html(get_field('detail2')); ?></p>
              </div>
              <div class="inner">
                <p class="title"><?php echo esc_html(get_field('title3')); ?></p>
                <p class="text"><?php echo esc_html(get_field('detail3')); ?></p>
              </div>
              <div class="inner">
                <p class="title"><?php echo esc_html(get_field('title4')); ?></p>
                <p class="text"><?php echo esc_html(get_field('detail4')); ?></p>
              </div>
              <div class="news-detail-btn">
                <a class="btn" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
              </div>
            </div>
          </div>
          <ul class="link">
            <a href="<?php echo esc_url(home_url('/news')); ?>">NEWS一覧へ ></a>
          </ul>
        </section>

        <section id="contact">
          <div class="wrapper">
            <h2 class="section-title">CONTACT</h2>
            <p class="text fadein">エンジニアに関する事ならClarisyncへご相談ください。<br>多数実績とノウハウで多彩なニーズにお応えします。<br>どんなことでもお気軽にお問合せ下さい。</p>
            <div class="contact-btn">
              <a class="btn" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
            </div>
          </div>
        </section>
      <?php endwhile; endif; ?>
    </main>

<?php get_footer(); ?>