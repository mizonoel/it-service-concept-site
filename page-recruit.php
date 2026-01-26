<?php get_header(); ?>

    <main>
        <section class="recruit">
            <div class="title">
                <h2 class="section-title head-trigger">RECRUIT</h2>
            </div>

            <div class="inner">
                <h3 class="section-text">採用情報</h3>
                <p class="text">Clarisyncは、クラウドの力でチームと仕事を前へ進める仲間を募集しています。</p>
            </div>
        </section>

        <div class="wrapper">
            <section class="mission">
                <div class="wrapper">
                    <h3 class="section-text">Our Mission</h3>
                    <p class="text fadein">シンプルで使いやすいツールで、チームの生産性を最大化する<br>クラウド技術で、働く環境にしなやかさと柔軟性を与える<br>働く人に“余白”を生み出す、体験価値をつくる</p>
                </div>
            </section>

            <?php
            $p_all = isset($_GET['p_all']) ? intval($_GET['p_all']) : 1;
            
            $args = array(
                'post_type'      => 'recruit',
                'posts_per_page' => 4,
                'orderby'        => 'date',
                'order'          => 'ASC',
                'paged'          => $p_all
            );
            $recruit_query = new WP_Query($args);
            ?>

            <section class="positions">
                <h3 class="section-text">Open Positions</h3>
                <div class="inner">
                  <?php if ($recruit_query->have_posts()): ?>
                    <?php while ($recruit_query->have_posts()): $recruit_query->the_post(); ?>
                    <div class="item fadein">
                        <p class="title"><?php 
                          $occupation = get_field('occupation');
                          echo $occupation ? wp_kses_post($occupation) : '';
                        ?></p>
                        <p class="text"><?php 
                          $content = get_field('content');
                          echo $content ? wp_kses_post($content) : '';
                        ?></p>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
                </div>
            </section>

            <section class="style">
                <h3 class="section-text">Work Style</h3>
                <p class="text fadein">フルリモート / フレックスタイム制度<br>Slack・Notionを活用したチームコラボレーション<br>オンラインMTG中心のオープンなチーム文化<br>どこからでも働ける柔軟な環境</p>
            </section>

            <section class="entry">
                <h3 class="section-text">Entry</h3>
                <p class="text fadein">下記フォームまたはメールアドレスよりご応募ください。<br>書類選考後、オンライン面談をご案内いたします。</p>
                <div class="entry-btn">
                    <a class="btn" href="<?php echo esc_url(home_url('/contact')); ?>">応募フォーム</a>
                </div>
            </section>
        </div>       

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