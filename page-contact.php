<?php get_header(); ?>

    <main>
        <section class="contact">
            <div class="title">
                <h2 class="section-title head-trigger">CONTACT</h2>
            </div>

            <div class="inner">
                <h3 class="section-text">お問い合わせ</h3>
                <p class="text">ご不明点やご質問などございましたら、下記のフォームからお気軽にお問い合わせください。</p>
            </div>
        </section>

        <div class="wrapper">
            <section class="form-section">
                <div class="form-container">
                    <?php echo do_shortcode('[contact-form-7 id="501757e" title="Contact"]'); ?>
                </div>
            </section>
        </div>       

    </main>

<?php get_footer(); ?>

