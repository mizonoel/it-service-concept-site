<?php get_header(); ?>
      
      <div class="mainvisual">
        <ul class="fade-img">
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/mainvisual1.jpg" alt=""></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/mainvisual2.jpg" alt=""></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/mainvisual3.jpg" alt=""></li>
        </ul>
      </div>
      <h2 class="message">チームの課題を<br>ひとつのクラウドで。<br>Clarisyncがあなたの業務を<br>スマートに支えます。</h2>
    </header>

    <main>
      <section id="about" class="head-trigger">
        <div class="wrapper">
          <div class="inner">
            <div class="text-area">
              <h2 class="section-title">ABOUT US</h2>
              <p class="text fadein">
                私たちは、テクノロジーの力で「働く」をもっと軽やかにすることを目指しています。<br>複雑な業務をシンプルにし、チームが本来の創造性に集中できる環境をつくる。<br>それが、Clarisyncが描く新しい働き方のかたちです。
              </p>
              <a class="btn" href="<?php echo esc_url(home_url('/about')); ?>">詳しく見る</a>
            </div>

            <div class="img-area fadein">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/about.jpg" alt="About">
            </div>
          </div>
        </div>
      </section>

      <section id="service">
        <div class="service-inner">
          <h2 class="section-title">SERVICE</h2>
        </div>
        <div class="wrapper">
          <p class="section-subtitle">■ Our Service</p>
          <div class="concept">
            <h3 class="service-title">次世代クラウドプラットフォーム</h3>
            <h3 class="service-name">Clarisync</h3>
          </div>
          <p class="description">Clarisyncは、業務管理 情報共有・コミュニケーションをひとつにまとめたクラウドツールです。<br>分散しがちなチームの仕事をスムーズにつなぎ、生産性と働きやすさを両立させます。</p>

          <div class="headline fadein">
            <p class="num">01</p>
            <p class="title">タスク管理の一元化</p>
          </div>
          <div class="headline fadein">
            <p class="num">02</p>
            <p class="title">ドキュメント共有と共同編集</p>
          </div>
          <div class="headline fadein">
            <p class="num">03</p>
            <p class="title">スケジュールとコミュニケーション</p>
          </div>
          <div class="headline fadein">
            <p class="num">04</p>
            <p class="title">分析とダッシュボード</p>
          </div>
          <div class="service-btn">
            <a class="btn" href="<?php echo esc_url(home_url('/service')); ?>">詳しく見る</a>
          </div>
        </div>
      </section>
      
      <section id="company">
        <div class="wrapper">
          <h2 class="section-title">COMPANY</h2>
          <p class="section-subtitle">■ Our Philosophy</p>
          <h3 class="title fadein">テクノロジーで軽やかに。</h3>
          <p class="text fadein">Clarisyncは、「働くを、もっと軽やかに。」という理念のもと、<br>クラウド技術を通じて中小企業やチームの業務効率化を支援しています。<br>シンプルで直感的なツールを追求し、日々の仕事に“心地よい余白”を生み出します。</p>
          <div class="company-btn">
            <a class="btn" href="<?php echo esc_url(home_url('/company')); ?>">詳しく見る</a>
          </div>
          <div class="img-area">
            <div class="img-1 fadein">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/company1.jpg" alt="">
            </div>
            <div class="img-2 fadein">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/company2.jpg" alt="">
            </div>
          </div>
        </div>
      </section>

      <section id="news">
        <div class="wrapper">
          <h2 class="section-title">NEWS</h2>
          <p class="section-subtitle">■ Latast News</p>

          <?php
          $args = array(
              'post_type'      => 'news',
              'posts_per_page' => 4,
              'orderby'        => 'date',
              'order'          => 'ASC',
          );
          $news_query = new WP_Query($args);
          ?>

          <div class="news-inner">
            <?php if ($news_query->have_posts()): ?>
              <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
              <a class="content fadein" href="<?php the_permalink(); ?>">
                <div class="news">
                  <div class="img">
                    <img src="<?php echo esc_url(get_field('img')); ?>" alt="">
                  </div>
                  <div class="description">
                    <span class="tag"><?php echo esc_html(get_field('tag')); ?></span>
                    <p class="title"><?php echo esc_html(get_field('title')); ?></p>
                    <p class="time"><?php echo esc_html(get_field('time')); ?></p>
                  </div>
                </div>
              </a>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>

          <div class="news-btn">
            <a class="btn" href="<?php echo esc_url(home_url('/news')); ?>">詳しく見る</a>
          </div>
        </div>
      </section>

      <section id="recruit">
        <h2 class="section-title">What  We Need is You!</h2>
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/r1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/r2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/r3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/r4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/r5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/r6.jpg" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="wrapper">
          <p class="section-subtitle">■ Recruit</p> 
          <h3 class="title fadein">Clarisyncは仲間を募集しています 。</h3>
          <p class="text fadein">プロダクトを通じて「働き方」を変えたい方。<br>
            チームでの協働を楽しめる方。<br>
            技術・デザインに探求心を持てる方。<br>
            SaaSやスタートアップに興味のある方。</p>
          <div class="recruit-btn">
            <a class="btn" href="<?php echo esc_url(home_url('/recruit')); ?>">メンバー募集はこちら</a>
          </div>
        </div>
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
    </main>

    <?php get_footer(); ?>