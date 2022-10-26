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






// --- Register Custom Post Types & Taxonomies ---

foreach (glob(get_template_directory() . '/functions/cpt/*.php') as $cpt) {

	require_once $cpt;
};


require_once get_template_directory() . '/functions/global.php'; // --- Various global functions ---

require_once get_template_directory() . '/functions/integrations/acf.php'; // --- ACF integration ---

require_once get_template_directory() . '/functions/integrations/acf-icon/acf-icon-picker.php'; // --- ACF integration ---

require_once get_template_directory() . '/functions/integrations/cf7.php'; // --- Contact Form 7 integration ---

// require_once get_template_directory() . '/functions/searchfilter.php'; // --- Search results filter ---

require_once get_template_directory() . '/functions/cleanup.php'; // --- Cleanup ---

require_once get_template_directory() . '/functions/custom.php'; // --- Custom user functions ---


/** ACF Gutenberg Blocks */

require_once get_template_directory() . '/functions/integrations/acf-gutenberg-block/acf-gutenberg-block.php'; // --- Custom user functions ---


// --- Add comment helper ---//

require_once get_template_directory() . '/functions/lib/comments-helper.php'; // --- Comments Helper ---
require_once get_template_directory() . '/functions/comments-reply.php'; // --- Comments Reply Functions ---

// --- Add like dislike function ---// 

require_once get_template_directory() . '/functions/lib/like_dislike.php'; // --- Like Dislike Functions ---


// --- Check ACF ---//

if (!function_exists('get_field')) {
	add_action('template_redirect', 'template_redirect_warning_missing_acf', 0);
	function template_redirect_warning_missing_acf()
	{
		wp_die(sprintf('This theme can\'t work without ACF PRO plugin. <a href="%s">Please login to admin</a>, and activate it !', wp_login_url()));
	}
}


// --- Customizer --- //

require_once get_template_directory() . '/functions/customize.php'; // --- Customizer ---