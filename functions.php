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
		'1.0.0'
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
