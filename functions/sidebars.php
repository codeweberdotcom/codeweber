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
				'before_widget' => '<div class="widget mb-4 %2$s clearfix">',
				'after_widget' => '</div>',
				'before_title' => '<div class="widget-title mb-3">',
				'after_title' => '</div>',
				'before_sidebar' => '<div class="widget">
              <h4 class="widget-title mb-3">About Us</h4>
              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
            </div>',
			)
		);
	}
}

add_action('widgets_init', 'brk_sidebars');
