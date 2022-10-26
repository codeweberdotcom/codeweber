<?php

function cptui_register_my_cpts_services()
{

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => __("Services", "codeweber"),
		"singular_name" => __("Service", "codeweber"),
	];

	$args = [
		"label" => __("Services", "codeweber"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => true,
		"rewrite" => ["slug" => "services", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "editor", "thumbnail", "excerpt", "revisions", "comments"],
		"taxonomies" => ["service_category", "types_of_services"],
		"show_in_graphql" => false,
	];

	register_post_type("services", $args);
}

add_action('init', 'cptui_register_my_cpts_services');



/**
 * Add a ACF Option page to the Services CPT
 */

if (
	function_exists('acf_add_options_page')
) {
	acf_add_options_page(array(
		'page_title'    => esc_html__('Service Options', 'codeweber'),
		'menu_title'    => esc_html__('Service Options', 'codeweber'),
		'parent_slug'   => 'edit.php?post_type=services',
		'menu_slug'     => 'options_service',
		'redirect'      => false
	));
}
