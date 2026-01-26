<?php get_header(); ?>

    <main>
        <section class="company">
            <h2 class="section-title head-trigger">COMPANY</h2>
            <div class="mainvisual">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company/mainvisual.jpg" alt="Company">
            </div>
            <div class="wrapper">
                <h3 class="section-text">テクノロジーで軽やかに。</h3>
                <p class="text"> Clarisyncは、業務をシンプルに整え、チームが本来の創造性に集中できる環境をつくります。<br>クラウドの力で、誰もが自由に働ける社会を目指しています。</p>
            </div>
        </section>

        <section class="philosophy">
            <div class="wrapper"></div>
                <h3 class="section-text fadein">Our Philosophy</h3>
                <p class="text fadein"> 私たちは、テクノロジーの力で、あらゆる働く人がより自由で生産的に過ごせる社会を目指しています。<br>複雑なツールや業務を減らし、チームが価値ある仕事に 集中できる環境をつくること。<br>それが、Clarisyncの使命です。</p>
            </div>
        </section>

        <section class="profile">
            <div class="wrapper">
                <h3 class="section-text">Company Profile</h3>
                <div class="inner">
                  <dl class="fadein">
                        <dt>会社名</dt>
                        <dd><?php echo get_field('company_name'); ?></dd>
                    </dl>
                    <dl class="fadein">
                        <dt>設立</dt>
                        <dd>2023年5月</dd>
                    </dl>
                    <dl class="fadein">
                        <dt>代表取締役</dt>
                        <dd><?php echo get_field('representative'); ?></dd>
                    </dl>
                    <dl class="fadein">
                        <dt>資本金</dt>
                        <dd><?php echo get_field('capital'); ?></dd>
                    </dl>
                    <dl class="fadein">
                        <dt>事業内容</dt>
                        <dd>クラウド業務管理ツールの開発・提供（SaaS事業）</dd>
                    </dl>
                    <dl class="fadein">
                        <dt>所在地</dt>
                        <dd><?php echo get_field('address'); ?></dd>
                    </dl>
                    <dl class="fadein">
                        <dt>電話番号</dt>
                        <dd><?php echo get_field('phone_number'); ?></dd>
                    </dl>
                    <dl class="fadein">
                        <dt>メールアドレス</dt>
                        <dd><?php echo get_field('email'); ?></dd>
                    </dl>
                    <dl class="fadein">
                        <dt>従業員数</dt>
                        <dd><?php echo get_field('employees'); ?></dd>
                    </dl>
                </div>
            </div>
        </section>

        <section class="future">
            <div class="wrapper">
                <h3 class="section-text fadein">Toward the Future</h3>
                <p class="text fadein"> Clarisyncは今後、AIや自動化を積極的に活用し、業務の最適化を次のステージへと進めます。<br>中小企業からグローバルチームまで、働くすべての人が軽やかに動ける未来を。<br>私たちはその実現に向けて、挑戦を続けます。</p>
            </div>
        </section>

        <section class="ask">
          <div class="wrapper">
            <h3 class="section-text fadein">一緒に、働き方の未来をつくりませんか？ </h3>
          </div>
          <div class="ask-btn">
            <a class="btn" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
          </div>
        </section>

    </main>

<?php get_footer(); ?>