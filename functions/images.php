<?php

/**
 * https://developer.wordpress.org/reference/functions/add_image_size/
 * add_image_size( $name:string, $width:integer, $height:integer, $crop:boolean|array )
 * array( 'x_crop_position', 'y_crop_position' )
 * x_crop_position > left center right
 * y_crop_position > top center bottom
 */

if (!function_exists('brk_image_settings')) {
	function brk_image_settings()
	{
		add_image_size('brk_big', 1400, 800, true);
		add_image_size('brk_square', 400, 400, true);
		add_image_size('brk_single', 800, 500, true);
		add_image_size('brk_post_sm', 140, 140, true);

		add_image_size('sandbox_hero_3', 590, 650, true);
		add_image_size('sandbox_hero_11', 575, 550, true);
		add_image_size('sandbox_hero_2', 625, 598, true);
		add_image_size('sandbox_hero_4', 901, 358, true);
		add_image_size('sandbox_hero_8', 388, 510, true);
		add_image_size('sandbox_hero_1', 800, 538, true);
		add_image_size('sandbox_hero_5', 1000, 625, true);
		add_image_size('sandbox_hero_14', 1200, 650, true);
		add_image_size('sandbox_hero_10', 1200, 581, true);
		add_image_size('sandbox_hero_18', 800, 800, true);

		add_image_size('sandbox_faq_1', 800, 590, true);

		add_image_size('sandbox_slider_1', 560, 350, true);
		add_image_size('sandbox_slider_2', 460, 307, true);



		// remove_image_size('large');
		// remove_image_size('thumbnail');
		// remove_image_size('medium');
		// remove_image_size('medium_large');
		remove_image_size('1536x1536');
		remove_image_size('2048x2048');
	}
}
add_action('after_setup_theme', 'brk_image_settings');


// --- Set image compression value ---
// https://developer.wordpress.org/reference/hooks/jpeg_quality/

// function brk_image_quality() {
// 	return 80;
// }
// add_filter( 'jpeg_quality', 'brk_image_quality' );
