<!-- クラス名は Week4 の includes/footer.php と同じ（Week4 の CSS をそのまま使うため） -->
<footer class="site-footer">
  <div class="site-footer__inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-footer__logo">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-gold.png' ); ?>" alt="<?php bloginfo( 'name' ); ?> RAKUENGAEN" width="230" height="90" loading="lazy">
    </a>

    <nav class="site-footer__nav" aria-label="フッターナビ">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'footer',                // functions.php で登録した棚の名前
          'container'      => false,
          'menu_class'     => 'site-footer__nav-list', // Week4 と同じクラス
          'fallback_cb'    => false,
        )
      );
      ?>
    </nav>

    <!-- 小さいリンク（運営会社・規約）。ページを作るまでは手書きのまま -->
    <ul class="site-footer__sub">
      <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="site-footer__link">運営会社情報</a></li>
      <li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>" class="site-footer__link">プライバシーポリシー</a></li>
      <li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>" class="site-footer__link">利用規約</a></li>
    </ul>

    <p class="site-footer__copy"><small>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></small></p>
  </div>
</footer>

<?php wp_footer(); // JS（main.js）を </body> の直前に出す。必須 ?>
</body>
</html>
