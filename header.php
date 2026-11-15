<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">

  <!-- favicon（Week4 と同じ画像。場所はテーマの assets/images） -->
  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/favicon-32.png' ); ?>" sizes="32x32">
  <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apple-touch-icon.png' ); ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); // CSS（02 で並べたもの）と <title> をここに出す。必須 ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- クラス名は Week4 の includes/header.php と同じ（Week4 の CSS と main.js をそのまま使うため） -->
<header class="site-header<?php echo is_front_page() ? ' site-header--top' : ''; ?>">
  <div class="site-header__inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-white.png' ); ?>" alt="<?php bloginfo( 'name' ); ?> RAKUENGAEN" width="150" height="59">
    </a>

    <nav class="global-nav" aria-label="グローバルナビ">
      <div class="global-nav__panel">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'global',           // functions.php で登録した棚の名前
            'container'      => false,              // 余計な <div> で囲まない
            'menu_class'     => 'global-nav__list', // <ul> に付けるクラス（Week4 と同じ）
            'fallback_cb'    => false,              // メニューが無い時は何も出さない
          )
        );
        ?>
      </div>
    </nav>

    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="site-header__reserve">予約</a>

    <button class="site-header__toggle" aria-label="menu メニューを開く" aria-expanded="false">
      <span class="site-header__toggle-lines"><span></span><span></span><span></span></span>
      <span class="site-header__toggle-text">menu</span>
    </button>
  </div>
</header>
