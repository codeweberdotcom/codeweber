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


// --- Register Custom Post Types & Taxonomies --- //
foreach (glob(get_template_directory() . '/functions/cpt/*.php') as $cpt) {
  require_once $cpt;
};

// --- Add Theme Functions --- //
require_once get_template_directory() . '/functions/global.php'; // --- Various global functions ---
require_once get_template_directory() . '/functions/integrations/acf.php'; // --- ACF integration ---
require_once get_template_directory() . '/functions/integrations/acf-icon/acf-icon-picker.php'; // --- ACF integration ---
require_once get_template_directory() . '/functions/integrations/cf7.php'; // --- Contact Form 7 integration ---
// require_once get_template_directory() . '/functions/searchfilter.php'; // --- Search results filter ---
require_once get_template_directory() . '/functions/cleanup.php'; // --- Cleanup ---
require_once get_template_directory() . '/functions/custom.php'; // --- Custom user functions ---
require_once get_template_directory() . '/functions/admin.php'; // --- Custom user functions ---

// --- Contact Mail PHP --- //
//require_once get_template_directory() . '/dist/assets/php/contact.php'; // --- Custom user functions ---


// --- ACF Gutenberg Blocks --- //
require_once get_template_directory() . '/functions/integrations/acf-gutenberg-block/acf-gutenberg-block.php'; // --- Custom user functions ---


// --- Add Comment Helper --- //
require_once get_template_directory() . '/functions/lib/comments-helper.php'; // --- Comments Helper ---
require_once get_template_directory() . '/functions/comments-reply.php'; // --- Comments Reply Functions ---

// --- Add like dislike function --- // 
require_once get_template_directory() . '/functions/lib/like_dislike.php'; // --- Like Dislike Functions ---


// --- Check ACF ---//
if (!function_exists('get_field')) {
  add_action('template_redirect', 'template_redirect_warning_missing_acf', 0);
  function template_redirect_warning_missing_acf()
  {
    wp_die(sprintf(__('This theme can\'t work without ACF PRO plugin. <a href="%s">Please login to admin</a>, and activate it !', 'codeweber'), wp_login_url()));
  }
}

// --- Customizer --- //
require_once get_template_directory() . '/functions/customize.php'; // --- Customizer ---

// --- Widgets ---//
require_once get_template_directory() . '/functions/widgets.php'; // --- Custom Widgets ---

// --- Classes --- //
require_once get_template_directory() . '/functions/cw_classes/cw_classes.php'; // --- Classes CW ---

require_once get_template_directory() . '/functions/classes/classes.php'; // --- Classes OLD ---

if (class_exists('WooCommerce')) {
  // --- Woocommerce ---//
  require_once get_template_directory() . '/functions/woocommerce/woocommerce.php'; // --- Woocommerce Functions ---
}






/* HTML Block */
add_shortcode('html_block', 'html_block_shortcode');
function html_block_shortcode($atts)
{
  $atts = shortcode_atts([
    'post_id'  => NULL,
  ], $atts);

  $post = get_post($atts['post_id']); // specific post
  $the_content = apply_filters('the_content', $post->post_content);
  if (!empty($the_content)) {
    $test =  $the_content;
  }


  return $test;
}

add_filter('manage_edit-html_blocks_columns', 'my_columns');
function my_columns($columns)
{
  $columns['views'] = 'Views';

  return $columns;
}


add_filter('manage_edit-html_blocks_columns', 'posts_columns_id', 5);
add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);



function posts_columns_id($defaults)
{
  $defaults['wps_post_id'] = __('Shortcode');
  return $defaults;
}

function posts_custom_id_columns($column_name, $id)
{
  if ($column_name === 'wps_post_id') {
    echo "[html_block post_id='";
    echo $id;
    echo "']";
  }
}
