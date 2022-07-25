<?php

/**
 * https://developer.wordpress.org/themes/functionality/navigation-menus/
 */

if (!function_exists('brk_navmenus')) {

	function brk_navmenus()
	{

		register_nav_menus(
			array(
				'header' => esc_html__('Header Menu', 'codeweber'),
				'footer' => esc_html__('Footer Menu', 'codeweber'),
				'footer_1' => esc_html__('Footer Menu 1', 'codeweber'),
			)
		);
	}
}

add_action('after_setup_theme', 'brk_navmenus');
