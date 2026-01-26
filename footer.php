<footer id="footer">
      <div class="wrapper inner">
        <div class="footer-left">
          <div class="footer-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/logo.png" alt="Clarisync">
          </div>
          <div class="sns">
            <a href="https://x.com/i/flow/login"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/x.png" alt="X"></a>
            <a href="https://www.instagram.com/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/instagram.png" alt="Instagram"></a>
            <a href="https://www.facebook.com/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/facebook.png" alt="Facebook"></a>
          </div>
        </div>

        <div class="footer-right">
          <p class="location">
            〒141-0022<br>東京都品川区東五反田１丁目１−１ Xビル3F
          </p>
          <ul class="navi">
           <li><a href="<?php echo esc_url(home_url('/about')); ?>">ABOUT</a></li>
            <li><a href="<?php echo esc_url(home_url('/service')); ?>">SERVICE</a></li>
            <li><a href="<?php echo esc_url(home_url('/company')); ?>">COMPANY</a></li>
            <li><a href="<?php echo esc_url(home_url('/news')); ?>">NEWS</a></li>
            <li><a href="<?php echo esc_url(home_url('/recruit')); ?>">RECRUIT</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">CONTACT</a></li>
          </ul>
        </div>
      </div>
       <p class="copyright">© Clarisync inc.</p>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>