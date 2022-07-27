<?php

/**
 *  https://developer.wordpress.org/themes/basics/theme-functions/
 */

require_once get_template_directory() . '/functions/setup.php'; // --- Theme setup ---

require_once get_template_directory() . '/functions/enqueues.php'; // --- Include CSS & JavaScript ---

require_once get_template_directory() . '/functions/images.php'; // --- Image settings ---

require_once get_template_directory() . '/functions/navmenus.php'; // --- Register navmenus ---

require_once get_template_directory() . '/functions/sidebars.php'; // --- Register sidebars ---

require_once get_template_directory() . '/functions/lib/class-wp-bootstrap-navwalker.php'; // --- Nav Walker ---

foreach (glob(get_template_directory() . '/functions/cpt/*.php') as $cpt) {
	require_once $cpt;
}; // --- Register Custom Post Types & Taxonomies ---

require_once get_template_directory() . '/functions/global.php'; // --- Various global functions ---

require_once get_template_directory() . '/functions/integrations/acf.php'; // --- ACF integration ---

require_once get_template_directory() . '/functions/integrations/cf7.php'; // --- Contact Form 7 integration ---

// require_once get_template_directory() . '/functions/searchfilter.php'; // --- Search results filter ---

require_once get_template_directory() . '/functions/cleanup.php'; // --- Cleanup ---

require_once get_template_directory() . '/functions/custom.php'; // --- Custom user functions ---

// --- New Gutenberg Layout---





function checkCategoryOrder($categories)
{
	//custom category array
	$temp = array(
		'slug'  => 'codeweber',
		'title' => 'Codeweber Blocks'
	);
	//new categories array and adding new custom category at first location
	$newCategories = array();
	$newCategories[0] = $temp;

	//appending original categories in the new array
	foreach ($categories as $category) {
		$newCategories[] = $category;
	}

	//return new categories
	return $newCategories;
}
add_filter('block_categories_all', 'checkCategoryOrder', 99, 1);

// --- ACF Flexible Block

add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init()
{

	// Check function exists.
	if (function_exists('acf_register_block_type')) {

		// Register a hero_banner block.
		acf_register_block_type(array(
			'name'              => 'hero_banner',
			'title'             => __('Hero banner'),
			'description'       => __('A custom flexible block.'),
			'render_template'   => 'templates/flexible-content/hero_banner.php',
			'enqueue_style' => get_template_directory_uri() . '/templates/flexible-content/flexible-block.css',
			'category'          => 'codeweber',
			'align'           => 'full',
			'supports'        => array(
				'align'        => array('full'),
				'align'        => true,
			),
			'mode' => 'preview',

		));

		acf_register_block_type(
			array(
				'name'              => 'features',
				'title'             => __('Features'),
				'description'       => __('Features.'),
				'render_template'   => 'templates/flexible-content/features.php',
				'enqueue_style' => get_template_directory_uri() . '/templates/flexible-content/flexible-block.css',
				'category'          => 'codeweber',
				'mode'					=> 'auto',
				'align'           => 'full',
				'supports'        => array(
					'align'        => array('full'),
					'align'        => true,
				),
				'mode' => 'preview',

			)

		);

		acf_register_block_type(
			array(
				'name'              => 'facts',
				'title'             => __('Facts'),
				'description'       => __('Facts.'),
				'render_template'   => 'templates/flexible-content/facts.php',
				'enqueue_style' => get_template_directory_uri() . '/templates/flexible-content/flexible-block.css',
				'category'          => 'codeweber',
				'mode'					=> 'auto',
				'align'           => 'full',
				'supports'        => array(
					'align'        => array('full'),
					'align'        => true,
				),
				'mode' => 'preview',

			)

		);
	}
}
