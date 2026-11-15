<?php
/**
 * rakuen テーマの設定
 */

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
