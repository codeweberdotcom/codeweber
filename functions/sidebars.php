<?php

/**
 * https://developer.wordpress.org/themes/functionality/sidebars/
 */

if (!function_exists('codeweber_sidebars')) {

	function codeweber_sidebars()
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
		register_sidebar(
			array(
				'name' => esc_html__('Page Sidebar', 'codeweber'),
				'id' => 'sidebar-page',
				'description' => esc_html__('Page Sidebar', 'codeweber'),
				'before_widget' => '<div class="widget mt-8 %2$s clearfix">',
				'after_widget' => '</div>',
				'before_title' => '<div class="widget-title mb-3">',
				'after_title' => '</div>',
				'before_sidebar' => '',
			)
		);
		register_sidebar(
			array(
				'name' => esc_html__('Services Sidebar', 'codeweber'),
				'id' => 'sidebar-services',
				'description' => esc_html__('Services Sidebar', 'codeweber'),
				'before_widget' => '<div class="widget mt-8 %2$s clearfix">',
				'after_widget' => '</div>',
				'before_title' => '<div class="widget-title mb-3">',
				'after_title' => '</div>',
				'before_sidebar' => '',
			)
		);

		register_sidebar(array(
			'name'          => __('Woocommerce sidebar', 'codeweber'),
			'id'            => 'woocommerce_sidebar',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
		));
	}
}

add_action('widgets_init', 'codeweber_sidebars');
