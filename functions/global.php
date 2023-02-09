<?php
include 'global_function/faq_functions.php';
include 'global_function/page_functions.php';
include 'global_function/services_functions.php';
include 'global_function/project_functions.php';
include 'global_function/testimonial_functions.php';


/**
 * Enable SVG support ---
 */

function brk_svg_upload($mimes)
{
	$mimes['svg']  = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';

	return $mimes;
}
add_filter('upload_mimes', 'brk_svg_upload');

function brk_svg_mimetype($data = null, $file = null, $filename = null, $mimes = null)
{
	$ext = isset($data['ext']) ? $data['ext'] : '';
	if (strlen($ext) < 1) {
		$exploded = explode('.', $filename);
		$ext      = strtolower(end($exploded));
	}
	if ('svg' === $ext) {
		$data['type'] = 'image/svg+xml';
		$data['ext']  = 'svg';
	} elseif ('svgz' === $ext) {
		$data['type'] = 'image/svg+xml';
		$data['ext']  = 'svgz';
	}

	return $data;
}
add_filter('wp_check_filetype_and_ext', 'brk_svg_mimetype', 10, 4);



//??? --- Excerpt lenght --- 
function brk_excerpt_length($length)
{
	return 40;
}
// add_filter( 'excerpt_length', 'brk_excerpt_length', 999 );


//??? --- Thumbnail alt --- BRK Old
// Echoes the "alt" value of a post thumbnail as inserted in the media gallery

function brk_thumbnail_alt()
{
	$brk_thumbnail_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
	echo esc_attr($brk_thumbnail_alt);
}


// --- Breadcrumbs ---
function codeweber_breadcrumbs()
{
	if (function_exists('yoast_breadcrumb')) {

		// http://yoa.st/breadcrumbs
		yoast_breadcrumb('<nav class="breadcrumb d-flex justify-content-center mt-3">', '</nav>');
	} elseif (function_exists('rank_math_the_breadcrumbs')) {

		// https://s.rankmath.com/breadcrumbs
		add_filter(
			'rank_math/frontend/breadcrumb/args',
			function ($args) {

				if (get_theme_mod('codeweber_page_header') == 'type_3') {
					$align_breadcrumb = 'justify-content-center';
				} else {
					$align_breadcrumb = NULL;
				}

				$args = array(
					'delimiter'   => '',
					'wrap_before' => '<nav class="d-inline-block" aria-label="breadcrumb"><ol class="breadcrumb mb-0 ' . $align_breadcrumb . '">',
					'wrap_after'  => '</ol></nav>',
					'before'      => '<li class="breadcrumb-item text-muted">',
					'after'       => '</li>',
				);
				return $args;
			}
		);
		rank_math_the_breadcrumbs();
	} elseif (function_exists("seopress_display_breadcrumbs")) {
		seopress_display_breadcrumbs();
	}
}

add_filter('woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs');
function jk_woocommerce_breadcrumbs()
{
	return array(
		'delimiter' => '',
		'wrap_before' => '<nav class="d-inline-block" aria-label="breadcrumb"><ol class="breadcrumb mb-0">',
		'wrap_after' => '</ol></nav>',
		'before' => '<li class="breadcrumb-item">',
		'after' => '</li>',
	);
}


add_filter('rank_math/frontend/breadcrumb/html', function ($html, $crumbs, $class) {
	$html = str_replace('<span class="separator"> - </span>', '', $html);
	return $html;
}, 10, 3);


add_filter(
	'rank_math/frontend/breadcrumb/html',
	function ($html, $crumbs, $class) {
		$html = str_replace('<span class="last">' . get_the_title() . '</span>', '<span class="text-muted">' . get_the_title() . '</span>', $html);
		return $html;
	},
	10,
	3
);


// // --- Nav Walker attributes fix for Bootstrap 5 ---
// function brk_bs5_toggle_fix($atts)
// {

// 	if (array_key_exists('data-toggle', $atts)) {
// 		unset($atts['data-toggle']);
// 		$atts['data-bs-toggle'] = 'dropdown';
// 	}
// 	return $atts;
// }
// add_filter('nav_menu_link_attributes', 'brk_bs5_toggle_fix');



/**
 * Navbar Classes
 */
function codeweber_is_active_nav_item($item, $args)
{
	if (!property_exists($args, 'walker') || !is_a($args->walker, 'WP_Bootstrap_Navwalker')) {
		return false;
	}
	if (!$item->current && !$item->current_item_ancestor) {
		return false;
	}
	return true;
}


function codeweber_add_active_class_to_anchor($atts, $item, $args)
{
	if (false === codeweber_is_active_nav_item($item, $args)) {
		return $atts;
	}
	if (isset($atts['class'])) {
		$atts['class'] .= ' active';
	} else {
		$atts['class'] = 'active';
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'codeweber_add_active_class_to_anchor', 10, 3);


function brk_remove_active_class_from_li($classes, $item, $args)
{
	if (false === codeweber_is_active_nav_item($item, $args)) {
		return $classes;
	}
	return array_diff($classes, array('active'));
}
add_filter('nav_menu_css_class', 'brk_remove_active_class_from_li', 10, 3);
