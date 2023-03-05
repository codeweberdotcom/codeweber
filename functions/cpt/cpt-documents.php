<?php

function cptui_register_my_cpts_documents()
{

   /**
    * Post Type: Documents.
    */

   $labels = [
      "name" => esc_html__("Documents", "codeweber"),
      "singular_name" => esc_html__("Document", "codeweber"),
      "menu_name" => esc_html__("Documents", "codeweber"),
   ];

   $args = [
      "label" => esc_html__("Documents", "codeweber"),
      "labels" => $labels,
      "description" => "",
      "public" => false,
      "publicly_queryable" => false,
      "show_ui" => false,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "rest_namespace" => "wp/v2",
      "has_archive" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "can_export" => false,
      "rewrite" => ["slug" => "documents", "with_front" => true],
      "query_var" => true,
      "supports" => ["title"],
      "taxonomies" => ["category"],
      "show_in_graphql" => false,
   ];

   register_post_type("documents", $args);
}

add_action('init', 'cptui_register_my_cpts_documents');
