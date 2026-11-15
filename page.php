<?php
/**
 * 固定ページの共通テンプレート（運営会社・サービスなど）
 * 探す順：page-{スラッグ}.php → page.php（このファイル） → index.php
 */
get_header();
?>

<main>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // ループ：表示するページを1件取り出す ?>

    <!-- 下層ページ共通の見出し（Week4 の includes/parts/page-head.php と同じクラス） -->
    <div class="page-head">
      <div class="page-head__inner">
        <nav class="breadcrumb" aria-label="パンくずリスト">
          <ol class="breadcrumb__list">
            <li class="breadcrumb__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a></li>
            <li class="breadcrumb__item" aria-current="page"><?php the_title(); ?></li>
          </ol>
        </nav>
        <h1 class="page-head__title"><?php the_title(); // 管理画面で入れたタイトル ?></h1>
      </div>
    </div>

    <div class="page-body">
      <?php the_content(); // 管理画面で書いた本文 ?>
    </div>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
