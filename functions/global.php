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
function codeweber_breadcrumbs($align)
{
	if (function_exists('yoast_breadcrumb')) {

		// http://yoa.st/breadcrumbs
		yoast_breadcrumb('<nav class="breadcrumb d-flex justify-content-center mt-3">', '</nav>');
	} elseif (function_exists('rank_math_the_breadcrumbs')) {

		if ($align == 'center') {
			// https://s.rankmath.com/breadcrumbs
			add_filter(
				'rank_math/frontend/breadcrumb/args',
				function ($args) {
					$args = array(
						'delimiter'   => '',
						'wrap_before' => '<nav class="d-inline-block" aria-label="breadcrumb"><ol class="breadcrumb mb-0 justify-content-center">',
						'wrap_after'  => '</ol></nav>',
						'before'      => '<li class="breadcrumb-item text-muted">',
						'after'       => '</li>',
					);
					return $args;
				}
			);
		} elseif ($align == 'right') {
			// https://s.rankmath.com/breadcrumbs
			add_filter(
				'rank_math/frontend/breadcrumb/args',
				function ($args) {
					$args = array(
						'delimiter'   => '',
						'wrap_before' => '<nav class="d-inline-block" aria-label="breadcrumb"><ol class="breadcrumb mb-0 justify-content-end">',
						'wrap_after'  => '</ol></nav>',
						'before'      => '<li class="breadcrumb-item text-muted">',
						'after'       => '</li>',
					);
					return $args;
				}
			);
		} else {
			// https://s.rankmath.com/breadcrumbs
			add_filter(
				'rank_math/frontend/breadcrumb/args',
				function ($args) {
					$args = array(
						'delimiter'   => '',
						'wrap_before' => '<nav class="d-inline-block" aria-label="breadcrumb"><ol class="breadcrumb mb-0">',
						'wrap_after'  => '</ol></nav>',
						'before'      => '<li class="breadcrumb-item text-muted">',
						'after'       => '</li>',
					);
					return $args;
				}
			);
		}
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

// Sandbox Frame Content Open Function 
function sandbox_frame_open()
{
	if (get_field('cw_frame_content') == 'default') {
		if (get_theme_mod('codeweber_frame_content') == 1) {
			echo '<div class="page-frame bg-light">';
		} else {
			return;
		}
	} elseif (get_field('cw_frame_content') == 'frame') {
		echo '<div class="page-frame bg-light">';
	} else {
		return;
	}
};


// Sandbox Frame Content Close Function
function sandbox_frame_close()
{
	if (get_field('cw_frame_content') == 'default') {
		if (get_theme_mod('codeweber_frame_content') == 1) {
			echo '</div>';
		} else {
			return;
		}
	} elseif (get_field('cw_frame_content') == 'frame') {
		echo '</div>';
	} else {
		return;
	}
};


/**
 * Page title Function 
 */
function codeweber_page_title()
{
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	if ($paged !== 1) {
		$page_num = '<span class="text-ash"> (Страница ' . $paged . ')</span>';
	} else {
		$page_num = NULL;
	}

	if (!is_front_page() || !is_home()) {
		if (class_exists('WooCommerce')) {
			if (is_shop()) {
				echo woocommerce_page_title() . $page_num;
			} elseif (is_post_type_archive('projects') && get_theme_mod('project_title')) {
				echo get_theme_mod('project_title');
			} elseif (is_tag() || is_category() || is_archive() || is_author()) {
				the_archive_title();
			} elseif (is_page()) {
				the_title();
			} elseif (is_search()) {
				esc_html_e('Results for: ', 'codeweber');
				the_search_query();
			} elseif (is_single()) {
				the_title();
			} else {
				echo esc_html(get_the_title(get_option('page_for_posts', true)));
			}
		} else {
			if (is_post_type_archive('projects') && get_theme_mod('project_title')) {
				echo get_theme_mod('project_title');
			} elseif (is_tag() || is_category() || is_archive() || is_author()) {
				the_archive_title();
			} elseif (is_page()) {
				the_title();
			} elseif (is_search()) {
				esc_html_e('Results for: ', 'codeweber');
				the_search_query();
			} elseif (is_single()) {
				the_title();
			} else {
				echo esc_html(get_the_title(get_option('page_for_posts', true)));
			}
		}
	} elseif (is_front_page() || is_home()) {
		echo esc_html(get_the_title(get_option('page_for_posts', true)));
	}
}

/**
 *  Nav Walker attributes fix for Bootstrap 5
 */

function brk_bs5_toggle_fix($atts)
{

	if (array_key_exists('data-toggle', $atts)) {
		unset($atts['data-toggle']);
		$atts['data-bs-toggle'] = 'dropdown';
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'brk_bs5_toggle_fix');



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
