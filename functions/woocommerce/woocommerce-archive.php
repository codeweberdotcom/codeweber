<?php

/**
 * Show the product title in the product loop. By default this is an H2.
 */
function woocommerce_template_loop_product_title()
{

   global $product;

   $link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);

   echo '<h2 class="post-title h3 fs-18 link-dark ' . esc_attr(apply_filters('woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title')) . '"><a href="' . esc_url($link) . '" class="link-dark">' . get_the_title() . '</a></h2>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}


/**
 * Transport Image loop product on top item
 */
add_action('woocommerce_init', function () {
   remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
   add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 1);
});

/**
 * Loop Product ???
 */
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_after_shop_loop_item', 'postheaderblockbefore', 5);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 25);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 20);


function postheaderblockbefore()
{
   global $woocommerce, $product;
   $product_id = $product->get_id();

   echo '<div class="post-header"><div class="d-flex flex-row align-items-center justify-content-between mb-2">';
   if (class_exists('RankMath')) {
      $primary_tax =  (get_post_meta($product_id, 'rank_math_primary_product_cat', true));
      if (!empty($primary_tax)) {
         $category_primary = get_term_by('id', $primary_tax, 'product_cat');
         if (!empty($category_primary->name)) {
            $link_category = get_category_link($primary_tax);
            $category_primary_col = '<div class="post-category text-ash mb-0"><a href="' . $link_category . '" rel="tag">' . $category_primary->name . '</a></div>';
         } else {
            $category_primary_col = wc_get_product_category_list($product->get_id(), ', ', '<div class="post-category text-ash mb-0">' . _n('', '', count($product->get_category_ids()), 'woocommerce') . ' ', '</div>');
         }
      } else {
         $category_primary_col = wc_get_product_category_list($product->get_id(), ', ', '<div class="post-category text-ash mb-0">' . _n('', '', count($product->get_category_ids()), 'woocommerce') . ' ', '</div>');
      }
   } else {
      $category_primary_col = wc_get_product_category_list($product->get_id(), ', ', '<div class="post-category text-ash mb-0">' . _n('', '', count($product->get_category_ids()), 'woocommerce') . ' ', '</div>');
   };
   echo $category_primary_col;


   // Remove the product rating display on product loops
   remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

   $average = $product->get_average_rating();
   if ($average == 0) {
   } elseif ($average == 1) {
      echo '<span class="ratings one"></span>';
   } elseif ($average == 2) {
      echo '<span class="ratings two"></span>';
   } elseif ($average == 3) {
      echo '<span class="ratings three"></span>';
   } elseif ($average == 4) {
      echo '<span class="ratings four"></span>';
   } elseif ($average == 5) {
      echo '<span class="ratings five"></span>';
   }
   echo '</div>';
}


add_action('woocommerce_after_shop_loop_item', 'postheaderblockafter', 25);
function postheaderblockafter()
{
   echo '</div>';
}




/**
 * Insert the opening anchor tag for products in the loop.
 */
function woocommerce_template_loop_product_link_open()
{
   echo '<figure class="rounded mb-6">';
}


/**
 * Insert the closing anchor tag for products in the loop.
 */
function woocommerce_template_loop_product_link_close()
{
   echo '</figure>';
}
