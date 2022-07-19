<?php

/**
 * https://developer.wordpress.org/themes/basics/including-css-javascript/
 */

if ( ! function_exists( 'brk_styles_scripts' ) ) {

	function brk_styles_scripts() {

		$theme_version = wp_get_theme()->get( 'Version' );

		// --- CSS ---

		wp_enqueue_style( 'google-fonts', get_template_directory_uri() . '/dist/css/fonts/urbanist.css', false, $theme_version, 'all'  );
		wp_enqueue_style( 'plugin-styles', get_template_directory_uri() . '/dist/css/plugins.min.css', false, $theme_version, 'all' );
		wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/dist/css/style.min.css', false, $theme_version, 'all' );
		wp_enqueue_style( 'color-styles', get_template_directory_uri() . '/dist/css/colors/navy.css', false, $theme_version, 'all' );


		// --- JS ---

		wp_enqueue_script( 'plugins-scripts', get_template_directory_uri() . '/dist/js/plugins.min.js', false, $theme_version, true );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/dist/js/theme.min.js', false, $theme_version, true );


		

	}
}

add_action( 'wp_enqueue_scripts', 'brk_styles_scripts' );


// Disable this action if not loading Google Fonts from their external server

function brk_google_fonts_preconnect() {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'brk_google_fonts_preconnect', 7 );
