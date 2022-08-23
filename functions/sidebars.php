<?php

/**
 * https://developer.wordpress.org/themes/functionality/sidebars/
 */

if (!function_exists('brk_sidebars')) {

	function brk_sidebars()
	{
		register_sidebar(
			array(
				'name' => esc_html__('Main Sidebar', 'codeweber'),
				'id' => 'sidebar-main',
				'description' => esc_html__('Main Sidebar', 'codeweber'),
				'before_widget' => '<div class="widget mt-8 %2$s clearfix">',
				'after_widget' => '</div>',
				'before_title' => '<div class="widget-title mb-3">',
				'after_title' => '</div>',
				'before_sidebar' => '',
			)
		);
	}
}

add_action('widgets_init', 'brk_sidebars');
