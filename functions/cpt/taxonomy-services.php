<?php

function cptui_register_my_taxes_service_category() {

	/**
	 * Taxonomy: Service Categories.
	 */

	$labels = [
		"name" => __( "Service Categories", "zinoviev-school" ),
		"singular_name" => __( "Service Category", "zinoviev-school" ),
	];

	
	$args = [
		"label" => __( "Service Categories", "zinoviev-school" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'service_category', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "service_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "service_category", [ "services" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_service_category' );


/**/ 

function cptui_register_my_taxes_types_of_services() {

	/**
	 * Taxonomy: Types.
	 */

	$labels = [
		"name" => __( "Types", "zinoviev-school" ),
		"singular_name" => __( "Type", "zinoviev-school" ),
	];

	
	$args = [
		"label" => __( "Types", "zinoviev-school" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'types_of_services', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "types_of_services",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "types_of_services", [ "services" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_types_of_services' );
