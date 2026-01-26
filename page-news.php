<?php get_header(); ?>

<?php
// 各リスト専用 paged 取得
$p_all   = isset($_GET['p_all'])   ? intval($_GET['p_all'])   : 1;
$p_press = isset($_GET['p_press']) ? intval($_GET['p_press']) : 1;
$p_news  = isset($_GET['p_news'])  ? intval($_GET['p_news'])  : 1;
$p_event = isset($_GET['p_event']) ? intval($_GET['p_event']) : 1;
?>

<main>
    <section class="news">
        <div class="title">
            <h2 class="section-title head-trigger">NEWS</h2>
        </div>

        <div class="inner">
            <h3 class="section-text">ClarisyncのNEWS一覧</h3>
            <p class="text">Clarisyncの新着情報です</p>
        </div>
    </section>

    <section class="news-list">
      <div class="wrapper">
        <h3 class="section-text">NEWS記事一覧</h3>
        <ul class="tag-list">
          <li class="tag-all">ALL</li>
          <li class="tag-press">PRESS</li>
          <li class="tag-news">NEWS</li>
          <li class="tag-event">EVENT</li>
        </ul>

        <!-- ALL -->
        <?php
        $args = array(
            'post_type'      => 'news',
            'posts_per_page' => 6,
            'orderby'        => 'date',
            'order'          => 'ASC',
            'paged'          => $p_all
        );
        $news_query = new WP_Query($args);
        ?>

        <?php if ($news_query->have_posts()): ?>
        <div class="all-wrapper">
          <ul class="list all">
            <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
            <li class="fadein">
              <a href="<?php the_permalink(); ?>">
                <div class="inner">
                  <img src="<?php echo esc_url(get_field('img')); ?>" alt="">
                  <div class="info">
                    <p class="tag"><?php echo esc_html(get_field('tag')); ?></p>
                    <p class="title"><?php echo esc_html(get_field('title')); ?></p>
                    <time><?php echo esc_html(get_field('time')); ?></time>
                  </div>
                </div>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>

          <!-- ページネーション ALL -->
          <?php if ($news_query->max_num_pages > 1): ?>
          <ul class="pagenation">
          <?php
            $pagination = paginate_links(array(
                'format'    => '?p_all=%#%',
                'current'   => $p_all,
                'total'     => $news_query->max_num_pages,
                'prev_text' => '<<',
                'next_text' => '>>',
                'type'      => 'array'
            ));
            if ($pagination) {
                foreach ($pagination as $page) {
                    if (strpos($page, 'current') !== false) {
                        echo '<li class="blue">' . strip_tags($page, '<span>') . '</li>';
                    } else {
                        echo '<li>' . $page . '</li>';
                    }
                }
            }
          ?>
          </ul>
          <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <!-- PRESS -->
        <?php
        $args = array(
            'post_type'      => 'news',
            'posts_per_page' => 6,
            'orderby'        => 'date',
            'order'          => 'ASC',
            'paged'          => $p_press,
            'tax_query'      => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'press',
                ),
            ),
        );
        $news_query = new WP_Query($args);
        ?>

        <?php if ($news_query->have_posts()): ?>
        <div class="press-wrapper">
          <ul class="list press">
            <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
            <li class="fadein">
              <a href="<?php the_permalink(); ?>">
                <div class="inner">
                  <img src="<?php echo esc_url(get_field('img')); ?>" alt="">
                  <div class="info">
                    <p class="tag"><?php echo esc_html(get_field('tag')); ?></p>
                    <p class="title"><?php echo esc_html(get_field('title')); ?></p>
                    <time><?php echo esc_html(get_field('time')); ?></time>
                  </div>
                </div>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>

          <!-- ページネーション PRESS -->
          <?php if ($news_query->max_num_pages > 1): ?>
          <ul class="pagenation">
          <?php
            $pagination = paginate_links(array(
                'format'    => '?p_press=%#%',
                'current'   => $p_press,
                'total'     => $news_query->max_num_pages,
                'prev_text' => '<<',
                'next_text' => '>>',
                'type'      => 'array'
            ));
            if ($pagination) {
                foreach ($pagination as $page) {
                    if (strpos($page, 'current') !== false) {
                        echo '<li class="blue">' . strip_tags($page, '<span>') . '</li>';
                    } else {
                        echo '<li>' . $page . '</li>';
                    }
                }
            }
          ?>
          </ul>
          <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <!-- NEWS -->
        <?php
        $args = array(
            'post_type'      => 'news',
            'posts_per_page' => 6,
            'orderby'        => 'date',
            'order'          => 'ASC',
            'paged'          => $p_news,
            'tax_query'      => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'news',
                ),
            ),
        );
        $news_query = new WP_Query($args);
        ?>

        <?php if ($news_query->have_posts()): ?>
        <div class="news-wrapper">
          <ul class="list news-news">
            <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
            <li class="fadein">
              <a href="<?php the_permalink(); ?>">
                <div class="inner">
                  <img src="<?php echo esc_url(get_field('img')); ?>" alt="">
                  <div class="info">
                    <p class="tag"><?php echo esc_html(get_field('tag')); ?></p>
                    <p class="title"><?php echo esc_html(get_field('title')); ?></p>
                    <time><?php echo esc_html(get_field('time')); ?></time>
                  </div>
                </div>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>

          <!-- ページネーション NEWS -->
          <?php if ($news_query->max_num_pages > 1): ?>
          <ul class="pagenation">
          <?php
            $pagination = paginate_links(array(
                'format'    => '?p_news=%#%',
                'current'   => $p_news,
                'total'     => $news_query->max_num_pages,
                'prev_text' => '<<',
                'next_text' => '>>',
                'type'      => 'array'
            ));
            if ($pagination) {
                foreach ($pagination as $page) {
                    if (strpos($page, 'current') !== false) {
                        echo '<li class="blue">' . strip_tags($page, '<span>') . '</li>';
                    } else {
                        echo '<li>' . $page . '</li>';
                    }
                }
            }
          ?>
          </ul>
          <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <!-- EVENT -->
        <?php
        $args = array(
            'post_type'      => 'news',
            'posts_per_page' => 6,
            'orderby'        => 'date',
            'order'          => 'ASC',
            'paged'          => $p_event,
            'tax_query'      => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'event',
                ),
            ),
        );
        $news_query = new WP_Query($args);
        ?>

        <?php if ($news_query->have_posts()): ?>
        <div class="event-wrapper">
          <ul class="list event">
            <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
            <li class="fadein">
              <a href="<?php the_permalink(); ?>">
                <div class="inner">
                  <img src="<?php echo esc_url(get_field('img')); ?>" alt="">
                  <div class="info">
                    <p class="tag"><?php echo esc_html(get_field('tag')); ?></p>
                    <p class="title"><?php echo esc_html(get_field('title')); ?></p>
                    <time><?php echo esc_html(get_field('time')); ?></time>
                  </div>
                </div>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>

          <!-- ページネーション EVENT -->
          <?php if ($news_query->max_num_pages > 1): ?>
          <ul class="pagenation">
          <?php
            $pagination = paginate_links(array(
                'format'    => '?p_event=%#%',
                'current'   => $p_event,
                'total'     => $news_query->max_num_pages,
                'prev_text' => '<<',
                'next_text' => '>>',
                'type'      => 'array'
            ));
            if ($pagination) {
                foreach ($pagination as $page) {
                    if (strpos($page, 'current') !== false) {
                        echo '<li class="blue">' . strip_tags($page, '<span>') . '</li>';
                    } else {
                        echo '<li>' . $page . '</li>';
                    }
                }
            }
          ?>
          </ul>
          <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

      </div>
    </section>

    <section id="contact">
      <div class="wrapper">
        <h2 class="section-title">CONTACT</h2>
        <p class="text fadein">
            エンジニアに関する事ならClarisyncへご相談ください。<br>
            多数実績とノウハウで多彩なニーズにお応えします。<br>
            どんなことでもお気軽にお問合せ下さい。
        </p>
        <div class="contact-btn">
          <a class="btn" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
        </div>
      </div>
    </section>

</main>

<?php get_footer(); ?>
