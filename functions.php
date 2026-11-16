<?php
/**
 * rakuen テーマの設定
 */

/**
 * テーマの機能を有効にする
 */
function rakuen_setup() {
	add_theme_support( 'title-tag' );       // <title> を WordPress がページごとに自動で出す
	add_theme_support( 'post-thumbnails' ); // アイキャッチ画像を使えるようにする（Week7 のブログで使う）

	// メニューの置き場所（棚）を登録する。表示は header.php / footer.php の wp_nav_menu で行う
	register_nav_menus(
		array(
			'global' => 'グローバルナビ（ヘッダー）', // '場所の名前' => '管理画面での表示名'
			'footer' => 'フッターメニュー',
		)
	);
}
add_action( 'after_setup_theme', 'rakuen_setup' );

/**
 * CSS / JS の読み込み
 */
function rakuen_enqueue_assets() {
	// Google Fonts（Week4 で <link> 直書きしていたもの）
	wp_enqueue_style(
		'rakuen-fonts',
		'https://fonts.googleapis.com/css2?family=EB+Garamond&family=Noto+Serif+JP:wght@400;500&display=swap',
		array(),
		null
	);

	// デザインの CSS（assets/css/style.css）。フォントの後に読む
	wp_enqueue_style(
		'rakuen-style',
		get_template_directory_uri() . '/assets/css/style.css',
		array( 'rakuen-fonts' ),
		'1.0.1'
	);

	// JS（assets/js/main.js）。jQuery は使っていないので依存なし。true = </body> の直前で読む
	wp_enqueue_script(
		'rakuen-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		'1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'rakuen_enqueue_assets' );

/**
 * メニューの li / a に Week4 と同じクラスを付ける（Week4 の CSS をそのまま効かせるため）
 */
function rakuen_nav_item_class( $classes, $item, $args ) {
	if ( isset( $args->theme_location ) && 'global' === $args->theme_location ) {
		$classes[] = 'global-nav__item'; // ヘッダーの <li>
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'rakuen_nav_item_class', 10, 3 );

function rakuen_nav_link_class( $atts, $item, $args ) {
	if ( isset( $args->theme_location ) && 'global' === $args->theme_location ) {
		$atts['class'] = 'global-nav__link'; // ヘッダーの <a>
	}
	if ( isset( $args->theme_location ) && 'footer' === $args->theme_location ) {
		$atts['class'] = 'site-footer__link'; // フッターの <a>
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'rakuen_nav_link_class', 10, 3 );
