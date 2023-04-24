<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php global $forms; ?>
	<?php $forms = array(); ?>
</head>

<body <?php body_class(); ?>>
	<?php sandbox_page_loader(); ?>
	<?php do_action('codeweber_start_body'); // Hook start body 
	?>
	<?php wp_body_open(); ?>
	<?php sandbox_frame_open(); ?>
	<div id="content-wrapper" class="content-wrapper">
		<?php global $codeweber; ?>
		<?php do_action('codeweber_start_content_wrapper'); // Hook start content wrapper 

		if (is_category() || is_tag() || is_tax()) {
			$taxonomy_prefix = 'term';
			$term_id = get_queried_object_id();
			$term_id_prefixed = $taxonomy_prefix . '_' . $term_id;
			$codeweber['global']['page_id'] = $taxonomy_prefix . '_' . $term_id;
		} else {
			$term_id_prefixed = NULL;
			$codeweber['global']['page_id'] = NULL;
		}

		global $wp_query;
		if (isset($wp_query->query['pagename'])) {
			if ($wp_query->query['pagename'] == 'blog') {
				$blog =  true;
				$codeweber['global']['blog'] = true;
			}
		} else {
			$blog =  false;
		}

		if (is_post_type_archive('services') || is_tax('service_category') || is_singular('services')) {
			if (!is_post_type_archive('services') && get_field('cw_transparent_header') && get_field('cw_transparent_header') !== 'default') {
				$codeweber['page_settings']['header_style'] = get_field('cw_transparent_header');
			} elseif (get_theme_mod('codeweber_header_service_style') == 'default') {
				$codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_style');
			} else {
				$codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_service_style');
			}

			if (!is_post_type_archive('services') && get_field('header_background_color') !== 'default' && get_field('cw_transparent_header') !== 'transparent' && get_theme_mod('codeweber_header_style') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_field('header_background_color');
			} elseif (get_theme_mod('codeweber_header_service_bg') == 'default' && get_theme_mod('codeweber_header_style') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_header_bg');
			} elseif (get_theme_mod('codeweber_header_service_style') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_header_service_bg');
			} else {
				$codeweber['page_settings']['header_bg_color'] = NULL;
			}

			if (!is_post_type_archive('services') && get_field('navbar_color') !== 'default') {
				$codeweber['page_settings']['nav_color'] = get_field('navbar_color');
			} elseif (get_theme_mod('codeweber_header_service_color') && get_theme_mod('codeweber_header_service_color') !== 'default') {
				$codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_service_color');
			} elseif (get_theme_mod('codeweber_header_color') && get_theme_mod('codeweber_header_color') !== 'default') {
				$codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_color');
			} else {
				$codeweber['page_settings']['nav_color'] = 'navbar-light';
			}
		} elseif (is_post_type_archive('testimonials')) {
			echo 'testimonials';
			if (get_theme_mod('codeweber_header_testimonial_style') !== 'default') {
				$codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_testimonial_style');
			} else {
				$codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_style');
			}

			if (get_theme_mod('codeweber_header_testimonial_bg') == 'default' && get_theme_mod('codeweber_header_style') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_header_bg');
			} elseif (get_theme_mod('codeweber_header_testimonial_bg') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_header_testimonial_bg');
			} else {
				$codeweber['page_settings']['header_bg_color'] = NULL;
			}

			if (get_theme_mod('codeweber_header_testimonial_color') !== 'default') {
				$codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_testimonial_color');
			} elseif (get_theme_mod('codeweber_header_color')) {
				$codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_color');
			} else {
				$codeweber['page_settings']['nav_color'] = 'navbar-light';
			}
		} elseif (is_post_type_archive('faq')) {
			echo 'faq';
			if (get_theme_mod('codeweber_header_faq_style') !== 'default') {
				$codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_faq_style');
			} else {
				$codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_style');
			}

			if (get_theme_mod('codeweber_header_faq_bg') == 'default' && get_theme_mod('codeweber_header_style') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_header_bg');
			} elseif (get_theme_mod('codeweber_header_faq_bg') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_header_faq_bg');
			} else {
				$codeweber['page_settings']['header_bg_color'] = NULL;
			}

			if (get_theme_mod('codeweber_header_faq_color') !== 'default') {
				$codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_faq_color');
			} elseif (get_theme_mod('codeweber_header_color')) {
				$codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_color');
			} else {
				$codeweber['page_settings']['nav_color'] = 'navbar-light';
			}
		} elseif (is_post_type_archive('projects')) {
			echo 'projects';
			if (get_theme_mod('codeweber_header_project_style') !== 'default') {
				$codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_project_style');
			} else {
				$codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_style');
			}

			if (get_theme_mod('codeweber_header_project_bg') == 'default' && get_theme_mod('codeweber_header_style') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_header_bg');
			} elseif (get_theme_mod('codeweber_header_project_bg') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_header_project_bg');
			} else {
				$codeweber['page_settings']['header_bg_color'] = NULL;
			}

			if (get_theme_mod('codeweber_header_project_color') !== 'default') {
				$codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_project_color');
			} elseif (get_theme_mod('codeweber_header_color')) {
				$codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_color');
			} else {
				$codeweber['page_settings']['nav_color'] = 'navbar-light';
			}
		} elseif (is_page()) {
			if (get_field('cw_transparent_header') && get_field('cw_transparent_header') !== 'default') {
				$codeweber['page_settings']['header_style'] = get_field('cw_transparent_header');
			} else {
				$codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_style');
			}

			if (get_field('header_background_color') !== 'default' && get_field('cw_transparent_header') !== 'transparent' && get_theme_mod('codeweber_header_style') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_field('header_background_color');
			} elseif (get_theme_mod('codeweber_header_bg') && get_field('cw_transparent_header') !== 'transparent' && get_theme_mod('codeweber_header_style') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_header_bg');
			} else {
				$codeweber['page_settings']['header_bg_color'] = NULL;
			}

			if (get_field('navbar_color') == 'default') {
				$codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_color');
			} elseif (get_field('navbar_color') !== 'default') {
				$codeweber['page_settings']['nav_color'] = get_field('navbar_color');
			} else {
				$codeweber['page_settings']['nav_color'] = 'navbar-light';
			}
		} elseif ($blog == true || is_single() || is_category() || is_tag() || is_author()) {

			if (get_field('cw_transparent_header', $term_id_prefixed) == 'default') {
				$codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_blog_style');
			} else {
				$codeweber['page_settings']['header_style'] = get_field('cw_transparent_header', $term_id_prefixed);
			}

			if (get_field('header_background_color', $term_id_prefixed) !== 'default' && get_field('cw_transparent_header', $term_id_prefixed) !== 'transparent' && get_theme_mod('codeweber_header_style') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_field('header_background_color', $term_id_prefixed);
			} elseif (get_theme_mod('codeweber_header_blog_bg') && get_field('cw_transparent_header', $term_id_prefixed) !== 'transparent' && get_theme_mod('codeweber_header_style') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_header_blog_bg');
			} else {
				$codeweber['page_settings']['header_bg_color'] = NULL;
			}

			if (get_field('navbar_color', $term_id_prefixed) == 'default') {
				$codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_blog_color');
			} elseif (get_field('navbar_color') !== 'default') {
				$codeweber['page_settings']['nav_color'] = get_field('navbar_color', $term_id_prefixed);
			} else {
				$codeweber['page_settings']['nav_color'] = 'navbar-light';
			}
		} else {

			if (get_field('header_background_color', $term_id_prefixed) !== 'default' && get_field('cw_transparent_header', $term_id_prefixed) !== 'transparent' && get_theme_mod('codeweber_header_style') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_field('header_background_color', $term_id_prefixed);
			} elseif (get_theme_mod('codeweber_header_bg') && get_field('cw_transparent_header', $term_id_prefixed) !== 'transparent' && get_theme_mod('codeweber_header_style') !== 'transparent') {
				$codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_header_bg');
			} else {
				$codeweber['page_settings']['header_bg_color'] = NULL;
			}

			if (get_field('navbar_color', $term_id_prefixed) == 'default') {
				$codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_color');
			} elseif (get_field('navbar_color') !== 'default') {
				$codeweber['page_settings']['nav_color'] = get_field('navbar_color', $term_id_prefixed);
			} else {
				$codeweber['page_settings']['nav_color'] = 'navbar-light';
			}
		}


		if (get_field('header', $term_id_prefixed) && get_field('header', $term_id_prefixed) !== 'default') {
			get_template_part('templates/header/header', get_field('header', $term_id_prefixed));
		} else {
			get_template_part('templates/header/header', get_theme_mod('codeweber_header'));
		}



		do_action('codeweber_after_header'); // Hook after header
