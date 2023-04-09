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
		<?php do_action('codeweber_start_content_wrapper'); // Hook start content wrapper 

		if (is_category() || is_tag() || is_tax()) {
			$taxonomy_prefix = 'term';
			$term_id = get_queried_object_id();
			$term_id_prefixed = $taxonomy_prefix . '_' . $term_id;
		} else {
			$term_id_prefixed = get_the_ID();
		}

		if (get_field('cw_transparent_header', $term_id_prefixed) == 'default') {
			$params = ['style_nav' => get_theme_mod('codeweber_header_style')];
		} elseif (get_field('cw_transparent_header', $term_id_prefixed) == 'transparent') {
			$params = ['style_nav' => 'transparent'];
		} elseif ((get_field('cw_transparent_header', $term_id_prefixed) == 'solid')) {
			$params = ['style_nav' => 'solid'];
		} else {
			$params = ['style_nav' => get_theme_mod('codeweber_header_style')];
		}


		if (get_field('navbar_color', $term_id_prefixed) == 'default' || get_field('navbar_color', $term_id_prefixed) == false) {
			if (get_theme_mod('codeweber_header_color') == 'dark') {
				$params['bg_nav'] = 'navbar-dark';
			} elseif (get_theme_mod('codeweber_header_color') == 'light') {
				$params['bg_nav'] = 'navbar-light';
			}
		} elseif (get_field('navbar_color', $term_id_prefixed) == 'dark') {
			$params['bg_nav'] = 'navbar-dark';
		} elseif (get_field('navbar_color', $term_id_prefixed) == 'light') {
			$params['bg_nav'] = 'navbar-light';
		}


		if (get_field('header', $term_id_prefixed) && get_field('header', $term_id_prefixed) !== 'default') {
			get_template_part('templates/header/header', get_field('header', $term_id_prefixed), $params);
		} else {
			get_template_part('templates/header/header', get_theme_mod('codeweber_header'), $params);
		}
		do_action('codeweber_after_header'); // Hook after header