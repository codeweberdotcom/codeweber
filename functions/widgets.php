<?php

/**
 * Register Header Right Area.
 *
 */
function codeweber_widgets_init()
{

   register_sidebar(array(
      'name'          => __('Header right sidebar', 'codeweber'),
      'id'            => 'header_right',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="rounded">',
      'after_title'   => '</h2>',
   ));

   register_sidebar(array(
      'name'          => __('Woocommerce sidebar', 'codeweber'),
      'id'            => 'woocommerce_sidebar',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="rounded">',
      'after_title'   => '</h2>',
   ));
}
add_action('widgets_init', 'codeweber_widgets_init');
